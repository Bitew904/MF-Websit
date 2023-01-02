
<?php
include("../db.php");
session_start();
if (!isset($_SESSION['email'])){
header('location:../login.php');
}
$id = $_SESSION['email'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE email ='$id'");
$row = mysqli_fetch_array($result);
$role=$row['Role'];
$username=$row['name'];
?>