
<?php
include_once '../db.php';
if (isset($_POST['add'])) {
$Job=mysqli_real_escape_string($conn, $_POST['Jobid']);
$dept=mysqli_real_escape_string($conn, $_POST['Department']);
$title=mysqli_real_escape_string($conn, $_POST['title']);
$total = mysqli_real_escape_string($conn, $_POST['totalv']);
$qualification = mysqli_real_escape_string($conn, $_POST['cmbQual']);
$Discription = mysqli_real_escape_string($conn, $_POST['Discription']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$term = mysqli_real_escape_string($conn, $_POST['term']);


if(mysqli_query($conn, "INSERT INTO vacancy(JOBID, departement, Job_Title, Term, Total_Vacancy, Qualification, Description, Post_Date ,Location) VALUES('" . $Job. "','" . $dept. "','" . $title . "','" . $term . "','" . $total . "', '" . $qualification . "', '" . $Discription . "',NOW(),'" . $location . "')")) {
echo '<script type="text/javascript">alert("Job Succesfully Posted");window.location=\'AddVacancy.php\';</script>';
exit();
} else {
echo "Error: " , "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>