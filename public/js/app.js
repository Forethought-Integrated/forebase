var post_id='0';

// ****Read/Fetch post Content & display it on Model ****//
$('.post').find('.interaction').find('.editPost').on('click',function(event){
	event.preventDefault();
	// var postBody= $(event.target).parent().parent().children().eq('0').text();

	post_id= event.target.parentNode.parentNode.dataset['postid'];
	var postBodyId='postBody'+post_id;
	var postBody=$('#'+postBodyId).data('postbody');
	$('#postModalTextArea').text(postBody);
	// console.log($('#postModalTextArea').text());
	
	//wysihtml with Bootstrap Modal
	 $('#postModalTextArea').wysihtml5({
      toolbar: { fa: true }
    });

	//Launch Modal
	$('#edit_modal').modal();
		
		// ****To do post ajax request to save model data to DB****//
	$('#postModalSave').on('click',function(event){

		event.preventDefault();
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		var URL="/social/"+post_id;
		// console.log("csrf token= "+CSRF_TOKEN);
		// console.log("Post ID= "+post_id);
		// console.log("URL = "+URL);


		// console.log("beforeSave ModelBody="+$('#postModalTextArea').val());

		$.ajax({
		    url: URL,
		    type: "PUT",
		    data: {_token: CSRF_TOKEN, postBodyData:$('#postModalTextArea').val(),},
		    cache: 'false',
		    success: function (data) {
		        // console.log(data);
		        // var postUpdatedBody='{!!'+$('#postModalTextArea').val()+'!!}';
		        var postUpdatedBody=$('#postModalTextArea').val();
		        console.log(postUpdatedBody);
			 $('#'+postBodyId).html(postUpdatedBody);
			$('#edit_modal').modal("hide");
		    },
		    error: function(err){
		        // console.log("ajaxPosterror"+this.url);
		    }
		});

	});
}); 
// ./****Read/Fetch post Content & display it on Model ****//




// Comment Funtionlty
// --comment display On Click
// $('.post').find('.interaction').find('.comment').on('click',function(event){
// 	event.preventDefault();
// console.log("hello edit");

// post_id= event.target.parentNode.parentNode.dataset['postid'];
// commentDivID='commentDiv'+post_id;
// console.log("commentDivID");
// console.log(commentDivID);
// $('#'+commentDivID).css("display","block");
// });
// --./comment display On Click

// --comment edit On Click
	// ---
	$('.comment_img').on('click',function(event){
		event.preventDefault();
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		var cmtData=$(this).data('commentdata');
		var cmtID=$(this).data('commentid');
		var hCmtID='comment_view'+cmtID;
		$('#'+hCmtID).css("display","none");
		var in1='<input type="hidden" name="_token" value="'+CSRF_TOKEN+'">';
		var in2='<input type="hidden" name="_method" value="PUT">';
		var in3='<input type="text" name="commentView" value="'+cmtData+'">';
		console.log(in1+in2+in3);
		$(this).parent().html(in1+in2+in3);
	});
	// ----
// --./comment edit On Click



// ./Comment Funtionlty

// Reaction Funtionaloty
// $(document).ready(function(){
// 	$(".reactionHover").hover(function(){
// 	  // $(this).css("display", "none");
// 	  $(this).css("background-color", "red");
// 	  // $("p:first-child")
// 	  // var ab=($(this).parent()):first-child;
// 	  var interaction=$(this).parent();
// 	 	var interactionChild= $("interaction div").first();
	  // console.log(interactionChild);
// 	  // $(this).parent().first().css("display", "inline");
// 	  }, function(){
// 	  $(this).css("background-color", "pink");
// 	  // $(this).parent().first().css("display", "none");
// 	  // $(this).css("display", "inline");
// 	});
// });
// ./Reaction Funtionaloty


