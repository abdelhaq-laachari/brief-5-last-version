<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signIn</title>
</head>
<body>
    <h1>Sign In to your account</h1>
    <form action="http://localhost/youcode/back-end/client/signIn" method="POST">
        <input type="email" name="email" >
        <input type="password" name="password" >
        <span style="color: red; padding-left:10px;"> <?=$error?> </span>
        <input type="submit" name="submit" id="">
    </form>
</body>
</html>