<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Information</title>
    <link rel="stylesheet" href="style.css">

    <style>
        h1{
            text-align: center;
            margin-top: 60px;
            font-size: 50px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-bottom: 20px;
            color: blue;
            
        }

        h2{
            font-weight: bold;
            font-size: 40px;
            color: rgb(24, 6, 139);  
            margin-bottom: 10px;        
        }

        body{
            background-image: url(https://cdn.wallpapersafari.com/87/98/rOGdWY.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .sucss{
             width: 1000px;
             margin: 0 auto;
             margin-bottom: 8px;
             color: green;
             font-size: 34px;
             background-color: white;
             padding: 5px 0px;
             
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

<h1>Please Create Admin account</h1>
<?php if(isset($_GET["message"]) && $_GET["message"] =="saved" ) {?>
       <div class="success">Data inserted successfully!</div>
        <?php }?>



<div class="from-account">

 <form action="users.php" method="POST">
    <h2>Please fill up full form</h2>

<div class="from-section">
    <label for="fname">First Name</label>
    <input type="text" name="fname" placeholder="please enter your first name" >
</div>

    
    <div class="from-section">
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" placeholder="Please enter your last name">
    </div>

   

    <div class="from-section">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Please enter your valid email">
    </div>

    <div class="from-section">
        <label for="fname">Password:</label>
        <input type="password" name="password" placeholder="Please enter your password">
    </div>

    <div class="from-section">
        <label for="user_type">User Type:</label>
        <input type="text" name="user_type" placeholder="Please enter your type">
    </div>

    <div class="btn">
        <button class=" btn-success" style="background-color: green;" type="submit">Submit</button>
        <button class=" btn-denger" style="background-color: red;" type="reset">Reset</button>
    </div>
 
 </form>

</div>
    
</body>
</html>