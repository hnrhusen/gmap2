<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Linux | Buildings List</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2-metronic.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
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
                    <!-- BEGIN PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="page-title">Buildings </h3>

                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                    	Buildings list
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="btn-group">
                                            
                                            	<form method="post" action="<?php echo base_url() ?>buildings/importcsv" enctype="multipart/form-data">
													<input type="file" name="userfile" ><br><br>
													<input type="submit" name="submit" value="Upload CSV file" class="btn btn-primary">
												</form>
												<?php 
												if (isset($error)): ?>
												    <div class="alert alert-error"><?php echo $error; ?></div>
												<?php endif; ?>
												<?php
												if (isset($csv)){
													//print_r(array_values($csv));
													//echo count($csv);
													for ($i=0; $i < count($csv); $i++) { 
														foreach ($csv[$i] as $key => $value) {
															echo $key." => ".$value."<br>";
														}
														echo "<br><br>";
													}

												}
												?>                                               
                                            
                                        </div>
                                    </div>
                                    <div id="users_list">
                                    	Lista de CSV                                       
                                    </div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT -->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!--user add modal -->























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
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <!--search scripts-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/jquery.dataTables.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/app.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>
        <!--search scripts-->
                <!--<script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>-->
        <script>
            jQuery(document).ready(function() {
                App.init();
                //TableEditable.init();
                //search and pagination language conversion start
                $('#sample_editable_1').dataTable({
                    "aLengthMenu": [
                        [5, 15, 20, -1],
                        [5, 15, 20, "<?php echo $this->lang->line('all'); ?>"] // change per page values here
                    ],
                    // set the initial value
                    "iDisplayLength": 5,
                    "sPaginationType": "bootstrap",
                    "oLanguage": {
                        "sUrl": "<?php echo base_url(); ?>assets/datatable_lan/<?php echo $language; ?>.txt"
                    },
                    "aoColumnDefs": [{
                            'bSortable': false,
                            'aTargets': [0]
                        }
                    ]
                });
                //search and pagination language conversion end
                $("#add_user").click(function() {
                    $('#newuser_modal').modal('show');
                });
                //user edit function
                $(".user_edit").click(function() {
                    var user_id = $(this).attr('data-id');
                    $.ajax({
                        url: "<?php echo base_url(); ?>users/get_user_info",
                        type: "POST",
                        data: {"user_id": user_id},
                        success: function(data)
                        {
                            console.log(data);
                            $('#edit_modal').html(data);
                            $('#user_edit_modal').modal('show');
                            return false;
                        },
                        error: function()
                        {
                            console.log('error');
                            return false;
                        },
                    });
                    return false;

                });
                //user delete start
                $('.user_delete').live('click', function(e) {
                    e.preventDefault();
                    var user_id = $(this).attr('data-id');
                    if (confirm("Are you sure to delete this user?") == false) {
                        return;
                    }
                    var element = this;
                    $.ajax({
                        url: "<?php echo base_url(); ?>users/delete_user",
                        type: "POST",
                        data: {"user_id": user_id},
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
                //delete user end

            });
            function validateForm() {

                if ($('#username').val() === '')
                {
                    $('#error').html('<?php echo $this->lang->line("error_username"); ?>');
                    $('#error').show();
                    return false;
                }
                else if (!ValidateEmail($("#email").val()))
                {
                    $('#error').html('<?php echo $this->lang->line("error_validemail"); ?>');
                    $('#error').show();
                    return false;
                }
                else if ($('#cargo').val() === '')
                {
                    $('#error').html('<?php echo $this->lang->line("error_cargo"); ?>');
                    $('#error').show();
                    return false;
                }
                else if ($('#password').val() === '')
                {
                    $('#error').html('<?php echo $this->lang->line("error_password"); ?>');
                    $('#error').show();
                    return false;
                }
                else
                {
                    $('#error').hide();
                    return true;
                }
            }
            function validateEditForm() {
// 
                if ($('#edit_username').val() === '')
                {
                    $('#edit_error').html('<?php echo $this->lang->line("error_username"); ?>');
                    $('#edit_error').show();
                    return false;
                }
                else if (!ValidateEmail($("#edit_email").val()))
                {
                    $('#edit_error').html('<?php echo $this->lang->line("error_validemail"); ?>');
                    $('#edit_error').show();
                    return false;
                }
                else if ($('#edit_cargo').val() === '')
                {
                    $('#edit_error').html('<?php echo $this->lang->line("error_cargo"); ?>');
                    $('#edit_error').show();
                    return false;
                }
                else if ($('#edit_password').val() === '')
                {
                    $('#edit_error').html('<?php echo $this->lang->line("error_password"); ?>');
                    $('#edit_error').show();
                    return false;
                }
                else
                {
                    $('#edit_error').hide();
                    return true;
                }
            }
            function ValidateEmail(email) {
                var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                return expr.test(email);
            }
            ;

        </script>











</body>
</html>