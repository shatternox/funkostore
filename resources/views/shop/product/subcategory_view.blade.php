@extends('shop.main_master')
@section('shop')

@section('title')
Sub-category
@endsection

<style>
  .padding-left{
    padding-left: 15px;
  }
</style>


<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        @include('shop.common.vertical_category_menu')
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <h3 class="section-title">shop by</h3>
              <div class="widget-header">
                <h4 class="widget-title">Category</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">

                @foreach($categories as $category)
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapse{{ $category->id }}" data-toggle="collapse" class="accordion-toggle collapsed"> {{ $category->category_name }} </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapse{{ $category->id }}" style="height: 0px;">
                      <div class="accordion-inner">
                      @php 
                        $subcategories = App\Models\SubCategory::where('category_id', $category->id)->orderBy('subcategory_name', 'ASC')->get();
                        @endphp
                            @foreach($subcategories as $subcategory)
                            <ul>
                            <li><a href="{{ url('subcategory/product/'.$subcategory->id . '/' . $subcategory->subcategory_slug) }}">{{ $subcategory->subcategory_name }}</a></li>
                            </ul>
                            @endforeach
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                @endforeach
                  
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
             <!-- ============================================== PRODUCT TAGS ============================================== -->
            @include('shop.common.product_tags')
            <!-- /.sidebar-widget --> 
          <!----------- Testimonials------------->
   
            
            <!-- ============================================== Testimonials: END ============================================== -->
            
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
           
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
         
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
              

              
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                    @foreach($products as $product)
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                          <!-- /.image -->
                          
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
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                          <div class="description"></div>

                            @if ($product->discount == NULL)
                            <div class="product-price"> <span class="price"> ${{ $product->selling_price }}</span></div>
                            @else
                            <div class="product-price"> <span class="price"> ${{ $discounted_price }} </span> <span class="price-before-discount">${{ $product->selling_price }}</span> </div>
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
                                  <button class="btn btn-primary cart-btn" type="submit">Add to cart</button>
                                </li>
                                <li class="wishlist"> 

                              <form action="{{route('product.addtowish')}}" method="post">
                                  @csrf
                                  <input type="hidden" value="1" name="quantity">
                                  <input type="hidden" name="pid" value="{{$product->id}}">
                                  <button data-toggle="tooltip" class="btn btn-primary icon" type="submit" title="Add Wish"> <i class="fa fa-heart"></i> </button>
                                </form>
                                <button class="btn btn-primary cart-btn" type="submit">Add to wishlist</button>

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
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane "  id="list-container">
              <div class="category-product">
              @foreach($products as $product)
              @php
                $discounted_price = $product->selling_price - $product->selling_price * $product->discount / 100;
                @endphp
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="{{ asset($product->product_thumbnail) }}" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="{{ url('product/details/' . $product->id . '/' . $product->product_slug) }}">{{$product->product_name}}</a></h3>
                            @if ($product->discount == NULL)
                            <div class="product-price"> <span class="price">${{$product->selling_price}}</div>
                            @else
                            <div class="product-price"> <span class="price"> ${{round($discounted_price)}} </span> <span class="price-before-discount">${{$product->selling_price}}</span> </div>
                            @endif
                            <!-- /.product-price -->
                            <div class="description m-t-10">{!! $product->short_description !!}</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
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
                                        <button class="btn btn-primary cart-btn" type="submit">Add to wishlist</button>
                                      </form>
                                      

                                    </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                @endforeach
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                    {{ $products->links() }}
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    @include('shop.body.brands')
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 
@endsection