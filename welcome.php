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

    <link rel="stylesheet" href="navbar-welcome.css">
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="footer.css">

    <title>Welcome</title>
</head>

<body>

    <?php include '_navbar-welcome.php' ?>

    <div class="body">
        <div class="dash-items profile-home">

            <div class="home">
                <div class="welcome">
                    <h1>Hey, <?php echo $myusername; ?> !!</h1>
                </div>
                <div class="desc">
                    <p>In our portal you can find different types of courses. You can register for any courses of your choice and sit for the test. A professional certificate will be rewarded on successful completion.</p>
                </div>
                <div class="explore">
                    <span id="profile-courses" class="tab-links">Explore courses<i class="bi bi-arrow-right"></i></span>
                </div>
            </div>

        </div>
        <div class="dash-items profile-courses">

            <div class="courses">
                <div class="heading">
                    <h3>Available courses :</h3>
                    <p>You can register for the courses here :</p>
                </div>
                <div class="course-list">

                    <span class="course-card" href="#">
                        <div class="cpos">
                            <img src="./images/cloud-computing.jpg" alt="">
                        </div>
                        <div class="cdesc" id="course_cloud_com">

                            <span class="cname">Cloud computing</span>

                            <span id="course_cloud_com_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_cloud_com_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_cloud_com_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>

                    <span class="course-card" href="#">
                        <div class="cpos">
                            <img src="./images/ethical hacking.jpg" alt="">
                        </div>
                        <div class="cdesc" id="course_ethical_hack">

                            <span class="cname">Ethical hacking</span>

                            <span id="course_ethical_hack_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_ethical_hack_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_ethical_hack_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>

                    <span class="course-card" href="www.google.com">
                        <div class="cpos">
                            <img src="./images/iot.jpg" alt="">
                        </div>
                        <div class="cdesc" id="course_iot">

                            <span class="cname">Internet of things</span>

                            <span id="course_iot_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_iot_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_iot_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>

                    <span class="course-card" href="www.google.com">
                        <div class="cpos">
                            <img src="./images/dbms.jpg" alt="">

                        </div>
                        <div class="cdesc" id="course_dbms">

                            <span class="cname">D B M S</span>

                            <span id="course_dbms_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_dbms_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_dbms_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>

                    <span class="course-card" href="www.google.com">
                        <div class="cpos">
                            <img src="./images/ai.jpg" alt="">

                        </div>
                        <div class="cdesc" id="course_artificial_int">

                            <span class="cname">Artificial intelligence</span>

                            <span id="course_artificial_int_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_artificial_int_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_artificial_int_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>

                    <span class="course-card" href="www.google.com">
                        <div class="cpos">
                            <img src="./images/os.jpg" alt="">
                        </div>
                        <div class="cdesc" id="course_operating_sys">

                            <span class="cname">Operating system</span>

                            <span id="course_operating_sys_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_operating_sys_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_operating_sys_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>

                    <span class="course-card" href="www.google.com">
                        <div class="cpos">
                            <img src="./images/data mining.jpg" alt="">

                        </div>
                        <div class="cdesc" id="course_data_min">

                            <span class="cname">Data mining</span>

                            <span id="course_data_min_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_data_min_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_data_min_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>

                    <span class="course-card" href="www.google.com">
                        <div class="cpos">
                            <img src="./images/cyber security.jpg" alt="">

                        </div>
                        <div class="cdesc" id="course_cyber_sec">

                            <span class="cname">Cyber security</span>

                            <span id="course_cyber_sec_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_cyber_sec_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_cyber_sec_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>

                    <span class="course-card" href="www.google.com">
                        <div class="cpos">
                            <img src="./images/blockchain.jpg" alt="">

                        </div>
                        <div class="cdesc" id="course_blockchain_tech">

                            <span class="cname">Blockchain technology</span>

                            <span id="course_blockchain_tech_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_blockchain_tech_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_blockchain_tech_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>


                    <span class="course-card" href="www.google.com">
                        <div class="cpos">
                            <img src="./images/java.jpg" alt="">

                        </div>
                        <div class="cdesc" id="course_java">

                            <span class="cname">Java</span>

                            <span id="course_java_id" class="actionbtn registerbtn">Register<i class="bi bi-arrow-right"></i></span>

                            <span id="course_java_id" class="actionbtn startTestbtn">Start test<i class="bi bi-arrow-right"></i></span>

                            <span id="course_java_id" class="actionbtn notEligiblebtn">Not Eligible<i class="bi bi-arrow-right"></i></span>
                        </div>
                    </span>

                </div>
            </div>

        </div>
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
                            <li> Marks obtained for each correct answer = 2.</li>
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
                        <!-- <thead>
                            <tr>
                                <td>Sl.no.</td>
                                <td>Course name</td>
                                <td>No. of attempts left</td>
                                <td>Start your test</td>
                            </tr>
                        </thead> -->
                        <!-- <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cloud computing</td>
                                <td>3</td>
                                <td><a href="#">Start test<i
                                    class="bi bi-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Cloud computing</td>
                                <td>3</td>
                                <td><a href="#">Start test<i
                                    class="bi bi-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Cloud computing</td>
                                <td>3</td>
                                <td><a href="#">Start test<i
                                    class="bi bi-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Cloud computing</td>
                                <td>3</td>
                                <td><a href="#">Start test<i
                                    class="bi bi-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Cloud computing</td>
                                <td>3</td>
                                <td><a href="#">Start test<i
                                    class="bi bi-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Cloud computing</td>
                                <td>3</td>
                                <td><a href="#">Start test<i
                                    class="bi bi-arrow-right"></i></a></td>
                            </tr>
                        </tbody> -->

                        <?php include '_tests.php' ?>

                    </table>

                </div>
            </div>

        </div>
        <div class="dash-items profile-results">

        </div>
        <div class="dash-items profile-myprofile">

        </div>
    </div>

    <?php include '_footer.php' ?>
    <?php include '_courses.php' ?>

</body>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="welcome.js"></script>

</html>