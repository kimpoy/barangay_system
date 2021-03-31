<?php
/* LABOR MALE -------------------------*/
$sql_labor_male = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'labor' AND gender = 'male'";
$result_labor_male = $conn->query($sql_labor_male);
$row_labor_male = $result_labor_male->fetch_assoc();

/* LABOR FEMALE -------------------------*/
$sql_labor_female = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'labor' AND gender = 'female'";
$result_labor_female = $conn->query($sql_labor_female);
$row_labor_female = $result_labor_female->fetch_assoc();

/* UNEMPLOYED MALE -------------------------*/
$sql_unemployed_male = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'unemployed' AND gender = 'male'";
$result_unemployed_male = $conn->query($sql_unemployed_male);
$row_unemployed_male = $result_unemployed_male->fetch_assoc();

/* UNEMPLOYED FEMALE -------------------------*/
$sql_unemployed_female = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'unemployed' AND gender = 'female'";
$result_unemployed_female = $conn->query($sql_unemployed_female);
$row_unemployed_female = $result_unemployed_female->fetch_assoc();

/* OUT OF SCHOOL YOUTH MALE -------------------------*/
$sql_osy_male = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'male'";
$result_osy_male = $conn->query($sql_osy_male);
$row_osy_male = $result_osy_male->fetch_assoc();

/* OUT OF SCHOOL YOUTH FEMALE -------------------------*/
$sql_osy_female = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'female'";
$result_osy_female = $conn->query($sql_osy_female);
$row_osy_female = $result_osy_female->fetch_assoc();

/* OUT OF SCHOOL CHILDREN MALE -------------------------*/
$sql_osc_male = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'male'";
$result_osc_male = $conn->query($sql_osc_male);
$row_osc_male = $result_osc_male->fetch_assoc();

/* OUT OF SCHOOL CHILDREN FEMALE -------------------------*/
$sql_osc_female = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'female'";
$result_osc_female = $conn->query($sql_osc_female);
$row_osc_female = $result_osc_female->fetch_assoc();

/* PWD MALE -------------------------*/
$sql_pwd_male = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'male'";
$result_pwd_male = $conn->query($sql_pwd_male);
$row_pwd_male = $result_pwd_male->fetch_assoc();

/* PWD FEMALE -------------------------*/
$sql_pwd_female = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'female'";
$result_pwd_female = $conn->query($sql_pwd_female);
$row_pwd_female = $result_pwd_female->fetch_assoc();

/* OFW MALE -------------------------*/
$sql_ofw_male = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'male'";
$result_ofw_male = $conn->query($sql_ofw_male);
$row_ofw_male = $result_ofw_male->fetch_assoc();

/* OFW FEMALE -------------------------*/
$sql_ofw_female = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'female'";
$result_ofw_female = $conn->query($sql_ofw_female);
$row_ofw_female = $result_ofw_female->fetch_assoc();

/* SOLO PARENT MALE -------------------------*/
$sql_solo_male = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'male'";
$result_solo_male = $conn->query($sql_solo_male);
$row_solo_male = $result_solo_male->fetch_assoc();

/* SOLO PARENT FEMALE -------------------------*/
$sql_solo_female = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'female'";
$result_solo_female = $conn->query($sql_solo_female);
$row_solo_female = $result_solo_female->fetch_assoc();

/* INDIGENOUS PEOPLE MALE -------------------------*/
$sql_ips_male = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'male'";
$result_ips_male = $conn->query($sql_ips_male);
$row_ips_male = $result_ips_male->fetch_assoc();

/* INDIGENOUS PEOPLE MALE -------------------------*/
$sql_ips_female = "SELECT COUNT(sector) AS sector FROM purokranking WHERE sector = 'osy' AND gender = 'female'";
$result_ips_female = $conn->query($sql_ips_female);
$row_ips_female = $result_ips_female->fetch_assoc();
