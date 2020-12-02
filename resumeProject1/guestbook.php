<!doctype html>
<html lang="en" class="full-height">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Link for font -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="icon" href="images/personalmage.jpeg">

    <!-- My style Sheet -->
    <link rel="stylesheet" href="styles/guestbookStyles.css">
    <title>Alisa Llavore's Resume</title>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-custom navbar-expand-md navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Alisa Llavore's Guestbook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="index.html">Resume</a>
                <a class="nav-link" href="login.php">Log In</a>
            </div>
        </div>
    </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container" id="jumbotronContainer">
        <h1 class="display-4">Welcome to my Guestbook</h1>
        <p class="lead">Please sign my guestbook to keep in touch!</p>
    </div>
</div>

<!-- Contact Form -->
<div class = "container" id="contact">
    <!-- Account Form-->
    <form id = "accountForm" method="post" action="submit.php">

        <div class="form-group">
            <p class="h2 text-center py-4">Contact Me!</p>
            <div class="form-row">
                <!-- First Name -->
                <div class="form-group col-md-6">
                    <label for="fname">First Name: </label>
                    <input type="text" class="form-control" id="fname" name="fname">
                    <span class="d-none text-danger" id="err-fname">Field is required</span>
                </div>
                <!-- Last Name -->
                <div class="form-group col-md-6">
                    <label for="lname">Last Name: </label>
                    <input type="text" class="form-control" id="lname" name="lname">
                    <span class="d-none text-danger" id="err-lname">Field is required</span>
                </div>
            </div>
            <div class="form-row">
                <!-- Job Title -->
                <div class="form-group col-md-6">
                    <label for="jobTitle">Job Title: </label>
                    <input type="text" class="form-control" id="jobTitle" name="jobTitle">
                    <span class="d-none text-danger" id="err-jobTitle">Field is required</span>
                </div>

                <!-- Company -->
                <div class="form-group col-md-6">
                    <label for= "company">Company: </label>
                    <input type="text" class="form-control" id="company" name="company">
                    <span class="d-none text-danger" id="err-company">Field is required</span>
                </div>
            </div>
            <div class="form-row">
                <!-- LinkedIn URL -->
                <div class="form-group col-md-6">
                    <label for= "linkedIn">LinkedIn URL: </label>
                    <input type="text" class="form-control" id="linkedIn" name="linkedIn">
                    <span class="d-none text-danger" id="err-linkedIn">Link does not include http</span>
                    <span class="d-none text-danger" id="err-linkedIn2">Link does not include .com</span>
                </div>

                <!-- Email Address -->
                <div class="form-group col-md-6">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    <span class="d-none text-danger" id="err-email">Field is required</span>
                    <span class="d-none text-danger" id="err-email2">Email is missing '.'</span>
                </div>
            </div>
        </div>

        <p class="h2 text-center py-4">How We Met</p>
        <div class="form-group">
            <!--    How we met selector    -->
            <label for="met">How did we meet:</label>
            <select class="custom-select" id="met" name="met">
                <option value="Choose">Choose...</option>
                <option value="Meetup">Meetup</option>
                <option value="Job Fair">Job Fair</option>
                <option value="We haven't met yet">We haven't met yet</option>
                <option value="Other">Other</option>
<!--                <option value="0">Choose...</option>-->
<!--                <option value="1">Meetup</option>-->
<!--                <option value="2">Job Fair</option>-->
<!--                <option value="3">We haven't met yet</option>-->
<!--                <option value="4">Other</option>-->
            </select>
            <span class="d-none text-danger" id="err-met">*Please select an option</span>
        </div>
        <div class="form-group d-none" id="otherContext">
            <!--    Other text area    -->
            <label for="other-text">Other:</label>
            <textarea class="form-control" rows="2" placeholder="Please specify..." id="other-text" name="other-text"></textarea>
        </div>
        <!--    Message text area    -->
        <label for="message-text">Leave a message:</label>
        <textarea class="form-control" rows="4" placeholder="Please specify..." id="message-text" name="message-text"></textarea>
        <p class="h2 text-center py-4">Mailing List</p>
        <!-- Mailing List -->
        <div class="form-row justify-content-center">
            <div class="checkbox">
                <label><input type="checkbox" id="mailingList" name="mailingList"> Please add me to your mailing list</label>
            </div>
        </div>
        <div class="form-group d-none" id="emailSection">
            <p class="text-center">Choose an email format</p>
            <div class="form-row justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="HTML" id="HTML" value="HTML" >
                    <label class="form-check-label" for="HTML">
                        HTML
                    </label>

                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="text" id="text" value="text">
                    <label class="form-check-label" for="text">
                        Text
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row justify-content-center">
            <button type="submit" class="btn btn-primary d-flex submit" id="btn-guestbook">Submit</button>
        </div>
    </form>
</div>


<!-- FOOTER -->
<footer class="footer footer-custom">

    <div class="row justify-content-center">
        <div class="col-md-3">
            <h2>Located In</h2>
            <p> South King County, <br>
                Greater Seattle Area</p>
        </div>
        <div class="col-md-3">
            <!--Linkedin -->
            <a href="https://www.linkedin.com/in/alisa-llavore/" target="_blank" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="col-md-3">
            <h2>Download my resume!</h2>
            <a href="documents/llavoreResume.pdf" download>
                <img src="images/resumeImage.png" id="resumeImage" alt="Image of Alisa's page essay">
            </a>
        </div>
    </div>
</footer>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="scripts/guestbook.js"></script>
<!--&lt;!&ndash; Option 2: jQuery, Popper.js, and Bootstrap JS&ndash;&gt;-->
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>-->
</body>
</html>
