@extends('shop.main_master')
@section('shop')
<style>
    thead th,td{
        text-align: center
    }
</style>
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <br>
                    <img class="card-img-top" style="border-radius: 50%"
                        src="{{ !empty(auth()->user()->profile_photo_path) ? asset('upload/profile_images/' . auth()->user()->profile_photo_path) : asset('upload/default_profile.jpg') }}"
                        alt="" width="100%" height="100%" id="showImage">
                    <br>
                    <br>
                    <ul class="list-group list-group-flush">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                        <a href="{{ route('user.change.password') }}" class="btn btn-primary btn-sm btn-block">Change
                            Password</a>
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                    </ul>

                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Shipping Details</h4>
                        </div>
                        <hr>
                        <div class="card-body" style="background: #E9EBEC;">
                            <table class="table">
                                <tr>
                                    <th> Shipping Name : </th>
                                    <th>{{Auth::user()->name}} </th>
                                </tr>

                                <tr>
                                    <th> Shipping Phone : </th>
                                    <th> {{Auth::user()->phone}} </th>
                                </tr>

                                <tr>
                                    <th> Shipping Email : </th>
                                    <th> {{Auth::user()->email}} </th>
                                </tr>

                                <tr>
                                    <th> Invoice : </th>
                                    <th> {{$orderDetails->invoice}} </th>
                                </tr>

                                <tr>
                                    <th> Date purchased : </th>
                                    <th> {{$orderDetails->date_purchased}} </th>
                                </tr>
                                <tr>
                                    <th> Total Price : </th>
                                    <th> ${{$orderDetails->total_price}} </th>
                                </tr>

                            </table>


                        </div>

                    </div>

                </div> <!-- // end col md -5 -->

            </div>
            <div class="row">



                <div class="col-md-12">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>

                                <tr style="background: #e2e2e2;">
                                    <td class="col-md-2">
                                        <label for=""> Image</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> Product Name </label>
                                    </td>

                                    <td class="col-md-2">
                                        <label for=""> Product Code</label>
                                    </td>

                                    <td class="col-md-2">
                                        <label for=""> Quantity </label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> Price </label>
                                    </td>

                                </tr>

                                @foreach ($items as $item)
                                    <tr>
                                        <td class="col-md-2">
                                            <img src="{{asset($item->product->product_thumbnail)}}" alt="" width="50" height="auto">
                                        </td>

                                        <td class="col-md-3">
                                            <label for=""> {{$item->product->product_name}} </label>
                                        </td>

                                        <td class="col-md-2">
                                            <label for=""> {{$item->product->product_code}} </label>
                                        </td>

                                        <td class="col-md-2">
                                            <label for=""> {{$item->quantity}} </label>
                                        </td>

                                        <td class="col-md-3">
                                            <label for=""> ${{($item->product->selling_price - ($item->product->selling_price * $item->product->discount) / 100)*$item->quantity}} </label>
                                        </td>

                                    </tr>
                                @endforeach
                                





                            </tbody>

                        </table>

                    </div>


                </div> <!-- / end col md 8 -->

            </div> <!-- // END ORDER ITEM ROW -->
        </div>


    </div>
@endsection
