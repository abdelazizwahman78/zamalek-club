
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "zamalek_club";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("". $con->connect_error);
}
echo "";
?>

