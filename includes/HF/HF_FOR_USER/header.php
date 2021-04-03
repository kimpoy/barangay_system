<?php
/* require_once 'includes/logout.php'; */
session_start();
require_once 'includes/database_connection/database.php';
if (!$_SESSION['sessionUser']) {
    header("Location: index.php?error=denied");
    exit();
}

if ($_SESSION['type'] != 'user') {
    header("Location: index.php?error=denied");
    exit();
}
?>

<script>
    $(function() {
        $('#myList a:last-child').tab('show');
    })
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brgy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="includes/stylesheet/style.css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
        <ul class="navbar-nav justify-content-end ">
            <li class="nav-item active"><a class="nav-link" href="user_index.php">Home</a></li>
            <li class="nav-item active"><a class="nav-link" href="about.php">About</a></li>
            <!--<li class="nav-item active"><a class="nav-link" href="logout-admin.php">Logout</a></li> -->
        </ul>
        <a class="btn btn-success ml-auto mr-1" href="logout.php">Logout</a>
    </nav>