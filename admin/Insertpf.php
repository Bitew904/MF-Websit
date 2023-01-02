
<?php
include_once '../db.php';
if (isset($_POST['add'])) {
$cutomer=mysqli_real_escape_string($conn, $_POST['cutno']);
$branch=mysqli_real_escape_string($conn, $_POST['cutbr']);
$agent=mysqli_real_escape_string($conn, $_POST['cutag']);
$aset = mysqli_real_escape_string($conn, $_POST['cutas']);

if(mysqli_query($conn, "INSERT INTO portifoleo(date, Customer, Branch, Agents, Asset) VALUES(now(),'" . $cutomer. "','" . $branch. "','" . $agent . "','" . $aset . "')")) {
echo '<script type="text/javascript">alert("Portfolow Added Succefully");window.location=\'portifoloo.php\';</script>';
exit();
} else {
echo "Error: " , "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>