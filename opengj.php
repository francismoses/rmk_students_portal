<html>
<head>
<style>
button {
    background-color: #336;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
}
ul {
    list-style-type: none;
    margin:20;
    padding:0;
    overflow:hidden;
    background-color: #336;
}
li {
    float: left;
}
li a {
    display: inline-block;
    color: red;
    text-align: center;
    padding: 18px 30px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/RMK_Engineering_College.gif/220px-RMK_Engineering_College.gif
" alt="R.M.K ENGINEERING COLLEGE" style="width:180px;height:200px;" align="top">
<img src="http://icacci-conference.org/images/rmk22.gif" alt="R.M.K ENGINEERING COLLEGE" style="width:1100px;height:200px;" align="right">

 
<h1><marquee>R.M.K ENGINEERING COLLEGE</marquee></h1>
<?php
$servername = "localhost";
$username = "dbms";
$password = "Gowtham7@";
$dbname = "mydb";
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$regno = $_SESSION['login_user'];
?>
<ul>
  <li id = "home" ><button onclick="home_ele()">Home</button></li>  
  <li id="profile"><button onclick="profile()">Profile</button></li>  
  <li id="update_pass"><a href ="change_password.php">Update Password</a></li>
  <li id="internalmarks"><button onclick="internalmark()">internalmarks</button><li>
  <li id="result"><button onclick="result()">result</button></li>
  <li id="notes"><button onclick="notes()">Notes</button></li>
  <li id="contact"><button onclick="contact()">Contact</button></li>
</ul>
<script type="text/javascript">

function home_ele(){
// 109  // confirm("profile page");
  document.getElementById("b").innerHTML="<?php
echo "<h2>Welcome to R.M.K ENGINEERING COLLEGE STUDENTS PORTAL</h2>";
echo "<h2>Using this portal students can find the details of their internal marks and anna university results</h2>";
echo "<h2>Through this portal notes will be uploaded and students can view their notes</h2>";
?>";
}

function profile(){
// 81 //confirm("navigatin home page");
document.getElementById("b").innerHTML= "<?php
$sql ="SELECT * FROM `student` WHERE `student`.`REGNO`= $regno ";
$result = mysqli_query($conn,$sql);

if($row =mysqli_fetch_assoc($result))
{

echo "FIRSTNAME:".$row['firstname']."<br>";

echo "LASTNAME:".$row['lastname']."<br>";

echo "DOB:".$row['dob']."<br>";

echo "DEPARTMENT:".$row['department']."<br> ";

echo "EMAIL:".$row['email']."<br> ";

}
else {
     echo "0 results";
}
?>";
}
function internalmark(){
  // confirm("profile page");
  document.getElementById("b").innerHTML="<?php

echo "<table>";
echo "<col width = 80px>";
echo "<tr>";
echo "<h2><b><td>subjectcode</td></b></h2>";
echo "<td>marks</td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE1']."</b></h2></td>";
echo "<td><h2><b>".$row['SUB1']."</b></h2></td>";
echo "</tr>";


echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE2']."</b></h2></td>";
echo "<td><h2><b>".$row['SUB2']."</b></h2></td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE3']."</b></h2></td>";
echo "<td><h2><b>".$row['SUB3']."</b></h2></td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE4']."</b></h2></td>";
echo "<td><h2><b>".$row['SUB4']."</b></h2></td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE5']."</b></h2></td>";
echo "<td><h2><b>".$row['SUB5']."</b></h2></td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE6']."</b></h2></td>";
echo "<td><h2><b>".$row['SUB6']."</b></h2></td>";
echo "</tr>";

echo "</table>";



?>";
}





function result(){
  document.getElementById("b").innerHTML="<?php
echo "<table>";
echo "<col width = 80px>";
echo "<tr>";
echo "<h2><b><h1><td>subjectcode</td></h1></b></h2>";
echo "<td>GRADE</td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE1']."</b></h2></td>";
echo "<td><h2><b>".$row['RESULT1']."</b></h2></td>";
echo "</tr>";


echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE2']."</b></h2></td>";
echo "<td><h2><b>".$row['RESULT2']."</b></h2></td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE3']."</b></h2></td>";
echo "<td><h2><b>".$row['RESULT3']."</b></h2></td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE4']."</b></h2></td>";
echo "<td><h2><b>".$row['RESULT4']."</b></h2></td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE5']."</b></h2></td>";
echo "<td><h2><b>".$row['RESULT5']."</b></h2></td>";
echo "</tr>";

echo "<tr>";
echo "<td><h2><b>".$row['SUBJECTCODE6']."</b></h2></td>";
echo "<td><h2><b>".$row['RESULT6']."</b></h2></td>";
echo "</tr>";

echo "</table>";
?>";
}
function notes(){
  alert("notes not available");
}
function contact(){
  document.getElementById("b").innerHTML="<?php 

echo "<h2>for details contact</h2>";

echo $row['CONTACTMAIL'];

?>";
}

</script>
<div style="border-style: solid;margin-left:15%;margin-right:15%;" id="b">
<p></p>
</div>
<?php
$_SESSION['REG'] = $regno;
?>
</body>
</html>
