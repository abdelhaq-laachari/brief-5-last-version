<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a5f900a4a3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/search.css">
	<title>Result</title>
</head>
<body>

	<!-- include navbar -->
    <?php include '../4test/view/inc/header.php'   ?>


	<div>

		

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
						</td>
						
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>




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
                            <input type="text" name="First Name" class="form-control"  >
                        </div>
                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="Last Name" class="form-control"  >
                        </div>
                        <div class="form-group">
                            <label> Phone Number </label>
                            <input type="text" name="Phone Number" class="form-control"  >
                        </div>
                        <div class="form-group">
                            <label> Email Address </label>
                            <input type="text" name="Email" class="form-control"  >
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
		

		
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
	<!-- include for pop up modal -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>




	<script>

	$(document).ready(function () {

	$('.editbtn').on('click', function () {

		$('#BookingModel').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function () {
			return $(this).text();
		}).get();

		console.log(data);

		// $('#update_id').val(data[0]);
		$('#Departure_City').val(data[0]);
		$('#Arrivale_City').val(data[1]);
		$('#Date_of_Departure').val(data[2]);
		$('#Arrival_Date').val(data[3]);
		$('#Price').val(data[4]);
	});
	});
	</script>
</body>
</html>