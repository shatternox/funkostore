@extends('admin.admin_master')
@section('admin')



<div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
    <section class="content">
	    <div class="row">


		    <div class="col-8">

			    <div class="box">
				    <div class="box-header with-border">
				        <h3 class="box-title">Slider</h3>
				    </div>
				    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $slider)
                                <tr>
                                    <td>

                                        @if($slider->status === 1)
                                            <span class="badge badge-pill badge-danger">No Title</span>
                                        @else
                                            {{ $slider->title }}
                                        @endif

                                    </td>
                                    <td>

                                        @if($slider->status === 1)
                                            <span class="badge badge-pill badge-danger">No Description</span>
                                        @else
                                            {{ $slider->description }}
                                        @endif
                                    </td>
                                    <td><img src="{{ asset( $slider->slider_image ) }}" alt="" width="70px" height="40px"></td>
                                    <td>
                                        @if($slider->status === 1)
                                            <span class="badge badge-pill badge-success">Active</span>
                                        @else
                                            <span class="badge badge-pill badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td width="30%">
                                        @if($slider->status === 1)
                                        <a href="{{ route('slider.inactive', $slider->id) }}" class="btn btn-danger" title="Inactivate"><i class="fas fa-eye-slash"></i></a>
                                        @else
                                        <a href="{{ route('slider.active', $slider->id) }}" class="btn btn-success" title="Activate"><i class="fa fa-eye"></i></a>
                                        @endif
                                        
                                        <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-info" title="Edit Slider"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('slider.delete', $slider->id) }}" id="delete" class="btn btn-danger" title="Delete Slider"><i class="fa fa-trash"></i></a>
                                                
                                    </td>
                                </tr>
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

            <!-- Add brand -->
            <div class="col-4">

			    <div class="box">
				    <div class="box-header with-border">
				        <h3 class="box-title">Add Slider</h3>
				    </div>
				    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf        
                            <div class="form-group">
                                <h5>Title<span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="text" name="title" class="form-control" value="" > 
                               
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Description<span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="text" name="description" class="form-control" value="" > 
                               
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Image<span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="file" name="slider_image" class="form-control" value="">
                                @error('slider_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror 
                                </div>
                            </div>


                           
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
                            </div>
                        </form>
                        </div>
                    </div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
		  </div>
		  <!-- /.row -->
    </section>
		<!-- /.content -->
	  
</div>







@endsection