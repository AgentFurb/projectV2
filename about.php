<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/header.php';?>
    <title>Project V2 - Delta Space</title>
</head>
<body>
<div class="about-container">
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">
    <a class="navbar-brand" href="index.php">
        <img src="assets/img/ds-logo-light.png" width="100" height="100" class="d-inline-block align-middle" alt="">
        Delta Space
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link text-center" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-center" href="about.php">Over ons</a>
        </li>
    </div>
    <img src="assets/img/stars.png" class="stars" alt="">
</nav>
  <div class="row row-about">
    <div class="col-team col-6 col-md-3 text-center">
        <h1 class="about-title">Teamleden</h1>
        <div class="team-members">
            <img class="profile" src="assets/img/sam-hendriks.jpg" alt="Profiel afbeelding Sam Hendriks">
            <h1 class="name">Sam Hendriks</h1>
            <h2 class="role">Teamleider - Application Developer</h2>
        </div>
        <div class="team-members">
            <img class="profile" src="assets/img/mark-flohr.jpg" alt="Profiel afbeelding Mark Flohr">
            <h1 class="name">Mark Flohr</h1>
            <h2 class="role">Embedded Systems Developer</h2>
        </div>
        <div class="team-members">
            <img class="profile" src="assets/img/ferdy-hommeles.jpg" alt="Profiel afbeelding Ferdy Hommeles">
            <h1 class="name">Ferdy Hommeles</h1>
            <h2 class="role">Design - Webdeveloper</h2>
        </div>
    </div>
    <div class="col-about col-md-8">
        <h1 class="about-title">Over Project V2</h1>
        <p>In dit project word er een raket gemaakt met daarin een aantal verschillende sensoren die aangesloten zijn aan een Arduino bordje. Dit Arduino bordje is met een Bluetooth module verbonden met een Raspberry Pi, deze ontvangt de data van de Sensoren en laat deze informatie zien op een website die gehost word op de Raspberry Pi.</p>
    </div>
  </div>
</div>
    
    
<?php include 'inc/footer.php';?>
</body>
</html>