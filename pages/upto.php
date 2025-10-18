<?php
session_start();
?>
<html>
<head>
	<title>TT Shoes | Trang chủ</title>
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
						<p>Hotline: 0123456789</p>
						<p>Email: <a href="mailto: maiquocdung2003@gmail.com" style="color: #333;">maiquocdung2003@gmail.com</a></p>
					</div>
				</div>
			</div>
		</div>
		</form>
		
		<div class="header-mobile">
			<div class="header-mb">
				<div class="search-mb">
					<input type="text" class="search-bar-mb" placeholder="Tìm kiếm">
					<i class="search-icon-mb fas fa-search"></i>
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
							<a href="" class="nav__mb-link">Trang chủ</a>
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
							<a href="" class="nav__mb-link">Thông tin tài khoản</a>
						</li>
						<li>
							<a href="" class="nav__mb-link">Đăng xuất</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	
		

		<div class="navigation-bar">
			<ul class="navbar-list">
				<li class="navbar-item"><a href="index.php" class="navbar-link">Trang chủ</a></li>
				<li class="navbar-item"><a href="./pages/gioithieu.php" class="navbar-link">Giới thiệu</a></li>
				<li class="navbar-item navbar-item-category">
					<a href="" class="navbar-link">Danh mục</a>
					<div class="navbar-category">
						<ul class="navbar-category-list">
							<li class="navbar-category-item">
							<?php
										$conn = mysqli_connect("localhost", "root", "", "dacs2");
										$sql = "SELECT * From danhmuc";
										$ketqua = mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($ketqua)){
											echo '<a href="../danhmuc.php?iddanhmuc= '.$row['id'].'" class="category-item__link">'.$row['tendanhmuc'].'</a>';

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
				<li class="navbar-item"><a href="" class="navbar-link"></a></li>
			</ul>
		</div>

		<div class="slideshow">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
   					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
   					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  				</ol>
  				<div class="carousel-inner">
    				<div class="carousel-item active">
    					 <img class="d-block w-100" src="https://cf.shopee.sg/file/73cfec97ad7a6b6a5574d404f70cd7f6" alt="First slide">
   					</div>
    				<div class="carousel-item">
      					<img class="d-block w-100" src="https://cf.shopee.sg/file/c304cae0e031106e356858f48882bdd6" alt="Second slide">
    				</div>
    				<div class="carousel-item">
     					<img class="d-block w-100" src="https://cf.shopee.sg/file/928775f4fa44e1775763975971144679" alt="Third slide">
   					</div>
   					<div class="carousel-item">
     					<img class="d-block w-100" src="https://cf.shopee.sg/file/b362f6a1bfe49823caabe068362c4c21" alt="Fourth slide">
   					</div>
  				</div>
  				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
   					<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   					<span class="carousel-control-next-icon" aria-hidden="true"></span>
   					<span class="sr-only">Next</span>
  				</a>
			</div>
			
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

		<div class="container">
			<div class="grid wide">
				<div class="row sm-gutter grid-content">
					<div class="column l-2 me-0 s-0">
						<nav class="category">
							<h3 class="category-heading">
								<i class="category-heading-icon fas fa-bars"></i>
								Danh mục
							</h3>
							<ul class="category-list">
								<li class="category-item category-item--active">
								<?php
										$conn = mysqli_connect("localhost", "root", "", "dacs2");
										$sql = "SELECT * From danhmuc";
										$ketqua = mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($ketqua)){
											echo '<a href="../danhmuc.php?iddanhmuc= '.$row['id'].'" class="category-item__link">'.$row['tendanhmuc'].'</a>';
										}
									?>
								</li>
							</ul>
						</nav>
					</div>
					<div class="column l-10 me-12 s-12">
						<div class="home-filter">
							<span class="label" style="margin-right: 16px;">Sắp xếp theo</span>
							<button class="home-filter-btn btn">Phổ biến</button>
							<button class="home-filter-btn btn btn--active">Mới nhất</button>
							<button class="home-filter-btn btn">Bán chạy</button>
							<div class="select-price">
								<span class="select-label">Giá</span>
								<i class="fas fa-angle-down"></i>
								<ul class="select-price-list">
									<li class="select-price-item">
										<a href="" class="select-price-link">Giá từ thấp đến cao</a>
									</li>
									<li class="select-price-item">
										<a href="" class="select-price-link">Giá từ cao đến thấp</a>
									</li>
								</ul>
							</div>
							<div class="page">
								<div class="page-num">
									<span class="page-current">1</span>/14
								</div>
								<div class="page-control">
									<a href="" class="page-control-btn">
										<i class="page-control-icon fas fa-angle-left"></i>
									</a>
									<a href="" class="page-control-btn">
										<i class="page-control-icon fas fa-angle-right"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- BÊN DƯỚI LÀ sản phẩm -->
						<div class="home-product">
						<div class="row sm-gutter">
							
						
                  
		<?php
			$conn =	mysqli_connect("localhost", "root", "", "dacs2");
			$sql= "SELECT * FROM sanpham ORDER BY giasp ASC";
			$ketqua = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_array($ketqua)) {
				echo '<div class="column l-2-4 me-4 s-6" >
							<a class="home-product-item" href="./pages/sanpham.php?id= '.$row['id'].'">>
								<div class="home-product-item__img" style="background-image:url(../'.$row['hinhanh'] .')">
								</div>
								<h4 class="home-product-item__name">'.$row['tensp'].'</h4>
								<div class="home-product-item__price">
									<div class="home-product-item__price-old">'.number_format($row['giasp'],3).'đ</div>
									<div class="home-product-item__price-new">'.number_format($row['giasp']-$row['giasp']*0.25,3).'đ</div>
								</div>
								<div class="home-product-item__action">
									<span class="home-product-item__like home-product-item__liked">
										<i class="home-product-item__like-none far fa-heart"></i>
										<i class="home-product-item__like-fill fas fa-heart"></i>
									</span>
									<div class="home-product-item__rating">
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
									</div>
									<span class="home-product-item__sold">Số lượng:'.$row['soluong'].'</span>
								</div>
								
								<div class="home-product-item__favorite">
									<i class="home-product-item__favorite-icon fas fa-check"></i>
									<span>Yêu thích</span>
								</div>
								<div class="home-product-item__sale">
									<span class="home-product-item__sale-percent">25%</span>
									<span class="home-product-item__sale-label">GIẢM
									</span>
								</div>
							</a>
						</div>';
			}

			mysqli_close($conn);
		?>
	</table>
          
								</div>
								</div>
						<!-- BÊN trên LÀ sản phẩm -->
								
							</div>	
						</div>

						<ul class="pagination">
							<li class="pagination-item">
								<a class="pagination-item-link" href="#">
									<i class="pagination-icon fas fa-angle-left"></i>
								</a>
							</li>
							<li class="pagination-item pagination-item--active">
								<a class="pagination-item-link" href="#">1</a>
							</li>
							<li class="pagination-item">
								<a class="pagination-item-link" href="#">2</a>
							</li>
							<li class="pagination-item">
								<a class="pagination-item-link" href="#">3</a>
							</li>
							<li class="pagination-item">
								<a class="pagination-item-link" href="#">4</a>
							</li>
							<li class="pagination-item">
								<a class="pagination-item-link" href="#">...</a>
							</li>
							<li class="pagination-item">
								<a class="pagination-item-link" href="#">14</a>
							</li>
							<li class="pagination-item">
								<a class="pagination-item-link">
									<i class="pagination-icon fas fa-angle-right"></i>
								</a>
							</li>
						</ul>
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
					<p>© 2021 - Bản quyền thuộc về công ty TT Shoes</p>
				</div>
			</div>
		</div>
		<div class="scroll-to-top" onclick="scrollToTop();">
			<i class="scroll-to-top-icon fas fa-chevron-up"></i>
		</div>
	</div>
</body>
<!-- <script type="text/javascript">
	$('document').ready(function() {
		$(window).scroll(function() {
			$('.header__sort-bar').css('top','20px');
		});
		
		$(window).scrollToTop(function() {
			$('.header__sort-bar').css('top','146px');
		});
	});
</script> -->
</html>

