<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>inster form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		
		body{
    background-color: white;
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
.splash{
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    background-color:black;
    font-size: 2em;
    display: flex;
    align-items: center;
    justify-content: center;
    animation-name: open;
    animation-duration: 1.5s;
    animation-delay: 3s;
    animation-fill-mode: forwards;
}

.splash::after, .splash::before{
    content: "";
    position: absolute;
    background-color: black;
    height: 100vh;
    width: 35vw;
    z-index: 99;
    animation-name: open;
    animation-fill-mode: forwards;
    animation-duration: 4.5s;
}
.splash::after{
    left: 30vw;
    animation-delay: 200ms;
}
.splash::before{
    left: 0;
    animation-delay: 2s;
}
@keyframes open{
    0%{
        transform: translate(0, 0);
    }
    100%{
        transform: translate(220%, 0);
    }
}

@keyframes fadeIn{
    0%{
        padding-top: 20px;
        color: transparent;
    }
    100%{
        padding-top: 0;
        color: black;
    }
}


		td{
			font-size: 20px;
			border: 0;



		}
		a{
		}
		tr{
			align-content: center;
		}
		table{
			height: 300px;
			width: 350px;

			zoom: 1;
			filter: alpha(opacity=50);
			opacity: 0.90;
			border-color: black;
			border-radius: 10px;
			box-shadow: 10px 10px 8px black;
			background-color: white;
			padding: 10px;

		}

		 input[type = submit] {
           
  background-color: black;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
  }

		input{
		border-radius: 5px; 
		text-shadow: white;
		background-color:white;
		padding: 5px;

		}

		textarea
		{
			border-radius: 5px; 
		text-shadow: white;
		background-color:white;
		padding: 5px;
		}


		body{
			background-image: url("background.jpg"); 
			background-size: cover;

		}

		h1{
			color: white;
			font-size: 50px;
		}

	</style>
</head>
<body  >

	<h1 align="center" >Login</h1>


	<div class="content">
<form method="post" action="#">
	<table align="center">

		<tr>
			<td><b>Email Id:-</b></td>
			<td><input type="text"  placeholder="Enter EmailId" name="emailid" ></td>
		</tr>
		<tr>
			<td><b>Password:-</b></td>
			<td><input type="Password" placeholder="Enter Password" name="password"></td>
		</tr>
		<tr>

		<tr>
			<td colspan="2"><center><input type="submit" name="s1" value="Submit"></center></td>
		</tr>
		<tr>
			<td>
		<h3><a href="register.php"  style="color: black; ">Register Now</a></h3>

		</td>
		<!-- <td>
		<a href="forgetpage.php" style="color: black; padding: 20px; ">Forgate Password</a>

		</td> -->
		</tr>
	</table>
</form>



</div>


<div class="splash">
        <img src="01.jpg"><p style="color: white; font-family: Fantasy; padding: 20px;">Watch Store</p>
    </div>

</body>
</html>

<?php 
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$submit=$_POST['s1'];

if (isset($submit)) {

if ($emailid==null) {
	echo "<script>
function myFunction() {
  alert('Enter Emailid');
}
</script>";
}
elseif ($password==null) {	
	echo "<script>
function myFunction() {
  alert('Enter Password');
}
</script>";
}
else{
$con=mysqli_connect("localhost","root","","watchstoreproject");
$query="select * from  users_register where emailid='$emailid' and password='$password'";
$row=mysqli_query($con,$query);

$row1= mysqli_num_rows($row);


if ($emailid == "abhiaf5474@gmail.com"&& $password == "12891289") {
		 $_SESSION['emailid']="abhiaf5474@gmail.com";


echo "<script>

window.open('admin/addproduct_admin.php','_self');

</script>";
}

elseif ($row1>0) {
		 $_SESSION['emailid']=$emailid;
 
echo "<script>

window.open('home.php','_self');

</script>";
}else{
	

 echo "<script>
  alert('Enter Valid Emailid And Password');
 
</script>";

// }
// $con=mysqli_connect("localhost","root","","watchstoreproject");

// $query="select * from  users_register where emailid='$emailid' and password='$password'";



}
}}
?>
