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
                    <!-- <a href="http://localhost/youcode/4test/trip" class="nav__link">
                        <i class="fa-solid fa-plus" style="font-size: 1.5rem;"></i>
                        <span class="nav__name">Add Trip</span>
                    </a> -->

                    <a href="http://localhost/youcode/4test/displayclients" class="nav__link active">
                        <i class="fa-solid fa-users" style="font-size: 1.3rem;"></i>
                        <span class="nav__name">Client</span>
                    </a>
                </div>
            </div>

            <a href="http://localhost/youcode/4test/displayClients/LogOutAdmin" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>


    <!-- include header -->
    <?php include '../4test/view/inc/adminHeader.php'   ?>



    <!-- section -->

    
    <!-- second section -->

    <div class="second">
        <div class="second-title">
            <h5>All Clients</h5>
        </div>
        <div class="table-responsive col-lg-12">
            <table class="table table-hover table-borderless">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Id Ticket</th>
                        <th scope="col">Trip</th>
                        <th scope="col">Departure city</th>
                        <th scope="col">Arrival city</th>
                        <th scope="col">Date of departure</th>
                        <th scope="col">Arrival date</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
               <?php foreach($getClients as $clients) : ?>
                    <tr>
                        <td><?=$clients['name'] ?></td>
                        <td><?=$clients['email'] ?></td>
                        <td><?=$clients['idTicket'] ?></td>
                        <td><?=$clients['idTrip'] ?></td>
                        <td><?=$clients['ville_de_depart'] ?></td>
                        <td><?=$clients['ville_darriv??e'] ?></td>
                        <td><?=$clients['date_de_depart'] ?></td>
                        <td><?=$clients['date_darriv??e'] ?></td>
                        <td><?=$clients['prix'] ?></td>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
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