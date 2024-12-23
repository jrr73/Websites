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
<div class="header navigation-alphabetic">
    <?php include './views/title.php'; ?>
    <?php include './views/navigation.php'; 
    RenderAlphabeticNavigation()?>
</div>




  <div class="card-container">
  <?php
// Capture the clicked letter

// Include the functions file
include './functions.php';

if (isset($_GET['letter'])) {
    $clickedLetter = $_GET['letter'];
    $arrNum = setOfNumbers($clickedLetter);
    $cardTemplatePath = './views/card.php';
    $allCardsHtml = renderCards($arrNum, $cardTemplatePath);
    // Output all generated cards at once
    echo $allCardsHtml;
}
?>
</div>

    
  </div>    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>