<?php

include 'index_database.php';

function allData()
{

    global $connect;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connect, $query);

    if (!$result) {
        die("Query faild");
    }

    while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
