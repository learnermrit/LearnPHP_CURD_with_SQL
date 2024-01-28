<?php 
    echo $stu_sid = $_POST['sid'];
    echo $stu_name = $_POST['sname'];
    echo $stu_address = $_POST['saddress'];
    echo $stu_class = $_POST['sclass'];
    echo $stu_phone = $_POST['sphone'];

    $conn = mysqli_connect("localhost","root","root","crud") or die("Connection Failed");

    $sql = "UPDATE student SET sname='{$stu_name}' , saddress='{$stu_address}', sclass='{$stu_class}',sphone='{$stu_phone}' WHERE sid={$stu_sid}";

    $result = mysqli_query($conn,$sql) or die ("Querry Failed");

    header("Location: http://localhost/crud_html/index.php");

    mysqli_close($conn);



?>