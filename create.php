<?php 
//include('config.php');
session_start();
require 'auth.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Blog - Prosper</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <script src="tinymce/tinymce/js/tinymce/tinymce.min.js"></script>

    <script>

    tinymce.init({
        selector: '#mytextarea',
        // theme: "modern",
        height: 200,
        width: '100%',
    
        plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons paste textcolor code"
        ],

        toolba1 : "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolba2 : "| link unlink anchor | image media | forecolor backcolor | print preview code | caption",

        image_caption : true,
        image_advtab: true
  });
    </script>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Prosper</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="create.php"><i class="fa fa-plus"></i><span>Create Blog</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="view.php"><i class="fa fa-eye"></i><span>View Blogs</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="far fa-user-circle"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Admin</span></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Create Blog</h3>
                    </div>
                    <div class="card shadow">


<!-- tinymce -->
<!-- <form action="tinymce/connection.php" method="post" enctype="multipart/form-data">
<div class="card-header py-3" >
    <input type="text" name="title" placeholder="Title" style="width: 100%;border-color: rgba(0,0,0,0);padding-left: 19px;border-radius: 2px;box-shadow: 0px 0px 1px rgba(0,0,0,0.29);padding-top: 8px;padding-bottom: 8px;" required="" maxlength="70" minlength="10"></div>
    <div class="card-body">
        <textarea id="mytextarea" name="content"></textarea>
        <div style="margin-top: 10px;">
            <button class="btn btn-primary" type="button" id="submit" name="submit">Submit</button>
        </div>
    </div>
</form> -->


<form action="tinymce/connection.php" method="post" target="">
  		
            <div class="form-group">
    			<input type="text" class="form-control" id="contenttitle" name="title" placeholder="Title">
  			</div>
  			
  			<div class="form-group">
                <!-- TinyMCE Embed Here by Using ID (mytextarea)-->
    			<textarea id="mytextarea" name="content"></textarea>
  			</div>
  			<button class="btn btn-primary" name="submit" type="submit">Submit</button>
    </form>


                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer"></footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <!-- JQuery File -->
    <script type="text/javascript" src="tinymce/jquery/jquery.js"></script>
    
    <!-- BootStrap JS File-->
	<!-- <script type="text/javascript" src="tinymce/bootstrap/js/bootstrap.min.js"></script> -->
    
    <!-- Fontawesome Icon JS-->
    <!-- <script defer src="tinymce/fontawesome/js/all.js"></script> -->
</body>


</html>