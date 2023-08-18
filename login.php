<?php

$login = false;
$showAlert = false;
$showError = "Something went wrong.";
$err = false;

include '_dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    try {

        $myusername = $_POST["uname"];
        $mypassword = $_POST["pass"];

        $existSql = "SELECT * FROM `oep_users` WHERE username = '$myusername'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);

        if ($numExistRows != 1) {
            
            $err = true;
            $showError = "User doesn't exist.";
        } 
        else 
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if (password_verify($mypassword, $row['passwords'])){ 
                    $login = true;
                    session_start();

                    $_SESSION['loggedin'] = true;

                    $_SESSION['firstname'] = $row['firstname'];
                    $_SESSION['lastname'] = $row['lastname'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['dob'] = $row['dob'];
                    header("location: welcome.php");
                } 
                else
                {
                    $err = true;
                    $showError = "Invalid Credentials";
                }
            }
        }
    }
    catch(Exception $e)
    {
        $err = true;
        $showError = "Something went wrong..";
        sleep(4);
        header("location: index.html");
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
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="footer.css">    

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="https://d1myhw8pp24x4f.cloudfront.net/software_logo/1495539705_followclass-192_mid.png" type="image/x-icon">

    <title>Log in</title>
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

    if ($err) {
        echo '
        <div class="alert danger">
            <div class="alerti status">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <h5>Error :</h5>
            </div>
            <div class="alerti msg">
                <span>' . $showError . '</span>
            </div>
        </div>
        ';
    }
    ?>

    <div class="body">
        <div class="form">
            <h2>Enter credentials :</h2>
            <form action="login.php" method="post">
                
    
                <div class="fitems cuname">
                    <label>Username :</label>
                    <input type="text" id="uname" name="uname" class="finputs" placeholder="Username" required>
                </div>
                
                <div class="fitems cpass">
                    <label>Password :</label>
                    <input type="password" id="pass" name="pass" class="finputs" placeholder="Password" required>
                </div>
    
                <div class="fitems login">
                    <span>Don't have an account ? <a href="register.php">Create account</a></span>
                </div>
                <div class="fitems sbtn">
                    <button type="submit">Login</button>
                    <button type="reset">Clear</button>
                </div>
                
            </form>

        </div>
    </div>

    <?php include '_footer.php' ?>
    
</body>
</html>