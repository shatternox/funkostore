@extends('admin.admin_master')
@section('admin')

<div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">



                <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-black">
                        <h3 class="widget-user-username">Name: {{ $admin->name }}</h3>
                        <a href="{{ route('admin.profile.edit') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Edit Profile</a>
                        <h6 class="widget-user-desc">Email: {{ $admin->email }} </h6>
                        </div>
                        <div class="widget-user-image">
                        <img class="rounded-circle" src="{{ !empty($admin->profile_photo_path)? asset('upload/profile_images/' . $admin->profile_photo_path) : asset('upload/default_profile.jpg') }}">
                        </div>
                        <div class="box-footer">
                        
                    </div>
                </div>
			</div>
		</section>
		<!-- /.content -->
	</div>
@endsection