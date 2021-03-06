<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sydney Dunlap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/reset.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="assets/scripts/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo.png" width="50" height="30" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.html">Portfolio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Contact<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="https://docs.google.com/document/d/e/2PACX-1vRY9wI-QAd_zMbBMmeOmfnY-4n8yBWemSM2f12KB3BhCchJrD-fA4Tzj3XsR0cu9PmWslcsQgwamCnZ/pub"
                        target="_blank">Resume</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="contactHeader jumbotron jumbotron-fluid">
        <div class="container">
            <img id="title" src="assets/images/contacttitle.png" alt="Get In Touch">
        </div>
        <div class="container contactForm">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="validationCustom01">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                            value="Jane" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                            value="Doe" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Questions? Comments? Just Saying 'Hello'?</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btnOrange" type="submit">Submit</button>
            </form>
        </div>

        <!-- <script>
            $(document).ready(function () {
                (function () {
                    'use strict';
                    window.addEventListener('load', function () {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function (form) {
                            form.addEventListener('submit', function (event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            }
        </script> -->
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a href="https://www.facebook.com/sydney.dunlap.73" class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://github.com/syddunlap" class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-github"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/sydney-dunlap" class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.instagram.com/dafunlap" class="btn-floating btn-li mx-1">
                        <i class="fab fa-instagram"> </i>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright
            <p>sydney.dunlap2011@gmail.com<br>(440)897-4556</p>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

</body>

</html>