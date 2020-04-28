<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>BMB | Register Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="/assets2/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="/assets2/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets2/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets2/css/animate.min.css" rel="stylesheet" />
	<link href="/assets2/css/style.min.css" rel="stylesheet" />
	<link href="/assets2/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets2/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets2/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="/assets2/img/login-bg/bg-8.jpg" alt="" />
                </div>
                <div class="news-caption">
                    
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h1 class="register-header">
                    Sign Up
                   
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form action="/register/new" method="POST" class="margin-bottom-0">
                        <label class="control-label">Name <span class="text-danger">*</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-6 m-b-15">
                                <input type="text" class="form-control" placeholder="First name" name="first_name" required />
                            </div>
                            <div class="col-md-6 m-b-15">
                                <input type="text" class="form-control" placeholder="Last name" name="last_name" required />
                            </div>
                        </div>
                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email address" name="email" required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            </div>
                        </div>
                       
						<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <label class="control-label">Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="Password" required />
                            </div>
                        </div>
						
                        <div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" required /> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Policy</a>, including our <a href="#">Cookie Use</a>.
								
                            </label>
							<div class="checkbox m-b-30">
                            <label>
							
							<input type="checkbox" onClick="getLocation()" /> My current locationis is my business location <a href="/map/me">Choose different location</a>
							</label>
							<p id="demo">gvv</p>
                        </div>
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Already a member? Click <a href="/">here</a> to login.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Hallowgate Telecommunication <?php echo date('Y') ?>
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
        
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
	<script src="/assets2/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
	function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}
function showPosition(position) {
  var lat = position.coords.latitude;
  var lng = position.coords.longitude;
  map.setCenter(new google.maps.LatLng(lat, lng));
}

		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
s