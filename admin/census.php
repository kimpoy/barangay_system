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
/* REQUEST PROCESS FOR GRAPH */
require_once '../includes/admin/processes/request_process.php';
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

<div class="list-group list-group-horizontal mt-3" id="myList" role="tablist" style="width: 99%; margin:auto;">
    <a class="list-group-item list-group-item-action" id="list-census-list" data-toggle="list" href="#list-census" role="tab" aria-controls="census">Total</a>
    <a class="list-group-item list-group-item-action " id="list-census-weekly-list" data-toggle="list" href="#list-census-weekly" role="tab" aria-controls="census-weekly">Weekly</a>
    <a class="list-group-item list-group-item-action " id="list-census-monthly-list" data-toggle="list" href="#list-census-monthly" role="tab" aria-controls="census-monthly">Monthly</a>
    <a class="list-group-item list-group-item-action " id="list-census-yearly-list" data-toggle="list" href="#list-census-yearly" role="tab" aria-controls="census-yearly">Yearly</a>
</div>


<!-- TAB CONTENTS -->
<div class="tab-content" id="nav-tabContent" style="width: 99%;">

    <!-- TOTAL ---------------------------------------------->
    <div class="tab-pane fade " id="list-census" role="tabpanel" aria-labelledby="list-census-list">
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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Middle Name</th>
                            <th>No.</th>
                            <th>Street</th>
                            <th>Subdivision/Zone/Sitio/Purok</th>
                            <th>City/Municipality</th>
                            <th>Province</th>
                            <th>Date of Birth</th>
                            <th>Place of Birth</th>
                            <th>Sex</th>
                            <th>Civil Status</th>
                            <th>Occupation</th>
                            <th>Citizenship</th>
                            <th>Relationship to Household Head</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thread>
                    <tbody id="censusTable">
                        <?php
                        while ($row = $result->fetch_assoc()) :
                        ?>
                            <tr>
                                <td hidden><?php echo $row['id']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['middlename']; ?></td>
                                <td><?php echo $row['no']; ?></td>
                                <td><?php echo $row['street']; ?></td>
                                <td><?php echo $row['sub']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['province']; ?></td>
                                <td><?php echo $row['dateofbirth']; ?></td>
                                <td><?php echo $row['placeofbirth']; ?></td>
                                <td><?php echo $row['sex']; ?></td>
                                <td><?php echo $row['civilstatus']; ?></td>
                                <td><?php echo $row['occupation']; ?></td>
                                <td><?php echo $row['citizenship']; ?></td>
                                <td><?php echo $row['relationship']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-info updatebtnCensus" style="width:4.5rem;">Edit</button>
                                    <a href="census.php?deleteCensus=<?php echo $row['id']; ?>" class="btn btn-danger mt-1 mb-1" style="width:4.5rem;">Delete</a>
                                    <a href="../includes/admin/print/census.php?city=<?php echo $row['city']; ?>&sub=<?php echo $row['sub']; ?>&lastname=<?php echo $row['lastname']; ?>&middlename=<?php echo $row['middlename']; ?>&firstname=<?php echo $row['firstname']; ?>&no=<?php echo $row['no']; ?>&street=<?php echo $row['street']; ?>&province=<?php echo $row['province']; ?>&dateofbirth=<?php echo $row['dateofbirth']; ?>&placeofbirth=<?php echo $row['placeofbirth']; ?>&sex=<?php echo $row['sex']; ?>&civilstatus=<?php echo $row['civilstatus']; ?>&occupation=<?php echo $row['occupation']; ?>&citizenship=<?php echo $row['citizenship']; ?>&relationship=<?php echo $row['relationship']; ?>" target="_blank" class="btn btn-secondary" style="width:4.5rem;">Print</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Weekly ---------------------------------------------->
    <div class="tab-pane fade " id="list-census-weekly" role="tabpanel" aria-labelledby="list-census-weekly-list">
        <!-- TABLE -->
        <table class="table table-responsive table-light table-striped table-bordered w-75 mt-3" style="overflow:scroll; height:65vh; word-break: break-all; overflow-x: hidden; margin:auto; ">
            <thread>
                <tr class="bg-dark text-white">
                    <th style="width:10%">Name</th>
                    <th style="width:10%">Census Weekly</th>
                </tr>
            </thread>

            <?php

            ?>

            <tbody id="adminTable">
                <tr>
                    <td style="width:10%">Purok 1</td>
                    <td style="width:10%"><?php echo max($census_week_purok1); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 2</td>
                    <td style="width:10%"><?php echo max($census_week_purok2); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 3</td>
                    <td style="width:10%"><?php echo max($census_week_purok3); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 4</td>
                    <td style="width:10%"><?php echo max($census_week_purok4); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 5</td>
                    <td style="width:10%"><?php echo max($census_week_purok5); ?></td>
                </tr>

            </tbody>
        </table>
        <!-- END TABLE -->
    </div>

    <!-- MONTH ---------------------------------------------->
    <div class="tab-pane fade " id="list-census-monthly" role="tabpanel" aria-labelledby="list-census-monthly-list">
        <!-- TABLE -->
        <table class="table table-responsive table-light table-striped table-bordered w-75 mt-3" style="overflow:scroll; height:65vh; word-break: break-all; overflow-x: hidden; margin:auto; ">
            <thread>
                <tr class="bg-dark text-white">
                    <th style="width:10%">Name</th>
                    <th style="width:10%">Census Monthly</th>
                </tr>
            </thread>

            <tbody id="adminTable">
                <tr>
                    <td style="width:10%">Purok 1</td>
                    <td style="width:10%"><?php echo max($census_month_purok1); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 2</td>
                    <td style="width:10%"><?php echo max($census_month_purok2); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 3</td>
                    <td style="width:10%"><?php echo max($census_month_purok3); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 4</td>
                    <td style="width:10%"><?php echo max($census_month_purok4); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 5</td>
                    <td style="width:10%"><?php echo max($census_month_purok5); ?></td>
                </tr>
            </tbody>
        </table>
        <!-- END TABLE -->
    </div>

    <!-- YEAR -->
    <div class="tab-pane fade " id="list-census-yearly" role="tabpanel" aria-labelledby="list-census-yearly-list">
        <!-- TABLE -->
        <table class="table table-responsive table-light table-striped table-bordered w-75 mt-3" style="overflow:scroll; height:65vh; word-break: break-all; overflow-x: hidden; margin:auto; ">
            <thread>
                <tr class="bg-dark text-white">
                    <th style="width:10%">Name</th>
                    <th style="width:10%">Census Yearly</th>
                </tr>
            </thread>

            <tbody id="adminTable">
                <tr>
                    <td style="width:10%">Purok 1</td>
                    <td style="width:10%"><?php echo max($census_year_purok1); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 2</td>
                    <td style="width:10%"><?php echo max($census_year_purok2); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 3</td>
                    <td style="width:10%"><?php echo max($census_year_purok3); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 4</td>
                    <td style="width:10%"><?php echo max($census_year_purok4); ?></td>
                </tr>
                <tr>
                    <td style="width:10%">Purok 5</td>
                    <td style="width:10%"><?php echo max($census_year_purok5); ?></td>
                </tr>
            </tbody>
        </table>
        <!-- END TABLE -->
    </div>
</div>
</div>
</div>




<?php require_once '../includes/admin/HF/footer.php'; ?>


</body>

</html>