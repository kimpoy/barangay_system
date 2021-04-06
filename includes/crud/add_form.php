<?php
/* Sucess Message */
function message_add_success()
{
    $message = '';
    if (isset($_SESSION['added'])) {
        $message = '<div class="alert alert-success fade show">';
        $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $message .= ' <strong>SUCCESS! </strong>';
        $message .= htmlentities($_SESSION['added']);
        $message .= '</div>';

        //clear message after use
        $_SESSION['added'] = null;
        return $message;
    }
}

function message_add_error()
{
    $message = '';
    if (isset($_SESSION['added_error'])) {
        $message = '<div class="alert alert-success fade show">';
        $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $message .= ' <strong>ERROR! </strong>';
        $message .= htmlentities($_SESSION['added_error']);
        $message .= '</div>';

        //clear message after use
        $_SESSION['added_error'] = null;
        return $message;
    }
}
/* USER ------------------------------------------------------------------------------------------------------- */
/* INDIGENCY MEDICAL  */
if (isset($_POST['submit-med'])) {
    $fullname = $_POST['fullname'];
    $work = $_POST['work'];
    $purpose = $_POST['purpose'];

    $sql = "SELECT fullname FROM medical WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: user_index.php");
        exit();
    } else {
        $sql = "INSERT INTO medical (fullname, work, purpose, date) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: user_index.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssss", $fullname, $work, $purpose, date('Y-m-d'));
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: user_index.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* INDIGENCY SCHOLARSHIP */
if (isset($_POST['submit-scho'])) {
    $fullname = strtolower($_POST['fullname']);
    $mother = strtolower($_POST['mother']);
    $workMother = strtolower($_POST['workMother']);
    $father = strtolower($_POST['father']);
    $workFather = strtolower($_POST['workFather']);
    $earnings = $_POST['earnings'];

    $sql = "SELECT fullname FROM scholarship WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: user_index.php");
        exit();
    } else {
        $sql = "INSERT INTO scholarship (fullname, mother, workMother, father, workFather, earnings) VALUES (?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: user_index.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssssss", $fullname, $mother, $workMother, $father, $workFather, $earnings);
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: user_index.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* BUSINESS CLEARANCE  */
if (isset($_POST['submit-business'])) {
    $bname = strtolower($_POST['bname']);
    $loc = strtolower($_POST['loc']);
    $operator = strtolower($_POST['operator']);
    $addr = strtolower($_POST['addr']);

    $sql = "SELECT bname FROM business WHERE bname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: user_index.php");
        exit();
    } else {
        $sql = "INSERT INTO business (bname, loc, operator, addr) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: user_index.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssss", $bname, $loc, $operator, $addr);
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: user_index.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* RESIDENCY */
if (isset($_POST['submit-residency'])) {
    $fullname = strtolower($_POST['fullname']);

    $sql = "SELECT fullname FROM residency WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: user_index.php");
        exit();
    } else {
        $sql = "INSERT INTO residency (fullname) VALUES (?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: user_index.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $fullname);
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: user_index.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* BRGY CLEARANCE */
if (isset($_POST['submit-brgy'])) {
    $fullname = strtolower($_POST['fullname']);
    $age = strtolower($_POST['age']);
    $abroad = strtolower($_POST['abroad']);
    $loc = strtolower($_POST['loc']);
    $scholarship = strtolower($_POST['scholarship']);
    $policeClearance = strtolower($_POST['policeClearance']);
    $nbi = strtolower($_POST['nbi']);
    $loanPurposes = strtolower($_POST['loanPurposes']);

    $sql = "SELECT fullname FROM brgyClearance WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: user_index.php");
        exit();
    } else {
        $sql = "INSERT INTO brgyClearance (fullname, age, abroad, loc, scholarship, policeClearance, nbi, loanPurposes) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: user_index.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssssssss", $fullname, $age, $abroad, $loc, $scholarship, $policeClearance, $nbi, $loanPurposes);
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: user_index.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* APPOINTMENTS */
if (isset($_POST['submit-appointments'])) {
    $textInputs = strtolower($_POST['textInputs']);

    $sql = "SELECT textInputs FROM appointments WHERE textInputs = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: user_index.php");
        exit();
    } else {
        $sql = "INSERT INTO appointments (textInputs) VALUES (?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: user_index.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $textInputs);
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: user_index.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* ADMIN ------------------------------------------------------------------------------------------------------- */
/* INDIGENCY MEDICAL ADMIN  */
if (isset($_POST['submit-med-admin'])) {
    $fullname = $_POST['fullname'];
    $work = $_POST['work'];
    $purpose = $_POST['purpose'];

    $sql = "SELECT fullname FROM medical WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: admin.php");
        exit();
    } else {
        $sql = "INSERT INTO medical (fullname, work, purpose, date) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: admin.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssss", $fullname, $work, $purpose, date("Y-m-d"));
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: admin.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* INDIGENCY SCHOLARSHIP ADMIN */
if (isset($_POST['submit-scho-admin'])) {
    $fullname = strtolower($_POST['fullname']);
    $mother = strtolower($_POST['mother']);
    $workMother = strtolower($_POST['workMother']);
    $father = strtolower($_POST['father']);
    $workFather = strtolower($_POST['workFather']);
    $earnings = $_POST['earnings'];

    $sql = "SELECT fullname FROM scholarship WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: admin.php");
        exit();
    } else {
        $sql = "INSERT INTO scholarship (fullname, mother, workMother, father, workFather, earnings, date) VALUES (?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: admin.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sssssss", $fullname, $mother, $workMother, $father, $workFather, $earnings, date("Y-m-d"));
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: admin.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* BUSINESS CLEARANCE ADMIN */
if (isset($_POST['submit-business-admin'])) {
    $bname = strtolower($_POST['bname']);
    $loc = strtolower($_POST['loc']);
    $operator = strtolower($_POST['operator']);
    $addr = strtolower($_POST['addr']);

    $sql = "SELECT bname FROM business WHERE bname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: admin.php");
        exit();
    } else {
        $sql = "INSERT INTO business (bname, loc, operator, addr, date) VALUES (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: admin.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sssss", $bname, $loc, $operator, $addr, date("Y-m-d"));
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: admin.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* RESIDENCY ADMIN */
if (isset($_POST['submit-residency-admin'])) {
    $fullname = strtolower($_POST['fullname']);

    $sql = "SELECT fullname FROM residency WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: admin.php");
        exit();
    } else {
        $sql = "INSERT INTO residency (fullname, date) VALUES (?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: admin.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $fullname, date("Y-m-d"));
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: admin.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* BRGY CLEARANCE ADMIN */
if (isset($_POST['submit-brgy-admin'])) {
    $fullname = strtolower($_POST['fullname']);
    $age = strtolower($_POST['age']);
    $abroad = strtolower($_POST['abroad']);
    $loc = strtolower($_POST['loc']);
    $scholarship = strtolower($_POST['scholarship']);
    $policeClearance = strtolower($_POST['policeClearance']);
    $nbi = strtolower($_POST['nbi']);
    $loanPurposes = strtolower($_POST['loanPurposes']);

    $sql = "SELECT fullname FROM brgyClearance WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: admin.php");
        exit();
    } else {
        $sql = "INSERT INTO brgyClearance (fullname, age, abroad, loc, scholarship, policeClearance, nbi, loanPurposes, date) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: admin.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sssssssss", $fullname, $age, $abroad, $loc, $scholarship, $policeClearance, $nbi, $loanPurposes, date("Y-m-d"));
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: admin.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* APPOINTMENTS ADMIN */
if (isset($_POST['submit-appointments-admin'])) {
    $textInputs = strtolower($_POST['textInputs']);

    $sql = "SELECT textInputs FROM appointments WHERE textInputs = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: admin.php");
        exit();
    } else {
        $sql = "INSERT INTO appointments (textInputs, date) VALUES (?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: admin.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $textInputs, date("Y-m-d"));
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: admin.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

/* PUROK RANKING */
if (isset($_POST['submit-purok-ranking'])) {
    $fullname = strtolower($_POST['fullname']);
    $age = strtolower($_POST['age']);
    $gender = strtolower($_POST['gender']);
    $address = strtolower($_POST['address']);
    $sector = strtolower($_POST['sector']);

    $sql = "SELECT fullname FROM purokranking WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: admin.php");
        exit();
    } else {
        $sql = "INSERT INTO purokranking (fullname, age, gender, address,sector) VALUES (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: admin.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sssss", $fullname, $age, $gender, $address, $sector);
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: admin.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


