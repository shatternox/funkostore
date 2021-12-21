@extends('admin.admin_master')
@section('admin')

<div class="container-full">

		<!-- Main content -->
		<section class="content">
	    <div class="row">


		    <div class="col-12">

			    <div class="box">
				    <div class="box-header with-border">
				        <h3 class="box-title">Orders</h3>
				    </div>
				    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No </th>
                                    <th>Invoice </th>
                                    <th>Date </th>
                                    <th>Payment Type </th>
									<th>Payment Proof </th>
                                    <th>Order Status </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
								@php
								$i = 1;
								@endphp
                                @foreach($transactions as $transaction)
                                
								<tr>
									<td>{{$i}}</td>
                                    <td>{{ $transaction->invoice }}</td>
                                    <td>{{ $transaction->date_purchased }}</td>
                                    <td>{{ $transaction->payment_type }}</td>
									<td><img src="{{ asset( $transaction->transaction_proof ) }}" alt="" style="width: 60px;"></td>
                                    @if ($transaction->order_status == "Finished")
                                    <td><span class="badge badge-pill badge-success"> {{ $transaction->order_status }} </span></td>
                                    @else
                                    <td><span class="badge badge-pill badge-danger"> {{ $transaction->order_status }} </span></td>
                                    @endif

                                   
                                    <td width=20%>
                                        <a href="{{ route('approve.transaction', $transaction->invoice) }}" class="btn btn-success" title="Approve"><i class="fas fa-thumbs-up"></i></a>
                                        <a href="{{ route('unapprove.transaction', $transaction->invoice) }}" class="btn btn-danger" title="Unapprove"><i class="fas fa-skull-crossbones"></i></a>
                                    </td>
                               
                                </tr>
								@php
								$i += 1;
								@endphp
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->

            
		  </div>
		  <!-- /.row -->
    </section>
		<!-- /.content -->
	</div>
@endsection