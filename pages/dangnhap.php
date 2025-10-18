<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<!-- Nhúng file CSS -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<!-- Nhúng file JavaScript -->
<script language="javascript" src="kiemtra.js"></script>
<form action="" method="POST" onsubmit="return validate()">
<div class="register">
<h1>Đăng nhập</h1>
<?php
	
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	
		if ($username == "" || $password =="") {
			echo "<p>username hoặc password bạn không được để trống!</p>";
		}else{
            $conn = mysqli_connect("localhost", "root", "", "dacs2");
			$sql = "SELECT * from taikhoan where username = '$username' AND password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($query);
			if ($row==0) {
				echo "<p>Tên đăng nhập hoặc mật khẩu không đúng !</p>";			
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $row['id'];
                $_SESSION['hoten'] = $row['hoten'];
				$_SESSION['diachi'] = $row['diachi'];
				$_SESSION['sdt'] = $row['sdt'];
				$_SESSION['password'] = $password;
				
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây tiến hành chuyển hướng trang web tới một trang gọi là index.php
               	header('Location: ../index.php');
				mysqli_close($conn);
			}
		}
	} 
?>
<p>Vui lòng điền thông tin để đăng nhập</p>
<hr>
<label for="username"><b>Tên đăng nhập</b></label>
<input type="text" placeholder="Họ và tên" name="username" id="username">
<label for="password"><b>Mật khẩu</b></label>
<input type="password" placeholder="******" name="password" id="password">
<hr>
<button type="submit" name="btn_submit" class="submit">Đăng nhập</button>
</div>
<div class="register login">
<p>Bạn chưa có tài khoản? <a href="../pages/dangky.php">Đăng ký</a>.</p>

</div>

</form>
</body>
</html>