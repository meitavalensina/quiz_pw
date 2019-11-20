<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz-pw";
//create connetion
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("koneksi gagal:".mysqli_connetion_error());
}
$sql = "select * from user where username ='$_POST['username']; and password='$_POST'[pass'];";
$result = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($result) > 0){
    header('location:login.php');
 } else{
    echo "login gagal!";
}
mysqli_close($koneksi);
?>