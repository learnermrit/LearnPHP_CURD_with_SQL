<?php 
    $conn = mysqli_connect("localhost", "root","root","crud") or die("connection failed : delete-inline.php");
    $stu_Id = $_GET['id'];
    $sql = "DELETE FROM student where sid = {$stu_Id}";
    $result=mysqli_query($conn,$sql) or die("Querry Failed");

   header("Location: http://localhost/crud_html/index.php");
   mysqli_close($conn);


?>