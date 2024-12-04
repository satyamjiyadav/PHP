<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
</head>
<body>
    <!--R_REQUEST is a super gobal variable-->
    <!-- <form action="./register.php" method="get"> -->
    <form action="./register.php" method="post">

       Name: <input type="text" name="user_name" />
       <br>
       <br>
       Passw: <input type="password" name="user_password" />
       <br>
       <br>
       Email: <input type="text" name="user_email" />
       <br>
       <br>
       Addre: <input type="text" name="user_address" />
       <br>
       <br>
       <button>Register</button>
    </form>
</body>
</html>