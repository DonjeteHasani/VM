<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	  <style type="text/css">
	 body{
		background-color:#242943;
	}
		@keyframes geethu {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0px;
			opacity: 1;
		}
	}
		#nav
{
	background: #242943;
	height:70px;
	width:100%;
	line-height: 60px;
	animation: geethu 3s ease-in-out forwards;
	
}
#nav h1{
	float: left;
}
#nav h1 a{
	position: absolute;
	text-decoration: none;
	color: white;
	font-family: 'Potta One', cursive;
	margin-left: 25px;
	top:10px;
}
@keyframes geethu {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0px;
			opacity: 1;
		}
	}
#nav ul{
	float: right;
}
#nav ul li{
	text-decoration: none;
	list-style-type: none;
	display: inline-block;
}
#nav ul li a{
	text-decoration: none;
	color: white;
	font-weight: bold;
	font-family: 'Potta One', cursive;
	padding: 25px;
}
#nav ul li :hover{
	background: aliceblue;
	color: #132347;
	transition: all ease-in-out 0.40s;
}


	  h3{
			font-size: 50px;
			font-family: 'Potta One', cursive;
			color: white;
		}
		h3{
			position: absolute;
  left: 420px;
  top: 45px;
		}
		#ph{
			/* padding-top: 60px; */
			font-size:20px;
			font-weight: bold;
			background:#132347;
			color: aliceblue;
			height: 50px;
    		width: 250px;
			font-family: 'Potta One', cursive;
			border-color: aliceblue;
			position:absolute;
			top:485px;
	        left:515px;
			
		}
		

		#ph {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
#ph span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

		#ph:hover{
			background: aliceblue;
			color: #132347;
		}
		#ph span:after,#ul span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
#ph:hover span {
  padding-right: 25px;
}
#ph:hover span:after {
  opacity: 1;
  right: 0;
}

#ph:active, {
  background-color: #030C0C;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
h5
{
	font-family: 'Potta One', cursive;
	font-size:25px;
	color:white;
	position:absolute;
	top:300px;
	left:540px;
	

}
h6{
	font-family: 'Potta One', cursive;
	font-size:25px;
	color:white;
	position:absolute;
	top:150px;
	left:540px;
	
	
}
#r{
  padding:10px;
  border:0;
  box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
  border-radius:15px;
  width:20%;
  border: 4px solid #C6D4D0;
  
}
#s{

padding:10px;
border:0;
box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
border-radius:15px;
width:20%;
border: 4px solid #C6D4D0;
position:absolute;
top:360px;
left:510px;

}
#ig{
position:absolute;
top:265px;
}
/* #if{
position:absolute;
top:265px;
padding-right: 5000px;
} */
#qq{
	position: absolute;
	top: 43.5%;
	left: 75%;
}

</style>
</head>
<body>
<div id="nav">
		
		<img src="vol.png"  height="70" width="70" align="left"> 
		<h1><a href="login.php">Volunteer System<BR CLEAR="left" /></a></h1>
	
    <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="contact.html">CONTACT US</a></li>
        
          <li><a href="login.php">LOGIN</a></li>
		  <hr style="height:2px;border-width:0;color:gray;background-color:white">
    </li>
    </ul>
</div>

	<center>
		
		<br></br><br><br><br><br>
		<form action="" method="post">
			<h6>Admin Email ID : </h6><input id="r" type="text" class="label" name="email" required><br><br><br>
			<h5>Admin Password : </h5><input id="s" type="password" class="label" name="password" required><br><br><br><br>
			<input id="ph" type="submit" name="submit" class="button" value="LogIn">
		</form><br>
		</center>
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("db4free.net:3306","rilinda","cfa4b2b5");
				$db = mysqli_select_db($connection,"volunteerapp");
				$query = "SELECT * FROM login WHERE email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							//header("Location: admin_dashboard.php");
							echo "<script>window.location.href='https://vm-eight.vercel.app/api/admin_dashboard.php';</script>";
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
				}
				
			}
		?>
		
</body>
</html>