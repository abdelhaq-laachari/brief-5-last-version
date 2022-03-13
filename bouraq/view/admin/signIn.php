<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="http://localhost/youcode/4test/view/assets/css/home.css"> -->
    <title>Sign In</title>


</head>
<body style="background-color: #F5F7FC;" >

    <!-- include navbar -->
    <?php include '../4test/view/inc/header.php'   ?>

    <!-- form sign in -->
    
    


    <section >
        <div class="alert alert-primary text-center" role="alert">
          <h5>Admin Sign In</h5>
        </div>
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="http://localhost/youcode/4test/view/assets/img/sign in.png" class="img-fluid"
                alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

              <!-- form -->
              <form action="http://localhost/youcode/4test/signinAdmin/dashboard" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" required />
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter password" required />
                </div>
                <span style="color: red; padding-left:10px;"><?=$error?></span>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button class="btn btn-primary btn-lg" type="submit" name="submit">Sign In</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Log in as Client? 
                      <a href="http://localhost/youcode/4test/signinclient"class="link-danger">Client</a>
                    </p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>