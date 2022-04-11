<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>final one (copy)</title>
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
                <!-- <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);"> -->
                    <!-- <p class="ms-auto navbar-text actions" style="text-align: right;"> -->
                    <!-- <a class="login" href="login.php" style="color: rgba(224,217,217,0.9);margin-right: 33px;">Log In</a> -->
                    <!-- <a class="btn btn-light action-button" role="button" href="signup.html" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;padding-right: 12px;padding-left: 12px;">Log In</a></p> -->
                <!-- </div> -->
            </div>
        </nav>
    </section>

                <?php
                $con=mysqli_connect('localhost','root','','prosper') or die("Connection Failed:" .mysqli_connect_error());
                if(isset($_GET['id'])){
                $id=$_GET['id']; 
                $sql = "SELECT * FROM blog WHERE id=".$id;

                $result = mysqli_query($con,$sql);

                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
echo '
<section style="padding-right: 245px;padding-left: 245px;padding-top: 50px; padding-bottom: 50px;">
        <div style="margin-top: 0px;margin-right: 10px;margin-left: 10px;">
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <div class="col-lg-7" style="width: 1000px;padding-bottom: 12px;padding-top: 12px;padding-left: 25px;padding-right: 25px;margin-top: 20px;">
                <span class="text-muted">'.$row["date"].'</span>
                <h3 style="font-size: 39px;margin-top: 10px;">'.$row["title"].'<br></h3>
                <div class="info"></div>
                <div style="margin-top: 20px;">'.$row["content"].'</div>
                </div>
            </div>
        </div>
    </section>
';



                    $id = $row['id'];
                    $newviewcnt = $row['viewcnt'] + 1;
                    $sql="UPDATE blog SET viewcnt=$newviewcnt WHERE id=$id";
                    $query=mysqli_query($con, $sql); 
                    }

                }else{
                    echo '<div class="alert alert-danger" role="alert">
                    <strong>Invalid ID! </strong> No Record Found.
                </div>';
                }    
                
            }

            else{
                header('Location: view.php');
            }
            ?>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>