<nav class="navbar">
        <div class="navbar-items nav-top">
            <div class="aligns left">
                <div class="ncomp head">
                    <img class="head-img" src="https://d1myhw8pp24x4f.cloudfront.net/software_logo/1495539705_followclass-192_mid.png" alt="logo" >
                    <h2><a href="profile-home.php"> My dashboard</a></h2>        
                </div>
            </div>
            <div class="aligns right">
                <div class="ncomp greet">
                    <li><strong >Welcome, </strong></li>
                    <li><a href="profile-myprofile.php" ><?php echo $myusername; ?></a></li>
                    
                </div>
                <div class="ncomp hamburger">
                    <i class="bi bi-list"></i>
                </div>
            </div>

        </div>
        <div class="navbar-items nav-bottom">

                <div class="links left">
                    <a href="profile-courses.php" id="profile-courses" class="tab-links">Courses</a>
                    <a href="profile-tests.php" id="profile-tests" class="tab-links">Tests</a>
                    <a href="profile-results.php" id="profile-results" class="tab-links">Results</a>
                </div>
                <div class="links right">
                    <a href="logout.php" class="logout">
                        <i class="bi bi-box-arrow-right"></i>
                        Log out
                    </a>
                </div>

                <div class="nav-bottom-phn">
                    <li><a href="profile-courses.php" id="profile-courses" class="tab-links">Courses</a></li>
                    <li><a href="profile-tests.php" id="profile-tests" class="tab-links">Tests</a></li>
                    <li><a href="profile-results.php" id="profile-results" class="tab-links">Results</a></li>
                    <li><a href="logout.php" class="logout"><i class="bi bi-box-arrow-right"></i>Log out</a></li>
                </div>
        </div>
    </nav>