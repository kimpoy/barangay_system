<!--MEDICAL -------------------------------------------------------------------------------------------------------------------------------->
<div class="tab-pane fade mt-3" id="list-medical" role="tabpanel" aria-labelledby="list-medical-list">
  <div class="container" id="medical_container">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM medical") or die($mysqli->error);
    ?>


    <div class="row justify-content-center">
      <div class="d-flex justify-content-between w-100">
        <button type="submit" class="btn btn-primary createbtn mb-1" name="create">ADD</button>
        <input class="form-control mb-1 w-25" id="medical-search" type="text" placeholder="Search..">
      </div>

      <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;   overflow-x: hidden;">
        <thread>
          <tr class="bg-dark text-white ">
            <th style="width:10%" hidden>ID</th>
            <th style="width:10%">Fullname</th>
            <th style="width:10%">Work</th>
            <th style="width:10%">Purpose</th>
            <th colspan="2" style="width:10%">Action</th>
          </tr>
        </thread>
        <tbody id="medicalTable">
          <?php
          while ($row = $result->fetch_assoc()) :
          ?>
            <tr>
              <td hidden><?php echo $row['id']; ?></td>
              <td><?php echo $row['fullname']; ?></td>
              <td><?php echo $row['work']; ?></td>
              <td><?php echo $row['purpose']; ?></td>
              <td>
                <!-- <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a> -->
                <!--   <a href="" class="btn btn-info editbtn">Update</a> -->
                <button type="button" class="btn btn-info updatebtn">Edit</button>
                <a href="admin.php?deleteMedical=<?php echo $row['id']; ?> " class="btn btn-danger">Delete</a>
                <a href="../includes/admin/print/medical.php?fullname=<?php echo $row['fullname']; ?>&work=<?php echo $row['work']; ?>&purpose=<?php echo $row['purpose']; ?>" target="_blank" class="btn btn-secondary">Print</a>

              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>

      </table>
    </div>
  </div>
</div>
<!--Scholarship -------------------------------------------------------------------------------------------------------------------------------->
<div class="tab-pane fade mt-3" id="list-scholarship" role="tabpanel" aria-labelledby="list-scholarship-list">
  <div class="container">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM scholarship") or die($mysqli->error);
    ?>


    <div class="row justify-content-center">
      <div class="d-flex justify-content-between w-100">
        <button type="submit" class="btn btn-primary mb-1 createbtn-scholarship" name="create">ADD</button>
        <input class="form-control mb-1 w-25" id="scholarship-search" type="text" placeholder="Search..">
      </div>
      <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;">
        <thread>
          <tr class="bg-dark text-white">
            <th style="width:5%" hidden>ID</th>
            <th style="width:10%">Fullname</th>
            <th style="width:10%">Mother</th>
            <th style="width:10%">Work of Mother</th>
            <th style="width:10%">Father</th>
            <th style="width:10%">Work of Father</th>
            <th style="width:10%">Earnings</th>
            <th colspan="2" style="width:5%">Action</th>
          </tr>
        </thread>
        <tbody id="scholarshipTable">
          <?php
          while ($row = $result->fetch_assoc()) :
          ?>
            <tr>
              <td hidden><?php echo $row['id']; ?></td>
              <td><?php echo $row['fullname']; ?></td>
              <td><?php echo $row['mother']; ?></td>
              <td><?php echo $row['workMother']; ?></td>
              <td><?php echo $row['father']; ?></td>
              <td><?php echo $row['workFather']; ?></td>
              <td><?php echo $row['earnings']; ?></td>
              <td>
                <!-- <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a> -->
                <!--   <a href="" class="btn btn-info editbtn">Update</a> -->
                <button type="button" class="btn btn-info updatebtnScholarship" style="width:4.5rem;">Edit</button>
                <a href="admin.php?deleteScholarship=<?php echo $row['id']; ?>" class="btn btn-danger mt-1 mb-1" style="width:4.5rem;">Delete</a>
                <a href="../includes/admin/print/scholarship.php?father=<?php echo $row['father']; ?>&mother=<?php echo $row['mother']; ?>&workFather=<?php echo $row['workFather']; ?>&workMother=<?php echo $row['workMother']; ?>&fullname=<?php echo $row['fullname']; ?>&earnings=<?php echo $row['earnings']; ?>" target="_blank" class="btn btn-secondary" style="width:4.5rem;">Print</a>

              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>

      </table>
    </div>
  </div>
