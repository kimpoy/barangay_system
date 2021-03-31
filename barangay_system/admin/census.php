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


<!-- INCLUDES ------------------------------------------>
<?php
/* HEADER */
require_once '../includes/admin/HF/header.php';
/* ADD EDIT DELETE PROCESS */
require_once '../includes/crud/add_form.php';
require_once '../includes/crud/delete_form.php';
require_once '../includes/crud/edit_form.php';
/* Modals */
require_once '../includes/admin/modals/modals.php';
?>

<!-- MESSAGES FOR CRUD OPERATION ------------------------------------------>
<?php
if (isset($_SESSION['updated'])) {
    echo message_update_success();
}
if (isset($_SESSION['deleted'])) {
    echo message_delete_success();
}
if (isset($_SESSION['added'])) {
    echo message_add_success();
}
if (isset($_SESSION['added_error'])) {
    echo message_add_error();
}
?>

<div class="container col-12 mt-3" style="width: 99%;">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM census") or die($mysqli->error);
    ?>


    <div class="row justify-content-center">
        <div class="d-flex justify-content-between w-100">
            <button type="submit" class="btn btn-primary mb-1 createbtn-census" name="create">ADD</button>
            <input class="form-control mb-1 w-25" id="census-search" type="text" placeholder="Search..">
        </div>
        <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:75vh;">
            <thread>
                <tr class="bg-dark text-white">
                    <th hidden>ID</th>
                    <th style="width: 10%;">Fullname</th>
                    <th style="width: 10%;">Address</th>
                    <th style="width: 10%;">Date <br>of<br> Birth</th>
                    <th style="width: 10%;">Place <br>of<br> Birth</th>
                    <th style="width: 5%;">Sex</th>
                    <th style="width: 5%;">Civil Status</th>
                    <th style="width: 10%;">Occupation</th>
                    <th style="width: 5%;">Citizenship</th>
                    <th style="width: 5%;">Relationship <br>to <br>Household <br>Head</th>
                    <th colspan="2" style="width: 5%;">Action</th>
                </tr>
            </thread>
            <tbody id="censusTable" style="word-break: break-all;">
                <?php
                while ($row = $result->fetch_assoc()) :
                ?>
                    <tr>
                        <td hidden><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['dateofbirth']; ?></td>
                        <td><?php echo $row['placeofbirth']; ?></td>
                        <td><?php echo $row['sex']; ?></td>
                        <td><?php echo $row['civilstatus']; ?></td>
                        <td><?php echo $row['occupation']; ?></td>
                        <td><?php echo $row['citizenship']; ?></td>
                        <td><?php echo $row['relationship']; ?></td>
                        <td>
                            <button type="button" class="btn btn-info updatebtnCensus" style="width:4.5rem;">Edit</button>
                            <a href="census.php?deleteCensus=<?php echo $row['id']; ?>" class="btn btn-danger mt-1" style="width:4.5rem;">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>

        </table>
    </div>
</div>


<?php require_once '../includes/admin/HF/footer.php'; ?>


</body>

</html>