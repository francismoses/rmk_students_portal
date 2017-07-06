<?php
session_start();
$regno=$_SESSION['login_user'];
$conn = mysqli_connect("localhost","root","gowthamgj","mydb");
mysqli_select_db($conn,"mydb");

//mysqli_select_db("mydb",$conn);
if(count($_POST)>0) {
$result = mysqli_query($conn,"SELECT password from student WHERE regno='" . $regno . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"]) {
	mysqli_query($conn,"UPDATE student set password='" . $_POST["newPassword"] . "' WHERE regno='" . $regno . "'");
	//mysql_query("update rmk_student set passsword= '123456' where reg_num= 11171414029");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>
<html>
<nav>
<a href="index.html">
<img alt="Brand" src="Images/rmk.jpeg" style="width:40px;height: 40px;float:left;margin-bottom: :0;padding-bottom: 0;">
      </a>
      <h2 style="text-align: center;float: left;">R.M.K. Engineering College,Chennai</h2>
	  </nav>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="Styles/styles.css" >
</link>
<script>
function validatePassword() {
alert("Password will be changed");
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>
<body style="margin-top: 15%;margin-bottom: 15%;margin-left: 25%;margin-right: 25%;background-color: #FFF380">
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Change Password</td>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>