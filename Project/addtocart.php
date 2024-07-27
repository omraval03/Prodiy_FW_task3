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
  $urow= mysqli_fetch_array($resultsss);

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
<body bgcolor="#f2f2f2">


<div class="topnav">
<b style="font-size: 40px; color: white; padding-top:10px; padding-left: 10px;">Watch Store</b>
  
  <a class="active" href="addtocart.php" ><img src="addblack.png" style="height: 25px; width: 25px;"></a>
  <a href="profile.php">Profile </a>
  <a href="watches.php">Wateches</a>
  <a href="home.php">Home</a>
</div>
<?php 


   $con=mysqli_connect("localhost","root","","watchstoreproject");
  $id = $_GET['id'];

  $resultsss=mysqli_query($con , "SELECT * FROM addproducts WHERE modelno ='$id'");
  
  if ($id == NULL) {
    echo "<h1 align='center'>Product No Selected</h1>";
  }

  

  echo "<center> <form action='' method='post'>";
  
  while($row = mysqli_fetch_array($resultsss))
  { echo "<center><table style ='height: 10px;
      width: 90%;
      zoom: 1;
      margin-top:50px ;
      filter: alpha(opacity=50);
      opacity:10;
      border-color: black;
      border-radius: 10px;
      box-shadow: 10px 10px 8px black;
      background-color: white;
      padding: 50px;'><tr style='font-size:30px;'><td>Product</td>

      <td>Category</td>
      <td>Compony</td>
      <td>ModelNo</td>
      <td>Price</td>
      <td>Image</td>

      <td>Quntity</td>";
    echo "

       <tr><td>" ,$row[0] ,"</td>","<td>",$row[2],"</td>","</td>","<td>",$row[6],"</td>","<td>",$row[3],"</td>","<td>",$row[4],"</td>","<td><img src='admin/image/",$row[5],"' height='100px' width='100px'/></td><td><input type=number name='quntity' value='1' style=height:30px;width:70px;/></td>
    </tr>
    
    ";

  }
  echo "</tr>
  <tr><td colspan=7 align=center><input type=submit name='checkout' value='Place Order' /></td></tr></table></center>";

  echo "</form></center>";

  ?>
  


</body>

</html>


<?php
// Ensure that POST data is only processed when the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect("localhost", "root", "", "watchstoreproject");
    $id = $_GET['id'];
    $resultsss = mysqli_query($con, "SELECT * FROM addproducts WHERE modelno ='$id'");
  
    // Check if the checkout button was pressed and if quantity is set
    if (isset($_POST['checkout']) && isset($_POST['quntity'])) {
        $quntity = $_POST['quntity']; // Single value expected

        while ($row = mysqli_fetch_array($resultsss)) {
            // Ensure $quntity is a valid number
            if (is_numeric($quntity)) {
                $checkout = $_POST['checkout'];
                if (isset($checkout)) {
                    $addp = "INSERT INTO orders_list VALUES (NULL, '$row[0]', '$quntity', '$urow[0]', '$urow[3]', '$urow[5]', '$urow[6]')";
                    mysqli_query($con, $addp);

                    echo "<script>
                    alert('Order Placed.....');
                    window.open('home.php', '_self');
                    </script>";
                }
            }
        }
    }
}
?>
