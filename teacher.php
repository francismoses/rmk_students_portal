<html>
<head>
<style>
body{
  margin:0 auto;
  background-color:#ffff99;
  background-image:url("Images/scuffedstatic_dark1400x900.jpg");
  
}

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
table, th, td {
   border: 1px solid black;
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
session_start();


$regno = $_SESSION['login_user'];
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
?>
<ul>
  <li id="home"><button onclick="home();">Home</button></li>
  <li id="profile"><button onclick="profile();">Profile</button></li>  
  <li id="update_pass"><button onclick="marks();">Update marks</button></li>
  <li id="internalmarks"><button onclick="details();">details</button><li>
  <li id="contact"><a href="#contact">Contact</a></li>
  <li id="about"><a href="#about">About</a></li>
</ul>
<div style="background-color: white;border-style: solid;margin-left:15%;margin-right:15%;" id="b">
<p></p>
</div>
</body>
<script type="text/javascript">

function profile(){
  document.getElementById("b").innerHTML="<?php
  $sql ="SELECT * FROM teacher WHERE teacher.userid = '.$regno.' ";
$result = mysqli_query($conn,$sql);
if($row =mysqli_fetch_assoc($result))
{
echo "<center>";
echo "<table>";
echo "<col width = 200px>";
echo "<tr>";
echo "<h2><b><h1><td>FIRSTNAME</td></h1></b></h2>";
echo "<h2><b><h1><td>".$row['name']."</td></h2></b></h1>";
echo "</tr>";
echo "<tr>";
echo "<b><td>designation</td></b>";
echo "<b><td>".$row['designation']."</td></b>";
echo "</tr>";
echo "<tr>";
echo "<h2><b><h1><td>DEPARTMENT</td></h1></b></h2>";
echo "<h2><b><h1><td>".$row['department']."</td></h2></b></h1>";
echo "</tr>";
echo "<tr>";
echo "</center>";

}
else{
  echo "0 results";
}

  ?>";
}
function home(){
  document.getElementById('b').innerHTML="<?php
echo "<h2>Welcome to R.M.K ENGINEERING COLLEGE STUDENTS PORTAL</h2>";
echo "<h2>Using this portal students can find the details of their internal marks and anna university results</h2>";
echo "<h2>Through this portal notes will be uploaded and students can view their notes</h2>";
?>";
}
</script>
</html>