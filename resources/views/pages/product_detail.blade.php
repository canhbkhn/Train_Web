@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$sanpham->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/{{$sanpham->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2>{{$sanpham->name}}</h2></p>
								<p class="single-item-price">
									@if($sanpham->promotion_price == 0)
										<span class="flash-sale">{{number_format($sanpham->unit_price)}} VNĐ</span>

									@else
										<span class="flash-del">{{number_format($sanpham->unit_price)}}</span>
										<span class="flash-sale">{{number_format($sanpham->promotion_price)}} VNĐ</span>
									@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$sanpham->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Size</option>
									<option value="small">Nhỏ</option>
									<option value="medium">Vừa</option>
									<option value="larg">Lớn</option>
								</select>
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
							<li><a href="#tab-description">Mô tả</a></li>
							<li><a href="#tab-reviews">Đánh giá (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$sanpham->description}}</p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>Chưa có đánh giá nào</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>

						<div class="row">
						@foreach($sanpham_tuongtu as $tuongtu)
							<div class="col-sm-4">
								<div class="single-item">
									@if($tuongtu->promotion_price != 0)
										<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale
											</div>
										</div>
									@endif
									<div class="single-item-header">
										<a href="product.html"><img src="source/image/product/{{$tuongtu->image}}" alt="" height="250px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$tuongtu->name}}</p>
										<p class="single-item-price">
										@if($tuongtu->promotion_price == 0)
											<span class="flash-sale">{{number_format($tuongtu->unit_price)}} VNĐ</span>
										@else
											<span class="flash-del">{{number_format($tuongtu->promotion_price)}} VNĐ</span>
											<span class="flash-sale">{{number_format($tuongtu->unit_price)}} VNĐ</span>
										@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
						<div>{{$sanpham_tuongtu->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Sản phẩm bán chạy</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
							@foreach($new_product as $new)
								<div class="media beta-sales-item">
									<a class="pull-left" href=""><img src="source/image/product/{{$new->image}}" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection