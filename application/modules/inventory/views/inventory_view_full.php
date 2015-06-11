<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".box1").hide();
  $(".btn11").click(function(){
    $(".box1").toggle();
  });
});
</script>
<script>
$(document).ready(function(){
  $(".txt1").hide();
  $(".btn2").click(function(){
    $(".txt1").show();
	 $(".txt2").hide();
  });
});
</script>
<script>
$(document).ready(function(){
  $(".txt2").hide();
  
  $(".btn3").click(function(){
    $(".txt2").show();
	 $(".txt1").hide();
  });
  $(".txt2").hide();
});
</script>
<style>
.btn1{
}
.btn11{
margin-bottom:20px;
}
.box1{
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
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Goods/work</h4>
						</div>
						<div class="modal-body">
							<div class="row">
				<div class="col-lg-12">
                
					<form action="#" class="form-horizontal">
											<div class="form-body table1">
										
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">
                                                            
                                                            Type</label>
															<div class="col-md-9">
																<select class="form-control">
                                                                <option value="">Select</option>
																	<option value="" class="btn3">Goods</option>
                                                                    <option value="" class="btn2">Works</option>
																	
																</select>
																
															</div>
                                                            
														</div>
													</div>
												</div>
                                                
												<!--/row-->
                                                <div class="txt1">
                                                <div class="row">
												
                                                    <div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-4">Building</label>
															<div class="col-md-8">
																<select class="form-control">
																	
                                                                    <option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
                                                    <div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">Floor</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-4">
														<div class="form-group ">
															<label class="control-label col-md-3">Office</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
                                                <div class="row ">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">
                                                            Job Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group ">
															<label class="control-label col-md-3">Engineer Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">From</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">To</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												</div>
											<div class="txt2">
                                            <div class="row">
												
                                                    <div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-4">Building</label>
															<div class="col-md-8">
																<select class="form-control">
																	
                                                                    <option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
                                                    <div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">Floor</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-4">
														<div class="form-group ">
															<label class="control-label col-md-3">Office</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
                                                <div class="row ">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Brand</label>
															<div class="col-md-9">
																<input type="text" class="form-control" >
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group ">
															<label class="control-label col-md-3">Model</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Serial</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3"><p style="margin-left:-10px;">Description</p></label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
                                                
												</div>
												
												<!--/row-->
												
												<!--/row-->
											</div>
											
										</form>
				</div>
			</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Submit</button>
							
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
							<h4 class="modal-title">Upload Image</h4>
                            </div>
                            <div class="modal-body">
                            <div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">
                                                            
                                                            Img Location:</label>
															<div class="col-md-9">
																<input type="file">
															</div>
                                                            
														</div>
													</div>
                                                    
                                                    
													<!--/span-->
													
													<!--/span-->
												</div>
                                                
						</div>
						<div class="modal-body">
							<div class="row">
				<div class="col-lg-12">
                
					
				</div>
			</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Upload</button>
							
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
            <div class="modal fade" id="portlet-config31" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Upload Image</h4>
                            </div>
                            <div class="modal-body">
                            <div class="row">
				<div class="col-lg-12 ">
                		
					<form action="#" class="form-horizontal">
											<div class="form-body ">
										
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">
                                                            
                                                            Type</label>
															<div class="col-md-9">
																<select class="form-control">
                                                                <option value="">Select</option>
																	<option value="" class="btn31">Goods</option>
                                                                    <option value="" class="btn21">Works</option>
																	
																</select>
																
															</div>
                                                            
														</div>
													</div>
                                                    
                                                    
													<!--/span-->
													
													<!--/span-->
												</div>
                                                
												<!--/row-->
                                                <div class="txt11">
                                                <div class="row">
												
                                                    <div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-4">Building</label>
															<div class="col-md-8">
																<select class="form-control">
																	
                                                                    <option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
                                                    <div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">Floor</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-4">
														<div class="form-group ">
															<label class="control-label col-md-3">Office</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
                                                <div class="row ">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">
                                                            Job Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group ">
															<label class="control-label col-md-3">Engineer Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">From</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">To</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												</div>
											<div class="txt21">
                                            <div class="row">
												
                                                    <div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-4">Building</label>
															<div class="col-md-8">
																<select class="form-control">
																	
                                                                    <option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
                                                    <div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">Floor</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-4">
														<div class="form-group ">
															<label class="control-label col-md-3">Office</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
                                                <div class="row ">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Brand</label>
															<div class="col-md-9">
																<input type="text" class="form-control" >
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group ">
															<label class="control-label col-md-3">Model</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Serial</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3"><p style="margin-left:-10px;">Description</p></label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
                                                
												</div>
												
												<!--/row-->
												
												<!--/row-->
											</div>
											
										</form>
				</div>
			</div>
                                                
						</div>
						<div class="modal-body">
							<div class="row">
				<div class="col-lg-12">
                
					
				</div>
			</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Submit</button>
							
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
							<h4 class="modal-title">Log Details</h4>
                            </div>
                            <div class="modal-body">
                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									Img
								</th>
								<th>
									Uploaded Date
								</th>
								<th>
									Download Link
								</th>
							
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									<a href="#"><i class="fa fa-picture-o"></i></a>
								</td>
								<td>
									 Alex Nilson
								</td>
								<td>
									<a href="#">1234</a>
								</td>
								
							</tr>
							<tr>
								<td>
									<a href="#"><i class="fa fa-picture-o"></i></a>
								</td>
								<td>
									 Lisa Wong
								</td>
								<td>
									 <a href="#">1234</a>
								</td>
								
							</tr>
							<tr>
								<td>
									 <a href="#"><i class="fa fa-picture-o"></i></a>
								</td>
								<td>
									 Nick Roberts
								</td>
								<td>
									<a href="#">1234</a>
								</td>
								
							</tr>
							<tr>
								<td>
									<a href="#"><i class="fa fa-picture-o"></i></a>
								</td>
								<td>
									 Sergio Jackson
								</td>
								<td>
									 <a href="#">1234</a>
								</td>
							
							</tr>
							<tr>
								<td>
									 <a href="#"><i class="fa fa-picture-o"></i></a>
								</td>
								<td>
									 Antonio Sanches
								</td>
								<td>
									 <a href="#">1234</a>
								</td>
								
							</tr>
							<tr>
								<td>
									 <a href="#"><i class="fa fa-picture-o"></i></a>
								</td>
								<td>
									 Nick Roberts
								</td>
								<td>
									<a href="#">1234</a>
								</td>
								
							</tr>
							</tbody>
							</table>
                                               
						</div>
						<div class="modal-body">
							<div class="row">
				<div class="col-lg-12">
                
					
				</div>
			</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Submit</button>
							
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="page-title">
					Goods / Work Inventory
					</h3>
				</div>
			</div>
			
            
            <br>
            <div class="row">
            	<div class="col-lg-12">
                	<div class="btn-group pull-right">
									<a href="#portlet-config31" data-toggle="modal" class="config"><button id="sample_editable_1_new" class="btn green " style="margin-bottom:20px;">
										Advanced Search
									</button></a>
                                   
								</div>
                </div>
            </div>
            
			<div class="row">
				<div class="col-md-12">
					
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
							Detail View
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
									Name
								</th>
								<th>
									 Type
								</th>
								<th>
									 Date of Upload
								</th>
                                <th COLSPAN=2> Actions
                                </th>
							
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
								<td>
									 1234
								</td>
								<td>
									<a href="#portlet-config1" data-toggle="modal" class="config" title="img Upload"><i class="fa fa-upload"></i></a>
								</td>
								<td>
									<a href="#portlet-config2" data-toggle="modal" class="config" title="logs"><i class="fa fa-archive"></i></a>
								</td>
								
							</tr>
							<tr>
								<td>
									 lisa
								</td>
								<td>
									 Lisa Wong
								</td>
								<td>
									 434
								</td>
								<td>
									<a href="#portlet-config1" data-toggle="modal" class="config" title="img Upload"><i class="fa fa-upload"></i></a>
								</td>
								<td>
									<a href="#portlet-config2" data-toggle="modal" class="config" title="logs"><i class="fa fa-archive"></i></a>
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
									 232
								</td>
								<td>
									<a href="#portlet-config1" data-toggle="modal" class="config" title="img Upload"><i class="fa fa-upload"></i></a>
								</td>
								<td>
									<a href="#portlet-config2" data-toggle="modal" class="config" title="logs"><i class="fa fa-archive"></i></a>
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
									 132
								</td>
								<td>
									<a href="#portlet-config1" data-toggle="modal" class="config" title="img Upload"><i class="fa fa-upload"></i></a>
								</td>
								<td>
									<a href="#portlet-config2" data-toggle="modal" class="config" title="logs"><i class="fa fa-archive"></i></a>
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
									 462
								</td>
							<td>
									<a href="#portlet-config1" data-toggle="modal" class="config" title="img Upload"><i class="fa fa-upload"></i></a>
								</td>
								<td>
									<a href="#portlet-config2" data-toggle="modal" class="config" title="logs"><i class="fa fa-archive"></i></a>
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
									 62
								</td>
								<td>
									<a href="#portlet-config1" data-toggle="modal" class="config" title="img Upload"><i class="fa fa-upload"></i></a>
								</td>
								<td>
									<a href="#portlet-config2" data-toggle="modal" class="config" title="logs"><i class="fa fa-archive"></i></a>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
            
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js" type="text/javascript"></script>
<script src="assets/scripts/custom/index.js" type="text/javascript"></script>
<script src="assets/scripts/custom/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
    $(".box1").hide();
  $(".btn11").click(function(){
    $(".box1").toggle();
  });
   $(".txt1").hide();
  $(".btn2").click(function(){
    $(".txt1").show();
	 $(".txt2").hide();
  });
  $(".txt2").hide();
  
  $(".btn3").click(function(){
    $(".txt2").show();
	 $(".txt1").hide();
  });
  $(".txt2").hide();
   $(".txt11").hide();
  $(".btn21").click(function(){
    $(".txt11").show();
	 $(".txt21").hide();
  });
   App.init(); // initlayout and core plugins
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initDashboardDaterange();
   Index.initIntro();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>