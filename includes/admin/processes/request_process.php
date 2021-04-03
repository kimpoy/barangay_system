<?php
/* TOTAL REQUEST */
/* GETTING TOTAL COUNT OF EVERY TABLE ---------------------------------------------------*/

/* appointments */
$sql_appointments = "SELECT count(id) AS total FROM appointments";
$result_appointments = mysqli_query($conn, $sql_appointments);
$values_appointments = mysqli_fetch_assoc($result_appointments);
$num_rows_appointments = $values_appointments['total'];
/* Medical */
$sql_medical = "SELECT count(id) AS total1 FROM medical";
$result_medical = mysqli_query($conn, $sql_medical);
$values_medical = mysqli_fetch_assoc($result_medical);
$num_rows_medical = $values_medical['total1'];
/* Scholarship */
$sql_scholarship = "SELECT count(id) AS total2 FROM scholarship";
$result_scholarship = mysqli_query($conn, $sql_scholarship);
$values_scholarship = mysqli_fetch_assoc($result_scholarship);
$num_rows_scholarship = $values_scholarship['total2'];
/* Brgy Clearance */
$sql_brgyclearance = "SELECT count(id) AS total3 FROM brgyclearance";
$result_brgyclearance = mysqli_query($conn, $sql_brgyclearance);
$values_brgyclearance = mysqli_fetch_assoc($result_brgyclearance);
$num_rows_brgyclearance = $values_brgyclearance['total3'];
/* Business Clearance */
$sql_business = "SELECT count(id) AS total4 FROM business";
$result_business = mysqli_query($conn, $sql_business);
$values_business = mysqli_fetch_assoc($result_business);
$num_rows_business = $values_business['total4'];
/* Residency */
$sql_residency = "SELECT count(id) AS total5 FROM residency";
$result_residency = mysqli_query($conn, $sql_residency);
$values_residency = mysqli_fetch_assoc($result_residency);
$num_rows_residency = $values_residency['total5'];


/* ARRAY FOR TOTAL REQUEST ---------------------------------------------------------------*/
$total_request = array(
    "Appointments" => $num_rows_appointments,
    "Indigency Medical" => $num_rows_medical,
    "Indigency Scholarship" => $num_rows_scholarship,
    "Barangay Clearance" => $num_rows_brgyclearance,
    "Business Clearance" => $num_rows_business,
    "Residency" => $num_rows_residency
);

/* ARRAY FOR TOTAL REQUEST WITH KEY AND VALUE ---------------------------------------------------------------*/
$total_request_key = array();
$total_request_value = array();
foreach ($total_request as $total_key => $total_value) {
    $total_request_key[] = $total_key;
    $total_request_value[] = round(($total_value / array_sum($total_request)) * 100, 2); //get percentage and round it to 2 decimal places
}






