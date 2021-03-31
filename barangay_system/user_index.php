<?php require_once 'includes/HF/HF_FOR_USER/header.php'; ?>
<?php require_once 'includes/crud/add_form.php'; ?>

<!-- MESSAGES ------------------------------------------>
<?php
if (isset($_SESSION['added'])) {
  echo message_add_success();
}
?>

<!-- Sidenav -->
<!-- main container -->
<div class="row mt-3 mr-1 ml-1">


  <!-- Brgy Official -->
  <div class="col-3">
    <div class="official overflow-auto pt-3  text-center " style="background-color: #eee; height:100%; font-size: 0.8rem;">
      <img src="includes/img/logo.png" class="img-fluid" alt="..." style="width:35%; height:15%">
      <p class="mb-1" style="font-weight: bold;">Official of the Barangay</p>
      <p class="mb-0">Hon. WILFREDO F. MUSNGI</p>
      <p class="bg-secondary text-white" style="font-style: italic;">Punong Barangay</p>
      <p class="mb-0" style="font-weight: bold;">KAGAWAD:</p>
      <p class="mb-0">Hon. NOEL M. DELA CRUZ</p>
      <p style="font-style: italic;">Committee on Agriculture</p>
      <p class="mb-0">Hon. LAURENCIO M. BUCAD</p>
      <p style="font-style: italic;">Committee on Education</p>
      <p class="mb-0">Hon. AMELITO M. MUSNGI JR.</p>
      <p style="font-style: italic;">Committee on Appropriations</p>
      <p class="mb-0">Hon. DOMINADOR C. DELA CRUZ</p>
      <p style="font-style: italic;">Committee on Public Works & Infrastructure </p>
      <p class="mb-0">Hon. ALBERTO P. MACAPINLAC</p>
      <p style="font-style: italic;">Committee on Peace & Order</p>
      <p class="mb-0">Hon. CARMELITA M. MACALINO</p>
      <p style="font-style: italic;">Committee on Health</p>
      <p class="mb-0">Hon. ANALYN N. CUNANAN</p>
      <p style="font-style: italic;">Committee on Environmental Protection</p>
      <p class="mb-0">MS. JOJI R. SUBA</p>
      <p style="font-style: italic;">Barangay Treasurer</p>
      <p class="mb-0">Ms. FLORDELYN V. GREGORIO</p>
      <p style="font-style: italic;">Barangay Secretary</p>
    </div>
  </div>


  <!-- Content sidenav -->
  <div class="col-9">

    <div class="list-group list-group-horizontal" id="myList" role="tablist">
      <a class="list-group-item list-group-item-action" id="list-requirements-list" data-toggle="list" href="#list-requirements" role="tab" aria-controls="requirements">Requirements</a>
      <a class="list-group-item list-group-item-action" id="list-appointments-list" data-toggle="list" href="#list-appointments" role="tab" aria-controls="appointments">Appointments</a>
    </div>
    <!-- tab content -->
    <div class="tab-content mt-1" id="nav-tabContent">
      <!-- content -->

      <div class="tab-pane fade" id="list-requirements" role="tabpanel" aria-labelledby="list-requirements-list">
        <!-- tablist -->
        <div class="list-group list-group-horizontal" id="myList" role="tablist">
          <a class="list-group-item list-group-item-action" id="list-medical-list" data-toggle="list" href="#list-medical" role="tab" aria-controls="medical">Indigency medical</a>
          <a class="list-group-item list-group-item-action" id="list-scholarship-list" data-toggle="list" href="#list-scholarship" role="tab" aria-controls="scholarship">Indigency Scholarship</a>
          <a class="list-group-item list-group-item-action" id="list-clearance-list" data-toggle="list" href="#list-clearance" role="tab" aria-controls="clearance">Brgy. Clearance</a>
          <a class="list-group-item list-group-item-action" id="list-bclearance-list" data-toggle="list" href="#list-bclearance" role="tab" aria-controls="bclearance">Business Clearance</a>
          <a class="list-group-item list-group-item-action" id="list-residency-list" data-toggle="list" href="#list-residency" role="tab" aria-controls="residency">Residency</a>
        </div>
        <!-- content sidenave items -->
        <div class="tab-content" id="nav-tabContent">
          <!--MEDICAL -------------------------------------------------------------------------------------------------------------------------------->
          <div class="tab-pane fade" id="list-medical" role="tabpanel" aria-labelledby="list-medical-list">
            <!-- Form ---------------------------------------------->
            <form class="m-3" action="#" method="post">
              <div class="form-group">
                <input type="text" name="fullname" id="fullname" class="form-control" placeHolder="Fullname" required>
                <input type="text" name="work" id="work" class="form-control" placeHolder="Work" required>
                <input type="text" name="purpose" id="purpose" class="form-control" placeHolder="Purpose" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit-med">Submit</button>
              </div>
            </form>
          </div>
          <!--SCHOLARSHIP -------------------------------------------------------------------------------------------------------------------------------->
          <div class="tab-pane fade" id="list-scholarship" role="tabpanel" aria-labelledby="list-scholarship-list">
            <!-- Form ------------------------------------------->
            <form class="m-3" action="#" method="post">
              <div class="form-group">
                <input type="text" name="fullname" id="fullname" class="form-control" placeHolder="Fullname" required>
                <input type="text" name="mother" id="mother" class="form-control" placeHolder="Mother" required>
                <input type="text" name="workMother" id="workMother" class="form-control" placeHolder="Work of Mother" required>
                <input type="text" name="father" id="father" class="form-control" placeHolder="Father" required>
                <input type="text" name="workFather" id="workFather" class="form-control" placeHolder="Work of Father" required>
                <input type="number" min="1" step="1" name="earnings" id="earnings" class="form-control" placeHolder="Earnings" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit-scho">Submit</button>
              </div>
            </form>
          </div>
          <!--CLEARANCE -------------------------------------------------------------------------------------------------------------------------------->
          <div class="tab-pane fade" id="list-clearance" role="tabpanel" aria-labelledby="list-clearance-list">
            <!-- Form ------------------------------------------->
            <form class="m-3" action="#" method="post">
              <div class="form-group">
                <input type="text" name="fullname" id="fullname" class="form-control" placeHolder="Fullname" required>
                <input type="text" name="age" id="age" class="form-control" placeHolder="Age" required>
                <h2>Purpose</h2>
                <!-- Checkboxes -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="abroad" value="abroad" id="abroad">
                  <label class="form-check-label" for="abroad">Abroad</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="loc" value="local" id="loc">
                  <label class="form-check-label" for="loc">Local</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="scholarship" value="scholarship" id="scholarship">
                  <label class="form-check-label" for="scholarship">Scholarship</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="policeClearance" value="policeClearance" id="policeClearance">
                  <label class="form-check-label" for="policeClearance">Police Clearance</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="nbi" value="nbi" id="nbi">
                  <label class="form-check-label" for="nbi">NBI</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="loanPurposes" value="loanPurposes" id="loanPurposes">
                  <label class="form-check-label" for="loanPurposes">Loan Purposes</label>
                </div>
                <!--  <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                      </div>  -->
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit-brgy">Submit</button>
              </div>
            </form>
          </div>
          <!--BUSINESS CLEARANCE -------------------------------------------------------------------------------------------------------------------------------->
          <div class="tab-pane fade" id="list-bclearance" role="tabpanel" aria-labelledby="list-bclearance-list">
            <!-- Form ------------------------------------------->
            <form class="m-3" action="#" method="post">
              <div class="form-group">
                <input type="text" name="bname" id="bname" class="form-control" placeHolder="Business Name/Trade Activity" required>
                <input type="text" name="loc" id="loc" class="form-control" placeHolder="Location" required>
                <input type="text" name="operator" id="operator" class="form-control" placeHolder="Operator/Manager" required>
                <input type="text" name="addr" id="addr" class="form-control" placeHolder="Address" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit-business">Submit</button>
              </div>
            </form>
          </div>
          <!--RESIDENCY -------------------------------------------------------------------------------------------------------------------------------->
          <div class="tab-pane fade" id="list-residency" role="tabpanel" aria-labelledby="list-residency-list">
            <!-- Form ------------------------------------------->
            <form class="m-3" action="#" method="post">
              <div class="form-group">
                <input type="text" name="fullname" id="fullname" class="form-control" placeHolder="Fullname" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit-residency">Submit</button>
              </div>
            </form>
          </div>
        </div>

        <!-- end of tablist -->
      </div>
      <!-- end of content -->
      <!-- APPOINTMENTS --------------------------------------------------------------------------------------------------------------->
      <div class="tab-pane fade" id="list-appointments" role="tabpanel" aria-labelledby="list-appointments-list">
        <!-- Form ------------------------------------------->
        <form class="m-3" action="#" method="post">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Appointments</label>
            <textarea class="form-control" name="textInputs" id="exampleFormControlTextarea1" rows="10" cols="100"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit-appointments">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <!-- end of tab content -->
  </div>
  <!-- end of content sidenav -->



</div>







<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="includes/scripts/alert_close.js"></script>
</body>

</html>