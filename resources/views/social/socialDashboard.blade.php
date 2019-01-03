@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')

<h1>
  Social
  <small>Control panel</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Social</li>
</ol>


@endsection

@section('MainContent')


<div class="row">
  <div class="col-lg-9">
    {{-- Write Post --}}
    <div class="card">
      <div class="card-body">
        <form action="/social" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            {{-- For Bootstrap wysihtml5 --}}
            <textarea  class="form-control textarea " name="body" id="new-post" rows="5" placeholder="Your Post">
              
            </textarea >
          </div>
          <button type="submit" class="btn btn-primary">Create Post</button>
          <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
      </div>
    </div>
    {{-- ./Write Post --}}
        
    {{--Post Body  --}}
    <div class="card card-primary card-outline">
      <div class="card-body">
        <header><h3>what other people say...</h3></header>
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
                      {{-- parentDivReaction --}}
                      <div class="parentDivReaction" style="display: inline;">
                      <div class="divReactionOnHover">
                        @foreach($data['notReactionData'] as $reaction )
                            <form action="/postreaction" method="post" style ='display:inline;' >
                              {{csrf_field()}}
                              <input type="hidden" name="postID" value="{{$post['postID']}}">
                              <input type="hidden" name="reaction" value="{{$reaction->reaction_id}}">

                              <input type="image" id="like" name="like" alt="Login"
                                  src="{{asset($reaction->reaction_image)}}" class="submit_image">

                              {{-- <input type="submit" name="reactionName" value="{{$reaction->reaction_name}}"> --}}

                            </form>
                        @endforeach
                      </div>
                      {{-- ./divReactionOnHover --}}
                      <br>
                      <div class="divReactionHover" style="display: inline;">
                      <form action="/postreaction" method="post" style ='display:inline;' >
                          {{csrf_field()}}
                          <input type="hidden" name="postID" value="{{$post['postID']}}">
                          <input type="hidden" name="reaction" value="{{$data['notReactionData']['0']->reaction_id}}">
                          <input class="reactionImage" type="image" id="like" name="like" alt="Login" value="{{$data['notReactionData']['0']->reaction_name}}" 
                              src="{{asset($data['notReactionData']['0']->reaction_image)}}" class="submit_image" width="20" height="auto" >


                      </form>
                    </div>
                    {{-- ./divReactionHover --}}
                  </div>
                  {{-- ./parentDivReaction --}}

                      {{-- ./Reaction Are available In App --}}
                    
                      {{-- POst Reaction Count --}}
                      @if($post['reactionCount'])
                         &nbsp; &nbsp; <strong>{{$post['reactionCount']}}</strong>
                      @else
                      @endif
                      {{-- ./POst Reaction Count --}}
                  @else

                    {{-- parentDivReaction --}}
                      <div class="parentDivReaction" style="display: inline;">
                      <div class="divReactionOnHover">
                        @foreach($data['notReactionData'] as $reaction )
                            <form action="/postreaction/{{$post['userPostReactionID']}}" method="post" style ='display:inline;' >
                              {{csrf_field()}}
                              @method('PUT')
                              <input type="hidden" name="reaction" value="{{$reaction->reaction_id}}">
                              <input type="image" id="like" name="like" alt="Login" src="{{asset($reaction->reaction_image)}}" class="submit_image">

                              {{-- <input type="submit" name="reactionName" value="{{$reaction->reaction_name}}"> --}}

                            </form>
                        @endforeach
                      </div>
                      {{-- ./divReactionOnHover --}}
                      <br>
                      {{-- divReactionHover --}}
                      <div class="divReactionHover" style="display: inline;">
                      <form action="/postreaction/{{$post['userPostReactionID']}}" method="post" style ='display:inline;' >
                          {{csrf_field()}}
                          @method('DELETE')
                          <input class="reactionImage" type="image" id="like" name="like" alt="Login" src="{{asset($post['userReactionImg'])}}" class="submit_image" width="20" height="auto">


                      </form>
                    </div>
                    {{-- ./divReactionHover --}}
                  </div>
                  {{-- ./parentDivReaction --}}

                      &nbsp; &nbsp; <strong>{{$post['reactionCount']}}</strong> 
                  @endif
                  {{-- ./Reaction --}}
                  | 
                  <a href="" class="comment"><i class="fa  fa-commenting">&nbsp;</i>Comment</a>  |
                  @if(Auth::user()->id == $post['userID'])
                    <a href="#" class="editPost">Edit </a>|
                    <a href="{{ url('socialdel'.'/' .$post['postID'])}}">Delete</a> | 
                  @endif
                   {{-- Comment --}}
                <div class="commentDiv card">
                  <div class="card-body">
                    {{-- Comment Display --}}
                    @foreach($post['comment'] as $comment)
                      <div class="commentUpdateParent" id="commentUpdatedChild{{$comment['commentID']}}">  
                        <div id="commentView{{$comment['commentID']}}" class="commentView abcd" data-comment="{{$comment['commentID']}}" id="indexCommentDiv.{{$comment['commentID']}}">{{$comment['commentBody']}}
                        </div>
                      
                      <div class="commentUpdateChild" > 

                        {{-- <a href="" class="commentEditAnchor" data-commentID="{{$comment['commentID']}}" data-commentData="{{$comment['commentBody']}}">
                          <img src="{{asset($reaction->reaction_image)}}" width="20" height="auto">
                        </a> --}}

                      <form action="{{route('editComment',['id'=>$comment['commentID']])}}" method="post" class="inline_block commentEditForm">
                      {{ csrf_field() }}
                       @method('PUT')

                       
                          
                          {{-- <div class="commentView" data-comment="{{$comment['commentID']}}" id="indexCommentDiv.{{$comment['commentID']}}">{{$comment['commentBody']}}
                        </div> --}}

                          {{-- <input type="text" name="commentView" value="{{$comment['commentBody']}}" class="commentedit"> --}}
                          <input data-commentID="{{$comment['commentID']}}" data-commentData="{{$comment['commentBody']}}" class="reactionImage commentImg" type="image" id="like" name="like" alt="Login" src="{{asset($reaction->reaction_image)}}" width="20" height="auto">

                          {{-- <input class="editComment" type="submit" name="editComment" value="edit"> --}}
                      </form>
                      
                        <form  action="{{route('deleteComment',['id'=>$comment['commentID']])}}" method="post" class="inline_block">
                        {{ csrf_field() }}
                         @method('DELETE')
                          {{-- <div class="form-group"> --}}
                                <input class="reactionImage" type="image" id="like" name="like" alt="Login" src="{{asset($reaction->reaction_image)}}" width="20" height="auto">
                            
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
                          <input type="text" name="commentView" value="{{$comment['commentBody']}}">
                          <input class="fa fa-edit editComment" type="submit" name="editComment" value="delete">

                          <input class="editComment" type="submit" name="editComment" value="delete">
                        </div>
                      </form> --}}
                      {{-- Vikram delete Working --}}

                      <br>
                    @endforeach
                    {{-- ./Comment Display--}}
                    {{-- Comment Get--}}
                    <form action="/comment" method="post" {{-- style="display:none" --}}  id="{{'commentDiv'.$post['postID']}}">
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
      </div>
    </div>
    {{-- ./Card --}}
    {{-- ./Post Body --}}
  </div>

        {{-- RightSide Content Video --}}
        <!-- /.col-md-6 -->
    <div class="col-lg-3">
      <div class="card">
        <div class="card-header" style="border-top: 2px solid #007bff;">
          <h5 class="m-0">Videos</h5>
        </div>
        <div class="card-body" style="padding: 8px;">
          <iframe width="100%" 
