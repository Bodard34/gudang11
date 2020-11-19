<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!-- =========================== CONTENT =========================== -->
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Categories
						<small>Group your inventory</small>
					</h1>
					<ol class="breadcrumb">
						<li class="active"><i class="fa fa-star"></i> &nbsp; Categories</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
					<?php echo $message;?>

					<!-- Insert New Data box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Add Category
							</h3>

							<div class="box-tools pull-right">
								<button class="btn btn-default btn-box-tool" title="Show / Hide" id="myboxwidget"><i class="fa fa-plus"></i> Show / Hide</button>
							</div>
						</div>
						<div class="box-body <?php if (!isset($open_form)){ echo "hide";} ?>" id="add_new">
								<form action="<?php echo base_url('categories/add') ?>" method="post" autocomplete="off" class="form form-horizontal">
									<div class="form-group">
										<label for="code" class="control-label col-md-2">* Code</label>
										<div class="col-md-8 <?php if (form_error('code')) {echo "has-error";} ?>">
											<input type="text" name="code" id="code" class="form-control" value="<?php echo set_value('code'); ?>" placeholder="Category code" required>
											<?php //echo form_error('code'); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="name" class="control-label col-md-2">* Name</label>
										<div class="col-md-8 <?php if (form_error('name')) {echo "has-error";} ?>">
											<input type="text" name="name" id="name" class="form-control" value="<?php echo set_value('name'); ?>" placeholder="Category Name" required>
										</div>
									</div>
									<div class="form-group">
										<label for="description" class="control-label col-md-2">Description</label>
										<div class="col-md-8">
											<textarea name="description" id="description" class="form-control text_editor" rows="4" style="resize:vertical; min-height:100px; max-height:200px;"><?php echo set_value('description'); ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-8 col-md-offset-2">
											<button type="submit" class="btn btn-primary" onclick="return confirm('Save your data?')">Submit</button>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-8 col-md-offset-2">
										  <p class="help-block">(*) Harus Diisi</p>
										</div>
									</div>
								</form>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->

					<!-- Default box -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">List of categories
							</h3>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Code</th>
											<th>Name</th>
											<th>Description</th>
											<th>#</th>
										</tr>
									</thead>
									<tbody>
									<?php if (count($data_list->result())>0): ?>
										<?php foreach ($data_list->result() as $data): ?>
										<tr>
											<td><?php echo $data->code; ?></td>
											<td><?php echo $data->name; ?></td>
											<td><?php echo $data->description; ?></td>
											<td width="15%">
												<form action="<?php echo base_url('categories/delete/'.$data->id) ?>" method="post" autocomplete="off">
													<div class="btn-group-vertical">
														<a class="btn btn-sm btn-primary" href="<?php echo base_url('categories/edit/'.$data->id) ?>" role="button"><i class="fa fa-pencil"></i> Edit</a>
														<input type="hidden" name="id" value="<?php echo $data->id; ?>">
														<button type="submit" class="btn btn-sm btn-danger" role="button" onclick="return confirm('Delete this data?')"><i class="fa fa-trash"></i> Delete</button>
													</div>
												</form>
											</td>
										</tr>
										<?php endforeach ?>
									<?php else: ?>
										<tr>
											<td class="text-center" colspan="4">No Data Found!</td>
										</tr>
									<?php endif ?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer text-center">
							<?php echo $pagination; ?>
							<?php //echo $last_query ?>&nbsp;
							<!-- Footer -->
						</div>
						<!-- /.box-footer-->
					</div>
					<!-- /.box -->

				</section>
				<!-- /.content -->
			</aside>

	<!-- =========================== / CONTENT =========================== -->
