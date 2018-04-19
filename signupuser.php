<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
            
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif|Roboto" rel="stylesheet">

          <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style type="text/css">
    /*nav */
    body { padding-top: 50.5px; }

            .jumbotron {
                color: #2c3e50;
                background: #ecf0f1;

            }
            .navbar-inverse {
                background: rgba(0,0,0,1);
                color: #fff;
            }
            .navbar-inverse .navbar-brand, .navbar-inverse a{
                color:#fff;
            }
            .navbar-inverse .navbar-nav>li>a {
                color: #fff;
            }
            .navbar{
                z-index: 9999;
               position: absolute;
               top: 0px;
               border-radius: 0px !important;
               width: 100%;
               position: fixed !important;
            }
            li:hover{
                background-color: #fff;
                color: black !important;
            }
            li>a:hover{
                color:black !important;
            }
          
            .active{
                color:white;
            }
            .navbar-inverse .navbar-nav>.open>a:hover{
                color:#fff !important;
            }

 footer {
    background-color: black;
    display: block;
    color: #58687A;
    padding: 33px 0 15px;
    margin-top: 200px;
}

.footer_socials {
    float: right;
}

.footer_socials .fa {
    border-radius: 500px;
    background-color: #ddd;
    color: rgb(17,171, 176);
    width: 60px;
    height: 60px;
    text-align: center;
    line-height: 60px;
    font-size: 30px;
    display: block;
    float: left;
}

.footer_socials .fa:hover {
    background-color: black;
}

.footer_socials .fa.fa-pinterest {
    font-size: 36px;
}

.footer_socials .fa+.fa{
    margin-left: 20px;
}

.sub_copy {
    font-weight: normal;
    padding-top: 6px;
    color: #aaa;
}

            /*  other than nav  */
</style>
</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">FoodTank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#cont">Search</a></li> 
        <li><a href="index.php#issue">Add New</a></li> 
        <li><a href="index.php#join">About Us</a></li> 
      </ul>

      <?php
        if(!isset($_SESSION['name']))
        {
        ?>
      <ul class="nav navbar-nav navbar-right">
        
              <li><a class="dropdown-toggle" data-toggle="dropdown" href="registration.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign Up <span class="caret"></span></a>
      </li>
       <li><a class="dropdown-toggle" data-toggle="dropdown" href="loginuser.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Log in <span class="caret"></span></a>
      </li>
              
      
      </ul>
      <?php
            }
            else
            {
               echo "<ul class='nav navbar-nav navbar-right'>";
               echo "<li> Signed in as".$_SESSION['name']."</li>";
               echo "<li>Logout</li>";
                    
            }
            ?>





    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <h1 style="text-align: center">User Sign Up</h1>
        <div style="max-width: 320px; margin: 25px auto;">
            <form action="signupuser.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name" required>
                </div>
                 <div class="form-group">
                    <input class="form-control" type="text" name="number" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="mail" placeholder="Mail-id" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" name="submit_reg_u">Sign Up!</button>
                </div>

            </form>
        </div>
    </div>
</div>




            <!--==============================footer=================================-->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <div class="footer_socials">
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="mailto:xyz@gmail.com" class="fa fa-google-plus"></a>
                                <a href="#" class="fa fa-pinterest"></a>
                            </div>
                            <div class="copy">
                                <span class="brand">FoodTank</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                                <div class="sub_copy">
                                    Website designed by Abhishek and T-101 Group of Industries..
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


            <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>




</body>
</html>