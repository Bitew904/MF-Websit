<?php
include("includes/db.php");
session_start();
if (!isset($_SESSION['id'])){
header('location:home.php');
}

$id = $_SESSION['id'];

$query=mysqli_query ($conn,"SELECT * FROM user WHERE user_id ='$id'") or die(mysqli_error());
$row=mysql_fetch_array($query);
$cover_picture=$row['cover_picture'];
$profile_picture=$row['profile_picture'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];
?>