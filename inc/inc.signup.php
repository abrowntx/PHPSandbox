<?php
if (isset($_POST['SignupSubmit'])){

    require 'inc.db.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $institution = $_POST['inst'];
    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $password2 = $_POST['pass2'];

    if (empty($firstname) || empty($lastname) || empty($institution) || empty($username) || empty($email) || empty($password) || empty($password2) ){
        header("Location: ../index.php?error=emptyfields&uid=".$username."&fname=".$firstname."&lname=".$lastname."&inst=".$institution."&email=".$email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username) ) {
        header("Location: ../index.php?error=usernameemailerror&fname=".$firstname."&lname=".$lastname."&inst=".$institution);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        header("Location: ../index.php?error=invalidemail&uid=".$username."&fname=".$firstname."&lname=".$lastname."&inst=".$institution);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username) ) {
        header("Location: ../index.php?error=invaliduid&fname=".$firstname."&lname=".$lastname."&inst=".$institution."&email=".$email);
        exit();
    } else if ($password !== $password2) {
        header("Location: ../index.php?error=incorrectpassword&uid=".$username."&fname=".$firstname."&lname=".$lastname."&inst=".$institution."&email=".$email);
        exit();
    } else {

        $sql = "SELECT users_uid FROM users WHERE users_uid=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $ResultCheck = mysqli_stmt_num_rows($stmt);
            if ($ResultCheck > 0) {
                header("Location: ../index.php?error=invaliduid&fname=".$firstname."&lname=".$lastname."&inst=".$institution."&email=".$email);
                exit();
            } else {
                $sql = "INSERT INTO users (users_uid, users_email, users_fName, users_lName, users_inst, users_pass) VALUES (?, ?, ?, ?, ?, ?)";

            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


} else {
    header('Location: ../index.php');
}