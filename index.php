<?php ?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Title for the page -->
        <title>Home</title>
        
        <!-- Partial page to include all common css stylings -->
        <?php require_once ('./partials/styles_partial.php') ?>

        <!-- Any page specific styling will go here -->
        <style type="text/css"></style>
        
    </head>
    <body>
        <!-- Navigation bar -->
        <?php require_once('./partials/navbar_partial.php') ?>
        
        <!-- Actual page content starts from here -->


        <div class="fluid-container d-flex justify-content-center align-items-center" style="height:95vh">
            <div class="container col-lg-6 px-4 mx-auto text-center">

                <h1 class="display-6 fw-bold"> Helped over 5,000+ Entrepreneurs to launch their startups</h1><br>
                <p class="lead mb-4">
                    Marvel's The Avengers classified under the name Marvel Avengers Assemble in the United Kingdom 
                    and Ireland,or simply The Avengers, is a 2012 American superhero film based on the Marvel Comics
                    superhero team of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion
                    Pictures, it is the sixth film in the Marvel Cinematic Universe.
                </p>

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Our Services</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">About Us</button>

                </div>
            </div>
        </div>


        <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="co0l-10 col-sm-8 col-lg-6">
            <img
                src="bootstrap-themes.png"
                class="d-block mx-lg-auto img-fluid"
                alt="Bootstrap Themes"
                width="700"
                height="500"
                loading="lazy"
            />
            </div>
            <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">
                Responsive left-aligned hero with image
            </h1>
            <p class="lead">
                Quickly design and customize responsive mobile-first sites with
                Bootstrap, the world’s most popular front-end open source toolkit,
                featuring Sass variables and mixins, responsive grid system, extensive
                prebuilt components, and powerful JavaScript plugins.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
                Primary
                </button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">
                Default
                </button>
            </div>
            </div>
        </div>
        </div>






        </div>

        <!-- Footer -->
        <?php require_once('./partials/footer_partial.php') ?>

        <!-- Partial page to include all common js scripts -->
        <?php require_once('./partials/scripts_partial.php') ?>

        <!-- Any page specific script will go here -->
        <script type="text/javascript"></script>

    </body>
</html>