<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
            margin-left: 20px;
            font-size: 45px;
            text-align: center;
            background-color: blue;
            padding: 5px 0px;
            color: white;
            width: 900px;
            margin: 0 auto;
            margin-top: 150px;
            margin-bottom: 20px;
        }

        body{
            background-image: url(https://png.pngtree.com/background/20231016/original/pngtree-d-composite-image-of-doctor-s-torso-with-stethoscope-in-hand-picture-image_5577359.jpg);
        }

         button{
            margin-left: 70px;
            background-color: green;
            color: white;
        }
        button:hover{
            transform: scale(1.2);
        }
        p{
            text-align: center;
            font-weight: bold;
            font-size: 35px;
            background-color: white;
            width: 600px;
            margin: auto;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="nav-bar">
<ul>
    <li><a href="home.php">HOME</a></li>
    <li><a href="about-us.php">ABOUT US</a></li>
    <li><a href="shop.php">SHOP</a></li>
    <li><a href="login.php">LOGIN</a></li>
    <li><a href="all-users.php">All Users</a></li>
</ul>
</div>
<h1>Please enter your email and password!</h1>

<?php if(isset($_GET["failed"]) && $_GET["failed"] == "true" ) {?>
     <div class="denger">Email and password does not match!</div>
    <?php } ?>

<div class="login-sections">


<form action="login-manager.php" method="POST">
    <div class="from-section">
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="please enter your email">
    </div>

   <div class="from-section">
   <label for="email">Password:</label>
    <input type="password" name="password" placeholder="please enter your password">
   </div>

   <div class="from-section">
    <label for="user_type">User Type:</label>
    <input type="text" name="user_type" placeholder="enter your type">
   </div>

  <div class="btn">
    <button type="submit">Submit</button>
  </div>

</form>

</div>

</body>
</html>