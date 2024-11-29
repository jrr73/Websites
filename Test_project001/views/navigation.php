
<?php

function RenderNavigation($navItems) {
    ?>
    <!-- Navigation main -->  
    <div class="navBar">
        <?php echo $navItems; ?>
    </div>
    <!-- end Navigation -->
    <?php
}

function MainNavigation() {
    $navItems = [
        ["label" => "Option 1", "href" => "#", "class" => "active", "aria-current" => "page"],
        ["label" => "Option 2", "href" => "#", "class" => ""],
        ["label" => "Option 3", "href" => "#", "class" => ""]
    ];

    $result = '';
    foreach ($navItems as $item) {
        $activeClass = $item['class'] ? ' ' . $item['class'] : '';
        $ariaCurrent = isset($item['aria-current']) ? ' aria-current="' . $item['aria-current'] . '"' : '';
        $result .= '<a class="navItem' . $activeClass . '"' . $ariaCurrent . ' href="' . $item['href'] . '">' . $item['label'] . '</a>';  
    }

    // Render the full framework with these items
    RenderNavigation($result);
}