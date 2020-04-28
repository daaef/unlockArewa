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
		<div id="content" class="content content-full-width">
			<div class="p-20">
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			    <div class="col-md-2">
			        <form>
			            <div class="input-group m-b-15">
                            <input type="text" class="form-control input-sm input-white" placeholder="Search Mail" />
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-inverse" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
			        </form>
			        <div class="hidden-sm hidden-xs">                        
                        <h5 class="m-t-20">Folders</h5>
                        <ul class="nav nav-pills nav-stacked nav-inbox">
                            <li class="active"><a href="#"><i class="fa fa-folder fa-fw m-r-5"></i> Documents</a></li>
                            <li><a href="#"><i class="fa fa-folder fa-fw m-r-5"></i> Musics</a></li>
                            <li><a href="#"><i class="fa fa-folder fa-fw m-r-5"></i> Pictures</a></li>
                            <li><a href="#"><i class="fa fa-folder fa-fw m-r-5"></i> Videos</a></li>
							<li><a href="javascript:;" onClick="createNewFolder()"><i class="fa fa-plus m-r-5"></i> New Folder</a></li>
                        </ul>
                    </div>
                </div>
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-10">
                    <div class="email-btn-row hidden-xs">
                        <a href="#" class="btn btn-sm btn-inverse"><i class="fa fa-plus m-r-5"></i> New File</a>
						<!--
                        <a href="#" class="btn btn-sm btn-default disabled">Reply</a>
                        <a href="#" class="btn btn-sm btn-default disabled">Delete</a>
						-->
                        
                    </div>
			        <div class="email-content">
                        <table id="data-table" class="table table-email">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Actions And description</th>
										<th>File Type</th>
                                        <th>Last Update</th>
                                    </tr>
                                </thead>
                                <tbody>
								
                                    <tr>
                                    <td class="email-select"><a href="#" data-click="email-select-single"><input type="checkbox"/></i></a></td>
                                    <td class="email-sender">
                                        Derrick Tew
                                    </td>
                                    <td class="email-subject">
                                        <a href="#" class="email-btn" data-click="email-archive"><i class="fa fa-folder-open"></i></a>
                                        <a href="#" class="email-btn" data-click="email-remove"><i class="fa fa-trash-o"></i></a>
                                        this is my diary
                                    </td> 
									<td class="email-date">pdf</td>                                   
									<td class="email-date">10/4/2014</td>
                                </tr>
                                  
                                  
                                   
                                </tbody>
                            </table>
                        <div class="email-footer clearfix">
                            737 messages
                            <ul class="pagination pagination-sm m-t-0 m-b-0 pull-right">
                                <li class="disabled"><a href="javascript:;"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="disabled"><a href="javascript:;"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-angle-right"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
			        </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
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
	
			frmstring = '<form action="/new/file" method="POST"><div class="col-md-12"><input type="file" class="form-control" onchange="myFunction()" placeholder="File Name" name="img"/><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/><div id="ni"><input type="text" class="form-control"/><br/></div></div><br/><br/><br/><button class="btn btn-submit">Upload</button></form/>';
			
			bootbox.dialog({
				title: 'Upload new File',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
	
	function myFunction(){
	  $('#ni').css('display','block');
	}
	
	
	
	//for data table
	
		$(document).ready(function() {
			App.init();
			TableManageKeyTable.init();
		});
	</script>
	<style type="text/css">
   	  #ni{display:none;}
   </style>
	
</body>
</html>
