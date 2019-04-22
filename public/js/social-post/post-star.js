 $(document).ready(function(){
 // $(document).load(function(){
 	 // {{-- Get Starred Post Data --}}
      $("#starred_tab_link").on("click",function(e){
      e.preventDefault();
       // $.getScript("/js/social-post/post-star.js");
        $.ajaxPrefilter(function( options, original_Options, jqXHR ) {
          options.async = true;
        });
        $.ajax({
            // async:true,
            url:"/social-starred",
            type:'GET',
            // async: true,
            success:function (result){
                    $("#starred").html(result);
                    },
            error:function(error){
              console.log(error);
            }
        });

    });

    // {{-- ./Get Starred Post Data --}}
 // {{-- Starred Status --}}
    $(".star_link").on("click",function(e){
      e.preventDefault();
        var obj=this;
       $.ajax({
                url: $(this).attr("href"),
                type:'GET',
                success:function (result){
                if(($(obj).find('img').attr("class"))==('star_gold_icon'))
                {
                  if($(obj).parent().parent().parent().attr("id")=='starred')
                  {
                    $($(obj).parent().parent()).remove();
                  }
                  else
                  {
                    $(obj).find('img').attr("src","/img/socialpost_interaction/star/star-grey.png");
                    $(obj).find('img').attr("class","star_grey_icon");
                    $(obj).attr("href","/star/"+$(obj).data("postid"));  
                  }
                }
                else
                {
                  $(obj). find('img').attr("src","/img/socialpost_interaction/star/star-gold.png");
                  $(obj).find('img').attr("class","star_gold_icon");
                  $(obj).attr("href",'/starred/'+$(obj).data("postid"));
                }
              }
          });
      });
    // {{-- Starred Status --}}
 });  
