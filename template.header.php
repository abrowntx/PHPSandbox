<html>
<head>
    <title>PHP Sandbox</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>

<!-- Trigger/Open The Modal -->
<div class="header-login">
    <a id="CreateAccBtn" href="#">Create Account</a> | <a id="LoginBtn" href="#">Login</a>
</div>

<!-- The Modal -->
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
var span = document.getElementsByClassName("close")[0];

CreateAccBtn.onclick = function() { CreateAccountModal.style.display = "block"; }
LoginBtn.onclick = function() { LoginModal.style.display = "block"; }

span.onclick = function() { CreateAccountModal.style.display = "none"; LoginModal.style.display = "none"; }

window.onclick = function(event) {
    if (event.target == CreateAccountModal || event.target == LoginModal) {
        CreateAccountModal.style.display = "none";
        LoginModal.style.display = "none";
    }
}
</script>