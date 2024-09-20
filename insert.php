<?php
include_once 'shareconnection.php';

if (isset($_POST['save'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $visitcity = $_POST['visitcity'];
  $members = $_POST['members'];
  $date = $_POST['date'];

  $insert_data_query = "INSERT INTO students_tbl (name,email,phone,address,visitcity,members,date) VALUES ('$name','$email','$phone','$address','$visitcity','$members','$date')";

  $insert_data_query_run = mysqli_query($link, $insert_data_query);

  if ($insert_data_query_run) {
    echo 'Record Save';
  } else {
    echo 'Updated Faild';
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Opperation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--custome css link add-->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="main">
    <div class="container">

      <form action="insert.php" method="POST" class="form-group">
        <h2 class="">Tourist <span class="text-danger">REGISTRATION</span> </h2>
        <hr class="text-light fw-bold">
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="name" placeholder="Name" required />
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="email" placeholder="Email" required />
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="phone" placeholder="Phone" required />
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="address" placeholder="Address" required />
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="visitcity" placeholder="Where You Want Visit City" required />
        <input type="text" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="members" placeholder="How Many Person will be go" required />
        <input type="date" class="font-control shadow-lg p-3 mb-5 text-light rounded border-0" name="date" required />

        <!-- <div class="d-grid gap-2 d-md-flex mb-3">
          <input type="submit" class="btn btn-outline-light me-md-2 fw-bold text-uppercase" type="save" name="save" value="submit">
          <input type="reset" class="btn btn-outline-danger text-uppercase fw-bold" type="clear">
        </div> -->
        <p class="d-inline-flex gap-1">
          <input type="submit" class="btn btn-outline-success me-md-2 fw-bold text-uppercase" name="save" value="submit">
          <input type="reset" class="btn btn-outline-danger text-uppercase fw-bold" type="clear">
          <a href="retrieve.php" class="btn btn-outline-warning me-md-2 fw-bold text-uppercase"> Show Record </a>
        </p>

      </form>

    </div>
  </div>
  <!-- custome javascript link -->
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>