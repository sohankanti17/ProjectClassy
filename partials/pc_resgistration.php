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


        <div class="container mt-5 mb-5">
            <div class="row align-items-center g-lg-5">
                <div class="col-lg-8 text-center text-lg-start">
                    <h2 class="display-5 fw-bold mb-5">Private Limited Company Registration</h2>
                    <p class="fs-5">A private limited company, as the term suggests, is a business organisation which is privately run and is owned by shareholders. 
                        Directors carry the responsibilities of running the company but holding the post of a director in a Private Limited Company doesn’t mean he or 
                        she is self-employed or the sole owner; but they are also the employees in the company. Therefore, in case of any legal disputes, the company 
                        is itself the target of the law and not the directors.<br><br>The ‘limited’ in the name means that the liability of a shareholder is limited only
                         to the shares they own in the company.  Corporation tax is required to be paid by the company relative to the profits that are made.
                          The company then distributes the remaining profit amongst its shareholders.</p>
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



        <!-- Services section starts here -->

        <div class="container mt-5 mb-5 ">
            <h2 class=" mb-5">What all you get !</h2>
            <div class="row p-1">
                <div class="col-lg">
                    <ul>
                        <li>Name Search Report</li>
                        <li>Name approval in RUN (Reserve Your Unique Name)</li>
                        <li>DSC(2no) (Extra Dsc Per Director – Rs-1000)</li>
                        <li>Filing Spice Form</li>
                        <li>Issue of Incorporation certificate along with PAN & TAN</li>
                    </ul>
                </div>
                <div class="col-lg">
                    <ul>
                        <li>Include Government Fees & Stamp Duty for Authorized Capital Upto -1 Lakh except for the state of Punjab, MP and Kerala.</li>
                        <li>Msme Registration</li>
                        <li>Share Certificate (Soft Copy)</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Services section ends here -->
        

        <!-- Fixed navbar starts here -->

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

        <!-- Fixed navbar ends here -->

        <!-- About section starts here -->
    
        <div class="fluid-container ms-4 mt-4">
            <div class="row">
                <div class="col-9">
                <h2>How it works?</h2><br>
            <p>As per the Companies Act of 2013, a minimum of two members are required for the start-up along with the certificate of incorporation. 
                The maximum number of members a company can have is 200 and the upper limit for shareholders are limited to 50. The shares of the company
                 aren't, however, available for stock exchange and the transfer of its shares are restricted. If the company wants to do so, the consent
                  of all the stakeholders are required. The shareholders in the company are usually close friends or relatives. To have a share in a private 
                  company, one must purchase one or more shares which are issued by the company.</p>
                <p>
                    <a class="text-danger" data-toggle="collapse" href="#collapsePLC" role="button" aria-expanded="false" aria-controls="collapse">
                        Show more.
                    </a>
                </p>
                <div class="collapse" id="collapsePLC">
                    <p>As per the Companies Act of 2013, a minimum of two members are required for the start-up along with the certificate of incorporation. 
                The maximum number of members a company can have is 200 and the upper limit for shareholders are limited to 50. The shares of the company
                 aren't, however, available for stock exchange and the transfer of its shares are restricted. If the company wants to do so, the consent
                  of all the stakeholders are required. The shareholders in the company are usually close friends or relatives. To have a share in a private 
                  company, one must purchase one or more shares which are issued by the company.</p> 
                </div>

            <h2>What all you can do under Private Company Registration?</h2>
            <p>The following steps are to be followed for registration:</p>
            <ol>
                <li>Applying for Digital Signature Certificate.</li>
                <li>Applying for Director’s Identification Number.</li>
                <li>Applying for company name availability.</li>
                <li>Filing for EMoa and EAOA.</li>
                <li>Applying for TAN and PAN.</li>
                <li>Issue of RoC.</li>
                <li>Opening a Currents Bank account in the company’s name.</li>
            </ol>

        </div>

                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
            

        <!-- About section ends here -->

<!-- Process flow starts here -->

