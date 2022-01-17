@php

  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();

@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ url('admin/dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	

						  <h3><b>Funkostore</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ $route == 'dashboard'? 'active':'' }}">
          <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ $prefix == '/brand'? 'active': '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ $route == 'all.brand'? 'active':'' }}"><a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brand</a></li>
          </ul>
        </li> 
		  
        <li class="treeview" class="treeview {{ $prefix == '/category'? 'active': '' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ $route == 'all.category'? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
            <li class="{{ $route == 'all.subcategory'? 'active':'' }}"><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All SubCategory</a></li>
          </ul>
        </li>
		
        <li class="treeview {{ $prefix == '/product'? 'active': '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ $route == 'add.product'? 'active':'' }}"><a href="{{ route('add.product') }}"><i class="ti-more"></i>Add Products</a></li>
            <li class="{{ $route == 'manage.product'? 'active':'' }}"><a href="{{ route('manage.product') }}"><i class="ti-more"></i>Manage Products</a></li>
          </ul>
        </li> 	
        
        <li class="treeview {{ $prefix == '/slider'? 'active': '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ $route == 'all.slider'? 'active':'' }}"><a href="{{ route('all.slider') }}"><i class="ti-more"></i>Manage Slider</a></li>
          </ul>
        </li> 
		 
       
        
		

        
      </ul>
    </section>

  </aside>