//for weekly
/* appointments */
$week1 = $conn->query("SELECT CONCAT(YEAR(date), '/', WEEK(date)) AS week_name, 
YEAR(date), WEEK(date), COUNT(*) AS cnt1
FROM appointments
GROUP BY week_name
ORDER BY YEAR(DATE) ASC, WEEK(date) ASC") or die($conn->error);

$appointments_week = array();
while($row = $week1->fetch_assoc()){
    array_push($appointments_week, $row['cnt1']);
}
$appointments_week_max = max($appointments_week);

/* medical */
$week2 = $conn->query("SELECT CONCAT(YEAR(date), '/', WEEK(date)) AS week_name, 
YEAR(date), WEEK(date), COUNT(*) AS cnt2
FROM medical
GROUP BY week_name
ORDER BY YEAR(DATE) ASC, WEEK(date) ASC") or die($conn->error);

$medical_week = array();
while($row = $week2->fetch_assoc()){
    array_push($medical_week, $row['cnt2']);
}
$medical_week_max = max($medical_week);

/* scholarship */
$week3 = $conn->query("SELECT CONCAT(YEAR(date), '/', WEEK(date)) AS week_name, 
YEAR(date), WEEK(date), COUNT(*) AS cnt3
FROM scholarship
GROUP BY week_name
ORDER BY YEAR(DATE) ASC, WEEK(date) ASC") or die($conn->error);

$scholarship_week = array();
while($row = $week3->fetch_assoc()){
    array_push($scholarship_week, $row['cnt3']);
}
$scholarship_week_max = max($scholarship_week);

/* brgyclearance */
$week4 = $conn->query("SELECT CONCAT(YEAR(date), '/', WEEK(date)) AS week_name, 
YEAR(date), WEEK(date), COUNT(*) AS cnt4
FROM brgyclearance
GROUP BY week_name
ORDER BY YEAR(DATE) ASC, WEEK(date) ASC") or die($conn->error);

$brgyclearance_week = array();
while($row = $week4->fetch_assoc()){
    array_push($brgyclearance_week, $row['cnt4']);
}
$brgyclearance_week_max = max($brgyclearance_week);

/* business */
$week5 = $conn->query("SELECT CONCAT(YEAR(date), '/', WEEK(date)) AS week_name, 
YEAR(date), WEEK(date), COUNT(*) AS cnt5
FROM business
GROUP BY week_name
ORDER BY YEAR(DATE) ASC, WEEK(date) ASC") or die($conn->error);

$business_week = array();
while($row = $week5->fetch_assoc()){
    array_push($business_week, $row['cnt5']);
}
$business_week_max = max($business_week);

/* business */
$week6 = $conn->query("SELECT CONCAT(YEAR(date), '/', WEEK(date)) AS week_name, 
YEAR(date), WEEK(date), COUNT(*) AS cnt6
FROM residency
GROUP BY week_name
ORDER BY YEAR(DATE) ASC, WEEK(date) ASC") or die($conn->error);

$residency_week = array();
while($row = $week6->fetch_assoc()){
    array_push($residency_week, $row['cnt6']);
}
$residency_week_max = max($residency_week);

/* ARRAY FOR MONTHLY REQUEST ---------------------------------------------------------------*/
$weekly_request = array(
    "Appointments" => $appointments_week_max,
    "Indigency Medical" => $medical_week_max,
    "Indigency Scholarship" => $scholarship_week_max,
    "Barangay Clearance" => $brgyclearance_week_max,
    "Business Clearance" => $business_week_max,
    "Residency" => $residency_week_max
);

/* ARRAY FOR MONTHLY REQUEST WITH KEY AND VALUE ---------------------------------------------------------------*/
$weekly_request_key = array();
$weekly_request_value = array();
foreach ($weekly_request as $weekly_key => $weekly_value) {
    $weekly_request_key[] = $weekly_key;
    $weekly_request_value[] = round(($weekly_value / array_sum($weekly_request)) * 100, 2);
}








/* GETTING TOTAL COUNT PER MONTH OF EVERY TABLE ---------------------------------------------------*/
/* Monthly */
/* appointments */
$appointments = $conn->query("SELECT CONCAT(YEAR(date), '/', MONTH(date)) AS month_name, 
YEAR(date), MONTH(date), COUNT(*) AS date1
FROM appointments
GROUP BY month_name
ORDER BY YEAR(DATE) ASC, MONTH(date) ASC") or die($conn->error);
$appointments_result = array();
while ($row = $appointments->fetch_assoc()) {
    array_push($appointments_result, $row['date1']);
}
$appointments_max = max($appointments_result);

/* medical */
$medical = $conn->query("SELECT CONCAT(YEAR(date), '/', MONTH(date)) AS month_name, 
YEAR(date), MONTH(date), COUNT(*) AS date2
FROM medical
GROUP BY month_name
ORDER BY YEAR(DATE) ASC, MONTH(date) ASC") or die($conn->error);
$medical_result = array();
while ($row = $medical->fetch_assoc()) {
    array_push($medical_result, $row['date2']);
}
$medical_max = max($medical_result);

/* scholarship */
$scholarship = $conn->query("SELECT CONCAT(YEAR(date), '/', MONTH(date)) AS month_name, 
YEAR(date), MONTH(date), COUNT(*) AS date3
FROM scholarship
GROUP BY month_name
ORDER BY YEAR(DATE) ASC, MONTH(date) ASC") or die($conn->error);
$scholarship_result = array();
while ($row = $scholarship->fetch_assoc()) {
    array_push($scholarship_result, $row['date3']);
}
$scholarship_max = max($scholarship_result);

/* brgyclearance */
$brgyclearance = $conn->query("SELECT CONCAT(YEAR(date), '/', MONTH(date)) AS month_name, 
YEAR(date), MONTH(date), COUNT(*) AS date4
FROM brgyclearance
GROUP BY month_name
ORDER BY YEAR(DATE) ASC, MONTH(date) ASC") or die($conn->error);
$brgyclearance_result = array();
while ($row = $brgyclearance->fetch_assoc()) {
    array_push($brgyclearance_result, $row['date4']);
}
$brgyclearance_max = max($brgyclearance_result);

/* business */
$business = $conn->query("SELECT CONCAT(YEAR(date), '/', MONTH(date)) AS month_name, 
YEAR(date), MONTH(date), COUNT(*) AS date5
FROM business
GROUP BY month_name
ORDER BY YEAR(DATE) ASC, MONTH(date) ASC") or die($conn->error);
$business_result = array();
while ($row = $business->fetch_assoc()) {
    array_push($business_result, $row['date5']);
}
$business_max = max($business_result);

/* residency */
$residency = $conn->query("SELECT CONCAT(YEAR(date), '/', MONTH(date)) AS month_name, 
YEAR(date), MONTH(date), COUNT(*) AS date6
FROM residency
GROUP BY month_name
ORDER BY YEAR(DATE) ASC, MONTH(date) ASC") or die($conn->error);
$residency_result = array();
while ($row = $residency->fetch_assoc()) {
    array_push($residency_result, $row['date6']);
}
$residency_max = max($residency_result);


/* ARRAY FOR MONTHLY REQUEST ---------------------------------------------------------------*/
$monthly_request = array(
    "Appointments" => $appointments_max,
    "Indigency Medical" => $medical_max,
    "Indigency Scholarship" => $scholarship_max,
    "Barangay Clearance" => $brgyclearance_max,
    "Business Clearance" => $business_max,
    "Residency" => $residency_max
);

/* ARRAY FOR MONTHLY REQUEST WITH KEY AND VALUE ---------------------------------------------------------------*/
$monthly_request_key = array();
$monthly_request_value = array();
foreach ($monthly_request as $monthly_key => $monthly_value) {
    $monthly_request_key[] = $monthly_key;
    $monthly_request_value[] = round(($monthly_value / array_sum($monthly_request)) * 100, 2);
}




/* GETTING TOTAL COUNT PER YEAR OF EVERY TABLE ---------------------------------------------------*/
/* appointments */
$appointments = $conn->query("SELECT
YEAR(date) AS year_name, COUNT(*) AS year1
FROM appointments
GROUP BY year_name
ORDER BY YEAR(DATE) ASC") or die($conn->error);
$appointments_result = array();
while ($row = $appointments->fetch_assoc()) {
    array_push($appointments_result, $row['year1']);
}
$appointments_max_year = max($appointments_result);

/* medical */
$medical = $conn->query("SELECT
YEAR(date) AS year_name, COUNT(*) AS year2
FROM medical
GROUP BY year_name
ORDER BY YEAR(DATE) ASC") or die($conn->error);
$medical_result = array();
while ($row = $medical->fetch_assoc()) {
    array_push($medical_result, $row['year2']);
}
$medical_max_year = max($medical_result);

/* scholarship */
$scholarship = $conn->query("SELECT
YEAR(date) AS year_name, COUNT(*) AS year3
FROM scholarship
GROUP BY year_name
ORDER BY YEAR(DATE) ASC") or die($conn->error);
$scholarship_result = array();
while ($row = $scholarship->fetch_assoc()) {
    array_push($scholarship_result, $row['year3']);
}
$scholarship_max_year = max($scholarship_result);

/* brgyclearance */
$brgyclearance = $conn->query("SELECT
YEAR(date) AS year_name, COUNT(*) AS year4
FROM brgyclearance
GROUP BY year_name
ORDER BY YEAR(DATE) ASC") or die($conn->error);
$brgyclearance_result = array();
while ($row = $brgyclearance->fetch_assoc()) {
    array_push($brgyclearance_result, $row['year4']);
}
$brgyclearance_max_year = max($brgyclearance_result);

/* business */
$business = $conn->query("SELECT
YEAR(date) AS year_name, COUNT(*) AS year5
FROM business
GROUP BY year_name
ORDER BY YEAR(DATE) ASC") or die($conn->error);
$business_result = array();
while ($row = $business->fetch_assoc()) {
    array_push($business_result, $row['year5']);
}
$business_max_year = max($business_result);

/* residency */
$residency = $conn->query("SELECT
YEAR(date) AS year_name, COUNT(*) AS year6
FROM residency
GROUP BY year_name
ORDER BY YEAR(DATE) ASC") or die($conn->error);
$residency_result = array();
while ($row = $residency->fetch_assoc()) {
    array_push($residency_result, $row['year6']);
}
$residency_max_year = max($residency_result);


/* ARRAY FOR YEARLY REQUEST ---------------------------------------------------------------*/
$yearly_request = array(
    "Appointments" => $appointments_max_year,
    "Indigency Medical" => $medical_max_year,
    "Indigency Scholarship" => $scholarship_max_year,
    "Barangay Clearance" => $brgyclearance_max_year,
    "Business Clearance" => $business_max_year,
    "Residency" => $residency_max_year
);

/* ARRAY FOR YEARLY REQUEST WITH KEY AND VALUE ---------------------------------------------------------------*/
$yearly_request_key = array();
$yearly_request_value = array();
foreach ($yearly_request as $yearly_key => $yearly_value) {
    $yearly_request_key[] = $yearly_key;
    $yearly_request_value[] = round(($yearly_value / array_sum($yearly_request)) * 100, 2);
}



/* MOST REQUESTED */
/* ARRAY FOR MOST REQUESTED ---------------------------------------------------------------*/
$most_requested = array(
    "Appointments" => $num_rows_appointments,
    "Indigency Medical" => $num_rows_medical,
    "Indigency Scholarship" => $num_rows_scholarship,
    "Barangay Clearance" => $num_rows_brgyclearance,
    "Business Clearance" => $num_rows_business,
    "Residency" => $num_rows_residency
);
/* sort array in decending order(asort for ascending) */
arsort($most_requested);

/* ARRAY FOR MOST REQUESTED WITH KEY AND VALUE ---------------------------------------------------------------*/
$most_requested_key = array();
$most_requested_value = array();
foreach ($most_requested as $most_key => $most_value) {
    $most_requested_key[] = $most_key;
    $most_requested_value[] = $most_value;
}

/* ARRAY FOR MONTHLY REQUEST ---------------------------------------------------------------*/
$weekly_most_requested = array(
    "Appointments" => $appointments_week_max,
    "Indigency Medical" => $medical_week_max,
    "Indigency Scholarship" => $scholarship_week_max,
    "Barangay Clearance" => $brgyclearance_week_max,
    "Business Clearance" => $business_week_max,
    "Residency" => $residency_week_max
);
/* sort array in decending order(asort for ascending) */
arsort($weekly_most_requested);

/* ARRAY FOR MOST REQUESTED WITH KEY AND VALUE ---------------------------------------------------------------*/
$weekly_most_requested_key = array();
$weekly_most_requested_value = array();
foreach ($weekly_most_requested as $weekly_most_key => $weekly_most_value) {
    $weekly_most_requested_key[] = $weekly_most_key;
    $weekly_most_requested_value[] = $weekly_most_value;
}

/* ARRAY FOR MONTHLY REQUEST ---------------------------------------------------------------*/
$monthly_most_requested = array(
    "Appointments" => $appointments_max,
    "Indigency Medical" => $medical_max,
    "Indigency Scholarship" => $scholarship_max,
    "Barangay Clearance" => $brgyclearance_max,
    "Business Clearance" => $business_max,
    "Residency" => $residency_max
);

/* ARRAY FOR MONTHLY REQUEST WITH KEY AND VALUE ---------------------------------------------------------------*/
$monthly_most_requested_key = array();
$monthly_most_requested_value = array();
foreach ($monthly_most_requested as $monthly_most_key => $monthly_most_value) {
    $monthly_most_requested_key[] = $monthly_most_key;
    $monthly_most_requested_value[] = $monthly_most_value;
}

/* ARRAY FOR YEARLY REQUEST ---------------------------------------------------------------*/
$yearly_most_requested = array(
    "Appointments" => $appointments_max_year,
    "Indigency Medical" => $medical_max_year,
    "Indigency Scholarship" => $scholarship_max_year,
    "Barangay Clearance" => $brgyclearance_max_year,
    "Business Clearance" => $business_max_year,
    "Residency" => $residency_max_year
);

/* ARRAY FOR YEARLY REQUEST WITH KEY AND VALUE ---------------------------------------------------------------*/
$yearly_most_requested_key = array();
$yearly_most_requested_value = array();
foreach ($yearly_most_requested as $yearly_most_key => $yearly_most_value) {
    $yearly_most_requested_key[] = $yearly_most_key;
    $yearly_most_requested_value[] = $yearly_most_value;
}

/* Census */
//for weekly
$week_census = $conn->query("SELECT CONCAT(YEAR(date), '/', WEEK(date)) AS week_name, 
YEAR(date), WEEK(date), COUNT(*) AS cntcensus
FROM census
GROUP BY week_name
ORDER BY YEAR(DATE) ASC, WEEK(date) ASC") or die($conn->error);

$census_week = array();
while($row = $week_census->fetch_assoc()){
    array_push($census_week, $row['cntcensus']);
}
$census_week_max = max($census_week);

//for monthly
$month_census = $conn->query("SELECT CONCAT(YEAR(date), '/', MONTH(date)) AS month_name, 
YEAR(date), MONTH(date), COUNT(*) AS cntmcensus
FROM census
GROUP BY month_name
ORDER BY YEAR(DATE) ASC, MONTH(date) ASC") or die($conn->error);

$census_month = array();
while($row = $month_census->fetch_assoc()){
    array_push($census_month, $row['cntmcensus']);
}
$census_month_max = max($census_month);

//for yearly
$year_census = $conn->query("SELECT
YEAR(date) AS year_name, COUNT(*) AS cntycensus
FROM census
GROUP BY year_name
ORDER BY YEAR(DATE) ASC") or die($conn->error);

$census_year = array();
while($row = $year_census->fetch_assoc()){
    array_push($census_year, $row['cntycensus']);
}
$census_year_max = max($census_year);
