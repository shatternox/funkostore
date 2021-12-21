@extends('shop.main_master')
@section('shop')


@section('title')
{{$product->product_name}} - Product Details
@endsection
<style>
  .padding-left{
    padding-left: 15px;
  }
</style>

<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">
	


  
    
    
    	<!-- ============================================== HOT DEALS ============================================== -->
		@include('shop.common.hot_deals')
<!-- ============================================== HOT DEALS: END ============================================== -->					




				</div>
			</div><!-- /.sidebar -->
			<div class='col-md-9'>
            <div class="detail-block">
				<div class="row  wow fadeInUp">
                
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
        @foreach($multiimgs as $image)
            <div class="single-product-gallery-item" id="slide{{$image->id}}">
                <a data-lightbox="image-1" data-title="Gallery" href="{{ asset($image->image_name) }}">
                    <img class="img-responsive" alt="" src="{{ asset($image->image_name) }}" data-echo="{{ asset($image->image_name) }}" />
                </a>
            </div><!-- /.single-product-gallery-item -->
        @endforeach

        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            
            <div id="owl-single-product-thumbnails">

            @foreach($multiimgs as $image)
                <div class="item">
                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="9" href="#slide{{$image->id}}">
                        <img class="img-responsive" width="85" alt="" src="{{ asset($image->image_name) }}" data-echo="{{asset($image->image_name) }}" />
                    </a>
                </div>
            @endforeach
            </div><!-- /#owl-single-product-thumbnails -->
            
            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        			
					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name">{{ $product->product_name }}</h1>
							

							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-2">
										<div class="stock-box">
											<span class="label">Stock :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value">{{ $product->product_qty }}</span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

							<div class="description-container m-t-20">
                            {!! $product->short_description !!}
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-6">
										<div class="price-box">
                                        @php
                                        $discounted_price = $product->selling_price - $product->selling_price * $product->discount / 100;
                                        @endphp

                                        @if($product->discount == NULL )
										<span class="price">${{$product->selling_price}}</span>
										@else
                                        <span class="price">${{$discounted_price}}</span>
                                        <span class="price-strike">${{$product->selling_price}}</span>
                                        @endif
                                        
										</div>
									</div>

									<div class="col-sm-6">
										<div class="favorite-button m-t-10">
										
											<form action="{{route('product.addtowish')}}" method="post">
												@csrf
												<input type="hidden" value="1" name="quantity">
												<input type="hidden" name="pid" value="{{$product->id}}">
												<button data-toggle="tooltip" class="btn btn-primary icon" type="submit" title="Add Wish"> <i class="fa fa-heart"></i> </button>
											</form>
								
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="col-sm-2">
										<span class="label">Qty :</span>
									</div>
									<form action="{{route('product.addtocart')}}" method="post">
									@csrf
										<input type="hidden" name="pid" value="{{$product->id}}">
										<div class="col-sm-2">
											<div class="cart-quantity">
												<div class="quant-input">
													<div class="arrows">
													<div class="arrow plus gradient" id="addQty"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
													<div class="arrow minus gradient" id="minQty"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
													</div>
													<input type="text" value="1" name="quantity" id="productQty">
											</div>
											</div>
										</div>

										<div class="col-sm-7">
											<button class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
										</div>
									</form>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							

							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
				
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
							
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text">{!! $product->long_description !!}</p>
									</div>	
								</div><!-- /.tab-pane -->

							

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

				<!-- ============================================== UPSELL PRODUCTS ============================================== -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">Related Products</h3>
	<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
	  
@foreach($relatedproducts as $product)
		<div class="item item-carousel">
			<div class="products">
			@php
                $discounted_price = $product->selling_price - $product->selling_price * $product->discount / 100;
                @endphp
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a>
			</div><!-- /.image -->			

			@if($product->discount == NULL )
                  <div class="tag sale"><span>sale</span></div>
                  @else
                  <div class="tag hot"><span>{{ $product->discount }}%</span></div>
                  @endif            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
			
			<div class="description"></div>

			@if ($product->discount == NULL)
                  <div class="product-price"> <span class="price">${{$product->selling_price}}</div>
                  @else
                  <div class="product-price"> <span class="price"> ${{round($discounted_price)}} </span> <span class="price-before-discount">${{$product->selling_price}}</span> </div>
                  @endif
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled padding-left">
						<li class="add-cart-button btn-group">
							<form action="{{route('product.addtocart')}}" method="post">
										@csrf
										<input type="hidden" value="1" name="quantity">
										<input type="hidden" name="pid" value="{{$product->id}}">
										<button data-toggle="tooltip" class="btn btn-primary icon" type="submit" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
									</form>
													
						</li>
	                   
		                <li class="wishlist">
							<form action="{{route('product.addtowish')}}" method="post">
							@csrf
							<input type="hidden" value="1" name="quantity">
							<input type="hidden" name="pid" value="{{$product->id}}">
							<button data-toggle="tooltip" class="btn btn-primary icon" type="submit" title="Add Wish"> <i class="fa fa-heart"></i> </button>
							</form>
						</li>

						
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	@endforeach
		
			</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
    </div>

<script>
	var plus = document.getElementById("addQty");
	var min = document.getElementById("minQty");
	var qty = document.getElementById("productQty")
	plus.addEventListener('click',()=>{
		qty.value = parseInt(qty.value) + 1;
	})
	min.addEventListener('click',()=>{
		parseInt(qty.value) > 0 && (qty.value = parseInt(qty.value) - 1);
	})
</script>

@endsection










