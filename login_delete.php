<?php

include "database.php";
include "function.php";


if (isset($_POST['submit'])) {

    deleteData();
}

include "includes/header.php";

?>
<div class="container">
    <div class="col-xs-6">
        <h1>Delete</h1>
        <form action="login_delete.php" method="post">
            <!-- <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div> -->
            <div class="form-group">
                <select name="id" id="">
                    <?php showAlLData() ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>

        <h1>See The Data</h1>
        <?php viewData() ?>
    </div>
</div>
<?php include "includes/footer.php"; ?>