<!-- EDIT MODAL --------------------------------------------------------------------------------------------------------------------------------->

<!-- Modal for edit medical------------------------------------------ -->
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
          <input type="text" name="fullname" id="fullname" class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="work" id="work" class="form-control">
        </div>
        <div class="form-group">
          <input type="text" name="purpose" id="purpose" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="update-medical">Update</button>
        </div>

      </form>

    </div>
  </div>
</div>
</div>


<!-- Modal for edit scholarship------------------------------------------ -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <input type="hidden" name="update_id" id="update_id_scholarship" value="<?php echo $id; ?>">
        <div class="form-group">
          <input type="text" name="fullname" id="fullname_scholarship" class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="mother" id="mother" class="form-control">
        </div>
        <div class="form-group">
          <input type="text" name="workMother" id="workMother" class="form-control">
        </div>
        <div class="form-group">
          <input type="text" name="father" id="father" class="form-control">
        </div>
        <div class="form-group">
          <input type="text" name="workFather" id="workFather" class="form-control">
        </div>
        <div class="form-group">
          <input type="text" name="earnings" id="earnings" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="update-scholarship">Update</button>
        </div>

      </form>

    </div>
  </div>
</div>
</div>


<!-- Modal for edit clearance------------------------------------------ -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <input type="hidden" name="update_id" id="update_id_clearance" value="<?php echo $id; ?>">
        <div class="form-group">
          <input type="text" name="fullname" id="fullname_clearance" class="form-control" placeHolder="Fullname" required>
          <input type="text" name="age" id="age_clearance" class="form-control" placeHolder="Age" required>
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
          <button type="submit" class="btn btn-primary" name="update-clearance">Update</button>
        </div>

      </form>

    </div>
  </div>
</div>
</div>


<!-- Modal for edit business clearance------------------------------------------ -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <input type="hidden" name="update_id" id="update_id_business" value="<?php echo $id; ?>">
        <div class="form-group">
          <input type="text" name="bname" id="bname_business" class="form-control" placeHolder="Business Name/Trade Activity" required>
          <input type="text" name="loc" id="loc_business" class="form-control" placeHolder="Location" required>
          <input type="text" name="operator" id="operator_business" class="form-control" placeHolder="Operator/Manager" required>
          <input type="text" name="addr" id="addr_business" class="form-control" placeHolder="Address" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="update-business">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>


<!-- Modal for edit business clearance------------------------------------------ -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <input type="hidden" name="update_id" id="update_id_residency" value="<?php echo $id; ?>">
        <div class="form-group">
          <input type="text" name="fullname" id="fullname_residency" class="form-control" placeHolder="Fullname" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="update-residency">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>


<!-- Modal for edit appointments------------------------------------------ -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <input type="hidden" name="update_id" id="update_id_appointments" value="<?php echo $id; ?>">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Appointments</label>
          <textarea class="form-control" name="textInputs" id="textInputs" rows="10" cols="100"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="update-appointments">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>


<!-- ADD MODAL --------------------------------------------------------------------------------------------------------------------------------->

<!-- Modal for add medical------------------------------------------ -->
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
        <div class="form-group">
          <input type="text" name="fullname" id="fullname" class="form-control" placeHolder="Fullname" required>
          <input type="text" name="work" id="work" class="form-control" placeHolder="Work" required>
          <input type="text" name="purpose" id="purpose" class="form-control" placeHolder="Purpose" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit-med-admin">Register</button>
        </div>

      </form>

    </div>
  </div>
</div>
</div>


<!-- Modal for add scholarship------------------------------------------ -->
<div class="modal fade" id="createModalScholarship" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

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
          <button type="submit" class="btn btn-primary" name="submit-scho-admin">Register</button>
        </div>

      </form>

    </div>
  </div>
</div>
</div>


<!-- Modal for add clearance------------------------------------------ -->
<div class="modal fade" id="createModalClearance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

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
          <button type="submit" class="btn btn-primary" name="submit-brgy-admin">Register</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>


<!-- Modal for add business clearance------------------------------------------ -->
<div class="modal fade" id="createModalBusiness" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <div class="form-group">
          <input type="text" name="bname" id="bname" class="form-control" placeHolder="Business Name/Trade Activity" required>
          <input type="text" name="loc" id="loc" class="form-control" placeHolder="Location" required>
          <input type="text" name="operator" id="operator" class="form-control" placeHolder="Operator/Manager" required>
          <input type="text" name="addr" id="addr" class="form-control" placeHolder="Address" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit-business-admin">Register</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>


<!-- Modal for add residency------------------------------------------ -->
<div class="modal fade" id="createModalResidency" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <div class="form-group">
          <input type="text" name="fullname" id="fullname" class="form-control" placeHolder="Fullname" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit-residency-admin">Register</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>
<!-- Modal for add Appointments------------------------------------------ -->
<div class="modal fade" id="createModalAppointments" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Appointments</label>
          <textarea class="form-control" name="textInputs" id="exampleFormControlTextarea1" rows="10" cols="100"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit-appointments-admin">Register</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>



<!-- Purok Ranking -->


