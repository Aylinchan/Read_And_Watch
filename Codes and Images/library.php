<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Library</title>
<link href="anasayfa.css" rel="stylesheet" type="text/css"> 
<link rel="Shortcut Icon"  href="favicon.png"  type="image/x-icon">
</head>

<body>
<p align="right"><a href="index.html">
click here to log out</a></p>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "readandwatch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<table>

<tr>
<td width=2%></td>
<td height=175 width=20%>
<a href=index.html>

<img src=Logo.png width=400></a>

</td>

  

  </tr>
</table>";
$a=$_POST['username'];
	  $b=$_POST['password'];
	 
$sorgu="SELECT * FROM users WHERE password='$b' AND username='$a'";



$c=$_SESSION['id'];
$sorgu2="SELECT * FROM movies WHERE movie_id='$c'";

$result = mysqli_query($conn,$sorgu);

 $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0){
        while($row1 = $result->fetch_assoc()) {
		$kullan = $row1['userID'];
		$sql = "INSERT INTO library (userID, movie_id) VALUES ('$kullan', '$c')";

 $result2 = mysqli_query($conn,$sql);
 if(mysqli_error($conn)) exit($sql.'<br>'.mysqli_error($conn)); 
  
 echo  "<p align=center><font color=#b70011 size=5 face=calibri> Welcome Back		" . $row1["username"]. " the following item has been addded to your library</p></font>
		
		
		" ;
    
   

$result3=mysqli_query($conn,$sorgu2);
$num_rows3 = mysqli_num_rows($result3);
    if ($num_rows3 > 0){
        while($row = $result3->fetch_assoc()) {
		echo '<center> <table width=40% border=0>
  <tbody>
   <tr><td> <p align="center" style="color:red">'. $row['movie_name'].'</p></td></tr>
    <tr>
	
	 <td rowspan=5 height=100px width=12%>
	
	 			<a href="special_search.php?id=' . $row["movie_id"] . '">  <p align="center"> <img width=150 id='.$row['movie_id'].' src="data:image/jpeg;base64,'.base64_encode( $row['poster'] ).'"></p>
				  </a> </td>
				  
 
			   </tr>
			   
			  
			  </table>
			   <div class=row>
    <div  class="col-md-3 col-sm-3 col-xs-6"> <a href=mylibrary.php class="btn btn-sm animated-button victoria-one">My Library</a> </div> ';

$_SESSION['id']=$c;
$_SESSION['user']=$row1['userID'];
	
}
}
    

} 
}
if ($num_rows == 0) {
    echo "<p align=center><font color=#b70011 size=5 face=calibri>You either entered your username or password incorrectly or the movie you are trying to add is already on your library</p></font>
	
		
	
		<table>

<tr>
<td width=2%></td>
<td height=175 width=20%>
<a href=index.html>

<img src=Logo.png width=400></a>

</td>

  

  </tr>
</table>
	
	
	
	
	
	
	
	
	
	
	
	" . $conn->error;
}


?>
</body>
</html>
