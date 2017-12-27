<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Read&nbsp;&amp;&nbsp;Watch</title>
<link href="anasayfa.css" rel="stylesheet" type="text/css"> 
<link rel="Shortcut Icon"  href="favicon.png"  type="image/x-icon">

</head>

<body>
<div class=row>
    <div  class='col-md-3 col-sm-3 col-xs-6'><p align="right"><a href="index.html">
click here to log out</a></p> </div>

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

	  $a=$_POST['username'];
	  $b=$_POST['password'];
	 
$sorgu="SELECT * FROM users WHERE password='$b' AND username='$a'";


 //while($row=mysqli_fetch_array(mysqli_query($conn,$sorgu))){
// session_start();
//$_SESSION['email2']=$a;
 //$_SESSION['password2']=$b;
 
//}
$result = mysqli_query($conn,$sorgu);

 $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0){
        while($row = $result->fetch_assoc()) {
		$_SESSION['user'] = $row['userID'];
		echo  "<p align=center><font color=#b70011 size=5 face=calibri> Welcome Back		" . $row["username"]. "</p></font>
		
		<table>

<tr>
<td width=2%></td>
<td height=175 width=20%>
<a href=index.html>

<img src=Logo.png width=400></a>

</td>
<td width=55%></td>
 <td width=12% valign=top >
  <div class=row>
    <div  class='col-md-3 col-sm-3 col-xs-6'> <a href=mylibrary.php class='btn btn-sm animated-button victoria-one'>My Library</a> </div>  </td>

  

  </tr>
</table>	
		" ;

	    

} 
}
if ($num_rows == 0) {
    echo "<p align=center><font color=#b70011 size=5 face=calibri>The username or password is incorrect , Please try again.</p></font>
	
		
	
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

$conn->close();
?>           


<br><br><br><br><br>
<br><br><br><br><br>
<br>
<br>
<center><form action="search.php" method="post"><input class="button" name="query" style="background-color: #000033" style="color:#FFFFCC" style="text-align:justify" placeholder="Search For Book or Movie" />
    
    <p align="left">
      <script src='https://use.edgefonts.net/amaranth.js'></script>
     
    </p>
    <br>
<div class="flex">
<table cellpadding="50">
<tr>
<td>
<a href="#0" class="bttn"><input type="checkbox" value="Movies" name="movies" />Movies</a>
</td>
<td> 
<a href="#0" class="bttn-dark"><input type="checkbox"  value="Books" name="books" />Books</a>
</td>
  </tr>
 </table>
</div>
      <input type="submit" value="Search" class="test" />
   
</form></center>

  
  
    

     
    <footer>
             <table>
             	<tr>
             		<td width="100px"></td>
             		<td width="100px">  <a href="#" style="color:#b1aca1"><b>About</b></a></td>
             		<td width="100px">  <a href="#" style="color:#b1aca1"><b>Terms</b></a></td>
             		<td width="100px">  <a href="#" style="color:#b1aca1"><b>Privacy</b></a></td>
             		<td width="100px">  <a href="#" style="color:#b1aca1"><b>Help</b></a></td>
             		<td width="65%"></td>
             		<td width="25px"><a href="../../Documents/index.html">  <img src="fb.png" width="25"></a></td>
             		<td width="25px"><a href="../../Documents/index.html">  <img src="tw.png" width="25"></a></td>
             		<td width="25px"><a href="../../Documents/index.html">  <img src="yt.png" width="25"></a></td>
             		<td width="25px"><a href="../../Documents/index.html">  <img src="ins.png" width="25"></a></td>
             		<td width="25px"><a href="../../Documents/index.html">  <img src="g+.png" width="25"></a></td>
             		
             		
             		
             	</tr>
             	
             	
             	
             </table>
                              
                             
    </footer>    
  
  

</body>
</html>