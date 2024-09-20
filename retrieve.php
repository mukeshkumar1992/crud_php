<?php
include_once 'shareconnection.php';
$result = mysqli_query($link,"SELECT * FROM students_tbl");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--custome css link add-->
    <link rel="stylesheet" href="css/style.css">
    <!--icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
   
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="showdata">
    <h2>Show Data</h2>
    <hr class="text-light fw-bold">
    <div style="width:100%; height:85vh; overflow:auto; scrollbar-color: #000">
  <table class="table table-hover container">
  <thead>
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Phone No</td>
    <td>Address</td>
    <td>Visit City</td>
    <td>Members</td>
    <td>Date</td>
    <td>Action</td>
    <td class="text-warning">BACK<i class="bi bi-arrow-down text-light"></i></td>
  </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tbody>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["visitcity"]; ?></td>
    <td><?php echo $row["members"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td>
      <a href="update.php?id=<?php echo $row["id"];?>"><i class="bi bi-pencil-square text-success fw-bold fs-5"></i></a>
      <a onclick="dlt(<?php echo $row["id"];?>)" ><i class="bi bi-archive ms-2 text-danger fw-bold fs-5" style="cursor:pointer"></i></a>
      <a href="insert.php?id=<?php echo $row["id"];?>"><i class="bi bi-file-plus ms-2 text-warning fw-bold fs-5"></i></a>
    </td>
    <td><a href="insert.php"><i class="bi bi-skip-backward-fill text-info"></i></a></td>
    
</tr>
</tbody>
<?php
$i++;
}
?>
</table>
</div>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
 <script src="js/script.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</html>