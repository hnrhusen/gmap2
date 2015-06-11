<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>Linux | Building - Edit</title>
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
                                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                            <h3 class="page-title">
                             <?php echo $this->lang->line('table_edit').' ';?> Building
                            </h3>


                        </div>
                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="error" style="padding-left: 389px;color: red;display:none;">All Fields are Required*</div>
                                            <form id="building_edit" name="building_edit" method="post"  onsubmit="return validateForm()" action="<?php echo base_url(); ?>location/edit_building" class="form-horizontal">
                                                <div class="form-body">

                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("name"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="hidden" name="building_id" value="<?php echo $building_info['id'];?>">
                                                                    <input type="text" id="building_name" name="name" value="<?php echo $building_info['name'];?>" class="form-control">

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
                                                                    <textarea id="building_address" name="address" value="<?php echo $building_info['address'];?>" class="form-control" rows="3"><?php echo $building_info['address'];?></textarea>

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
                                                                    <input type="text" id="building_latitude" name="latitude" value="<?php echo $building_info['latitude'];?>" class="form-control">

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
                                                                    <input type="text" id="building_langitude" name="langitude" value="<?php echo $building_info['langitude'];?>" class="form-control">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                </div>
                                                <input style="float: right;" id="building_add_submit" type="submit" name="submit" value="<?php echo $this->lang->line('save');?>" class="btn blue">
                                    </form>


                                        </div>
                                    </div>
                                </div>
                              
                            <!-- /.modal-content -->
                        <!-- /.modal-dialog -->
                   
                    
                    
                    
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    
                    
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
        <!--search scripts-->
        <script>
                                            jQuery(document).ready(function() {
                                                App.init();
                                                TableEditable.init();
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

        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>