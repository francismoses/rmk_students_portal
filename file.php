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




if($_SERVER["REQUEST_METHOD"] == "POST") { 
      // username and password sent from form 
      
      $fname = mysqli_real_escape_string($conn,$_POST['fname']);
      $fname="http://localhost/gj/mp/notes/".$fname.".pdf";
      header("location: $fname");
  }
    /*$file = $fname;
$filename = $fname; *//* Note: Always use .pdf at the end. */

/*header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);

    die($content);
  }
  else{
  	echo "error";
  }*/
?>