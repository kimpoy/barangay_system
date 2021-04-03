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

              <!-- Weekly ---------------------------------------------->
              <div class="tab-pane fade " id="list-week" role="tabpanel" aria-labelledby="list-week-list">
                <!-- CAROUSEL -->
                <?php
                require_once '../includes/admin/view/carousel/weekly_request.php';
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
              <!-- WEEK ---------------------------------------------->
              <div class="tab-pane fade " id="list-week-total" role="tabpanel" aria-labelledby="list-week-total-list">
                <!-- CAROUSEL -->
                <?php
                require_once '../includes/admin/view/carousel/weekly_most_requested.php';
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
              <div id="p1" class="carousel slide" data-interval="false" data-ride="carousel">
              
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#p1" data-slide-to="0" class="active"></li>
        <li data-target="#p1" data-slide-to="1"></li>
        <li data-target="#p1" data-slide-to="2"></li>
        <li data-target="#p1" data-slide-to="3"></li>
        <li data-target="#p1" data-slide-to="4"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="col-10 mt-2" style="margin:auto;">
        <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['age'] <= 5 && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter1++;
                    }
                    else if($row['age'] <= 5 && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter2++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter3++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter4++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter5++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter6++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter7++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter8++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter9++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter10++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter11++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter12++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter13++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter14++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 1</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 6-12 YEARS OLD</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 13-17 YEARS OLD</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 18-35 YEARS OLD</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 36-50 YEARS OLD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 51-65 YEARS OLD</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 66 AND ABOVE</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
            </div>
        </div>
        <div class="carousel-item">
        <div class="col-10 mt-2" style="margin:auto;">
        <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['age'] <= 5 && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter1++;
                    }
                    else if($row['age'] <= 5 && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter2++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter3++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter4++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter5++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter6++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter7++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter8++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter9++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter10++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter11++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter12++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter13++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter14++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 2</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 6-12 YEARS OLD</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 13-17 YEARS OLD</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 18-35 YEARS OLD</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 36-50 YEARS OLD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 51-65 YEARS OLD</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 66 AND ABOVE</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
            </div>

        </div>
        <div class="carousel-item">
        <div class="col-10 mt-2" style="margin:auto;">
        <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['age'] <= 5 && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter1++;
                    }
                    else if($row['age'] <= 5 && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter2++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter3++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter4++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter5++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter6++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter7++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter8++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter9++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter10++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter11++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter12++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter13++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter14++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 3</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 6-12 YEARS OLD</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 13-17 YEARS OLD</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 18-35 YEARS OLD</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 36-50 YEARS OLD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 51-65 YEARS OLD</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 66 AND ABOVE</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
            </div>

        </div>
        <div class="carousel-item">
        <div class="col-10 mt-2" style="margin:auto;">
        <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['age'] <= 5 && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter1++;
                    }
                    else if($row['age'] <= 5 && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter2++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter3++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter4++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter5++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter6++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter7++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter8++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter9++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter10++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter11++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter12++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter13++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter14++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 4</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 6-12 YEARS OLD</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 13-17 YEARS OLD</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 18-35 YEARS OLD</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 36-50 YEARS OLD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 51-65 YEARS OLD</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 66 AND ABOVE</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
            </div>

        </div>
        <div class="carousel-item">
        <div class="col-10 mt-2" style="margin:auto;">
        <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['age'] <= 5 && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter1++;
                    }
                    else if($row['age'] <= 5 && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter2++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter3++;
                    }
                    else if($row['age'] <= 12 && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter4++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter5++;
                    }
                    else if($row['age'] <= 17 && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter6++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter7++;
                    }
                    else if($row['age'] <= 35 && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter8++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter9++;
                    }
                    else if($row['age'] <= 50 && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter10++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter11++;
                    }
                    else if($row['age'] <= 65 && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter12++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter13++;
                    }
                    else if($row['age'] <= 200 && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter14++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 5</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 6-12 YEARS OLD</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>CHILDREN 13-17 YEARS OLD</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 18-35 YEARS OLD</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 36-50 YEARS OLD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 51-65 YEARS OLD</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>ADULT 66 AND ABOVE</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
            </div>

        </div>
    </div>
</div>
<!-- Left and right controls -->
<a class="carousel-control-prev" href="#p1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#p1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>
              </div>




              <!-- Sector -->
              <div class="tab-pane fade" id="list-sector" role="tabpanel" aria-labelledby="list-sector-list">
              <div id="p2" class="carousel slide" data-interval="false" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#p2" data-slide-to="0" class="active"></li>
        <li data-target="#p2" data-slide-to="1"></li>
        <li data-target="#p2" data-slide-to="2"></li>
        <li data-target="#p2" data-slide-to="3"></li>
        <li data-target="#p2" data-slide-to="4"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="col-10 mt-2" style="margin:auto;">
        <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  $counter15=0;
                  $counter16=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['sector'] == 'labor' && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter1++;
                    }
                    else if($row['sector'] == 'labor' && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter2++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter3++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter4++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter5++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter6++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter7++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter8++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter9++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter10++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter11++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter12++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter13++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter14++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='female' && $row['address']=='purok1'){
                      $counter15++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='male' && $row['address']=='purok1'){
                      $counter16++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 1</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>UNEMPLOYED</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL YOUTH (OSY)</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL CHILDREN (OSC)</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>PWD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>OFW</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>SOLO PARENTS</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>
                        <tr>
                          <td>INDIGENOUS PEOPLE (IPs)</td>
                          <td><?php echo $counter15; ?></td>
                          <td><?php echo $counter16; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
              </div>
        </div>
        <div class="carousel-item">
            <div class="col-10 mt-2" style="margin:auto;">
            <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  $counter15=0;
                  $counter16=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['sector'] == 'labor' && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter1++;
                    }
                    else if($row['sector'] == 'labor' && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter2++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter3++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter4++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter5++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter6++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter7++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter8++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter9++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter10++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter11++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter12++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter13++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter14++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='male' && $row['address']=='purok2'){
                      $counter15++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='female' && $row['address']=='purok2'){
                      $counter16++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 2</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>UNEMPLOYED</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL YOUTH (OSY)</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL CHILDREN (OSC)</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>PWD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>OFW</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>SOLO PARENTS</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>
                        <tr>
                          <td>INDIGENOUS PEOPLE (IPs)</td>
                          <td><?php echo $counter15; ?></td>
                          <td><?php echo $counter16; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
            </div>

        </div>
        <div class="carousel-item">
            <div class="col-10 mt-2" style="margin:auto;">
            <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  $counter15=0;
                  $counter16=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['sector'] == 'labor' && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter1++;
                    }
                    else if($row['sector'] == 'labor' && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter2++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter3++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter4++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter5++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter6++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter7++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter8++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter9++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter10++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter11++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter12++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter13++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter14++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='male' && $row['address']=='purok3'){
                      $counter15++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='female' && $row['address']=='purok3'){
                      $counter16++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 3</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>UNEMPLOYED</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL YOUTH (OSY)</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL CHILDREN (OSC)</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>PWD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>OFW</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>SOLO PARENTS</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>
                        <tr>
                          <td>INDIGENOUS PEOPLE (IPs)</td>
                          <td><?php echo $counter15; ?></td>
                          <td><?php echo $counter16; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
            </div>

        </div>
        <div class="carousel-item">
            <div class="col-10 mt-2" style="margin:auto;">
            <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  $counter15=0;
                  $counter16=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['sector'] == 'labor' && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter1++;
                    }
                    else if($row['sector'] == 'labor' && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter2++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter3++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter4++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter5++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter6++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter7++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter8++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter9++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter10++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter11++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter12++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter13++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter14++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='male' && $row['address']=='purok4'){
                      $counter15++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='female' && $row['address']=='purok4'){
                      $counter16++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 4</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>UNEMPLOYED</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL YOUTH (OSY)</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL CHILDREN (OSC)</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>PWD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>OFW</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>SOLO PARENTS</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>
                        <tr>
                          <td>INDIGENOUS PEOPLE (IPs)</td>
                          <td><?php echo $counter15; ?></td>
                          <td><?php echo $counter16; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
            </div>

        </div>
        <div class="carousel-item">
            <div class="col-10 mt-2" style="margin:auto;">
            <?php
                  $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                  $result = $mysqli->query("SELECT * FROM purokranking") or die($mysqli->error);
                  $counter1=0;
                  $counter2=0;
                  $counter3=0;
                  $counter4=0;
                  $counter5=0;
                  $counter6=0;
                  $counter7=0;
                  $counter8=0;
                  $counter9=0;
                  $counter10=0;
                  $counter11=0;
                  $counter12=0;
                  $counter13=0;
                  $counter14=0;
                  $counter15=0;
                  $counter16=0;
                  while ($row = $result->fetch_assoc()){
                    if($row['sector'] == 'labor' && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter1++;
                    }
                    else if($row['sector'] == 'labor' && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter2++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter3++;
                    }
                    else if($row['sector'] == 'unemployed' && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter4++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter5++;
                    }
                    else if($row['sector'] == 'osy' && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter6++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter7++;
                    }
                    else if($row['sector'] == 'osc' && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter8++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter9++;
                    }
                    else if($row['sector'] == 'pwd' && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter10++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter11++;
                    }
                    else if($row['sector'] == 'ofw' && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter12++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter13++;
                    }
                    else if($row['sector'] == 'solo' && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter14++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='male' && $row['address']=='purok5'){
                      $counter15++;
                    }
                    else if($row['sector'] == 'ips' && $row['gender']=='female' && $row['address']=='purok5'){
                      $counter16++;
                    }
                    
                  }


                  ?>
                <!-- TABLE -->
                <center><h1>Purok 5</h1></center>
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
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
                          <td><?php echo $counter1; ?></td>
                          <td><?php echo $counter2; ?></td>
                        </tr>
                        <tr>
                          <td>UNEMPLOYED</td>
                          <td><?php echo $counter3; ?></td>
                          <td><?php echo $counter4; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL YOUTH (OSY)</td>
                          <td><?php echo $counter5; ?></td>
                          <td><?php echo $counter6; ?></td>
                        </tr>
                        <tr>
                          <td>OUT OF SCHOOL CHILDREN (OSC)</td>
                          <td><?php echo $counter7; ?></td>
                          <td><?php echo $counter8; ?></td>
                        </tr>
                        <tr>
                          <td>PWD</td>
                          <td><?php echo $counter9; ?></td>
                          <td><?php echo $counter10; ?></td>
                        </tr>
                        <tr>
                          <td>OFW</td>
                          <td><?php echo $counter11; ?></td>
                          <td><?php echo $counter12; ?></td>
                        </tr>
                        <tr>
                          <td>SOLO PARENTS</td>
                          <td><?php echo $counter13; ?></td>
                          <td><?php echo $counter14; ?></td>
                        </tr>
                        <tr>
                          <td>INDIGENOUS PEOPLE (IPs)</td>
                          <td><?php echo $counter15; ?></td>
                          <td><?php echo $counter16; ?></td>
                        </tr>


                      </tbody>
                    </table>
                <!-- END TABLE -->
            </div>

        </div>
    </div>
</div>
<!-- Left and right controls -->
<a class="carousel-control-prev" href="#p2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#p2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>
              </div>






            </div>
          </div>


        </div>
      </div>


    </div>

    <?php require_once '../includes/admin/HF/footer.php'; ?>


    </body>

    </html>