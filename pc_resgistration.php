<?php?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Title for the page -->
        <title>Private Company Registration</title>
        
        <!-- Partial page to include all common css stylings -->
        <?php require_once ('./partials/styles_partial.php') ?>

        <!-- Any page specific styling will go here -->
        <style type="text/css"></style>

        
    </head>
    <body >
        <!-- Navigation bar -->
        <?php require_once('./partials/navbar_partial.php') ?>
        
        <!-- Actual page content starts from here -->


        <div class="container bg-danger mt-5">
            <div class="row align-items-center g-lg-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="display-5 fw-bold mb-5">Private Limited Company Registration</h2>
                    <p class="fs-5">Pvt Ltd company is included under the Companies Act of 2013
                        and administered by the Ministry of Corporate Affairs (MCA). It is a filed corporate structure, 
                        that gives the business a separate legal individuality from its owners. Hence, giving key advantages like 
                        the ability to contract in its own name and appending to a private limited company list, and safeguard 
                        personal assets of the owners from business debts</p>
                </div>

                <div class="col-md-10 mx-auto col-lg-4">
                    <div class="card mb-4 rounded-4 shadow-lg border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal text-center">3000 +Govt Fees</h4>
                        </div>
                        <form class="p-4 p-md-4 border rounded-5 bg-light">
                            <div class="form-floating mb-3">
                            <input type="name" class="form-control" id="floatingInput" placeholder="name">
                            <label for="floatingInput">Full Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" placeholder="number">
                                <label for="floatingPassword">Phone Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="state" name="state">
                                    <option value="">State</option>
                                    <option value="DL">Delhi</option>
                                    <option value="GA">Goa</option>
                                    <option value="HR">Harayana</option>
                                    <option value="UP">Uttar Pradesh</option>
                                    <option value="PU">Punjab</option>
                                    <option value="UT">Uttrakhand</option>
                                    <option value="HP">Himachal Pradesh</option>
                                    <option value="AP">Andhra Pradesh</option>
                                </select>
                            </div>

                            <button type="button" class="w-100 btn btn-lg btn-primary mt-2">Contact us</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Process flow starts here -->

        <div class="container mt-3 py-3">
            <h2 class="fw-normal mb-3">Registration process flow</h2>
            <p>With Classy Legal, it is refreshingly simple to register your company online. Here’s what you need to do:</p>
            <div class="row">
                <div class="col-md-2 col-sm-12 text-center py-2 shadow">
                    <p class="text-muted m-0">1-2 hours</p>
                    <span class="my-3 fs-2 fw-bold">1</span>
                    <p class="fw-bold">Select package</p>
                    <p class="m-0 fw-light lh-sm text-muted">Start by selecting the appropriate one, fill out the required forms, or simply speak to our experts online for assistance.</p>
                </div>
                <div class="col-md-2 col-sm-12 text-center py-2 shadow">
                    <p class="text-muted m-0">2 working days</p>
                    <span class="my-3 fs-2 fw-bold">2</span>
                    <p class="fw-bold">Apply for MOA</p>
                    <p class="m-0 fw-light lh-sm text-muted">We will help you apply for the MoA after obtaining digital signatures and will generate a link to complete eKYC verification.</p>
                </div>
                <div class="col-md-2 col-sm-12 text-center py-2 shadow">
                    <p class="text-muted m-0">2 working days</p>
                    <span class="my-3 fs-2 fw-bold">3</span>
                    <p class="fw-bold lh-sm">Get your name approved</p>
                    <p class="m-0 fw-light lh-sm text-muted">We will help you identify unique names, and get them approved by filing the RUN form.We will help you identify unique names, and get them approved by filing the RUN form.</p>
                </div>
                <div class="col-md-2 col-sm-12 text-center py-2 shadow">
                    <p class="text-muted m-0">2 working days</p>
                    <span class="my-3 fs-2 fw-bold">4</span>
                    <p class="fw-bold">Fill Spice 32 form</p>
                    <p class="m-0 fw-light lh-sm text-muted">We will help you to submit the Spice 32form with the MCA.</p>
                </div>
                <div class="col-md-2 col-sm-12 text-center py-2 shadow">
                    <p class="text-muted m-0">2-3 working days</p>
                    <span class="my-3 fs-2 fw-bold">5</span>
                    <p class="fw-bold lh-sm">Get company incorporation, PAN &amp; TAN generated</p>
                    <p class="m-0 fw-light lh-sm text-muted">We will help you fill out the Incorporation Certificate. The Ministry of Corporate Affairs will issue your PAN and TAN.</p>
                </div>
                <div class="col-md-2 col-sm-12 text-center py-2 shadow">
                    <p class="text-muted m-0">3-4 working days</p>
                    <span class="my-3 fs-2 fw-bold">6</span>
                    <p class="fw-bold lh-sm">Obtain documents for GST registration</p>
                    <p class="m-0 fw-light lh-sm text-muted">We will obtain all the documents and will file for the GST registration.</p>
                </div>
            </div>
        </div>

        <!-- Process flow ends here -->

        <nav class="navbar navbar-expand-md navbar-dark bg-danger mt-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"   aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Document Requirement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Advantages & Disadvantages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ's</a>
                </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-3 p-4 ">
            <h2>Why should you establish a private limited company?</h2><br>
            <p>One of the most pertinent aspects to identify as a business owner is the type of company you want to establish. 
                Most entrepreneurs prefer establishing their start-up as a private limited company, as the term refers to a company
                held by a select few people. Within this structure, company owners are only as liable as their percentage of shares had.
                As a result, the liability that's held by each member is limited, ensuring that owners can sell their shares to raise capital 
                if they require to do so. This is one of the reasons why young entrepreneurs prefer registering their business as a private 
                limited company – the limited liability offers a certain level of security within the volatile world of start-ups.</p>
                <p>
                    <a class="text-danger" data-toggle="collapse" href="#collapsePLC" role="button" aria-expanded="false" aria-controls="collapse">
                        Show more.
                    </a>
                </p>
                <div class="collapse" id="collapsePLC">
                    <p>Additionally, private limited companies are often quite attractive to potential investors who'd like to gain equity in the 
                        company they are investing in. As the shares can also be issued at a premium, the investment process is generally quite smooth.
                        Finally, it is essential to note that if you plan to register a private limited company, you only need two company members to
                        qualify for the same. Conversely, a total of 200 members can also register as owners of the same company. This is yet another 
                        reason why private limited companies in India are so popular. If you're wondering how to register a private limited company, 
                        keep reading to find out everything you'll need to know. </p> 
                </div>
        </div>

        <div class="container bg-danger mt-3 d-flex justify-content-center align-items-center" style="height:300px">
            <h1>Services</h1>
        </div>

        <div class="container mt-4">
            <h2>Requirements for Registering your Business</h2>
        <div class="row mt-4">
            <div class="col p-2">
                <div class="card align-items-center p-2 bg-light" style="height:100%">
                <img src=".\assets\images\doc1.png" class="card-img-top mt-3" alt="..." style="height:50px; width:50px">
                    <div class="card-body">
                        <h5 class="card-title mb-4 text-center">Minimum Requirements for Private Limited Company</h5>
                        <ul>
                            <li >A minimum of two members who are aged 18 or more can be directors and shareholders of the company.</li>
                            <li >A minimum share capital of Rs 100,0000</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="card align-items-center bg-light p-2">
                <img src=".\assets\images\doc2.png" class="card-img-top mt-3" alt="..." style="height:50px; width:50px">
                    <div class="card-body">
                        <h5 class="card-title mb-4 text-center">Documents required for all directors</h5>
                        <ul>
                            <li >Self Attested Copy of Pan Card.</li>
                            <li >Self Attested copy of Aadhar Card / Passport / Driving License / Voter Identity Card</li>
                            <li>Passport size photograph.</li>
                            <li>Self Attested Copy of Telephone Bill / Mobile Bill</li>
                            <li>Self Attested Copy of Electricity Bill / Water Bill</li>
                            <li>Self Attested Copy of Bank Statement /Bank Passbook with the latest transaction</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="card align-items-center bg-light p-2" style="height:100%">
                <img src=".\assets\images\doc3.png" class="card-img-top mt-3" alt="..." style="height:50px; width:50px">
                    <div class="card-body">
                        <h5 class="card-title mb-4 text-center">Documents required to register the office</h5>
                        <ul>
                            <li >No-Objection letter from the Owner of Address to use the address of the registered office of the Company.</li>
                            <li >Electricity Bill/Telephone Bill /Gas Bill/ Water Bill -To be signed by the of the Owner of Premises</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3 py-3">
            <h2 class="fw-normal my-4 py-2">Advantages & Disadvantages of Private Company Registration</h2>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h4 class="fw-normal mb-3">Advantages of Pvt Co. Registration</h4>
                    <p><i class="fa fa-sack-dollar fa-2x pe-2"></i>No minimum capital</p>
                    <p><i class="fa fa-house-chimney-window fa-2x pe-2"></i>Secure personal assets</p>
                    <p><i class="fa fa-circle-minus fa-2x pe-2"></i>Best way to start business in India</p>
                    <p><i class="fa fa-indian-rupee-sign fa-2x pe-2"></i>Raise funding whenever needed</p>
                </div>
                
                <div class="col-sm-12 col-md-6">
                    <h4 class="fw-normal mb-3">Disadvantages of Pvt Co. Registration</h4>
                    <p><i class="fa fa-sack-dollar fa-2x pe-2"></i>Cannot accept deposits</p>
                    <p><i class="fa fa-house-chimney-window fa-2x pe-2"></i>Strict compliances</p>
                    <p><i class="fa fa-circle-minus fa-2x pe-2"></i>Yearly compliance cost</p>
                    <p><i class="fa fa-indian-rupee-sign fa-2x pe-2"></i>Bank finance not available before 2 years</p>
                </div>
            </div>
        </div>

        <!-- FAQ's section starts here -->

        <div class="container bg-primary mt-3 p-2 mb-3">
            <div class="accordion accordion-flush">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Accordion Item #1
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Accordion Item #2
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. 
                    Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Accordion Item #3
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. 
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Accordion Item #4
                    </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body.
                     Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Accordion Item #5
                    </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. 
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Accordion Item #6
                    </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body.
                     Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Accordion Item #7
                    </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. 
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Accordion Item #8
                    </button>
                    </h2>
                    <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. 
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        Accordion Item #9
                    </button>
                    </h2>
                    <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. 
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                        Accordion Item #10
                    </button>
                    </h2>
                    <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. 
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
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