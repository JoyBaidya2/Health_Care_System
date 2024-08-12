<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Information</title>
    <link rel="stylesheet" href="style.css">

    <style>
        h1{
            text-align: center;
          
            font-size: 35px;
            font-family: 'Courier New', Courier, monospace;
            margin-bottom: 10px;
            color: blue;
            background-color: cornsilk;
            width: 1000px;
            margin: 0 auto;
            margin-bottom: 10px;
            border-radius: 10px;
            
        }

        h2{
            font-weight: bold;
            font-size: 40px;
           color: darkslateblue;  
            margin-bottom: 10px;  
            margin-left: 70px;
            font-weight: bolder; 
            font-family: Verdana, Geneva, Tahoma, sans-serif;     
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

        body{
            background-image: url(https://wallpapercave.com/wp/wp2469685.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
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

<h1>Please Create Patiens account</h1>
<?php if(isset($_GET["message"]) && $_GET["message"] =="saved" ) {?>
       <div class="success">Data inserted successfully!</div>
        <?php }?>
<div class="from-account">

 <form action="users.php" method="POST">
    <h2>Please fill up full form</h2>


    <div class="from-section">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" placeholder="Please enter your first name">
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
        <label for="contact_number">Contact Number</label>
        <input type="number" name="contact_number" placeholder="please enter your contact number">
    </div>

    <div class="from-section">
        <label for="present_address">Present Address</label>
        <input type="text" name="present_address" placeholder="enter your present address">
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