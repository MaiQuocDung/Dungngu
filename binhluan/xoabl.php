<?php
		session_start();
		$id = $_GET['id'];
		$conn =	mysqli_connect("localhost", "root", "", "dacs2");
		$sql= "DELETE FROM binhluan where id=$id ";
		$ketqua = mysqli_query($conn, $sql);
		header("location: ../binhluan/quanlybl.php");
		
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