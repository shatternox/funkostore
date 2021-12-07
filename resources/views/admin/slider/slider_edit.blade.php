@extends('admin.admin_master')
@section('admin')



<div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
    <section class="content">
	    <div class="row">

            <!-- Add brand -->
            <div class="col-12">

			    <div class="box">
				    <div class="box-header with-border">
				        <h3 class="box-title">Edit Slider</h3>
				    </div>
				    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                        <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        					
                                   
                            <div class="form-group">
                                <h5>Title<span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="text" name="title" class="form-control" value="{{ $slider->title }}" > 
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror 
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Description<span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="text" name="description" class="form-control" value="{{ $slider->description }}"> 
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror 
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
                                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
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