<div class="fluid-container p-4" id="process-flow">
    <div class="row">
        <div class="col-9">
        <h2 class="mb-3">Registration process flow</h2>
    <p>With Classy Legal, it is refreshingly simple to register your company online. Here’s what you need to do:</p>
    <div class="row gap-4 d-flex justify-content-center">
        <div class="col-md-3 col-sm-12 text-center py-3 shadow">
            <p class="text-muted m-0">1-2 hours</p>
            <span class="d-block position-relative fs-2 fw-bold process-flow-step">1</span>
            <p class="fw-bold">Select package</p>
            <p class="m-0 fw-light lh-sm text-muted">Start by selecting the appropriate one, fill out the required forms, or simply speak to our experts online for assistance.</p>
        </div>
        <div class="col-md-3 col-sm-12 text-center py-3 shadow">
            <p class="text-muted m-0">2 working days</p>
            <span class="d-block position-relative fs-2 fw-bold process-flow-step">2</span>
            <p class="fw-bold">Apply for MOA</p>
            <p class="m-0 fw-light lh-sm text-muted">We will help you apply for the MoA after obtaining digital signatures and will generate a link to complete eKYC verification.</p>
        </div>
        <div class="col-md-3 col-sm-12 text-center py-3 shadow">
            <p class="text-muted m-0">2 working days</p>
            <span class="d-block position-relative fs-2 fw-bold">3</span>
            <p class="fw-bold lh-sm">Get your name approved</p>
            <p class="m-0 fw-light lh-sm text-muted">We will help you identify unique names, and get them approved by filing the RUN form.We will help you identify unique names, and get 
                them approved by filing the RUN form.</p>
        </div>
        <div class="col-md-3 col-sm-12 text-center py-3 shadow">
            <p class="text-muted m-0">2 working days</p>
            <span class="d-block position-relative fs-2 fw-bold process-flow-step">4</span>
            <p class="fw-bold">Fill Spice 32 form</p>
            <p class="m-0 fw-light lh-sm text-muted">We will help you to submit the Spice 32form with the MCA.</p>
        </div>
        <div class="col-md-3 col-sm-12 text-center py-3 shadow">
            <p class="text-muted m-0">2-3 working days</p>
            <span class="d-block position-relative fs-2 fw-bold process-flow-step">5</span>
            <p class="fw-bold lh-sm">Get company incorporation, PAN &amp; TAN generated</p>
            <p class="m-0 fw-light lh-sm text-muted">We will help you fill out the Incorporation Certificate. The Ministry of Corporate Affairs will issue your PAN and TAN.</p>
        </div>
        <div class="col-md-3 col-sm-12 text-center py-3 shadow">
            <p class="text-muted m-0">3-4 working days</p>
            <span class="d-block position-relative fs-2 fw-bold">6</span>
            <p class="fw-bold lh-sm">Obtain documents for GST registration</p>
            <p class="m-0 fw-light lh-sm text-muted">We will obtain all the documents and will file for the GST registration.</p>
        </div>
    </div>

        </div>
        <div class="col-3">

        </div>

    </div>
</div>


