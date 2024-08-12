<?php
$mysqli = new mysqli("localhost","root","","healthcare_system");
if($mysqli->connect_error){
    die("Faild to connect in db!".$mysqli->connect_error);
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];

$contact_number = " ";
if(isset($_POST["contact_number"])){
    $contact_number = $_POST["contact_number"];
}

$present_address = " ";
if(isset($_POST["present_address"])){
    $present_address = $_POST["present_address"];
}

$specialist = " ";
if(isset($_POST["specialist"])){
    $specialist = $_POST["specialist"];
}
$user_type = $_POST["user_type"];

$result_saved = $mysqli->query("INSERT INTO user(`first_name`,`last_name`,`email`,`password`,`contact_number`,`present_address`,`specialist`,`user_type`)VALUES('".$fname."','".$lname."','".$email."','".$password."','".$contact_number."','".$present_address."','".$specialist."','".$user_type."') ");

if($result_saved){
    header("location:patient-information.php?message=saved");
    header("location:admin-information.php?message=saved");
    header("location:doctor-information.php?message=saved");

}else{
    echo "Faild to save in db!".$mysqli->error;
}

?>