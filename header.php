<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/fontawesome6/css/fontawesome.css">
    <link rel="stylesheet" href="assets/fontawesome6/css/brands.css">
    <link rel="stylesheet" href="assets/fontawesome6/css/all.css">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <?php wp_head();?>
</head>
<body class="">
<div id="mySidenav" class="sidenav">
    <div class="sidenav__upper">
        <div>
            <img alt="Logo" src="<?php echo WEBLOTTS_DIR_URI .'/src/assets/images/Weblotts-White.png'; ?>" width="80">
        </div>
        <span class="closebtn" onclick="closeNav()">&times;</span>
    </div>
    <div class="sidenav__links">
        <a href="#">Home</a>
        <a href="#">Portfolio</a>
        <a href="#">How it's done?</a>
        <a href="#">Team</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
    </div>
    <footer>
        <div class="sidenav__footer">
            <span>Let's connect</span>
            <span class="mx-2">
                <i class="fa-regular fa-envelope fa-lg"></i>
            </span>
            <span class="mx-2">
                <i class="fa-brands fa-whatsapp fa-lg"></i>
            </span>
            <i class="fa-brands fa-instagram fa-lg"></i>
        </div>
    </footer>
</div>

<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap  justify-content-lg-start">
            <span class="navbar-trigger" onclick="openNav()"> &#9776;</span>
            <!-- <span onclick="openNav()">
                <i class="fa-solid fa-bars fa-xl"></i>
            </span> -->
            
          <a href="/" class="d-flex align-items-center mx-2 my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img alt="Logo" src="<?php echo WEBLOTTS_DIR_URI .'/src/assets/images/Weblotts-White.png'; ?>" width="80">
          </a>
        </div>
      </div>
    </div>
  </header>

    