</div>
<!--Brgy Clearance -------------------------------------------------------------------------------------------------------------------------------->
<div class="tab-pane fade mt-3" id="list-clearance" role="tabpanel" aria-labelledby="list-clearance-list">
  <div class="container">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM brgyclearance") or die($mysqli->error);
    ?>


    <div class="row justify-content-center">
      <div class="d-flex justify-content-between w-100">
        <button type="submit" class="btn btn-primary mb-1 createbtn-clearance" name="create">ADD</button>
        <input class="form-control mb-1 w-25" id="clearance-search" type="text" placeholder="Search..">
      </div>
      <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;">
        <thread>
          <tr class="bg-dark text-white">
            <th style="width:5%" hidden>ID</th>
            <th style="width:10%">Fullname</th>
            <th style="width:5%">Age</th>
            <th style="width:10%">Abroad</th>
            <th style="width:5%">Local</th>
            <th style="width:10%">Scholarship</th>
            <th style="width:10%">Police Clearance</th>
            <th style="width:5%">NBI</th>
            <th style="width:10%">Loan Purposes</th>
            <th colspan="2" style="width:10%">Action</th>
          </tr>
        </thread>
        <tbody id="clearanceTable">
          <?php
          while ($row = $result->fetch_assoc()) :
          ?>
            <tr>
              <td hidden><?php echo $row['id']; ?></td>
              <td><?php echo $row['fullname']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['abroad']; ?></td>
              <td><?php echo $row['loc']; ?></td>
              <td><?php echo $row['scholarship']; ?></td>
              <td><?php echo $row['policeClearance']; ?></td>
              <td><?php echo $row['nbi']; ?></td>
              <td><?php echo $row['loanPurposes']; ?></td>
              <td>
                <!-- <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a> -->
                <!--   <a href="" class="btn btn-info editbtn">Update</a> -->
                <button type="button" class="btn btn-info updatebtnClearance" style="width:4.5rem;">Edit</button>
                <a href="admin.php?deleteClearance=<?php echo $row['id']; ?>" class="btn btn-danger mt-1 mb-1" style="width:4.5rem;">Delete</a>
                <a href="../includes/admin/print/clearance.php?fullname=<?php echo $row['fullname']; ?>&age=<?php echo $row['age']; ?>&abroad=<?php echo $row['abroad']; ?>&loc=<?php echo $row['loc']; ?>&scholarship=<?php echo $row['scholarship']; ?>&policeClearance=<?php echo $row['policeClearance']; ?>&nbi=<?php echo $row['nbi']; ?>&loanPurposes=<?php echo $row['loanPurposes']; ?>" target="_blank" class="btn btn-secondary" style="width:4.5rem;">Print</a>

              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>

      </table>
    </div>
  </div>
</div>

