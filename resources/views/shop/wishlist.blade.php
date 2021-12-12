@extends('shop.main_master')
@section('shop')
{{-- Pindahin style ini ya ke CSS, SEBELUM PINDAHIN PASTIIN GA ADA CLASS YANG SAMA --}}

@section('title')
Wishlist
@endsection


<style>
    .cart-shopping-total{
        float: right;
        padding: 0;
    }
    .cart-shopping-total > a{
        display: block
    }
    .total-row{
        border-top: 2px solid #ddd;
    }
    .trash-icon-cart{
        font-size: 3.2em;
        color: red;
    }
    .cart-img{
        text-align: center
    }
    .cart-img> img{
        width: 80px;
        height: auto;
    }
</style>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Wishlist</li>
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
                    <th class="cart-description item">Add to Cart</th>
					<th class="cart-total last-item">Remove</th>
				</tr>
			</thead><!-- /thead -->
			<tbody id="cartPage">
                @if ($wishes)
                    @foreach ($wishes as $wish)
                    <tr>
                        <td class="cart-img"><img src="{{ asset($wish->product->product_thumbnail) }} " alt=""></td>
                        <td><a href="{{ url('product/details/' . $wish->product->id . '/' . $wish->product->product_slug) }}">{{$wish->product->product_name}}</a></td>
                        <td style="text-align: center">
                            <form action="{{route('product.addtocart')}}" method="post">
                                @csrf
                                <input type="hidden" value="1" name="quantity">
                                <input type="hidden" name="pid" value="{{$wish->product->id}}">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="submit" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                            </form>
                        </td>
                        <td style="text-align: center">
                            <a href="{{route('product.deleteWishItem',$wish->id)}}"><i class="fa fa-trash trash-icon-cart"></i></a>
                        </td>
                    </tr>
                    @endforeach
                @endif
                
			</tbody>
		</table>
	</div>
</div>		


	</div><!-- /.row -->
		</div><!-- /.sigin-in-->

@endsection