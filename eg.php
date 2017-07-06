<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "gowthamgj";
$dbname = "mydb";
$regno = $_SESSION['login_user'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="SELECT * FROM student WHERE student.REGNO= ".$regno." ";


$result = mysqli_query($conn,$sql);
echo $regno;
if($row =mysqli_fetch_assoc($result))
{

echo 'FIRSTNAME:'.$row['FIRSTNAME'].'<br> ';

echo 'LASTNAME:'.$row['LASTNAME'].'<br> ';

echo 'DOB:'.$row['DOB'].'<br> ';

echo 'DEPARTMENT:'.$row['DEPARTMENT'].'<br> ';

echo 'EMAIL:'.$row['EMAIL'].'<br> ';

}
else {
     echo '0 results';
}
?>