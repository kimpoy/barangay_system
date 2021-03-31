<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Layout RESIDENCY</title>
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
            <div class="header-right">
                <h1>CERTIFICATE RESIDENCY</h1>
            </div>
            <p>To Whom It May Concern:</p>
            <p class="indention">This is to certify that <input class="field-form" type="text" value="<?php echo $_GET['fullname']; ?>" readonly>, based  from  our  records  and  data is found to be resident of our 
                barangay.</p>

            <p class="indention">Issued this <input class="field-form" type="text" value="<?php echo date("jS"); ?>" readonly> 
            day of <input class="field-form" type="text" value="<?php echo date("F"); ?>" readonly>, at  Barangay  San Roque, Sta. Ana, Pampanga.</p>
            
            <div class="right-content-sign">
                <h3>Hon. WILFREDO F. MUSNGI</h3>
                <p>Punong Barangay</p>
            </div>
            
            
            <p class="p">Prepared by:</p>
            <h3>Ms. FLORDELYN V. GREGORIO</h3>
            <p class="bottom-p">Barangay Secretary </p>

            
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