<script type="text/javascript">
  $(document).ready(function(){
  $("#starred_tab").on("click",function(e){
      e.preventDefault();
       $.ajax({
            url:"/social-starred",
            type:'GET',
            success:function (result){
                    $("#starred").html(result);
                    },
            error:function(error){
              console.log(error);
            }
        });

    });
    {{-- ./Get Starred Post Data --}}
    {{-- Get All post data at Tab --}}
    $("#all_tab_link").on("click",function(e){
      e.preventDefault();
       $.ajax({
            url:"/social-all",
            type:'GET',
            success:function (result){
              $("#all_tab").children().children().next().html(result);
                    },
            error:function(error){
              console.log(error);
            }
        });

    });  
    {{-- ./Get All post data at Tab --}}
    {{-- Starred Status --}}
    $(".star_link").on("click",function(e){
      e.preventDefault();
        var obj=this;
        // console.log($(this).parent().parent().parent().attr("id"));
       $.ajax({
                url: $(this).attr("href"),
                type:'GET',
                success:function (result){
                if(($(obj).find('img').attr("class"))==('star_gold_icon'))
                {
                  if($(obj).parent().parent().parent().attr("id")=='starred')
                  {
                    $($(obj).parent().parent()).remove();
                  }
                  else
                  {
                    $(obj).find('img').attr("src","/img/socialpost_interaction/star/star-grey.png");
                    $(obj).find('img').attr("class","star_grey_icon");
                    $(obj).attr("href","/star/"+$(obj).data("postid"));
                  }
                }
                else
                {
                  $(obj). find('img').attr("src","/img/socialpost_interaction/star/star-gold.png");
                  $(obj).find('img').attr("class","star_gold_icon");
                  $(obj).attr("href",'/starred/'+$(obj).data("postid"));
                }
              }
          });
      });
  });

</script>

