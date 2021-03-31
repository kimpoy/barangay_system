<?php
/* Sucess Message for UPDATE */
function message_update_success()
{
  $message = '';
  if (isset($_SESSION['updated'])) {
    $message = '<div class="alert alert-success fade show">';
    $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    $message .= ' <strong>SUCCESS! </strong>';
    $message .= htmlentities($_SESSION['updated']);
    $message .= '</div>';

    //clear message after use
    $_SESSION['updated'] = null;
    return $message;
  }
}

/* UPDATE ----------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/* update account admin */
if (isset($_POST['update'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
  $id = $_POST['update_id'];

  $conn->query("UPDATE users SET username='$user', password='$hashedPass' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin_setting.php");
  exit();

  $conn->close();
}

/* update account user */
if (isset($_POST['update-user'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
  $id = $_POST['update_id'];

  $conn->query("UPDATE users SET username='$user', password='$hashedPass' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: user.php");
  exit();

  $conn->close();
}

/* UPDATE MEDICAL----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-medical'])) {
  $fullname = $_POST['fullname'];
  $work = $_POST['work'];
  $purpose = $_POST['purpose'];
  $id = $_POST['update_id'];

  $conn->query("UPDATE medical SET fullname='$fullname', work='$work', purpose='$purpose' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}


/* UPDATE SCHOLARSHIP----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-scholarship'])) {
  $fullname = $_POST['fullname'];
  $mother = $_POST['mother'];
  $workMother = $_POST['workMother'];
  $father = $_POST['father'];
  $workFather = $_POST['workFather'];
  $earnings = $_POST['earnings'];
  $id = $_POST['update_id'];

  $conn->query("UPDATE scholarship SET fullname='$fullname', 
  mother='$mother', 
  workMother='$workMother', 
  father='$father', 
  workFather='$workFather', 
  earnings='$earnings' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE CLEARANCE----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-clearance'])) {
  $fullname = $_POST['fullname'];
  $age = $_POST['age'];
  $abroad = $_POST['abroad'];
  $loc = $_POST['loc'];
  $scholarship = $_POST['scholarship'];
  $policeClearance = $_POST['policeClearance'];
  $nbi = $_POST['nbi'];
  $loanPurposes = $_POST['loanPurposes'];
  $id = $_POST['update_id'];

  $conn->query("UPDATE brgyclearance SET fullname='$fullname', 
  age='$age', 
  abroad='$abroad', 
  loc='$loc', 
  scholarship='$scholarship', 
  policeClearance='$policeClearance', 
  nbi='$nbi', 
  loanPurposes='$loanPurposes' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE BUSINESS CLEARANCE----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-business'])) {
  $bname = $_POST['bname'];
  $loc = $_POST['loc'];
  $operator = $_POST['operator'];
  $addr = $_POST['addr'];
  $id = $_POST['update_id'];

  $conn->query("UPDATE business SET bname='$bname', loc='$loc', operator='$operator', addr='$addr' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE RESIDENCY----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-residency'])) {
  $fullname = $_POST['fullname'];
  $id = $_POST['update_id'];

  $conn->query("UPDATE residency SET fullname='$fullname' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE APPOINTMENTS----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-appointments'])) {
  $textInputs = $_POST['textInputs'];
  $id = $_POST['update_id'];

  $conn->query("UPDATE appointments SET textInputs='$textInputs' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE PUROK RANKING----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-purok-ranking'])) {
  $fullname = $_POST['fullname'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $sector = $_POST['sector'];
  $id = $_POST['update_id'];

  $conn->query("UPDATE purokranking SET fullname='$fullname', age='$age', gender='$gender', address='$address', sector='$sector' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE CENSUS----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-census'])) {
  $fullname = $_POST['fullname'];
  $address = $_POST['address'];
  $dateofbirth = $_POST['dateofbirth'];
  $placeofbirth = $_POST['placeofbirth'];
  $sex = $_POST['sex'];
  $civilstatus = $_POST['civilstatus'];
  $occupation = $_POST['occupation'];
  $citizenship = $_POST['citizenship'];
  $relationship = $_POST['relationship'];
  $id = $_POST['update_id'];

  $conn->query("UPDATE census SET fullname='$fullname', address='$address', dateofbirth='$dateofbirth', placeofbirth='$placeofbirth', sex='$sex', civilstatus='$civilstatus', occupation='$occupation', citizenship='$citizenship', relationship='$relationship' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: census.php");
  exit();

  $conn->close();
}
