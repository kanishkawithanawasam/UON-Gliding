<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("../common_files/headfiles.php") ?>
    <title>Sign Up form -  University of Nottingham Gliding Club</title>
</head>
<body>
    <?php include('../common_files/header.php')  ?>
    <main class="form_main">
        <h1 class="form_heading">Weekly sign-up form</h1>
        <hr>
        <form class="form" action="POST">
            <div style="grid-column: 1/span 2;">
                <h2>Your Details</h2>
                <hr>
            </div>
            
            
            <label for="name"><b>First Name</b></label>
            <input style="box-shadow: 0 0 5px 5px;" type="text" name="name" required>

            <label for="name"><b>Last Name</b></label>
            <input style="box-shadow: 0 0 5px 5px;" type="text" name="name" required>

            <label for="name"><b>Gender</b></label>
            <select name="" id="">
                <option value="">Please Select</option>
                <option value="">Male</option>
                <option value="">Female</option>
                <option value="">Other</option>
                <option value="">Prefer not to say</option>
            </select>

            <label for="studentID"><b>Student ID</b><br/><div class="assosiate">(Assosiate members please leave this blank)</div></label>
            <input type="number" name="studentID">

            <label for="email"><b>University Email</b></label>
            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">

            <label for="mobile"><b>Mobile Number</b></label>
            <input type="tel" name="mobile">
            <div class="readio_buttons" style="grid-column: 1/span 2;">
                <h2>Previous Flying experience</h2>
                <hr>
                <input type="radio" id="html" name="fav_language" value="HTML">
                <label for="html">HTML</label><br>
                <input type="radio" id="css" name="fav_language" value="CSS">
                <label for="css">CSS</label><br>
                <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                <label for="javascript">JavaScript</label>
            </div>
            <div style="grid-column: 1/span 2;">
                <h2>Emergency Contact Details</h2>
                <hr>
            </div>
            <label for="emTitle">Title</label>
            <select name="" id="">
                <option value="">Please Select</option>
                <option value="">Mr</option>
                <option value="">Miss</option>
                <option value="">Ms</option>
                <option value="">Mrs</option>
                <option value="">Dr</option>
                <option value="">Prof</option>
            </select>
            <label for="name"><b>Full Name</b></label>
            <input style="box-shadow: 0 0 5px 5px;" type="text" name="name" required>
            <label for="mobile"><b>Mobile Number</b></label>
            <input type="tel" name="mobile">
        </form>
    </main>
    <?php include '../common_files/footer.php'?>
</body>
</html>
