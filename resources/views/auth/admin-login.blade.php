<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('adminpanel/images/favicon.ico') }}">

    <title>Funkostore Admin - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('adminpanel/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('adminpanel/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('adminpanel/css/skin_color.css') }}">	

</head>
<body class="hold-transition theme-primary bg-gradient-primary">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-white">Funkostore Admin Panel Login</h2>
							<p class="text-white-50">Sign in to manage product and transactions</p>							
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
                        <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" id="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Email" type="email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Password" id="password" name="password">
                                </div>
                            </div>
                                <div class="row">
                                <!-- /.col -->
                             
                                <!-- /.col -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-info btn-rounded mt-10">SIGN IN</button>
                                </div>
                                <!-- /.col -->
                                </div>
                        </form>														

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset('adminpanel/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>	

</body>
</html>
