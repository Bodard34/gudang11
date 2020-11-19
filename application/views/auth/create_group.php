	<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!-- =========================== CONTENT =========================== -->
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
					<h1>
						<?php echo lang('create_group_heading');?>
						<small><?php echo lang('create_group_subheading');?></small>
					</h1>
					<ol class="breadcrumb">
						<li><i class="fa fa-users"></i> <a href="<?php echo base_url('auth') ?>"><?php echo lang('index_heading');?></a></li>
						<li class="active"><?php echo lang('create_group_heading'); ?></li>
					</ol>
                </section>

                <!-- Main content -->
                <section class="content">
                				<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
						</div>
						<div class="box-body">
							<?php echo $message;?>
							
							<?php echo form_open("auth/create_group", array('class' => 'form form-horizontal'));?>

						      <div class="form-group">
					            <?php echo lang('create_group_name_label', 'group_name', array('class' => 'control-label col-md-3'));?> 
					            <div class="col-md-7">
						            <?php echo form_input($group_name);?>
					            </div>
						      </div>

						      <div class="form-group">
					            <?php echo lang('create_group_desc_label', 'description', array('class' => 'control-label col-md-3'));?> 
					            <div class="col-md-7">
						            <?php echo form_input($description);?>
					            </div>
						      </div>

						      <div class="form-group text-center"><?php echo form_submit('submit', lang('create_group_submit_btn'), array('class' => 'btn btn-primary'));?></div>

							<?php echo form_close();?>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<!-- Footer -->
						</div>
						<!-- /.box-footer-->
					</div>
					<!-- /.box -->
				</section>
			</aside>

	<!-- =========================== / CONTENT =========================== -->


