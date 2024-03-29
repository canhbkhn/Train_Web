	@extends('master')
	@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$loaiSP->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Sản phẩm</span>
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
							@foreach($loai as $L)
							<li><a href="{{route('productType', $L->id)}}">{{$L->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản phẩm mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp_theo_loai)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sp_theo_loai as $spLoai)
								<div class="col-sm-4">
									<div class="single-item">
									@if($spLoai->promotion_price != 0)
										<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale
											</div>
										</div>
									@endif
										<div class="single-item-header">
											<a href="product.html"><img src="source/image/product/{{$spLoai->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spLoai->name}}</p>
											<p class="single-item-price">
											@if($spLoai->promotion_price == 0)
												<span class="flash-sale">{{number_format($spLoai->unit_price)}} VNĐ</span>

											@else
												<span class="flash-del">{{number_format($spLoai->unit_price)}}</span>
												<span class="flash-sale">{{number_format($spLoai->promotion_price)}} VNĐ</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
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
								<p class="pull-left">Tìm thấy {{count($sp_khac)}}</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sp_khac as $other)
								<div class="col-sm-4">
									<div class="single-item">
									@if($other->promotion_price != 0)
										<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale
											</div>
										</div>
									@endif
										<div class="single-item-header">
											<a href="product.html"><img src="source/image/product/{{$other->image}}" alt=""
												height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$other->name}}</p>
											<p class="single-item-price">
											@if($other->promotion_price == 0)
												<span class="flash-sale">{{$other->unit_price}}</span>
											@else
												<span class="flash-del">{{$other->unit_price}}</span>
												<span class="flash-sale">{{$other->promotion_price}}</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">{{$sp_khac->links()}}</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection