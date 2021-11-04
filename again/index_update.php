<?php
include "index_database.php";
include 'index_function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index_function.php" method="post">

    <label for="username">Username</label>
        <input type="text" name="username">

        <label for="password">Password</label>
        <input type="password" name="password">

        <select name="id" id="">
        <?php allData()?>
        </select>

        <input type="submit" name="submit" name="submit">
    </form>
</body>

</html>