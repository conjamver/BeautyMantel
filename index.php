<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/header.php"); 
    session_start();
    
    include("includes/functions.php");
    
?>
    <body>
        <!--INTRODUCTION/BANNER -->
        <section id="section-homeBanner">
            <div class="container">
                <h1 class="text-center">Welcome to <em>Beauty Mantel</em></h1>
                <p>One stop site for makeup reviews and personal blogs</p>
                
                <hr>
            </div>
        </section>
         <!--Recent Posts-->
         <section id="section-recentPosts">
            <div class="container">
                <h1 class="text-center">Latests Posts</h1>
                <p>Recents posts go here</p>
                <!--Admin Login-->
               
                <hr>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
    </body>
</html>