<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connect = mysqli_connect('localhost', 'root', '', 'again');

    if ($connect) {
        echo "it connected";
    } else {
        die("failed to connect");
    }

    $query = "INSERT INTO users(user, password)";
    $query .= "VALUE('$username','$password')";

    $result = mysqli_query($connect, $query);

    if (!$result) {
        die("Query faild");
    }
}
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
    <form action="index1.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">

        <label for="password">Password</label>
        <input type="password" name="password">

        <input type="submit" name="submit" name="submit">
    </form>
</body>

</html>