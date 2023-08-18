<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="https://d1myhw8pp24x4f.cloudfront.net/software_logo/1495539705_followclass-192_mid.png" type="image/x-icon">

    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">


    <title>e-Exams</title>
</head>
<body>
    <nav class="navbar">
        <div class="aligns left">
            <div class="ncomp head">
                <img class="head-img" src="https://d1myhw8pp24x4f.cloudfront.net/software_logo/1495539705_followclass-192_mid.png" alt="logo" height="40em" width="45em">
                <h1>e-Exams</h1>
    
            </div>
            <div class="ncomp mid">
                <li><span id="home-link" class="links active" href="#">Home</span></li>
                <li><span id="course-link" class="links" href="#">Courses</span></li>
    
            </div>
        </div>
        <div class="aligns right">
            <div class="ncomp cred">
                <li><a class="routes" href="welcome.php">Log in</a></li>
                <li><a class="routes" href="register.php">Sign Up</a></li>    
            </div>
        </div>
    </nav>

    
    <div id="home-tab" class="tabs home-link">
        <div class="banner">
            <div class="heading-holder">
                <h1>Welcome to our Online Exam Portal</h1>
                <p>We are providing our students an oppurtunity to apply for various courses offered by us and get a professional certificate. This certificate will also help them in building their career and shape their life.</p>
            </div>
        </div>
    </div>
    
    <div id="course-tab" class="tabs course-link">
        <h3>Courses offered :</h3>
        <div class="courses">
                <a class="course-card" href="www.google.com">
                    <div class="cpos">
                        <img src="./images/cloud-computing.jpg" alt="">
                    </div>
                    <div class="cdesc">
                        <span>Cloud computing</span>
                    </div>
                </a>
                <a class="course-card" href="www.google.com">
                    <div class="cpos">
                        <img src="./images/ethical hacking.jpg" alt="">
                    </div>
                    <div class="cdesc">
                        <span>Ethical hacking</span>
                    </div>
                </a>
                <a class="course-card" href="www.google.com">
                    <div class="cpos">
                        <img src="./images/iot.jpg" alt="">
                    </div>
                    <div class="cdesc">
                        <span>Internet of Things</span>
                    </div>
                </a>
                <a class="course-card" href="www.google.com">
                    <div class="cpos">
                        <img src="./images/dbms.jpg" alt="">

                    </div>
                    <div class="cdesc">
                        <span>D B M S</span>
                    </div>
                </a>
                <a class="course-card" href="www.google.com">
                    <div class="cpos">
                        <img src="./images/ai.jpg" alt="">

                    </div>
                    <div class="cdesc">
                        <span>Artificial Intelligence</span>
                    </div>
                </a>
                <a class="course-card" href="www.google.com">
                    <div class="cpos">
                        <img src="./images/os.jpg" alt="">
                    </div>
                    <div class="cdesc">
                        <span>Operating System</span>
                    </div>
                </a>
                <a class="course-card" href="www.google.com">
                    <div class="cpos">
                        <img src="./images/data mining.jpg" alt="">

                    </div>
                    <div class="cdesc">
                        <span>Data Mining</span>
                    </div>
                </a>
                <a class="course-card" href="www.google.com">
                    <div class="cpos">
                        <img src="./images/cyber security.jpg" alt="">

                    </div>
                    <div class="cdesc">
                        <span>Cyber security</span>
                    </div>
                </a>
        </div>
    </div>

    <footer class="footer">
        <div class="fcons">
            <div class="fcon fcon-i">
                <a href="" title="facebook"><i class="bi bi-facebook"></i></a>
                <a href="" title="instagram"><i class="bi bi-instagram"></i></a>
                <a href="" title="github"><i class="bi bi-github"></i></a>
                <a href="" title="twitter"><i class="bi bi-twitter"></i></a>
                <a href="" title="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="fcon fcon-r">
                <span>&copy; Copyright 2022 | e-Exams</span>
            </div>
        </div>        
    </footer>
    
    
</body>

<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="index.js"></script>
</html>