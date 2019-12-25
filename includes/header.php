
  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css\headerstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/07773cb0b0.js"></script>
  


    <title>vshoP</title>
  </head>
  <body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
          <ul>
            <li>
              <a class="list" href="./products.php">Home</a>
            </li>
          </ul>
     </div>
      <div class="col-md-3">
          <ul>
            <li>
              <a class="list" href="./cart.php">Cart</a>
            </li>
          </ul>
      </div>
          <div class="col-md-3">
            <ul>
              <?php

              require_once "./model.php";
                if (isset($_SESSION['userq'])) {
                  echo '<li><a class="list" href="logout.php">Logout</a></li></ul></div>';
                  echo'<div class="col-md-3">';
                  echo'<ul>';
                  echo '<li><a class="list" href="room.php">'.$_SESSION["user"].'</a></li></div>' ;
                }
                else{
                  echo '<li><a class="list" href="allorders.php">All Orders</a></li></ul></div>';
                  echo '<ul>';
                  echo ' <li><a class="list" href="reg.php">Registration</a></li></div>';
                }
              ?>
            </ul>
        </div> 
      </div>
    </div>
  </div>

        
                  
               
                   
                    


                    





              
             
           
    
            

            

           
          



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </body>
</html>








