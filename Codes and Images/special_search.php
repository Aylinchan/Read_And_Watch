<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Language content=tr>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-9">
<title>Aradığınız Filmler ve Kitaplar</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="search.css" rel="stylesheet" type="text/css"> 
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
<table>

<tr>
<td width="2%"></td>
<td height="150" width="50%">
<a href="index.html">

<img src="Logo.png" width="400"></a>

</td>
</tr>
</table>






<center><form action="search.php" method="post"><input class="button" name="query" style="background-color: #000033" style="color:#FFFFCC" style="text-align:justify" placeholder="Search another book or movie" />
    
    <p align="left">
      <script src='https://use.edgefonts.net/amaranth.js'></script>
     

     <center> <input type="submit" value="Search" class="test" /> </center>
    
</form></center>
<br>
<br>

  <?php
 

   $con = mysqli_connect("localhost", "root" , "", "readandwatch");
   
if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
	session_start();
    
	
	
	
	
	if(isset($_GET['id'])){
$a = $_GET['id'];

	

	$raw_results1 = mysqli_query($con,"SELECT * FROM movies
            WHERE movie_id = '$a'" ) or die(mysqli_connect_error());
			if (!$raw_results1) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
	}
			 $sonuc = mysqli_num_rows($raw_results1) ;
			  $results1 = mysqli_fetch_array($raw_results1);
			 
			  echo'
            <center> <table width=40% border=0>
  <tbody>
    <tr>
	
	 <td rowspan=5 height=100px width=12%>
	 			   <img width=150 src="data:image/jpeg;base64,' .base64_encode( $results1['poster'] ).'"
				   </td>

			   </tr>
			   </p>';

			   echo "
			       <tr>
		<td height=10px width=30% colspan=4><font face='Humnst777 BlkCn BT' size=5 <b>".$results1['movie_name']. "</b></font></td>

    </tr>
		       <tr>
		<td height=10px width=30% colspan=4><font face='Humnst777 BlkCn BT' size=5 <b>".$results1['movie_genre']. "</b></font></td>

    </tr>
	  <tr>
		<td height=10px width=30% colspan=4><font face='Humnst777 BlkCn BT' size=5 <b>".$results1['movie_cast']. "</b></font></td>

    </tr>
	  <tr>
		<td height=10px width=30% colspan=4><font face='Humnst777 BlkCn BT' size=5 <b>".$results1['movie_info']. "</b></font></td>

    </tr>
	<tr>
		<td height=10px width=30% colspan=4> <font face='Humnst777 BlkCn BT' size=4 <b>".$results1['director']. "</b></font></td>
    </tr> 
	    <tr>
    			<td height=10px width=30% colspan=4> <font face='Humnst777 BlkCn BT' size=3 <b>".$results1['runtime']. "</b></font></td>
    </tr>
	<tr>
    <td width=15% height=5%>
    	<div class=wrapper>
  <input type=checkbox id=st1 value=1 />
  <label for=st1></label>
  <input type=checkbox id=st2 value=2 />
  <label for=st2></label>
  <input type=checkbox id=st3 value=3 />
  <label for=st3></label>
  <input type=checkbox id=st4 value=4 />
  <label for=st4></label>
  <input type=checkbox id=st5 value=5 />
  <label for=st5></label>
</div>
    	</td>
		<td width=13%>
		<font face='Humnst777 BlkCn BT' size=4 <b>3.98 average rating</b></font>
		</td>
<td height=10px width=30% colspan=4> <font face='Humnst777 BlkCn BT' size=4 <b>published ".$results1['year']. "</b></font></td>
    </tr>";
			   	echo '
			   	<tr> 
			   <td>
			    <a href="login2.php?id=' . $results1['movie_id'] . '"><img value="Add to library" src="addlibrary.png" />
			  </a>
			   </td>
			   </tr>
			   
			   
			   </table></center>';
			   }
			   
			if(isset($_GET['link2'])){
			$b = $_GET['link2'];
		 $raw_results2 = mysqli_query($con,"SELECT * FROM books
            WHERE book_id = '$b'" ) or die(mysqli_connect_error());
			 $sonuc2 = mysqli_num_rows($raw_results2);
			  $results2 = mysqli_fetch_array($raw_results2);
 echo '
            <center> <table width=40% border=0>
  <tbody>
    <tr>
	
	 <td rowspan=5 height=100px width=12%>
	 			   <img width=150 src="data:image/jpeg;base64,'.base64_encode( $results2['cover'] ).'"
				   </td>

			   </tr>
			   </p>';

			   echo "
			       <tr>
		<td height=10px width=30% colspan=4><font face='Humnst777 BlkCn BT' size=5 <b>".$results2['book_name']. "</b></font></td>

    </tr>
	       <tr>
		<td height=10px width=30% colspan=4><font face='Humnst777 BlkCn BT' size=5 <b>".$results2['book_summary']. "</b></font></td>

    </tr><tr>
		<td height=10px width=30% colspan=4> <font face='Humnst777 BlkCn BT' size=4 <b>".$results2['author_name']. "</b></font></td>
    </tr> 
	    <tr>
    			<td height=10px width=30% colspan=4> <font face='Humnst777 BlkCn BT' size=3 <b>".$results2['book_genre']. "</b></font></td>
    </tr>
	<tr>
    <td width=15% height=5%>
    	<div class=wrapper>
  <input type=checkbox id=st1 value=1 />
  <label for=st1></label>
  <input type=checkbox id=st2 value=2 />
  <label for=st2></label>
  <input type=checkbox id=st3 value=3 />
  <label for=st3></label>
  <input type=checkbox id=st4 value=4 />
  <label for=st4></label>
  <input type=checkbox id=st5 value=5 />
  <label for=st5></label>
</div>
    	</td>
		<td width=13%>
		<font face='Humnst777 BlkCn BT' size=4 <b>3.98 average rating</b></font>
		</td>
<td height=10px width=30% colspan=4> <font face='Humnst777 BlkCn BT' size=4 <b>published ".$results2['publish_year']. "</b></font></td>
    </tr>";
			echo "
			   	<tr> 
			   <td>
			   <a href='login2.php?id=". $results2['book_id'] . "'><img value='Add to library' src='addlibrary.png' /></a>
			   </form>
			   </td>
			   </tr>
			   
			   
			   </table></center>";
			
		}
		
	
	?>
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