<!--Business Clearance -------------------------------------------------------------------------------------------------------------------------------->
<div class="tab-pane fade mt-3" id="list-bclearance" role="tabpanel" aria-labelledby="list-bclearance-list">
  <div class="container">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM business") or die($mysqli->error);
    ?>


    <div class="row justify-content-center">
      <div class="d-flex justify-content-between w-100">
        <button type="submit" class="btn btn-primary mb-1 createbtn-business" name="create">ADD</button>
        <input class="form-control mb-1 w-25" id="business-search" type="text" placeholder="Search..">
      </div>
      <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;">
        <thread>
          <tr class="bg-dark text-white">
            <th style="width:10%" hidden>ID</th>
            <th style="width:10%">Business Name/Trade<br> Activity</th>
            <th style="width:10%">Location</th>
            <th style="width:10%">Operator/Manager</th>
            <th style="width:10%">Address</th>
            <th colspan="2" style="width:5%">Action</th>
          </tr>
        </thread>
        <tbody id="businessTable">
          <?php
          while ($row = $result->fetch_assoc()) :
          ?>
            <tr>
              <td hidden><?php echo $row['id']; ?></td>
              <td><?php echo $row['bname']; ?></td>
              <td><?php echo $row['loc']; ?></td>
              <td><?php echo $row['operator']; ?></td>
              <td><?php echo $row['addr']; ?></td>
              <td>
                <!-- <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a> -->
                <!--   <a href="" class="btn btn-info editbtn">Update</a> -->
                <button type="button" class="btn btn-info updatebtnBusiness" style="width:4.5rem;">Edit</button>
                <a href="admin.php?deleteBusiness=<?php echo $row['id']; ?>" class="btn btn-danger mt-1 mb-1" style="width:4.5rem;">Delete</a>
                <a href="../includes/admin/print/business.php?bname=<?php echo $row['bname']; ?>&loc=<?php echo $row['loc']; ?>&operator=<?php echo $row['operator']; ?>&addr=<?php echo $row['addr']; ?>" target="_blank" class="btn btn-secondary" style="width:4.5rem;">Print</a>

              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>

      </table>
    </div>
  </div>
</div>

<!--Residency -------------------------------------------------------------------------------------------------------------------------------->
<div class="tab-pane fade mt-3" id="list-residency" role="tabpanel" aria-labelledby="list-residency-list">
  <div class="container">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM residency") or die($mysqli->error);
    ?>


    <div class="row justify-content-center">
      <div class="d-flex justify-content-between w-100">
        <button type="submit" class="btn btn-primary mb-1 createbtn-residency" name="create">ADD</button>
        <input class="form-control mb-1 w-25" id="residency-search" type="text" placeholder="Search..">
      </div>
      <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;">
        <thread>
          <tr class="bg-dark text-white">
            <th style="width:10%" hidden>ID</th>
            <th style="width:10%">Fullname</th>
            <th colspan="2" style="width:10%">Action</th>
          </tr>
        </thread>
        <tbody id="residencyTable">
          <?php
          while ($row = $result->fetch_assoc()) :
          ?>
            <tr>
              <td hidden><?php echo $row['id']; ?></td>
              <td><?php echo $row['fullname']; ?></td>
              <td>
                <!-- <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a> -->
                <!--   <a href="" class="btn btn-info editbtn">Update</a> -->
                <button type="button" class="btn btn-info updatebtnResidency">Edit</button>
                <a href="admin.php?deleteResidency=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                <a href="../includes/admin/print/residency.php?fullname=<?php echo $row['fullname']; ?>" target="_blank" class="btn btn-secondary">Print</a>

              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>

      </table>
    </div>
  </div>
</div>
</div>
<!-- end of tablist start of APPOINTMENTS---------------------------------------------------------------------------------------------------------------------------------------->
</div>
<div class="tab-pane fade mt-3" id="list-appointments" role="tabpanel" aria-labelledby="list-appointments-list">

  <div class="container">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM appointments") or die($mysqli->error);
    ?>

    <div class="row justify-content-center">
      <div class="d-flex justify-content-between w-100">
        <button type="submit" class="btn btn-primary mb-1 createbtn-appointments" name="create">ADD</button>
        <input class="form-control mb-1 w-25" id="appointments-search" type="text" placeholder="Search..">
      </div>
      <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:60vh; word-break: break-all;">
        <thread>
          <tr class="bg-dark text-white">
            <th style="width:10%" hidden>ID</th>
            <th style="width:10%">Appointments</th>
            <th colspan="2" style="width:10%">Action</th>
          </tr>
        </thread>
        <tbody id="appointmentsTable">
          <?php
          while ($row = $result->fetch_assoc()) :
          ?>
            <tr>
              <td hidden><?php echo $row['id']; ?></td>
              <td><?php echo $row['textInputs']; ?></td>
              <td>
                <!-- <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a> -->
                <!--   <a href="" class="btn btn-info editbtn">Update</a> -->
                <button type="button" class="btn btn-info updatebtnAppointments">Edit</button>
                <a href="admin.php?deleteAppointments=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>

              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>