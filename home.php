<?php
session_start();


if(isset($_POST['Ingredients']))
{
    $arr=array();
    foreach ($_POST['Ingredients'] as $ingredient) {
        array_push($arr,$ingredient);
        
        # code...
    }
    print_r($arr);
    echo sizeof($arr);
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>FoodTank</title>
    <link rel="stylesheet" type="text/css" href="beauty.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
 <h1>Ingredients</h1>
 <hr>
 <hr>








            <form action=" " method="POST">
            	<p>
<div class="container">
        <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Ajwain" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Ajwain</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Almonds" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Almonds</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Anjeer" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Anjeer</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Apple" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Apple</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Asparagus" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Asparagus</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="BakingPowder" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Baking Powder</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Banana" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Banana</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Basil" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Basil</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="BasilLeaves" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Basil Leaves</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Bathua" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Bathua</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Beans" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Beans</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="BeefSteak" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Beef Steak</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="1850" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Beetroot</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Beetroot" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Bell Pepper</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="BlackPeper" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Black Peper</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="BlackPeppercorns" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Black Peppercorns</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Bread" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Bread</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="BreadCrums" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Bread Crums</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Brinjal" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Brinjal</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Broccoli" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Broccoli</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Cabbage" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cabbage</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CanolaOil" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Canola Oil</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CardamomPowder" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cardamom Powder</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Capsicum" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Capsicum</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Carrot" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Carrot</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Cashewnuts" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cashewnuts</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CauliFlower" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cauli Flower</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Celery" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Celery</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="ChanaDal" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Chana Dal</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CharSiuSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Char Siu Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Cheese" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cheese</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="ChestNut" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">ChestNut</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Chickhen" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Chickhen</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="ChickenBroth" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Chicken Broth</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="ChickhenStock" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Chickhen Stock</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="ChickPea" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Chick Pea</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Chilli" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Chilli</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="ChilliPaste" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Chilli Paste</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="ChilliSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Chilli Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Clove" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Clove</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Cocoa" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cocoa</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CoconutMilk" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Coconut Milk</span>
                    <span class="clear"></span>
            </span>
             <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Coffee" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Coffee</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CornStarch" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">CornStarch</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CondensedMilk" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Condensed Milk</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CorianderLeaves" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Coriander Leaves</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Corn" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Corn</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CornFlour" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Corn Flour</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Cream" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cream</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Cucumber" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cucumber</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CurryPowder" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Curry Powder</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Cumin" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cumin</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="CuminPowder" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cumin Powder</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Curd" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Curd</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Dashi" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Dashi</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Egg" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Egg</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="EggPlants" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Egg Plants</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Fish" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Fish</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="FiveSpicePowder" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Five Spice Powder</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="FishSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Fish Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Flour" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Flour</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="GaramMasala" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Garam Masala</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Garlic" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Garlic</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="GarlicPowder" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Garlic Powder</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Ghee" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Ghee</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Ginger" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Ginger</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="GingerandGarlic Paste" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Ginger & Garlic Paste</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Gobi" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Gobi</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Grapes" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Grapes</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="GramPistachio" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Gram Pistachio</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="GreenCardamomPowder" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Cardamom Powder</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="GreenChilies" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Green Chilies</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="GreenCurryPaste" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Green Curry Paste</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="GreenPeas" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Green Peas</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="GroundCoriander" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Ground Coriander</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Herb" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Herb</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="HoisinSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Hoisin Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Honey" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Honey</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="HotChilliSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Hot Chilli Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Jeera" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Jeera</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Kalonji" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Kalonji</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="KhusKhus" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Khus Khus</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="KidneyBeans" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Kidney Beans</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="KuttukaAtta" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Kuttu ka Atta</span>
                    <span class="clear"></span>
            </span>
            
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Lamb" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Lamb</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="LasagnaSheets" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Lasagna Sheets</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Lemon" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Lemon</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="LemonGrass" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Lemon Grass</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Lemon" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Lemon</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="LemonJuice" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Lemon Juice</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Lettuce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Lettuce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Lime" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Lime</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="LimeLeaves" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Lime Leaves</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Macroni" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Macroni</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Maida" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Maida</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Mango" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mango</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Masala" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Masala</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Mascarpone" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mascarpone</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Mayonaise" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mayonaise</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Milk" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Milk</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="MintLeaves" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mint Leaves</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Mirin" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mirin</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="MixedFruits" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mixed Fruits</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Mooli" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mooli</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="MoongDal" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Moong Dal</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Mushrooms" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mushrooms</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="MustardPowder" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mustard Powder</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="MustardSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mustard Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Mutton" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Mutton</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Nil" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Nil</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Noodles" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Noodles</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Oil" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Oil</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="OliveOil" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Olive Oil</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Onion" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Onion</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="OnionPowder" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Onion Powder</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Orange" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Orange</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Oregano" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Oregano</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Palak" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Palak</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Paneer" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Paneer</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Parsley" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Parsley</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Paprika" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Paprika</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Pasta" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Pasta</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="PeanutButter" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Peanut Butter</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="PeanutOil" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Peanut Oil</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="PeanutSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Peanut Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Peas" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Peas</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Peper" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Peper</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Pickle" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Pickle</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Pineapple" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Pineapple</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Pistachio" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Pistachio</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Plum" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Plum</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Pork" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Pork</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Potato" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Potato</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Prawns" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Prawns</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Pudina" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Pudina</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="RedChilli" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Red Chilli</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="RedCurryPaste" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Red Curry Paste</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="RedCurryPaste" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Red Curry Paste</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="RedPepper" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Red Pepper</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="RedWine" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Red Wine</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Rice" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Rice</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="RoseWater" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Rose Water</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Safforn" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Safforn</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="SaladGreen" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Salad Green</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Salt" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Salt</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Sausages" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Sausages</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Scallion" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Scallion</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="SchezwanSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Schezwan Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="SendhaNamak" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Sendha Namak</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="SesameOil" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Sesame Oil</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="SesameSeeds" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Sesame Seeds</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="SoyaSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Soya Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="SpaghettiSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Spaghetti Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Spinach" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Spinach</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Sprout" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Sprout</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Strawberry" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Strawberry</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Sugar" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Sugar</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="SweetChilliSauce" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Sweet Chilli Sauce</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Tofu" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Tofu</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Tomato" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Tomato</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Turkey" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Turkey</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Turmeric" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Turmeric</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="UradDal" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Urad Dal</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="VanillaEscense" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Vanilla Escense</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Vinegar" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Vinegar</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Water" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Water</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="WheatFlour" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Wheat Flour</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="WhiteButter" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">White Butter</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="WhiteSesame" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">White Sesame</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Yeast" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Yeast</span>
                    <span class="clear"></span>
            </span>
            <span class="check-box">
                    <input data-umbrella-ingredient="1" type="checkbox" value="Yogurt" name="Ingredients[]" class="ingredient-check" />
                    <span class="ingredient-checkbox"></span>
                    <span class="ingredient-checkbox-label">Yogurt</span>
                    <span class="clear"></span>
            </span>
        </div>
        </p>
         <div class="submiddle">
				<input type="submit" name="submit" value="Search">
		</div>            





</form>
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