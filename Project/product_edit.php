<?php session_start(); 


if ($_SESSION['emailid']==NULL) {

echo "<script>

window.open('../index.php','_self');

</script>";
}

 ?>




<?php 

	$con =mysqli_connect("localhost","root","","watchstoreproject");

  $id = $_GET['id'];

  if ($id==NULL) {

echo "<script>

window.open('../index.php','_self');

</script>";
}

	$resultsss=mysqli_query($con , "SELECT * FROM addproducts WHERE modelno ='$id'");
	$row= mysqli_fetch_array($resultsss);
	// mysqli_close($con);
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
			width: 500px;
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



	<h1 align="center" >Edit Product</h1>


<form method="POST" action="" enctype="multipart/form-data">
	<table align="center" border="1" >
	<tr>
			<td><b>Watch Name:-</b></td>
			<td><input type="text" value="<?php echo $row[0]; ?>" placeholder="Enter Name" name="pname"></td>
		</tr>

		<tr>
			<td><b>Watch Model:-</b></td>
			<td colspan=2><input type="text" value="<?php echo $row[3]; ?>" placeholder="Enter Model" name="modelno"></td>
		</tr>
		<tr>
			<td><b>Watch Description:-</b></td>
			<td><input type="text" border="10px" value="<?php echo $row[1]; ?>" name="description" placeholder="Enter Description"></td>
		</tr>
		<tr>
			<td><b>Watch Compny:-</b></td>

			<td><b><select name="selectcomp"  >
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
			<td><input type="number" value="<?php echo $row[4]; ?>" placeholder="Enter Price" name="price"></td>
		</tr>

		
		<tr>
			<td><b>Choose Image:-</b></td>
			<td> <input type="file" 
                   name="uploadfile"  /></td>
                   <td><img src="image/<?php echo $row[5]; ?>"></td>

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

$pname = $_POST['pname'];
$selectcomp = $_POST['selectcomp'];
$modelno = $_POST['modelno'];
$price = $_POST['price'];
$add = $_POST['add'];
$description = $_POST['description'];
$selectcategory = $_POST['selectcategory'];



    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
       
       move_uploaded_file($tempname, "image/$filename"); 
  

  $id = $_GET['id'];
  
  // echo $id;

if (isset($add)) {

	if($filename==null){
		$filename = $row[5];
		
	$con =mysqli_connect("localhost","root","","watchstoreproject");

// // UPDATE `watchstoreproject`.`addproducts` SET `price` = '100' WHERE `addproducts`.`pname` = 'Sonata A2' AND `addproducts`.`description` = 'sdfeafedc' AND `addproducts`.`selectcomp` = 'Sonata' AND `addproducts`.`modelno` = 'A2' AND `addproducts`.`price` = '551202' AND `addproducts`.`filename` = 'images0EXLLZOX.jpg' LIMIT 1 ;
// $addp="UPDATE `addproducts` SET `price` = '200' WHERE `pname` = 'Sonata A2' , `description` = 'sdfeafedc' , `selectcomp` = 'Sonata' , `modelno` = 'A2' , `price` = '1000' , `filename` = 'images0EXLLZOX.jpg'
// ";


$addp="UPDATE addproducts SET pname = '$pname', selectcomp='$selectcomp',modelno='$id', description='$description',price='$price',filename='$filename',selectcategory='$selectcategory' WHERE modelno='$id'";

mysqli_query($con,$addp);


        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

	}else{


	}

	$con =mysqli_connect("localhost","root","","watchstoreproject");

// // UPDATE `watchstoreproject`.`addproducts` SET `price` = '100' WHERE `addproducts`.`pname` = 'Sonata A2' AND `addproducts`.`description` = 'sdfeafedc' AND `addproducts`.`selectcomp` = 'Sonata' AND `addproducts`.`modelno` = 'A2' AND `addproducts`.`price` = '551202' AND `addproducts`.`filename` = 'images0EXLLZOX.jpg' LIMIT 1 ;
// $addp="UPDATE `addproducts` SET `price` = '200' WHERE `pname` = 'Sonata A2' , `description` = 'sdfeafedc' , `selectcomp` = 'Sonata' , `modelno` = 'A2' , `price` = '1000' , `filename` = 'images0EXLLZOX.jpg'
// ";


$addp="UPDATE addproducts SET pname = '$pname', selectcomp='$selectcomp',modelno='$id', description='$description',price='$price',filename='$filename' WHERE modelno='$id'";

$abc=mysqli_query($con,$addp);


        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
if($abc){

  echo "<script>
  alert('Product Edit');
 
</script>";
echo "<script>

window.open('watches_admin.php','_self');

</script>";
} else{
  echo "isjdsd";
}




  // $result = mysqli_query($con, "SELECT * FROM pimage");	




?>