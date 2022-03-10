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
    <link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/add_trip.css">
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
                    <a href="http://localhost/youcode/4test/dashboard" class="nav__link ">
                        <i class="fa-solid fa-house" style="font-size: 1.3rem;"></i>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <a href="http://localhost/youcode/4test/trip" class="nav__link active">
                        <i class="fa-solid fa-plus" style="font-size: 1.5rem;"></i>
                        <span class="nav__name">Add Trip</span>
                    </a>

                    <a href="http://localhost/youcode/4test/displayclient" class="nav__link">
                        <i class="fa-solid fa-users" style="font-size: 1.3rem;"></i>
                        <span class="nav__name">Client</span>
                    </a>
                </div>
            </div>

            <a href="http://localhost/youcode/4test/trip/LogOutAdmin" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>


    <!-- include header -->
    <?php include '../4test/view/inc/adminHeader.php'   ?>



    <!-- section -->

    <!-- form -->

        <div class="first-form">
            <form action="">
                <div class="form form-depart">
                    <input type="text" name="ville de_depart"  placeholder="Enter Departure city" required />
                    <input type="text" name="ville darrivée"  placeholder="Enter Arrival City" required />
                </div>
                <div class="form form-date">
                    <input type="text" name="date de depart"  placeholder="Enter Date of departure" required />
                    <input type="text" name="date darrivée"  placeholder="Enter Arrival date" required />
                </div>
                <div class="form form-place">
                    <input type="number" name="nombre de place"  placeholder="Number of place" required />
                </div>
            </form>
                <label for="">Mon confort</label>
                <select class="inp">
                    <option value="first class"  > First Class </option>
                    <option value="second class" > Second Class </option>
                    <option value="economy class"> Economy Class </option>
                </select>
            <div class="search d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Add</button>
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