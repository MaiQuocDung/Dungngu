<?php
session_start();
?>

<html>
<head>
	<title>QD Shoes | Giới thiệu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/grid.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="../javascript.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<form action="../timkiem.php" method="POST">
	<div class="app">
		<div class="header">
			<div class="grid wide">
				<div class="header-main">
					<div class="logo">
						<a href="../index.php"><img src="../img/logo1.png" width="200" height="110"></a>
					</div>
					<div class="search">
						<input type="text" name="s" class="search-bar" placeholder="Tìm kiếm">
						<input type="submit" value="Tìm kiếm">
					
					</div>
					<div class="contact">
						<p>Hotline: 0967242511</p>
						<p>Email: <a href="mailto: maiquocdung2003@gmail.com" style="color: #333;">maiquocdung2003@gmail.com</a></p>
					</div>
				</div>
			</div>
		</div>
		</form>
		<form action="../timkiem.php" method="POST">
		<div class="header-mobile">
			<div class="header-mb">
				<div class="search-mb">
					<input type="text" class="search-bar-mb" placeholder="Tìm kiếm">
					<input type="submit" value="Tìm ">
				</div>
	
				<a class="shopping-cart-mb" href="../pages/giohang.php">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="shopping-cart-icon svg-inline--fa fa-shopping-cart fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="white" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg>
				</a>
	
				<input type="checkbox" hidden id="nav-mb-input" class="nav__input">
	
				<label for="nav-mb-input" class="category-btn-mb">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="white" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
				</label>
	
				<label for="nav-mb-input" class="nav__overplay"></label>
	
				<div class="nav__mb">
					<label for="nav-mb-input" class="nav__mb-close">
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColumnor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
					</label>
					<ul class="nav__mb-list">
						<li>
							<a href="../index.php" class="nav__mb-link">Trang chủ</a>
						</li>
						<li>
							<a href="" class="nav__mb-link">Giới thiệu</a>
						</li>
						<li>
							<a href="" class="nav__mb-link">Danh mục</a>
						</li>
						<li>
							<a href="" class="nav__mb-link">Liên hệ</a>
						</li>
						<li>
							<a href="./pages/taikhoan.php" class="nav__mb-link">Thông tin tài khoản</a>
						</li>
						<li>
							<a href="./pages/dangxuat.php" class="nav__mb-link">Đăng xuất</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
