<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Includes META tags -->
    <?php include 'inc/header.php';?>
    <title>Project V2 - Delta Space</title>
</head>
<body>
<!-- Main section -->
<!-- SVG background -->
<section class="container-fluid main-con main-page">
    <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,96L80,133.3C160,171,320,245,480,240C640,235,800,149,960,128C1120,107,1280,149,1360,170.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">
    <a class="navbar-brand" href="index.php">
        <img src="assets/img/ds-logo-light.png" width="100" height="100" class="d-inline-block align-middle" alt="Delta Space Logo">
        Delta Space
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar items -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link text-center" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-center" href="about.php">Over ons</a>
        </li>
    </div>
    <img src="assets/img/stars.png" class="stars" alt="Stars">
</nav>
<img src="assets/img/v2-logo.png" class="v2-logo" alt="Project V2 Logo">
<img src="assets/img/v2-rocket.png" class="rocket-img" alt="Rocket Project V2">
<p class="launch-subtitle">Initiate Launch Sequence</p>
<a class="launch-btn text-center" id="launch" data-toggle="tooltip" data-placement="top" title="Initiate Launch Sequence">Start</a>
</section>
<!-- Bottom part of the main section -->
<section class="sec2">   
</section>
<!-- Check page section -->
<section class="check-page" style="display: none;">
    <div class="container-fluid check-con">
    <div class="row">
        <div class="col">
            <div class="check-window">
                <ul class="check-list">
                    <li>connecting...</li>
                    <li>bluetooth connection established</li>
                    <br />
                    <li>loading modules...</li>
                    <li>modules loaded</li>
                    <br />
                    <li>checking temperatuurmeter...</li>
                    <li>online</li>
                    <li>checking barometer...</li>
                    <li>online</li>
                    <li>checking accelerometer...</li>
                    <li>online</li>
                    <li>checking gyroscoop…</li>
                    <li>online</li>
                    <br />
                    <li>rocket is operational</li>
                    <li>ready for launch...</li>
                </ul>
            </div>
            <div class="justify-content-center">
                <a class="check-btn text-center" id="check">Launch</a>
            </div>
        </div>
        <div class="col">
            <img src="assets/img/v2-rocket.png" id="rocket" alt="Rocket Project V2">
        </div>
    </div>
        
    </div>
</section>
<!-- Graph page section -->
<section class="graph-page" style="display: none;">
    <div class="container-fluid graph-con">
    <div class="row chart-up">
        <div class="col col-acceleration">
        <canvas id="myChart"></canvas>
        </div>
        <div class="col col-position">
        <canvas id="myChart2"></canvas>
        </div>
    </div>
    <div class="row chart-down">
        <div class="col col-temp text-center">
            <h1>Temperatuur</h1>
            <h2>22 °C</h2>
        </div>
        <div class="col col-pressure text-center">
            <h1>Luchtdruk</h1>
            <h2>1 Pa</h2>
        </div>
        <div class="col col-humidity text-center">
            <h1>Luchtvochtigheid</h1>
            <h2>79 %</h2>
        </div>
    </div>
        <button id="reset" class="btn btn-primary" onClick="window.location.reload();">Reset</button>
    </div>
</section>
<!-- Includes footer & Javascript files -->
<?php include 'inc/footer.php';?>
</body>
</html>