<!-- Process flow ends here -->


        <!-- Private Limited Company Registration Benefits starts here -->

        <div class="fluid-container p-4">
            <div class="row">
                <div class="col-9">
                <h2>Private Limited Company Registration Benefits</h2>
                    <p>Starting up a Private Limited Company has its down gains. Below are the benefits a private company enjoys:</p>
                    <ul class="mt-4">
                        <li>
                            <p><h4> Incomes are Tax Efficient:</h4> Pvt. Ltd. companies enjoy a tax efficient method of paying oneself. The directors and owners of a company can draw their own salary via a PAYE (Pay As You Earn). </p>
                        </li>
                        <li>
                            <p><h4>Raising additional capitals:</h4>  Additional capitals can be raised through the selling of shares which helps a business to invest and grow. </p>
                        </li>
                        <li>
                            <p><h4>Security for investors:</h4>  Shareholders and investors are immune to the consequences of the company going bankrupt or experiencing legal issues. The risk is limited only to their shares within the company.</p>
                        </li>
                        <li>
                            <p><h4>Opportunity to work with other companies:</h4>  Most big companies won’t be willing to share their business markets with sole traders. Private limited companies have the advantage of being able to operate with other businesses to provide supplies of goods and services.</p>
                        </li>
                    </ul>


                </div>
                <div class="col-3">

                </div>

            </div>
        </div>


        <!-- Private Limited Company Registration Benefits ends here -->



        <!-- Requirements section starts here -->


        <div class="fluid-container p-4">
            <div class="row">
                <div class="col-9">
                <h2>Requirements for Registering your Business</h2>
        <div class="row mt-4">
            <div class="col-4 p-2">
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
            <div class="col-4 p-2">
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
            <div class="col-4 p-2">
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
                <div class="col-3">

                </div>

            </div>
        </div>

        <!-- Requirement Section ends here -->

        <!-- Advantages & Disadvantages section starts here -->

        <div class="fluid-container p-4">
            <div class="row">
                <div class="col-9">
                <h2 class="my-4 py-2 mb-4">Advantages & Disadvantages of Private Company Registration</h2>
                <h4 class="fw-normal mb-3">Advantages of Pvt Co. Registration</h4>
                    <ol>
                        <li> <p class="fw-bold">No Lower limit for startup-</p>  There’s no minimum amount that is required for starting a Private Company.</li>
                        <li> <p class="fw-bold">Raising Funds- </p>Private Ltd. companies have a more professional status than a sole trader. It attracts investors who can provide funds for the growth of the company. </li>
                        <li> <p class="fw-bold">Pvt. Ltd. Companies are FDI allowed- </p>Privately registered companies have the freedom of welcoming Foreign Direct Investments. </li>
                    </ol>
                <h4 class="fw-normal mb-3">Disadvantages of Pvt Co. Registration</h4>
                    <ol>
                        <li> <p class="fw-bold">Restrictions on stock exchanges</p> The obvious disadvantage of a private limited company is that it cannot sell its stocks publicly without the consent of all its members and shareholders. </li>
                        <li> <p class="fw-bold">Limit on maximum number of shareholders-</p>The maximum numbers of shareholders a private company can accommodate is 50.</li>
                        <li> <p class="fw-bold">Mandatory Compliances- </p>The company needs to maintain few obligations, failing to do which can result in fines worth large sums of money. For instance, the directors need to disclose their interests from time to time, file annual returns and maintain statutory registers with the Ministry of Corporate Affairs.  </li>
                    </ol>

                </div>
                <div class="col-3">

                </div>

            </div>
        </div>

        <!-- Advantages & Disadvantages section ends here -->

        <!-- FAQ's section starts here -->

        <div class="fluid-container">
            <div class="row">
                <div class="col-9">
                <h2 class="mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    1.	What is the Time and Cost of Private Company Registration?
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">It usually takes around 10-15 days for registration after all the documents are submitted. The cost of registering a company as a Private Limited Company ranges from Rs. 6,000 to Rs. 30,000. This depends on the number of directors, members and few other factors. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    2.	How to choose a company name for Private Company Registration?
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The first rule is to avoid choosing an undesirable and controversial name. Also, one has to carefully adhere to the Emblems and Names Act.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    3.	Who can start a private company in India?
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">-	Any organisation is eligible to start a pvt. company. According to the Companies Act, 2013, minimum two members are required for starting up a private company. The documents required are -  PAN card, Govt ID proof - Voters’ ID or passport or driver’s licence, Bank statement, Utility bills either mobile or gas or electricity, Passport size photograph, Specimen signature - Director’s signature on a blank document and DIN.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    4.	How to raise funding in a Private Limited Company?
                    </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">-	Private companies aren’t allowed to sell their shares at the stock exchange. Therefore, in order to raise funds, companies need investors and shareholders. Other major sources of their fundings are retained earnings, debt capitals and equity capitals.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    5. Why should you establish a Private Limited Company?
                    </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">-	Professional Status. A pvt. Ltd. Company has a higher status and a more professional reach than a sole trader. Other businesses and investors are usually more willing to work with Pvt. Ltd. companies.</div>
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
                     Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look 
                     in a real-world application.</div>
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
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look
                     in a real-world application.</div>
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
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look 
                    in a real-world application.</div>
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
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look
                     in a real-world application.</div>
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
                    Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look 
                    xin a real-world application.</div>
                    </div>
                </div>
            </div>

                </div>
                <div class="col-3">

                </div>

            </div>
        </div>


        <!-- FAQ;s section ends here -->
    


        
        <!-- Footer -->
        <?php require_once('./partials/footer_partial.php') ?>

        <!-- Partial page to include all common js scripts -->
        <?php require_once('./partials/scripts_partial.php') ?>

        <!-- Any page specific script will go here -->
        <script type="text/javascript"></script>

    </body>
</html>