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
	// ---working 4-jan
	// $('.commentimg').on('click',function(event){
	// 	event.preventDefault();
	// 	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	// 	var cmtData=$(this).data('commentdata');
	// 	var cmtID=$(this).data('commentid');
	// 	var hCmtID='comment_view'+cmtID;
	// 	$('#'+hCmtID).css("display","none");
	// 	var in1='<input type="hidden" name="_token" value="'+CSRF_TOKEN+'">';
	// 	var in2='<input type="hidden" name="_method" value="PUT">';
	// 	var in3='<input type="text" name="commentView" value="'+cmtData+'">';
	// 	console.log(in1+in2+in3);
	// 	$(this).parent().html(in1+in2+in3);
	// });
	// ----working 4-jan
	

	// $(document).ready(function(){
	// 	$('.commentimg').on('click',function(event){
	// 	event.preventDefault();
	// 	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	// 	var cmtData=$(this).data('commentdata');
	// 	var cmtID=$(this).data('commentid');
	// 	var hCmtID='comment_view'+cmtID;
	// 	$('#'+hCmtID).css("display","none");
	// 	var in1='<input type="hidden" name="_token" value="'+CSRF_TOKEN+'">';
	// 	var in2='<input type="hidden" name="_method" value="PUT">';
	// 	var in3='<input type="text" name="commentView" value="'+cmtData+'">';
	// 	// console.log(in1+in2+in3);
	// 	$(this).parent().html(in1+in2+in3);
	// 	});
	// });

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



// // Campaign  Working with Textarea
$(document).ready(function(){
	$(".utm").keyup(function(){
	function status(obj){
		switch ($(obj).attr('id')) {
        case "utmWebsiteUrl":
        	if($(obj).val()=='')
        		{
	        		return $(obj).val();
        		}
        	else
        		{
	        		return $(obj).val();
        		}
        	break;
        case 'utmCampaignSource':
        	if($(obj).val()=='')
        	{	
				$('#generatedCampaignURL').css('display','none');
	        	return $(obj).val();
        	}
        	else
        	{
				$('#generatedCampaignURL').css('display','block');
	        	return '?utm_source='+$(obj).val();
        	}
        	break;
        case "utmCampaignMedium":
        	if($(obj).val()=='')
        	{
	        	return $(obj).val();
        	}
        	else
        	{
	        	return '&utm_medium='+$(obj).val();
        	}
        	break;
        case 'utmCampaignName':
        	if($(obj).val()=='')
        	{
	        	return $(obj).val();
        	}
        	else
        	{
	        	return '&utm_campaign='+$(obj).val();
        	}
        	break;
        case "utmCampaignTerm":
        	if($(obj).val()=='')
        	{
	        	return $(obj).val();
        	}
        	else
	        {
	        	return '&utm_term='+$(obj).val();
        	}
        	break;
        case 'utmCampaignContent':
        	if($(obj).val()=='')
        	{
	        	return $(obj).val();
        	}
        	else
        	{
	        	return '&utm_content='+$(obj).val();
        	}
      }
	}
	// ./status

var gen=status('#utmWebsiteUrl')+status('#utmCampaignSource')+status('#utmCampaignMedium')+status('#utmCampaignName')+status('#utmCampaignTerm')+status('#utmCampaignContent');
 					$('#generatedCampaignURL textarea').val(gen);
    });
});
// // ./Campaign  Working with Textarea

//  Copy To Clipboard Funtionality
function copyToClipBoard() {
  /* Select the text field */
  $('#generatedCampaignURL textarea').select();
  /* Copy the text inside the text field */
  document.execCommand("copy");
}
//  ./Copy To Clipboard Funtionality
