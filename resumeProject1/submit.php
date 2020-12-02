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

<!-- Thank you message -->
<div class = "container">
    <h1>Thank you, <?php echo $_POST['fname']; ?>!</h1>
    <p>We'll be in touch soon!</p>

    <?php

//Turn on error reporting
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

//Set the tiem zone
date_default_timezone_set("America/Los_Angeles");

//Connect to database
$database = "allavor1_grc";
$username = "allavor1_grcuser";
$password = "Gervaci0!";
$hostname ="localhost";

$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem.");
//var_dump($cnxn);
require('includes/guestbookFunctions.php');

//Getting data from form to variable
//$fname = $_POST['fname'];
//$lname = $_POST['lname'];
$jobTitle = $_POST['jobTitle'];
$company = $_POST['company'];
//$linkedIn = $_POST['linkedIn'];
//$email = $_POST['email'];
//$met = $_POST['met'];
$otherText = $_POST['other-text'];
$messageText = $_POST['message-text'];
$mailingList = $_POST['mailingList'];
$html = $_POST['HTML'];
$textOption = $_POST['text'];
date_default_timezone_set("America/Los_Angeles");
$timeStamp = date("Y/m/d h:i:s");

//PHP Validation
$isValid = true;

//Check first name
if(validName($_POST['fname'])){
    $fname = $_POST['fname'];
    echo "<p>First name: $fname</p>";
}else {
    echo "<p>Invalid first name</p>";
    $isValid = false;
}

//Check last name
if(validName($_POST['lname'])){
    $lname = $_POST['lname'];
    echo "<p>Last name: $fname $lname</p>";
}else {
    echo "<p>Invalid last name</p>";
    $isValid = false;
}
//Check linkedIn
if(validLinkedIn($_POST['linkedIn'])){
    $linkedIn = $_POST['linkedIn'];
    echo "<p>LinkedIn: $linkedIn</p> ";
}else {
    echo "<p>Invalid linkedIn</p>";
    $isValid = false;
}


//Check Email
if(validEmail($_POST['email'])){
    $email = $_POST['email'];
    echo "<p>Email: $email</p>";
}else {
   echo "<p>Invalid email</p>";
    $isValid = false;
}

//Validate Met
$met = "";
if(isset($_POST['met'])){
   $met = $_POST['met'];
   echo "<p>How We Met: $met";
   if(!validMet($met)){
        echo "<p>Please choose an option</p>";
        $isValid;
        }
}


//print out summary
echo "<p>Job Title: $jobTitle</p>";
echo "<p>Company: $company</p>";
echo "<p>Message: $messageText";

if(!$isValid){
  return;
}
    //Prevent SQL injection
$fname = mysqli_real_escape_string($cnxn, $fname);
$lname = mysqli_real_escape_string($cnxn, $lname);
$jobTitle = mysqli_real_escape_string($cnxn, $jobTitle);
$company = mysqli_real_escape_string($cnxn, $company);
$linkedIn = mysqli_real_escape_string($cnxn, $linkedIn);
$email = mysqli_real_escape_string($cnxn, $email);
$met = mysqli_real_escape_string($cnxn, $met);
$otherText = mysqli_real_escape_string($cnxn, $otherText);
$messageText = mysqli_real_escape_string($cnxn, $messageText);
$html = mysqli_real_escape_string($cnxn, $html);
$textOption = mysqli_real_escape_string($cnxn, $textOption);
$timeStamp = mysqli_real_escape_string($cnxn, $timeStamp);

$sql = "INSERT INTO guestbook (fname, lname, jobTItile, company, linkedIn, email,
                met, otherText, messageText, mailingList, html, textOption, timeStamp )
                VALUES
                ('$fname', '$lname', '$jobTitle', '$company', '$linkedIn', '$email',
                 '$met', '$otherText',
                '$messageText','$mailingList', '$html', '$textOption', '$timeStamp')";
$success = mysqli_query($cnxn, $sql);
if (!$success) {
    echo "<p>Sorry... something went wrong</p>";
}

?>

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
</body>
