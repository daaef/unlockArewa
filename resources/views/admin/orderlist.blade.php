<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
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
		
		<div class="sidebar-bg">@include('partials.sidebar')</div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Tables</a></li>
				<li><a href="javascript:;">Managed Tables</a></li>
				<li class="active">KeyTable</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Manage Your Store Items</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			    
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">DataTable - KeyTable</h4>
                        </div>
                        
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
											   		<th>S/No:</th>
												  <th>Order by</th>
												  <th>Item List</th>
												  <th>ref</th>
												   <th>Payment Bill</th>
												  <th>Delivery Address</th>
												 <th>Delivery Address 2</th>
												
												  <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</th>
												  
												  
												  <th>Notification</th>
												  <th>Deilvery level</th>
													
												   <th>Time Created</th>
                                    </tr>
                                </thead>
                                <tbody>
								 <?php $count=1; ?>
					  @foreach($saguy as $s)
					  
								<tr>
								  <td>{{zeroIt($count)}}</td>
								  <td>{{$s->item_id}}</td>
								  <td><?php 
								  $l=Cart::where('ref', $s->ref)->get();
								  foreach($l as $li){
								  echo $li->item_id."_";
								  echo $li->title;
								  echo "="."$li->qty, <br/>";
								  }
								  ?></td>
								  <td>{{$s->ref}}</td>
									
								  <td>{{number_format(intVal($s->price))}}</td>
								  
								   <td>{{$s->delivery_address}}</td>
								   <!--
								   @if($s->address2 != "")
								    <td>{{$s->address2}}</td>
									@endif
									-->
								  <td>{{$s->special}}
								 
								   <td> 
								   <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a title="Verified this payment"  href="/order/process/{{$s->id}}"><i class="fa fa-credit-card"></i> </a>
                        </div>
						
						@if($s->payment=="verified")
						<div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a title="Send for stiching" href="/order/process/stich/{{$s->id}}"><i class="fa fa-binoculars"></i> </a>
                        </div>
								  <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a title="Package this order" href="/order/process/packaging/{{$s->id}}/{{$s->order_by}}"><i class="fa fa-suitcase"></i></a>
                        </div>
								 
								 <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a title="delivering" href="/order/process/delivering/{{$s->id}}"><i class="fa fa-automobile"></i> </a>
                        </div>
						
						<div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a title="delivered" href="/order/process/delivered/{{$s->id}}"><i class="fa fa-check"></i> </a>
                        </div>
						@endif		 
								  </td>
								  
								    <td>
								<div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a title="{{$s->phonenumber}}" href="#"><i class="fa fa-phone"></i></a>
                        </div>&nbsp;
								 <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a title="email customer" href="/customer/email/{{$s->id}}"><i class="fa fa-envelope-o"></i> </a>
                        </div> </a>&nbsp;
								  
								 <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a title="Address is not clear notification" href="/address/notclear"><i class="fa fa-home"></i> </a>
                        </div>&nbsp;
								 
								  </td>
								 
								  <td>@if($s->status=="delivered")
								   <a title="This order has been delivered" ><img width="25" align="absmiddle" src="{{asset('img/tick.jpg')}}"/>
								  @else
								  {{$s->status}}
								  @endif
								  </td>
								 
								  <td title="{{ date('D jS, M Y, h:i:s A', strtotime($s->created_at)) }}">{{ date('d/m/y h:i:s: A', strtotime($s->created_at)) }}</td>
								  
								</tr>
						@endforeach		
                    	<?php $count++;?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
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
	<script src="/assets2/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="/assets2/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="/assets2/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="/assets2/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets2/js/table-manage-keytable.demo.min.js"></script>
	<script src="/assets2/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageKeyTable.init();
		});
	</script>
</body>
</html>
