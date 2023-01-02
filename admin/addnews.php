
<?php
include_once '../db.php';

if(isset($_POST['submit']))
{
$title=mysqli_real_escape_string($conn, $_POST['title']);
$Discription = mysqli_real_escape_string($conn, $_POST['Discription']);

$imgfile=$_FILES["postimage"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["postimage"]["tmp_name"],"upload/".$imgnewfile);

$status=1;
$query=mysqli_query($conn,"insert into news(Date, title, Description, image) values(Now(),'" . $title. "','" . $Discription. "','" . $imgnewfile . "')");
if($query)
{
echo '<script type="text/javascript">alert("news Succesfully Posted");window.location=\'news.php\';</script>';
}
else{
$error="Something went wrong . Please try again.";    
} 

}
}
?>