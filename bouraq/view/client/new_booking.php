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
    <link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/new_booking.css">
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
                    <a href="http://localhost/youcode/4test/profile" class="nav__link">
                        <i class="fa-solid fa-user" style="font-size: 1.5rem;"></i>
                        <span class="nav__name">Profile</span>
                    </a>
                    <a href="http://localhost/youcode/4test/newbooking" class="nav__link active">
                        <i class="fa-solid fa-plus" style="font-size: 1.5rem;"></i>
                        <span class="nav__name">New Booking</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class="fa-solid fa-suitcase-rolling" style="font-size: 1.5rem;"></i>
                        <span class="nav__name">My Trip</span>
                    </a>
                </div>
            </div>

            <a href="http://localhost/youcode/4test/displayClient/LogOutAdmin" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>


    <!-- include header -->
    <div class="header">
        <div class="title">
            <h5>User Profile</h5>
        </div>
        <div class="profile">
            <div class="pics">
                <img src="http://localhost/youcode/4test/view/assets/img/12.jpg" alt="">
            </div>
            <div class="name" >
               <span> William Hawkins </span>
               <span class=" text-muted"> Client</span>
            </div>
        </div>
    </div>



    <!-- section -->

    <!-- first -->
    <div class="first-form">
            <div class="form form-depart">
                <select class="form-select" aria-label="Default select example">
                    <option selected disabled>ville de depart</option>
                    <option value="safi">Safi</option>
                    <option value="casablanca">Casablanca</option>
                    <option value="tanger">Tanger</option>
                    <option value="agadir">Agadir</option>
                </select>
                <select class="form-select" aria-label="Default select example">
                    <option selected disabled>ville d'arrivée</option>
                    <option value="safi">Safi</option>
                    <option value="casablanca">Casablanca</option>
                    <option value="tanger">Tanger</option>
                    <option value="agadir">Agadir</option>
                </select>
            </div>
            <div class="form form-date">
                <form action="" class="date">
                    <label for="">date de depart</label>
                    <input type="date" name="" class="inp">
                </form>
                <form action="" class="date">
                    <label for="">date d'arrivée</label>
                    <input type="date" name="" class="inp">
                </form>
            </div>
            <div class="form form-place">
                <form action="" class="date">
                    <label for="">Voyageurs</label>
                    <input type="number" name="" class="inp" placeholder="1">
                </form>
                <div  class="date">
                    <label for="">Mon confort</label>
                    <select class="inp">
                        <option value="first class"  > First Class </option>
                        <option value="second class" > Second Class </option>
                        <option value="economy class"> Economy Class </option>
                    </select>
                </div>
            </div>
            <div class="search d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Search</button>
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