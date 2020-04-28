<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
@include('partials.header2')
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		@include('partials.top2')
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		@include('partials.sidebar')
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Business Registration</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered" method="post" action="/new/item" enctype="multipart/form-data" data-parsley-validate="true" name="demo-form">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Item Name * :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="fullname" name="name" placeholder="e.g Iphone6" data-parsley-required="true" />
										<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Category * :</label>
									<div class="col-md-6 col-sm-6">
										<select class="form-control" name="category">
										<option value="ICT">ICT</option>
										</select>
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="website">Description in Brief :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="website" name="brief_des"  placeholder="e.g we provide internet service, hardware maintenance, networking and software development" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Full Description (200 max words) :</label>
									<div class="col-md-6 col-sm-6">
										<textarea class="form-control" id="message" name="full_des" rows="4"  placeholder="Range from 20 - 200"></textarea>
									</div>
								</div>
								
	
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Price(&#8358) :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="number" name="phonenumber" id="data-phone"  placeholder="in naira" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Quantity :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="number" name="qty" id="data-phone"  placeholder="Quantity of Your item" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Main Image :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="file" name="img" id="data-phone" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Support Image 1 :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="file" name="img2" id="data-phone" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Support Image 2 :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="file" name="img2" id="data-phone" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Support Image 3 :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="file" name="img3" id="data-phone" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Support Image 4 :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="file" name="img4" id="data-phone" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Support Image 5 :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="file" name="img5" id="data-phone" />
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
                            </form>
                        </div>
                    </div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets2/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets2/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets2/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets2/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets2/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets2/crossbrowserjs/respond.min.js"></script>
		<script src="/assets2/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets2/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets2/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets2/plugins/parsley/dist/parsley.js"></script>
	<script src="/assets2/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets2/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="/assets2/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="/assets2/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="/assets2/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets2/js/table-manage-keytable.demo.min.js"></script>
	<script src="/assets2/js/apps.min.js"></script>
	<script src="/assets2/js/bootbox.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
	//for folder creation
	function createNewFolder(){
	//alert("Alhamdulillah");
	
	$('#yloader').show();
				
			btdialog = bootbox.dialog({
				title: 'Create New Folder',
				size:'medium',
				message: '<div id="yloader" class="loading" style="margin:20px 0px;" align="center"> - loading <img src="//assets2/img/yahoo.gif" align="absmiddle"/></div>'
			 });
				
			btdialog.init(function(){
				$.ajax({ 
					type:'get',
					url:"/",
					success:function(data){
					  dx = JSON.parse(data);
					 frmstring ='<form action="/"><div class="col-md-6">Date:<br/> <input type="date" class="form-control"/><br/>Clinic:<br/><select class="form-control"><option>ANTE-NATAL</option><option>PAEDIATRIC</option><option>GYNAECOLOGY</option></select></div><div class="col-md-6">Patient Name: <br/><input type="text" class="form-control" value="Sagir Yusuf"/><br/>Ward:<br/> <select class="form-control"><option>A AND E C1</option><option>A AND E COUCTH 10</option><option>A AND E COUCTH 11</option></select><br/></div><br/><br/><br/><br/>Diagonosis:<textarea class="form-control">Ulcer</textarea><br/><br/><button class="btn btn-submit">Aprove Admission</button></form/>';			  
					  $('#yloader').hide(); //hide the yahoo loader..	
					  btdialog.find('.bootbox-body').html(frmstring);					  
					  $('#xt_loader').hide();					  
					}
				});	
			}); 
			
		//end of btdialog..
		/**/

	  };	
	
	
	
	//for data table
	
		$(document).ready(function() {
			App.init();
			TableManageKeyTable.init();
		});
	</script>
	
	
</body>
</html>
