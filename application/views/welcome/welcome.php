<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!-- =========================== CONTENT =========================== -->
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Home
                        <!-- <small>Control panel</small> -->
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> Home</li>
                        <!-- <li class="active">Dashboard</li> -->
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box">
                        <div class="box-header with-border">

                        </div>

                        <div class="box-body">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-maroon">
                                        <div class="inner">
                                            <h3>
                                                <?php echo $total_inventory ?>
                                            </h3>
                                            <p>
                                                Products
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios7-pricetag-outline"></i>
                                        </div>
                                        <a href="<?php echo base_url('inventory/all') ?>" class="small-box-footer">
                                            More info <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div><!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <h3>
                                                <?php echo $total_category ?>
                                            </h3>
                                            <p>
                                                Categories
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a href="<?php echo base_url('categories') ?>" class="small-box-footer">
                                            More info <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div><!-- ./col -->
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <h3>
                                                <?php echo $total_location ?>
                                            </h3>
                                            <p>
                                                Locations
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios7-location-outline"></i>
                                        </div>
                                        <a href="<?php echo base_url('locations') ?>" class="small-box-footer">
                                            More info <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div><!-- ./col -->
                            </div><!-- /.row -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

