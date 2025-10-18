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
			<h1>Đăng ký</h1>
<?php
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["password"];
 			$hoten = $_POST["hoten"];
            $diachi = $_POST["diachi"];
			$sdt = $_POST["sdt"];

  			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $hoten == "" || $diachi == "" || $sdt == ""  ) {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
					$conn = mysqli_connect("localhost", "root", "", "dacs2");
  					$sql="SELECT * from taikhoan where username='$username'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO taikhoan (hoten,username,password,diachi,sdt) VALUES ('$hoten','$username','$password','$diachi',$sdt)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "<p>chúc mừng bạn đã đăng ký thành công</p>";
					}
			  }
	}
	?>
			<hr>
            <label for="hoten"><b>Họ và tên</b></label>
			<input type="text" placeholder="Họ và tên" name="hoten" id="hoten">
			<label for="username"><b>Tên đăng nhập</b></label>
			<input type="text" placeholder="Tên đăng nhập" name="username" id="username">
			<label for="password"><b>Mật khẩu</b></label>
			<input type="password" placeholder="******" name="password" id="password">
			<label for="password-repeat"><b>Nhập lại mật khẩu</b></label>
			<input type="password" placeholder="******" name="password-repeat" id="password-repeat">
			<label for="sdt"><b>Số điện thoại</b></label>
			<input type="text" placeholder="Số điện thoại" name="sdt" id="sdt">
            <label for="diachi"><b>Địa chỉ</b></label>
			<input type="text" placeholder="Địa chỉ" name="diachi" id="username">
			<hr>
			<p>Để tạo tài khoản vui lòng đồng ý với điều khoản của chúng tôi <a href="#">Terms & Privacy</a>.</p>
			<button type="submit" name="btn_submit" class="submit">Đăng ký</button>
			</div>
			<div class="register login">
			<p>Bạn đã có tài khoản rồi? <a href="../pages/dangnhap.php">Đăng nhập</a>.</p>
		</div>
	</form>
</body>
</html>