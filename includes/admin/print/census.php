<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Census</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <style>
        @media print {
            @page {
                size: A4;
            }
        }
    </style>
</head>

<body>
    <div class="print-wrapper">
        <button class="button print-button" id="doPrint">Print</button>
    </div>
    <div class="box" id="printDiv">
        <h2 class="title">Individual Record of Barangay Inhabitants</h2>
        <div class="to-right">
            <h4 class="box-content">HOUSEHOLD NUMBER (HN): </h4>
            <input class="field-form" style="width: 10em;" type="text" value="">
        </div>
        <div class="to-left">
            <h4 class="box-content">Region: </h4>
            <input class="field-form" style="width: 10em;" type="text" value="III" readonly>
        </div>
        <div class="to-left">
            <h4 class="box-content">Municipality: </h4>
            <input class="field-form box-content" style="width: 30em;" type="text" value="<?php echo $_GET['city']; ?>" readonly>
            <h4 class="box-content">Barangay: </h4>
            <input class="field-form" style="width: 30em;" type="text" value="<?php echo $_GET['sub']; ?>" readonly>
        </div>
        <div>
            <h4 class="to-left">Personal Information</h4>
            <div class="to-left">
                <h4 class="box-content">Lastname</h4>
                <input class="field-form box-content" style="width: 30em;" type="text" value="<?php echo $_GET['lastname']; ?>" readonly>
                <h4 class="box-content">Qualifier</h4>
                <input class="field-form" style="width: 10em;" type="text" value="" readonly>
            </div>
            <div class="to-left">
                <h4 class="box-content">Firstname</h4>
                <input class="field-form box-content" style="width: 30em;" type="text" value="<?php echo $_GET['firstname']; ?>" readonly>
            </div>
            <div class="to-left">
                <h4 class="box-content">Middlename</h4>
                <input class="field-form box-content" style="width: 30em;" type="text" value="<?php echo $_GET['middlename']; ?>" readonly>
            </div>
            <div class="to-left">
                <h4 class="box-content">Address</h4>
                <p class="box-content">No. </p>
                <input class="field-form box-content" style="width: 5em;" type="text" value="<?php echo $_GET['no']; ?>" readonly>
                <p class="box-content">Street </p>
                <input class="field-form box-content" style="width: 10em;" type="text" value="<?php echo $_GET['street']; ?>" readonly>
                <p class="box-content">Subdivision/Zone/Sitio/Purok </p>
                <input class="field-form box-content" style="width: 10em;" type="text" value="<?php echo $_GET['sub']; ?>" readonly>
            </div>
            <div class="to-left">
                <p class="box-content">City/Municipality </p>
                <input class="field-form box-content" style="width: 10em;" type="text" value="<?php echo $_GET['city']; ?>" readonly>
                <p class="box-content">Province</p>
                <input class="field-form box-content" style="width: 10em;" type="text" value="<?php echo $_GET['province']; ?>" readonly>
            </div>
            <div class="to-left">
                <h4 class="box-content">Date of Birth</h4>
                <p class="box-content">mm-dd-yyyy </p>
                <input class="field-form box-content" style="width: 10em;" type="text" value="<?php echo $_GET['dateofbirth']; ?>" readonly>
            </div>
            <div class="to-left">
                <h4 class="box-content">Place of Birth</h4>
                <input class="field-form box-content" style="width: 40em;" type="text" value="<?php echo $_GET['placeofbirth']; ?>" readonly>
            </div>
            <div class="to-left ">
                <h4 class="box-content">Sex</h4>
                <?php
                $sex = $_GET['sex'];
                if ($sex == 'male') :
                ?>
                    <label for="male" class="box-content">Male
                        <input type="checkbox" id="male" name="male" value="male" checked>
                    </label>
                <?php
                else :
                ?>
                    <label for="male" class="box-content">Male
                        <input type="checkbox" id="male" name="male" value="male">
                    </label>

                <?php endif ?>
                <?php
                if ($sex == 'female') :
                ?>
                    <label for="female" class="box-content">Female
                        <input type="checkbox" id="female" name="female" value="female" checked>
                    </label>
                <?php
                else :
                ?>
                    <label for="female" class="box-content">Female
                        <input type="checkbox" id="female" name="female" value="female">
                    </label>
                <?php endif ?>
            </div>
            <div class="to-left ">
                <h4 class="box-content">Civil Status</h4>
                <?php
                $civilstatus = $_GET['civilstatus'];
                if ($civilstatus == 'single') :
                ?>
                    <label for="single" class="box-content">Single
                        <input type="checkbox" id="single" name="single" value="single" checked>
                    </label>
                <?php
                else :
                ?>
                    <label for="single" class="box-content">Single
                        <input type="checkbox" id="single" name="single" value="single">
                    </label>
                <?php endif ?>
                <?php
                if ($civilstatus == 'married') :
                ?>
                    <label for="married" class="box-content">Married
                        <input type="checkbox" id="married" name="married" value="married" checked>
                    </label>
                <?php
                else :
                ?>
                    <label for="married" class="box-content">Married
                        <input type="checkbox" id="married" name="married" value="married">
                    </label>
                <?php endif ?>
                <?php
                if ($civilstatus == 'widower') :
                ?>
                    <label for="widower" class="box-content">Widower
                        <input type="checkbox" id="widower" name="widower" value="widower" checked>
                    </label>
                <?php
                else :
                ?>
                    <label for="widower" class="box-content">Widower
                        <input type="checkbox" id="widower" name="widower" value="widower">
                    </label>
                <?php endif ?>
                <?php
                if ($civilstatus == 'separated') :
                ?>
                    <label for="separated" class="box-content">Separated
                        <input type="checkbox" id="separated" name="separated" value="separated" checked>
                    </label>
                <?php
                else :
                ?>
                    <label for="separated" class="box-content">Separated
                        <input type="checkbox" id="separated" name="separated" value="separated">
                    </label>
                <?php endif ?>
            </div>
            <div class="to-left">
                <h4 class="box-content">Occupation</h4>
                <input class="field-form box-content" style="width: 40em;" type="text" value="<?php echo $_GET['occupation']; ?>" readonly>
            </div>
            <div class="to-left">
                <h4 class="box-content">Citizenship</h4>
                <input class="field-form box-content" style="width: 40em;" type="text" value="<?php echo $_GET['citizenship']; ?>" readonly>
            </div>
            <div class="to-left">
                <h4 class="box-content">Relationship to Household Head</h4>
                <input class="field-form box-content" style="width: 40em;" type="text" value="<?php echo $_GET['relationship']; ?>" readonly>
            </div>
            <div class="to-left">
                <p>I hereby certify that the above information are true and correct to the best of my knowledge</p>
            </div>
            <div class="to-right">
                <div class="center-sign">
                    <input class="field-form box-content title" style="width: 40em;" type="text" value="" readonly>
                    <p class="title">Name/Signature of Person Accomplishing this Form</p>
                </div>
            </div>
            <div>
                <div class="between-space">
                    <div class="to-left">
                        <div class="center-sign">
                            <h4 class="box-content">Attested by:</h4>
                            <input class="field-form box-content to-left title" style="width: 25em;" type="text" value="FLORDELYN V. GREGORIO" readonly>
                            <p class="title">Barangay Secretary</p>
                        </div>
                    </div>
                    <div class="to-right" style="width:50%; margin:auto;">
                        <div class="center-sign">
                            <input class="field-form box-content to-left title" style="width: 22em;" type="text" value="<?php echo date("m-d-Y");  ?>">
                            <p class="title">Date Accomplished</p>
                            <div class="between-space" style="width: 80%; margin:auto;">
                                <div>
                                    <div class="box-shape"></div>
                                    <p class="title">Left</p>
                                    <p class="title">Thumbmark</p>
                                </div>
                                <div>
                                    <div class="box-shape"></div>
                                    <p class="title">Right</p>
                                    <p class="title">Thumbmark</p>
                                </div>
                            </div>
                            <p> (In case inhabitant is unable to read and write)</p>
                        </div>
                    </div>
                </div>
                <p>Note: The HN shall be filled up by the Barangay Secretary</p>

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