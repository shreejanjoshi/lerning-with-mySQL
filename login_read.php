<?php

include "database.php";

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed");
}

include "includes/header.php";

?>

<div class="container">
    <div class="col-xs-6">
        <h1>Read Data</h1>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <pre><?php print_r($row); ?></pre>
        <?php
        }
        ?>
    </div>
</div>
<?php include "includes/footer.php"; ?>