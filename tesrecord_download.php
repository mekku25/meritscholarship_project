<?php
require_once "conn.php";

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=TES scholarship records.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('email', 'grantee', 'studentidnumber', 'lastname', 'firstname', 'extensionname', 'totalfees', 'fourps', 'familymontlyincome', 'householdpercapitaincome'));

$sql = "SELECT * FROM `tesapplication`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, array($row['email'], $row['grantee'], $row['studentidnumber'], $row['lastname'], $row['firstname'], $row['extensionname'], $row['totalfees'], $row['fourps'], $row['familymontlyincome'], $row['householdpercapitaincome'],));
    }
}
fclose($output);
?>
