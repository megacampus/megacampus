<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  
</head>
<body>

 <br> 
<a href="#" class="btn btn-lg btn-success"
   data-toggle="modal"
   data-target="#basicModal">Click to open Modal</a>



<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-default">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    QUESTION
                </h4>
            </div>
            <div class="modal-body">
                <h4>Are you sure to delete the item?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="Yes">Yes</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="No">No</button>
        </div>
    </div>
  </div>
</div>


</div> 




<script  src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<script type="text/javascript">

$( document ).ready(function() {

  console.log('Ready!!')
   $('#basicModal').on('show.bs.modal', function (e) {
      //e.preventDefault();
      console.log('Window is Display!!')
      $message = $(e.relatedTarget).attr('data-message');
      $(this).find('.modal-body p').text($message);
      $title = $(e.relatedTarget).attr('data-title');
      $(this).find('.modal-title').text($title);

      // Pass form reference to modal for submission on yes/ok
     var form = $(e.relatedTarget).closest('form');
     $(this).find('.modal-footer #confirm').data('form', form);
  });
    
  // Form confirm (yes/ok) handler, submits form 
  /*$('#basicModal').find('.modal-footer #Yes').on('click', function(e){
     //$(this).data('form').submit();
     console.log(e.target.id);
     console.log('User Press The Button YES')
  });

  $('#basicModal').find('.modal-footer #No').on('click', function(){
     //$(this).data('form').submit();
     console.log('User Press The Button NO')
  });*/


  $('#basicModal').find('.modal-footer').on('click', function(e){
     //$(this).data('form').submit();
     if (e.target.id=='Yes'){
          console.log('User Press The Button YES')
          $('#basicModal').hide().fadeOut('slow');
     }else{
          console.log('User Press The Button NO') 
     }
     
  });

  
});


 
</script>


</body>
</html>