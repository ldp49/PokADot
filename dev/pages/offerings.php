<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot Studio</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <div id="container">

        <?php $current=1; include "../components/banner_and_nav.php"; ?>

        <?php include "../components/picture_popout.php" ?>

        <div id="contentpane">

            <h2>Workshops and Classes</h2>
            <div class="indent">
                <h4>Pottery Painting</h4>
                <h4>ArtDabblers  - 1+</h4>
                <?php
                    $studio_pictures = array( "../images/artdabblers1 (300x169).jpg",
                                              "../images/artdabblers2 (300x169).jpg",
                                              "../images/artdabblers3 (300x169).jpg");
                    include "../components/studiopictures.php";
                ?>
                <h4>ArtExplorers - 3+</h4>
                <?php
                    $studio_pictures = array( "../images/artexplorers1 (300x169).jpg",
                                              "../images/artexplorers2 (300x169).jpg",
                                              "../images/artexplorers3 (300x169).jpg");
                    include "../components/studiopictures.php";
                ?>
                <h4>ArtKidtechs  - 5+</h4>
                <?php
                    $studio_pictures = array( "../images/artkidtechs1 (300x169).jpg",
                                              "../images/artkidtechs2 (300x169).jpg",
                                              "../images/artkidtechs3 (300x169).jpg");
                    include "../components/studiopictures.php";
                ?>
            </div>

        </div><!-- content pane -->

    </div><!-- container -->

    <script src="../js/picture-popout.js"></script>

</body>
</html>