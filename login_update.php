<?php

include "database.php";

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <option value="">1</option>
                    </select>
                </div> 
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <pre><?php print_r($row); ?></pre>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>