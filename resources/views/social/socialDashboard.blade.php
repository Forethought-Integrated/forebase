{{-- @extends('layouts.vkadminApp') --}}
@extends('layouts.newAdminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}" async></script>
@endsection

@section('ContentHeader(Page_header)')


{{-- <div class="row mb-2" id="scorlling_social">
  <div class="col-sm-6">
    <h2 class="m-0 text-dark">Social</h2>
  </div> --}}
  <!-- /.col -->
  {{-- <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Social</li>
    </ol>
  </div> --}}
  <!-- /.col -->
{{-- </div> --}}
<!-- /.row -->

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
        @foreach($posts['post']['data'] as $post)
          <article class="post" data-postid="{{$post['postID']}}">
            <div id="{{'postBody'.$post['postID']}}" data-postbody="{{$post['postBody']}}">
              {!! $post['postBody'] !!}
            </div>
            <div class="info">
                posted by {{ $post['userName'] }} on {{ $post['createdAt']['date'] }}
            </div>
            <div class="interaction">
                  {{-- @if($post['userReactionID'] == is_null(var)) --}}
                  @if(is_null($post['userReactionID']))
                    <a href=""  class="Reaction">
                      @if($post['reactionCount'])
                      
                      @endif
                      <form action="/reaction" method="post" >
                        {{csrf_field()}}
                        <input type="hidden" name="postID" value="{{$post['postID']}}">
                        <input type="hidden" name="reaction" value="1">
                        <input type="submit" name="like" value="love">
                      </form>
                    </a>
                    <a href=""  class="Reaction">
                      <form action="/reaction" method="post" >
                        {{csrf_field()}}
                        <input type="hidden" name="postID" value="{{$post['postID']}}">
                        <input type="hidden" name="reaction" value="2">
                        <input type="submit" name="like" value="Wow">
                      </form>
                    </a>
                    <a href=""  class="Reaction">
                      <form action="/reaction" method="post" >
                        {{csrf_field()}}
                        <input type="hidden" name="postID" value="{{$post['postID']}}">
                        <input type="hidden" name="postID" value="3">
                        <input type="submit" name="like" value="Happy">
                      </form>
                    </a>
                  @else
                    <a href="" id="{{$post['userPostReactionID']}}" class="reacted">
                      <b>{{$post['userReactionName']}}</b><<strong>{{$post['reactionCount']}}</strong>
                    </a>
                  @endif
                  | 
                <a href="" class="comment">Comment</a>  |
                @if(Auth::user()->id == $post['userID'])
                  <a href="#" class="editPost">Edit </a>|
                  <a href="{{ url('socialdel'.'/' .$post['postID'])}}">Delete</a> | 
                @endif
                <div class="commentDiv card" style="margin-top: 10px;">
                  <div class="card-body">
                    @foreach($post['comment'] as $comment)
                      
                      <form action="{{route('editComment',['id'=>$comment['commentID']])}}" method="post" style="display:block">
                      {{ csrf_field() }}
                       @method('PUT')
                       <div id="indexCommentDiv.{{$comment['commentID']}}">{{$comment['commentBody']}}</div>
                        <div class="form-group">
                          <input type="text" name="commentView" value="{{$comment['commentBody']}}">
                          <input class="editComment" type="submit" name="editComment" value="edit">
                        </div>
                      </form>
                      
                      <form action="{{route('deleteComment',['id'=>$comment['commentID']])}}" method="post" style="display:block">
                      {{ csrf_field() }}
                       @method('DELETE')
                        <div class="form-group">
                          {{-- <input type="text" name="commentView" value="{{$comment['commentBody']}}"> --}}
                          <input class="editComment" type="submit" name="editComment" value="delete">
                        </div>
                      </form>
                      <br>
                    @endforeach
                    <form action="/comment" method="post" style="display:none"  id="{{'commentDiv'.$post['postID']}}">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <textarea  class="form-control" name="body" id="{{'comment'.$post['postID']}}" rows="1" placeholder="Comment"></textarea >
                        <input type="submit" name="send" value="send">
                        <input type="hidden" name="postID" value="{{$post['postID']}}"> 
                      </div>
                    </form>
                  </div>
                </div>



            
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
        @endforeach

      </div>
    </div>
        {{-- ./Post Body --}}
      {{-- </article> --}}
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
                    
           
<!-- CK Editor -->
{{-- <script src                                                                                                                                                                                                                                                                                                                                     ="{{asset("/admin-lte/plugins/ckeditor/ckeditor.js")}}"></script> --}}
<!-- Bootstrap WYSIHTML5 -->
{{-- <script src="{{asset("/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script> --}}
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