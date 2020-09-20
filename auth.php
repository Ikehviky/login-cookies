<?php

    setcookie('username', $_POST['username']);

    $submitted = !empty($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detals</title>
</head>
<body>
    <p>logged in: <?php echo (int) $submitted;?></p>

    <ul>
        <li><b>uesername: </b><?php echo $_POST['username']; ?></li>

        <li><b>password: </b><?php echo $_POST['password']; ?></li>
    </ul>

</body>
</html>