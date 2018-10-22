<?php
//Call SMALL LOGO template file
    require_once('template.smalllogo.php');
//Call HEADER template file
    require_once('template.header.php');
?>

    <div class="formCont">
        <h2>Log in to Your Account</h2>
        <form>
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password"><br>
            <button>Login</button>
        </form>
    </div>

    <div class="formCont">
        <h2>Create a User Account</h2>
        <form class="form-signup" action="inc/inc.signup.php" method="POST">
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name">
            <input type="text" name="inst" placeholder="Institution">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="Password">
            <input type="password" name="pass2" placeholder="Re-Enter Password">
            <p style="text-align:center;">error</p>
            <button type="submit" name="SignupSubmit">Create Account</button>
        </form>
    </div>

<?php
//Call FOOTER template file
require_once('template.footer.php');
?>