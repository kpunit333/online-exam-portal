<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

include '_dbconnect.php';

$myusername = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="https://d1myhw8pp24x4f.cloudfront.net/software_logo/1495539705_followclass-192_mid.png" type="image/x-icon">

    <!-- <link rel="stylesheet" href="navbar-welcome.css"> -->
    <link rel="stylesheet" href="profile-nav.css">
    <link rel="stylesheet" href="profile-tests.css">
    <link rel="stylesheet" href="footer.css">

    <title>Welcome</title>
</head>

<body>

    <?php //include '_navbar-welcome.php' 
    ?>
    <?php include '_profile-nav.php' ?>

    <div class="body">

        <div class="dash-items profile-tests">
            <div class="test">
                <div class="test-comp">

                    <div class="inst-head">
                        <h1>Instructions :</h1>
                    </div>

                </div>
                <div class="test-comp">

                    <div class="inst">

                        <div class="inst-list">
                            <li> Total no. of questions = 10.</li>
                            <li> Marks obtained for each correct answer = + 2.</li>
                            <li> There is no negative marking in any question.</li>
                            <li> You can attempt maximum of 3 times in a month in a particular course.</li>

                        </div>
                        <div class="inst-check">
                            <input type="checkbox" id="readycheck" name="readycheck">
                            <span> I have read all the instructions given and I am ready to begin the tests.</span>
                        </div>

                    </div>

                </div>
                <div class="test-comp">

                    <table class="test-table">
                        <?php include '_tests.php' ?>
                    </table>

                </div>
            </div>

        </div>

    </div>

    <?php include '_footer.php' ?>

</body>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="welcome.js"></script>

</html>