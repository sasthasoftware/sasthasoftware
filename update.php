<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `data`where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$ProductName=$row['ProductName'];
$Pieces=$row['Pieces'];
$Box=$row['Box'];





if(isset($_POST['submit'])){
  $ProductName=$_POST['ProductName'];
  $Pieces=$_POST['Pieces'];
  $Box=$_POST['Box'];



$sql="update `data`set id=$id,ProductName='$ProductName',Pieces=$Pieces,Box=$Box
where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    //echo"Data updated successfully";
   header('location:display.php');
}
else{
    die(mysqli_error($con));

}
}









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>
<body>
<style>
input {
  width: 100%;
  padding: 12px;
  border: 3px solid #00fdf8;
  border-radius: 4px;
  resize: vertical;
  font-size: 17px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
.container {
  border-radius: 5px;
  background-color: #2099e4;
  padding: 20px;
  color: rgb(245, 245, 220);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 17px;
  font-weight: 600;
  border: 5px solid #00fdf8;
width: 50%;

}

.col-25 {
  float: left;
  width: 20%;
  margin-top: 16px;
}

.col-75 {
  float: left;
  width: 70%;
  margin-top: 16px;
}
.row::after {
  content: "";
  display: table;
  clear: both;
}

  input[type=submit] {
  background-color: #080f31;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  width: 15%;
}

input[type=submit]:hover {
  background-color: #0800ff;
}
input[type=reset] {
  background-color: #080f31;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  width: 15%;
}

input[type=reset]:hover {
  background-color: #0800ff;
}

    
</style>
<body>
    <center>
   <div class="container">
        <form  method="post">
        <div class="row">
          <div class="col-25">
    <label for="pname">Product Name</label>
</div>
<div class="col-75">
    <input id="pname"  placeholder="Enter Product Name here"type="text" autocomplete="off" name="ProductName" class="ProductName" value=<?php echo $ProductName;?> > 
</div>
</div>   
<div class="row">
    <div class="col-25">
    <label for="Pieces">Pieces</label>
</div>
<div class="col-75">
    <input id="Pieces"  placeholder="Select"type="number" autocomplete="off" name="Pieces" class="Pieces"  value=<?php echo $Pieces;?>></div>
</div>
<div class="row">
    <div class="col-25">
    <label for="box`">Box</label>
</div>
<div class="col-75">
    <input id="box"  placeholder="Select"type="number"autocomplete="off" name="Box" class="Box"  value=<?php echo $Box;?>>   
</div></div>


<br>
  <div class="row">
    <input type="submit"  name="submit" value="Update">
    
    <input type="reset">
</form>


</center>


</body>
</html>