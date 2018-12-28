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
	console.log("csrf token= "+CSRF_TOKEN);
	console.log("Post ID= "+post_id);
	console.log("URL = "+URL);


	console.log("beforeSave ModelBody="+$('#postModalTextArea').val());

$.ajax({
    url: URL,
    type: "PUT",
    data: {_token: CSRF_TOKEN, postBodyData:$('#postModalTextArea').val(),},
    cache: 'false',
    success: function (data) {
        console.log(data);
	 $('#'+postBodyId).text($('#postModalTextArea').val());
	$('#edit_modal').modal("hide");
    },
    error: function(err){
        console.log("ajaxPosterror"+this.url);
    }
});

	});
	}); 
// ./****Read/Fetch post Content & display it on Model ****//



// Like Dislike Funtionlty
// $('.Like').on('click', function(event){
// 	event.preventDefault();
// $('.post').find('.interaction').find('.Like').on('click',function(event){
// 	event.preventDefault();
// console.log("hello edit");
// var URL1='/social/reaction/12';

// post_id= event.target.parentNode.parentNode.dataset['postid'];
// var likeId='like'+post_id;
// var URL='/social/reaction/'+post_id;

// // var postBodyId='postBody'+post_id;

// var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
// console.log(URL);
// console.log(likeId);
// $.ajax({
//     url: URL,
//     type: "POST",
//     // data: {_token: CSRF_TOKEN, postid:post_id, like:'1'},
//     data: {_token: CSRF_TOKEN, likeData:{post_id:post_id,like:'1'}},
//     cache: 'false',
//     success: function (data) {
// 	console.log(data);
// 	 $('#'+likeId).text('1');

//     },
//     error: function(err){
//         console.log("ajaxPosterror"+this.url);
//     }
// });

// });


// Like Dislike Funtionlty



// Comment Funtionlty

$('.post').find('.interaction').find('.comment').on('click',function(event){
	event.preventDefault();
console.log("hello edit");

post_id= event.target.parentNode.parentNode.dataset['postid'];
commentDivID='commentDiv'+post_id;
console.log("commentDivID");
console.log(commentDivID);
$('#'+commentDivID).css("display","block");
});


// ./Comment Funtionlty

