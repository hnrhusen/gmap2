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
        <title>Linux | Admin Dashboard Template</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->

        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo base_url(); ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url(); ?>assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <style>
/*img[src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png"] {
    display: none;
}*/

            .btn1{
            }
            .table1{
            }
            .btn2{
            }
            .txt1{
            }
            .btn3{
            }
            .txt2{
            }
            /* Marker Info Window */
            /*h1.marker-heading{color: #585858;margin: 0px;padding: 0px;font: 18px "Trebuchet MS", Arial;border-bottom: 1px dotted #D8D8D8;}*/
            /*div.marker-info-win {max-width: 300px;margin-right: -20px;}
            div.marker-info-win p{padding: 0px;margin: 10px 0px 10px 0;}
            div.marker-inner-win{padding: 5px;}*/
            #google_map{
                margin:0;
            }
            /* Marker Info Window */
            h1.marker-heading{color: #585858;margin: 0px;padding: 0px;font: 18px "Trebuchet MS", Arial;border-bottom: 1px dotted #D8D8D8;}
            div.marker-info-win {max-width: 350px;margin-right: -20px;}
            div.marker-info-win p{padding: 0px;margin: 10px 0px 10px 0;}
            div.marker-inner-win{padding: 5px;}
        </style>
        <!--google layer css -->
        <style type="text/css">

            /* width and height of google map */
            #google_map {width: 100%; height: 660px;margin-top:0px;}

        </style> 
        <!--google layer css -->
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
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

                    <!--			<div class="row">
                                                    <div class="col-md-12">
                                                             BEGIN PAGE TITLE & BREADCRUMB
                                                            <h3 class="page-title">
                    <?php echo $this->lang->line("dashboard_menu"); ?> 
                                                            </h3>
                                                            
                                                             END PAGE TITLE & BREADCRUMB
                                                    </div>
                                            </div>-->
                    <!--            <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                            <div class="dashboard-stat" style="background-color:#666">
                                                                    <div class="visual">
                                                                            
                                                                    </div>
                                                                    <div class="details" style="text-align:center;">
                                                                            <div class="number">
                                                                                     5
                                                                            </div>
                                                                            <div class="desc">
                    <?php echo $this->lang->line("table_buildings"); ?> 
                                                                            </div>
                                                                    </div>
                                                                    
                                                            </div>
                                                    </div>
                                
                                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                            <div class="dashboard-stat red">
                                                                    <div class="visual">
                                                                            
                                                                    </div>
                                                                    <div class="details" style="text-align:center;">
                                                                            <div class="number">
                                                                                     1349
                                                                            </div>
                                                                            <div class="desc">
                    <?php echo $this->lang->line("table_floor"); ?>
                                                                            </div>
                                                                    </div>
                                                                    
                                                            </div>
                                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                            <div class="dashboard-stat blue">
                                                                    <div class="visual">
                                                                            
                                                                    </div>
                                                                    <div class="details">
                                                                            <div class="number">
                                                                                     1349
                                                                            </div>
                                                                            <div class="desc">
                    <?php echo $this->lang->line("table_office"); ?>
                                                                            </div>
                                                                    </div>
                                                                    
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                            <div class="dashboard-stat green">
                                                                    <div class="visual">
                                                                            
                                                                    </div>
                                                                    <div class="details">
                                                                            <div class="number">
                                                                                     549
                                                                            </div>
                                                                            <div class="desc">
                    <?php echo $this->lang->line("goods"); ?>
                                                                            </div>
                                                                    </div>
                                                                    
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                            <div class="dashboard-stat purple">
                                                                    <div class="visual">
                                                                            
                                                                    </div>
                                                                    <div class="details">
                                                                            <div class="number">
                                                                                     +89%
                                                                            </div>
                                                                            <div class="desc">
                    <?php echo $this->lang->line("works"); ?>
                                                                            </div>
                                                                    </div>
                                                                    
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                            <div class="dashboard-stat yellow">
                                                                    <div class="visual">
                                                                            
                                                                    </div>
                                                                    <div class="details">
                                                                            <div class="number" style=" text-align:right; margin:0px;">
                                                                                     12,5M$
                                                                            </div>
                                                                            <div class="desc" style=" text-align:right; margin-top:-5px;">
                    
                    <?php echo $this->lang->line("building_wo_office"); ?>
                                                                            </div>
                                                                    </div>
                                                                    
                                                            </div>
                                                    </div>
                                            </div>-->



                    <div class="row">
                        <div class="col-md-12" style="padding-left:0px !important;padding-right: 0px !important;">

                            <div class="portlet solid">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-reorder"></i><?php echo $this->lang->line("geolocation"); ?>
                                    </div>

                                </div>
                                <!--						<div class="portlet-body">
                                                                                        <div id="gmap_basic" class="gmaps">
                                                                                        </div>
                                                                                </div>-->
                                <div id="google_map"></div>
                            </div>

                        </div>

                    </div>



                    <!-- END PAGE CONTENT-->
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
        <!--<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>-->
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
        <!-- END PAGE LEVEL SCRIPTS -->
        <!--<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>-->
        <!--<script src="<?php echo base_url(); ?>assets/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url(); ?>assets/js/core/app.js" type="text/javascript"></script>
        <!--<script src="<?php echo base_url(); ?>assets/js/custom/maps-google.js" type="text/javascript"></script>-->
        <!--google layer script -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!--<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>-->
        <!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>-->

<script>
$(function() {
    $('#div_debt').hide(); 
    $('#layer_id').change(function(){
        if($('#layer_id').val() == '0') {
            $('#row_dim').show(); 
        } else {
            $('#row_dim').hide(); 
        } 
    });
});
</script>
<!--google layer script-->
<script>
    $(window).load(function() {
        var all_layers;

        var places = (function() {
            var places = null;
            $.ajax({
                'async': false,
                'global': false,
                'url': "<?php echo base_url(); ?>dashboard/get_layers",
                'dataType': "json",
                'success': function(data) {
                    places = data;
                }
            });
            return places;
        })(),
                map = new google.maps.Map(
                        document.getElementById('google_map'),
                        {
                            zoom: 8,
                            center: new google.maps.LatLng(10.5000, -66.9667),
                        }
                ),
                infowindow = new google.maps.InfoWindow({
                    maxWidth: 400,
                    maxHeight: 350
                }),
                // a  div where we will place the buttons
                ctrl = $('<div/>').css({background: '#FFF',
                    border: '1px solid #818181',
                    padding: '4px',
                    'margin-top': '29px',
                    'margin-right': '-97px',
                    textAlign: 'center',
                    opacity: .9,
                    'overflow-y': 'scroll',
                    width: '155px',
                    'box-shadow': '0px 0px 5px #000',
                    'max-height': '350px'
                });
        //show all-button
        ctrl.append($('<input>', {type: 'button', value: '<?php echo $this->lang->line("show_all"); ?>'})
                .click(function() {
                    $(this).parent().find('input[type="checkbox"]')
                            .prop('checked', true).trigger('change');
                }));
        ctrl.append($('<br/>'));

        //clear all-button
        ctrl.append($('<input>', {type: 'button', value: '<?php echo $this->lang->line("clear_all"); ?>'})
                .click(function() {
                    $(this).parent().find('input[type="checkbox"]')
                            .prop('checked', false).trigger('change');
                }));
        ctrl.append($('<hr/>'));

        //now loop over the categories
        $.each(places, function(c, category) {

            //a checkbox fo the category
            var cat = $('<input>', {type: 'checkbox'}).change(function() {
                $(this).data('goo').set('map', (this.checked) ? map : null);
            })
                    //create a data-property with a google.maps.MVCObject
                    //this MVC-object will do all the show/hide for the category 
                    .data('goo', new google.maps.MVCObject)
                    .prop('checked', !!category.checked)

                    //this will initialize the map-property of the MVCObject
                    .trigger('change')

                    //label for the checkbox
                    .appendTo($('<div/>').css({whiteSpace: 'nowrap', textAlign: 'left'}).appendTo(ctrl))
                    .after(category.label);

            //loop over the items(markers)
            $.each(category.items, function(m, item) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(item[1], item[2]),
                    title: item[0],
                    icon: category.icon
                });

                //bind the map-property of the marker to the map-property
                //of the MVCObject that has been stored as checkbox-data 
                var str = item[0];
                var res = str.split('/');
                if(item[3]<=0)
                    item[3] = '<font color="green"><b>Sin deuda</b></font>'
                else
                    item[3] = '<font color="red"><b>'+ item[3] + '</b></font> Bs.'
                var contentString = $('<div class="marker-info-win" style="width: 450px;overflow-x: hidden;">' +
                        '<div class="marker-inner-win"><span class="info-content">' +
                        '<h1 class="marker-heading">' + res[0] + '</h1>' +
                        '<p class="marker-address">' + 
                            '<b><?php echo $this->lang->line("label_address"); ?>: </b>' + res[1] + 
                            '<br><b><?php echo $this->lang->line("label_latitude"); ?>: </b>' + item[1] + 
                            '<br><b><?php echo $this->lang->line("label_longitude"); ?>: </b>' + item[2] + 
                            '<br><b><?php echo $this->lang->line("label_taxpayer"); ?>: </b>' + item[6]+ '-' + item[7] + 
                            '<br><b><?php echo $this->lang->line("label_debt"); ?>: </b>' + item[3] +
                            '<br><b><?php echo $this->lang->line("label_property_type"); ?>: </b>' + item[5] + 
                            '<br><b><?php echo $this->lang->line("label_good_type"); ?>: </b>' + item[8] +
                            '<br><b><?php echo $this->lang->line("label_nivel"); ?>: </b>' + item[9] +
                            '<br><b><?php echo $this->lang->line("label_npiso"); ?>: </b>' + item[10] +
                            '<br><b><?php echo $this->lang->line("label_unidad"); ?>: </b>' + item[11] +
                            '<br><img src="'+ item[4] + '">'+

                        '</p>' +
                        '</div></div>');
                marker.bindTo('map', cat.data('goo'), 'map');
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent(contentString[0]);
                    infowindow.open(map, marker);
                    infowindow.open(map, this);
                });
            });

        });

        //use the buttons-div as map-control 
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(ctrl[0]);



        //rightclickjquery

        var mapCenter = new google.maps.LatLng(47.6145, -122.3418); //Google map Coordinates
        var map;

        map_initialize(); // initialize google map

        //############### Google Map Initialize ##############
        function map_initialize()
        {
            var googleMapOptions =
                    {
                        center: mapCenter, // map center
                        zoom: 17, //zoom level, 0 = earth view to higher value
                        maxZoom: 18,
                        minZoom: 16,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL //zoom control size
                        },
                        scaleControl: true, // enable scale control
                        mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
                    };



            //Load Markers from the XML File, Check (map_process.php)
            $.get("<?php echo base_url(); ?>dashboard/add_marker_location", function(data) {
                $(data).find("marker").each(function() {
                    var name = $(this).attr('name');
                    var address = '<p>' + $(this).attr('address') + '</p>';
                    var type = $(this).attr('type');
                    var point = new google.maps.LatLng(parseFloat($(this).attr('lat')), parseFloat($(this).attr('lng')));
                    create_marker(point, name, address, false, false, false, "<?php echo base_url(); ?>assets/img/pin_blue.png");
                });
            });
            //get layers list
            $.get("<?php echo base_url(); ?>dashboard/get_all_layers", function(data) {
                console.log(data);
                all_layers = data;
            });

            //Right Click to Drop a New Marker
            google.maps.event.addListener(map, 'rightclick', function(event) {
                
               var location_address;
                //Edit form to be displayed with new marker
                var layer_lat = event.latLng.lat();
                var layer_lon = event.latLng.lng();
                $.ajax({
                        url: "http://maps.googleapis.com/maps/api/geocode/json?latlng=" +layer_lat+ "," +layer_lon+ "&sensor=true",
                        dataType: 'json',
                        async: false,
                        success: function(data) {
                        location_address  = data['results'][0]['formatted_address'];
                        }
                });
//                        
//                        var test[] = $.getJSON( "http://maps.googleapis.com/maps/api/geocode/json?latlng=" +layer_lat+ "," +layer_lon+ "&sensor=true", function( data ) {
//location_address1  = data['results'][0]['formatted_address'];
//console.log(location_address);
////$.each( data, function( key, val ) {
////items.push( "<li id='" + key + "'>" + val + "</li>" );
////});
//                        });
                console.log(location_address);
                
                //console.log('lat'+layer_lat+',lon'+layer_lon);
                var EditForm = '<p><div class="marker-edit">' +
                        '<form method="POST" name="SaveMarker" id="SaveMarker" enctype="multipart/form-data">' +
                        '<label for="pType" style="padding-bottom:10px;"><span><?php echo $this->lang->line("layer"); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <select id="layer_id" name="layer_id" class="save-layerid">' + all_layers + '</select></label>' +
                        '<input type="hidden" name="latitude" value="' + layer_lat + '"><input type="hidden" name="longitude" value="' + layer_lon + '">' +
                        '<label for="pName" style="padding-bottom:10px;"><span><?php echo $this->lang->line("name"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="name" class="save-name"  maxlength="40" /></label>' +
                        '<label for="pDesc" style="padding-bottom:10px;"><span><?php echo $this->lang->line("table_address"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea name="address" class="save-address" maxlength="150">'+ location_address +'</textarea></label>' +
                        '<label for="pLat" style="padding-bottom:10px;"><span><?php echo $this->lang->line("label_latitude"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="lat"  value="' + layer_lat + '" maxlength="40" readonly /></label>' +
                        '<label for="pLon" style="padding-bottom:10px;"><span><?php echo $this->lang->line("label_longitude"); ?>&nbsp;&nbsp;&nbsp;</span><input type="text" name="lon"  value="' + layer_lon + '" maxlength="40" readonly /></label>' +
                        '<label for="pName" style="padding-bottom:10px;"><div id="div_debt"><span>Debt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="debt" class="save-debt"  maxlength="40" /></div></label>' +
                        '<label for="pName" style="padding-bottom:10px;"><div id="div_debt"><span>Debt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="file" id="build_img" name="build_img" value=""></div></label>' +
                        '<br /><button style="margin-right:10px;" name="save-marker" class="save-marker"><?php echo $this->lang->line("save_location"); ?></button>'
                '</form>' +
                        '</div></p>';
                //<input type="file" id="layer_icon" name="icon" value="">
                //Drop a new Marker with our Edit Form
                create_marker(event.latLng, '<?php echo $this->lang->line("new_location"); ?>', EditForm, true, true, true, "<?php echo base_url(); ?>assets/img/pin_green.png");
            });

        }

        //############### Create Marker Function ##############
        function create_marker(MapPos, MapTitle, MapDesc, InfoOpenDefault, DragAble, Removable, iconPath)
        {

            //new marker
            var marker = new google.maps.Marker({
                position: MapPos,
                map: map,
                draggable: DragAble,
                animation: google.maps.Animation.DROP,
                title: "Hello World!",
                icon: iconPath
            });

            //Content structure of info Window for the Markers
            var contentString = $('<div class="marker-info-win">' +
                    '<div class="marker-inner-win"><span class="info-content">' +
                    '<h1 class="marker-heading">' + MapTitle + '</h1>' +
                    MapDesc +
                    '</span><button name="remove-marker" class="remove-marker" title="Remove Marker"><?php echo $this->lang->line("cancel"); ?></button>' +
                    '</div></div>');


            //Create an infoWindow
            var infowindow = new google.maps.InfoWindow();
            //set the content of infoWindow
            infowindow.setContent(contentString[0]);

            //Find remove button in infoWindow
            var removeBtn = contentString.find('button.remove-marker')[0];
            var saveBtn = contentString.find('button.save-marker')[0];

            //add click listner to remove marker button
            google.maps.event.addDomListener(removeBtn, "click", function(event) {
                remove_marker(marker);
            });

            google.maps.event.addListener(infowindow, 'domready', function(){
                $(".gm-style-iw").next("div").hide();
            });

            if (typeof saveBtn !== 'undefined') //continue only when save button is present
            {

                //add click listner to save marker button
                google.maps.event.addDomListener(saveBtn, "click", function(event) {

                    event.preventDefault();
                    var mReplace = contentString.find('span.info-content'); //html to be replaced after success
                    var mName = contentString.find('input.save-name')[0].value; //name input field value
                    var mAddress = contentString.find('textarea.save-address')[0].value; //description input field value
                    var mLayer = contentString.find('select.save-layerid')[0].value; //type of marker

                    if (mName === '' || mAddress === '')
                    {
                        alert("Please enter Name and Address");
                        return false;
                    }
                    else {
                        save_marker(marker, mName, mAddress, mLayer, mReplace); //call save marker function
                    }
                });
            }


            //add click listner to save marker button		 
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker); // click on marker opens info window 
            });

            if (InfoOpenDefault) //whether info window should be open by default
            {
                infowindow.open(map, marker);
            }
        }

        //############### Remove Marker Function ##############
        function remove_marker(Marker)
        {

            /* determine whether marker is draggable 
             new markers are draggable and saved markers are fixed */
            if (Marker.getDraggable())
            {
                Marker.setMap(null); //just remove new marker
            }
            else
            {
                //Remove saved marker from DB and map using jQuery Ajax
                var mLatLang = Marker.getPosition().toUrlValue(); //get marker position
                var myData = {del: 'true', latlang: mLatLang}; //post variables
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>dashboard/add_marker_location",
                    data: myData,
                    success: function(data) {
                        Marker.setMap(null);
                        alert(data);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //throw any errors
                    }
                });
            }

        }

        //############### Save Marker Function ##############
        function save_marker(Marker, mName, mAddress, mLayer, replaceWin)
        {
            //Save new marker using jQuery Ajax

            var mLatLang = Marker.getPosition().toUrlValue(); //get marker position
            var myData = {name: mName, address: mAddress, latlang: mLatLang, layer: mLayer}; //post variables
            console.log(replaceWin);
            console.log(myData);
            //return false;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>dashboard/add_marker_location",
                data: myData,
                success: function(data) {
                    //replaceWin.html(data); //replace info window with new html
                    //Marker.setDraggable(false); //set marker to fixed
                    //Marker.setIcon('<?php echo base_url(); ?>assets/img/pin_blue.png'); //replace icon
                    //console.log(data);
                    window.location.href = '<?php echo base_url(); ?>dashboard';
                    //return false;
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError); //throw any errors
                }
            });
            return false;
        }


        //rightclickjquery 





    });
    jQuery(document).ready(function() {
        App.init();
        //   MapsGoogle.init();
    });
</script>

        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>