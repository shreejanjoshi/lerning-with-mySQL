<?php

$connect = mysqli_connect('localhost', 'root', '', 'again');

if ($connect) {
    echo "it connected";
} else {
    die("failed to connect");
}

$query = "SELECT * FROM users";

$result = mysqli_query($connect, $query);

if (!$result) {
    die("Query faild");
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
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <pre><?php print_r($row); ?></pre>
    <?php } ?>
</body>

</html>