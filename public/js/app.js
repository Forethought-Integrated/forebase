var post_id='0';

// ****Read/Fetch post Content & display it on Model ****//
$('.post').find('.interaction').find('.editPost').on('click',function(event){
	event.preventDefault();
	// var postBody= $(event.target).parent().parent().children().eq('0').text();

	post_id= event.target.parentNode.parentNode.dataset['postid'];
	var postBodyId='postBody'+post_id;
	// console.log(postBodyId);
	var postBody=$('#'+postBodyId).data('postbody');
	// console.log("postBodyOr =");
	// console.log(postBodyOr);
	// console.log("Next Line");

	// var postBody=$('#'+postBodyId).text();
	// console.log(postBody);
	// console.log($('#postModalTextArea').text());
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


	// var postBody= $(event.target).parent().parent().children().eq('0').text();
	// var postBody=$('#'+postBodyId).text();
	// console.log("beforeSave postBody ="+postBody);
	console.log("beforeSave ModelBody="+$('#postModalTextArea').val());

$.ajax({
    url: URL,
    type: "PUT",
    data: {_token: CSRF_TOKEN, postBodyData:$('#postModalTextArea').val(),},
    cache: 'false',
    success: function (data) {
 //        console.log("ajaxPost"+this.url);
 //        console.log("response data=");
        console.log(data);
 //        console.log("afterSave postBody ="+postBody);
	// console.log("afterSave ModelBody="+$('#postModalTextArea').text());
	 // postBody=$('#'+postBodyId).text();
	 $('#'+postBodyId).text($('#postModalTextArea').val());
	// console.log("Get change body text at console");
	// console.log($('#'+postBodyId).text());
	//Hie Modal

	  // $('#postModalTextArea').wysihtml5({
   //    toolbar: { fa: true }
   //  });

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
$('.post').find('.interaction').find('.Like').on('click',function(event){
	event.preventDefault();
console.log("hello edit");
var URL1='/social/reaction/12';

post_id= event.target.parentNode.parentNode.dataset['postid'];
var likeId='like'+post_id;
var URL='/social/reaction/'+post_id;

// var postBodyId='postBody'+post_id;

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
console.log(URL);
console.log(likeId);
$.ajax({
    url: URL,
    type: "POST",
    // data: {_token: CSRF_TOKEN, postid:post_id, like:'1'},
    data: {_token: CSRF_TOKEN, likeData:{post_id:post_id,like:'1'}},
    cache: 'false',
    success: function (data) {
	console.log(data);
	 $('#'+likeId).text('1');

    },
    error: function(err){
        console.log("ajaxPosterror"+this.url);
    }
});

});


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

// Reaction Funtionlty
$('.post').find('.interaction').find('.reacted').on('click',function(event){
	event.preventDefault();
console.log("hello reacted");
// var URL='/social/reaction/'+post_id;
	
	
// 	$.ajax({
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

});

// ./Reaction Funtionlty


// CRM
// --Enabel Form Field of CRM
// $('.editFormField').on('click',function(event){
// 	event.preventDefault();
// console.log("hello editFormField");
// });
	// editFormField
// --Enabel Form Field of CRM


// ./CRM