<?php 
$mysqli = new mysqli("localhost","root","","healthcare_system");
if($mysqli->connect_error){
    die("Faild to connect in db!".$mysqli->connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];
$user_type = $_POST["user_type"];

$user = $mysqli->query("SELECT * FROM user WHERE email='".$email."' AND password='".$password."' AND user_type='".$user_type."' ");

if($user && $user->num_rows > 0){
    $users = $user->fetch_assoc();
    session_start();
    $_SESSION["email"] = $users["email"];
    $_SESSION["first_name"] = $users["first_name"];
    $_SESSION["user_type"] = $users["user_type"];
    header("location:home.php?message=saved");
}else{
    header("location:login.php?failed=true");
}

?>