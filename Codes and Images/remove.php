<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Remove from library</title>
<link href="anasayfa.css" rel="stylesheet" type="text/css"> 
<link rel="Shortcut Icon"  href="favicon.png"  type="image/x-icon">
<style>
body {
   
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.wrapper {
  position: relative;
  display: inline-block;
  border: none;
  font-size: 14px;
  margin: 50px auto;
  left: 35%;
  transform: translateX(-50%);
}

.wrapper input {
  border: 0;
  width: 1px;
  height: 1px;
  overflow: hidden;
  position: absolute !important;
  clip: rect(1px 1px 1px 1px);
  clip: rect(1px, 1px, 1px, 1px);
  opacity: 0;
}

.wrapper label {
  position: relative;
  float: right;
  color: #C8C8C8;
}

.wrapper label:before {
  margin: 5px;
  content: "\f005";
  font-family: FontAwesome;
  display: inline-block;
  font-size: 1.5em;
  color: #ccc;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.wrapper input:checked ~ label:before {
  color: #FFC107;
}

.wrapper label:hover ~ label:before {
  color: #ffdb70;
}

.wrapper label:hover:before {
  color: #FFC107;
}
</style>
</head>

<body>
<?php
session_start();
echo "<table>

<tr>
<td width=2%></td>
<td height=175 width=20%>
<a href=index.html>

<img src=Logo.png width=400></a>

</td>

  

  </tr>
</table>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "readandwatch";
$d = $_SESSION['user'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_GET['id'])){
$id = $_GET['id'];

$sorgu = "DELETE FROM library WHERE userID='$d' AND movie_id='$id'";
$result2 = mysqli_query($conn,$sorgu);
 if(mysqli_error($conn)) exit($sorgu.'<br>'.mysqli_error($conn)); 
  
 echo  "<p align=center><font color=#b70011 size=5 face=calibri>  <center><h1>This item has been removed from your library</center></p></font>
		
		
		" ;
		echo ' <div class=row>
    <div  class="col-md-3 col-sm-3 col-xs-6"> <a href=mylibrary.php class="btn btn-sm animated-button victoria-one">My Library</a> </div> ';


}
else{
echo "no";
}

?>
</body>
</html>
