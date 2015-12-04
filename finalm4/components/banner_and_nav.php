<?php

$path_to_root = $current ? "../" : "";

$classes = array_fill(0, 4, "");
$classes[$current] = 'class="selected" ';

echo '<!-- banner -->
        <div id="banner">
            <a href="' . $path_to_root . 'index.php">
                <img id="logo" src="' . $path_to_root . 'images/logo.png" alt="Pok-A-Dot logo">
            </a>
        </div><!-- banner div -->

        <div class="menubar">
            <a ' . $classes[0] . 'href="' . $path_to_root . 'index.php">Home</a>
            <a ' . $classes[1] . 'href="' . $path_to_root . 'pages/offerings.php">Offerings</a>
            <a ' . $classes[2] . 'href="' . $path_to_root . 'pages/makeplans.php">Make Plans</a>
            <a ' . $classes[3] . 'href="' . $path_to_root . 'pages/contactus.php">Contact Us</a>
        </div><!-- navigation -->

';
?>
