<?php include 'header.php';

if(isset($_POST['deletebtn'])){
    
    $conn = mysqli_connect("localhost", "root","root","crud") or die("connection failed : delete-inline.php");
    $stu_Id = $_POST['sid'];
    $sql = "DELETE FROM student where sid = {$stu_Id}";
    $result=mysqli_query($conn,$sql) or die("Querry Failed");

   header("Location: http://localhost/crud_html/index.php");
   mysqli_close($conn);

}


?>



<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
