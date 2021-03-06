<?php

/* Success/Error Message */
require_once 'message.php';

/* REGISTRATION MAIN PAGE ----------------------------------------------------*/
if (isset($_POST['register'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
    $type = 'user';

    //Error Handlers
    //empty fields
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        $_SESSION['empty'] = "Empty Fields";
        header("Location: register.php");
        exit();
    }
    //empty string or invalid string
    else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        $_SESSION['invalid'] = "Invalid Username";
        header("Location: register.php");
        exit();
    } else if ($password !== $confirmPassword) {
        $_SESSION['password_error'] = "Password do not match";
        header("Location: register.php");
        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username = ? AND usertype = 'user'";
        $stmt = mysqli_stmt_init($conn);

        //
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['sql_error'] = "SQL ERROR";
            header("Location: register.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                $_SESSION['username_taken'] = "Username Taken";
                header("Location: register.php");
                exit();
            } else {
                $sql = "INSERT INTO users (username, password, usertype) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    $_SESSION['sql_error'] = "SQL ERROR";
                    header("Location: register.php");
                    exit();
                } else {
                    //hassing password
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

                    /* mysqli_stmt_bind_param($stmt, "ss", $username, $password); */
                    mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPass, $type);
                    mysqli_stmt_execute($stmt);
                    $_SESSION['registration'] = "Registration Successful";
                    header("Location: register.php");
                    exit();
                }
            }
        }
    }
}

/* REGISTRATION for ADMIN ----------------------------------------------------*/
if (isset($_POST['create'])) {


    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

    $type = 'admin';

    //Error Handlers
    //empty fields
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        $_SESSION['empty'] = "Empty Fields";
        header("Location: admin_setting.php");
        exit();
    }
    //empty string or invalid string
    else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        $_SESSION['invalid'] = "Invalid Username";
        header("Location: admin_setting.php");
        exit();
    } else if ($password !== $confirmPassword) {
        $_SESSION['password_error'] = "Password do not match";
        header("Location: admin_setting.php");
        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username = ? AND usertype = 'admin'";
        $stmt = mysqli_stmt_init($conn);

        //
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['sql_error'] = "SQL ERROR";
            header("Location: admin_setting.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                $_SESSION['username_taken'] = "Username Taken";
                header("Location: admin_setting.php");
                exit();
            } else {
                $sql = "INSERT INTO users (username, password, usertype) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    $_SESSION['sql_error'] = "SQL ERROR";
                    header("Location: admin_setting.php");
                    exit();
                } else {
                    //hassing password
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

                    /* mysqli_stmt_bind_param($stmt, "ss", $username, $password); */
                    mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPass, $type);
                    mysqli_stmt_execute($stmt);
                    $_SESSION['registration'] = "Registration Successful";
                    header("Location: admin_setting.php");
                    exit();
                }
            }
        }
    }
}


if (isset($_POST['reg'])) {


    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
        /* $type = $_POST['type'] */;
    $type = 'user';

    //Error Handlers
    //empty fields
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        $_SESSION['empty'] = "Empty Fields";
        header("Location: user.php");
        exit();
    }
    //empty string or invalid string
    else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        $_SESSION['invalid'] = "Invalid Username";
        header("Location: user.php");
        exit();
    } else if ($password !== $confirmPassword) {
        $_SESSION['password_error'] = "Password do not match";
        header("Location: user.php");
        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username = ? AND usertype = 'user'";
        $stmt = mysqli_stmt_init($conn);

        //
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['sql_error'] = "SQL ERROR";
            header("Location: user.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                $_SESSION['username_taken'] = "Username Taken";
                header("Location: user.php");
                exit();
            } else {
                $sql = "INSERT INTO users (username, password, usertype) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    $_SESSION['sql_error'] = "SQL ERROR";
                    header("Location: user.php");
                    exit();
                } else {
                    //hassing password
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

                    /* mysqli_stmt_bind_param($stmt, "ss", $username, $password); */
                    mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPass, $type);
                    mysqli_stmt_execute($stmt);
                    $_SESSION['registration'] = "Registration Successful";
                    header("Location: user.php");
                    exit();
                }
            }
        }
    }
}
