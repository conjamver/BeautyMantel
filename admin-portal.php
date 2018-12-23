<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/header.php"); 
    session_start();
    
    include("includes/functions.php");
    
?>
    <body>
        <!--Login section -->
        <section id="section-adminHub">
            <div class="container">
                <h1 class="text-center">Welcome <?php echo $_SESSION['first_name']; ?></h1>
                <h2>Blog Posts: </h2>
                <hr>
                <p>Blog table goes here</p>
                <h2>Settings: </h2>
                <hr>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
    </body>
</html>