@extends('shop.main_master')
@section('shop')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Checkout</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->




    <div class="body-content">
        <div class="container">
            <div class="checkout-box ">
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel-group checkout-steps" id="accordion">
                            <!-- checkout-step-01  -->
                            <div class="panel panel-default checkout-step-01">

                                <!-- panel-heading -->

                                <!-- panel-heading -->

                                <div id="collapseOne" class="panel-collapse collapse in">

                                    <!-- panel-body  -->
                                    <div class="panel-body">
                                        <div class="row">

                                            <!-- guest-login -->
                                            <div class="col-md-6 col-sm-6 already-registered-login">
                                                <h4 class="checkout-subtitle"><b>Shipping Address</b></h4>

                                                <form class="register-form" action="{{ route('product.addOrder') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf


                                                    <div class="form-group">
                                                        <label class="info-title" for="exampleInputEmail1"><b>Shipping
                                                                Name</b> <span>*</span></label>
                                                        <input type="text" name="shipping_name"
                                                            class="form-control unicase-form-control text-input"
                                                            id="exampleInputEmail1" placeholder="Full Name"
                                                            value="{{ Auth::user()->name }}" required="">
                                                    </div> <!-- // end form group  -->


                                                    <div class="form-group">
                                                        <label class="info-title" for="exampleInputEmail1"><b>Email </b>
                                                            <span>*</span></label>
                                                        <input type="email" name="shipping_email"
                                                            class="form-control unicase-form-control text-input"
                                                            id="exampleInputEmail1" placeholder="Email"
                                                            value="{{ Auth::user()->email }}" required="">
                                                    </div> <!-- // end form group  -->




                                            </div>
                                            <!-- guest-login -->





                                            <!-- already-registered-login -->
                                            <div class="col-md-6 col-sm-6 already-registered-login">

                                                <div class="form-group">
                                                    <h5><b>Upload bukti transaksi</b> <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="transactionProof" required>

                                                    </div>
                                                </div> <!-- // end form group -->


                                                








                                            </div>
                                            <!-- already-registered-login -->

                                        </div>
                                    </div>
                                    <!-- panel-body  -->

                                </div><!-- row -->
                            </div>
                            <!-- End checkout-step-01  -->




                        </div><!-- /.checkout-steps -->
                    </div>




                    <div class="col-md-4">
                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                                    </div>
                                    <div class="">
                                        <ul class="nav nav-checkout-progress list-unstyled">
											@php
												$totalIn_cart = 0;
											@endphp
                                            @foreach ($cart_item as $cart)
                                                <li>
                                                    <strong>Image: </strong>
                                                    <img src="{{ asset($cart->product->product_thumbnail) }}"
                                                        style="height: 50px; width: 50px;">
                                                </li>

                                                <li>
                                                    <strong>Name: </strong>
                                                    <p>{{ $cart->product->product_name }}</p>
                                                    <strong>Quantity: </strong>
                                                    ( <strong>{{ $cart->quantity }} </strong>)
                                                </li>
												@php
                                                    $discounted_price = $cart->product->selling_price - ($cart->product->selling_price * $cart->product->discount) / 100;
                                                    $totalIn_cart += $discounted_price * $cart->quantity;
                                                @endphp
                                            @endforeach

											<li><p><strong>Total:</strong> ${{$totalIn_cart}}</p></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- checkout-progress-sidebar -->
                    </div>







                    <div class="col-md-4">
                        <!-- checkout-progress-sidebar -->
                        <div class="checkout-progress-sidebar ">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">Select Payment Method</h4>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Card</label>
                                            <input type="radio" name="payment_method" value="visa" required>
                                            <img src="{{ asset('shop/assets/images/payments/3.png') }}">
                                        </div> <!-- end col md 4 -->

                                        <div class="col-md-4">
                                            <label for="">Cash</label>
                                            <input type="radio" name="payment_method" value="paypal" required>
                                            <img src="{{ asset('shop/assets/images/payments/1.png') }}">
                                        </div> <!-- end col md 4 -->


                                    </div> <!-- // end row  -->
                                    <hr>
                                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button" disabled>Payment Step</button>


                                </div>
                            </div>
                        </div>
                        <!-- checkout-progress-sidebar -->
                    </div>


                    </form>
                </div><!-- /.row -->
            </div><!-- /.checkout-box -->
            <!-- === ===== BRANDS CAROUSEL ==== ======== -->

            <!-- ===== == BRANDS CAROUSEL : END === === -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection
