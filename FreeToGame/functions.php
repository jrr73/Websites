<?php
// functions.php

function renderCards($imgNummer, $cardTemplatePath) {
    // Start output buffering to capture the card template
    ob_start();
    include $cardTemplatePath;
    $cardTemplate = ob_get_clean();

    // Initialize an empty string to collect all cards
    $cardsHtml = '';

    // Loop over image numbers and generate each card (loop now inside function)
    foreach ($imgNummer as $nummer) {
        // Determine API link to image
        $urlImage = "https://www.freetogame.com/g/" . $nummer . "/thumbnail.jpg";
        
        // Replace the placeholder with the actual image URL in the template
        $cardsHtml .= str_replace('{{IMAGE_URL}}', htmlspecialchars($urlImage), $cardTemplate);
    }

    // Return the complete HTML for all cards as a single string
    return $cardsHtml;
}


function setOfNumbers($letter) {
    $number = ord($letter);
    $id = (int)(fmod($number, 5));
    if ($id == 0) return [582, 540, 516, 380, 402, 333, 555, 508];
    if ($id == 1) return [507, 506, 505, 504];
    if ($id == 2) return [503, 502, 501, 500];
    if ($id == 3) return [499, 498, 300, 301];
    if ($id == 4) return [511, 303, 304];
}

?>