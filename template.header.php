<html>
<head>
    <title>PHP Sandbox</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous|Raleway" rel="stylesheet">
</head>
<body>

<!-- LOGIN/CREATE ACCOUNT NAVIGATION -->
<div class="header-login">
    <a id="CreateAccBtn" href="account.php">Create Account</a> | <a id="LoginBtn" href="account.php">Login</a>
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
        <?php
        include('template.smlogo.php')
        ?>
        <span class="close" style="position:relative;top:-92px;left:-332px;font-size:60px;">&times;</span><br>
        <div><a href="account.php">Login</a></div>
        <div><a href="account.php">Register an Account</a></div>
        <div class="menu-divider"></div>
        <div><a href="index.php">Home</a></div>
        <div>CTE Testing</div>
        <div class="menu-divider"></div>
        <div>Terms and Conditions</div>
    </div>
</div>

<script>
var MenuClick = document.getElementById('MenuClick');
var Menu = document.getElementById('Menu');
var span = document.getElementsByClassName("close")[0];

MenuClick.onclick = function() { Menu.style.display = "block"; }
span.onclick = function() { Menu.style.display = "none"; }
window.onclick = function(event) {
    if (event.target == Menu) {
        Menu.style.display = "none";
    }
}
</script>


