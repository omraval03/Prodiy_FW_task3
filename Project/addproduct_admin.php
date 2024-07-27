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
			height: 480px;
			width: 450px;
			zoom: 1;
			filter: alpha(opacity=50);
			opacity:0.8;
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
		border-color: black;

		padding: 5px;
		}


		body{

			background-color: white;

		}

		h1{
			color: black;
			font-size: 40px;
		}
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
  <a href="users_admin.php">Users</a>
  <a href="watches_admin.php">Watches</a>
  <a class="active" href="addproduct_admin.php">Add Product</a>
</div>

	<h1 align="center" >Add Product</h1>


<form method="POST" action="" enctype="multipart/form-data">
	<table align="center" border="1" >
		<tr>
			<td><b>Watch Name:-</b></td>
			<td><input type="text" placeholder="Enter Name" name="pname" required="pname"></td>
		</tr>

		<tr>
			<td><b>Watch Model:-</b></td>
			<td><input type="text" placeholder="Enter Model" name="modelno" required="modelno"></td>
		</tr>
		<tr>
			<td><b>Watch Description:-</b></td>
			<td><input type="text" border="10px" name="description" placeholder="Enter Description" required="description"></td>
		</tr>
		<tr>
			<td><b>Watch Compny:-</b></td>

			<td><b><select name="selectcomp">
				<option value="Sonata">Sonata</option>
				<option value="Titan">Titan</option>
				<option value="Swizer">Swizer</option>
				<option value="Smartwatch">Smart Watch</option>
				<option value="Ajanta">Ajanta</option>
				<option value="Sonam">Sonam</option>

			</select>
		</b>
		</td>
		</tr>

		<tr>
			<td><b>Category:-</b></td>

			<td><b><select name="selectcategory">
				<option value="Mens">Mens</option>
				<option value="Womens">Womens</option>
				<option value="Smartwatch">Smart Watch</option>
				<option value="WallClock">Wall Clock</option>
				
			</select>
		</b>
		</td>
		</tr>
		<tr>
			<td><b>Watch Price:-</b></td>
			<td><input type="number" placeholder="Enter Price" name="price" required="price"></td>
		</tr>


		<tr>
			<td><b>Choose Image:-</b></td>
			<td> <input type="file" 
                   name="uploadfile" 
                   required="uploadfile"
                   value="" /></td>
		</tr>

		<tr>
			<td colspan="2"><center><input type="submit" name="add" value="Submit" onclick="myFunction()"></center></td>
		</tr>
		<tr>
		</tr>
	</table>
</form>



</body>
</html>


<?php  

$add = $_POST['add'];
          
  
  

if (isset($add)) {


$pname = $_POST['pname'];
$selectcomp = $_POST['selectcomp'];
$modelno = $_POST['modelno'];
$price = $_POST['price'];
$description = $_POST['description'];
$selectcategory = $_POST['selectcategory'];



    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;

	$con =mysqli_connect("localhost","root","","watchstoreproject");


$addp="insert into addproducts values('$pname','$description','$selectcomp','$modelno','$price','$filename','$selectcategory')";

mysqli_query($con,$addp);

  echo "<script>
  alert('Product Added');
 
</script>";
echo "<script>

window.open('addproduct_admin.php','_self');

</script>";


        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

mysql_free_result($addp);
mysqli_close();
  }
  // $result = mysqli_query($con, "SELECT * FROM pimage");	




?>