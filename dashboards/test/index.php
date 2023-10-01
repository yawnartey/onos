<?php  

  include 'navUsers.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>


  <style type="text/css">
    .read-more-link{
      text-decoration: none;
      /*color: blue;*/
      margin-left: 10px;
    }
    .show-less-link{
      text-decoration: none;
      /*color: blue;*/
      margin-left: 10px;
    }
    .btn{
      margin-left: 10px; 
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="read-more">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
        <div class="col-md-4"></div>
    </div>

   <!-- subscription modal -->
    <div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                 Thank you for subscribing. You will be notified daily whenever an item is posted.
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>

  </div>



  <script type="text/javascript">
    $(document).ready(function(){
      var readMoreHtml = $(".read-more").html(); 
      var lessText = readMoreHtml.substr(0,500); 

      if( readMoreHtml.length>500){
        $(".read-more").html(lessText).append("<a href='' class='read-more-link btn btn-info' data-toggle='modal' data-target='#subscribe' >Show more</a>"); 
      }else{
        $(".read-more").html(readMoreHtml); 
      }
      // $("body").on("click", ".read-more-link", function(event){
      //   event.preventDefault(); 
      //   $(this).parent(".read-more").html(readMoreHtml).append("<a href='' class='show-less-link' >Show less</a>")
      // }); 

      // $("body").on("click", ".show-less-link", function(event){
      //   event.preventDefault(); 
      //   $(this).parent(".read-more").html(readMoreHtml.substr(0,500)).append("<a href='' class='read-more-link' >Read more</a>")
      // }); 
    }); 
  </script>
</body>
</html>