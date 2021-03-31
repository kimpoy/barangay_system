<!-- INCLUDES ------------------------------------------>
<?php
/* HEADER */
require_once 'includes/HF/header.php';
/* REGISTRATION */
require_once 'includes/processes/registration.php';
?>

<!-- DISPLAY MESSAGES ------------------------------------------>
<?php require_once 'includes/processes/display_message.php' ?>

<div class="container-fluid">

  <form class="form-container" action="#" method="post">
    <h1>Register</h1>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="confirmPassword" id="password" placeholder="Confirm Password">
    </div>
    <p class="login-p">Already have an account? <a href="index.php">Log in Here!</a></p>
    <button type="submit" name="register" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php
require_once 'includes/HF/footer.php';
?>