<!-- Modal for add Purok Ranking------------------------------------------ -->
<div class="modal fade" id="createModalPurokRanking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <div class="form-group">
          <input type="text" name="fullname" id="fullname" class="form-control" placeHolder="Fullname" required>
        </div>
        <div class="form-group">
          <input type="text" name="age" id="age" class="form-control" placeHolder="Age" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select name="gender" id="gender" required>
            <option disabled selected></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <label for="address">purok:</label>
          <select name="address" id="address" required>
            <option disabled selected></option>
            <option value="purok1">Purok 1</option>
            <option value="purok2">Purok 2</option>
            <option value="purok3">Purok 3</option>
            <option value="purok4">Purok 4</option>
            <option value="purok5">Purok 5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sector">sector:</label>
          <select name="sector" id="sector" required>
            <option disabled selected></option>
            <option value="labor">LABOR FORCE</option>
            <option value="unemployed">UNEMPLOYED</option>
            <option value="osy">OUT OF SCHOOL YOUTH (OSY)</option>
            <option value="osc">OUT OF SCHOOL CHILDREN (OSC)</option>
            <option value="pwd">PWD</option>
            <option value="ofw">OFW</option>
            <option value="solo">SOLO PARENTS</option>
            <option value="ips">INDIGENOUS PEOPLE (IPs)</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit-purok-ranking">Register</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>

<!-- Modal for edit Purok Ranking ------------------------------------------ -->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <input type="hidden" name="update_id" id="update_id_purok_ranking" value="<?php echo $id; ?>">
        <div class="form-group">
          <input type="text" name="fullname" id="fullname_purok" class="form-control" placeHolder="Fullname" required>
        </div>
        <div class="form-group">
          <input type="text" name="age" id="age_purok" class="form-control" placeHolder="Age" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select name="gender" id="gender_purok" required>
            <option disabled selected></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <label for="address">purok:</label>
          <select name="address" id="address" required>
            <option disabled selected></option>
            <option value="purok1">Purok 1</option>
            <option value="purok2">Purok 2</option>
            <option value="purok3">Purok 3</option>
            <option value="purok4">Purok 4</option>
            <option value="purok5">Purok 5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sector">sector:</label>
          <select name="sector" id="sector" required>
            <option disabled selected></option>
            <option value="labor">LABOR FORCE</option>
            <option value="unemployed">UNEMPLOYED</option>
            <option value="osy">OUT OF SCHOOL YOUTH (OSY)</option>
            <option value="osc">OUT OF SCHOOL CHILDREN (OSC)</option>
            <option value="pwd">PWD</option>
            <option value="ofw">OFW</option>
            <option value="solo">SOLO PARENTS</option>
            <option value="ips">INDIGENOUS PEOPLE (IPs)</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="update-purok-ranking">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>


<!-- Cencus -->

<!-- Modal for add Census------------------------------------------ -->
<div class="modal fade" id="createModalCencus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <div class="form-group">
          <input type="text" name="fullname" id="fullname" class="form-control" placeHolder="Fullname" required>
        </div>
        <div class="form-group">
          <input type="text" name="address" id="address" class="form-control" placeHolder="Address" required>
        </div>
        <div class="form-group">
          <input type="text" name="dateofbirth" id="dateofbirth" class="form-control" placeHolder="Date of Birth" required>
        </div>
        <div class="form-group">
          <input type="text" name="placeofbirth" id="placeofbirth" class="form-control" placeHolder="Place of Birth" required>
        </div>
        <div class="form-group">
          <label for="sex">Sex:</label>
          <select name="sex" id="sex" required>
            <option disabled selected></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="civilstatus" id="civilstatus" class="form-control" placeHolder="Civil status" required>
        </div>
        <div class="form-group">
          <input type="text" name="occupation" id="occupation" class="form-control" placeHolder="Occupation" required>
        </div>
        <div class="form-group">
          <input type="text" name="citizenship" id="citizenship" class="form-control" placeHolder="Citizenship" required>
        </div>
        <div class="form-group">
          <input type="text" name="relationship" id="relationship" class="form-control" placeHolder="Relationship to household head" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit-census">Register</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>

<!-- Modal for edit Census ------------------------------------------ -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="m-3" action="#" method="post">
        <input type="hidden" name="update_id" id="update_id_census" value="<?php echo $id; ?>">
        <div class="form-group">
          <input type="text" name="fullname" id="fullname_census" class="form-control" placeHolder="Fullname" required>
        </div>
        <div class="form-group">
          <input type="text" name="address" id="address_census" class="form-control" placeHolder="Address" required>
        </div>
        <div class="form-group">
          <input type="text" name="dateofbirth" id="dateofbirth_census" class="form-control" placeHolder="Date of Birth" required>
        </div>
        <div class="form-group">
          <input type="text" name="placeofbirth" id="placeofbirth_census" class="form-control" placeHolder="Place of Birth" required>
        </div>
        <div class="form-group">
          <label for="sex">Sex:</label>
          <select name="sex" id="sex_census" required>
            <option disabled selected></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="civilstatus" id="civilstatus_census" class="form-control" placeHolder="Civil status" required>
        </div>
        <div class="form-group">
          <input type="text" name="occupation" id="occupation_census" class="form-control" placeHolder="Occupation" required>
        </div>
        <div class="form-group">
          <input type="text" name="citizenship" id="citizenship_census" class="form-control" placeHolder="Citizenship" required>
        </div>
        <div class="form-group">
          <input type="text" name="relationship" id="relationship_census" class="form-control" placeHolder="Relationship to household head" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="update-census">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>