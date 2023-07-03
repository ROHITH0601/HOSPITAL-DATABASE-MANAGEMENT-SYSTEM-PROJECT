<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
    $con = mysqli_connect("localhost","root", "", "hospital database management system") or die("connection failed" . mysqli_connect_error());
    if(isset($_POST['username']) && isset($_POST['password']))
{
$username=$_POST['username'];
$password=$_POST['password'];
    $sql = "SELECT * FROM  `index` WHERE `username`='$username' AND `password`='$password'";
   $query = mysqli_query($con,$sql);
   if(mysqli_num_rows($query)>0)
   {
    echo "<script>window.location.href='http://localhost/hospital%20database%20management%20system/hospitaldashboard.html';</script>";
   }
   else{
    echo "<script>window.location.href='http://localhost/hospital%20database%20mangement%20system/index.html';alert('Error occured');</script>";
   }

}
}
?>