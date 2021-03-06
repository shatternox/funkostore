<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="{{ route('user.profile') }}"><i class="icon fa fa-user"></i>My Account</a></li>
            <li><a href="{{ route('wishlist.view') }}"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <li><a href="{{ route('product.cart') }}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <li><a href="{{route('product.order')}}"><i class="icon fa fa-check"></i>My Order</a></li>
            

            @auth
            <li><a href="{{ route('dashboard') }}"><i class="icon fa fa-user"></i>Profile</a></li>
            @else
            <li><a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>Login/Register</a></li>
            @endauth

          </ul>
        </div>

        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{ url('/') }}"> <img src="{{ asset('shop/assets/images/logo.png') }}" alt="logo" style="width: 200px;"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="{{ route('product.search') }}" method="POST">
              @csrf
              <div class="control-group">
     
                <input class="search-field" placeholder="Search here..." name="search" />
                <button class="search-button" type="submit"></button> 
              </div>
            </form>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          @php
            use App\Models\Cart;
            
            $totalIn_cart = 0;
            $total_item = 0;
            
          @endphp
          @auth
            @php
              $cart_item = Cart::where('user_id',auth()->user()->id)->get();
              if ($cart_item){
                  foreach($cart_item as $c){
                      $discounted_price = $c->product->selling_price - $c->product->selling_price * $c->product->discount / 100;
                      $totalIn_cart+=($discounted_price * $c->quantity);
                      $total_item++;
                  }
              }
            @endphp
          @endauth
          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count">{{$total_item}}</span></div>
              <div class="total-price-basket"> <span class="lbl">cart -</span> <span class="total-price"> <span class="sign">$</span><span class="value">{{$totalIn_cart}}</span> </span> </div>
            </div>
            </a>
            @auth
            @if ($cart_item->first())
                
            <ul class="dropdown-menu">
              <li>
                <div class="cart-item product-summary">


                  @foreach ($cart_item as $cart)
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="image"> <a href="detail.html"><img src="{{ asset($cart->product->product_thumbnail) }} " alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="{{ url('product/details/' . $cart->product->id . '/' . $cart->product->product_slug) }}">{{$cart->product->product_name}}</a></h3>
                      @php
                          $discounted_price = $cart->product->selling_price - $cart->product->selling_price * $cart->product->discount / 100;
                          $finalPrice = ($discounted_price * $cart->quantity);
                      @endphp
                      <div class="price">${{$finalPrice}}</div>
                    </div>
                    <div class="col-xs-1 action"> <a href="{{route('product.deleteCartItem',$cart->id)}}"><i class="fa fa-trash"></i></a> </div>
                  </div>
                  @endforeach
                  
                  
                </div>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>${{$totalIn_cart}}</span> </div>
                  <div class="clearfix"></div>
                  <a href="{{route('product.checkout')}}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            @endif
            @endauth
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="{{ url('/') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                
                @php
                $categories = App\Models\Category::orderBy('category_name', 'ASC')->get();
                @endphp

                @foreach($categories as $category)

                <li class="dropdown yamm mega-menu"> <a href="{{ url('/') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{ $category->category_name }}</a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                          <!-- /.col -->
                          @php
                          $subcategories = App\Models\SubCategory::where('category_id', $category->id)->orderBy('subcategory_name', 'ASC')->get();
                          @endphp

                          
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                            @foreach($subcategories as $subcategory)
                            <ul class="links">
                              <li><a href="{{ url('subcategory/product/'.$subcategory->id . '/' . $subcategory->subcategory_slug) }}">{{$subcategory->subcategory_name}}</a></li>
                            </ul>
                            @endforeach 
                          </div>
     
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>

                @endforeach

              </ul>
              <!-- /.navbar-nav -->
              
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>