@extends('layouts.adminApp')

@section('title', 'Dashboard')

@section('headAdminScriptUpdate')

{{-- For Post Tab Background Color 

Added This Style And remove "nav-tabs-custom from  
  <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
--}}

{{-- Post Accordian Css Chnages --}}
<style type="text/css">
  .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    background-color: inherit;
}
{{-- ./Post Accordian Css Chnages --}}

</style>
{{-- ./For Post Tab Background Color --}}

{{-- Post Starred Funtionality --}}
<script type="text/javascript">
  $(document).ready(function(){
    {{-- Get Starred Post Data --}}
    $("#starred_post_link").on("click",function(e){
      e.preventDefault();
       $.ajax({
            url:"/social",
            type:'GET',
            success:function (result){
                    // $("#starred").html($.parseHTML( result));
                    $("#starred").html(result);
                    },
            error:function(error){
              console.log(error);
            }
        });

    });
    {{-- ./Get Starred Post Data --}}

    {{-- Starred Status --}}
    $(".star_link").on("click",function(e){
      e.preventDefault();
        var obj=this;
        // console.log($(this).parent().parent().parent().attr("id"));
       $.ajax({
                url: $(this).attr("href"),
                type:'GET',
                success:function (result){
                  // if($(obj).parent().parent().parent().attr("class"))
                if(($(obj).find('img').attr("class"))==('star_gold_icon'))
                {
                  $(obj).find('img').attr("src","/img/socialpost_interaction/star/star-grey.png");
                  $(obj).find('img').attr("class","star_grey_icon");
                  $(obj).attr("href","/star/"+$(obj).data("postid"));
                }
                else
                {
                  $(obj).find('img').attr("src","/img/socialpost_interaction/star/star-gold.png");
                  $(obj).find('img').attr("class","star_gold_icon");
                  $(obj).attr("href",'/starred/'+$(obj).data("postid"));
                }
              }
          });
      });


    {{-- Starred Status --}}
  });
</script>
{{-- ./Post Starred Funtionality --}}

{{--  --}}
<style type="text/css">
  #postRichCardSnippetContainer{
    border: 1px solid #fff;background-color: whitesmoke;}
  #postRichCardSnippetBrandName{
    font-size: 17px ;
  }
  #postRichCardSnippetTitle{
    font-size: 15px ;
    font-weight: 600 ;
  }
  #postRichCardSnippetDescription{
    font-size: 13px ;
    font-weight: 400 ;
    letter-spacing: 1.5px ;
  }
</style>

@endsection

@section('ContentHeader(Page_header)')

<h1>
  MasComm
 
</h1>
<ol class="breadcrumb">
  <li><a href="{{asset('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">MasComm</li>
</ol>


@endsection

@section('MainContent')

<script type="text/javascript">

  // $('#url').keypress(function (e) {
  $(document).ready(function() {
  $('#url').submit(function(e) {
        console.log('hi');
      e.preventDefault();

      $.ajax({
    url: "https://api.linkpreview.net?key=123456&q=https://www.google.com",
    // url: "https://api.linkpreview.net?key=123456&q=https://www.groovenexus.com/tete-a-tete-with-rydhm-dee/",
    type:'GET',
    success: function(result){
        console.log(result);
        console.log(result['description']);
        console.log(result['image']);
        console.log(result['title']);
        var h="<img src=\""+result['image']+"\"></img>";
        console.log(h);
        // var reader  = new FileReader();
        // var abc= reader.readAsDataURL(file);
        // var abc= reader.readAsDataURL(result['image']);
        // var abc= reader.readAsText(result['image']);

    //       reader.onload =  function(e){
    //     console.log('DataURL:', e.target.result);
    // };

        // reader.onload =  function(){
        //    var img = new Image();
        //               img.src = e.target.result;
        //               img.setAttribute('style', 'width:auto;');
        //               // console.log('DataURL:', reader.result);
        //                // $('#img').append(img);
        // };
        // var abc= reader.readAsDataURL(result['image']);

        // var abc= reader.readAsText(result['image']);

        $("#urlparse").html("URL Parse" + h);
        $("#urldiv").html("URL DIV" + h);


        // console.log($(this).html(result));
    }
});

     // var key = e.which;
     // if(key == 13)  // the enter key code
     //  {
     //    console.log('hi');
     //    // $('input[name = butAssignProd]').click();
     //    // return false;  
     //  }
  }); 
  }); 





