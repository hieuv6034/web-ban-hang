<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Web bán hàng - @yield('title')</title>
	<link rel="stylesheet" href="{{asset('theme_fontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme_fontend/css/homes.css')}}">
	<script type="text/javascript" src="{{asset('theme_fontend/js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme_fontend/js/js-zoom_image.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="{{asset('theme_fontend/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>    
	<header class="header">
		<div class="grid">
			<!-- header navbar -->
			<nav class="header__navbar">
				<ul class="header__navbar-list">
					<li class="header__navbar-item header__navbar--has-qr header__navbar-item--separate">
						Vào cửa hàng trên ứng dụng F8-shop

						<!-- Header QR code -->
						<div class="header__qr">
							<img src="{{asset('theme_fontend/img/home/qr_code.png')}}" alt="QR code" class="header__qr-img">
							<div class="header__qr-apps">
								<a href="" class="header__qr-link">
									<img src="{{asset('theme_fontend/img/home/google__play.png')}}" alt="Google Play" class="header__qr-download-img">
								</a>
								<a href="" class="header__qr-link">
									<img src="{{asset('theme_fontend/img/home/app_store.png')}}" alt="App Store" class="header__qr-download-img">
								</a>
							</div>
						</div>
					</li>
					<li class="header__navbar-item">
						<span class="header__navbar-title--no-pointer">Kết nối</span>
						<a href="" class="header__navbar-icon-link">
							<i class="header__navbar-icon fa fa-facebook"></i>
						</a>
						<a href="" class="header__navbar-icon-link">
							<i class="header__navbar-icon fa fa-instagram"></i>
						</a>
					</li>
				</ul>
				
				<ul class="header__navbar-list">
					<li class="header__navbar-item header__navbar-item--has-notify">
						<a href="" class="header__navbar-item-link">
							<i class="fa fa-bell-o"></i>
							Thông báo
						</a>
						<!-- Header notification -->
						<div class="header__notify">
							<header class="header__notify-header">
								<h3>Thông báo mới nhận</h3>
							</header>
							<ul class="header__notify-list">
								<li class="header__notify-item header__notify-item--viewed">
									<a href="" class="header__notify-link">
										<img src="https://tse3.mm.bing.net/th?id=OIP.SFBPY71POQPEah2S3bqxzgHaD3&pid=Api&P=0" alt="" class="header__notify-img">
										<div class="header__notify-info">
											<span class="header__notify-name">Tinh chất vàng 24K tái sinh da OHUI The First Geniture Ampoule</span>
											<span class="header__notify-description">Tinh chất OHUI The First Geniture Ampoule Advanced đậm đặc gấp 10 lần, chứa thành phần vàng 24K</span>
										</div>
									</a>
								</li>
								<li class="header__notify-item header__notify-item--viewed">
									<a href="" class="header__notify-link">
										<img src="https://tse1.mm.bing.net/th?id=OIP.qfhWpsqy7oYc7KjlDCBROwAAAA&pid=Api&P=0" alt="" class="header__notify-img">
										<div class="header__notify-info">
											<span class="header__notify-name">Tinh chất cân bằng hệ vi sinh OHUI The First Geniture Sym-Micro Essence</span>
											<span class="header__notify-description">Giúp chăm sóc toàn diện sức khỏe hệ vi sinh da, chống lão hóa toàn diện, mang đến làn da rạng rỡ, sáng khỏe</span>
										</div>
									</a>
								</li>
								<li class="header__notify-item header__notify-item--viewed">
									<a href="" class="header__notify-link">
										<img src="https://tse3.mm.bing.net/th?id=OIP.qqzs2A5iJNCXT4zMZHNhVQHaEw&pid=Api&P=0" alt="" class="header__notify-img">
										<div class="header__notify-info">
											<span class="header__notify-name">Tinh chất chống lão hóa OHUI Prime Advancer Ampoule Serum</span>
											<span class="header__notify-description">Tinh chất chống lão hóa OHUI Prime Advancer Ampoule Serum ngăn ngừa lão hóa sớm, cung cấp cho làn da hàm lượng</span>
										</div>
									</a>
								</li>
								<li class="header__notify-item">
									<a href="" class="header__notify-link">
										<img src="https://tse3.mm.bing.net/th?id=OIP.bl2SarkA7m0zvzkSwewlPQHaHa&pid=Api&P=0" alt="" class="header__notify-img">
										<div class="header__notify-info">
											<span class="header__notify-name">Tinh chất siêu cấp ẩm OHUI Miracle Moisture Ampoule 777</span>
											<span class="header__notify-description">Tinh chất siêu cấp ẩm OHUI Miracle Moisture Ampoule 777 cung cấp ẩm đậm đặc giúp làn da khô ráp trở nên ẩm mượt</span>
										</div>
									</a>
								</li>
							</ul>
							<footer class="header__notify-footer">
								<a href="" class="header__notify-footer-btn">Xem tất cả</a>
							</footer>
						</div>
					</li>
					<li class="header__navbar-item">
						<a href="" class="header__navbar-item-link">
							<i class="header__navbar-icon fa fa-question-circle"></i>
							<span class="header__navbar-help">Trợ giúp</span>
						</a>
					</li>
					<!-- <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng ký</li>
					<li class="header__navbar-item header__navbar-item--strong">Đăng nhập</li> -->
					<li class="header__navbar-item header__navbar-user">
						<img src="https://tse3.mm.bing.net/th?id=OIP.JZ3eTMeBLN8Kns45eIA_nAHaHw&pid=Api&P=0" alt="" class="header__navbar-user-img">
						<span class="header__navbar-user-name">Hiệu Nguyễn</span>
						
						<ul class="header__navbar-user-menu">
							<li class="header__navbar-user-item">
								<a href="">Tài khoản của tôi</a>
							</li><li class="header__navbar-user-item">
								<a href="">Địa chỉ của tôi</a>
							</li><li class="header__navbar-user-item">
								<a href="">Đơn mua</a>
							</li><li class="header__navbar-user-item header__navbar-user-item--separate">
								<a href="">Đăng xuất</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			
			<!-- header with search -->
			<div class="header-with-search">
				<div class="header__logo">
					<a href="/">
						<img src="{{ asset('theme_fontend/img/home/logo.png') }}" class="header__logo-img">
					</a>
				</div>
				<div class="header__search">
					<div class="header__search-input-wrap">
						<input type="text" class="header__search-input" placeholder="Nhập để tìm kiếm sản phẩm">
						<!-- search history -->
						<div class="header__search-history">
							<h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
							<ul class="header__search-history-list">
								<li class="header__search-history-item">
									<a href="">Kem dưỡng da</a>
								</li>
								<li class="header__search-history-item">
									<a href="">Kem trị mụn</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="header__search-select">
						<span class="header__search-select-lable">Trong shop</span>
						<i class="header__search-select-icon fa fa-angle-down"></i>

						<ul class="header__search-option">
							<li class="header__search-option-item header__search-option-item--active">
								<span>Trong shop</span>
								<i class="fa fa-check"></i>
							</li>
							<li class="header__search-option-item ">
								<span>Ngoài shop</span>
								<i class="fa-solid fa-check"></i>
							</li>
						</ul>
					</div>
					<button class="header__search-btn">
						<i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
					</button>
				</div>
				<!-- Cart -->
				<div class="header__cart">
					<div class="header__cart-wrap">
						<i class="header__cart-icon fa fa-shopping-cart"></i>
						<span class="header__cart-notice">3</span>
						<!-- no cart: header__cart-list--no-cart -->
						<div class="header__cart-list">
							<img src="{{ asset('theme_fontend/img/home/no_card.jpg') }}" alt="" class="header__cart-list--no-cart-img">
							<span class="header__cart-list--no-cart-msg">
								Chưa có sản phẩm
							</span>

							<h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
							<ul class="header__cart-list-item">
								<li class="header__cart-item">
									<img src="https://tse2.mm.bing.net/th?id=OIP.v0K3KSlCXfuUHAa7PZuUWgHaFj&pid=Api&P=0" alt="" class="header__cart-img">
									<div class="header__cart-item-info">
										<div class="header__cart-item-head">
											<h5 class="header__cart-item-name">Bộ kem đặc trị vùng mắt</h5>
											<div class="header__cart-item-price-wrap">
												<span class="header__cart-item-price">2.000.000đ</span>
												<span class="header__cart-item-multioly">x</span>
												<span class="header__cart-item-qnt">2</span>
											</div>
										</div>
										<div class="header__cart-item-body">
											<span class="header__cart-item-description">Phân loại: bạc</span>
											<span class="header__cart-item-remove">Xóa</span>
										</div>
									</div>
								</li>
								<li class="header__cart-item">
									<img src="https://tse1.explicit.bing.net/th?id=OIP.R-LWidRy9psrjqCxL4FMogHaJ4&pid=Api&P=0" alt="" class="header__cart-img">
									<div class="header__cart-item-info">
										<div class="header__cart-item-head">
											<h5 class="header__cart-item-name">Set sữa rửa mặt Ohui Prime</h5>
											<div class="header__cart-item-price-wrap">
												<span class="header__cart-item-price">1.035.000đ</span>
												<span class="header__cart-item-multioly">x</span>
												<span class="header__cart-item-qnt">2</span>
											</div>
										</div>
										<div class="header__cart-item-body">
											<span class="header__cart-item-description">Phân loại: bạc</span>
											<span class="header__cart-item-remove">Xóa</span>
										</div>
									</div>
								</li>
								<li class="header__cart-item">
									<img src="https://tse4.mm.bing.net/th?id=OIP.sI_I9ZJdCCQB71WtBYjYLAHaI_&pid=Api&P=0" alt="" class="header__cart-img">
									<div class="header__cart-item-info">
										<div class="header__cart-item-head">
											<h5 class="header__cart-item-name">Cushion trang điểm dưỡng</h5>
											<div class="header__cart-item-price-wrap">
												<span class="header__cart-item-price">1.350.000đ</span>
												<span class="header__cart-item-multioly">x</span>
												<span class="header__cart-item-qnt">2</span>
											</div>
										</div>
										<div class="header__cart-item-body">
											<span class="header__cart-item-description">Phân loại: bạc</span>
											<span class="header__cart-item-remove">Xóa</span>
										</div>
									</div>
								</li>
							</ul>
							<a href="" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="grid">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					@yield('left')
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					@yield('slide')

					{{-- main --}}

					@yield('main')

					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
	<footer id="footer">			
		<div class="grid">
			<div class="row">				
				<div id="logo-f" class="col-md-2 col-sm-12 col-xs-12">						
					<!-- phải sửa logo-->
					<a href="#"><img src="{{ asset('theme_fontend/img/home/logo.png') }}" class="header__logo-img"></a>		
				</div>
				<div class="col-md-10 col-sm-12 col-xs-12">
					<div class="row">
						<div id="about" class="col-md-5">
							<h3>Giới thiệu</h3>
							<p class="text-justify">Vietpro Academy thành lập năm 2009. Chúng tôi đào tạo chuyên sâu trong 2 lĩnh vực là Lập trình Website & Mobile nhằm cung cấp cho thị trường CNTT Việt Nam những lập trình viên thực sự chất lượng, có khả năng làm việc độc lập, cũng như Team Work ở mọi môi trường đòi hỏi sự chuyên nghiệp cao.</p>
						</div>
						<div id="hotline" class="col-md-3">
							<h3>Hotline</h3>
							<p>Số điện thọai: 123456789</p>
							<p>Email: test@example.com</p>
						</div>
						<div id="contact" class="col-md-4">
							<h3>Liên hệ</h3>
							<p>Địa chỉ 1: 141 Chiến Thắng, Tân Triều, Thanh Trì, Hà Nội</p>
							<p>Địa chỉ 2: 12A2 Triều Khúc, Tân Triều, Thanh Trì, Hà Nội</p>
						</div>
					</div>
				</div>
			</div>				
			<div id="footer-b">				
				<div class="container container__a">
					<div class="row">
						<div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Học viện Công nghệ Vietpro - www.vietpro.edu.vn</p>
						</div>
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>© 2023 Vietpro Academy. All Rights Reserved</p>
						</div>
					</div>
				</div>
				<div id="scroll">
					<a href="#"><img src="{{ asset('theme_fontend/img/home/scroll.png') }}"></a>
				</div>	
			</div>
		</div>
		<!-- endfooter -->
		<script type="text/javascript">
			$(function() {
				var pull        = $('#pull');
				menu        = $('nav ul');
				menuHeight  = menu.height();

				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
			});

			$(window).resize(function(){
				var w = $(window).width();
				if(w > 320 && menu.is(':hidden')) {
					menu.removeAttr('style');
				}
			});
		</script>		
	</footer>
</body>
</html>