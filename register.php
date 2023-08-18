<?php

$showAlert = false;
$showError = "Something went wrong.";
$err = false;

include '_dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    try {

        $myfirstname = $_POST["fname"];
        $mylastname = $_POST["lname"];
        $myusername = $_POST["uname"];
        $myemail = $_POST["email"];
        $myphone = $_POST["phone"];
        $mypassword = $_POST["pass"];
        $mycpassword = $_POST["cpass"];
        $mydob = $_POST["dob"];

        $existSql = "SELECT * FROM `oep_users` WHERE username = '$myusername'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if ($numExistRows > 0) {
            
            $err = true;
            $showError = "User already exists.";
        } else {
            
            if (($mypassword == $mycpassword)) {

                $myhash = password_hash($mypassword, PASSWORD_DEFAULT);

                $sql = "INSERT INTO oep_users (firstname, lastname, username, email, phone, passwords, dob,dates) VALUES ('$myfirstname','$mylastname','$myusername', '$myemail',$myphone,'$myhash',$mydob, current_timestamp());";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $showAlert = true;
                    header("location: login.php");
                }
            } else {
                $err = true;
                $showError = "Passwords do not match";
            }
        }
    }
    catch(Exception $e)
    {
        $err = true;
        $showError = "Something went wrong..";
        sleep(2);
        header("location: register.php");
    }
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="footer.css">    

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="https://d1myhw8pp24x4f.cloudfront.net/software_logo/1495539705_followclass-192_mid.png" type="image/x-icon">

    <title>Register</title>
</head>
<body>
    <nav class="navbar">
        <div class="aligns left">
            <div class="ncomp head">
                <img class="head-img" src="https://d1myhw8pp24x4f.cloudfront.net/software_logo/1495539705_followclass-192_mid.png" alt="logo" height="40em" width="45em">
                <h1>e-Exams</h1>    
            </div>
        </div>
    </nav>

    <?php

    if($err)
    {
        echo '<div class="alert danger">
            <div class="alerti status">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <h5>Error :</h5>
            </div>
            <div class="alerti msg">
                <span>'.$showError.'</span>
            </div>
        </div>';
    }

    if($showAlert)
    {
        echo '<div class="alert success">
            <div class="alerti status">
                <i class="bi bi-check-circle-fill"></i>
                <h5>Success :</h5>
            </div>
            <div class="alerti msg">
                <span>Account created successfully.</span>
            </div>
        </div>';
    }
    ?>

    <div class="body">
        <div class="form">

            <h2>Create your account :</h2>
            <form action="register.php" method="post">
                <div class="fitems cfname">
                    <label>First Name :</label>
                    <input type="text" id="fname" name="fname" class="finputs" placeholder="First name" required>
                </div>
                <div class="fitems clname">
                    <label>Last Name :</label>
                    <input type="text" id="lname" name="lname" class="finputs" placeholder="Last name" required>
                </div>
                <div class="fitems cuname">
                    <label>Username :</label>
                    <input type="text" id="uname" name="uname" class="finputs" placeholder="Username" required>
                </div>
                <div class="fitems cemail">
                    <label>Email id :</label>
                    <input type="text" id="email" name="email" class="finputs" placeholder="Example@example.com" required>
                </div>
                <div class="fitems cphone">
                    <label>Phone no. :</label>
                    <input type="number" id="phone" name="phone" class="finputs" placeholder="Phone no." maxlength="10" required>
                </div>
                <div class="fitems cpass">
                    <label>Password :</label>
                    <input type="password" id="pass" name="pass" class="finputs" placeholder="Password" required>
                </div>
                <div class="fitems ccpass">
                    <label>Confirm password :</label>
                    <input type="password" id="cpass" name="cpass" class="finputs" placeholder="Confirm password" required>
                </div>
                <div class="fitems cdob">
                    <label>Date of Birth :</label>
                    <input type="date" id="dob" name="dob" class="finputs" placeholder="" min="1800-01-01" required>
                </div>
                <div class="fitems login">
                    <span>Already have an account ? <a href="login.php">Log in</a></span>
                </div>
                <div class="fitems sbtn">
                    <button type="submit">Submit</button>
                    <button type="reset">Clear</button>
                </div>
            </form>
        </div>
    </div>

    <?php include '_footer.php' ?>

</body>
</html>