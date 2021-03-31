<?php
require_once 'includes/HF/header.php';
?>
<?php
require_once 'includes/processes/login.php';
?>
<div class="container-fluid">

    <form class="form-container" action="#" method="post">
        <h1>Login</h1>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="type">Choose account type:</label>
            <select name="type" id="type" required>
                <option disabled selected></option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <p class="login-p">No Account? <a href="register.php">Register Here!</a></p>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>

</html>




<!-- <div class="form-group">
   
</div> -->