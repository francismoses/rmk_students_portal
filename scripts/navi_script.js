function profile(){
// 81	//confirm("navigatin home page");
alert("profile page");
document.getElementById("b").innerHTML= "<? php

$sql ="SELECT * FROM `student` WHERE `student`.`REGNO`= $regno ";


$result = mysqli_query($conn,$sql);

if($row =mysqli_fetch_assoc($result))
{

echo "FIRSTNAME:".$row['FIRSTNAME']."<br> ";

echo "LASTNAME:".$row['LASTNAME']."<br> ";

echo "DOB:".$row['DOB']."<br> ";

echo "DEPARTMENT:".$row['DEPARTMENT']."<br> ";

echo "EMAIL:".$row['EMAIL']."<br> ";

}
else {
     echo "0 results";
}
?>";
}
function home_ele(){
// 109	// confirm("profile page");
	document.getElementById("b").innerHTML="<?php
echo "<h2>Welcome to R.M.K ENGINEERING COLLEGE STUDENTS PORTAL</h2>";
echo "<h2>Using this portal students can find the details of their internal marks and anna university results</h2>";
echo "<h2>Through this portal notes will be uploaded and students can view their notes</h2>";
?>";
}

function internalmark(){
	// confirm("profile page");
	document.getElementById("b").innerHTML="<?php

echo "<table>";
echo "<col width = 80px>";
echo "<tr>";
echo "<h2><b><h1><td>subjectcode</td></h1></b></h2>";
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