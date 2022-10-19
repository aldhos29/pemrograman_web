<?php
    require "config/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldho Sukadi - Portfolio</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
</head>
<body class="main-content">

    <main>
        <!-- main content -->
        <?php
            if(isset($_GET['page'])){
                if($_GET['page'] == "about"){
                    include "page/about.php";
                } else if($_GET['page'] == "home"){
                    include "page/home.php";
                } else if($_GET['page'] == "my_skills"){
                    include "page/my_skills.php";
                } else if($_GET['page'] == "portfolio"){
                    include "page/portfolio.php";
                } else if($_GET['page'] == "contact"){
                    include "page/contact.php";
                } else {
                    header('location: 404.php');
                }
            } else {
                include "page/home.php";
            }
        ?>

    </main>

    <div class="controls">
        <div class="control <?php if($_GET['page'] == "home") { echo "active-btn"; }?>">
            <a href="?page=home" style="padding: 1rem;">
                <i class="fas fa-home"></i>
            </a>
        </div>
        <div class="control <?php if($_GET['page'] == "about") { echo "active-btn"; }?>">
            <a href="?page=about" style="padding: 1rem;">
                <i class="fas fa-user"></i>
            </a>
        </div>
        <div class="control <?php if($_GET['page'] == "my_skills") { echo "active-btn"; }?>">
            <a href="?page=my_skills" style="padding: 1rem;">
                <i class="fas fa-bolt"></i>
            </a>
        </div>
        <div class="control <?php if($_GET['page'] == "portfolio") { echo "active-btn"; }?>">
            <a href="?page=portfolio" style="padding: 1rem;">
                <i class="fas fa-folder-open"></i>
            </a>
        </div>
        <div class="control <?php if($_GET['page'] == "contact") { echo "active-btn"; }?>">
            <a href="?page=contact" style="padding: 1rem;">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();

      $(document).ready(function(){
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    });
    </script>
</body>
</html>