<div id="header">
	<div class="header-top" style="background: #0277b8">
		<div class="container">
			<div class="pull-left auto-width-left">
				<ul class="top-menu menu-beta l-inline">
					<li><a href="javascript:void(0)"><i class="fa fa-home"></i>Tầng 5 - Số 8 - Phan Văn Trường - Cầu Giấy - Hà Nội</a></li>
					<li><a href="javascript:void(0)"><i class="fa fa-phone"></i>096 589 7696</a></li>
				</ul>
			</div>
			<div class="pull-right auto-width-right">
				<ul class="top-details menu-beta l-inline">
					<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
					<li><a href="#">Đăng kí</a></li>
					<li><a href="#">Đăng nhập</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-top -->
	<div class="header-body" style="background: url(image/background.gif) repeat;">
		<div class="container beta-relative">
			<div class="pull-left">
				<a href="<?php echo e(route('trang-chu')); ?>" id="logo"><img src="assets/dest/images/logo-cake.png" width="300px" alt=""></a>
			</div>
			<div class="pull-right beta-components space-left ov">
				<div class="space10">&nbsp;</div>
				<div class="beta-comp">
					<form role="search" method="get" id="searchform" action="/">
						<input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
						<button class="fa fa-search" type="submit" id="searchsubmit"></button>
					</form>
				</div>

				<div class="beta-comp">
					<div class="cart">
						<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
						<div class="beta-dropdown cart-body">
							<div class="cart-item">
								<div class="media">
									<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/1.png" alt=""></a>
									<div class="media-body">
										<span class="cart-item-title">Sample Woman Top</span>
										<span class="cart-item-options">Size: XS; Colar: Navy</span>
										<span class="cart-item-amount">1*<span>$49.50</span></span>
									</div>
								</div>
							</div>

							<div class="cart-item">
								<div class="media">
									<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/2.png" alt=""></a>
									<div class="media-body">
										<span class="cart-item-title">Sample Woman Top</span>
										<span class="cart-item-options">Size: XS; Colar: Navy</span>
										<span class="cart-item-amount">1*<span>$49.50</span></span>
									</div>
								</div>
							</div>

							<div class="cart-item">
								<div class="media">
									<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/3.png" alt=""></a>
									<div class="media-body">
										<span class="cart-item-title">Sample Woman Top</span>
										<span class="cart-item-options">Size: XS; Colar: Navy</span>
										<span class="cart-item-amount">1*<span>$49.50</span></span>
									</div>
								</div>
							</div>

							<div class="cart-caption">
								<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
								<div class="clearfix"></div>

								<div class="center">
									<div class="space10">&nbsp;</div>
									<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div> <!-- .cart -->
				</div>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-body -->
	<div class="header-bottom" style="background-color: #0277b8;">
		<div class="container">
			<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
			<div class="visible-xs clearfix"></div>
			<nav class="main-menu">
				<ul class="l-inline ov">
					<li><a href="<?php echo e(route('trang-chu')); ?>">Trang chủ</a></li>
					<li><a href="javascript:void(0)" style="text-decoration: none">Loại sản phẩm</a>
						<ul class="sub-menu">
							<?php $__currentLoopData = $product_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
							<li><a href="<?php echo e(route('loai-san-pham',$value->id)); ?>"><?php echo e($value->name); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</li>
					<li class="<?php echo e((\Route::current()->uri() == 'banhang/about') ? 'active' :  NULL); ?>"><a href="<?php echo e(route('gioi-thieu')); ?>">Giới thiệu</a></li>
					<li class="<?php echo e((\Route::current()->uri() == 'banhang/contact') ? 'active' :  NULL); ?>"><a href="<?php echo e(route('lien-he')); ?>">Liên hệ</a></li>
				</ul>
				<div class="clearfix"></div>
			</nav>
		</div> <!-- .container -->
	</div> <!-- .header-bottom -->
	</div> <!-- #header -->