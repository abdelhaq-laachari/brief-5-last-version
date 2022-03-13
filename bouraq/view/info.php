<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
</head>
<body>

    <style>
        form{
            width: 80%;
            margin: auto;
            margin-top: 60px;
        }
    </style>

    <form action="" method="Post">
        
        <label for=""> Enter Your First Name </label>
        <input class="form-control" type="text" placeholder="First Name">
        <label for=""> Enter Your Last Name </label>
        <input class="form-control" type="text" placeholder="Last Name">
        <label for=""> Enter Your Email </label>
        <input class="form-control" type="text" placeholder="Email Name">
        <label for=""> Enter Your Phone </label>
        <input class="form-control" type="text" placeholder="Phone Name">

        <label for=""> <?php echo $sth['ville_de_depart']; ?> </label>
        <!-- <input class="form-control" type="text" placeholder="<?php echo $sth['ville_de_depart']; ?>" disabled> -->

    </form>


</body>
</html>