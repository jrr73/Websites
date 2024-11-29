<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS and own CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  href="./styles/general.css" rel="stylesheet" type="text/css"/>
    <link  href="./styles/header.css" rel="stylesheet" type="text/css"/>
    <link  href="./styles/title.css" rel="stylesheet" type="text/css"/>
    <link  href="./styles/navigation.css" rel="stylesheet" type="text/css"/>
    <link  href="./styles/cards.css" rel="stylesheet" type="text/css"/>

    <title>Free to game</title>
  </head>
  <body>

<!-- header.php -->
<div class="header navigation-main">
    <?php include './views/title.php'; ?>
    <?php include './views/navigation.php'; 
    RenderMainNavigation()?>
</div>


<!-- grid with thumbnails of games -->

<?php

  // Include the functions file
  include_once './functions.php';

  // Array with specific numbers for the API call
  $imgNummer = [582, 540, 516, 508, 507, 506, 505, 504, 503, 502, 501, 500, 499, 498, 300, 301, 511, 303, 304];

  // Call the renderCards function and get back all cards' HTML as a single string
  $cardTemplatePath = './views/card.php';
  $allCardsHtml = renderCards($imgNummer, $cardTemplatePath);
?>

<div class="card-container">
  
    <?php
      // Output all generated cards at once
      echo $allCardsHtml;
    ?>
  
</div>

<!-- end flex grid with thumbnails of games -->


    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>