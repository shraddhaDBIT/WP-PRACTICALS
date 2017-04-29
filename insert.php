<?php
    
		
	if(isset($_POST['submit']))
{
$firstname=$_POST["fn"];
$middlename=$_POST["mn"];
$lastname=$_POST["ln"];
$mothersname=$_POST["msn"];
$contactno=$_POST["pn"];
$emailid=$_POST["em"];
$gender=$_POST["gen1"];
$dob=$_POST["bday"];

$Address=$_POST["addr"];
$Pincode=$_POST["pin"];
$Division=$_POST["divi"];
$District=$_POST["dist"];
$Nationality=$_POST["n"];

$Nameofcollege=$_POST["nc"];
$Collegeaddress=$_POST["ca"];
$Pincode=$_POST["pc"];
$Division=$_POST["div"];
$District=$_POST["dis"];

$FoundationCourse=$_POST["fc"];
$ChemistryTheory=$_POST["ct"];
$PhysicsTheory=$_POST["pt"];
$Physicspractical=$_POST["pp"];
$BotanyTheory=$_POST["Bt"];
$Botanypractical=$_POST["Bp"];

$Seatno=$_POST["Sn"];
$Examination=$_POST["Ex"];

include "connect.php";

$sql1 = "INSERT INTO personalinformation VALUES('$firstname','$middlename','$lastname','$mothersname','$contactno','$emailid','$gender','$dob')";
      $sql2 = "INSERT INTO addressdetails VALUES('$Address','$Pincode','$Division','$District','$Nationality')";
	  $sql3 = "INSERT INTO collegedetails VALUES('$Nameofcollege','$Collegeaddress','$Pincode','$Division','$District')";
	  $sql4 = "INSERT INTO marks VALUES('$FoundationCourse','$ChemistryTheory','$PhysicsTheory','$Physicspractical','$BotanyTheory','$Botanypractical')";
	  $sql5 = "INSERT INTO required VALUES('$Seatno','$Examination')";
	  mysql_query($sql1);
	    mysql_query($sql2);
		  mysql_query($sql3);
		    mysql_query($sql4);
			   mysql_query($sql5);
		echo "<h2><font color=green>Member successfully added</font></h2>";
}
?>
<table>
<?php
    
		
	if(isset($_POST['display']))
{

include "connect.php";

$sql = "Select * from personalinformation";

      
		$result = mysql_query($sql);
		   $row = mysql_num_rows($result);

if ($row > 0) {
    // output data of each row
		
	   echo "<tr><th>First name</th><th>Middle Name</th><th>Last Name</th><th>Mother's name</th><th>Contact Number</th><th>Email id</th><th>Gender</th><th>Date of Birth</th></tr>";
    while($row =  mysql_fetch_assoc($result)) {
        echo "<tr><td>" . $row["firstname"]."</td><td>" . $row["middlename"]."</td><td>".$row["lastname"]."</td><td>".$row["mothersname"]."</td><td>".$row["contactno"]."</td><td>".$row["emailid"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td></tr>";
    }

} else {
    echo "0 results";
}
}
?>
</table>

