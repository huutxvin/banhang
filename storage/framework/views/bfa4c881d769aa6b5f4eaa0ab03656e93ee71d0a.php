<?php $__env->startSection('content'); ?>
	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner">
			<div class="bannercontainer" >
				<div class="banner" >
					<ul>
						<!-- THE FIRST SLIDE -->
						<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="image/slide/<?php echo e($value->image); ?>" data-src="image/slide/<?php echo e($value->image); ?>" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('image/slide/<?php echo e($value->image); ?>'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
				</div>

				<div class="tp-bannertimer"></div>
			</div>
		</div>
		<!--slider-->
	</div>
    <div class="container" style="background:#c9e2f152">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Sản phẩm mới</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy <?php echo e(count($new_product)); ?> sản phẩm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							<?php $__currentLoopData = $new_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-3">
									<div class="single-item">
										<?php if($new->promotion_price !=0): ?>
										    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									    <?php else: ?>
									    <?php endif; ?>
										<div class="single-item-header">
											<a href="<?php echo e(route('chi-tiet',$new->id)); ?>"><img src="image/product/<?php echo e($new->image); ?>" alt=""
												height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo e($new->name); ?></p>
											<p class="single-item-price">
												<?php if($new->promotion_price ==0): ?>
													<span class="flash-sale"><?php echo e(number_format($new->unit_price)); ?> đồng</span>
											    
											    <?php else: ?>
													<span class="flash-del"><?php echo e(number_format($new->unit_price)); ?> đồng</span>
													<span class="flash-sale"><?php echo e(number_format($new->promotion_price)); ?> đồng</span>                                               
                                                <?php endif; ?>
											</p>
										</div>
										<div>&nbsp;</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('chi-tiet',$new->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>	
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản phẩm khuyến mại</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy <?php echo e(count($promotion_product)); ?> sản phẩm</p>
							<div class="clearfix"></div>
							<div class="row">
							   <?php $__currentLoopData = $promotion_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-3">
									<div class="single-item">
										<?php if($promotion->promotion_price !=0): ?>
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
	                                    <?php endif; ?>
										<div class="single-item-header">
											<a href="<?php echo e(route('chi-tiet',$promotion->id)); ?>"><img src="image/product/<?php echo e($promotion->image); ?>" alt="" height="250px"></a>
										</div>

										<div class="single-item-body">
											<p class="single-item-title"><?php echo e($promotion->name); ?></p>
											<p class="single-item-price">
												<span class="flash-del"><?php echo e(number_format($promotion->unit_price)); ?> đồng</span>
												<span class="flash-sale"><?php echo e(number_format($promotion->promotion_price)); ?> đồng</span>
											</p>
										</div>
										<div>&nbsp;</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html" style="margin-top:0px"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="<?php echo e(route('chi-tiet',$promotion->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
										<div class="space20">&nbsp;</div>
									</div>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
						<div class="row"><?php echo e($promotion_product->render()); ?></div>
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
<?php $__env->stopSection(); ?>		
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>