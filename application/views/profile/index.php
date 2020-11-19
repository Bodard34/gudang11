<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!-- =========================== CONTENT =========================== -->
            <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Profile
				<small>Your Profile</small>
			</h1>
			<ol class="breadcrumb">
				<li class="active"><i class="fa fa-user"></i> &nbsp; Profile</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">

			<!-- Default box -->
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">
					</h3>
				</div>
				<div class="box-body">
					<?php echo $message;?>
					<?php $myprofile = $this->ion_auth->user()->row(); ?>
					<form action="<?php echo base_url('profile/edit') ?>" method="post" class="form form-horizontal" autocomplete="off">
						<div class="row">
								<div class="form-group">
									<label for="username" class="control-label col-sm-3">Username</label>
									<div class="col-sm-9">
										<p class="form-control-static"><?php echo $myprofile->username ?></p>
									</div>
								</div>
								<hr>
								<div class="form-group">
									<label for="first_name" class="control-label col-sm-3">First Name</label>
									<div class="col-sm-9">
										<p class="form-control-static"><?php echo $myprofile->first_name ?></p>
									</div>
								</div>
								<div class="form-group">
									<label for="last_name" class="control-label col-sm-3">Last Name</label>
									<div class="col-sm-9">
										<p class="form-control-static"><?php echo $myprofile->last_name ?></p>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="control-label col-sm-3">E-mail</label>
									<div class="col-sm-9">
										<p class="form-control-static"><?php echo $myprofile->email ?></p>
									</div>
								</div>
								<div class="form-group">
									<label for="phone" class="control-label col-sm-3">Phone</label>
									<div class="col-sm-9">
										<p class="form-control-static"><?php echo $myprofile->phone ?></p>
									</div>
								</div>
						</div>
					</form>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-center">
					<a class="btn btn-primary" href="<?php echo base_url('profile/edit') ?>" role="button">Edit Profile</a>
					<!-- Footer -->
				</div>
				<!-- /.box-footer-->
			</div>
			<!-- /.box -->

		</section>
		<!-- /.content -->
	</aside>

	<!-- =========================== / CONTENT =========================== -->

