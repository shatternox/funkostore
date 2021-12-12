@extends('shop.main_master')
@section('shop')
    {{-- Pindahin style ini ya ke CSS, SEBELUM PINDAHIN PASTIIN GA ADA CLASS YANG SAMA --}}

@section('title')
    Cart
@endsection


<style>
    .cart-shopping-total {
        float: right;
        padding: 0;
    }

    .cart-shopping-total>a {
        display: block
    }

    .total-row {
        border-top: 2px solid #ddd;
    }

    .trash-icon-cart {
        font-size: 3.2em;
        color: red;
    }

    .cart-img {
        text-align: center
    }

    .cart-img>img {
        width: 80px;
        height: auto;
    }

</style>
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>MyCart</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-romove item">Image</th>
                                    <th class="cart-description item">Name</th>
                                    <th class="cart-qty item">Quantity</th>
                                    <th class="cart-sub-total item">Subtotal</th>
                                    <th class="cart-total last-item">Remove</th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody id="cartPage">
                                @php
                                    $totalIn_cart = 0;
                                @endphp
                                @if ($cart_item)
                                    @foreach ($cart_item as $cart)
                                        <tr>
                                            <td class="cart-img"><img
                                                    src="{{ asset($cart->product->product_thumbnail) }} " alt=""></td>
                                            <td><a
                                                    href="{{ url('product/details/' . $cart->product->id . '/' . $cart->product->product_slug) }}">{{ $cart->product->product_name }}</a>
                                            </td>
                                            <td>{{ $cart->quantity }}</td>
                                            @php
                                                $discounted_price = $cart->product->selling_price - ($cart->product->selling_price * $cart->product->discount) / 100;
                                                $totalIn_cart += $discounted_price * $cart->quantity;
                                            @endphp
                                            <td>${{ $discounted_price * $cart->quantity }}</td>
                                            <td style="text-align: center">
                                                <a href="{{ route('product.deleteCartItem', $cart->id) }}"><i
                                                        class="fa fa-trash trash-icon-cart"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr class="total-row">
                                        <td colspan="3">Total</td>
                                        <td>${{ $totalIn_cart }}</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>





                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <a href="{{ route('product.checkout') }}" type="submit"
                        class="btn btn-primary checkout-btn">PROCCED
                        TO CHEKOUT</a>
                </div><!-- /.cart-shopping-total -->










            </div><!-- /.row -->
        </div><!-- /.sigin-in-->

    @endsection
