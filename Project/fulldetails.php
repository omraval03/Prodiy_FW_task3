<?php session_start(); 


if ($_SESSION['emailid']==NULL) {

echo "<script>

window.open('index.php','_self');

</script>";
}

 ?>



<?php 

	$con =mysqli_connect("localhost","root","","watchstoreproject");

  $id = $_GET['id'];
  if ($id==NULL) {

echo "<script>

window.open('home.php','_self');

</script>";
}

	$resultsss=mysqli_query($con , "SELECT * FROM addproducts WHERE filename ='$id'");
	$row= mysqli_fetch_array($resultsss);
	// mysqli_close($con);
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>fullscreen</title>
</head>
<style type="text/css">
	
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
<body>
<table width=60% ><tr>
	<td><img src="admin/image/<?php echo $id; ?>" style=" border:solid 1px black;
  opacity:0.80;
  border-color:black;
  height: 400px;
  width: 400px;
 ">
</td><td align="left">
	<h1><?php echo $row[0]; ?></h1>
	<h3>Information:- <?php echo $row[1]; ?></h3>
	<h2>Company:- <?php echo $row[2]; ?></h2>
	<h2>Rs.<?php echo $row[4]; ?></h2>
        <a href='addtocart.php?id=<?php echo $row[3]; ?>'><button>Add To Cart</button></a>

	<h3>Information:- <?php echo $row[1]; ?></h3>

</td>
	
</tr></table>
</body>
</html>