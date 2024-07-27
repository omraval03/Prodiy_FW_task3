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


.float{
  position:fixed;
  /*position: all;*/
  width:60px;
  height:60px;
  right:80px;
  top: 35px;
  text-align:center;
  text-align-last: center;
}

.my-float{
  margin-top:22px;
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
  a{
    color: white;
  }
</style>

</head>
<body>



<div class="topnav">
  <a class="active" href="orders_admin.php">Orders</a>
  <a href="users_admin.php">Users</a>
  <a href="watches_admin.php">Watches</a>
  <a href="addproduct_admin.php">Add Product</a>
</div>


<?php

$con = mysqli_connect("localhost","root","","watchstoreproject");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// $sql = "SELECT pname,description,selectcomp,modelno, FROM addproducts ORDER BY pname";
 $sql = "SELECT * FROM `orders_list` WHERE 1";
 // $sql = "SELECT * FROM `addproducts` WHERE ";





if ($result = mysqli_query($con, $sql)) {
  echo "<center><form action='orders_admin.php' method='post'>
  <table  style ='height: 10px;
      width: 90%;
      zoom: 1;
      margin-top:30px ;
      filter: alpha(opacity=50);
      opacity:10;
      border-color: black;
      border-radius: 10px;
      box-shadow: 10px 10px 8px black;
      background-color: white;
      padding: 50px;'><tr style='font-size:30px;'><td>Product</td>
      <td>Quntity</td>
      <td>Name</td>
      <td>MobileNO</td>
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



   // if($row == $selectcomp){
//     while ($row = mysqli_fetch_row($result)) {
//     echo "<tr><td>" ,$row[0] ,"</td>","<td>" ,$row[1],"</td>","<td>",$row[2],"</td>","</td>","<td>",$row[6],"</td>","<td>",$row[3],"</td>","<td>",$row[4],"</td>","<td><img src='image/",$row[5],"' height='100px' width='100px'/></td><td><button><a href='product_edit.php?id=$row[3]'>Edit</a></button></td>
//     <td><button type=submit name='moldno' value=$row[3]>Delete</button></td></tr><tr><td colspan=6><hr/></td></tr>";
//   }

// }

  while ($row = mysqli_fetch_row($result)) {
    echo "<tr><td>" ,$row[1] ,"</td>","<td>" ,$row[2],"</td>","<td>",$row[3],"</td>","<td>",$row[4],"</td>","<td>",$row[5],"</td>","<td>",$row[6],"</td>","<td><button type=submit name='id' value='$row[0]'>Delete</button></td></tr><tr><td colspan=6><hr/></td>";
  }


  echo "</tr></table></form></center>";
}



?><?php
$abcc = $_POST['id'];

echo $abcc;

if(isset($_POST['id'])){

// echo $delete; 


$con1 = mysqli_connect("localhost","root","","watchstoreproject");

// $delte = ;

 $abc=mysqli_query($con1, "DELETE FROM orders_list where id=$abcc");

if($abc){

  echo "<script>
  alert('Order Delete');
 
</script>";
echo "<script>

window.open('orders_admin.php','_self');

</script>";
} else{
  echo "isjdsd";
}

}



  mysqli_free_result($result);


mysqli_close($con);

?>




</body>
</html>