src="https://www.youtube.com/embed/SSuf1yI7QFQ?ecver=2" allow="accelerometer; autoplay; encrypted-media;">

          </iframe>
          <hr>
          <iframe width="100%" 
src="https://www.youtube.com/embed/BF-yUgKU9LQ" allow="accelerometer; autoplay; encrypted-media;">
          </iframe>
    
          <hr>
    
          <iframe width="100%" 
src="https://www.youtube.com/embed/nftTNFIyIFI?ecver=2" allow="accelerometer; autoplay; encrypted-media;">
          </iframe>
        </div>
      </div>      
    </div>
    {{-- /.col-md-6 --}}
  </div>
      {{-- /.row --}}
  @endsection

  @section('bodyScriptUpdate')
      <!-- REQUIRED SCRIPTS -->

      <!--Admin Model-->
        <div id="edit_modal"class="modal fade" >
          <div class="modal-dialog">
            <div class="modal-content">
              <form  id="postModalForm" method="post" action="">

                {{-- {{ csrf_field() }} --}}
                {{-- <input name="_method" type="hidden" value="PUT"> --}}
                <div class="modal-header">
                  <h4 class="modal-title">Edit Post</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <!--<form>-->
                      <div class="form-group">
                        <label for="post-body">Edit the Post</label>
                        <textarea class="form-control" name="postModalTextArea" id="postModalTextArea" row="5" >abcd</textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" id="postModalSave" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
                    
  <script>
  $(function () {
        // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    });

  });
</script>

<script>
  jQuery(window).scroll(function(){  if (jQuery(this).scrollTop() >= 53) {    jQuery('#scorlling_social').addClass('sticky');   }   else {    jQuery('#scorlling_social').removeClass('sticky');   }});
</script>

@endsection