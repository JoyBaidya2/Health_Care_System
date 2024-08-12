<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "healthcare_system");
if ($mysqli->connect_error) {
    die("Faild to connect in db" .$mysqli->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All users </title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 45px;
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

    <section class="wrapper">
        <h3> All users</h3>
        <div>
            <ul class="inline-list">
                <li><a href="all-users.php?user_type=doctor">View Doctors</a></li>
                <li><a href="all-users.php?user_type=patients">View Patients</a></li>
                <li><a href="all-users.php?user_type=admin">View Admins</a></li>
            </ul>
        </div>
        <div class="user-table-section">
            <table class="table" border="2">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Contact Number</th>
                        <th>Present Address</th>
                        <th>Specialist</th>
                        <th>User Type</th>
                    </tr>
                    <?php
                    $user_type = $_GET["user_type"];
                    $result = $mysqli->query("SELECT * FROM user WHERE user_type = '".$user_type."' ");
                    while ($user = $result->fetch_assoc()) {
                        echo "<tr>
            <td>" . $user['first_name'] . "</td>
            <td>" . $user['last_name'] . "</td>
            <td>" . $user['email'] . "</td>
            <td>" . $user['password'] . "</td>
            <td>" . $user['contact_number'] . "</td>
            <td>" . $user['present_address'] . "</td>
            <td>" . $user['specialist'] . "</td>
            <td>" . $user['user_type'] . "</td>
        </tr>";
                    }
                    ?>
                </thead>
            </table>
        </div>
    </section>
</body>
</html>