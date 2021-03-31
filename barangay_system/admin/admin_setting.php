<?php
/* show all error reporting except notice */
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require_once '../includes/database_connection/database.php';
if (!$_SESSION['sessionUser']) {
    header("Location: ../index.php?error=denied");
    exit();
}

if ($_SESSION['type'] != 'admin') {
    header("Location: ../index.php?error=denied");
    exit();
}
?>


<?php
/* HEADER */
require_once '../includes/admin/HF/header.php';
/* ADD EDIT DELETE PROCESS */
require_once '../includes/processes/registration.php';
require_once '../includes/crud/edit_form.php';
require_once '../includes/crud/delete_form.php';

/* MESSAGES */
if (isset($_SESSION['updated'])) {
    echo message_update_success();
}
if (isset($_SESSION['deleted'])) {
    echo message_delete_success();
}
?>
<!-- DISPLAY MESSAGES ------------------------------------------>
<?php require_once '../includes/processes/display_message.php' ?>

<!-- Modal for edit------------------------------------------ -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="m-3" action="#" method="post">
                <input type="hidden" name="update_id" id="update_id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control">
                </div>

                <div class="form-group">
                    <input type="text" name="password" id="password" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>

            </form>

        </div>
    </div>
</div>
</div>

<!-- Modal for create account------------------------------------------ -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="m-3" action="#" method="post">
                <input type="hidden" name="update_id" id="update_id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeHolder="Username">
                </div>

                <div class="form-group">
                    <input type="text" name="password" id="password" class="form-control" placeHolder="Password">
                </div>

                <div class="form-group">
                    <input type="text" name="confirmPassword" id="confirmPassword" class="form-control" placeHolder="Confirm Password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="create">Register</button>
                </div>

            </form>

        </div>
    </div>
</div>
</div>

<div class="container">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM users") or die($mysqli->error);
    ?>


    <div class="row justify-content-center">
        <div class="d-flex justify-content-between w-100">
            <button type="submit" class="btn btn-primary createbtn mt-3 mb-1" name="create">Create new account</button>
            <input class="form-control w-25 mt-3 mb-1" id="admin-search" type="text" placeholder="Search..">
        </div>

        <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;   overflow-x: hidden;">
            <thread>
                <tr class="bg-dark text-white">
                    <th style="width:10%" hidden>ID</th>
                    <th style="width:10%">username</th>
                    <th style="width:10%">Password</th>
                    <th colspan="2" style="width:5%">Action</th>
                </tr>
            </thread>

            <tbody id="adminTable">
                <?php
                while ($row = $result->fetch_assoc()) :
                ?>
                    <?php
                    $type = $row['usertype'];
                    if ($type == 'admin') :
                    ?>
                        <tr>
                            <td hidden><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td>
                                <!-- <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a> -->
                                <!--   <a href="" class="btn btn-info editbtn">Update</a> -->
                                <button type="button" class="btn btn-info editbtn">Edit</button>
                                <a href="admin_setting.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endif ?>
                <?php endwhile; ?>
            </tbody>

        </table>
    </div>
</div>



<?php require_once '../includes/admin/HF/footer.php'; ?>


</body>

</html>