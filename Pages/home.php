<?php
    include '../parts/header.php';
    include __DIR__. '/../lib/functions.php';
?>
<title>Home</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../headstyle.css">
<?php
    getPart('menu');
?>
<h1>Home</h1>
<div class="slideshow-container">
    <div class="mySlides fade">
        <img id="flash" src="../Images/Codes/Ecran code profil.jpeg" style="width:100%">
        <div class="text">Home</div>
    </div>
    <div class="mySlides fade">
        <img id="flash" src="../Images/Codes/Ecran code.jpeg" style="width:100%">
        <div class="text">Front-End</div>
    </div>
    <div class="mySlides fade">
        <img id="flash" src="../Images/Codes/IMG_0473.jpeg" style="width:100%">
        <div class="text">Back-End</div>
    </div>
    <div class="mySlides fade">
        <img id="flash" src="../Images/Codes/IMG_0634.jpeg" style="width:100%">
        <div class="text">Hebergement</div>
    </div>
    <div class="mySlides fade">
        <img id="flash" src="../Images/Codes/IMG_0635.jpeg" style="width:100%">
        <div class="text">Maintenance</div>
    </div>
    <div class="mySlides fade">
        <img id="flash" src="../Images/Codes/Owncode.jpeg" style="width:100%">
        <div class="text">Refonte</div>
    </div>
    <div class="mySlides fade">
        <img id="flash" src="../Images/IdVis/IMG_0576.PNG" style="width:100%">
        <div class="text">Projets web en tous genres</div>
    </div>
    <div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
</div>
<script src="../headstyle.js"></script>
<?php
    include '../parts/footer.php';
?>