<?php
session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header('location:login.php?error=notallowed');
}
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {

    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $image = $_SESSION['image'];
} else {

    $firstname = $_REQUEST['fn'];
    $lastname = $_REQUEST['ln'];
    $image = $_REQUEST['pi'];
}


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font awesome library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <!--bootstrap file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    <!--<link rel="stylesheet" href="../../assets/css/style.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
    <!--<link rel="stylesheet" href="../../assets/css/styles.css">-->
    <title>EchriTounsi</title>
</head>

<body>

    <!--start navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark py-1 py-md-2 text-capitalize w-100">
        <a class="navbar-brand ml-lg-5 ml-sm-0" href="../index.html" data-page="page01">Echri<span>Tounsi.</span></a>

        <div class="container-md">

            <div class="nav_icons position-relative ml-auto">

                <i class="search_close_open fas fa-search px-2 position-relative">
                    <span class="tooltiptext">Chercher</span>
                </i>
                <i class="search_close_open close_icon fas fa-times position-absolute opacity_0">
                    <span class="tooltiptext">Fermer</span>
                </i>

                <a href="../../controllers/userController.php?event=logout"><i class="fas fa-sign-out-alt px-2 border-left">
                        <span class="tooltiptext">Déconnecter</span></i>
                </a>




                <form class="search_bar form-inline my-2 my-lg-0 position-absolute">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="position-absolute rounded-circle" type="submit">
                        <i class="fas fa-search "></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="sidebar col-sm-3 col-lg-2">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <img src="../../assets/image/<?php echo $image ?>" alt="">
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name text-capitalize">
                        <?php echo $firstname ?>
                        <?php echo $lastname ?>
                    </div>
                    <div class="profile-usertitle-status">
                        <span class="indicator label-success"></span> Online

                    </div>

                </div>
                <div class="clear"></div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-md-12 list border-top">
                    <a href="../admins/dashboard.php">
                        <i class="fa fa-dashboard px-2"></i> Dashboard
                    </a>
                </div>

                <div class="col-md-12 list">
                    <a href="">
                        <i class="fas fa-shopping-cart px-2"></i> Products
                    </a>
                </div>
                <div class="col-md-12 list">
                    <a href="">
                        <i class="fas fa-users px-2"></i> Users
                    </a>
                </div>
                <div class="col-md-12 list">
                    <a href="">
                        <i class="fas fa-scroll px-2"></i> Orders
                    </a>
                </div>
                <div class="col-md-12 list">
                    <a href="">
                        <i class="fas fa-cog px-2"></i> Parametres
                    </a>
                </div>



            </div>

        </div>
        <div class="col-sm-9 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <div class="inline-block col-sm-12 breadcrumb">

                    <a href="">
                        <i class="fas fa-home px-2"></i>/
                    </a>

                    <a href="" class="px-2">
                        <p>Dashboard /</p>
                    </a>
                    <a href="" class="px-2">
                        <p>Products</p>
                    </a>

                </div>

                <div class="col-lg-12">
                    <h1 class="header">Products</h1>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>
            </div>

















        </div>
    </div>























    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>