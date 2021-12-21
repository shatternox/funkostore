@extends('shop.main_master')
@section('shop')

@section('title')
Funkostore
@endsection

<style>
  .padding-left{
    padding-left: 15px;
  }
</style>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        @include('shop.common.vertical_category_menu')
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        
        <!-- ============================================== HOT DEALS ============================================== -->
        @include('shop.common.hot_deals')
        <!-- ============================================== HOT DEALS: END ============================================== --> 
        
        <!-- ============================================== SPECIAL OFFER ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Special Offer</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              
              <div class="item">
                <div class="products special-product">
                @foreach($specialoffers as $product)
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"> <img src="{{ asset($product->product_thumbnail) }}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price">${{$product->selling_price}}</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                @endforeach
                </div>
              </div>
              
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL OFFER : END ============================================== --> 


        <!-- ============================================== PRODUCT TAGS ============================================== -->
        

        @include('shop.common.product_tags')


        <!-- ============================================== PRODUCT TAGS : END ============================================== --> 



        <!-- ============================================== SPECIAL DEALS ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Special Deals</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                @foreach($specialdeals as $product)
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"> <img src="{{ asset($product->product_thumbnail) }}"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> ${{$product->selling_price}} </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        
      
        
       
      </div>

      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 


 
        
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

            @foreach($sliders as $slider)
            <div class="item" style="background-image: url({{asset($slider->slider_image)}});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="big-text fadeInDown-1"> {{$slider->title}} </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{$slider->description}}</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            @endforeach

          </div>
          <!-- /.owl-carousel --> 
        </div>
        
    
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">New Products</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>

              @foreach($categories as $category)
              <li><a data-transition-type="backSlide" href="#category{{ $category->id }}" data-toggle="tab">{{ $category->category_name }}</a></li>
              @endforeach
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">

          
            <div class="tab-pane in active" id="all">

              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  
                  @foreach($products as $product)
                  <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            
                          <!-- /.product-image -->

                          @php
                          $discounted_price = $product->selling_price - $product->selling_price * $product->discount / 100;
                          @endphp

                          <div>
                            @if($product->discount == NULL )
                            <div class="tag new"><span>new</span></div>
                            @else
                            <div class="tag hot"><span>{{ $product->discount }}%</span></div>
                            @endif

                            </div>

                          </div>
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>

                            @if ($product->discount == NULL)
                            <div class="product-price"> <span class="price">${{$product->selling_price}}</div>
                            @else
                            <div class="product-price"> <span class="price"> ${{round($discounted_price)}} </span> <span class="price-before-discount">${{$product->selling_price}}</span> </div>
                            @endif
                            
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
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
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="wishlist"> 

                                <form action="{{route('product.addtowish')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="1" name="quantity">
                                    <input type="hidden" name="pid" value="{{$product->id}}">
                                    <button data-toggle="tooltip" class="btn btn-primary icon" type="submit" title="Add Wish"> <i class="fa fa-heart"></i> </button>
                                  </form>
                                  <button class="btn btn-primary cart-btn" type="button">Add to wishlist</button>
                              
                                </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    @endforeach
                </div>
                <!-- /.home-owl-carousel -->
                 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            

            @foreach($categories as $category)
            <div class="tab-pane" id="category{{ $category->id }}">

              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  
                @php
                  $cat_product = App\Models\Product::where('category_id', $category->id)->orderBy('id', 'DESC')->get();
                @endphp
                @forelse($cat_product as $product)
                <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ url('product/details/' . $product->id) }}">{{$product->product_name}}</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> ${{$product->selling_price}} </span> <span class="price-before-discount">${{$product->selling_price}}</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
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
                              <li class="lnk wishlist"> 
                              <form action="{{route('product.addtowish')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="1" name="quantity">
                                    <input type="hidden" name="pid" value="{{$product->id}}">
                                    <button data-toggle="tooltip" class="btn btn-primary icon" type="submit" title="Add Wish"> <i class="fa fa-heart"></i> </button>
                                  </form>
                                  <button class="btn btn-primary cart-btn" type="button">Add to wishlist</button> 
                              </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  @empty
                  <h5 class="text-danger">No Product</h5>
                  @endforelse
                  
                </div>
                <!-- /.home-owl-carousel -->

                
                
                
              </div>
              <!-- /.product-slider --> 
            </div>
            @endforeach
            <!-- /.tab-pane -->
            

          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner1.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="assets/images/banners/home-banner2.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">Featured products</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

          @foreach($featured as $product)
          <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                  <!-- /.image -->
                  
                  
                <!-- /.product-image -->

                @php
                $discounted_price = $product->selling_price - $product->selling_price * $product->discount / 100;
                @endphp

                <div>
                  @if($product->discount == NULL )
                  <div class="tag new"><span>new</span></div>
                  @else
                  <div class="tag hot"><span>{{ $product->discount }}%</span></div>
                  @endif

                  </div>

                </div>
                
                <div class="product-info text-left">
                  <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>

                  @if ($product->discount == NULL)
                  <div class="product-price"> <span class="price">${{$product->selling_price}}</div>
                  @else
                  <div class="product-price"> <span class="price"> ${{round($discounted_price)}} </span> <span class="price-before-discount">${{$product->selling_price}}</span> </div>
                  @endif
                  
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
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
                                  <button class="btn btn-primary cart-btn" type="button">Add to wishlist</button>
                      </li>
                      
                    </ul>
                  </div>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
              <!-- /.product --> 
              
            </div>
            <!-- /.products --> 
          </div>
            <!-- /.item -->
          @endforeach
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 



        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">{{ $skip_category_0->category_name }}</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

          @foreach($skip_product_0 as $product)
          <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                  <!-- /.image -->
                  
                  
                <!-- /.product-image -->

                @php
                $discounted_price = $product->selling_price - $product->selling_price * $product->discount / 100;
                @endphp

                <div>
                  @if($product->discount == NULL )
                  <div class="tag new"><span>new</span></div>
                  @else
                  <div class="tag hot"><span>{{ $product->discount }}%</span></div>
                  @endif

                  </div>

                </div>
                
                <div class="product-info text-left">
                  <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>

                  @if ($product->discount == NULL)
                  <div class="product-price"> <span class="price">${{$product->selling_price}}</div>
                  @else
                  <div class="product-price"> <span class="price"> ${{round($discounted_price)}} </span> <span class="price-before-discount">${{$product->selling_price}}</span> </div>
                  @endif
                  
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
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
                                  <button class="btn btn-primary cart-btn" type="button">Add to wishlist</button>
                      </li>
                      
                    </ul>
                  </div>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
              <!-- /.product --> 
              
            </div>
            <!-- /.products --> 
          </div>
            <!-- /.item -->
          @endforeach
          </div>
          <!-- /.home-owl-carousel --> 
        </section>

        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">{{ $skip_category_1->category_name }}</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

          @foreach($skip_product_1 as $product)
          <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                  <!-- /.image -->
                  
                  
                <!-- /.product-image -->

                @php
                $discounted_price = $product->selling_price - $product->selling_price * $product->discount / 100;
                @endphp

                <div>
                  @if($product->discount == NULL )
                  <div class="tag new"><span>new</span></div>
                  @else
                  <div class="tag hot"><span>{{ $product->discount }}%</span></div>
                  @endif

                  </div>

                </div>
                
                <div class="product-info text-left">
                  <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>

                  @if ($product->discount == NULL)
                  <div class="product-price"> <span class="price">${{$product->selling_price}}</div>
                  @else
                  <div class="product-price"> <span class="price"> ${{round($discounted_price)}} </span> <span class="price-before-discount">${{$product->selling_price}}</span> </div>
                  @endif
                  
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
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
                                  <button class="btn btn-primary cart-btn" type="button">Add to wishlist</button> 
                      </li>
                    </ul>
                  </div>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
              <!-- /.product --> 
              
            </div>
            <!-- /.products --> 
          </div>
            <!-- /.item -->
          @endforeach
          </div>
          <!-- /.home-owl-carousel --> 
        </section>





        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">{{ $skip_brand_1->brand_name }}</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

          @foreach($skip_brand_product_1 as $product)
          <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                  <!-- /.image -->
                  
                  
                <!-- /.product-image -->

                @php
                $discounted_price = $product->selling_price - $product->selling_price * $product->discount / 100;
                @endphp

                <div>
                  @if($product->discount == NULL )
                  <div class="tag new"><span>new</span></div>
                  @else
                  <div class="tag hot"><span>{{ $product->discount }}%</span></div>
                  @endif

                  </div>

                </div>
                
                <div class="product-info text-left">
                  <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>

                  @if ($product->discount == NULL)
                  <div class="product-price"> <span class="price">${{$product->selling_price}}</div>
                  @else
                  <div class="product-price"> <span class="price"> ${{round($discounted_price)}} </span> <span class="price-before-discount">${{$product->selling_price}}</span> </div>
                  @endif
                  
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
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
                        <button class="btn btn-primary cart-btn" type="button">Add to wishlist</button> 
                      </li>
                    </ul>
                  </div>
             
                </div>
          
              </div>
    
              
            </div>
    
          </div>

          @endforeach
          </div>

        </section>



        
      </div>

    </div>

    @include('shop.body.brands')

  </div>

</div>

@endsection