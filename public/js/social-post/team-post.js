 $(document).ready(function(){
 $("#team_tab_link").on("click",function(e){
      e.preventDefault();
      $.ajaxPrefilter(function( options, original_Options, jqXHR ) {
          options.async = true;
        });
       $.ajax({
            url:"/social-team-post",
            type:'GET',
            success:function (result){
                    $("#team").html(result);
                    },
            error:function(error){
              console.log(error);
            }
        });

    });
  });

