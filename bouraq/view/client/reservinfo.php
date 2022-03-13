<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Reservation</title>
</head>
<body>
    

        <div class="modal-content animate-top">
            <form method="post" id="contactFrm">
                <div class="modal-body">
                    <!-- Form submission status -->
                    <div class="response"></div>
                    
                    <!-- Contact form -->
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?=$_SESSION["ville_de_depart"]  ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="email" name="email" id="email" class="form-control" value="test">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input name="message" id="message" class="form-control" value="test">
                    </div>
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input name="message" id="message" class="form-control" value="test">
                    </div>
                </div>
            </form>
        </div>

        

</body>
</html>