<?php pageAdd('include/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-center pt-4">
            <h2>User Dashboard</h2>
            <?php echo $_SERVER['user_name'] ?? "Hi"  ?>
            <a href="logout" class="btn btn-dark btn-sm">Log Out</a>
        </div>
    </div>
 
</div>

<?php pageAdd('include/footer.php'); ?>
