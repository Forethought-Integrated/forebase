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

// Campaign  Working with DIV Without Textarea
$(document).ready(function(){
    $(".utm").keyup(function(){
      switch ($(this).attr('id')) {
        case "utmWebsiteUrl":
        	if($(this).val()=='')
        		{
	        		$('#utmWebsiteUrlGen').html($(this).val());
	        		$('#utm-copy').css('display','none');
        		}
        	else
        		{
	        		$('#utm-copy').css('display','block');
	        		$('#utmWebsiteUrlGen').text($(this).val()+'?');
        		}
        	break;
        case 'utmCampaignSource':
        	if($(this).val()=='')
	        	$('#utmCampaignSourceGen').html($(this).val());
        	else
	        	$('#utmCampaignSourceGen').html('utm_source='+$(this).val()+'&');
        	break;
        case "utmCampaignMedium":
        	if($(this).val()=='')
	        	$('#utmCampaignMediumGen').html($(this).val());
        	else
	        	$('#utmCampaignMediumGen').html('utm_medium='+$(this).val()+'&');
        	break;
        case 'utmCampaignName':
        	if($(this).val()=='')
	        	$('#utmCampaignNameGen').html($(this).val());
        	else
	        	$('#utmCampaignNameGen').html($(this).val());
        	break;
        case "utmCampaignTerm":
        	if($(this).val()=='')
	        	$('#utmCampaignTermGen').html($(this).val());
        	else
	        	$('#utmCampaignTermGen').html('utm_term='+$(this).val()+'&');
        	break;
        case 'utmCampaignContent':
        	if($(this).val()=='')
	        	$('#utmCampaignContentGen').html($(this).val());
        	else
	        	$('#utmCampaignContentGen').html('utm_content='+$(this).val());
      }

    });

    $('#utm-copy').on('click',function(e){
    	e.preventDefault();
    	console.log('clicked');
    });

});
//  ./Campaign
// Campaign  Working with DIV Without Textarea

// // Campaign  Working with Textarea
// $(document).ready(function(){
//     $(".utm").keyup(function(){
//     	// 1?utm_source=1&utm_medium=1&utm_campaign=1&utm_term=1&utm_content=1
//     	var utmConst={
//     		web:'?',
//     		src:'',
//     		med:'',
//     		name:'',
//     		term:'',
//     		content:'',
//     		gen:''
//     	};
//     	var utmData={
//     		web:'?',
//     		src:'',
//     		med:'',
//     		name:'',
//     		term:'',
//     		content:'',
//     		gen:''
//     	};

// // utmData['gen']=utmData['web']+utmData['src']+utmData['med']+utmData['name']+utmData['term']+utmData['content'];

//     	var utmId={
//     		web:'utmWebsiteUrl',
//     		src:'utmCampaignSource',
//     		med:'utmCampaignMedium',
//     		name:'utmCampaignName',
//     		term:'utmCampaignTerm',
//     		content:'utmCampaignContent',
//     		gen:''
//     	};
    	
//     	var parentNode=$(this).parent().parent();
//     	var parentNodeData=parentNode.attr('data-utm');
//     	// console.log(parentNode.attr('class'));
//     	console.log();
//       switch ($(this).attr('id')) {
//         case "utmWebsiteUrl":
//         	if($(this).val()=='')
//         		{
// 	        		utmData['web']=$(this).val();
//         		}
//         	else
//         		{
// 	        		utmData['web']=$(this).val();
//         		}
//         	break;
//         case 'utmCampaignSource':
//         	if($(this).val()=='')
//         	{	
//         		$('#generatedCampaignURL').css('display','none');
// 	        	// $('#utmCampaignSourceGen').html($(this).val());
//         	}
//         	else
//         	{
// 	        		utmData['src']=$(this).val();
// 	        		// utmData['gen']=
//         		$('#generatedCampaignURL').css('display','block');
// 	        	$('#utmCampaignSourceGen').html('utm_source='+$(this).val()+'&');
//         	}
//         	break;
//         case "utmCampaignMedium":
//         	if($(this).val()=='')
// 	        	$('#utmCampaignMediumGen').html($(this).val());
//         	else
// 	        	$('#utmCampaignMediumGen').html('utm_medium='+$(this).val()+'&');
//         	break;
//         case 'utmCampaignName':
//         	if($(this).val()=='')
// 	        	$('#utmCampaignNameGen').html($(this).val());
//         	else
// 	        	$('#utmCampaignNameGen').html($(this).val());
//         	break;
//         case "utmCampaignTerm":
//         	if($(this).val()=='')
// 	        	$('#utmCampaignTermGen').html($(this).val());
//         	else
// 	        	$('#utmCampaignTermGen').html('utm_term='+$(this).val()+'&');
//         	break;
//         case 'utmCampaignContent':
//         	if($(this).val()=='')
// 	        	$('#utmCampaignContentGen').html($(this).val());
//         	else
// 	        	$('#utmCampaignContentGen').html('utm_content='+$(this).val());
//       }

//     });

//     // $('#utm-copy').on('click',function(e){
//     // 	e.preventDefault();
//     // 	console.log('clicked');
//     // });

// });
// // ./Campaign  Working with Textarea


// helpdesk

// $(".abs:select").on('click',function(e){
// $("#abs:select").on('click',function(e){
//     	e.preventDefault();
//     	console.log('clicked');
// });
// $('#abc').change(function(){ 
//     // var value = $(this).val();
//     console.log('hi');
// });
// ./helpdesk

// $("#abc").on('change',function(e){
// 	// console.log(e);
//     // console.log('hi');
//     alert('sg');


// });
$(document).ready(function(){

  $('#abc').on('change', function() {
  var value = $(this).val();
  // console.log(value);
  // console.log($(this).attr('class'));
  console.log($(this).attr('data-board'));
  // $('select[name="list_name"] :selected').attr('class');
  console.log($('select[name="list_name"] :selected').attr('data-list'));

  var boardid=$(this).attr('data-board');
  var listid=$('select[name="list_name"] :selected').attr('data-list');
  // Create card Link
  // $('#create-card-link').attr('href','/card/'+listid+'/create');	
  $('#create-card-link').attr('href','/card/'+listid+'/create');	
  // ./Create card Link
  var URL="/board-card-detail/"+boardid+'/'+listid;
  $.ajax({
	  	type: "GET",
	  	url: URL,
	  	cache: 'false',
		success: function (data) {
		        	// console.log('hi');
		        	var newtr;
				$("#tbody").empty();

		        // for (i in myObj.cars) {
		        for (i in data.card) {
  				// console.log('ss');
             	// console.log(data.card[i]['card_id']); //working
              	// console.log(data.card[i]['card_id']);
      			newtr="<tr><td>"+data.card[i]['card_id']+"</td>"+"<td>"
      			+data.card[i]['list_id']+"</td>"+"<td>"
      			+data.card[i]['card_name']+"</td>"
      			+"<td>"+data.card[i]['card_description'
      			]+"</td>"+"<td>"+data.card[i]['card_order']
      			+"</td>"+"<td>"+data.card[i]['card_members']
      			+"</td>"+"<td>"+data.card[i]['card_archieved']
      			+"</td>"+"<td>Delete</td></tr>";
      			console.log('before----'+$("#tbody").html());
				// $("#tbody").html(newtr);
				$("#tbody").append(newtr);
      			console.log('after----'+$("#tbody").html());

				// $("#tbody").html(newtr);
				// console.log($("#tbody").html());
				}
		    },
		    error: function(err){
		        console.log("VKERROR");
		    }
		});
	});
});

