<?php require_once 'includes/HF/HF_FOR_USER/header.php'; ?>

<?php

/* update account */
if (isset($_POST['change'])) {

    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $hashedPass = mysqli_real_escape_string($conn, password_hash($pass, PASSWORD_DEFAULT));
    $id = mysqli_real_escape_string($conn, $_SESSION['id']);

    $conn->query("UPDATE users SET password='$hashedPass' WHERE id='$id'") or die($conn->error());


    echo '<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> Update Success
    </div>';

    $conn->close();
}
?>
<form class="d-flex flex-column justify-content-center w-25 ml-auto mr-auto mt-5" action="#" method="post">
    <h1>Change Password</h1>
    <div class="form-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    </div>
    <button type="submit" name="change" class="btn btn-primary">Submit</button>
</form>
</body>

</html>