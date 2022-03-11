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

		<div class="title">
			<div>
				<span><?php echo $sth['ville_de_depart']; ?></span>
				<i class="fa-solid fa-chevron-right"></i>
				<span><?php echo $sth['ville_darrivée'];?></span>
			</div>
			<div class="span">Second Class</div>
		</div>

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
						<th scope="col">Cancel</th>
					</tr>
				</thead>
				<tbody>
						
					<tr>
						<td><?php echo $sth['ville_de_depart']; ?></td>
						<td><?php echo $sth['ville_darrivée'];?></td>
						<td><?php echo $sth['date_de_depart']; ?></td>
						<td><?php echo $sth['date_darrivée'];?></td>
						<td><?php echo $sth['prix'];?></td>
						<td><a href=""><button type="button" class="btn btn-primary">Book</button></a></td>
						<td><a href=""><button type="button" class="btn btn-danger">Cancel</button></a></td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>

		

		
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>