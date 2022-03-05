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


<div class="fluid-container bg-primary">
    <div class="container">
        <h1 class="display-4 fw-normal text-center pt-2">Pricing</h1><br>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container col-10 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets\images\Why-choose-us.gif" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                width="777" height="777" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h2>Why people choose us!</h2><br>
            <h6>No Hidden Charges</h6>
            <p>Legal Salah has a strict policy in place regarding transparent pricing. All our prices are inclusive of
                all services required.</p><br>
            <h6>100% Money Back Guarantee</h6>
            <p>100% Money-Back Guarantee if projects do not complete within the prescribed timeline.</p><br>
            <h6>Easy EMI Options</h6>
            <p>Get Easy EMI option through all Debit and Credit OR other payment gateway options.</p><br>
            <h6>24*7 Customer Support</h6>
            <p>We at Legal Salah Provides you excellent after sales support through Call.</p>
        </div>
    </div>
</div>
</div>

</div>


<div class="fluid-container bg-secondary">
    <img src="" alt="">
    <div class="container bg-primary" style="height:50vh">
        <h3 class="d-flex justify-content-center align-content-center">Brand Highlights</h3>


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