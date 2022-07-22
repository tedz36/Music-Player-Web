<?php


if(!isset($_SESSION)){
    session_start();
}

include_once("./connection/connections.php");
$con = connection();

mysqli_select_db($con, $musicproject_db);

$name = $_POST['username'];
$password = $_POST['password'];

$sql = " SELECT * FROM users WHERE username = '$name'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if($num ==  1) {
    echo "Username already taken!";

}else {
    $reg = "INSERT INTO users(username, password) VALUES ('$name','$password')";
    mysqli_query($con,$reg);
    header("Location: index.php");


}




?>