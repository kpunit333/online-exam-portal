<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
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
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="profile-results.css">
    <link rel="stylesheet" href="footer.css">

    <title>Welcome</title>
</head>
<body>

    <?php //include '_navbar-welcome.php' ?>
    <?php include '_profile-nav.php' ?>
 
    <div class="body">       
        
        <div class="dash-items profile-results">

        </div>
        
    </div>

    <?php include '_footer.php' ?>
    <!-- <?php //include '_courses.php' ?> -->
    
</body>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<!-- <script src="welcome.js"></script> -->

</html>