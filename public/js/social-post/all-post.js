 $(document).ready(function(){
  $("#all_tab_link").on("click",function(e){
      e.preventDefault();
      $.ajaxPrefilter(function( options, original_Options, jqXHR ) {
          options.async = true;
        });
       $.ajax({
            url:"/social-all",
            type:'GET',
            success:function (result){
              $("#all_tab").children().children().next().html(result);
                    },
            error:function(error){
              console.log(error);
            }
        });

    });
  });