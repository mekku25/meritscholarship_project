<?php
require_once "conn.php";

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=TDP scholarship records.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('email', 'lastname', 'firstname', 'middlename', 'dob', 'permanentaddress', 'zipcode', 'pob', 'sex', 'citizenship', 'mobnumber', 'schoolattended', 'schoolidnumber', 'schooladdress', 'schoolsector', 'yearlevel', 'disability', 'tribalmembership', 'parentsname', 'address', 'occupation', 'parentsincome', 'numofsiblings', 'otherassistance', ));

$sql = "SELECT * FROM `tdpapplication`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, array($row['email'], $row['lastname'], $row['firstname'], $row['middlename'], $row['dob'] , $row['permanentaddress'], $row['zipcode'], $row['pob'], $row['sex'], $row['citizenship'], $row['mobnumber'], $row['schoolattended'], $row['schoolidnumber'], $row['schooladdress'], $row['schoolsector'], $row['yearlevel'], $row['disability'], $row['tribalmembership'], $row['parentsname'], $row['address'], $row['occupation'], $row['parentsincome'], $row['numofsiblings'], $row['otherassistance']));
    }
}
fclose($output);
?>
