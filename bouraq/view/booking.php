<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/booking.css">
    <title>Booking</title>
</head>
<body>
    
    <div class="first">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container">
                <a href="http://localhost/youcode/4test/view//index.php" class="navbar-brand">Book Your Train</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="http://localhost/youcode/4test/view/index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/youcode/4test/view/signIn.php" class="nav-link">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- form -->

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
    </div>

</body>
</html>