<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/a5f900a4a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/dashboard.css">
    <link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/sidebar.css">
    <link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/profile.css">
    <title>dashboard</title>
</head>
<body id="body-pd">

    <!-- include sidebar -->
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo">Book Your Train</a>
                </div>
                <div class="nav__list">
                    <a href="http://localhost/youcode/4test/profile" class="nav__link active">
                        <i class="fa-solid fa-user" style="font-size: 1.5rem;"></i>
                        <span class="nav__name">Profile</span>
                    </a>
                    <a href="http://localhost/youcode/4test/newbooking" class="nav__link">
                        <i class="fa-solid fa-plus" style="font-size: 1.5rem;"></i>
                        <span class="nav__name">New Booking</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class="fa-solid fa-suitcase-rolling" style="font-size: 1.5rem;"></i>
                        <span class="nav__name">My Trip</span>
                    </a>
                </div>
            </div>

            <a href="http://localhost/youcode/4test/signinClient/LogOutClient" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>


    <!-- include header -->
    <?php include '../4test/view/inc/headerClient.php'   ?>



    <!-- section -->

    <!-- first -->
    <div class="first-c">
        <div class="left">
            <div class="picture">
                <img src="http://localhost/youcode/4test/view/assets/img/12.jpg" alt="">
            </div>
            <div class="title-bottom">
                <h4 ><?=$_SESSION["name"]  ?></h4>
                <a href="#"><i class="fa-solid fa-pen" style="font-size: 1rem; color: #000;"></i></a>
            </div>
        </div>
        <div class="right">
            <div class="card-c first-name">
                <h5>First Name</h5>
                <span> <?=$_SESSION["name"]  ?></span>
            </div>
            <div class="card-c last-name">
                <h5>Last Name</h5>
                <span> <?=$_SESSION["second"]  ?></span>
            </div>
            <div class="card-c phone">
                <h5>Phone Number</h5>
                <span> <?=$_SESSION["phone"]  ?></span>
            </div>
            <div class="card-c email">
                <h5>Email Adress</h5>
                <span> <?=$_SESSION["email"]  ?></span>
            </div>
        </div>
    </div>

    

    



    
       
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- sidebar.js -->
    <script src="http://localhost/youcode/4test/view/assets/js/sidebar.js"></script>
    <script src="http://localhost/youcode/4test/view/assets/js/dashboard.js"></script>

    <!-- Ionicons -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


</body>
</html>