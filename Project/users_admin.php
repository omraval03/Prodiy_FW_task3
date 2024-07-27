<?php session_start(); 


if ($_SESSION['emailid']==NULL) {

echo "<script>

window.open('../index.php','_self');

</script>";
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AddProduct</title>

	<style type="text/css">
		body{
			background-image: url("addp.jpg"); 
			background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
		}
button {
           
  background-color: black;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 15px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
  
  }

	</style>

 <style type="text/css">  
 .topnav {
  background-color: #333;
  overflow: hidden;

  /*height: 100%;*/

}

/* Style the links inside the navigation bar */
.topnav a {
  width: 23.5%;
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: lightyellow;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: yellow;
  color: black;
}
</style>
</head>
<body>



<div class="topnav">
  <a href="orders_admin.php">Orders</a>
  <a class="active" href="users_admin.php">Users</a>
  <a href="watches_admin.php">Watches</a>
  <a href="addproduct_admin.php">Add Product</a>
</div>


<form method="post" action="#" >

</body>
</html>


<?php
$con = mysqli_connect("localhost","root","","watchstoreproject");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT name,mobileno,emailid,address,pincode FROM users_register ORDER BY name";

if ($result = mysqli_query($con, $sql)) {
  echo "<center><table style ='height: 10px;
      width: 100%;
      zoom: 1;
      margin-top:50px ;
      filter: alpha(opacity=50);
      opacity:10;
      border-color: black;
      border-radius: 10px;
      box-shadow: 10px 10px 8px black;
      background-color: white;
      padding: 10px;'><tr style='font-size:30px;'><td>Name</td>
      <td>MobileNo</td>
      <td>EmailId</td>
      <td>Address</td>
      <td>Pincode</td></tr><tr><td><br/></td></tr>";


      // <table border='1px' style='height: 10px;
      // width: 500px;
      // text-align:center;
      // zoom: 1;
      // filter: alpha(opacity=50);
      // opacity:0.8;
      // border-color: black;
      // border-radius: 10px;
      // box-shadow: 10px 10px 8px black;
      // background-color: white;
      // padding: 10px;'>\n","<tr>
  // Fetch one and one row

  while ($row = mysqli_fetch_row($result)) {
    echo "<tr><td>" ,$row[0] ,"</td>","<td>" ,$row[1],"</td>","<td>",$row[2],"</td>","<td>",$row[3],"</td>","<td>",$row[4],"</td></tr><tr><td colspan=6><hr/></td><td><button type=submit name='emailid' value=$row[2]>Delete</button></td></tr>";
  }
  echo "</tr></table></center>";
}
if(isset($_POST['emailid'])){

$abcc = $_POST['emailid'];


$con1 = mysqli_connect("localhost","root","","watchstoreproject");

// $delte = ;

 $abc=mysqli_query($con1, "DELETE FROM users_register where emailid='$abcc'");

if($abc){

  echo "<script>
  alert('Product Delete:-",$abcc,"');
 
</script>";
echo "<script>

window.open('users_admin.php','_self');

</script>";
} else{
  echo "isjdsd";
}
}
  mysqli_free_result($result);

mysqli_close($con);
?>