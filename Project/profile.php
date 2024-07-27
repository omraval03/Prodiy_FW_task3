<?php session_start(); 


if ($_SESSION['emailid']==NULL) {

echo "<script>

window.open('index.php','_self');

</script>";
}

 ?>

<?php
  $con =mysqli_connect("localhost","root","","watchstoreproject");

$emailid = $_SESSION['emailid'];
$resultsss=mysqli_query($con , "SELECT * FROM users_register WHERE emailid ='$emailid'");
  $row= mysqli_fetch_array($resultsss);

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home</title>
  
 <style type="text/css">  
 .topnav {
  background-color: #09111b;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  width: 7%;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
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


.pro
{
  
  height:150px;
  width:150px;
  border:1px solid;
  text-align:center;
  float:left;
  margin-left: 150px;
  margin-top:80px;
  margin-bottom: 50px;


   
}
.pro img
{
  border-color: linear-gradient(to right,#333399,#ff00cc);
  width:100%;
  height:100%;
  padding-top: 0px;

  
}
.pre
{
  margin-top: 5px;
  padding-top: 10px;
    font-size: 15px;

}



* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;
margin-top: 5px;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  padding-left: 50px;
  padding-right: 50px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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
  a{
    color: white;
  }
  table{
      height: 480px;
      width: 500px;
      zoom: 1;
      margin-top: 20px;
      filter: alpha(opacity=50);
      border-color: black;
      border-radius: 10px;
      box-shadow: 10px 10px 8px black;
      background-color: white;
      padding: 10px;

  }
</style>
</head>
<body bgcolor="#f2f2f2">


<div class="topnav">
<b style="font-size: 40px; color: white; padding-top:10px; padding-left: 10px;">Watch Store</b>
  
  <a class="active" href="addtocart.php" style="background: blue;" ><img src="addwhite.png" style="height: 25px; width: 25px;"></a>
  
  <a class="active" href="profile.php">Profile</a>
  <a href="watches.php">Wateches</a>
  <a  href="home.php">Home</a>
</div>

<h1 align="center">Profile</h1>
<form action="" method="post">
<table align="center">
  
<tr>
  <td><h3>Name:</h3></td>
  <td><input type="text" name="name" value="<?php echo $row[0]; ?>"></td>

</tr>

<tr>
  <td><h3>Mobile NO:</h3></td>
  <td><input type="number" name="mobileno" value="<?php echo $row[3]; ?>"></td>

</tr>

<tr>
  <td><h3>Address:</h3></td>
  <td><input type="text" name="address" value="<?php echo $row[5]; ?>"></td>

</tr>
<tr>
  <td><h3>Pincode:</h3></td>
  <td><input type="text" name="pincode" value="<?php echo $row[6]; ?>"></td>

</tr>
<tr><td colspan="2" align="center"><input type="submit" name="update" value="Update"></td></tr>
</table>

<br>
<center>

 <b> Do You Want To</b> 
<input type="submit" name="signout" value="SignOut">
<b>Your Profile.</b>
</center>

</form>


</body>

</html>



<?php 
$name=$_POST['name'];
$mobileno=$_POST['mobileno'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$signout=$_POST['signout'];


$update=$_POST['update'];


if (isset($signout)) {

  session_destroy();

 echo "<script>
  alert('SignOut Done.... ');
 
</script>";

echo "<script>

window.open('index.php','_self');

</script>";

}

if (isset($update)) {

   $con =mysqli_connect("localhost","root","","watchstoreproject");

// // UPDATE `watchstoreproject`.`addproducts` SET `price` = '100' WHERE `addproducts`.`pname` = 'Sonata A2' AND `addproducts`.`description` = 'sdfeafedc' AND `addproducts`.`selectcomp` = 'Sonata' AND `addproducts`.`modelno` = 'A2' AND `addproducts`.`price` = '551202' AND `addproducts`.`filename` = 'images0EXLLZOX.jpg' LIMIT 1 ;
// $addp="UPDATE `addproducts` SET `price` = '200' WHERE `pname` = 'Sonata A2' , `description` = 'sdfeafedc' , `selectcomp` = 'Sonata' , `modelno` = 'A2' , `price` = '1000' , `filename` = 'images0EXLLZOX.jpg'
// ";


$addp="UPDATE users_register SET name = '$name', mobileno='$mobileno', address='$address',pincode='$pincode' WHERE emailid='$emailid'";

$abc=mysqli_query($con,$addp);




}
 



?>