 $( document ).ready(function() {
    $('.delete-record').click(function(event){ 
      event.preventDefault();                                  
      // console.log($(this).data('taskid'));                                 
      var url='/crm/task/'+$(this).data('taskid');
      // console.log(url);
      $('#modal-default-form').attr('action',url);                             
      $('#modal-default').modal('show')
    });
  });