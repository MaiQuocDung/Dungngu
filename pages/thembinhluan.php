
<?php
session_start();
if (!isset($_SESSION['username'])) {
    
}
?><?php
    $noidung = $_POST['noidung'];
    $username = $_SESSION['username'];
    $idsp = $_POST['idsp'];
    
    
    echo $noidung.'-'.$username.'-'.$idsp;

    $conn = mysqli_connect("localhost", "root", "", "dacs2");
    $sql = "INSERT INTO binhluan( noidung, username, idsp) VALUES ('$noidung','$username',$idsp)";
    $ketqua = mysqli_query($conn, $sql);
    echo $sql;
    echo "OK";
   
?>
