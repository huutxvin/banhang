<?php $__env->startSection('content'); ?>
    <div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title"><?php echo e($product->name); ?></h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('trang-chu')); ?>">Trang chủ</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container" style="background:#c9e2f152">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="image/product/<?php echo e($product->image); ?>" alt="" height="260px">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2><?php echo e($product->name); ?></h2></p>
								<div>&nbsp;</div>
								<p class="single-item-price">
									<?php if($product->promotion_price ==0): ?>
										<span class="flash-sale"><?php echo e(number_format($product->unit_price)); ?> đồng</span>
							        <?php else: ?>
										<span class="flash-del"><?php echo e(number_format($product->unit_price)); ?> đồng</span>
										<span class="flash-sale"><?php echo e(number_format($product->promotion_price)); ?> đồng</span>
									<?php endif; ?>
								</p>
							</div>
							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>
							<div class="single-item-desc">
								<p><?php echo e($product->description); ?></p>
							</div>
							<div class="space20">&nbsp;</div>
							<div class="single-item-options">
								<select class="wc-select" name="color">
									<option>Số lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><h4><a href="#tab-description">Chi tiết</a></h4></li>
						</ul>
						<div class="panel" id="tab-description">
							<p><?php echo e($product->detail_desc); ?></p>
						</div>
					</div>
					<div class="space30">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>
						<div class="space10">&nbsp;</div>

						<div class="row">
							<?php $__currentLoopData = $same_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $same): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="<?php echo e(route('chi-tiet',$same->id)); ?>">
												<img src="image/product/<?php echo e($same->image); ?>" alt="" height="250px">
											</a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo e($same->name); ?></p>

											<p class="single-item-price">
												<?php if($same->promotion_price ==0): ?>
												    <span class="flash-sale"><?php echo e(number_format($same->unit_price)); ?> đồng</span>
												<?php else: ?>
												    <span class="flash-del"><?php echo e(number_format($same->unit_price)); ?> đồng</span>  
												    <span class="flash-sale"><?php echo e(number_format($same->promotion_price)); ?> đồng</span>
												<?php endif; ?>      
											</p>
										</div>
										<div>&nbsp;</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('chi-tiet',$same->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>