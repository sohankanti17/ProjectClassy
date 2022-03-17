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

        <div class="container bg-primary mt-3 d-flex justify-content-center align-items-center" style="height:300px">
            <h1>Process flow</h1>
        </div>

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

        <div class="container bg-primary mt-3 d-flex justify-content-center align-items-center" style="height:300px">
            <h1>About</h1>
        </div>

        <div class="container bg-danger mt-3 d-flex justify-content-center align-items-center" style="height:300px">
            <h1>Services</h1>
        </div>

        <div class="container bg-primary mt-3 d-flex justify-content-center align-items-center" style="height:300px">
            <h1>Documents Required - Written in a list form</h1>
        </div>

        <div class="container bg-danger mt-3 d-flex justify-content-center align-items-center" style="height:300px">
            <h1>Advantages & Distadvantages - Written in a table form </h1>
        </div>

        <div class="container bg-primary mt-3 d-flex justify-content-center align-items-center" style="height:300px">
            <h1>FAQ's</h1>
        </div>



        
        <!-- Footer -->
        <?php require_once('./partials/footer_partial.php') ?>

        <!-- Partial page to include all common js scripts -->
        <?php require_once('./partials/scripts_partial.php') ?>

        <!-- Any page specific script will go here -->
        <script type="text/javascript"></script>

    </body>
</html>