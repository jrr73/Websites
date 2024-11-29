
<?php

function RenderNavigationMainFramework($navItems) {
    ?>
    <!-- Navigation main -->  
    <nav class="navbar navbar-expand-lg custom-navbar" style="background-color: #173B45;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">JE Productions</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php echo $navItems; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end Navigation -->
    <?php
}

function RenderMainNavigation() {
    $navItems = [
        ["label" => "All games", "href" => "#", "class" => "active", "aria-current" => "page"],
        ["label" => "By genre", "href" => "#", "class" => ""],
        ["label" => "By alphabet", "href" => "#", "class" => ""]
    ];

    $result = '';
    foreach ($navItems as $item) {
        $activeClass = $item['class'] ? ' ' . $item['class'] : '';
        $ariaCurrent = isset($item['aria-current']) ? ' aria-current="' . $item['aria-current'] . '"' : '';
        $result .= '<li class="nav-item"><a class="nav-link' . $activeClass . '"' . $ariaCurrent . ' href="' . $item['href'] . '">' . $item['label'] . '</a></li>';  
    }

    // Render the full framework with these items
    RenderNavigationMainFramework($result);
}

function RenderAlphabeticNavigation() {
  $alphas = range('A', 'Z');
  $currentLetter = isset($_GET['letter']) ? $_GET['letter'] : null;
  $result = '';
  foreach ($alphas as $letter) {
      // Mark the current letter as active
      $activeClass = ($letter === $currentLetter) ? ' active' : '';
      $result .= '<li class="nav-item"><a class="nav-link' . $activeClass . '" href="?letter=' . $letter . '">' . $letter . '</a></li>';
  }

  // Render the full framework with these items
  RenderNavigationMainFramework($result);
}



// Usage example from another file:
// RenderMainNavigation(); // For main navigation
// RenderAlphabeticNavigation(); // For alphabetic navigation


