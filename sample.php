<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'common_files/headfiles.php' ?>
    <title>University of Nottingham Gliding Club</title>
</head>
<body>
<header>
        <nav class="mob_nav">
            <a href="index.php" class="logo"><img src="./media/uon-gliding.png" alt="sports image"></a>
            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>


        <nav class="main_nav">
            <div>
                <a href="index.php" class="logo"><img src="./media/uon-gliding.png" alt="sports image"></a>
                <ul>
                    <li class="dropdown_container" style="margin-left: 10px;">
                        <a class="drop_active" href="index.php">Gliding</a>
                        <div class="dropdown">
                            <div>
                                <a href="pages/how_gliders_fly.php">How gliders fly  <i class="bi bi-chevron-right"></i></a>
                                <a href="pages/training.php">training  <i class="bi bi-chevron-right"></i></a>
                                <a href="pages/aerobatics.php">Aerobatics  <i class="bi bi-chevron-right"></i></a>
                                <a href="pages/safety.php">Safety  <i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://">Gallery</a></li>
                    <li><a href="http://">Join Us</a></li>
                    <li class="dropdown_container">
                        <a class="drop_active">About Us</a>
                        <div class="dropdown">
                            <div>
                                <a href="http://">Our Club<i class="bi bi-chevron-right"></i></a>
                                <a href="http://">Club Fleet<i class="bi bi-chevron-right"></i></a>
                                <a href="">Where we fly<i class="bi bi-chevron-right"></i></a>
                                <a href="">Portmoak<i class="bi bi-chevron-right"></i></a>
                                <a href="">Interunis<i class="bi bi-chevron-right"></i></a>
                                <a href="">Prices<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://">Contact Us</a></li>
                </ul>
            </div>
            <a class="sign_in" href="">Sign In</a>
        </nav>
    </header>
    <main>
        <h1 class="main_heading">Welcome to University of Nottingham Gliding Club</h1>
        <div class="itemgroup">
            <video class="video" id="mainVideo" controls autoplay loop>
                <source src="./media/gliding_video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            <article>
                <div>
                <p>
                    The University of Nottingham Gliding Club welcomes any University of 
                    Nottingham student or staff member to come and learn to fly. Our exclusive offer includes:
                </p>
                <ul>
                    <li>Free flying instructions.</li>
                    <li>Glider launches from little as £7.00 .</li>
                    <li>Free soring with university gliders</li>
                </ul>
                <p>
                    Upon completion of number of training lessons, you will be provied with Bronze certificate which will
                    allow you to fly many gliders around the world.
                </p>
                </div>
            </article>
        
        </div>


        <h1 class="heading2">New members</h1>
        <hr style="border: 2px solid gray;"/>
        <div class="itemgroup2">
            
            <article>
                <p>
                    The University of Nottingham Gliding Club accepts new members at any point throughout the year.
                    However, there are some initial tasks that need to be completed before joining the club. To find out more
                    information about joining the club please visit the new members page.
                </p>
            </article>
            <div>
                <a class="butn" href="#"> <p class="txt">&nbsp; Go To New Members <i class="bi bi-chevron-right"></i></p> </a>
            </div>
        </div>


        <h1 class="heading2">Current members</h1>
        <hr style="border: 2px solid gray;"/>
        <div class="itemgroup2">
            
            <article>
                <p>
                    If you are a current member and would like to fly this weekend, fill the following <b>weekly sign up form</b>. Please make sure that
                    you are in fit to fly condition when you are filling the form. The form will be availabe from 8.00am Moday to
                    12:00pm Wednesday. If you are searching for the air field location, this details can be found at the end of this
                    page.
                </p>
            </article>
            <div>
                <a class="butn" href="../pages/signup.php"> <p class="txt">&nbsp; Sign Up Form <i class="bi bi-chevron-right"></i></p> </a>
            </div>
        </div>

        <h1 class="heading2">Recent Achievements</h1>
        <hr style="border: 2px solid gray;"/>

        <div class="itemgroup3">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Achievement</th>
                    <th>Date</th>
                </tr>
                <tr class="tdata"> 
                    <td>Adam Poultney</td>
                    <td>Astir Conversion</td>
                    <td>10/12/22</td>
                </tr>
                <tr class="tdata"> 
                    <td>George Downing</td>
                    <td>LS8 Conversion</td>
                    <td>26/11/22</td>
                </tr>
                <tr class="tdata">
                    <td>Adam Poultney</td>
                    <td>First Solo</td>
                    <td>07/08/2022</td>
                </tr>
                <tr class="tdata">
                    <td>Daniel Roberts</td>
                    <td>First Solo</td>
                    <td>09/07/2022 </td>
                </tr>
                <tr class="tdata">
                    <td>Kieran Smith</td>
                    <td>First Solo</td>
                    <td>22/01/2022 </td>
                </tr>
            </table>
        </div>
    </main>
    <?php include 'common_files/footer.php'?> 
    <script>
        document.getElementById("mainVideo").play();
    </script>
</body>
</html>
