


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
        <div class="table-responsive col-lg-10 m-auto border mt-5">
			<table class="table table-hover table-borderless">
				<thead class="table-dark">
					<tr>
						<th scope="col">Departure City</th>
						<th scope="col">Arrival City</th>
						<th scope="col">Date of Departure</th>
						<th scope="col">Arrival Date</th>
						<th scope="col">Price</th>
						<th scope="col">Book</th>
						<!-- <th scope="col">Cancel</th> -->
					</tr>
				</thead>
				<tbody>
					<?php foreach($getClients as $clients) : ?>
					<tr>
						<td><?php echo $clients['ville_de_depart']; ?></td>
						<td><?php echo $clients['ville_darrivée'];?></td>
						<td><?php echo $clients['date_de_depart']; ?></td>
						<td><?php echo $clients['date_darrivée'];?></td>
						<td><?php echo $clients['prix'];?></td>
						<td>
                            <button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Book</button> 
							
						</td>
						
					</tr>
                    <?php endforeach; ?>
				</tbody>
			</table>
		</div>

    <!-- modal popup -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                    <?php

                        if(isset($_POST['idTrip'])){
                            $exitpost = new NewBooking();
                            $clients = $exitpost->getOnetrip();
                        }
                         foreach($getClients as $clients) :



                    ?>
                        <input type="hidden" name="idTrip" value="<?php echo $clients['idTrip']; ?>">
                        <div class="mb-3">
                            <label class="form-label required">Departure City</label>
                            <input type="text" class="form-control" value="<?php echo $clients['ville_de_depart']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Arrival City</label>
                            <input type="text" class="form-control" value="<?php echo $clients['ville_darrivée']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Date of Departure</label>
                            <input type="text" class="form-control" value="<?php echo $clients['date_de_depart']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Arrival Date</label>
                            <input type="text" class="form-control" value="<?php echo $clients['date_darrivée']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">prix</label>
                            <input type="text" class="form-control" value="<?php echo $clients['prix']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Departure City</label>
                            <input type="text" class="form-control" value="<?php echo $clients['ville_de_depart']; ?>">
                        </div>
                        <!-- <div class="mb-3">
                            <label class="form-label required">Departure City</label>
                            <input type="text" class="form-control" value="<?php echo $clients['ville_de_depart']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Departure City</label>
                            <input type="text" class="form-control" value="<?php echo $clients['ville_de_depart']; ?>">
                        </div> -->
                        <?php endforeach; ?>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </a>
                    
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
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
    
    <!-- jquery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <!-- jsCode -->
    <!-- <script src="http://localhost/youcode/4test/view/assets/js/popup.js"></script> -->


</body>
</html>