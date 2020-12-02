<?php
/**
 *  305/login/login.php
 *  Alisa Llavore
 *  11/25/2020
 *  Login form for demo purposes
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

//var_dump($_POST);

//Initialize variables
$err = false;
$username = "";

//If the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo "Form ws submitted";
    //Get the username and password
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    //actual username and password are stored in a separate file
    //Should be moved to home directory ABOVE public_html
    require('includes/loginCreds.php');

    //If they are correct
    if($username == $adminUser && $password == $adminPassword) {
        $_SESSION['loggedin'] = true;
        if(!isset($_SESSION['page'])) {
            //Redirect to index page
            header("location: " . $_SESSION['page']);
        } else {
            header("location: admin.php");
        }
    }else {
        //Set an error flag
        $err = true;
    }

}
?>
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
    <link rel="stylesheet" href="styles/loginStyles.css">
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
                <a class="nav-link" href="guestbook.php">Guestbook</a>
            </div>
        </div>
    </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container" id="jumbotronContainer">
        <h1 class="display-4">Log In</h1>
    </div>
</div>


<!-- LogIn Form -->
<div class="container">

    <h1>Login Page</h1>

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username"
                <?php echo "value= \"$username\""?>
            >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>

        <?php
        if($err){
            echo '<span class="err">Incorrect login</span><br>';
        }
        ?>
        <!--        --><?php //if($err) : ?>
        <!--            <span class="err">Incorrect login</span><br>-->
        <!--        --><?php //endif; ?>

        <button type="submit" class="btn btn-primary">Login</button>
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
