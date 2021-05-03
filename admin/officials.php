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
/* EDIT PROCESS */
require_once '../includes/crud/edit_form.php';
?>
<!-- MESSAGES FOR CRUD OPERATION ------------------------------------------>
<?php
if (isset($_SESSION['updated'])) {
    echo message_update_success();
}

?>



<?php
$mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM officials") or die($mysqli->error);
?>

<div class="mr-auto ml-auto mt-5 w-25">
    <?php
    while ($row = $result->fetch_assoc()) :
    ?>
        <form action="#" method="post">
            <input type="hidden" name="update_id" id="update_id" value="<?php echo $row['id']; ?>">
            <div class="form-group d-flex">

                <input type="text" id="chairman" name="chairman" class="form-control" value="<?php echo $row['chairman']; ?>" placeholder="Punong Barangay">
            </div>
            <div class="form-group d-flex">

                <input type="text" id="agriculture" name="agriculture" class="form-control" value="<?php echo $row['agriculture']; ?>" placeholder="Committee on Agriculture">
            </div>
            <div class="form-group d-flex">

                <input type="text" id="education" name="education" class="form-control" value="<?php echo $row['education']; ?>" placeholder="Committee on Education">
            </div>
            <div class="form-group d-flex">

                <input type="text" id="appropriations" name="appropriations" class="form-control" value="<?php echo $row['appropriations']; ?>" placeholder="Committee on Appropriations">
            </div>
            <div class="form-group d-flex">

                <input type="text" id="infrastructure" name="infrastructure" class="form-control" value="<?php echo $row['infrastructure']; ?>" placeholder="Committee on Public Works & Infrastructure">
            </div>
            <div class="form-group d-flex">

                <input type="text" id="peace" name="peace" class="form-control" value="<?php echo $row['peace']; ?>" placeholder="Committee on Peace & Order">
            </div>
            <div class="form-group d-flex">

                <input type="text" id="health" name="health" class="form-control" value="<?php echo $row['health']; ?>" placeholder="Committee on Health">
            </div>
            <div class="form-group d-flex">

                <input type="text" id="protection" name="protection" class="form-control" value="<?php echo $row['protection']; ?>" placeholder="Committee on Environmental Protection">
            </div>
            <div class="form-group d-flex">

                <input type="text" id="treasurer" name="treasurer" class="form-control" value="<?php echo $row['treasurer']; ?>" placeholder="Barangay Treasurer">
            </div>
            <div class="form-group d-flex">

                <input type="text" id="secretary" name="secretary" class="form-control" value="<?php echo $row['secretary']; ?>" placeholder="Barangay Secretary">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="update-officials">Update</button>
            </div>
        </form>
    <?php endwhile; ?>
</div>

<!-- <script>
    /*     document.getElementById('chairmanBox').onchange = function() {
        document.getElementById('chairman').disabled = !this.checked;
    }; */

    let a = document.querySelectorAll('#box');
    for (let i = 0; i < a.length; i++) {
        console.log(a[i]);

        if (i == 0) {
            a[i].onchange = function() {
                document.getElementById('chairman').disabled = !this.checked;
            }
        }
        if (i == 1) {
            a[i].onchange = function() {
                document.getElementById('agriculture').disabled = !this.checked;
            }
        }
        if (i == 2) {
            a[i].onchange = function() {
                document.getElementById('education').disabled = !this.checked;
            }
        }
        if (i == 3) {
            a[i].onchange = function() {
                document.getElementById('appropriations').disabled = !this.checked;
            }
        }
        if (i == 4) {
            a[i].onchange = function() {
                document.getElementById('infrastructure').disabled = !this.checked;
            }
        }
        if (i == 5) {
            a[i].onchange = function() {
                document.getElementById('peace').disabled = !this.checked;
            }
        }
        if (i == 6) {
            a[i].onchange = function() {
                document.getElementById('health').disabled = !this.checked;
            }
        }
        if (i == 7) {
            a[i].onchange = function() {
                document.getElementById('protection').disabled = !this.checked;
            }
        }
        if (i == 8) {
            a[i].onchange = function() {
                document.getElementById('treasurer').disabled = !this.checked;
            }
        }
        if (i == 9) {
            a[i].onchange = function() {
                document.getElementById('secretary').disabled = !this.checked;
            }
        }

    }
</script> -->
</body>

</html>