<?php

if (!isset($path_to_root))
    $path_to_root = "./";

echo '<!-- banner -->
        <div id="banner">
            <a href="' . $path_to_root . 'index.php">
                <img id="logo" src="' . $path_to_root . 'images/logo.jpg" alt="Pok-A-Dot logo">
            </a>
        </div><!-- banner div -->

        <div class="menubar">
            <a href="' . $path_to_root . 'index.php">POKADOT</a>
            <a href="' . $path_to_root . '/pages/offerings.php">Offerings</a>
            <a href="' . $path_to_root . '/pages/makeplans.php">Make Plans</a>
            <a href="' . $path_to_root . '/pages/contactus.php">Contact Us</a>
        </div><!-- navigation -->

';
?>
