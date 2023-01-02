<?php

    session_start();
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
	 
 <li><a href="logout.php"><i class="fa fa-lock"></i>logout</a></li>
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

<center>
<div class ="ann">
	<h1 > Internal/ External vacancy Announcement<h1>
	
	<p >Harbu MFI is Established in 2005(G.C.) and Affiliated to facilitator for Change(NGO),Harbu MFI is aims at promoting agricultural productivitie and matketing by facilitating value chain development and access to fianacial service to urban and rural community.</p>
	<br>
	<p >Harbu Micro Finance S.C wants to recruit professional forthe following Vacant Positions:-Interested applicants who meet the below requirements are invited to submit their application letter & CV along with nonreturnable credentials with 7 (seven) working days from this announcement to Human Resource & Administration Office Bole,near Atlas Hotel or submit through our email address at <a class="active" href="home.php">Harbumfi@gmail.com</a>  or apply through our online Application by Clicking <a href="Application.php">apply</a> link.</p>
<?php  
	include_once '../db.php';
$result = mysqli_query($conn,"SELECT * FROM vacancy");
if (mysqli_num_rows($result) > 0) {
	
?>

  <table>
  
  <tr >
    <th >NO</th>
	<th >Job Title</th>
	<th>Total vacancy</th>
    <th >Qualification</th>
    <th >Exepraince</th>
	<th >Location</th>
	<th>Term</th>
	<th >Status</th>
	
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td ><?php echo $row["V_ID"]; ?></td>
	<td ><?php echo $row["Job_Title"]; ?></td> 
	<td ><?php echo $row["Total_Vacancy"]; ?></td>
	<td ><?php echo $row["Qualification"]; ?></td>
	<td ><?php echo $row["Description"]; ?></td>
	<td ><?php echo $row["Location"]; ?></td>
	<td ><?php echo $row["Term"]; ?></td>

		<td ><a href="Application.php">apply</a></td>
		
	
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


	
	</div>
</center>
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

