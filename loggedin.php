<?php
$servername = "localhost";
$username = "root";
$password = "gowthamgj";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}






session_start();
//20   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      $sql = "SELECT `REGNO`,`FIRSTNAME`,`LASTNAME` FROM `student` WHERE `student`.`REGNO` = '$myusername' and `student`.`PASSWORD` = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      
     
       /*// if($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
          {
              $nm=$row['FIRSTNAME'];     
             echo "$nm";




           }
*/      
//DATA ARE FETCHED FROM MYSQL
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
          
             //include 'navi.php';
          header("Location: navi.php");                   





      }
    
else {
echo "invalid id";
         $error = "Your Login Name or Password is invalid";
      }
   }

?>