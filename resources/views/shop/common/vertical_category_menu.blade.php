@php
$categories = App\Models\Category::orderBy('category_name', 'ASC')->get();
@endphp

<div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">

            @foreach($categories as $category)
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon {{$category->category_icon}}" aria-hidden="true"></i>{{ $category->category_name }}</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                      @php 
                      $subcategories = App\Models\SubCategory::where('category_id', $category->id)->orderBy('subcategory_name', 'ASC')->get();
                      @endphp
                      
                        <ul class="links list-unstyled">
                          @foreach($subcategories as $subcategory)
                          <li><a href="{{ url('subcategory/product/'.$subcategory->id . '/' . $subcategory->subcategory_slug) }}">{{ $subcategory->subcategory_name }}</a></li>
                          @endforeach
                        </ul>
                      
                      </div>
                      <!-- /.col --> 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> 
              </li>
              <!-- /.menu-item -->
            @endforeach
              
              
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 