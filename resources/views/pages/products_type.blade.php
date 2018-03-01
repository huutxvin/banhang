@extends('master')
@section('content')
   <div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm  {{ $loai_sp->name }}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{ route('trang-chu') }}">Home</a> / <span>Sản phẩm</span>
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
							@foreach($types as $value_name)
							    <li><a href="{{ route('loai-san-pham',$value_name->id) }}">{{ $value_name->name }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9" style="background:#c9e2f152">
						<div class="beta-products-list">
							    <h4>{{ $loai_sp->name }}</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{ count($type_products) }} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($type_products as $value)
									<div class="col-sm-4">
										<div class="single-item">
											@if($value->promotion_price !=0)
											    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										    @else
										    @endif
											<div class="single-item-header">
												<a href="{{ route('chi-tiet',$value->id) }}"><img src="image/product/{{ $value->image }}" alt="" height="250px"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{ $value->name }}</p>
												<p class="single-item-price">
													@if($value->promotion_price ==0)
														<span class="flash-sale">{{ number_format($value->unit_price) }} đồng</span>
											        @else
														<span class="flash-del">{{ number_format($value->unit_price) }} đồng</span>
														<span class="flash-sale">{{ number_format($value->promotion_price) }} đồng</span>
													@endif
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{ route('chi-tiet',$value->id) }}">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{ count($other_products) }} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($other_products as $other_p)
									<div class="col-sm-4">
										<div class="single-item">
											@if($other_p->promotion_price !=0)
											    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div>
											    </div>
										    @else
										    @endif
											<div class="single-item-header">
												<a href="{{ route('chi-tiet',$other_p->id) }}"><img src="image/product/{{ $other_p->image }}" alt="" height="250px"></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{ $other_p->name }}</p>
												<p class="single-item-price">
													@if($other_p->promotion_price ==0)
														<span class="flash-sale">{{ number_format($other_p->unit_price) }} đồng</span>
											        @else
														<span class="flash-del">{{ number_format($other_p->unit_price) }} đồng</span>
														<span class="flash-sale">{{ number_format($other_p->promotion_price) }} đồng</span>
													@endif
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="{{ route('chi-tiet',$other_p->id) }}">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
							    @endforeach
							</div>
							<div class="row">{{ $other_products->render() }}</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div>
@endsection	
