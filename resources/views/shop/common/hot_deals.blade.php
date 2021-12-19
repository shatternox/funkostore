@php
$hotdeals = App\Models\Product::where('hot_deals', 1)->where('status', 1)->where('discount', '!=', NULL)->limit(3)->orderBy('id', 'DESC')->get();
@endphp
<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">hot deals</h3>
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            @foreach($hotdeals as $product)
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper">
                  <div class="image"> <img src="{{ asset($product->product_thumbnail) }}" alt=""> </div>

                  @if ($product->discount == NULL)
                  
                  @else
                  <div class="sale-offer-tag"><span>{{ $product->discount }}%<br>
                    off</span></div>
                  @endif
                
                </div>
                <!-- /.hot-deal-wrapper -->
                
                @php
                $discounted_price = $product->selling_price - $product->selling_price * $product->discount / 100;
                @endphp

                <div class="product-info text-left m-t-20">
                  <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                  <div class="rating rateit-small"></div>
                  @if ($product->discount == NULL)
                  <div class="product-price"><span class="price">${{$product->selling_price}}</span> </div>
                  @else
                  <div class="product-price"> <span class="price"> ${{round($discounted_price)}} </span> <span class="price-before-discount">${{$product->selling_price}}</span> </div>
                  @endif
                  
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <div class="add-cart-button btn-group">
                    <form action="{{route('product.addtocart')}}" method="post">
                      @csrf
                      <input type="hidden" value="1" name="quantity">
                      <input type="hidden" name="pid" value="{{$product->id}}">
                      <button class="btn btn-primary icon" data-toggle="dropdown" type="submit"> <i class="fa fa-shopping-cart"></i> </button>
        <button class="btn btn-primary cart-btn" type="submit">Add to cart</button>
                    </form>
                      
                    </div>
                  </div>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            @endforeach
          </div>
          <!-- /.sidebar-widget --> 
        </div>