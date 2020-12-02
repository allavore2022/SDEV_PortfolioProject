<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

if(!isset($_SESSION['loggedin'])){
    //store the page that I'm currently on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //redirect to login
    header("location: login.php");
}

//Set the tiem zone
date_default_timezone_set("America/Los_Angeles");

//Connect to database
$database = "allavor1_grc";
$username = "allavor1_grcuser";
$password = "Gervaci0!";
$hostname ="localhost";

$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem.");
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

    <!-- Table Styles-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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
                <a class="nav-link" href="#about">About Me</a>
                <a class="nav-link" href="#experience">Experience</a>
                <a class="nav-link" href="#contact">Contact Me!</a>
                <a class="nav-link" href="guestbook.php">Guestbook</a>
                <a class="nav-link" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container" id="jumbotronContainerAdmin">
        <h1 class="display-4">Guestbook Signatures</h1>
    </div>
</div>

<!-- Table w/ guestbook "signatures"-->
<div class="container-fluid" id="main">
    <div class="container">
        <h1>Guestbook Info</h1>
        <table id="order-table" class="display">
            <thead>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Job Title</td>
                <td>Company</td>
                <td>LinkedIn</td>
                <td>Email</td>
                <td>How We Met</td>
                <td>Other Text</td>
                <td>Message</td>
                <td>Mailing List</td>
                <td>HTML</td>
                <td>Text</td>
                <td>Time Submitted</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM guestbook";
            $result = mysqli_query($cnxn, $sql);
            //VAR_DUMP($result);

            foreach ($result as $row){

                $fname = $row['fname'];
                $lname = $row['lname'];
                $jobTitle = $row['jobTItile'];
                $company =  $row['company'];
                $linkedIn =  $row['linkedIn'];
                $email =  $row['email'];
                $met =  $row['met'];
                $otherText =  $row['otherText'];
                $messageText =  $row['messageText'];
                $mailingList =  $row['mailingList'];
                $html =  $row['html'];
                $textOption =  $row['textOption'];
                $timeStamp = $row['timeStamp'];

                echo "<tr>";
                echo "<td>$fname</td>" ;
                echo "<td>$lname</td>";
                echo "<td>$jobTitle</td>" ;
                echo "<td>$company</td>" ;
                echo "<td>$linkedIn</td>";
                echo "<td>$email</td>" ;
                echo "<td>$met</td>" ;
                echo "<td>$otherText</td>";
                echo "<td>$messageText</td>";
                echo "<td>$mailingList</td>";
                echo "<td>$html</td>";
                echo "<td>$textOption</td>";
                echo "<td>$timeStamp</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
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
<!--<script src="scripts/guestbook.js"></script>-->
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
    $('#order-table').DataTable(
        {'scrollX':true}
    );
</script>
</body>
</html>
