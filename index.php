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
    <body >
        <!-- Navigation bar -->
        <?php require_once('./partials/navbar_partial.php') ?>
        
        <!-- Actual page content starts from here -->


        <div class=" fluid-container" style="height:95vh; background-image:url('.\\assets\\images\\bg1.png');background-repeat: no-repeat;
    background-size: cover;">
            <!-- <img src="./assets\images\bg1.png" alt="" style="height:200px"> -->
            <div class="container col-lg-6 px-4 mx-auto text-center ">
                
                <h1 class="display-6 fw-bold "> Helped over 5,000+ Entrepreneurs to launch their startups</h1><br>
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

        <div class="container py-5">
            <h1 class="text-center mb-5 fw-bold">Our Services</h1>
            <ul class="nav nav-pills nav-fill mb-5" id="Pricing_Tab" role="tablist">
                <li class="nav-item m-2" role="presentation">
                    <button class="nav-link active border border-primary" id="tab-Pricing_Tab_1" data-bs-toggle="tab" data-bs-target="#Pricing_Tab_1" type="button" role="tab" aria-controls="Pricing_Tab_1" aria-selected="true">
                        Company registration
                    </button>
                </li>
                <li class="nav-item m-2" role="presentation">
                    <button class="nav-link border border-primary" id="tab-Pricing_Tab_2" data-bs-toggle="tab" data-bs-target="#Pricing_Tab_2" type="button" role="tab" aria-controls="Pricing_Tab_2" aria-selected="false">
                        Trademark registration    
                    </button>
                </li>
                <li class="nav-item m-2" role="presentation">
                    <button class="nav-link border border-primary" id="tab-Pricing_Tab_3" data-bs-toggle="tab" data-bs-target="#Pricing_Tab_3" type="button" role="tab" aria-controls="Pricing_Tab_3" aria-selected="false">
                        Govt. licenses &amp; registrations
                    </button>
                </li>
                <li class="nav-item m-2" role="presentation">
                    <button class="nav-link border border-primary" id="tab-Pricing_Tab_4" data-bs-toggle="tab" data-bs-target="#Pricing_Tab_4" type="button" role="tab" aria-controls="Pricing_Tab_4" aria-selected="false">
                        Tax registrations
                    </button>
                </li>
            </ul>
            <div class="tab-content container" id="Pricing_Tab_Content">
                <div class="tab-pane fade show active bg-success" id="Pricing_Tab_1" role="tabpanel" aria-labelledby="Pricing_Tab_1-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade bg-primary" id="Pricing_Tab_2" role="tabpanel" aria-labelledby="Pricing_Tab_2-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade bg-warning" id="Pricing_Tab_3" role="tabpanel" aria-labelledby="Pricing_Tab_3-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade bg-secondary" id="Pricing_Tab_4" role="tabpanel" aria-labelledby="Pricing_Tab_4-tab">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-4 rounded-3 shadow-lg">
                                <div class="card-header text-center py-3">
                                    <p class="fw-bold m-0">Private limited company</p>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted fw-light">Starting</small>
                                    <h3 class="card-title">&#8377;7999<small class="text-muted fw-light">*</small></h3>
                                    <p class="my-4 text-muted small">
                                        The default option for start-ups and growing businesses as only private limited companies can raise venture capital. This type of company offers limited liability for its shareholders with certain restrictions placed on the ownership. Private limited company registration, directors may be different from shareholders.
                                    </p>
                                    <a class="w-100 btn btn-md btn-outline-primary">Start now</a>
                                </div>
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


<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
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