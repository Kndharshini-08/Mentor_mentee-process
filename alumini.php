<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
$qry=mysqli_query($connect,"select * from alumni where uname='$uname' && psw='$password' && status='accepted'");
$num=mysqli_num_rows($qry);
if($num==1)
{
$qry1=mysqli_query($connect,"select * from alumni where uname='$uname' && psw='$password'");
$row=mysqli_fetch_array($qry1);
$_SESSION['aid']=$uname;
$_SESSION['aname']=$row['Name'];
$_SESSION['type']='mentor';
?>
<script>alert('welcome to Alumni home page');
</script>
<?php
header("location:ahome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";
}
}
?> 
<html>
<title>AWP</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p
{
	color:#000000;
	text-align: center;
	text-transform: uppercase;
	 font-size:35px;
}
ul {
	padding:30px;
  list-style-type: none;
  overflow: hidden;
  background:#99ccff;
   background-repeat: no-repeat;
   background-size: 1420px  200px;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
   border-radius:0px;
}

li {
  float: left;
}                                                                                                                              @import url(https://fonts.googleapis.com/css?family=Varela+Round);


.me {
  margin-top: 0px;
  margin-bottom: 10px;
  font-family: sans-serif;
  font-size: 3rem;
  text-align:center;
  background: linear-gradient(to right, #ef5350, #f48fb1, #7e57c2, #2196f3, #26c6da, #43a047, #eeff41, #f9a825, #ff5722);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

li a {
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #99ff33;
}
.active {
  background-color: #99ff33;
}
#footer {
  padding: 30px;
  background: #99ccff;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {
  padding:150px;
  background:url("images/1.png");
  background-repeat: no-repeat;
  background-size: 1420px  250px;
  border-radius:5px;
   border-radius:10px;
    text-align:left;
   font-size:35px;
   color:#ffffff;
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<h2 class="me">STUDENT MENTOR MENTEE PROCESS</h2>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a  href="index.php"><strong>Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="admin.php"><strong>Admin login</a></li>
 	<li><a href="#">&nbsp;</a></li>
  <li><a href="stud.php"><strong>Student Login</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="alumni.php"><strong>Alumni Login</a></li>
 
</ul>
<br />
<br />

<body>
<div class="row">
  <div class="column" style="background-color:#fff;">
   
 <img src="images/alm.png" width="50%" height="300"/>  
  </div>
  <div class="column" style="background-color:#fff;">
   <form id="form1" name="form1" method="post" action="">

 
	   <table width="50%" border="0" align="left">
	   
	   
         <tr>
		 	<td width="41%">&nbsp;</td>
           <td colspan="2" rowspan="1" ><div align="center" class="style1"><strong><font size="+1">Alumni Login</font> </div></td>
		 </tr>
			<tr>
		<td width="41%">&nbsp;</td>
		    <td width="38%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
		
           <td height="31"align="right"><span class="style2"><strong>User Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="right"><span class="style2"><strong>Password</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
		    <td width="21%" rowspan="2" align="center"> <a href="aregister.php">Alumni Registration</a></td>
         </tr>
	
	  </table>
</form>

  </div>
</div>



<br>
<br>
<div id="footer"></div>
</body>
