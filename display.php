<?php
include('connect.php');


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
</head>
<style>  
body{
  background-color:  #e6ffff;
}

.container
{
 
  border-radius: 5px;
  background-color: #2099e4;
  padding: 2px;
  font-size:20px;

    
}

a{
  padding:10px 10px;
    text-align: center;
    color: #ffffff;
    background-color: red;
    border-radius: 10px;
   
}
 th {
  border: 1px solid white;
  color:white;
  Background-color:black;
  font-size:20px;
}

table
{
    border-collapse: collapse;
  width: 100%;
}

td {
  text-align: center;
  border: 1px solid black;
  padding:20px 20px;
}
button {
    
    border:1px solid black;
    padding: 5px 8px;
    text-align: center;
    color: #ffffff;
    background-color: blue;
    border-radius: 10px;
    outline: none;
}

.top-right {
              position: absolute;
              top: 120px;
              right: 80px;
            }
</style>
<body>
    <div class="container">
                <center><h2>PRODUCT DETAILS</h2></center>
</div>

<br>
<form><button type="submit" formaction="index.php"><h2 style="font-size:18px">Add Product</h2></button></form>
<div class="top-right"><form><button type="submit" formaction="index.php"><h2 style="font-size:18px">Back</h2></button></form></div>
    
<br>          
<div>
<table >
    <tr>
<th>SI.NO</th>
<th>Product Name</th>
<th>Pieces</th>
<th>Box</th>
<th>Edit</th>
<th>Delete</th>



</tr>
<tr>
   
<?php

$sql="Select * from `data`";
$result=mysqli_query($con,$sql);
if($result)
{
  while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$ProductName=$row['ProductName'];
$Pieces=$row['Pieces'];
$Box=$row['Box'];
  
echo '
<tr>
<td scope="row">'.$id.'</td>
<td>'.$ProductName.'</td>
<td>'.$Pieces.'</td>
<td>'.$Box.'</td>
<td> <a href="update.php?
updateid='.$id.'">Update</a>
               </td>
<td><a href="delete.php?
deleteid='.$id.'">Delete</a></td>
</tr>';
  }
}



    ?>




    


</table> 
</div>
</body>
</html>