<?php

$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "project_database");
if(isset($_POST['Ingredients']))
{

    $arr=array();
    foreach ($_POST['Ingredients'] as $ingredient) {
        array_push($arr,$ingredient);
    }
    $size = sizeof($arr);
    if($size == 1)
    {
        $query = "select * from t1 where (Ing1 = '$arr[0]' or Ing2 = '$arr[0]' or Ing3 = '$arr[0]' or Ing4 = '$arr[0]' or Ing5 = '$arr[0]' or Ing6 = '$arr[0]' or Ing7 = '$arr[0]')";
    }
    if($size == 2)
    {
        $query =  "select * from t1 where (Ing1 = '$arr[0]' or Ing2 = '$arr[0]' or Ing3 = '$arr[0]' or Ing4 = '$arr[0]' or Ing5 = '$arr[0]' or Ing6 = '$arr[0]' or Ing7 = '$arr[0]') and (Ing1 = '$arr[1]' or Ing2 = '$arr[1]' or Ing3 = '$arr[1]' or Ing4 = '$arr[1]' or Ing5 = '$arr[1]' or Ing6 = '$arr[1]' or Ing7 = '$arr[1]')";

    }
    if($size == 3)
    {
        $query =  "select * from t1 where (Ing1 = '$arr[0]' or Ing2 = '$arr[0]' or Ing3 = '$arr[0]' or Ing4 = '$arr[0]' or Ing5 = '$arr[0]' or Ing6 = '$arr[0]' or Ing7 = '$arr[0]') and (Ing1 = '$arr[1]' or Ing2 = '$arr[1]' or Ing3 = '$arr[1]' or Ing4 = '$arr[1]' or Ing5 = '$arr[1]' or Ing6 = '$arr[1]' or Ing7 = '$arr[1]') and (Ing1 = '$arr[2]' or Ing2 = '$arr[2]' or Ing3 = '$arr[2]' or Ing4 = '$arr[2]' or Ing5 = '$arr[2]' or Ing6 = '$arr[2]' or Ing7 = '$arr[2]')]";

    }
    if($size == 4)
    {
        $query =  "select * from t1 where (Ing1 = '$arr[0]' or Ing2 = '$arr[0]' or Ing3 = '$arr[0]' or Ing4 = '$arr[0]' or Ing5 = '$arr[0]' or Ing6 = '$arr[0]' or Ing7 = '$arr[0]') and (Ing1 = '$arr[1]' or Ing2 = '$arr[1]' or Ing3 = '$arr[1]' or Ing4 = '$arr[1]' or Ing5 = '$arr[1]' or Ing6 = '$arr[1]' or Ing7 = '$arr[1]') and (Ing1 = '$arr[2]' or Ing2 = '$arr[2]' or Ing3 = '$arr[2]' or Ing4 = '$arr[2]' or Ing5 = '$arr[2]' or Ing6 = '$arr[2]' or Ing7 = '$arr[2]') and (Ing1 = '$arr[3]' or Ing2 = '$arr[3]' or Ing3 = '$arr[3]' or Ing4 = '$arr[3]' or Ing5 = '$arr[3]' or Ing6 = '$arr[3]' or Ing7 = '$arr[3]')";
    }
    if($size == 5)
    {
        $query =  "select * from t1 where (Ing1 = '$arr[0]' or Ing2 = '$arr[0]' or Ing3 = '$arr[0]' or Ing4 = '$arr[0]' or Ing5 = '$arr[0]' or Ing6 = '$arr[0]' or Ing7 = '$arr[0]') and (Ing1 = '$arr[1]' or Ing2 = '$arr[1]' or Ing3 = '$arr[1]' or Ing4 = '$arr[1]' or Ing5 = '$arr[1]' or Ing6 = '$arr[1]' or Ing7 = '$arr[1]') and (Ing1 = '$arr[2]' or Ing2 = '$arr[2]' or Ing3 = '$arr[2]' or Ing4 = '$arr[2]' or Ing5 = '$arr[2]' or Ing6 = '$arr[2]' or Ing7 = '$arr[2]') and (Ing1 = '$arr[3]' or Ing2 = '$arr[3]' or Ing3 = '$arr[3]' or Ing4 = '$arr[3]' or Ing5 = '$arr[3]' or Ing6 = '$arr[3]' or Ing7 = '$arr[3]') and (Ing1 = '$arr[4]' or Ing2 = '$arr[4]' or Ing3 = '$arr[4]' or Ing4 = '$arr[4]' or Ing5 = '$arr[4]' or Ing6 = '$arr[4]' or Ing7 = '$arr[4]')";
    }
    if($size == 6)
    {
        $query =  "select * from t1 where (Ing1 = '$arr[0]' or Ing2 = '$arr[0]' or Ing3 = '$arr[0]' or Ing4 = '$arr[0]' or Ing5 = '$arr[0]' or Ing6 = '$arr[0]' or Ing7 = '$arr[0]') and (Ing1 = '$arr[1]' or Ing2 = '$arr[1]' or Ing3 = '$arr[1]' or Ing4 = '$arr[1]' or Ing5 = '$arr[1]' or Ing6 = '$arr[1]' or Ing7 = '$arr[1]') and (Ing1 = '$arr[2]' or Ing2 = '$arr[2]' or Ing3 = '$arr[2]' or Ing4 = '$arr[2]' or Ing5 = '$arr[2]' or Ing6 = '$arr[2]' or Ing7 = '$arr[2]') and (Ing1 = '$arr[3]' or Ing2 = '$arr[3]' or Ing3 = '$arr[3]' or Ing4 = '$arr[3]' or Ing5 = '$arr[3]' or Ing6 = '$arr[3]' or Ing7 = '$arr[3]') and (Ing1 = '$arr[4]' or Ing2 = '$arr[4]' or Ing3 = '$arr[4]' or Ing4 = '$arr[4]' or Ing5 = '$arr[4]' or Ing6 = '$arr[4]' or Ing7 = '$arr[4]') and (Ing1 = '$arr[5]' or Ing2 = '$arr[5]' or Ing3 = '$arr[5]' or Ing4 = '$arr[5]' or Ing5 = '$arr[5]' or Ing6 = '$arr[5]' or Ing7 = '$arr[5]')";
    }
    if($size == 7)
    {
        $query =  "select * from t1 where (Ing1 = '$arr[0]' or Ing2 = '$arr[0]' or Ing3 = '$arr[0]' or Ing4 = '$arr[0]' or Ing5 = '$arr[0]' or Ing6 = '$arr[0]' or Ing7 = '$arr[0]') and (Ing1 = '$arr[1]' or Ing2 = '$arr[1]' or Ing3 = '$arr[1]' or Ing4 = '$arr[1]' or Ing5 = '$arr[1]' or Ing6 = '$arr[1]' or Ing7 = '$arr[1]') and (Ing1 = '$arr[2]' or Ing2 = '$arr[2]' or Ing3 = '$arr[2]' or Ing4 = '$arr[2]' or Ing5 = '$arr[2]' or Ing6 = '$arr[2]' or Ing7 = '$arr[2]') and (Ing1 = '$arr[3]' or Ing2 = '$arr[3]' or Ing3 = '$arr[3]' or Ing4 = '$arr[3]' or Ing5 = '$arr[3]' or Ing6 = '$arr[3]' or Ing7 = '$arr[3]') and (Ing1 = '$arr[4]' or Ing2 = '$arr[4]' or Ing3 = '$arr[4]' or Ing4 = '$arr[4]' or Ing5 = '$arr[4]' or Ing6 = '$arr[4]' or Ing7 = '$arr[4]') and (Ing1 = '$arr[5]' or Ing2 = '$arr[5]' or Ing3 = '$arr[5]' or Ing4 = '$arr[5]' or Ing5 = '$arr[5]' or Ing6 = '$arr[5]' or Ing7 = '$arr[5]') and (Ing1 = '$arr[6]' or Ing2 = '$arr[6]' or Ing3 = '$arr[6]' or Ing4 = '$arr[6]' or Ing5 = '$arr[6]' or Ing6 = '$arr[6]' or Ing7 = '$arr[6]')";

    }
}
if(isset($_POST['submit']))
{
    echo $query;
    $result = mysqli_query($con, $query);
    while($row = $result->fetch_assoc())
    {
        echo $row["DishName"];
        echo "<br>";
        echo $row["Step1"];
        echo "<br>";
        echo $row["Step2"];
        echo "<br>";
        echo $row["Step3"];
        echo "<br>";
        echo $row["Step4"];
        echo "<br>";
        echo $row["Step5"];
        echo "<br>";
        echo "------------------------------------------------------------------------------------------------";
        echo "<br>";

    } 
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>FoodTank</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="b.css">
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="text/javascript" src="file.js"></script>
    <script src="https://code.jquery.com/jquery-git2.min.js"></script>

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
      <ul class="nav navbar-nav navbar-right">
        
              <li><a class="dropdown-toggle" data-toggle="dropdown" href="signupuser.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Sign Up <span class="caret"></span></a>
      </li>
       <li><a class="dropdown-toggle" data-toggle="dropdown" href="loginuser.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Log in <span class="caret"></span></a>
      </li>
              
      
      </ul>
    </div>
  </div>
</nav>
     <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="content">
                <h1><font color="white">FoodTank</font></h1>
                <h2><font color="white">Start planning your Receipe:)</font></h2>
                <hr>
                <a href="home.php" class="btn btn-default btn-lg"><i class="fa fa-tree"></i> Get Started!</a>
            </div>
        </div>
    </div>
 </div>
</body>
</html>