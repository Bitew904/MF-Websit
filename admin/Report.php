<?php

    session_start();
    if(isset($_SESSION['user_id']) =="") {
        header("Location: ../login.php");
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
<div class ="menu">
<ul>
<li ><a href="Home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
<li><a href="VeiwApplicants.php">Veiw Applicant</a></li>
<li><a href="addVacancy.php">Add Vacancy</a></li>
<li><a href="News.php">Add News</a></li>
<li><a href="Report.php">Add Report</a></li>
<li><a href="portifoloo.php">Add Portifolow</a></li>
<li><a href="Downloads.php">Downloads</a></li>
</ul>



</div>

</div>

	
<div class="main">
<center>
<div class="hr">
</br>
</br>
<form id="form1" method="post" action="addnews.php">
<fieldset>
					<legend>Add News </legend>
					
					<div class="form-group">
						<label for="name">News Title</label>
                           <input type="text" name="title" class="form-control" value="" maxlength="50" required="">
                          <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
					  
					 <div class="form-group">
                   <label>New Discription</label>
    
				    <textarea name="Discription" class="form-control" value=""  required="" cols="25" rows="10"></textarea>
             
                      </div>
					  <div class="form-group">
                   <label>Image</label>
                   <input type="file" name='dp'>
                  
                      </div>
					  
					<div class="form-group">
						<input type="submit" name="add" value="Add" class="btn btn-primary" />
					</div>
				</fieldset>
</form>
      

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

