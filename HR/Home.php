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
<?php      
			include_once 'db_connection.php';
            
?>
<div class ="menu">
<ul>
<li ><a href="Home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
<li><a href="VeiwApplicants.php">Veiw Applicant</a></li>
<li><a href="addVacancy.php">Add Vacancy</a></li>
<li><a href="News.php">Add News</a></li>
<li><a href="Report.php">Add Report</a></li>
<li><a href="Downloads.php">Downloads</a></li>
</ul>



</div>

</div>

	
<div class="main">
<center>
<div class="hr">

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php
            $sql = "SELECT count(*) AS total FROM customers_type";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            ?>

            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $data['total']; ?></h3>

                <p>Employee Information</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-cog"></i>
              </div>
              <a href="manage_customer_type.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <?php
              $sql = "SELECT count(*) AS total_account FROM account_type";
              $result = mysqli_query($conn, $sql);
              $data = mysqli_fetch_assoc($result);
              ?>
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $data['total_account'];?></h3>

                <p>Applicant Information</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill"></i>
              </div>
              <a href="Applicants.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <?php
              $sql = "SELECT count(*) AS total_customer FROM customers";
              $result = mysqli_query($conn, $sql);
              $data = mysqli_fetch_assoc($result);
              ?>
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $data['total_customer'];?></h3>

                <p>Total Customers</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="managecustomer.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php
            $sql = "SELECT count(*) AS total_accounts FROM accounts";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
            ?>

            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $data['total_accounts'];?></h3>

                <p>Accounts</p>
              </div>
              <div class="icon">
                <i class="fas fa-user    "></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div>
</center>

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

