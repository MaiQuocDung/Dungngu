<?php
		session_start();
		$id = $_GET['id'];
		$conn =	mysqli_connect("localhost", "root", "", "dacs2");
		$sql= "DELETE FROM taikhoan where id=$id ";
		$ketqua = mysqli_query($conn, $sql);
		header("location: ../taikhoan/quanlytk.php");
		
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
?>
</body>
</html>