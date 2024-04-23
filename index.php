<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body> 
<?php
include "nav2.php";
?>
<h1>Vítáme vás, ještě nevíme kam</h1>

<div class="parent">
    <div class="child">
    <img src="img/trip2.jpg" alt="Denim Jeans" style="max-width: 300px">
    <h1>Paříž</h1>
    <p class="price">$19.99</p>
    <p>tohle bude možná výlet </p>
    </div>

    <div class="child reveal">
    <img src="img/trip2.jpg" alt="Denim Jeans" style="max-width: 300px">
    <h1>Výlet snů</h1>
    <p class="price">$19.99</p>
    <p>nebo něco jiného</p>
    </div>

    <div class="child">
    <img src="img/trip2.jpg" alt="Denim Jeans" style="max-width: 300px">
    <h1>Další výlet</h1>
    <p class="price">$19.99</p>
    <p>další výlet někam</p>
    </div>
</div>

<script>
    function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
</script>
<h1 data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">Mnoho dalších výletů snů</h1>

<div  class="example"></div>
<h1 data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">Text mezi parallaxami</h1>

<div class="example" ></div>
<?php
include "f2.php";
?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="aos.js"></script>
<script type="text/javascript">
    AOS.init();
</script>
</body>
</html>