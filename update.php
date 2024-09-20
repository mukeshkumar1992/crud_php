<!--php code-->
<?php 
include "shareconnection.php";
// error_reporting(4);
$id =$_GET['id'];
if(isset($_POST['update'])){
$id =$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$visitcity = $_POST['visitcity'];
$members = $_POST['members'];
$date = $_POST['date'];

$sql = "UPDATE `students_tbl` SET `name`='$name',`email`='$email',`phone`='$phone',`address`='$address',`visitcity`='$visitcity',`members`='$members',`date`='$date' WHERE id = $id";

$result = mysqli_query($link,$sql);

if($result) {
    header("Location: retrieve.php?msg=Record Update Successfully");
}
else{
    echo "Failed: " . mysqli_error($link);
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourist Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--Bootstrap Icon Link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
        <?php
        $sql = "SELECT * FROM `students_tbl` WHERE id = $id LIMIT 1";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
    
    
   <!--form-->
   <div class="updatemain">
    <div class="container">
      <form action="update.php" method="POST" class="form-group">
        <h2>Tourist  <span class="text-warning">UPDATE</span> </h2>
        <hr class="text-light fw-bold">
        <input type="hidden" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="id" value ="<?php echo $row['id']?>">
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="name" value ="<?php echo $row['name']?>">
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="email" value ="<?php echo $row['email']?>">
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="phone" value ="<?php echo $row['phone']?>">
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="address" value ="<?php echo $row['address']?>">
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="visitcity" value ="<?php echo $row['visitcity']?>">
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="members" value ="<?php echo $row['members']?>">
        <input type="date" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="date" value ="<?php echo $row['date']?>">
        
        <p class="d-inline-flex gap-1 mb-5">
          <button type="submit" class="btn btn-outline-success text-uppercase fw-bold" name="update">update</button>
          <input type="clear" class="btn btn-outline-danger text-uppercase fw-bold ms-3" value="cancel">
          <a href="retrieve.php" class="btn btn-outline-warning me-md-2 fw-bold text-uppercase"> Show Record </a>
        </p>
    
      </form>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
