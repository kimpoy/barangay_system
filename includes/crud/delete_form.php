<?php
/* Sucess Message */
function message_delete_success()
{
     $message = '';
     if (isset($_SESSION['deleted'])) {
          $message = '<div class="alert alert-danger fade show">';
          $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
          $message .= ' <strong>SUCCESS! </strong>';
          $message .= htmlentities($_SESSION['deleted']);
          $message .= '</div>';

          //clear message after use
          $_SESSION['deleted'] = null;
          return $message;
     }
}

/* DELETE ----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
$id = 0;
$username = '';
$password = '';


/* delete account admin */
if (isset($_GET['delete'])) {
     $id = $_GET['delete'];
     $conn->query("DELETE FROM users WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: admin_setting.php");
     exit();

     $conn->close();
}

/* delete account user */
if (isset($_GET['deleteUser'])) {
     $id = $_GET['deleteUser'];
     $conn->query("DELETE FROM users WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: user.php");
     exit();
     $conn->close();
}


/* DELETE MEDICAL----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_GET['deleteMedical'])) {
     $id = $_GET['deleteMedical'];
     $conn->query("DELETE FROM medical WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: admin.php");
     exit();

     $conn->close();
}


/* DELETE SCHOLARSHIP----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_GET['deleteScholarship'])) {
     $id = $_GET['deleteScholarship'];
     $conn->query("DELETE FROM scholarship WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: admin.php");
     exit();

     $conn->close();
}


/* DELETE BRGY CLEARANCE----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_GET['deleteClearance'])) {
     $id = $_GET['deleteClearance'];
     $conn->query("DELETE FROM brgyclearance WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: admin.php");
     exit();

     $conn->close();
}


/* DELETE BUSINESS CLEARANCE----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_GET['deleteBusiness'])) {
     $id = $_GET['deleteBusiness'];
     $conn->query("DELETE FROM business WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: admin.php");
     exit();

     $conn->close();
}

/* DELETE RESIDENCY----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_GET['deleteResidency'])) {
     $id = $_GET['deleteResidency'];
     $conn->query("DELETE FROM residency WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: admin.php");
     exit();

     $conn->close();
}

/* DELETE APPOINTMENTS----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_GET['deleteAppointments'])) {
     $id = $_GET['deleteAppointments'];
     $conn->query("DELETE FROM appointments WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: admin.php");
     exit();

     $conn->close();
}

/* DELETE PUROK RANKING----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_GET['deletePurokRanking'])) {
     $id = $_GET['deletePurokRanking'];
     $conn->query("DELETE FROM purokranking WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: admin.php");
     exit();

     $conn->close();
}
/* DELETE CENSUS----------------------------------------------------------------------------------------------------------------------------------------------- */
if (isset($_GET['deleteCensus'])) {
     $id = $_GET['deleteCensus'];
     $conn->query("DELETE FROM census WHERE id=$id") or die($conn->error());
     $_SESSION['deleted'] = "Item has been deleted!";
     header("Location: census.php");
     exit();

     $conn->close();
}
