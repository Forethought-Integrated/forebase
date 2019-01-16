// Notification
// $('#postModalSave').on('click',function(event){

// 		event.preventDefault();
// 		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
// 		var URL="/social/"+post_id;
// 		// console.log("csrf token= "+CSRF_TOKEN);
// 		// console.log("Post ID= "+post_id);
// 		// console.log("URL = "+URL);


// 		// console.log("beforeSave ModelBody="+$('#postModalTextArea').val());

// 		$.ajax({
// 		    url: URL,
// 		    type: "PUT",
// 		    data: {_token: CSRF_TOKEN, postBodyData:$('#postModalTextArea').val(),},
// 		    cache: 'false',
// 		    success: function (data) {
// 		        // console.log(data);
// 		        // var postUpdatedBody='{!!'+$('#postModalTextArea').val()+'!!}';
// 		        var postUpdatedBody=$('#postModalTextArea').val();
// 		        console.log(postUpdatedBody);
// 			 $('#'+postBodyId).html(postUpdatedBody);
// 			$('#edit_modal').modal("hide");
// 		    },
// 		    error: function(err){
// 		        // console.log("ajaxPosterror"+this.url);
// 		    }
// 		});

// 	});

$('a[data-notif-id]').on('click',function(event){
	event.preventDefault();
	// console.log($(this).attr('data-notif-id'));
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	var URL="/notification-mark-read";
	var Data={
		'id': $(this).attr('data-notif-id'),
		'link':$(this).attr('data-notif-link'),
	};
	// console.log(Data);

	$.ajax({
		    url: URL,
		    type: "POST",
		    data: {_token: CSRF_TOKEN, data:Data},
		    cache: 'false',
		    success: function (data) {
		        // console.log(Data['link']);
		        window.location = Data['link'];
		        // var postUpdatedBody='{!!'+$('#postModalTextArea').val()+'!!}';
		 //        var postUpdatedBody=$('#postModalTextArea').val();
		 //        console.log(postUpdatedBody);
			//  $('#'+postBodyId).html(postUpdatedBody);
			// $('#edit_modal').modal("hide");
		    },
		    error: function(err){
		        // console.log("ajaxPosterror"+this.url);
		    }
		});
		
});
// ./Notification
