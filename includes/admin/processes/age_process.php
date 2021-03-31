<?php
/* AGE 0-5 MALE -------------------------*/
$sql_age_5_male = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 0 AND 5 AND gender = 'male'";
$result_age_5_male = $conn->query($sql_age_5_male);
$row_age_5_male = $result_age_5_male->fetch_assoc();



/* AGE 0-5 FEMALE -------------------------*/
$sql_age_5_female = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 0 AND 5 AND gender = 'female'";
$result_age_5_female = $conn->query($sql_age_5_female);
$row_age_5_female = $result_age_5_female->fetch_assoc();



/* AGE 6-12 MALE -------------------------*/
$sql_age_12_male = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 6 AND 12 AND gender = 'male'";
$result_age_12_male = $conn->query($sql_age_12_male);
$row_age_12_male = $result_age_12_male->fetch_assoc();


/* AGE 6-12 FEMALE -------------------------*/
$sql_age_12_female = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 6 AND 12 AND gender = 'female'";
$result_age_12_female = $conn->query($sql_age_12_female);
$row_age_12_female = $result_age_12_female->fetch_assoc();


/* AGE 13-17 MALE -------------------------*/
$sql_age_17_male = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 13 AND 17 AND gender = 'male'";
$result_age_17_male = $conn->query($sql_age_17_male);
$row_age_17_male = $result_age_17_male->fetch_assoc();


/* AGE 13-17 FEMALE -------------------------*/
$sql_age_17_female = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 13 AND 17 AND gender = 'female'";
$result_age_17_female = $conn->query($sql_age_17_female);
$row_age_17_female = $result_age_17_female->fetch_assoc();


/* AGE 18-35 MALE -------------------------*/
$sql_age_35_male = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 18 AND 35 AND gender = 'male'";
$result_age_35_male = $conn->query($sql_age_35_male);
$row_age_35_male = $result_age_35_male->fetch_assoc();


/* AGE 18-35 FEMALE -------------------------*/
$sql_age_35_female = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 18 AND 35 AND gender = 'female'";
$result_age_35_female = $conn->query($sql_age_35_female);
$row_age_35_female = $result_age_35_female->fetch_assoc();


/* AGE 36-50 MALE -------------------------*/
$sql_age_50_male = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 36 AND 50 AND gender = 'male'";
$result_age_50_male = $conn->query($sql_age_50_male);
$row_age_50_male = $result_age_50_male->fetch_assoc();


/* AGE 36-50 FEMALE -------------------------*/
$sql_age_50_female = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 36 AND 50 AND gender = 'female'";
$result_age_50_female = $conn->query($sql_age_50_female);
$row_age_50_female = $result_age_50_female->fetch_assoc();


/* AGE 51-65 MALE -------------------------*/
$sql_age_65_male = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 51 AND 65 AND gender = 'male'";
$result_age_65_male = $conn->query($sql_age_65_male);
$row_age_65_male = $result_age_65_male->fetch_assoc();


/* AGE 51-65 FEMALE -------------------------*/
$sql_age_65_female = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 51 AND 65 AND gender = 'female'";
$result_age_65_female = $conn->query($sql_age_65_female);
$row_age_65_female = $result_age_65_female->fetch_assoc();


/* AGE 66-above MALE -------------------------*/
$sql_age_66_male = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 66 AND 200 AND gender = 'male'";
$result_age_66_male = $conn->query($sql_age_66_male);
$row_age_66_male = $result_age_66_male->fetch_assoc();


/* AGE 66-above FEMALE -------------------------*/
$sql_age_66_female = "SELECT COUNT(age) AS age FROM purokranking WHERE age BETWEEN 66 AND 200 AND gender = 'female'";
$result_age_66_female = $conn->query($sql_age_66_female);
$row_age_66_female = $result_age_66_female->fetch_assoc();
