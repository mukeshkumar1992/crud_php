<?php
include_once 'shareconnection.php';
$sql = "DELETE FROM students_tbl WHERE id='" . $_GET["id"] . "'";

if(mysqli_query($link, $sql)){
    echo "Record Delete Successfully";
} else{
    echo "Error Delete Record: " . mysqli_error($link);
    header("Location: retrieve.php");
}
mysqli_close($link);
?>



