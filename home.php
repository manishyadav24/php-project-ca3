<?php include('config.php');
session_start();
require 'auth.php';
?>

<?php 
      $con=mysqli_connect('localhost','root','','prosper') or die("Connection Failed:" .mysqli_connect_error());
      $sql = "SELECT * FROM admin";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_assoc($result);

       ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>final one</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<section>
        <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;">
            <div class="container">
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div style="padding-top:10px;"><span style="font-weight: bold;font-size: 20px;">Prosper</span></div>
                <div class="collapse navbar-collapse" id="navcol-1" style="justify-content: end; color: rgb(255,255,255);">
                    <!-- <p class="ms-auto navbar-text actions" style="text-align: right;"> -->
                    <!-- <a class="login" href="login.php" style="color: rgba(224,217,217,0.9);margin-right: 33px;">Log In</a> -->
                    <?php 
      $con=mysqli_connect('localhost','root','','prosper') or die("Connection Failed:" .mysqli_connect_error());
      $sql = "SELECT * FROM admin";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_assoc($result);
      echo '<a class="btn btn-light action-button" role="button" href="dashboard.php" style=" margin-top: 10px; margin-right: 20px; color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;padding-right: 12px;padding-left: 12px;">'.$row["username"].'</a>
      <a class="btn btn-light action-button" role="button" href="logout.php" style=" margin-top: 10px; color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;padding-right: 12px;padding-left: 12px;">Log Out</a>
      ';

       ?>
                    
                    
                <!-- </p> -->
                </div>
            </div>
        </nav>
    </section>
    <section style="padding-right: 245px;padding-left: 245px;padding-top: 50px;">
        <div>
            <h1 style="font-size: 54.88px;font-weight: bold;margin-left: 6px;">Reviews</h1>
        </div>
        <div style="margin-top: 50px;margin-right: 10px;margin-left: 10px;">
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <div class="col-lg-5" style="width: 430.663px;padding-left: 0px;"><img class="rounded img-fluid" src="assets/img/luke.jpg"></div>
                <div class="col-lg-7" style="width: 525px;padding-bottom: 12px;padding-top: 12px;padding-left: 35px;padding-right: 0px;"><span class="text-muted">Jan 16, 2018</span>
                    <h3 style="font-size: 39px;">Sony Xperia Pro-I, Phone or Camera?<br></h3>
                    <div class="info"></div>
                    <p>Sony has just released the Xperia Pro-I, let’s dive into some of it’s features, which spoiler alert is mainly about the cameras on the back!&nbsp;This is not a cheap phone, if you...<br></p><button class="btn btn-primary btn-sm" type="button" style="border-radius: 6px;">Read More</button>
                </div>
            </div>
        </div>

        

        <div style="margin-top: 70px;">
            <main class="page projects-page">
                <section class="portfolio-block projects-cards">
                    <div class="container">
                        <div class="row" style="padding-right: 0;padding-left: 0;">
                        <?php
                     $sql = "SELECT id, title,content,date,viewcnt, SUBSTRING(content, 1, 340) AS previewcontent FROM `blog` WHERE 1;";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0){

                    while($row = mysqli_fetch_assoc($result)){
                    echo '
                    <div class="col-md-6 col-lg-4" style="padding-left: 10px;padding-right: 10px;margin-right: 12px;width: 328px;margin-bottom: 50px;">
                                <div class="card border-0">
                                
                                    <div class="card-body"><span class="text-muted" style="font-size: 12px;">'.$row["date"].'</span>
                                        <h3 style="font-size: 18px; font-weight: bold;">'.$row["title"].'<br></h3>
                                        <div class="info"></div>
                                        <p style="font-size: 12px;">'.$row["previewcontent"].'...<br></p>
                                        <a href="blogview.php?id='.$row["id"].'" ><button class="btn btn-primary btn-sm" type="button" style="border-radius: 6px;">Read More</button></a>
                                    </div>
                                </div>
                            </div>
                    ';
                    }
           
        }else{
            echo '<tr><td>No Record</td></tr>';
        }
    ?> 
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>