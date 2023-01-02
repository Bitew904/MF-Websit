<?php

if (isset($_POST['add']))
{    
    require '../db.php';
    
    $title = $_POST['title'];
    $Discription = $_POST['Discription'];
    
    if (empty($title) || empty($Discription))
    {
        header("Location: news.php?error=emptyfields&title=".$title."&mail=".$Discription);
        exit();
    }
    
   
            else
            {
                $FileNameNew = 'default.png';
                require 'includes//upload.inc.php';
                
                $sql = "insert into news(Date, title, Description, image) " . "values (?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: news.php?error=sqlerror");
                    exit();
                }
                else
                {
                    
                    mysqli_stmt_bind_param($stmt, "sssssssss", now(), $title, $Discription, $FileNameNew);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    
                    header("Location: news.php?signup=success");
                    exit();
                }
            }
        
  
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);    
}

else
{
    header("Location:news.php");
    exit();
}