</script>

{{-- <script type="text/javascript">
  $(document).ready(function() {
  var img = $('img');
  var imgg = $('#urlparse');
img.css('display', 'none');

$('#upload-button').click(function(){
  $('#my-custom-design-upload').trigger('click');                 
  return false;
});
function readfichier(e) {
  if(window.FileReader) {
    var file  = e.target.files[0];
    var reader = new FileReader();
    if (file && file.type.match('image.*')) {
      reader.readAsDataURL(file);
    } else {
      img.css('display', 'none');
      img.attr('src', '');
    }
    reader.onloadend = function (e) {
      imgg.attr('value', 'hi');
      img.attr('src', reader.result);
      img.css('display', 'block');
    }
  }
}
document.getElementById('my-custom-design-upload').addEventListener('change', readfichier, false);

  }); 
</script>

<div id="upload-button" class="fpd-btn-raised fpd-secondary-bg-color fpd-secondary-text-color">
  <i class="fpd-icon-file-upload"></i><span>Insérer votre image</span>
</div>
<input type="file" id="my-custom-design-upload" class="btn btn-success" style="display:none;" />
<img src="" height="200" />
 --}}

{{-- <form id="url" action="" method="GET">
  <input  type="textarea" name="">
</form>
<div id="urldiv"></div>
<div contentEditable="true" >Type here. You can insert images too
  <img src="http://t2.gstatic.com/images?q=tbn:ANd9GcQCze-mfukcuvzKk7Ilj2zQ0CS6PbOkq7ZhRInnNd1Yz3TQzU4e&t=1" />
</div>
<textarea id="urlparse" rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
</textarea> --}}
<div class="row">
  <div class="col-lg-8">
    @can('SocialPost Create')
    {{-- Write Post --}}
    <div class="card">
      <div class="card-body">
        <form action="{{ asset('/social') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <!--For Bootstrap wysihtml5-->
            <textarea  class="form-control textarea " name="body" id="new-post" rows="5" placeholder="Your Post">
              
            </textarea >
          </div>
          <button type="submit" class="btn btn-primary">Create Post</button>
          <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
      </div>
    </div>
    {{-- ./Write Post --}}
    @endcan
    {{-- @include('include.socialPost.postBody',compact('data')) --}}
    {{--Post Body  --}}
    {{-- Accordian Code  --}}
     <div class="">
     {{-- <div class="nav-tabs-custom"> --}}
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">All</a></li>
              <li id="starred_post_link"><a  href="#starred" data-toggle="tab">Starred</a></li>
              {{-- 
              <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
 --}}
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                {{-- Accordian Code --}}
    <div class="card card-primary card-outline">
      <div id="card-body-post" class="card-body">
        <header><h3>what other people say...</h3></header>
        @foreach($data['post']['data'] as $post)
          <article class="post" data-postid="{{$post['postID']}}">
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
      </div>
      
    </div>
    {{-- ./Card --}}
    {{-- accordian Tab End Tag --}}
    </div>
     <!-- /.tab-pane -->
              <div class="tab-pane" id="starred">
               


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
    {{-- accordian Tab End Tag --}}

    {{-- ./Post Body --}}
  </div>
        {{-- RightSide Content Video --}}
        <!-- /.col-md-6 -->
    <div class="col-lg-4">
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
src="https://www.youtube.com/embed/yMt2O1422gc" allow="accelerometer; autoplay; encrypted-media;">
          </iframe>
          <hr>
    
          <iframe width="100%" 
src="https://www.youtube.com/embed/HGF2a30Pmqs" allow="accelerometer; autoplay; encrypted-media;">
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
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/app.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.commentimg').on('click',function(event){
    event.preventDefault();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var cmtData=$(this).data('commentdata');
    var cmtID=$(this).data('commentid');
    var hCmtID='comment_view'+cmtID;
    $('#'+hCmtID).css("display","none");
    var in1='<input type="hidden" name="_token" value="'+CSRF_TOKEN+'">';
    var in2='<input type="hidden" name="_method" value="PUT">';
    var in3='<input type="text" name="commentView" value="'+cmtData+'">';
    // console.log(in1+in2+in3);
    $(this).parent().html(in1+in2+in3);
    });
  });
</script>

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

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset("/admin_lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>


{{-- <script src="{{asset("/admin_lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js")}}"></script> --}}

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