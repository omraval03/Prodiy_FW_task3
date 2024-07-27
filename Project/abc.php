<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AddProduct</title>

	<style type="text/css">
		body{
			background-image: url("addp.jpg"); 
			background-size: cover;

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
  width: 18.5%;
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
  <a href="users_admin.php">Users</a>
  <a href="ads_admin.php">Ads</a>
  <a class="active" href="watches_admin.php">Watches</a>
  <a href="addproduct_admin.php">Add Product</a>
</div>







<?php
$con = mysqli_connect("localhost","root","","watchstoreproject");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT pname,description,selectcomp,modelno,price,pimg FROM addproducts ORDER BY pname";

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
      <td>Pincode</td>";


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
    echo "<tr><td>" ,$row[0] ,"</td>","<td>" ,$row[1],"</td>","<td>",$row[2],"</td>","<td>",$row[3],"</td>","<td>",$row[4]"</td></tr>";
  }
  echo "</tr></table></center>";
  mysqli_free_result($result);
}

mysqli_close($con);
?>

</body>
</html>

