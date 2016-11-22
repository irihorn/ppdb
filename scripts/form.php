<?php 
require 'connect.php';

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$case_report_num = $_REQUEST['case_report_num'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];

$insert_sql = "INSERT INTO patients (first_name, last_name, case_report_num, age, gender)" .
"VALUES('{$first_name}', '{$last_name}', '{$case_report_num}', '{$age}', '{$gender}');";
$conn->query($insert_sql);

?>