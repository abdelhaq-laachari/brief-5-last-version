<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/booking.css">
    
    
    <!-- <link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/home.css"> -->
    <title>Bouraq</title>
</head>
<body>

    <!-- include navbar -->
    <?php include 'inc/header.php'   ?>

    <!-- first section -->
    <div class="first-section">
        <div class="first-image">
            <img src="http://localhost/youcode/4test/view/assets/img/112.png" alt="">
        </div>
        <div class="first-title">
            <span id="title">Book Your Trip Now</span>
            <form class="first-form" action="http://localhost/youcode/4test/booking/search" method="POST">
                <div class="mb-3">
                    <label class="form-label">Depart</label>
                    <input type="text" name="depart" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Arrive</label>
                    <input type="text" name="arrive" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Date de depart</label>
                    <input type="date" name="day" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Search</button>
            </form>
        </div>
    </div>


    
    







    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
</body>
</html>





