<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-100" lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Lasellah|Multimediedesigner portfolio</title>
    <meta name="description" content=" jeg er kreativ multimediedesigner, Jeg arbejder med web-design
      og webudvikling (HTML, CSS, JavaScript,..)">

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b7f7f27b49.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="J6u67RSpJQc8zAta_JrpOyyXqgVbY5zUhOjR_iK6WEQ" />
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="h-100 bg-primary">

<!-- Her skal sidens indhold ligge -->

<?php include "includes/nav.php"; ?>


<header class="h-100">
  <div class="video">
      <video playsinline autoplay muted loop id="myVideo" class="d-block position-absolute">
          <source src="images/HTML%20Tutorial%20for%20Beginners%20HTML%20Crash%20Course%20%5B2021%5D.mp4">
      </video>
  </div>

    <div class="text-header">
        <p class="text-light text-center fs-4">
            velkommen til
        </p>
        <h1 class="text-light fs-1 pt-3">
            >/Lasellah>
        </h1>
    </div>

    <div class="btn1 m-2 mt-5  ">
        <a class="  btn  btn-btn1 d-flex justify-content-center rounded-0 " href="#projekter">
            <p class="m-0 text-light">>/Projekter></p>
        </a>
</header>

<section class="container">
    <div class="row gx-0">
    <div id="ommig" class="d-flex  align-items-center justify-content-center  pt-5 col-md-6">
        <img class="card-img w-50 rounded-2 " src="images/IMG_6051.JPG" alt="mig selv">
    </div>

    <div class="col-md-6 p-md-5 d-md-flex flex-md-column justify-content-md-end ">
     <h2 class="text-center text-light pt-4">
         >/Om mig>
     </h2>
        <P class="text-light text-center p-5">
            Mit navn er Loay, 29 år og studerende inden for webudvikling.
            <br>
            Min styrke ligger inden for en bred vifte af teknologier, herunder HTML, CSS, samt forskellige CSS-frameworks.
            Derudover har jeg solid erfaring med PHP, databaser, og WordPress - inklusiv kodning og tilpasning i WordPress-miljøet.
            Jeg besidder også kompetencer inden for SEO, hvilket forstærker mit arbejde med webudvikling.
        </p>
        <div class="d-flex justify-content-center pb-5">
            <a class="btn  btn-btn1 rounded-0 bg-bg-btn" href="images/cv.pdf" target="_blank">
                <p class="m-0 text-light">
                    >/Se Mit CV>
                </p>
            </a>
        </div>
     </div>
    </div>


    <div class="d-flex justify-content-center">
      <div class="line w-75 mt-2 mt-md-5">
      </div>
    </div>
</section>



<section class="container">
    <div id="projekter">
    <h2 class="text-light text-center pt-5">
        >/Projekter>
    </h2>
        <div class="d-flex flex-column flex-md-row pt-5">
    <a class="text-decoration-none" href="DinIndreJuvel.php">
        <img class="pt-5" src="images/dij.png" alt="Asellah">
        <h2 class="text-light pt-3 text-center ">
            Din Indre Juvel
        </h2>
    </a>

    <a class="text-decoration-none" href="marittima.php">
        <img class="pt-5" src="images/marittima.png" alt="marittima">
        <h2 class="text-center pt-3 text-light">
            Marittima
        </h2>
    </a>
    <a class="text-decoration-none" href="Musik.php">
        <img class="pt-5" src="images/Melsroom.png" alt="melsroom">
        <h2 class="text-light text-center pt-3">
            Mel´s Room
        </h2>
    </a>

    </div>

    <div class="d-flex justify-content-center pt-5">
        <div class="line w-75 mt-2 mt-md-5">
        </div>
    </div>
    </div>
</section>


<section>
    <div id="kontakt">
           <div>
                <p class="text-center text-light p-4">
                  >/Håber at jeg har vagt din interesse.
                  <br>
                  Har du lyst til at vi skal arbejde sammen,
                  eller vil du vide mere <br>kan jeg let kontaktes via denne formular>
                 </p>
            </div>

    </div>


    <div class="align-items-center mt-2">
        <form action="mailto:louy.hajjo21@gmail.com" method="post" enctype="text/plain">
            <div class="d-flex flex-column align-items-center">
              <div class="pt-3">
                <p class="text-light">>/Navn></p>
                <input class="px-5 py-2 border-0 rounded-0" id="Name" name="Navn" type="text">
              </div>
            <div class="pt-3" >
                <p class="text-light">>/Mobilnummer></p>
                <input class="px-5 py-2 rounded-0 border-0" id="phone" name="phone" type="text">
            </div>
            <div class="pt-3" >
                <p class="text-light">>/Email></p>
                <input class="px-5 py-2 rounded-0 border-0" id="email" name="email" type="email">
            </div>
            <div class="pt-3" >
                <p class="text-light">>/Besked></p>
                <textarea class="px-5 py-2 rounded-0 border-0" id="besked" name="besked" ></textarea>
            </div>
            </div>
            <div class="d-flex align-items-center flex-column pt-3 pb-5 ">
                <input  type="submit"  value="Send" class="px-4 py-2 bg-light border-0 text-dark rounded-0">
            </div>
</section>


<?php include "includes/footer.php"; ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
