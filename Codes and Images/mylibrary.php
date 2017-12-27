<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Library</title>
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

<body text="#FFFFFF" >
<div class=row>
    <div style="color:#FF0000"   class='col-md-3 col-sm-3 col-xs-6'><p align="right"><a href="index.html">
click here to log out</a></p> </div>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "readandwatch";
$c = $_SESSION['id'];
$d = $_SESSION['user'];
$sorgu = "SELECT * FROM library WHERE userID='$d'";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<center><h1>Your Library</center><table>

<tr>
<td width=2%></td>
<td height=175 width=20%>
<a href=index.html>

<img src=Logo.png width=400></a>

</td>

  

  </tr>
</table>";

$query = mysqli_query($conn,$sorgu);
$ilk = mysqli_num_rows($query);
	if ($ilk > 0){
		while($row1 = $query->fetch_assoc()) {
		
		$sorgu2 = "SELECT * FROM movies WHERE movie_id=".$row1['movie_id']. "";
		$query2 = mysqli_query($conn,$sorgu2);
		$ikinci = mysqli_num_rows($query2);
		if ($ikinci >0){
			while($row2 = $query2->fetch_assoc()) {
		 echo'
            <center> <table  width=40% border=0>
  <tbody>
    <tr>
	
	 <td rowspan=5 height=100px width=12%>
	 			   <a href="special_search.php?id=' . $row2["movie_id"] . '">   <img width=150 id='.$row2['movie_id'].' src="data:image/jpeg;base64,'.base64_encode( $row2['poster'] ).'"
				  </a> 
				   </td>
				   <tr>
<td>
			   
			   <a href="remove.php?id='. $row2['movie_id'] . '"><img value="Remove from library" src="remove_button.jpg" /></a>
			     </td>
			  
			 </tr>
			   </tr>
			   
			   <br>';

		
		  	echo '
			   
			   
			   
			   </table></center>';
		  $_SESSION['genre'] = $row2['movie_genre'];
		  
			   
		}
		
		}
		}
		}
?>
</body>
</html>
