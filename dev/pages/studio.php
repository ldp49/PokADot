<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot Studio</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div id="container">

        <?php $path_to_root = "../"; include "../components/banner.php"; ?>

        <div class="menubar">
            <a href="../index.php">Home</a>
            <a href="#" class="selected">Studio</a>
            <a href="createevent.php">Plan</a>
            <a href="contact.php">Contact Us</a>
        </div><!-- navigation -->

        <h1 id="pagetitle">Studio Offerings</h1>

        <div id="contentpane">
            <h2>All Ages</h2>
            <ul class="indent">
                <li>Open Studio</li>
                <li>Open Art</li>
                <li>Pottery Painting</li>
            </ul>

            <h2>Workshops and Classes</h2>
            <ul class="indent">
                <li>ArtDabblers  - 1+</li>
                <li>ArtExplorers - 3+</li>
                <li>ArtKidtechs  - 5+</li>
            </ul>
        </div><!-- content pane -->

    </div>
</body>
</html>