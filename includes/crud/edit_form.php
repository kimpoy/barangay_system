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
  $user = mysqli_real_escape_string($conn, $_POST['username']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);
  $hashedPass = mysqli_real_escape_string($conn, password_hash($pass, PASSWORD_DEFAULT));
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

  $conn->query("UPDATE users SET username='$user', password='$hashedPass' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin_setting.php");
  exit();

  $conn->close();
}

/* update account user */
if (isset($_POST['update-user'])) {
  $user = mysqli_real_escape_string($conn, $_POST['username']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);
  $hashedPass = mysqli_real_escape_string($conn, password_hash($pass, PASSWORD_DEFAULT));
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

  $conn->query("UPDATE users SET username='$user', password='$hashedPass' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: user.php");
  exit();

  $conn->close();
}

/* UPDATE MEDICAL----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-medical'])) {
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $work = mysqli_real_escape_string($conn, $_POST['work']);
  $purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

  $conn->query("UPDATE medical SET fullname='$fullname', work='$work', purpose='$purpose' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}


/* UPDATE SCHOLARSHIP----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-scholarship'])) {
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $mother = mysqli_real_escape_string($conn, $_POST['mother']);
  $workMother = mysqli_real_escape_string($conn, $_POST['workMother']);
  $father = mysqli_real_escape_string($conn, $_POST['father']);
  $workFather = mysqli_real_escape_string($conn, $_POST['workFather']);
  $earnings = mysqli_real_escape_string($conn, $_POST['earnings']);
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

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
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $abroad = mysqli_real_escape_string($conn, $_POST['abroad']);
  $loc = mysqli_real_escape_string($conn, $_POST['loc']);
  $scholarship = mysqli_real_escape_string($conn, $_POST['scholarship']);
  $policeClearance = mysqli_real_escape_string($conn, $_POST['policeClearance']);
  $nbi = mysqli_real_escape_string($conn, $_POST['nbi']);
  $loanPurposes = mysqli_real_escape_string($conn, $_POST['loanPurposes']);
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

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
  $bname = mysqli_real_escape_string($conn, $_POST['bname']);
  $loc = mysqli_real_escape_string($conn, $_POST['loc']);
  $operator = mysqli_real_escape_string($conn, $_POST['operator']);
  $addr = mysqli_real_escape_string($conn, $_POST['addr']);
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

  $conn->query("UPDATE business SET bname='$bname', loc='$loc', operator='$operator', addr='$addr' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE RESIDENCY----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-residency'])) {
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

  $conn->query("UPDATE residency SET fullname='$fullname' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE APPOINTMENTS----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-appointments'])) {
  $textInputs = mysqli_real_escape_string($conn, $_POST['textInputs']);
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

  $conn->query("UPDATE appointments SET textInputs='$textInputs' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE PUROK RANKING----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-purok-ranking'])) {
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $sector = mysqli_real_escape_string($conn, $_POST['sector']);
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

  $conn->query("UPDATE purokranking SET fullname='$fullname', age='$age', gender='$gender', address='$address', sector='$sector' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: admin.php");
  exit();

  $conn->close();
}

/* UPDATE CENSUS----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_POST['update-census'])) {
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
  $no = mysqli_real_escape_string($conn, $_POST['no']);
  $street = mysqli_real_escape_string($conn, $_POST['street']);
  $sub = mysqli_real_escape_string($conn, $_POST['sub']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $province = mysqli_real_escape_string($conn, $_POST['province']);
  $dateofbirth = mysqli_real_escape_string($conn, $_POST['dateofbirth']);
  $placeofbirth = mysqli_real_escape_string($conn, $_POST['placeofbirth']);
  $sex = mysqli_real_escape_string($conn, $_POST['sex']);
  $civilstatus = mysqli_real_escape_string($conn, $_POST['civilstatus']);
  $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
  $citizenship = mysqli_real_escape_string($conn, $_POST['citizenship']);
  $relationship = mysqli_real_escape_string($conn, $_POST['relationship']);
  $id = mysqli_real_escape_string($conn, $_POST['update_id']);

  $conn->query("UPDATE census SET firstname='$firstname',lastname='$lastname',middlename='$middlename',no='$no',street='$street',sub='$sub',city='$city',province='$province', dateofbirth='$dateofbirth', placeofbirth='$placeofbirth', sex='$sex', civilstatus='$civilstatus', occupation='$occupation', citizenship='$citizenship', relationship='$relationship' WHERE id='$id'") or die($conn->error());
  $_SESSION['updated'] = "Item has been updated!";
  header("Location: census.php");
  exit();

  $conn->close();
}