/* CENSUS */
if (isset($_POST['submit-census'])) {
    $firstname = strtolower($_POST['firstname']);
    $lastname = strtolower($_POST['lastname']);
    $middlename = strtolower($_POST['middlename']);
    $no = strtolower($_POST['no']);
    $street = strtolower($_POST['street']);
    $sub = strtolower($_POST['sub']);
    $city = strtolower($_POST['city']);
    $province = strtolower($_POST['province']);
    $dateofbirth = strtolower($_POST['dateofbirth']);
    $placeofbirth = strtolower($_POST['placeofbirth']);
    $sex = strtolower($_POST['sex']);
    $civilstatus = strtolower($_POST['civilstatus']);
    $occupation = strtolower($_POST['occupation']);
    $citizenship = strtolower($_POST['citizenship']);
    $relationship = strtolower($_POST['relationship']);

    $sql = "SELECT fullname FROM census WHERE fullname = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['added_error'] = "SQL ERROR";
        header("Location: census.php");
        exit();
    } else {
        $sql = "INSERT INTO census (firstname, lastname, middlename, no, street, sub, city, province, dateofbirth, placeofbirth, sex, civilstatus, occupation, citizenship, relationship) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $_SESSION['added_error'] = "SQL ERROR";
            header("Location: census.php");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sssssssssssssss", $firstname, $lastname, $middlename, $no, $street, $sub, $city, $province, $dateofbirth, $placeofbirth, $sex, $civilstatus, $occupation, $citizenship, $relationship);
            mysqli_stmt_execute($stmt);
            $_SESSION['added'] = "Item has been added!";
            header("Location: census.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
