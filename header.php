<?php

function make_header() {
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jejeti</title>
    <link rel="stylesheet" href="hidden.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .navbar-nav.navbar-center {
        position: absolute;
        left: 50%;
        transform: translatex(-56%);
      }
      .row-footer {
        position: relative;
        left: 50%;
        transform: translatex(-50%);
      }
      .w3-button {
        width:150px;
      }
    </style>

    <!-- Toggles the shipping form based on user input -->
    <script>
      function toggleShippingForm() {
        $("#shipping_form_wrapper").toggleClass('hidden');
      }
    </script>
</head>



<nav class="navbar navbar-expand-lg navbar-light bg-warning">

  <a class="navbar-brand" href="index.php">
    <img src="jejetilogo.png" width="50" height="50" alt="brand-index-page-link"> Jejeti
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shop
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
                $conn = db_connect();
                //queries database for all categories and prints the link
                $category_query = "SELECT * FROM shape_index ;";
                $result = mysqli_query($conn, $category_query);
                echo "<a class='dropdown-item' href='all_cat.php'>All</a>";
                while($row = mysqli_fetch_array($result)){   //While loop that iterates through array
                  //Will create a link for every category of plant that our database includes
                  echo "<a class='dropdown-item' href='go_cat.php?value=".$row['shape_id']."'>".ucfirst($row['shape_size'])."</a>";
                }

          ?>

        </div>
      </li>
    </ul>
    <?php /*<ul class="nav navbar-nav navbar-center">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="input-group">
            <span class="input-group-addon">
            <select>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
        </span>

          <input id="search" type="text" class="form-control" name="search" placeholder="Email">

          <span class="input-group-addon"> <button>Submit</button></span>
      </div>
  </div>
  <div class="col-md-2"></div>
  </div>



    </ul> */?>

    <a href="login.php">
      <div class="login-button" > 
      <?php /* below for user sign in status */
        if(isset($_SESSION['customer_username'])) { //logged-in
          echo "Dear ".$_SESSION['customer_username'];
        } else { //temporary customer user items
          echo "<p><button class='w3-button w3-green'>Login</button></p>";
        }

<<<<<<< HEAD
  <div class="dropdown">
  <?php 
    if(isset($_SESSION['customer_username'])) { //logged in customer ?>
      <button class="dropbtn"> <?php
        echo "Dear ".$_SESSION['customer_username']; ?>
      </button>
      <div class="dropdown-content">
        <form method="post" action="account.php">
            <input type="submit" value="My Account"/></td></tr>
            <input type="hidden" name="type" value="edit"/> 
        </form>
        <form method="post" action="auth.php">
            <input type="submit" value="Log Out"/></td></tr>
            <input type="hidden" name="type" value="logout"/> 
        </form>
      </div>
  <?php   
        }else{ //guest ?>
      <button class="dropbtn"> <?php
        echo "Guest"; ?>
      </button>
      <div class="dropdown-content">
        <form method="post" action="account.php">
            <input type="submit" value="Log In"/></td></tr>
            <input type="hidden" name="type" value="login"/> 
        </form>
        <form method="post" action="account.php">
            <input type="submit" value="Sign Up"/></td></tr>
            <input type="hidden" name="type" value="signup"/> 
        </form>
=======
      ?>
>>>>>>> 593c02afe5bffa8f220e83a02a2aea6d1a1253b1
      </div>
    </a>

    <ul class="nav navbar-nav justify-content-end">
        <li>
          <a href="shopping_cart.php" style="text-decoration: none;">
            <?php 
            echo "&ensp;";
            cart_counter(); ?>
          <img width="30" height="30" alt="shopping-cart" src="shopping-cart-solid.svg"/>
          </a>
        </li>
    </ul>

    </td>



  </div>





</nav>








<body style="margin-bottom: 100px;">






<?php
}

