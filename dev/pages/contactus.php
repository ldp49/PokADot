<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot Contact Us</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <div id="container">

        <?php $current=3; include "../components/banner_and_nav.php"; ?>

        <div id="contentpane">
            <div class="section">
                <h2>Email</h2>
                <p class="indent">info@pokadot.com</p>
            </div><!-- email section -->
            <div class="section">
                <h2>Send us a note</h2>
                <p class="indent">
                    P O Box 318<br>
                    Concord, MA 01742
                </p>
            </div><!-- address section -->
            <div class="section">
                <h2>Leave us a message</h2>
                <p class="indent">978-318-3999</p>
            </div><!-- phone number section -->

            <div class="section">
                <h2>Direct Message</h2>
                <div class="indent">
                    <?php include "../components/contact_form.php" ?>
                </div>
            </div>

        </div><!-- content pane -->

    </div><!-- container -->

    <script type="text/javascript" src="../js/form_fields.js"></script>

</body>
</html>