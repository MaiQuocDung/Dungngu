<center>
<?php 
		session_start();	
		if (isset($_SESSION['username']))
		{
			
			unset($_SESSION['username']); // xóa session login
		}
		echo "<p>Bạn đã đăng xuất thành công.</p>	";  
    
?>
<a href="dangnhap.php"><input type="button" value="Đăng nhập"></a>
</center>