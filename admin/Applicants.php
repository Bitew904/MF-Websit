<?php
session_start();
    if(isset($_SESSION['user_id']) =="") {
        header("Location: ../login.php");
    }

require_once '../db.php';
$retrieve = mysqli_query($conn, "SELECT * FROM applicant ORDER BY date DESC");
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
<?php
if (mysqli_num_rows($retrieve) > 0) {

    ?>
   <div class="ms-4 mr-4 ">
      <div class="topnav mt-5" id="myTopnav">
         <a href="addcustomer.php" class="active"><i class="fas fa-user-plus"></i> Add new  customer</a>
         <a href="pdfcustomer.php" target="_blank"><i class="fas fa-print"></i> Print all customer</a>
      </div>

      <table id="customers" class="mt-3">
         <thead class=" bg-success table-bordered">
            <tr>
               <th>SN</th>
 
               <th>name</th>  
               <th>Gender</th>
               <th>DOB</th>
			   <th>Fild of study</th>
			   <th>Position Aplied</th>
			   <th>Registration date</th>
			    <th>CV</th>
               <th>Action</th>
            </tr>
         </thead>
         <?php
         $num = 1;
         $i = 0;
    while ($result = mysqli_fetch_assoc($retrieve)) {
        ?>

         <tbody class="table-bordered">
            <tr>
               <td><?php echo $num++; ?></td>
               <td><?php echo $result["ID"]; ?></td>
               <td><?php echo $result["Name"]; ?></td>
               <td><?php echo $result["Gender"];?></td>
               <td><?php echo $result["DateOfBirth"]; ?></td>
               <td><?php echo $result["FieldOfStudy"]; ?></td>
               <td><?php echo $result["Position"];?></td>
               <td><?php echo $result["date"];?></td>
               <td><?php echo $result["cv"];?></td>
               
               <td colspan="">
                  <a href="updatecustomer.php?customer_number=<?php echo $result["customer_number"]; ?>" type="submit"
                     class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Edit</a>
                  <a href="app/deletecustomer.php?customer_number=<?php echo $result["customer_number"]; ?>"
                     type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                  <a href="pdf_singlecustomer.php?customer_number=<?php echo $result['customer_number']; ?>"
                     type="submit" class="btn btn-primary" target="_blank"><i class="fas fa-print"></i> Print</a>
               </td>
            </tr>
         </tbody>
         <?php
         $i++;
         }
         ?>
      </table>
      </div>
   </div>
   <?php
} else {
    echo 'No result found';
}?>
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

