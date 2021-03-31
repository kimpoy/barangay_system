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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

<!-- SHOW TABLIST ------------------------------------------>
<script>
  $(function() {
    $('#myList a:last-child').tab('show');
  });
</script>
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
/* AGE PROCESS */
require_once '../includes/admin/processes/age_process.php';
/* SECTOR PROCESS */
require_once '../includes/admin/processes/sector_process.php';
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

<div class="row mr-1">

  <!-- BRGY OFFICIALS CONTENTS ------------------------------------------>
  <?php require_once '../includes/admin/contents/officials.php'; ?>


  <div class="col-9 mt-3">

    <!-- TABLIST ------------------------------------------>
    <?php require_once '../includes/admin/contents/tablist.php'; ?>

    <!-- TAB CONTENTS ------------------------------------------>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show mt-1" id="list-requirements" role="tabpanel" aria-labelledby="list-requirements-list">

        <!-- SUB TABLIST ------------------------------------------>
        <?php require_once '../includes/admin/contents/sub_tablist.php'; ?>
        <div class="tab-content" id="nav-tabContent">

          <!-- TAB CONTENTS ------------------------------------------>
          <?php require_once '../includes/admin/contents/tab_contents.php'; ?>

          <!-- TOTAL REQUEST ------------------------------------------>
          <div class="tab-pane fade mt-1" id="list-total" role="tabpanel" aria-labelledby="list-total-list">

            <!-- Sub Tablist ---------------------------------------------------------------------------->
            <?php require_once '../includes/admin/contents/sub_tablist_total_request.php'; ?>

            <!-- TAB CONTENTS -->
            <div class="tab-content" id="nav-tabContent">

              <!-- TOTAL ---------------------------------------------->
              <div class="tab-pane fade " id="list-all" role="tabpanel" aria-labelledby="list-all-list">
                <!-- CAROUSEL -->
                <?php
                require_once '../includes/admin/view/carousel/total_request.php';
                ?>
              </div>

              <!-- MONTH ---------------------------------------------->
              <div class="tab-pane fade " id="list-month" role="tabpanel" aria-labelledby="list-month-list">
                <!-- CAROUSEL -->
                <?php
                require_once '../includes/admin/view/carousel/monthly_request.php';
                ?>
              </div>

              <!-- YEAR -->
              <div class="tab-pane fade " id="list-year" role="tabpanel" aria-labelledby="list-year-list">
                <!-- CAROUSEL -->
                <?php
                require_once '../includes/admin/view/carousel/yearly_request.php';
                ?>
              </div>
            </div>
          </div>


          <!-- MOST REQUESTED ------------------------------------------------------------------------------------------------------->
          <div class="tab-pane fade mt-1" id="list-most" role="tabpanel" aria-labelledby="list-most-list">
            <!-- Sub Tablist ---------------------------------------------------------------------------->
            <?php require_once '../includes/admin/contents/sub_tablist_most_requested.php'; ?>

            <!-- TAB CONTENTS -->
            <div class="tab-content" id="nav-tabContent">
              <!-- TOTAL ---------------------------------------------->
              <div class="tab-pane fade " id="list-most-total" role="tabpanel" aria-labelledby="list-most-total-list">
                <!-- CAROUSEL -->
                <?php
                require_once '../includes/admin/view/carousel/most_requested.php';
                ?>
              </div>
              <!-- MONTH ---------------------------------------------->
              <div class="tab-pane fade " id="list-month-most" role="tabpanel" aria-labelledby="list-month-most-list">
                <!-- CAROUSEL -->
                <?php
                require_once '../includes/admin/view/carousel/monthly_most_requested.php';
                ?>
              </div>
              <!-- YEAR ---------------------------------------------->
              <div class="tab-pane fade " id="list-year-most" role="tabpanel" aria-labelledby="list-year-most-list">
                <!-- CAROUSEL -->
                <?php
                require_once '../includes/admin/view/carousel/yearly_most_requested.php';
                ?>
              </div>



            </div>


          </div>


          <!-- Purok Ranking -->
          <div class="tab-pane fade mt-1" id="list-purok" role="tabpanel" aria-labelledby="list-purok-list">
            <div class="list-group list-group-horizontal" id="myList" role="tablist">
              <a class="list-group-item list-group-item-action" id="list-total-population-list" data-toggle="list" href="#list-total-population" role="tab" aria-controls="age">Total Population</a>
              <a class="list-group-item list-group-item-action" id="list-age-list" data-toggle="list" href="#list-age" role="tab" aria-controls="age">Population by Age</a>
              <a class="list-group-item list-group-item-action" id="list-sector-list" data-toggle="list" href="#list-sector" role="tab" aria-controls="sector">Population by Sector</a>
            </div>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade" id="list-total-population" role="tabpanel" aria-labelledby="list-total-population-list">
                <div class="container mt-3">
                  <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  ?>
                  <div class="row justify-content-center">
                    <div class="d-flex justify-content-between w-100">
                      <button type="submit" class="btn btn-primary mb-1 createbtn-purok-ranking" name="create">ADD</button>
                      <input class="form-control mb-1 w-25" id="purok-ranking-search" type="text" placeholder="Search..">
                    </div>
                    <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;">
                      <thread>
                        <tr class="bg-dark text-white">
                          <th style="width:10%" hidden>ID</th>
                          <th style="width:10%">Fullname</th>
                          <th style="width:10%">Age</th>
                          <th style="width:10%">Gender</th>
                          <th style="width:10%">Address</th>
                          <th style="width:10%">Sector</th>
                          <th colspan="2" style="width:10%">Action</th>
                        </tr>
                      </thread>
                      <tbody id="purokRankingTable">
                        <?php
                        while ($row = $result->fetch_assoc()) :
                        ?>
                          <tr>
                            <td hidden><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['sector']; ?></td>
                            <td>
                              <!-- <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a> -->
                              <!--   <a href="" class="btn btn-info editbtn">Update</a> -->
                              <button type="button" class="btn btn-info updatebtnPurokRanking">Edit</button>
                              <a href="admin.php?deletePurokRanking=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>

                            </td>
                          </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Age -->
              <div class="tab-pane fade" id="list-age" role="tabpanel" aria-labelledby="list-age-list">
                <div class="container">

                  <div class="row justify-content-center">
                    <!--         <input class="form-control" id="appointments-search" type="text" placeholder="Search.."> -->
                    <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;">
                      <thread>
                        <tr class="bg-dark text-white">
                          <th style="width:10%"></th>
                          <th style="width:10%">Male</th>
                          <th style="width:10%">Female</th>

                        </tr>
                      </thread>
                      <tbody id="appointmentsTable">

                        <tr>
                          <td>CHILDREN 0-5 YEARS OLD</td>
                          <td><?php echo ($row_age_5_male['age']); ?></td>
                          <td><?php echo ($row_age_5_female['age']); ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 6-12 YEARS OLD</td>
                          <td><?php echo ($row_age_12_male['age']); ?></td>
                          <td><?php echo ($row_age_12_female['age']); ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 13-17 YEARS OLD</td>
                          <td><?php echo ($row_age_17_male['age']); ?></td>
                          <td><?php echo ($row_age_17_female['age']); ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 18-35 YEARS OLD</td>
                          <td><?php echo ($row_age_35_male['age']); ?></td>
                          <td><?php echo ($row_age_35_female['age']); ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 36-50 YEARS OLD</td>
                          <td><?php echo ($row_age_50_male['age']); ?></td>
                          <td><?php echo ($row_age_50_female['age']); ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 51-65 YEARS OLD</td>
                          <td><?php echo ($row_age_65_male['age']); ?></td>
                          <td><?php echo ($row_age_65_female['age']); ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 66 AND ABOVE</td>
                          <td><?php echo ($row_age_66_male['age']); ?></td>
                          <td><?php echo ($row_age_66_female['age']); ?></td>
                        </tr>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- Sector -->
              <div class="tab-pane fade" id="list-sector" role="tabpanel" aria-labelledby="list-sector-list">
                <div class="container">
                  <div class="row justify-content-center">
                    <!--         <input class="form-control" id="appointments-search" type="text" placeholder="Search.."> -->
                    <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;">
                      <thread>
                        <tr class="bg-dark text-white">
                          <th style="width:10%"></th>
                          <th style="width:10%">Male</th>
                          <th style="width:10%">Female</th>

                        </tr>
                      </thread>
                      <tbody id="appointmentsTable">

                        <tr>
                          <td>LABOR FORCE</td>
                          <td><?php echo ($row_labor_male['sector']); ?></td>
                          <td><?php echo ($row_labor_female['sector']); ?></td>
                        </tr>
                        <tr>
                          <td>UNEMPLOYED</td>
                          <td><?php echo ($row_unemployed_male['sector']); ?></td>
                          <td><?php echo ($row_unemployed_female['sector']); ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL YOUTH (OSY)</td>
                          <td><?php echo ($row_osy_male['sector']); ?></td>
                          <td><?php echo ($row_osy_female['sector']); ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL CHILDREN (OSC)</td>
                          <td><?php echo ($row_osc_male['sector']); ?></td>
                          <td><?php echo ($row_osc_female['sector']); ?></td>
                        </tr>
                        <tr>
                          <td>PWD</td>
                          <td><?php echo ($row_pwd_male['sector']); ?></td>
                          <td><?php echo ($row_pwd_female['sector']); ?></td>
                        </tr>
                        <tr>
                          <td>OFW's</td>
                          <td><?php echo ($row_ofw_male['sector']); ?></td>
                          <td><?php echo ($row_ofw_female['sector']); ?></td>
                        </tr>
                        <tr>
                          <td>SOLO PARENTS</td>
                          <td><?php echo ($row_solo_male['sector']); ?></td>
                          <td><?php echo ($row_solo_female['sector']); ?></td>
                        </tr>
                        <tr>
                          <td>INDIGENOUS PEOPLE (IPs)</td>
                          <td><?php echo ($row_ips_male['sector']); ?></td>
                          <td><?php echo ($row_ips_female['sector']); ?></td>
                        </tr>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>






            </div>
          </div>


        </div>
      </div>


    </div>

    <?php require_once '../includes/admin/HF/footer.php'; ?>


    </body>

    </html>