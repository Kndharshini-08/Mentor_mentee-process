<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
$qry=mysqli_query($connect,"select * from admin where name='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
?>
<script>alert('welcome to admin home page');
</script>
<?php
header("location:valumni.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";
}
}
?> 
<html>
<title>AWP</title>
<style>
p
{
       color:#000000;
	text-align: center;
