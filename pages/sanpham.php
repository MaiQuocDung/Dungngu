<?php
session_start();
if (!isset($_SESSION['username'])) {
}
?><?php
    
    $id = $_GET['id'];
    $conn =	mysqli_connect("localhost", "root", "", "dacs2");
    $sql= "SELECT * FROM sanpham where id = $id";
    $ketqua = mysqli_query($conn, $sql);
?>
<html>
<head>
	<title>QD Shoes | Sản phẩm</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/grid.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../javascript.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#Guibl").click(function()
      {

        $.post("../pages/thembinhluan.php",
        {
          username: $("#username").val(),
          noidung: $("#noidung").val(),
          idsp: $("#idsp").val()
        },
        function(data, status){
          $("#dsbinhluan").append("<p> <?php echo $_SESSION['username'];  ?>"+ ":  "+ $("#noidung").val() + "</p> ");
          $("#noidung").val('');

        });
      });
    });
  </script>
</head>
<body>
	<div class="app">
		<div class="header">
			<div class="grid wide">
				<div class="header-main">
					<div class="logo">
					<a href="../index.php"><img src="../img/logo1.png" width="200" height="110"></a>
					</div>
					<div class="search">
						<input type="text" class="search-bar" placeholder="Tìm kiếm">
						<i class="search-icon fas fa-search"></i>
					</div>
					<div class="contact">
						<p>Hotline: 0967242511</p>
						<p>Email: <a href="mailto: maiquocdung2003@gmail.com" style="color: #333;">maiquocdung2003@gmail.com</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="header-mobile">
			<div class="header-mb">
				<div class="search-mb">
					<input type="text" class="search-bar-mb" placeholder="Tìm kiếm">
					<i class="search-icon-mb fas fa-search"></i>
				</div>
	
				<a class="shopping-cart-mb" href="/pages/giohang.html">
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
							<a href="../pages/gioithieu.php" class="nav__mb-link">Giới thiệu</a>
						</li>
						<li>
							<a href="" class="nav__mb-link">Danh mục</a>
						</li>
						<li>
							<a href="../pages/lienhe.php" class="nav__mb-link">Liên hệ</a>
						</li>
						<li>
							<a href="../taikhoan.php" class="nav__mb-link">Thông tin tài khoản</a>
						</li>
						<li>
							<a href="../pages/dangxuat.php" class="nav__mb-link">Đăng xuất</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

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
											echo '<a href="../danhmuc.php?iddanhmuc= '.$row3['id'].'" class="category-item__link">'.$row3['tendanhmuc'].'</a>';
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
		<?php
        $row=mysqli_fetch_array($ketqua);
		$SESSION['sizee'] = $row['size'];

		echo '<div class="product-detail">
			<div class="grid wide">
				
				<div class="prodoct-detail-info">
					<div class="grid__column-left">
						<div class="product-detail-item-img">
							<div class="product-detail-item-img-general product-detail-item-img-1" id="img-1" style="background-image: url(../'.$row['hinhanh'].' );"></div>
						</div>
					</div>
					<div class="grid__column-right">
						<div class="product-detail-title">
							<div class="product-detail-favorite">
								Yêu thích
							</div>
                            '.$row['tensp'].'
							<span class="product-detail-label"></span>
						</div>
						<div class="product-detail-appreciate">
							<div class="product-detail-appreciate__space product-detail-appreciate__rating">
								<span style="text-decoration: underline;">4.9</span>
								<i class="home-product-item__star-gold fas fa-star"></i>
								<i class="home-product-item__star-gold fas fa-star"></i>
								<i class="home-product-item__star-gold fas fa-star"></i>
								<i class="home-product-item__star-gold fas fa-star"></i>
								<i class="home-product-item__star-gold fas fa-star"></i>
							</div>
							<div class="product-detail-appreciate__space product-detail-appreciate__appre">
								<span>1k</span>
								<div class="product-detail-label-lb">Đánh giá</div>
							</div>
							<div class="product-detail-appreciate__space product-detail-appreciate__sold">
								<span>2,6k</span>
								<div class="product-detail-label-lb">Đã bán</div>
							</div>
						</div>

						<div class="product-detail-price">
							<span class="product-detail-price__old">'.number_format($row['giasp'],3).'đ</span>
							<span class="product-detail-price__present">'.number_format($row['giasp']-$row['giasp']*0.25,3).'đ</span>
							<span class="product-detail-price-sale">25% GIẢM</span>
						</div>

						<div class="product-detail-ship">
							<label class="product-detail-label-lb" style="width: 110px;">Vận chuyển</label>
							<div class="product-detail-ship-content">
								<div class="product-detail-ship-content-free">
									<img src="../img/freeship.png" height="15" width="25">
									<span style="margin-left: 5px;">Miễn phí vận chuyển</span>
								</div>
							</div>
						</div>

						<div class="product-detail-color">
							<div class="product-detail-label-lb product-detail-label-lb-width">Màu sắc</div>
							<div class="product-detail-color-color">
								<input label="'.$row['mau'].'" type="radio" name="color" value="'.$row['mau'].'" checked>
							</div>
						</div>

						<div class="product-detail-size">
							<div class="product-detail-label-lb product-detail-label-lb-width">Size</div>
							<div class="product-detail-size-size">
								<input label="'.$row['size'].'" type="radio" name="size" value="'.$row['size'].'" checked>
							</div>
						</div>

						<div class="product-detail-quantity">
							<div class="product-detail-label-lb" style="width: 110px;">Số lượng</div>
							<div class="product-detail-quantity-action">
								<input type="button" value="-" id="btn-sub" class="product-detail-quantity-btn product-detail-quantity-btn-left" >
								<input type="text" value="1" id="quantity-input" class="product-detail-quantity-input">
								<input type="button" value="+" id="btn-add" class="product-detail-quantity-btn product-detail-quantity-btn-right" >
							</div>
							<div class="product-detail-label-lb">'.$row['soluong'].' sản phẩm có sẵn</div>
						</div>

						<div class="product-detail-shopping">
						<a href="../pages/addcart.php?item='.$row['id'].'">
								<button class="product-detail-shopping-addtocart-btn" data-toggle="modal" data-target="#dialog1">
									<i class="fas fa-cart-plus"></i>
									Thêm vào giỏ hàng
								</button>
								</a>
						</div>
					</div>
				</div>';
            
                ?>
				<div class="product-detail-decribe">
					<div class="product-detail-describe__detail">
						<h3 class="product-detail-decribe-heading">CHI TIẾT SẢN PHẨM</h3>
						<div class="product-detail-describe__detail-content">
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Danh mục</label>
								<div class="product-detail-describe__detail-content-column">
									<ul class="product-detail-breadcrumb">
										<li>Giày</li>
									</ul>
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Thương hiệu</label>
								<div class="product-detail-describe__detail-content-column">
									No brand
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Dáng giày</label>
								<div class="product-detail-describe__detail-content-column">
									Đẹp, phù hợp với nhiều loại chân
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Chiều dài giày</label>
								<div class="product-detail-describe__detail-content-column">
									Dài
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Họa tiết</label>
								<div class="product-detail-describe__detail-content-column">
									Bắt mắt, phù hợp với nhiều đồ thời trang
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Phong cách</label>
								<div class="product-detail-describe__detail-content-column">
									Giày 
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Loại giày</label>
								<div class="product-detail-describe__detail-content-column">
									Công sở, Đi học, Hẹn hò
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Chất liệu</label>
								<div class="product-detail-describe__detail-content-column">
									Vải, cao su
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Xuất xứ</label>
								<div class="product-detail-describe__detail-content-column">
									Mỹ
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Kho hàng</label>
								<div class="product-detail-describe__detail-content-column">
									700
								</div>
							</div>
							<div class="product-detail-describe__detail-content-row">
								<label class="product-detail-describe-label">Gửi từ</label>
								<div class="product-detail-describe__detail-content-column">
									Quảng Trị 
								</div>
							</div>
						</div>
					</div>
					<div class="product-detail-describe__describe">
						
				
						
				<div class="product-detail-appreciation" >
					<h3 class="product-detail-appreciation-heading">ĐÁNH GIÁ SẢN PHẨM</h3>
					<div class="product-detail-appreciation-content">
						<div class="product-detail-appreciation-content-row">
							<div id="dsbinhluan">
				<?php
            $conn7 = mysqli_connect("localhost", "root", "", "dacs2");
            $sql7 ="SELECT * FROM binhluan WHERE idsp=".$_GET['id'];
            $ketqua7 = mysqli_query($conn7,$sql7);
            while($row7=mysqli_fetch_array($ketqua7)){
            echo '			
							<div class="product-detail-appreciation-content-right">
								<div class="product-detail-appreciation-account-name">
								<i class="product-detail-appreciation-account-icon fas fa-user-circle">  </i> '.$row7['username'].'
								</div>
								<div class="product-detail-appreciation-rating">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>	
								</div>
								<div class="product-detail-appreciation-content-content">
								'.$row7['noidung'].'
								</div>
								<div class="product-detail-appreciation-time">
									'.$row7['time'].'
								</div>
								<div class="product-detail-appreciation-action">
									<span class="product-detail-appreciation-action-like">Thích</span>
									<span class="product-detail-appreciation-action-reply">Phản hồi</span>
									<a href=" ../pages/xoabl.php?id= '.$row7['id'].'"><span class="product-detail-appreciation-action-reply" style="color: pink;">Xóa</span></a>
									</div>
							</div>
						';}
				?> 

			</div>
			</div>
			<div id="binhluan" >
            <input type="hidden" name="idsp" id="idsp" value="<?php echo $row['id']; ?>">
            <input type="text" name="noidung" id="noidung" placeholder="Nhập bình luận">
            <input type="submit" value="Bình luận" id="Guibl">
			</div>
				</div>
				</div>
				</div>    
				<!-- SP tuong tu -->
				<div class="container text-center my-3">
    <h3>Sản phẩm bán chạy</h3>
	<?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        $conn = mysqli_connect('localhost', 'root', '', 'dacs2');
 
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(id) as total from sanpham');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
 
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 5;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $result = mysqli_query($conn, "SELECT * FROM sanpham LIMIT $start, $limit");
 
        ?>
						<!-- BÊN DƯỚI LÀ sản phẩm -->
						<div class="home-product">
						<div class="row sm-gutter">
						<?php
							while($row=mysqli_fetch_assoc($result)){
								if ($row['soluong'] > 0 ){
							echo '<div class="column l-2-4 me-4 s-6" >
							<a class="home-product-item" href="../pages/sanpham.php?id= '.$row['id'].'">
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
						</div>';}
						else {
							echo '<div class="column l-2-4 me-4 s-6" >
							<a class="home-product-item" href="../pages/sanpham.php?id= '.$row['id'].'">>
								<div class="home-product-item__img" style="background-image:url('.$row['hinhanh'] .')">
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
									<span class="home-product-item__sold">Số lượng: Hết hàng</span>
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
						}
						?>
								</div>
								</div>
						<!-- BÊN trên LÀ sản phẩm -->
						
	
		
		
				
		</div>	
						</div>
		<!-- modal -->
		 <div class="modal" id="dialog1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <div class="modal-header">
                <h5 class="modal-title">Thêm vào giỏ hàng thành công</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
    
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            
            </div>
            
        </div>
    </div>
    </div>
    <div class="modal" id="dialog2" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mua Thành Công</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
        
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                
                </div>
                
            </div>
        </div>
        </div>
    



		<div class="footer">
			<div class="grid wide">
				<div class="grid__row">
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Chăm sóc khách hàng</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item-link">Trung tâm trợ giúp</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item-link">HT Mall</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item-link">Hướng dẫn mua hàng</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
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
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Danh mục</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item-link">Hoddie</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item-link">Sweater</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item-link">Áo ấm mùa hè</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
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
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Liên hệ với chúng tôi</h3>
						<input class="footer__input" type="text" placeholder="Email address">
						<input type="submit" value="Gửi">
					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<div class="grid wide">
					<p>© 2025 - Bản quyền thuộc về công ty QD Clothes</p>
				</div>
			</div>
		</div>
		<div class="scroll-to-top" onclick="scrollToTop();">
			<i class="scroll-to-top-icon fas fa-chevron-up"></i>
		</div>
	</div>
	
<script type="text/javascript">
	var sub = document.getElementById('btn-sub');
	var add = document.getElementById('btn-add');
	var input = document.getElementById('quantity-input');
	sub.addEventListener('click',function() {subValue();});
	add.addEventListener('click',function() {addValue();});
	function subValue() {
	if(input.value<=1) {
			return 1;
		} else {
			--input.value;
		}		
	}
	function addValue() {
		++input.value;
	}
</script>
<script type="text/javascript">
	$('document').ready(function() {
		$('#select-1').mouseenter(function() {
			$('#img-1').css('zIndex','1');
			$('#img-2').css('zIndex','0');
			$('#img-3').css('zIndex','0');
			$('#img-4').css('zIndex','0');
			$('#img-5').css('zIndex','0');
		});
		$('#select-2').mouseenter(function() {
			$('#img-1').css('zIndex','0');
			$('#img-2').css('zIndex','1');
			$('#img-3').css('zIndex','0');
			$('#img-4').css('zIndex','0');
			$('#img-5').css('zIndex','0');
		});
		$('#select-3').mouseenter(function() {
			$('#img-1').css('zIndex','0');
			$('#img-2').css('zIndex','0');
			$('#img-3').css('zIndex','1');
			$('#img-4').css('zIndex','0');
			$('#img-5').css('zIndex','0');
		});
		$('#select-4').mouseenter(function() {
			$('#img-1').css('zIndex','0');
			$('#img-2').css('zIndex','0');
			$('#img-3').css('zIndex','0');
			$('#img-4').css('zIndex','1');
			$('#img-5').css('zIndex','0');
		});
		$('#select-5').mouseenter(function() {
			$('#img-1').css('zIndex','0');
			$('#img-2').css('zIndex','0');
			$('#img-3').css('zIndex','0');
			$('#img-4').css('zIndex','0');
			$('#img-5').css('zIndex','1');
		});
		
	});
</script>
</body>
</html>