
<?php
include_once '../db.php';
    session_start();
    if(isset($_SESSION['user_id']) =="") {
        header("Location: ../login.php");
    }
	
	if(isset($_POST['submit']))
{
$dob=mysqli_real_escape_string($conn, $_POST['dob']);
$position=mysqli_real_escape_string($conn, $_POST['position']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$Gender = mysqli_real_escape_string($conn, $_POST['gender']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']); 
$fos = mysqli_real_escape_string($conn, $_POST['fos']); 
$edu = mysqli_real_escape_string($conn, $_POST['edu']); 
$apply = mysqli_real_escape_string($conn, $_POST['application']);
$address = mysqli_real_escape_string($conn, $_POST['address']); 

$arr = explode(" ",$position);
$url=implode("-",$arr);
$imgfile=$_FILES["postimage"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
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
$query=mysqli_query($conn,"insert into newsapplicant(Name, Mobile, email, Gender, DateOfBirth, FieldOfStudy, Position, date, cv, Application)
 values('" . $name . "','" . $mobile . "', '" . $email . "', '" . $Gender . "','" . $dob . "','" . $fos . "','" . $position . "','" . $edu . "',now(),'" . $imgnewfile . "','" . $apply . "')");
if($query)
{
echo '<script type="text/javascript">alert("Succesfully Applied");window.location=\'Application.php\';</script>';
}
else{
$error="Something went wrong . Please try again.";    
} 

}
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<META charset="UTF-8">
 <link rel="icon" type="image/png" href="../Img/5.png"/>
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
<title>Harbu Micro Finance Institute</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
	<link href="../styles/bootstrap.min.css" rel="stylesheet">
  <link href="../styles/backend.css" rel="stylesheet">
  <link href="../styles/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/fontawesome.min.css">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../style/style.css">
<link rel="stylesheet" href="../style/login.css">
</head>
<body>

<div class="header1">
<div class="social">
<ul>

        <li><i class="fa fa-phone">+25111 618 5510</i></li>
		    <li><i class="fa fa-envelope"></i>Harbumfi@gmail</li>
        
       </ul>
	<ul id="login">
	<li>
	
	</li>
	</ul>
	  <div class="topnav-right">
	  <ul>
	<li><a href="home.php">Bach to job</a></li> 
 <li><a href="logout.php"><i class="fa fa-lock"></i><?php echo $_SESSION['user_name']?></a></li>
	  </ul>
    
  </div>
</div>


  
<div class="hlogo">
<img src="../img/logo.png" />
</div>
<center>
<div class="harbuhead">
<h1>ሀርቡ ማይክሮ ፋይናንስ ኢንስቲቲውት አ.ማ <br>
Harbu Microfinance Institute S.C</h1>
</div>
</center>

</div>

<div class="main">
</br>
</br>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<legend>Apply Here <span class="text-danger"><?php if (isset($sucessmsage)) echo $sucessmsage; ?></span></legend>
					
					<div class="form-group">
            <label for="job">Job Title</label>
            <select class="custom-select" name="position" id="">
              <?php
              $result = mysqli_query($conn, "SELECT Job_Title FROM Vacancy");
             ?>
              <?php
             while($row =mysqli_fetch_assoc($result)){
             ?>
              <option><?php echo $row['Job_Title'];?></option>
              <?php }?>
            </select>
          </div>

					<div class="form-group">
						<label for="name">Full Name</label>
                           <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                          <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
					<div class="form-group">
						<label for="name">Phone</label>
                           <input type="text" name="mobile" class="form-control" value="" maxlength="50" required="">
                          <span class="text-danger"><?php if (isset($phone_error)) echo $phone_error; ?></span>
					</div>
					<div class="form-group">
                   <label>Gender</label>
                    Male: <input type="radio" name="gender" id="" value="M">
                    Female: <input type="radio" name="gender" id="" value="F">
                    <span class="text-danger"><?php if (isset($gender_error)) echo $gender_error; ?></span>
                      </div>
					<div class="form-group">
						<label>Email</label>
                          <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
                           <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>
					

					<div class="form-group">
						<label for="name">date of Birth</label>
						<input type="date" name="dob" required="">
						</div>
					<div class="form-group">
						<label for="name">Address</label>
						<input type="text" name="address" required class="form-control" />
						<span class="text-danger"><?php if (isset($address_error)) echo $address_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Field of Study</label>
						<input type="text" name="fos" required class="form-control" />
						<span class="text-danger"><?php if (isset($edu_error)) echo $edu_error; ?></span>
					</div>
					<div class="form-group">
						<label for="name">Educational Level</label>
						<select name="edu">
			            <option value="">Masrers Ande Above</option>
						<option value="">Degree</option>
						<option value="">Diploma</option>
						<option value="">Level 4</option>
						<option value="">Level 3</option>
						<option value="">Level 2</option>
						<option value="">Level 1</option>
						<option value="">grade 10</option>
						<option value="">grade  12</option>
						<option value="">below grade 10</option>
						</select>
					</div>
                     <div class="form-group">
						<label for="name">CV</label>
						<input type="file" name="postimage" required" />
						<span class="text-danger"><?php if (isset($file_error)) echo $file_error; ?></span>
						
					</div>
					<div class="form-group">
						<label for="name">Application Letter</label>
						<textarea name="application" class="form-control" value=""  required="" cols="25" rows="10"></textarea>
						<span class="text-danger"><?php if (isset($file_error)) echo $file_error; ?></span>
						
					</div>
					 
					<div class="form-group">
          <button type="submit" class="btn btn-sm btn-primary" name="submit">Apply</button>
     
        </div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($success_message)) { echo $success_message; } ?></span>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
		</div>
	</div>
	
</div>

<div class="footer">

<div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br>Aurope Microfinance awards 2010
          </div>

          <div class="banner-social">
		  <a href="#" class="banner-social__link">
            <i class="icon-mail"></i>
          </a>
		  <a href="#" class="banner-social__link">
            <i class="fab fa-telegram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            
          </div>

        </div>
      </div>
<div class="copy">
<center>
        <p>Copyright &copy; 2022 Harbu Microfinance||Designed by Harbumfi MIS Department  </p>    
        
	</center> 
	</div>
<div class="contactman">
<a href="tel:0909" class="banner-social__link">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
</div>
</div>
</div>
</body>
</html>