@foreach($data['post']['data'] as $post)
          <article id="article{{$post['postID']}}" class="post" data-postid="{{$post['postID']}}">
            <div id="{{'postBody'.$post['postID']}}" data-postbody="{{$post['postBody']}}">
              {!! $post['postBody'] !!}
            </div>
            <div class="info">
                {{-- posted by {{ $post['userName'] }} on {{ $post['createdAt']['date'] }} --}}
                posted by {{ $post['userName'] }} on {{  \Carbon\Carbon::parse($post['createdAt']['date'])->toDayDateTimeString() }}
            </div>
            {{-- Reaction --}}
            <div class="interaction">
                  {{-- Reaction --}}
                  @if(is_null($post['userReactionID']))
                      {{-- Reaction Are available In App --}}
                      {{-- parent_div_reaction --}}
                      <div class="parent_div_reaction" style="display: inline;">
                      <div class="div_reaction_on_hover">
                        @foreach($data['notReactionData'] as $reaction )
                            <form action="{{ asset('/postreaction') }}" method="post" style ="display:inline;" >
                              {{csrf_field()}}
                              <input type="hidden" name="postID" value="{{$post['postID']}}">
                              <input type="hidden" name="reaction" value="{{$reaction->reaction_id}}">

                              <input type="image" id="like" name="like" alt="Login"
                                  src="{{asset($reaction->reaction_image)}}" class="submit_image">

                            </form>
                        @endforeach
                      </div>
                      {{-- ./div_reaction_on_hover --}}
                      <div class="divReactionHover" style="display: inline;">
                      <form action="{{ asset('/postreaction') }}" method="post" style ='display:inline;' >
                          {{csrf_field()}}
                          <input type="hidden" name="postID" value="{{$post['postID']}}">
                          <input type="hidden" name="reaction" value="{{$data['notReactionData']['0']->reaction_id}}">
                          
                          <input class="reaction_image" type="image" id="like" name="like" alt="Login" value="{{$data['notReactionData']['0']->reaction_name}}" src="{{asset("/img/reaction/like.png")}}" class="submit_image" width="22" height="auto" >


                      </form>
                    </div>
                    {{-- ./divReactionHover --}}
                  </div>
                  {{-- ./parent_div_reaction --}}

                      {{-- ./Reaction Are available In App --}}
                      {{-- POst Reaction Count --}}
                      @if($post['reactionCount'])
                         &nbsp; &nbsp; <strong>{{$post['reactionCount']}}</strong>
                      @else
                      @endif
                      {{-- ./POst Reaction Count --}}
                  @else
                    {{-- reacted --}}
                    {{-- parent_div_reaction --}}
                      <div class="parent_div_reaction" style="display: inline;">
                      <div class="div_reaction_on_hover">
                        @foreach($data['notReactionData'] as $reaction )
                            <form action="{{ asset('/postreaction/'.$post['userPostReactionID']) }}" method="post" style ='display:inline;' >
                              {{csrf_field()}}
                              @method('PUT')
                              <input type="hidden" name="reaction" value="{{$reaction->reaction_id}}">
                              <input type="image" id="like" name="like" alt="Login" src="{{asset($reaction->reaction_image)}}" class="submit_image">
                            </form>
                        @endforeach
                      </div>
                      {{-- ./div_reaction_on_hover --}}
                      {{-- divReactionHover --}}
                      <div class="divReactionHover" style="display: inline;">
                      <form action="{{ asset('/postreaction/'.$post['userPostReactionID']) }}" method="post" style ='display:inline;' >
                          {{csrf_field()}}
                          @method('DELETE')
                          <input class="reaction_image" type="image" id="like" name="like" alt="Login" src="{{asset($post['userReactionImg'])}}" class="submit_image" width="20" height="auto">
                      </form>
                    </div>
                    {{-- ./divReactionHover --}}
                  </div>
                  {{-- ./parent_div_reaction --}}

                      &nbsp; &nbsp; <strong>{{$post['reactionCount']}}</strong> 
                  @endif
                  {{-- ./Reaction --}}
                  | 
                  <a href="" class="comment"><span><img src="{{asset("/img/comment/comment.png")}}" width="20" height="auto"></span>Comment</a>  |
                  @if(Auth::user()->id == $post['userID'])
                    <a href="{{asset('/')}}" class="editPost">Edit </a>|
                    <a href="{{ asset('socialdel'.'/' .$post['postID'])}}">Delete</a> | 
                  @endif


                  @if($post['starStatus'])
                    <a class="star_link" data-postid="{{$post['postID']}}" href="{{asset('/starred/'.$post['postID'])}}"><span><img class="star_gold_icon" src="{{asset("/img/socialpost_interaction/star/star-gold.png")}}" width="20" height="auto"></span></a>|
                  @else
                  <a class="star_link" data-postid="{{$post['postID']}}" href="{{asset('/star/'.$post['postID'])}}"><span><img class="star_grey_icon" src="{{asset("/img/socialpost_interaction/star/star-grey.png")}}" width="20" height="auto"></span></a>|
                  @endif
                                                     
                   {{-- Comment --}}
                <div class="comment_div card">
                  <div class="card-body">
                    {{-- Comment Display --}}
                    @foreach($post['comment'] as $comment)
                      <div class="comment_update_parent" id="comment_updated_child{{$comment['commentID']}}">  
                        <div id="comment_view{{$comment['commentID']}}" class="comment_view abcd" data-comment="{{$comment['commentID']}}" id="indexComment_div.{{$comment['commentID']}}">{{$comment['commentBody']}}
                        </div>
                      
                      <div class="comment_update_child" > 

                   
                        <form action="{{route('editComment',['id'=>$comment['commentID']])}}" method="post" class="inline_block comment_edit_form">
                        {{ csrf_field() }}
                         @method('PUT')

                         
                            <input data-commentID="{{$comment['commentID']}}" data-commentData="{{$comment['commentBody']}}" class="reaction_image commentimg" type="image" id="like" name="like" alt="Login" src="{{asset("/img/comment/edit.png")}}" width="15" height="auto">

                        </form>
                        
                        <form  action="{{route('deleteComment',['id'=>$comment['commentID']])}}" method="post" class="inline_block">
                        {{ csrf_field() }}
                         @method('DELETE')
                          {{-- <div class="form-group"> --}}
                          <input class="reaction_image" type="image" id="like" name="like" alt="Login" src="{{asset("/img/comment/delete.png")}}" width="15" height="auto">
                          
                          {{-- </div> --}}
                        </form>
                      </div>
                    </div>


                    @endforeach
                    {{-- ./Comment Display--}}
                    {{-- Comment Get--}}
                    <form class="comment_input_box" action="{{asset('/comment')}}" method="post" {{-- style="display:none" --}}  id="{{'comment_div'.$post['postID']}}">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <input  class="form-control" name="body" id="{{'comment'.$post['postID']}}" rows="1" placeholder="Comment" style="border-radius: 15px;width: 404px;" />
                        <input type="hidden" name="postID" value="{{$post['postID']}}"> 
                      </div>
                    </form>
                    {{-- ./Comment Get--}}
                  </div>
                </div>
                {{-- ./Comment --}}
          </article>
          {{-- ./article> --}}
        @endforeach