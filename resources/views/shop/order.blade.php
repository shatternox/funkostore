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
                <div class="col-md-12">

                    <div class="table-responsive">
                        <table class="table w-auto" style="table-layout: fixed">
                            <thead>
                                <tr style="text-align: center">
                                    <th style="width: 25%">
                                        <label for=""> Date</label>
                                    </th>

                                    <th>
                                        <label for=""> Total</label>
                                    </th>

                                    <th>
                                        <label for=""> Payment</label>
                                    </th>


                                    <th style="width: 18%">
                                        <label for=""> Invoice</label>
                                    </th>

                                    <th>
                                        <label for=""> Order</label>
                                    </th>

                                    <th style="width: 16%">
                                        <label for=""> Action </label>
                                    </th>
                                </tr>
                                
                            </thead>
                            <tbody>

                                <tr style="background: #e2e2e2;">
                                    

                                </tr>

                                @foreach ($trList as $tr)
                                    <tr>
                                        <td>
                                            <label for=""> {{ $tr->date_purchased }}</label>
                                        </td>

                                        <td>
                                            <label for=""> ${{ $tr->total_price }}</label>
                                        </td>


                                        <td>
                                            <label for=""> {{ $tr->payment_type }}</label>
                                        </td>

                                        <td>
                                            <label for=""> {{ $tr->invoice }}</label>
                                        </td>

                                        <td>
                                            <label for="">

                                                @if ($tr->order_status == 'pending')
                                                    <span class="badge badge-pill badge-warning"
                                                        style="background: #800080;"> Pending </span>
                                                @elseif($tr->order_status == 'Finished')
                                                    <span class="badge badge-pill badge-warning"
                                                        style="background: #0000FF;"> Confirmed </span>
                                                @else
                                                    <span class="badge badge-pill badge-warning"
                                                        style="background: #FF0000;"> Rejected </span>

                                                @endif
                                            </label>
                                        </td>

                                        <td>
                                            <a href="{{ url('order/details/' . $tr->invoice) }}"
                                                class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>
                                        </td>

                                    </tr>
                                @endforeach






                            </tbody>

                        </table>

                    </div>





                </div> <!-- / end col md 8 -->

            </div>
        </div>


    </div>
@endsection
