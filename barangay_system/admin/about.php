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


<?php
/* HEADER */
require_once '../includes/admin/HF/header.php';
?>
<div class="d-flex justify-content-center w-75 mb-5 mt-5" style="margin:auto; ">
    <h2>Instructions</h2>
</div>
<div class="d-flex w-75 p-3 mr-auto ml-auto background-accent">

    <div class="col-6">
        <ul>
            <li>
                <h4>Home Menu</h4>
                <ol>
                    <li>
                        <h5>Requirements</h5>
                        <p>-Select an item of your choice to manipulate data</p>
                    </li>
                    <li>
                        <h5>Appointments</h5>
                        <p>-Select an item of your choice to manipulate data</p>
                    </li>
                    <li>
                        <h5>Total Request</h5>
                        <p>-Views the Total Requests in graph and table form</p>
                    </li>
                    <li>
                        <h5>Most Requested</h5>
                        <p>-Views the Most Requested in graph and table form</p>
                    </li>
                    <li>
                        <h5>Purok Ranking</h5>
                        <p>-Views the Population by age and sector</p>
                        <p>-Views the Total Population and can select an item of your choice to manipulate data</p>
                    </li>
                </ol>
            </li>
        </ul>
    </div>
    <div class="col-6">
        <ul>
            <li>
                <h4>Admin Menu</h4>
                <p>-Select an item of your choice to manipulate admin accounts</p>
            </li>
            <li>
                <h4>User Menu</h4>
                <p>-Select an item of your choice to manipulate user accounts</p>
            </li>
            <li>
                <h4>Census</h4>
                <p>-Views the offical count of the population</p>
                <p>-Select an item of your choice to manipulate data</p>
            </li>
        </ul>
    </div>
</div>

</body>

</html>