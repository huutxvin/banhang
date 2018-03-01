<?php $__env->startSection('content'); ?>
   <div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm  <?php echo e($loai_sp->name); ?></h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('trang-chu')); ?>">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    <li><a href="<?php echo e(route('loai-san-pham',$value_name->id)); ?>"><?php echo e($value_name->name); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="col-sm-9" style="background:#c9e2f152">
						<div class="beta-products-list">
							    <h4><?php echo e($loai_sp->name); ?></h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy <?php echo e(count($type_products)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<?php $__currentLoopData = $type_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-4">
										<div class="single-item">
											<?php if($value->promotion_price !=0): ?>
											    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										    <?php else: ?>
										    <?php endif; ?>
											<div class="single-item-header">
												<a href="<?php echo e(route('chi-tiet',$value->id)); ?>"><img src="image/product/<?php echo e($value->image); ?>" alt="" height="250px"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title"><?php echo e($value->name); ?></p>
												<p class="single-item-price">
													<?php if($value->promotion_price ==0): ?>
														<span class="flash-sale"><?php echo e(number_format($value->unit_price)); ?> đồng</span>
											        <?php else: ?>
														<span class="flash-del"><?php echo e(number_format($value->unit_price)); ?> đồng</span>
														<span class="flash-sale"><?php echo e(number_format($value->promotion_price)); ?> đồng</span>
													<?php endif; ?>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="<?php echo e(route('chi-tiet',$value->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy <?php echo e(count($other_products)); ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<?php $__currentLoopData = $other_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-4">
										<div class="single-item">
											<?php if($other_p->promotion_price !=0): ?>
											    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
											    </div>
										    <?php else: ?>
										    <?php endif; ?>
											<div class="single-item-header">
												<a href="<?php echo e(route('chi-tiet',$other_p->id)); ?>"><img src="image/product/<?php echo e($other_p->image); ?>" alt="" height="250px"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title"><?php echo e($other_p->name); ?></p>
												<p class="single-item-price">
													<?php if($other_p->promotion_price ==0): ?>
														<span class="flash-sale"><?php echo e(number_format($other_p->unit_price)); ?> đồng</span>
											        <?php else: ?>
														<span class="flash-del"><?php echo e(number_format($other_p->unit_price)); ?> đồng</span>
														<span class="flash-sale"><?php echo e(number_format($other_p->promotion_price)); ?> đồng</span>
													<?php endif; ?>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="<?php echo e(route('chi-tiet',$other_p->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
							    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<div class="row"><?php echo e($other_products->render()); ?></div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div>
<?php $__env->stopSection(); ?>	

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>