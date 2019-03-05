 $( document ).ready(function() {
    $('.delete-record').click(function(event){ 
      event.preventDefault();                                  
      // console.log($(this).data('taskid'));                                 
      var url='/crm/task/'+$(this).data('taskid');
      // var url='/crm/task/'+$(this).data('boardid');

      // console.log(url);
      $('#modal-default-form').attr('action',url);                             
      $('#modal-default').modal('show')
    });
  });


  // $( document ).ready(function() {
  //   $('.delete-record').click(function(event){ 
  //     event.preventDefault();                                  
  //     // console.log($(this).data('taskid'));                                 
  //     var url='/boards'/'.$data['board_id']'+$(this).data('boardid');
  //     // console.log(url);
  //     $('#modal-default-form').attr('action',url);                             
  //     $('#modal-default').modal('show')
  //   });
  // });