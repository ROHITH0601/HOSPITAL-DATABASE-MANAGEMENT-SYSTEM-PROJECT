<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
    $con = mysqli_connect("localhost","root", "", "hospital database management system") or die("connection failed" . mysqli_connect_error());
    if(isset($_POST['username']) && isset($_POST['email'])  && isset($_POST['password']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
    $sql = "INSERT INTO `registration form`(`username`, `email`,`password`) VALUES('$username', '$email','$password')";
   $query = mysqli_query($con,$sql);
   if($query)
   {
    echo "<script>window.location.href='http://localhost/hospital%20database%20management%20system/index.html';</script>";
   }
   else{
    echo "<script>window.location.href='http://localhost/DBMS%20webpage/registration from.html';alert('Error occured');</script>";
   }

}
}
?>