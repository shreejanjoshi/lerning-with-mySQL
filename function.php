<?php include 'database.php'; ?>
<?php

function createData()
{
    if (isset($_POST['submit'])) {

        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $query = "INSERT INTO users (username, password)";
        $query .= "VALUE ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query failed " . mysqli_error($connection));
        } else {
            echo "Record Create";
        }
    }
}

function showAlLData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    }
}

function updateData()
{


    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username ='$username', password = '$password' WHERE id = '$id'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed " . mysqli_error($connection));
    } else {
        echo "Record Update";
    }
}

function deleteData()
{
    global $connection;
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id='$id'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("");
    } else {
        echo "Delete sussusful";
    }
}

function viewData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {

        print_r($row);
        echo "<br>";
    }
}
