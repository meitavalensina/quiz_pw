<?php
session_start();

$username = $_POST['usernsme'];
$password = $_POST['passord'];

include 'koneksi.php';
 
$login = mysqli_query($connect,"select * from users where username='$username' and password='$pass'");
$chek = mysqli_num_rows($login);
if($chek>0)
{
    header("location:login.php");
}else
{
    header("location:login.php");
}
?>