</form>
		

		<div class="navigation-bar">
			<ul class="navbar-list">
				<li class="navbar-item"><a href="../index.php" class="navbar-link">Trang chủ</a></li>
				<li class="navbar-item"><a href="../pages/gioithieu.php" class="navbar-link">Giới thiệu</a></li>
				<li class="navbar-item navbar-item-category">
					<a href="" class="navbar-link">Danh mục</a>
					<div class="navbar-category">
						
						<ul class="navbar-category-list">
						<li class="navbar-category-item">
							<?php
										$conn3 = mysqli_connect("localhost", "root", "", "dacs2");
										$sql3 = "SELECT * From danhmuc";
										$ketqua3 = mysqli_query($conn3,$sql3);
										while($row3=mysqli_fetch_array($ketqua3)){
											if($row3['id']<4)
											echo '<a href="./danhmuc.php?iddanhmuc= '.$row3['id'].'" class="category-item__link">'.$row3['tendanhmuc'].'</a>';
											else 
											echo "";
										}
									?>
							</li>
							</ul>
							<ul class="navbar-category-list">
							<li class="navbar-category-item">
							<?php
										$conn3 = mysqli_connect("localhost", "root", "", "dacs2");
										$sql3 = "SELECT * From danhmuc";
										$ketqua3 = mysqli_query($conn3,$sql3);
										while($row3=mysqli_fetch_array($ketqua3)){
											if($row3['id']>3 && $row3['id'] < 7)
											echo '<a href="../danhmuc.php?iddanhmuc= '.$row3['id'].'" class="category-item__link">'.$row3['tendanhmuc'].'</a>';
											else 
											echo "";
										}
									?>
							</li>
						</ul>
					</div>
				</li>
				<li class="navbar-item"><a href="../pages/lienhe.php" class="navbar-link">Liên hệ</a></li>

			</ul>
			<ul class="navbar-list">
				<li class="navbar-item"><a href="../pages/giohang.php" class="navbar-link">Giỏ hàng</a></li>
				<li class="navbar-item"><a href="../taikhoan.php" class="navbar-link">Tài khoản</a></li>
				<li class="navbar-item"><a href="../pages/dangxuat.php" class="navbar-link">Đăng xuất</a></li>
			</ul>
		</div>

		<ul class="header__sort-bar">
			<li class="header__sort-item">
				<a href="" class="header__sort-link">Liên quan</a>
			</li>
			<li class="header__sort-item">
				<a href="" class="header__sort-link">Mới nhất</a>
			</li>
			<li class="header__sort-item">
				<a href="" class="header__sort-link">Bán chạy</a>
			</li>
			<li class="header__sort-item">
				<a href="" class="header__sort-link">Giá</a>
			</li>
		</ul>

	
					
						<!-- BÊN DƯỚI LÀ sản phẩm -->
		<style>
        .h3{
            text-align: center;
            color: red;
        }
        .h4{
            color: blue;
        }
        .img1{
            display: block; 
            margin-left: auto; 
            margin-right: auto;
            width: 300;
            height: 300;
        }
        .img2{
            display: block; 
            margin-left: auto; 
            margin-right: auto;
            width: 500;
            height: 500;
        }
        </style>
		<div class="footer">
			<div class="grid wide">
                <h3 class="h3">Giới thiệu về Website bán giày online</h3><br>
                <h4 class="h4">Lý do website ra đời</h4>
                <p>
                    Giày Station ra đời dựa trên niềm yêu thích giày Nike, giày Adidas, giày Vans… của chủ shop bởi vẻ đẹp mê hoặc của các mẫu giày thời thượng này! <br>
                </p>
                <img class="img1" src="../img/logo1.png" alt=""><br>
                <p>Phần trở ngại lớn ở đây là giá tiền của những đôi giày Nike hay Adidas chính hãng thì quá cao so với đa phần các 
                    bạn trẻ, vì thế mình đã tìm tòi và tạo ra QD Shoes để nhằm đưa đến cho các bạn có niềm yêu thích những đôi 
                    giày cá tính này với một mức giá hấp dẫn kèm với chất lượng tốt nhất trong tầm giá. <br>
                    Với tiêu chí mức giá hợp lý, vừa túi tiền nhưng chất lượng lại tốt hơn so với những gì các bạn lại bỏ ra, 
                    QD Shoes hứa sẽ luôn luôn đưa đến chân của bạn chất lượng giày đảm bảo tốt nhất.
                </p>
                <h4 class="h4">Tiêu chí bán hàng</h4>
                <p>Tiêu chí bán hàng tại Giày Nation đó là làm hài lòng khách hàng tối đa!</p>
                <ul>
                    <li>Sản phẩm cao cấp</li>
                    <li>Chăm sóc khách hàng tốt.</li>
                    <li>Giá cả hợp túi tiền.</li>
                    <li>Hỗ trợ sau khi khách hàng đã mua hàng.</li>
                    <li>Giao hàng nhanh chóng.</li>
                </ul>
                <h4 class="h4">Sản phẩm</h4>
                <p>Tất cả sản phẩm giày, dép tại QD Shoes là những mẫu giày Nike Fake 1, giày Adidas Fake 1, 
                    giày Vans Fake 1… Đều được dựa trên nguyên bản gốc của các hãng giày Nike và Adidas, giày Vans…
                </p>
                <img class="img2" src="../img/12.jpg" alt=""><br>
                <img class="img2" src="../img/9.jpg" alt=""><br>
                <img class="img2" src="../img/15.jpg" alt=""><br>
                <p>
                    Về phần đế giày được làm bằng chất liệu cùng với chất liệu hàng chính hãng, nhẹ, êm và bền, 
                    thoải mái cho người đi. Với chất lượng gia công tốt, hoàn thiện chuẩn với hàng chính hãng nhằm 
                    giúp cho bạn thỏa đam mê các dòng giày cao cấp.
                </p>
                <p>
                    Độ bền của sản phẩm luôn được đảm bảo từ 12 – 18 tháng, thông tin được chính mình trải nghiệm và 
                    nhiều khách hàng sở hữu giày của shop gửi về cho mình.
                </p>
                <p>
                    Hãy để mình làm 1 phép tính đơn giản, bạn bỏ số tiền 1tr8 để mua 1 đôi giày Nike hàng chính hãng, 
                    trong khi cùng số tiền đó, bạn có thể sở hữu được từ 4 – 5 mẫu giày Nike khác nhau, với màu sắc và 
                    thiết kế khách nhau để bạn có thể thoải mái phối được với nhiều bộ đồ của mình mà không phải nhàm chán.
                </p>
                <p>
                    Chính vì thế mà QD Shoes muốn được là người đưa đến cho các bạn nhiều mẫu giày hơn, được tiếp cận 
                    với những mẫu giày huyền thoại, hoặc những mẫu giày mới được ưa chuộng trên thế giới.
                </p>



			</div>
		</div>
						<!-- BÊN trên LÀ sản phẩm -->
								
							</div>	
						</div>

						
					</div>					
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="grid wide">
				<div class="row">
					<div class="column l-2-4 me-4 s-6">
						<h3 class="footer__heading">Chăm sóc khách hàng</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item-link">Trung tâm trợ giúp</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item-link">TT Mail</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item-link">Hướng dẫn mua hàng</a>
							</li>
						</ul>
					</div>
					<div class="column l-2-4 me-4 s-6">
						<h3 class="footer__heading">Giới thiệu</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item-link">Giới thiệu</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item-link">Tuyển dụng</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item-link">Điều khoản</a>
							</li>
						</ul>
					</div>
					<div class="column l-2-4 me-4 s-6">
						<h3 class="footer__heading">Tiêu chí</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a  class="footer-item-link">Chất lượng</a>
							</li>
							<li class="footer-item">
								<a  class="footer-item-link">Giá tốt nhất</a>
							</li>
							<li class="footer-item">
								<a  class="footer-item-link">Tất cả vì khách hàng</a>
							</li>
						</ul>
					</div>
					<div class="column l-2-4 me-4 s-6">
						<h3 class="footer__heading">Theo dõi</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item-link">
									<i class="fab fa-facebook"></i>
									Facebook
								</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item-link">
									<i class="fab fa-instagram"></i>
									Instagram
								</a>
							</li>
						</ul>
					</div>
					<div class="column l-2-4 me-4 s-6">
						<h3 class="footer__heading">Liên hệ với chúng tôi</h3>
						<input class="footer__input" type="text" placeholder="Email address">
						<input type="submit" value="Gửi">
					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<div class="grid wide">
					<p>© 2025 - Bản quyền thuộc về công ty QD Shoes</p>
				</div>
			</div>
		</div>
		<div class="scroll-to-top" onclick="scrollToTop();">
			<i class="scroll-to-top-icon fas fa-chevron-up"></i>
		</div>
	</div>
</body>

</html>