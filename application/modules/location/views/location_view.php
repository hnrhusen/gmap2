<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>Linux | Building</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <link href="<?php echo base_url(); ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <!--search css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.css"/>

        <!--search css-->
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
                                    <h4 class="modal-title"><?php echo $this->lang->line("add_building"); ?></h4>
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
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("name"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="building_name" name="name" value="" class="form-control">

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
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("table_address"); ?></label>
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
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("label_latitude"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="building_latitude" name="latitude" value="" class="form-control">

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
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("label_longitude"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="building_langitude" name="langitude" value="" class="form-control">

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
                                    <input id="building_add_submit" type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn blue">
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
                                    <h4 class="modal-title"><?php echo $this->lang->line("add_floor"); ?></h4>
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
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("table_building"); ?></label>
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
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("table_floor"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="floor" name="floor" value="" class="form-control">
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

                                    <input type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn blue">
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
                                    <h4 class="modal-title"><?php echo $this->lang->line("add_office"); ?></h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="office_error" style="padding-left: 239px;color: red;display:none;">All Fields are Required*</div>
                                        <form method="post"  onsubmit="return validateofficeForm()" action="<?php echo base_url(); ?>location/add_office" class="form-horizontal">
                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"><?php echo $this->lang->line("table_building"); ?></label>
                                                            <div class="col-md-9">
                                                                <select name="building_id" id="building_select" class="form-control">
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
                                                            <label class="control-label col-md-3"><?php echo $this->lang->line("table_floor"); ?></label>
                                                            <div class="col-md-9">
                                                                <select name="floor_id" id="floor_select" class="form-control">
                                                                    <?php
                                                                    foreach ($first_floors as $floor) {
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
                                                            <label class="control-label col-md-3"><?php echo $this->lang->line("table_office"); ?></label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="office" id="office" class="form-control">

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
                                    <input type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn blue">
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
                                <?php echo $this->lang->line("location"); ?>
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
                                            <?php echo $this->lang->line("table_building"); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_1" data-toggle="tab">
                                            <?php echo $this->lang->line("table_floor"); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab_2" data-toggle="tab">
                                            <?php echo $this->lang->line("table_office"); ?>
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
                                                            <?php echo $this->lang->line("table_building"); ?>
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-toolbar">
                                                            <div class="btn-group">
                                                                <a href="#portlet-config" data-toggle="modal" class="config">
                                                                    <button id="sample_editable_1_new" class="btn green">
                                                                        <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                                    </button></a>
                                                            </div>

                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_building"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_address"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("action"); ?>
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
                                                                            <a href="<?php echo base_url() . 'location/building/edit/' . $building['id']; ?>"><input type="button" name="" value="<?php echo $this->lang->line('table_edit'); ?>"></a>
                                                                            <a class="building_item_delete" data-id="<?php echo $building['id']; ?>" href="javascript:;"><input type="button" name="" value="<?php echo $this->lang->line('table_delete'); ?>"></a>
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
                                    <div class="tab-pane" id="tab_1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box blue">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <?php echo $this->lang->line("table_floor"); ?>
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-toolbar">
                                                            <div class="btn-group">
                                                                <a href="#portlet-config1" data-toggle="modal" class="config">
                                                                    <button id="sample_editable_1_new" class="btn green">
                                                                        <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                                    </button></a>
                                                            </div>

                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_building"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_address"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_floor"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("action"); ?>
                                                                    </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($buildings_floors as $buildings_floors) {
//                                                                    echo '<pre>';
//                                                                    print_r($buildings_floors);
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
                                                                        <td>
                                                                            <a class="floor_delete" data-id="<?php echo $buildings_floors['floor_id']; ?>" href="javascript:;"><input type="button" name="" value="<?php echo $this->lang->line('table_delete'); ?>"></a>
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
                                                            <?php echo $this->lang->line("table_office"); ?>
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-toolbar">
                                                            <div class="btn-group">
                                                                <a href="#portlet-config2" data-toggle="modal" class="config">
                                                                    <button id="sample_editable_1_new" class="btn green">
                                                                        <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                                    </button></a>
                                                            </div>

                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_building"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_address"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_floor"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_office"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("action"); ?>
                                                                    </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($office_floors_buildings as $office_details) {
//                                                                    echo '<pre>';
//                                                                    print_r($office_details);
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
                                                                        <td>
                                                                            <a class="office_delete" data-id="<?php echo $office_details['office_id']; ?>" href="javascript:;"><input type="button" name="" value="<?php echo $this->lang->line('table_delete'); ?>"></a>
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
                    <!--                    <div class="row">
                                            <div class="col-md-12">
                                                 BEGIN GEOLOCATION PORTLET
                                                <div class="portlet">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-reorder"></i><?php echo $this->lang->line("geolocation"); ?>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                                            <div id="gmap_basic" class="gmaps">
                                                                            </div>
                                                                    </div>
                                                </div>
                                                 END GEOLOCATION PORTLET
                                            </div>
                    
                                        </div>-->
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
        <script src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/plugins/respond.min.js"></script>
        <script src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom/maps-google.js" type="text/javascript"></script>
        <!--search scripts-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/jquery.dataTables.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/app.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom/table-editable1.js"></script>

        <!--search scripts-->
        <script>
                                            jQuery(document).ready(function() {
                                                App.init();
                                                //TableEditable.init();
                                                //SearchPagination.init();
                                                //search and pagination language conversion start
                                                $('.sample_editable_1').dataTable({
                                                    "aLengthMenu": [
                                                        [5, 15, 20, -1],
                                                        [5, 15, 20, "<?php echo $this->lang->line('all');?>"] // change per page values here
                                                    ],
                                                    // set the initial value
                                                    "iDisplayLength": 5,
                                                    "sPaginationType": "bootstrap",
                                                    "oLanguage": {
                                                         "sUrl": "<?php echo base_url();?>assets/datatable_lan/<?php echo $language;?>.txt"
                                                    },
                                                    "aoColumnDefs": [{
                                                            'bSortable': false,
                                                            'aTargets': [0]
                                                        }
                                                    ]
                                                });
                                                //search and pagination language conversion end

                                                MapsGoogle.init();
                                            });
                                            function validateForm() {
                                                if ($('#building_name').val() === '')
                                                {
                                                        $('#error').html('<?php echo $this->lang->line("error_name");?>');
                                                    $('#error').show();
                                                    return false;
                                                }
                                                else if ($('#building_address').val() === '')
                                                {
                                                        $('#error').html('<?php echo $this->lang->line("error_address");?>');
                                                    $('#error').show();
                                                    return false;
                                                }
                                                else if ($('#building_latitude').val() === '')
                                                {
                                                        $('#error').html('<?php echo $this->lang->line("error_latitude");?>');
                                                    $('#error').show();
                                                    return false;
                                                }
                                                else if ($('#building_langitude').val() === '')
                                                {
                                                        $('#error').html('<?php echo $this->lang->line("error_longitude");?>');
                                                    $('#error').show();
                                                    return false;
                                                }
                                                else if ($.isNumeric($('#building_latitude').val()) === false)
                                                {
                                                        $('#error').html('<?php echo $this->lang->line("error_validlatitude");?>');
                                                    $('#error').show();
                                                    return false;
                                                }
                                                else if ($.isNumeric($('#building_langitude').val()) === false)
                                                {
                                                        $('#error').html('<?php echo $this->lang->line("error_validlongitude");?>');
                                                    $('#error').show();
                                                    return false;
                                                }
                                                else
                                                {
                                                    $('#error').hide();
                                                    return true;
                                                }
                                            }
                                            function validatefloorForm() {
                                                if ($('#floor').val() === '')
                                                {
                                                    $('#floor_error').html('<?php echo $this->lang->line("error_floor");?>');
                                                    $('#floor_error').show();
                                                    return false;
                                                }
                                                else
                                                {
                                                    $('#floor_error').hide();
                                                    return true;
                                                }
                                            }
                                            function validateofficeForm()
                                            {
                                                if ($('#office').val() === '')
                                                {
                                                    $('#office_error').html('<?php echo $this->lang->line("error_office");?>');
                                                    $('#office_error').show();
                                                    return false;
                                                }
                                                else
                                                {
                                                    $('#office_error').hide();
                                                    return true;
                                                }
                                            }
                                            //update floors on building choose
                                            $("#building_select").change(function() {
                                                $.ajax({
                                                    url: '<?php echo base_url(); ?>location/get_content',
                                                    type: 'POST',
                                                    data: {
                                                        'main_cat': 'buildings',
                                                        'data': $(this).val()
                                                    },
                                                    //dataType:'json',
                                                    success: function(data) {
                                                        $("#floor_select").html(data);
                                                    },
                                                    error: function(request, error)
                                                    {
                                                        alert("Request: " + JSON.stringify(request));
                                                    }
                                                });

                                            });
                                            //update floors on building choose end
                                            //delte layer start
                                            $('.building_item_delete').click(function(e) {
                                                e.preventDefault();
                                                var item_id = $(this).attr('data-id');
                                                if (confirm("Are you sure to delete this building?") == false) {
                                                    return;
                                                }
                                                var element = this;
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>location/delete_building_item",
                                                    type: "POST",
                                                    data: {"building_item_id": item_id},
                                                    success: function(data)
                                                    {
                                                        $(element).parents('tr')[0].remove();
                                                        
                                                        return false;
                                                    },
                                                    error: function()
                                                    {
                                                        console.log('error');
                                                        return false;
                                                    },
                                                });

                                            });
                                            //delete layer end
                                            //delte floor start
                                            $('.floor_delete').click(function(e) {
                                                e.preventDefault();
                                                var floor_id = $(this).attr('data-id');
                                                if (confirm("Are you sure to delete this floor?") == false) {
                                                    return;
                                                }
                                                var element = this;
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>location/delete_floor",
                                                    type: "POST",
                                                    data: {"floor_id": floor_id},
                                                    success: function(data)
                                                    {
                                                        $(element).parents('tr')[0].remove();
                                                        
                                                        return false;
                                                    },
                                                    error: function()
                                                    {
                                                        console.log('error');
                                                        return false;
                                                    },
                                                });

                                            });
                                            //delete floor end
                                            //delte office start
                                            $('.office_delete').click(function(e) {
                                                e.preventDefault();
                                                var office_id = $(this).attr('data-id');
                                                if (confirm("Are you sure to delete this office?") == false) {
                                                    return;
                                                }
                                                var element = this;
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>location/delete_office",
                                                    type: "POST",
                                                    data: {"office_id": office_id},
                                                    success: function(data)
                                                    {
                                                        $(element).parents('tr')[0].remove();
                                                        
                                                        return false;
                                                    },
                                                    error: function()
                                                    {
                                                        console.log('error');
                                                        return false;
                                                    },
                                                });

                                            });
                                            //delete office end


        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>