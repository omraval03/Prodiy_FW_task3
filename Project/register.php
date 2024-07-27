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
			height: 500px;
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
  font-size: 20px;
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
<body>
	 

	<h1 align="center" >Registration</h1>


<form method="post" action="#">
	<table align="center" >
		<tr>
			<td><b>Full Name:-</b></td>
			<td><input type="text" required="Full Name" placeholder="Enter Name" name="name"></td>
		</tr>

		<tr>
			<td><b>Mobile No:-</b></td>
			<td><input type="number" required="Mobile No" placeholder="Enter MobileNo" name="mobileno"></td>
		</tr>

		<tr>
			<td><b>Email Id:-</b></td>
			<td><input type="email" required="Emailid" placeholder="Enter EmailId" name="emailid"></td>
		</tr>

		<tr>
			<td><b>Adress:-</b></td>
			<td><textarea name="address" required="Address" placeholder="Enter Address"></textarea></td>
		</tr>

		<tr>
			<td><b>Pincode:-</b></td>
			<td><input type="number" required="Pincode" placeholder="Enter Pincode(Zipcode)" name="pincode"></td>
		</tr>

		<tr>
			<td><b>Password:-</b></td>
			<td><input type="Password" required="password" placeholder="Enter Password" name="password"></td>
		</tr>

		<tr>
			<td><b>Confirm Password:-</b></td>
			<td><input type="Password" required="Confirm Password" placeholder="Enter Confirm Password" name="cpassword"></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="s1" value="Submit" onclick="myFunction()"></center></td>
		</tr>
		<tr>
			<td colspan="2">
		<h3><a href="index.php" style="color: black;">Login Page</a></h3>

		</td>
		</tr>
	</table>
</form>



</body>

</script>
</html>



<?php  
$name=$_POST['name'];
$mobileno=$_POST['mobileno'];
$emailid=$_POST['emailid'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$submit=$_POST['s1'];


if (isset($submit)) {
	
// if ($name==null || $mobileno==null || $emailid==null || $address==null || $password==null || $pincode==null || $cpassword==null) {
// 	echo "<script>
// function myFunction() {
//   alert('Enter All Feilds');
// }
// </script>";
// }
if ($name==null) {
	echo "<script>
function myFunction() {
  alert('Enter Name');
}
</script>";
}
elseif ($mobileno==null) {
	echo "<script>
function myFunction() {
  alert('Enter MobileNo');
}
</script>";
 }

// elseif ($mobileno<10) {
// 	echo "<script>
// function myFunction() {
//   alert('Enter Valid MobileNo');
// }
// </script>";
// }
// elseif ($mobileno>10) {
// 	echo "<script>
// function myFunction() {
//   alert('Enter Valid MobileNo');
// }
// </script>";
// }
elseif ($emailid==null) {
	echo "<script>
function myFunction() {
  alert('Enter Emailid');
}
</script>";

}elseif ($address==null) {
	echo "<script>
function myFunction() {
  alert('Enter Address');
}
</script>";
}elseif ($pincode==null) {
	echo "<script>
function myFunction() {
  alert('Enter Pincode');
}
</script>";
}
// }
// elseif ($pincode>6) {
// 	echo "<script>
// function myFunction() {
//   alert('Enter Valid Pincode');
// }
// </script>";
// }
// elseif ($pincode<6) {
// 	echo "<script>
// function myFunction() {
//   alert('Enter Valid Pincode');
// }
// </script>";
// }
elseif ($password==null) {
	echo "<script>
function myFunction() {
  alert('Enter Password');
}
</script>";
}
elseif ($cpassword==null) {
	echo "<script>
function myFunction() {
  alert('Enter Confirm Password');
}
</script>";
}

elseif ($cpassword!=$password) {
	echo "<script>
function myFunction() {
  alert('Confirm Password not Same');
}
</script>";
}
else{


$con=mysqli_connect("localhost","root","","watchstoreproject");
 $q = "select * from users_register where emailid ='$emailid' ";
$c1= mysqli_query($con,$q);
$num = mysqli_num_rows($c1);

if ($num >= 1) {
	echo "<script>
function myFunction() {
  alert('Alrady Emailid Registerd');
}
</script>";

}
else{
$a="insert into users_register values('$name','$password','$cpassword','$mobileno','$emailid','$address','$pincode')";

mysqli_query($con,$a);


 echo "<script>
  alert('Registration Done... Please Login...');
 
</script>";

echo "<script>

window.open('index.php','_self');

</script>";

}
}
}
?>


