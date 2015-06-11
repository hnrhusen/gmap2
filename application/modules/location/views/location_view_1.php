<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8"/>
<title>Metronic | Maps - Google Maps</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <?php $this->load->view('dashboard/header'); ?>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('dashboard/dashboard_left_menu'); ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Add Building</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                            <form id="building_add" name="building_add" method="post"  onsubmit="return validateForm()" action="<?php echo base_url(); ?>location/add_building" class="form-horizontal">
                                                <div class="form-body">

                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Name</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="building_name" name="name" value="" class="form-control" placeholder="Chee Kin">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Address</label>
                                                                <div class="col-md-9">
                                                                    <textarea id="building_address" name="address" value="" class="form-control" rows="3"></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>

                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Latitude</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="building_latitude" name="latitude" value="" class="form-control" placeholder="Chee Kin">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Langitude</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="building_langitude" name="langitude" value="" class="form-control" placeholder="Chee Kin">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input id="building_add_submit" type="submit" name="submit" value="Save" class="btn blue">
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="modal fade" id="portlet-config1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Add Floor 2</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="floor_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                            <form name="floor_add" method="post"  onsubmit="return validatefloorForm()" action="<?php echo base_url(); ?>location/add_floor" class="form-horizontal">
                                                <div class="form-body">


                                                    <!--/row-->


                                                    <!--/row-->

                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Building</label>
                                                                <div class="col-md-9">
                                                                    <select id="building_id" name="building_id" class="form-control">
                                                                        <?php
                                                                        foreach ($buildings as $building) {
                                                                            echo '<option value="' . $building["id"] . '">' . $building["name"] . '</option>';
                                                                        }
                                                                        ?>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>

                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-3"></div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Floor</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="floor" name="floor" value="" class="form-control" placeholder="Floor Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>

                                                    <!--/row-->
                                                </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <input type="submit" name="submit" value="Save" class="btn blue">
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="modal fade" id="portlet-config2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Add Office 3</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="office_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                        <form method="post"  onsubmit="return validateofficeForm()" action="<?php echo base_url(); ?>location/add_office" class="form-horizontal">
                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Building</label>
                                                            <div class="col-md-9">
                                                                <select name="building_id" class="form-control">
                                                                    <?php
                                                                    foreach ($buildings as $building) {
                                                                        echo '<option value="' . $building["id"] . '">' . $building["name"] . '</option>';
                                                                    }
                                                                    ?>

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-3"></div>
                                                    <!--/span-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Floor</label>
                                                            <div class="col-md-9">
                                                                <select name="floor_id" class="form-control">
                                                                    <?php
                                                                    foreach ($floors as $floor) {
                                                                        echo '<option value="' . $floor["id"] . '">' . $floor["name"] . '</option>';
                                                                    }
                                                                    ?>

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-3"></div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-3"></div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Office</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="office" id="office" class="form-control" placeholder="Chee Kin">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-3"></div>
                                                    <!--/span-->
                                                </div>

                                                <!--/row-->
                                            </div>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="submit" value="Save" class="btn blue">
                                </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                            <h3 class="page-title">
                                Location
                            </h3>


                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable tabbable-custom boxless tabbable-reversed">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_0" data-toggle="tab">
                                            Building
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_1" data-toggle="tab">
                                            Floor
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_2" data-toggle="tab">
                                            Office
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box blue">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            Building
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-toolbar">
                                                            <div class="btn-group">
                                                                <a href="#portlet-config" data-toggle="modal" class="config">
                                                                    <button id="sample_editable_1_new" class="btn green">
                                                                        Add New <i class="fa fa-plus"></i>
                                                                    </button></a>
                                                            </div>
                                                            <div class=" pull-right">
                                                                <lable>Search <input type="text" class="form-control input-small input-inline"></lable>
                                                            </div>
                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Building
                                                                    </th>
                                                                    <th>
                                                                        Address
                                                                    </th>
                                                                    <th>
                                                                        Option&nbsp;&nbsp;<i class="fa fa-map-marker"></i>
                                                                    </th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($buildings as $building) {
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $building['name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $building['address']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#portlet-config3" data-toggle="modal" class="config"><i class="fa fa-map-marker"></i></a>
                                                                        </td>

                                                                    </tr>
                                                                <?php } ?>
    <!--							<tr>
                                                                    <td>
                                                                             lisa
                                                                    </td>
                                                                    <td>
                                                                             Lisa Wong
                                                                    </td>
                                                                    <td>
                                                                             <a href="#portlet-config3" data-toggle="modal" class="config"><i class="fa fa-map-marker"></i></a>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <td>
                                                                             nick12
                                                                    </td>
                                                                    <td>
                                                                             Nick Roberts
                                                                    </td>
                                                                    <td>
                                                                            <a href="#portlet-config3" data-toggle="modal" class="config"><i class="fa fa-map-marker"></i></a>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <td>
                                                                             goldweb
                                                                    </td>
                                                                    <td>
                                                                             Sergio Jackson
                                                                    </td>
                                                                    <td>
                                                                            <a href="#portlet-config3" data-toggle="modal" class="config"><i class="fa fa-map-marker"></i></a>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <td>
                                                                             webriver
                                                                    </td>
                                                                    <td>
                                                                             Antonio Sanches
                                                                    </td>
                                                                    <td>
                                                                            <a href="#portlet-config3" data-toggle="modal" class="config"><i class="fa fa-map-marker"></i></a>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <td>
                                                                             gist124
                                                                    </td>
                                                                    <td>
                                                                             Nick Roberts
                                                                    </td>
                                    <td>
                                                                            <a href="#portlet-config3" data-toggle="modal" class="config"><i class="fa fa-map-marker"></i></a>
                                                                    </td>
                                                                    
                                                            </tr>-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="tab_1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box blue">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            Floor
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-toolbar">
                                                            <div class="btn-group">
                                                                <a href="#portlet-config1" data-toggle="modal" class="config">
                                                                    <button id="sample_editable_1_new" class="btn green">
                                                                        Add New <i class="fa fa-plus"></i>
                                                                    </button></a>
                                                            </div>
                                                            <div class=" pull-right">
                                                                <lable>Search <input type="text" class="form-control input-small input-inline"></lable>
                                                            </div>
                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Building
                                                                    </th>
                                                                    <th>
                                                                        Address
                                                                    </th>
                                                                    <th>
                                                                        floor
                                                                    </th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($buildings_floors as $buildings_floors) {
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $buildings_floors['building']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $buildings_floors['address']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $buildings_floors['floor']; ?>
                                                                        </td>

                                                                    </tr>
                                                                <?php } ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="tab_2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box blue">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            Office
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-toolbar">
                                                            <div class="btn-group">
                                                                <a href="#portlet-config2" data-toggle="modal" class="config">
                                                                    <button id="sample_editable_1_new" class="btn green">
                                                                        Add New <i class="fa fa-plus"></i>
                                                                    </button></a>
                                                            </div>
                                                            <div class=" pull-right">
                                                                <lable>Search <input type="text" class="form-control input-small input-inline"></lable>
                                                            </div>
                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Building
                                                                    </th>
                                                                    <th>
                                                                        Address
                                                                    </th>
                                                                    <th>
                                                                        Floor
                                                                    </th>
                                                                    <th>
                                                                        Office
                                                                    </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($office_floors_buildings as $office_details) {
                                                                    ?>

                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $office_details['building']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $office_details['address']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $office_details['floor']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $office_details['office']; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN GEOLOCATION PORTLET-->
                            <div class="portlet">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-reorder"></i>Geolocation
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="label label-danger visible-ie8">
                                        Not supported in Internet Explorer 8
                                    </div>
                                    <div id="gmap_geo" class="gmaps">
                                    </div>
                                </div>
                            </div>
                            <!-- END GEOLOCATION PORTLET-->
                        </div>

                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('dashboard/footer'); ?>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/plugins/respond.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        
        <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
        <script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/js/core/app.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom/index.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom/tasks.js" type="text/javascript"></script>

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/js/core/app.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/custom/maps-google.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
                                            jQuery(document).ready(function() {
                                                App.init();
                                                MapsGoogle.init();
                                                Index.init();
                                                Index.initJQVMAP(); // init index page's custom scripts
                                                Index.initCalendar(); // init index page's custom scripts
                                                Index.initCharts(); // init index page's custom scripts
                                                Index.initChat();
                                                Index.initMiniCharts();
                                                Index.initDashboardDaterange();
                                                Index.initIntro();
                                                Tasks.initDashboardWidget();
                                                //   $('#building_add_submit').click(function(){
                                                //    validateForm();   
                                                //});
                                            });
                                            function validateForm() {
                                                if ($('#building_name').val() === '' || $('#building_address').val() === '' || $('#building_latitude').val() === '' || $('#building_langitude').val() === '' || $.isNumeric($('#building_latitude').val()) === false || $.isNumeric($('#building_langitude').val()) === false)
                                                {
                                                    $('#error').show()
                                                    return false;
                                                }
                                                else
                                                {
                                                    $('#error').hide()
                                                    return true;
                                                }
                                            }
                                            function validatefloorForm() {
                                                if ($('#floor').val() === '')
                                                {
                                                    $('#floor_error').show()
                                                    return false;
                                                }
                                                else
                                                {
                                                    $('#floor_error').hide()
                                                    return true;
                                                }
                                            }
                                            function validateofficeForm()
                                            {
                                                if ($('#office').val() === '')
                                                {
                                                    $('#office_error').show()
                                                    return false;
                                                }
                                                else
                                                {
                                                    $('#office_error').hide()
                                                    return true;
                                                }
                                            }


                                            //function validatebuildingForm()
                                            //{
                                            ////    alert(document.forms["building_add"]["name"].value);
                                            ////    return false;
                                            //    if(document.forms["building_add"]["name"].value === '' )
                                            //    {
                                            //        document.getElementById("error").('All fields are mandatory');
                                            //        return false;
                                            //    }
                                            //    else
                                            //    return true;    
                                            //}
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>