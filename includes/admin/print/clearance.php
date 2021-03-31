<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
</head>
<body>
<div class="print-wrapper">
<button class="button print-button" id="doPrint">Print</button>
</div>
    <div class="container" id="printDiv">
        <!-- top -->
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
            <!-- left side -->
            <div class="left-content">
                <div class="title">
                    <h3>BARANGAY OFFICIALS</h3> 
                </div>
                <h4>Hon. WILFREDO F. MUSNGI</h4>
                <p>Punong Barangay</p>
                <div class="title">
                    <h3>KAGAWAD:</h3>
                </div>
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

            <!-- right side -->
            <div class="right-content">
                <div class="header-right">
                    <h1>BARANGAY CLEARANCE</h1>
                </div>
                <p>To Whom It May Concern:</p>
                <p class="indention">This is to certify that <input class="field-form" type="text" value="<?php echo $_GET['fullname']; ?>" readonly> 
                single/married/widow/widower,  <input class="field-form" type="text" value="<?php echo $_GET['age']; ?>" readonly> 
                years old, Filipino citizen, is a bonafide resident of this barangay and is known to me to be a law-abiding citizen and has a good moral character. That of my own personal knowledge, she/he has not committed, nor been involved in any kind of unlawful activities in this barangay. </p>
    
                <p class="indention">Issued this  <input class="field-form" type="text" value="<?php echo date("jS"); ?>" readonly> 
                day of <input class="field-form" type="text" value="<?php echo date("F"); ?>" readonly>, 2021  at Barangay San Roque, Sta. Ana, Pampanga </p>
                
                <div class="clearance-input">
                    <div class="clearance-column">
                        
                        <div>
                        <?php
                            $abroad = $_GET['abroad'];
                            if($abroad == 'abroad'):
                        ?>
                            <input type="checkbox" id="abroad" name="abroad" value="abroad" checked>
                            <label for="abroad">Abroad</label>
                        <?php
                            elseif($abroad == ''):
                        ?>
                            <input type="checkbox" id="abroad" name="abroad" value="abroad">
                            <label for="abroad">Abroad</label>
                        <?php endif ?>
                        </div>
    
                        <div>
                        <?php
                            $loc = $_GET['loc'];
                            if($loc == 'local'):
                        ?>
                            <input type="checkbox" id="local" name="local" value="local" checked>
                            <label for="local">Local</label>
                        <?php
                            elseif($loc == ''):
                        ?>
                            <input type="checkbox" id="local" name="local" value="local">
                            <label for="local">Local</label>
                        <?php endif ?>
                        </div>
                        <div>
                        <?php
                            $scholarship = $_GET['scholarship'];
                            if($scholarship == 'scholarship'):
                        ?>
                            <input type="checkbox" id="scholarship" name="scholarship" value="scholarship" checked>
                            <label for="scholarship">Scholarship</label>
                        <?php
                            elseif($loc == ''):
                        ?>
                            <input type="checkbox" id="scholarship" name="scholarship" value="scholarship">
                            <label for="scholarship">Scholarship</label>
                        <?php endif ?>
                        </div>
                        
                        
                    </div>
                    
                    <div class="clearance-column">
                        <div>
                        <?php
                            $policeClearance = $_GET['policeClearance'];
                            if($policeClearance == 'policeClearance'):
                        ?>
                            <input type="checkbox" id="police" name="police" value="police" checked>
                            <label for="police">Police Clearance</label>
                        <?php
                            elseif($policeClearance == ''):
                        ?>
                            <input type="checkbox" id="police" name="police" value="police">
                            <label for="police">Police Clearance</label>
                        <?php endif ?>
                        </div>
                        <div>
                        <?php
                            $nbi = $_GET['nbi'];
                            if($nbi == 'nbi'):
                        ?>
                            <input type="checkbox" id="nbi" name="nbi" value="nbi" checked>
                            <label for="nbi">NBI</label>
                        <?php
                            elseif($nbi == ''):
                        ?>
                            <input type="checkbox" id="nbi" name="nbi" value="nbi">
                            <label for="nbi">NBI</label>
                        <?php endif ?>
                        </div>
                        <div>
                        <?php
                            $loanPurposes = $_GET['loanPurposes'];
                            if($loanPurposes == 'loanPurposes'):
                        ?>
                            <input type="checkbox" id="loan" name="loan" value="loan" checked>
                            <label for="loan">Loan Purposes</label>
                        <?php
                            elseif($loanPurposes == ''):
                        ?>
                            <input type="checkbox" id="loan" name="loan" value="loan">
                            <label for="loan">Loan Purposes</label>
                        <?php endif ?>
                        </div>
                    </div>
                    
                </div>
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