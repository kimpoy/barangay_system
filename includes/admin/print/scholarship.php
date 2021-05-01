<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Layout SCHOLARSHIP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
</head>

<body>
    <div class="print-wrapper">
        <button class="button print-button" id="doPrint">Print</button>
    </div>
    <div id="printDiv">
        <div class="top-page">
            <img class="logo" src="img/llogo.jpg" alt="Left Logo">
            <div class="header-text">
                <p>REPUBLIC OF THE PHILIPPINES</p>
                <p>PROVINCE OF PAMPANGA</p>
                <h3>MUNICIPALITY OF STA. ANA</h3>
                <h2>BARANGAY SAN ROQUE</h2>
                <h2>OFFICE OF THE PUNONG BARANGAY</h2>
            </div>
            <img class="logo" src="img/rlogo.jpg" alt="Right Logo">
        </div>

        <div class="content-wrapper">
            <div class="left-content">
                <?php
                $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM officials") or die($mysqli->error);
                ?>
                <?php
                while ($row = $result->fetch_assoc()) :
                ?>
                    <h3 class="brgy-official">BARANGAY OFFICIALS</h3>
                    <h4><?php echo $row['chairman']; ?></h4>
                    <p>Punong Barangay</p>
                    <h3>KAGAWAD:</h3>
                    <h4><?php echo $row['agriculture']; ?></h4>
                    <p>Committee on Agriculture</p>
                    <h4><?php echo $row['education']; ?></h4>
                    <p>Committee on Education</p>
                    <h4><?php echo $row['appropriations']; ?></h4>
                    <p>Committee on Appropriations</p>
                    <h4><?php echo $row['infrastructure']; ?></h4>
                    <p>Committee on Public Works & Infrastructure </p>
                    <h4><?php echo $row['peace']; ?></h4>
                    <p>Committee on Peace & Order</p>
                    <h4><?php echo $row['health']; ?></h4>
                    <p>Committee on Health</p>
                    <h4><?php echo $row['protection']; ?></h4>
                    <p>Committee on Environmental Protection</p>
                    <h4><?php echo $row['treasurer']; ?></h4>
                    <p>Barangay Treasurer</p>
                    <h4><?php echo $row['secretary']; ?></h4>
                    <p>Barangay Secretary</p>


                    <div class="ctc-wrapper">
                        <div>
                            <label for="ctc">CTC No.</label>
                            <input type="text" name="ctc" id="ctc" value="">
                        </div>

                        <div>
                            <label for="ison">Issued on:</label>
                            <input type="text" name="ison" id="ison" value="">
                        </div>

                        <div>
                            <label for="isat">Issued at:</label>
                            <input type="text" name="isat" id="isat" value="">
                        </div>

                    </div>
            </div>
            <!-- RIGHT CONTENT--------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="right-content">
                <div class="header-right">
                    <h1>CERTIFICATE OF INDIGENCY</h1>
                    <h3>( S C H O L A R S H I P )</h3>
                </div>
                <p>To Whom It May Concern:</p>
                <p class="indention">This is to certify that spouses <input class="field-form" type="text" value="<?php echo $_GET['father']; ?>" readonly> and <input class="field-form" type="text" value="<?php echo $_GET['mother']; ?>" readonly>
                    are bonafide residents of this barangay. This is to certify further that <input class="field-form" type="text" value="<?php echo $_GET['father']; ?>" readonly> is a <input class="field-form" type="text" value="<?php echo $_GET['workFather']; ?>" readonly>
                    and <input class="field-form" type="text" value="<?php echo $_GET['mother']; ?>" readonly> is a <input class="field-form" type="text" value="<?php echo $_GET['workMother']; ?>" readonly> and is earning <input class="field-form" style="width: 30em;" type="text" value="<?php echo $_GET['earnings']; ?>" readonly> annually. Their family is considered one of the indigents of this Barangay.</p>

                <p class="indention">This certification is being issued this <input class="field-form" type="text" value="<?php echo date("jS"); ?>" readonly>
                    day of <input class="field-form" type="text" value="<?php echo date("F"); ?>" readonly>, 2021 upon the request of the above-mentioned parents for scholarship/summer job/educational assistance application of their daughter/son
                    <input class="field-form" type="text" value="<?php echo $_GET['fullname']; ?>" readonly>.
                </p>

                <div class="right-content-sign">
                    <h3><?php echo $row['chairman']; ?></h3>
                    <p>Punong Barangay</p>
                </div>

                <p class="p">Prepared by:</p>
                <h3><?php echo $row['secretary']; ?></h3>
                <p class="bottom-p">Barangay Secretary </p>
            <?php endwhile; ?>

            </div>
        </div>
    </div>




    <script>
        document.getElementById("doPrint").addEventListener("click", function() {
            var printContents = document.getElementById('printDiv').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        });
    </script>
</body>

</html>