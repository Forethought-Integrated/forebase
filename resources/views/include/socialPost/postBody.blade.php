@foreach($data['post']['data'] as $post)
          <article class="post" data-postid="{{$post['postID']}}">
            <div id="{{'postBody'.$post['postID']}}" data-postbody="{{$post['postBody']}}">
              {!! $post['postBody'] !!}
            </div>
            <div class="info">
                posted by {{ $post['userName'] }} on {{ $post['createdAt']['date'] }}
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

                              {{-- <input type="submit" name="reactionName" value="{{$reaction->reaction_name}}"> --}}
                            </form>
                        @endforeach
                      </div>
                      {{-- ./div_reaction_on_hover --}}
                      <div class="divReactionHover" style="display: inline;">
                      <form action="{{ asset('/postreaction') }}" method="post" style ='display:inline;' >
                          {{csrf_field()}}
                          <input type="hidden" name="postID" value="{{$post['postID']}}">
                          <input type="hidden" name="reaction" value="{{$data['notReactionData']['0']->reaction_id}}">
                          {{-- <input class="reaction_image" type="image" id="like" name="like" alt="Login" value="{{$data['notReactionData']['0']->reaction_name}}" 
                              src="{{asset($data['notReactionData']['0']->reaction_image)}}" class="submit_image" width="20" height="auto" > --}}
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

                              {{-- <input type="submit" name="reactionName" value="{{$reaction->reaction_name}}"> --}}

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
                  <a href="" class="comment">{{-- <i class="fa  fa-commenting">&nbsp;</i> --}}<span><img src="{{asset("/img/comment/comment.png")}}" width="20" height="auto"></span>Comment</a>  |
                  @if(Auth::user()->id == $post['userID'])
                    <a href="{{asset('/')}}" class="editPost">Edit </a>|
                    <a href="{{ asset('socialdel'.'/' .$post['postID'])}}">Delete</a> | 
                  @endif


                  @if($post['starStatus'])
                    <a class="star_link" href="{{asset('/starred/'.$post['postID'])}}"><span><img class="star_gold_icon" src="{{asset("/img/socialpost_interaction/star/star-gold.png")}}" width="20" height="auto"></span></a>|
                  @else
                  <a class="star_link" href="{{asset('/star/'.$post['postID'])}}"><span><img class="star_grey_icon" src="{{asset("/img/socialpost_interaction/star/star-grey.png")}}" width="20" height="auto"></span></a>|
                  @endif
                   
                   {{--  <a href="{{asset('/')}}"><span><img src="{{asset("/img/socialpost_interaction/star/star-grey.png")}}" width="20" height="auto"></span></a>|<pre>{{print_r($post)}}</pre><br><pre>{{print_r($post['postBody'])}}</pre>
                   <br><pre>{{print_r($post['starStatus'])}}</pre> --}}

                   {{-- <br><pre>{{print_r($post->starStatus)}}</pre> --}}
                                  
                   {{-- Comment --}}
                <div class="comment_div card">
                  <div class="card-body">
                    {{-- Comment Display --}}
                    @foreach($post['comment'] as $comment)
                      <div class="comment_update_parent" id="comment_updated_child{{$comment['commentID']}}">  
                        <div id="comment_view{{$comment['commentID']}}" class="comment_view abcd" data-comment="{{$comment['commentID']}}" id="indexComment_div.{{$comment['commentID']}}">{{$comment['commentBody']}}
                        </div>
                      
                      <div class="comment_update_child" > 

                        {{-- <a href="" class="comment_editAnchor" data-commentID="{{$comment['commentID']}}" data-commentData="{{$comment['commentBody']}}">
                          <img src="{{asset($reaction->reaction_image)}}" width="20" height="auto">
                        </a> --}}

                        <form action="{{route('editComment',['id'=>$comment['commentID']])}}" method="post" class="inline_block comment_edit_form">
                        {{ csrf_field() }}
                         @method('PUT')

                         
                            
                            {{-- <div class="comment_view" data-comment="{{$comment['commentID']}}" id="indexComment_div.{{$comment['commentID']}}">{{$comment['commentBody']}}
                          </div> --}}

                            {{-- <input type="text" name="comment_view" value="{{$comment['commentBody']}}" class="comment_edit"> --}}
                            <input data-commentID="{{$comment['commentID']}}" data-commentData="{{$comment['commentBody']}}" class="reaction_image commentimg" type="image" id="like" name="like" alt="Login" src="{{asset("/img/comment/edit.png")}}" width="15" height="auto">

                            {{-- <input class="editComment" type="submit" name="editComment" value="edit"> --}}
                        </form>
                        
                        <form  action="{{route('deleteComment',['id'=>$comment['commentID']])}}" method="post" class="inline_block">
                        {{ csrf_field() }}
                         @method('DELETE')
                          {{-- <div class="form-group"> --}}
                          <input class="reaction_image" type="image" id="like" name="like" alt="Login" src="{{asset("/img/comment/delete.png")}}" width="15" height="auto">
                          
                            {{-- <input class="editComment" type="submit" name="editComment" value="delete"> --}}
                          {{-- </div> --}}
                        </form>
                      </div>
                    </div>

                      {{-- Vikram delete Working --}}
                      {{-- <form action="{{route('deleteComment',['id'=>$comment['commentID']])}}" method="post" style="display:block">
                      {{ csrf_field() }}
                       @method('DELETE')
                        <div class="form-group">
                          <input type="text" name="comment_view" value="{{$comment['commentBody']}}">
                          <input class="fa fa-edit editComment" type="submit" name="editComment" value="delete">

                          <input class="editComment" type="submit" name="editComment" value="delete">
                        </div>
                      </form> --}}
                      {{-- Vikram delete Working --}}

                    @endforeach
                    {{-- ./Comment Display--}}
                    {{-- Comment Get--}}
                    <form class="comment_input_box" action="{{asset('/comment')}}" method="post" {{-- style="display:none" --}}  id="{{'comment_div'.$post['postID']}}">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <input  class="form-control" name="body" id="{{'comment'.$post['postID']}}" rows="1" placeholder="Comment" style="border-radius: 15px;width: 404px;" />
                        {{-- <input type="submit" name="send" value="send"> --}}
                        <input type="hidden" name="postID" value="{{$post['postID']}}"> 
                      </div>
                    </form>
                    {{-- ./Comment Get--}}
                  </div>
                </div>
                {{-- ./Comment --}}
                {{-- @foreach($post['reaction'] as $react)
                  reactionID{{$react['reactionID']}}<br>
                  @foreach($react['reactionName'] as $reactBody)
                    reactionName{{$reactBody['reactionName']}}<br>
                  @endforeach
                @endforeach
                @foreach($post['comment'] as $comment)
                  CommentBody{{$comment['commentBody']}}<br>
                @endforeach --}}
          </article>
          {{-- ./article> --}}
        @endforeach