<?php
session_start();
include_once 'db.php';
$success_msg = 'New user created successfully';

if (isset($_POST['adduser'])) {

    $customer_number = stripcslashes(mysqli_real_escape_string($conn, $_POST['customer_number']));
    $customer_type = stripcslashes(mysqli_real_escape_string($conn, $_POST['customer_type']));
    $first_name = stripcslashes(mysqli_real_escape_string($conn, $_POST['first_name']));
    $middle_name = stripcslashes(mysqli_real_escape_string($conn, $_POST['middle_name']));
    $surname = stripcslashes(mysqli_real_escape_string($conn, $_POST['surname']));
    $gender = stripcslashes(mysqli_real_escape_string($conn, $_POST['gender']));
    $date_of_birth = stripcslashes(mysqli_real_escape_string($conn, $_POST['date_of_birth']));
    $nationality = stripcslashes(mysqli_real_escape_string($conn, $_POST['nationality']));
    
    $insert = "INSERT INTO customers(customer_number, customer_type, first_name, middle_name, surname, gender, date_of_birth, nationality)
	 VALUES('$customer_number', '$customer_type', '$first_name', '$middle_name', '$surname', '$gender', '$date_of_birth', '$nationality')";

    if (mysqli_query($conn, $insert)) {
        header('Location: ../login.php');
        $_SESSION['success_msg'] = 'New user created successfully';
    } else {
        echo "Error: " . $insert . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}

