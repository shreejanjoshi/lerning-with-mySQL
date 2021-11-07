<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "we are connected";
    } else {
        die("Database connection failed");
    }

    // if ($username && $password) {
    //     echo $username . " " . $password;
    // } elseif ($username = "") {
    //     echo "require username";
    // } elseif ($password = "") {
    //     echo "require username";
    // } else {
    //     echo "Need your username and password";
    // }
}

include "includes/header.php";

?>
    <div class="container">
        <div class="col-xs-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>