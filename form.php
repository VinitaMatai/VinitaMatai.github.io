<html>
<body>
<?php
$server="localhost";
$user="root";
$pwd="";
$db="web";

$con = mysqli_connect($server,$user,$pwd,$db);

if (!$con)
  {
 die('Could not connect: ' . mysql_error());
  }

$sql="INSERT INTO query(fname1,lname1,email1,mob1,query,sex1)
 VALUES ('$_POST[fname1]','$_POST[lname1]','$_POST[email1]','$_POST[mob1]','$_POST[query]','$_POST[sex1]')";

if (mysqli_query($con,$sql))

  {
	  echo "Record added Successfully";
    }
	else

	{
		echo "Error".mysqli_error($con);
	}

mysqli_close($con)
?>

</body>

</html>