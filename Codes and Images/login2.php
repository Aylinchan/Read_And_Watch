<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Read&nbsp;&amp;&nbsp;Watch</title>
<link href="anasayfa.css" rel="stylesheet" type="text/css"> 
<link rel="Shortcut Icon"  href="favicon.png"  type="image/x-icon">
<style type="text/css">

.test {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}


.test:hover {background-color: #3e8e41}

.test:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.myclass {
        height: 20px;
        position: relative;
        border: 2px solid #cdcdcd;
        border-color: rgba(0,0,0,.14);
        background-color: AliceBlue ;   ;
        font-size: 14px;
    }
</style>
</head>

<body>
<?php
session_start();
if(isset($_GET['id'])){
$id = $_GET['id'];

echo "yes";
$_SESSION['id'] = $id;
}
else{
echo "no";
}
?>
<table>

<tr>
<td width="2%"></td>
<td height="175" width="20%">
<a href="index.html">

<img src="Logo.png" width="400"></a>

</td>
<td width="55%"></td>
 <td width="12%" valign=”top” >
  <div class="row">

    <td width="12%" valign=”top”>
    <div class="col-md-3 col-sm-3 col-xs-6"> <a href="register.html" class="btn btn-sm animated-button victoria-one">Sign up</a> </div></td>
  </div>

  </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<div class="login-wrap">
	<div class="login-html">
	<form method="post" action="library.php">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>

		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>

				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			</div>
	</div>
</div>
     </form>
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
