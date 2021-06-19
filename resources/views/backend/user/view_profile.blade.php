@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-12">




<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
 <div class="widget-user-header bg-black">
	  <h3 class="widget-user-username">Nom de l'utilisateur : {{ $user->name }}</h3>

	   <a href="{{ route('profile.edit') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Modifier le profile</a>

	  <h6 class="widget-user-desc">Type de l'utilisateur : {{ $user->usertype }}</h6>
	  <h6 class="widget-user-desc">E-mail de l'utilisateur : {{ $user->email }}</h6>
     <h6 class="widget-user-desc">ID de l'utilisateur: {{ $user->id_no }}</h6>


					</div>
					<div class="widget-user-image">
  <img class="rounded-circle"
   src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }} " alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">Numéro de téléphone</h5>
							<span class="description-text">{{ $user->mobile }}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
							<h5 class="description-header">Adresse</h5>
							<span class="description-text">{{ $user->address }}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">Sexe</h5>
							<span class="description-text">{{ $user->gender }}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>







			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>
  </div>





@endsection