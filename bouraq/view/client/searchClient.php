


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

    <!-- table result of trip -->
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
					<?php foreach($getTrips as $trips) : ?>
					<tr>
						<td><?php echo $trips['ville_de_depart']; ?></td>
						<td><?php echo $trips['ville_darrivée'];?></td>
						<td><?php echo $trips['date_de_depart']; ?></td>
						<td><?php echo $trips['date_darrivée'];?></td>
						<td><?php echo $trips['prix'];?></td>
						<td>
                            <button type="submit" name="submit" class="btn btn-primary editbtn" >Book</button> 
                            <!-- <button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Book</button>  -->
							
						</td>
						
					</tr>
                    <?php endforeach; ?>
				</tbody>
			</table>
		</div>





    <!-- modal popup -->
    <!-- <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <input type="hidden" name="idTrip" value="<?php echo $trips['idTrip']; ?>">
                        <div class="mb-3">
                            <label class="form-label required">Departure City</label>
                            <input type="text" class="form-control" value="<?php echo $trips['ville_de_depart']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Arrival City</label>
                            <input type="text" class="form-control" value="<?php echo $trips['ville_darrivée']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Date of Departure</label>
                            <input type="text" class="form-control" value="<?php echo $trips['date_de_depart']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Arrival Date</label>
                            <input type="text" class="form-control" value="<?php echo $trips['date_darrivée']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">prix</label>
                            <input type="text" class="form-control" value="<?php echo $trips['prix']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Departure City</label>
                            <input type="text" class="form-control" value="<?php echo $trips['ville_de_depart']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Departure City</label>
                            <input type="text" class="form-control" value="<?php echo $trips['ville_de_depart']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Departure City</label>
                            <input type="text" class="form-control" value="<?php echo $trips['ville_de_depart']; ?>">
                        </div>
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
    </div> -->


    

    <!-- pop up modal with bootstrap   -->

    <div class="modal fade" id="BookingModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Trip Information </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="#" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> Departure City </label>
                            <input type="text" name="Departure_City" id="Departure_City" class="form-control" disabled >
                        </div>

                        <div class="form-group">
                            <label> Arrivale City </label>
                            <input type="text" name="Arrivale_City" id="Arrivale_City" class="form-control" disabled >
                        </div>

                        <div class="form-group">
                            <label> Date of Departure </label>
                            <input type="text" name="Date_of_Departure" id="Date_of_Departure" class="form-control" disabled >
                        </div>

                        <div class="form-group">
                            <label> Arrival Date </label>
                            <input type="text" name="Arrival_Date" id="Arrival_Date" class="form-control" disabled >
                        </div>
                        <div class="form-group">
                            <label> Price </label>
                            <input type="text" name="Price" id="Price" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="First Name" class="form-control" value="<?=$_SESSION["name"]?>"  disabled>
                        </div>
                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="First Name" class="form-control" value="<?=$_SESSION["second"]?>"  disabled>
                        </div>
                        <div class="form-group">
                            <label> Phone Number </label>
                            <input type="text" name="First Name" class="form-control" value="<?=$_SESSION["phone"]?>"  disabled>
                        </div>
                        <div class="form-group">
                            <label> Email Address </label>
                            <input type="text" name="First Name" class="form-control" value="<?=$_SESSION["email"]?>"  disabled>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Confirm</button>
                    </div>
                </form>

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


    <!-- include for pop up modal -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


    <!-- include js code from assets folder -->
    <script src="http://localhost/youcode/4test/view/assets/js/popup.js"></script>


</body>
</html>