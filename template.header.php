<html>
<head>
    <title>PHP Sandbox</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous|Raleway" rel="stylesheet">
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>

<!-- LOGIN/CREATE ACCOUNT NAVIGATION -->
<div class="header-login">
    <a id="CreateAccBtn" href="#">Create Account</a> | <a id="LoginBtn" href="#">Login</a>
</div>

<!-- HAMBURGER BUTTON -->
<a id="MenuClick" href="#">
    <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </div>
</a>

<!-- CREATE MODAL MENU -->
<div id="Menu" class="modalMenu">
    <div class="menu-content">
        <span class="close">&times;</span><br>
        <div>Login</div>
        <div>Register an Account</div>
        <div class="menu-divider"></div>
        <div>Home</div>
        <div>CTE Testing</div>
        <div class="menu-divider"></div>
        <div>Terms and Conditions</div>
    </div>
</div>

<!-- CREATE ACCOUNT MODAL -->
<div id="CreateAccountModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
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
  </div>
</div>

<!-- LOGIN MODAL -->
<div id="LoginModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
        <div class="formCont">
            <h2>Log in to Your Account</h2>
            <form>
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password"><br>
                <button>Login</button>
            </form>
        </div>
  </div>
</div>

<script>

var CreateAccountModal = document.getElementById('CreateAccountModal');
var CreateAccBtn = document.getElementById("CreateAccBtn");
var LoginModal = document.getElementById('LoginModal');
var LoginBtn = document.getElementById("LoginBtn");
var Menu = document.getElementById('Menu');
var MenuClick = document.getElementById('MenuClick');
var SmallLogo = document.getElementsByClassName('SmallLogoLink');
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];
var span3 = document.getElementsByClassName("close")[2];

CreateAccBtn.onclick = function() { CreateAccountModal.style.display = "block"; }
LoginBtn.onclick = function() { LoginModal.style.display = "block"; }
MenuClick.onclick = function() {
    SmallLogo.style.display = "absolute";
    SmallLogo.style.marginLeft = "300px";
    Menu.style.display = "block";

}

span.onclick = function() { Menu.style.display = "none"; }
span2.onclick = function() { CreateAccountModal.style.display = "none"; LoginModal.style.display = "none"; }
span3.onclick = function() { LoginModal.style.display = "none"; }

window.onclick = function(event) {
    if (event.target == CreateAccountModal || event.target == LoginModal || event.target == Menu) {
        CreateAccountModal.style.display = "none";
        LoginModal.style.display = "none";
        Menu.style.display = "none";
    }
}
</script>


