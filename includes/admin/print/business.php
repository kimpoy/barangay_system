<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Layout BUSINESS CLEARANCE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <style>
        @media print {
            @page {
                size: A3;
            }
        }
    </style>
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
                <h3 class="brgy-official">BARANGAY OFFICIALS</h3>
                <h4>Hon. WILFREDO F. MUSNGI</h4>
                <p>Punong Barangay</p>
                <h3>KAGAWAD:</h3>
                <h4>Hon. NOEL M. DELA CRUZ</h4>
                <p>Committee on Agriculture</p>
                <h4>Hon. LAURENCIO M. BUCAD</h4>
                <p>Committee on Education</p>
                <h4>Hon. AMELITO M. MUSNGI JR.</h4>
                <p>Committee on Appropriations</p>
                <h4>Hon. DOMINADOR C. DELA CRUZ</h4>
                <p>Committee on Public Works & Infrastructure </p>
                <h4>Hon. ALBERTO P. MACAPINLAC</h4>
                <p>Committee on Peace & Order</p>
                <h4>Hon. CARMELITA M. MACALINO</h4>
                <p>Committee on Health</p>
                <h4>Hon. ANALYN N. CUNANAN</h4>
                <p>Committee on Environmental Protection</p>
                <h4>MS. JOJI R. SUBA</h4>
                <p>Barangay Treasurer</p>
                <h4>Ms. FLORDELYN V. GREGORIO</h4>
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
                <div class="business-header">
                    <h2>BARANGAY BUSINESS</h2>
                    <h2>CLEARANCE</h2>
                    <h4>( A P P L I C A T I O N )</h4>
                </div>
                <p class="pb">To Whom It May Concern:</p>
                <div class="business-content">
                    <p>This is to certify that the business or trade activity described below:</p>
                    <input class="field-form" style="width: 30em;" type="text" value="<?php echo $_GET['bname']; ?>" readonly>
                    <span>(Business Name or Trade Activity)</span>
                    <input class="field-form" style="width: 30em;" type="text" value="<?php echo $_GET['loc']; ?>" readonly>
                    <span>(Location)</span>
                    <input class="field-form" style="width: 30em;" type="text" value="<?php echo $_GET['operator']; ?>" readonly>
                    <span>(Operator/Manager)</span>
                    <input class="field-form" style="width: 30em;" type="text" value="<?php echo $_GET['addr']; ?>" readonly>
                    <span>(Address)</span>
                    <p>Proposed to be established in this Barangay and is APPLYING for
                        Barangay Clearance to be used in securing a corresponding Mayor’s Permit
                        to operate has been found to be:
                    </p>
                    <ul>
                        <li>In conformity with the provisions of existing Barangay Ordinance,
                            rules and regulations being enforced in this barangay.</li>
                        <li>Not among those business or trade activities being banned to be established in this Barangay.</li>
                    </ul>

                    <p>In view of the foregoing, this Barangay, thru the undersigned interposes no objection for the issuance of the corresponding Mayor’s Permit being applied for.</p>
                    <p>Issued this <input class="field-form" type="text" value="<?php echo date("jS"); ?>" readonly> day of <input class="field-form" type="text" value="<?php echo date("F"); ?>" readonly>, 2021 at Barangay
                        San Roque, Sta. Ana, Pampanga.
                    </p>
                </div>


                <div class="right-content-sign">
                    <h3>Hon. WILFREDO F. MUSNGI</h3>
                    <p>Punong Barangay</p>
                </div>

                <p class="p">Prepared by:</p>
                <h3>Ms. FLORDELYN V. GREGORIO</h3>
                <p class="bottom-p">Barangay Secretary </p><br><br>


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