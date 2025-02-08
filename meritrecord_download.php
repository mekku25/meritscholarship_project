<?php
require_once "conn.php";

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Merit scholarship records.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('email', 'student_id', 'last_name', 'first_name', 'middle_name', 'sex', 'course', 'year_level'));

$sql = "SELECT * FROM `meritapplication`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, array($row['email'], $row['student_id'], $row['last_name'], $row['first_name'], $row['middle_name'], $row['sex'], $row['course'], $row['year_level']));
    }
}
fclose($output);
?>
