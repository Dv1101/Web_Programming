<html>
<head>
<style>
div {
	align:center;
	width:400px;
	height:300px;
border: solid black;
background-color:rgba(0, 200, 255, 0.467);
padding: 20px;
}

</style>
</head>
<body>
<div>
<h1>Enter data for Student</h1>
<form  method="post">
First_Name:<br />
<input type="text" name="firstname"/><br />
Last_Name:<br />
<input type="text" name="lastname"/><br />
Mobile_number:<br />
<input type="text" name="mobile"/>
<br><br>
<input type="submit" name="OK" />
</form>

<?php
$host='localhost';
$username='root';
$password='';
$dbname = "phpwp";
$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
{
die('Could not Connect MySql Server:' .mysql_error());
}
?>

<?php
<!-- include_once 'db.php'; -->
$firstname = $_POST['firstname'];;
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$sql = "INSERT INTO wpdbtable (firstname,lastname,mobile)
VALUES ('$firstname','$lastname','$mobile')";
if (mysqli_query($conn, $sql)) {
echo "New record has been added successfully !";
} 
else {
echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn); 
?>

<!-- <?php
include_once 'db.php';
$sql = "DELETE FROM wpdbtable WHERE mobile='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} 
else {
echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?> -->


</div>
</body>

</html>