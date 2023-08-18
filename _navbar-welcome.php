<nav class="navbar">
        <div class="navbar-items nav-top">
            <div class="aligns left">
                <div class="ncomp head">
                    <img class="head-img" src="https://d1myhw8pp24x4f.cloudfront.net/software_logo/1495539705_followclass-192_mid.png" alt="logo" >
                    <h2><a href="welcome.php"> My dashboard</a></h2>        
                </div>
            </div>
            <div class="aligns right">
                <div class="ncomp greet">
                    <li><strong >Welcome, </strong></li>
                    <li><a href="myprofile.php" ><?php echo $myusername; ?></a></li>
                    
                </div>
                <div class="ncomp hamburger">
                    <i class="bi bi-list"></i>                  
                </div>
            </div>

        </div>
        <div class="navbar-items nav-bottom">

                <div class="links left">
                    <span id="profile-courses" class="tab-links">Courses</span>
                    <span id="profile-tests" class="tab-links">Tests</span>
                    <span id="profile-results" class="tab-links">Results</span>
                </div>
                <div class="links right">
                    <a href="logout.php" class="logout">
                        <i class="bi bi-box-arrow-right"></i>
                        Log out
                    </a>
                </div>

                <div class="nav-bottom-phn">
                    <li><span id="profile-courses" class="tab-links">Courses</span></li>
                    <li><span id="profile-tests" class="tab-links">Tests</span></li>
                    <li><span id="profile-results" class="tab-links">Results</span></li>
                    <li><a href="logout.php" class="logout"><i class="bi bi-box-arrow-right"></i>Log out</a></li>
                </div>


        </div>
    </nav>