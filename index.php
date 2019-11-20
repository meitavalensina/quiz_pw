<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz-pw";
//create connetion
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("connection gagal:".mysqli_connetion_error());
}
$login = "select * from user where username ='$_POST['username'],  and password='$_POST'[pass'];";";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
 //output data dari setiap row
 while($row = mysqli_fetch_assoc($result)){
     echo "liga ".$row['negara'];
     echo " mempunyai ".$row['campion'];
     echo " wakil di tiga champion <br>";
 }
}else{
    echo "0 results";
}
mysqli_close($conn);
?>