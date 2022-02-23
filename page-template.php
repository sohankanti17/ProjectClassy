<?php ?>

<html>
    <head>
        // Title for the page
        <title>Title  for page</title>
        
        // Partial page to include all common css stylings
        <?php require_once('/partials/styles_partial.php') ?>

        // Any page specific styling will go here
        <style type="text/css"></style>
    </head>
    <body>
        // Navigation bar
        <?php require_once('/partials/navbar_partial.php') ?>
        
        // Actual page content starts from here



        // Footer
        <?php require_once('/partials/footer_partial.php') ?>

        // Partial page to include all common js scripts
        <?php require_once('/partials/scripts_partial.php') ?>

        // Any page specific script will go here
        <script type="text/javascript"></script>
    </body>
</html>