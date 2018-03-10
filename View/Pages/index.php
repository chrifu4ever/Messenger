<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="get">
    <input type="text" name="usernameField" /><br />
    <input type="password" name="passwordField" /><br />
    <input type="submit" value="Registrieren" name="submit" />

</form>

<?php
require("Controller/Controller.php");
    $controller = new Controller();

    if(isset($_GET['usernameField'])){
        $username = $_GET['usernameField'];
        $password = $_GET['passwordField'];
        $controller->createUser($username,$password);
    }


?>


</body>
</html>