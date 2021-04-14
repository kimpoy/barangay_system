<?php


if (isset($_POST['submit']) && $_POST['type'] == 'user') {
    $username =  mysqli_real_escape_string($conn, $_POST['username']);;
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $account_type = mysqli_real_escape_string($conn, $_POST['type']);

    if (empty($username) || empty($password)) {

        echo '<div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>ERROR!</strong> Empty Fields
                        </div>';
    } else {
        $sql = "SELECT * FROM users WHERE username = ? AND usertype = 'user'";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo '<div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ERROR!</strong> SQL ERROR
                </div>';
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $passCheck = password_verify($password, $row['password']);

                //check if user or admin
                if ($account_type == 'user') {
                    if ($passCheck == false) {
                        echo '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>ERROR!</strong> Wrong Password
                            </div>';

                        /* header("Location: ../index.php?error=wrongpass");
                        exit(); */
                    } elseif ($passCheck == true) {
                        session_start();
                        /* $_SESSION['sessionId'] = $row['id']; */
                        $_SESSION['sessionUser'] = $row['username'];
                        $_SESSION['type'] = $row['usertype'];
                        header("Location: user_index.php?success=loggedin");
                        exit();
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>ERROR!</strong> Wrong Password
                            </div>';
                        /*  header("Location: ../index.php?error=wrongpass");
                        exit(); */
                    }
                }
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>ERROR!</strong> No User Found
                        </div>';;
            }
        }
    }
}







if (isset($_POST['submit']) && $_POST['type'] == 'admin') {
    $username =  mysqli_real_escape_string($conn, $_POST['username']);;
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $account_type = mysqli_real_escape_string($conn, $_POST['type']);

    if (empty($username) || empty($password)) {

        echo '<div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>ERROR!</strong> Empty Fields
                        </div>';
    } else {
        $sql = "SELECT * FROM users WHERE username = ? AND usertype = 'admin'";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo '<div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>ERROR!</strong> SQL ERROR
                </div>';
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $type = $row['usertype'];
                $passCheck = password_verify($password, $row['password']);

                if ($account_type == 'admin') {
                    /* echo "<script>alert('admin panel');
                        window.location.href='../index.php?error=admin';  
                        </script>"; */

                    if ($passCheck == false) {
                        echo '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>ERROR!</strong> Wrong Password
                            </div>';

                        /* header("Location: ../index.php?error=wrongpass");
                            exit(); */
                    } elseif ($passCheck == true) {
                        session_start();
                        $_SESSION['sessionId'] = $row['id'];
                        $_SESSION['sessionUser'] = $row['username'];
                        $_SESSION['type'] = $row['usertype'];
                        header("Location: admin/admin.php?success=loggedin");
                        exit();
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>ERROR!</strong> Wrong Password
                                </div>';
                    }
                }
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>ERROR!</strong> No User Found
                        </div>';
            }
        }
    }
}
