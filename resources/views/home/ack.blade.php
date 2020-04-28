<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
@include('home.header')
<body class="bg-silver">
    <!-- BEGIN #page-container -->
    <div id="page-container" class="fade">
        <!-- BEGIN #top-nav -->
        @include('home.top')
        <!-- END #top-nav -->
    
        <!-- BEGIN #header -->
        
        <!-- END #header -->
        
        <!-- BEGIN #checkout-cart -->
        <div class="section-container" id="checkout-cart">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN checkout -->
                <div class="checkout">
                    <form action="checkout_info.html" method="POST" name="form_checkout">
                        <!-- BEGIN checkout-header -->
                        <div class="checkout-header">
                            <!-- BEGIN row -->
                            <div class="row">
                                <!-- BEGIN col-3 -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="step">
                                        <a href="checkout_cart.html">
                                            <div class="number">1</div>
                                            <div class="info">
                                                <div class="title">Delivery Options</div>
                                                <div class="desc">Lorem ipsum dolor sit amet.</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- END col-3 -->
                                <!-- BEGIN col-3 -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="step">
                                        <a href="checkout_info.html">
                                            <div class="number">2</div>
                                            <div class="info">
                                                <div class="title">Shipping Address</div>
                                                <div class="desc">Vivamus eleifend euismod.</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- END col-3 -->
                                <!-- BEGIN col-3 -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="step">
                                        <a href="checkout_payment.html">
                                            <div class="number">3</div>
                                            <div class="info">
                                                <div class="title">Payment</div>
                                                <div class="desc">Aenean ut pretium ipsum. </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- END col-3 -->
                                <!-- BEGIN col-3 -->
                                <div class="col-md-3 col-sm-3">
                                    <div class="step active">
                                        <a href="#">
                                            <div class="number">4</div>
                                            <div class="info">
                                                <div class="title">Complete Payment</div>
                                                <div class="desc">Curabitur interdum libero.</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- END col-3 -->
                            </div>
                            <!-- END row -->
                        </div>
                        <!-- END checkout-header -->
                        <!-- BEGIN checkout-body -->
                        <div class="checkout-body">
                            <!-- BEGIN checkout-message -->
                            <div class="checkout-message">
                                <h1>Thank you! <small>Your Payment has been successfully processed with the following details.</small></h1>
                                <div class="table-responsive2">
                                    <table class="table table-payment-summary">
                                        <tbody>
                                            <tr>
                                                <td class="field">Transaction Status</td>
                                                <td class="value">Success</td>
                                            </tr>
                                            <tr>
                                                <td class="field">Transaction Reference No.</td>
                                                <td class="value">REF000001</td>
                                            </tr>
                                            <tr>
                                                <td class="field">Bank Authorised Code</td>
                                                <td class="value">AUTH000001</td>
                                            </tr>
                                            <tr>
                                                <td class="field">Transaction Date and Time</td>
                                                <td class="value">05 APR 2016 07:30PM</td>
                                            </tr>
                                            <tr>
                                                <td class="field">Orders</td>
                                                <td class="value product-summary">
                                                    <div class="product-summary-img">
                                                        <img src="/assets/img/iphone-6s-plus.png" alt="" />
                                                    </div>
                                                    <div class="product-summary-info">
                                                        <div class="title">iPhone 6s Plus 16GB (Silver)</div>
                                                        <div class="desc">Delivers Tue 26/04/2016 - Free</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="field">Payment Amount (RM)</td>
                                                <td class="value">$999.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="text-muted text-center m-b-0">Should you require any assistance, you can get in touch with Support Team at (123) 456-7890</p>
                            </div>
                            <!-- END checkout-message -->
                        </div>
                        <!-- END checkout-body -->
                        <!-- BEGIN checkout-footer -->
                        <div class="checkout-footer text-center">
                            <button type="submit" class="btn btn-white btn-lg p-l-30 p-r-30 m-l-10">Manage Orders</button>
                        </div>
                        <!-- END checkout-footer -->
                    </form>
                </div>
                <!-- END checkout -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #checkout-cart -->
    
        <!-- BEGIN #policy -->
        
        <!-- END #policy -->
    
        <!-- BEGIN #footer -->
        @include('home.footer')
        <!-- END #footer -->
    
        <!-- BEGIN #footer-copyright -->
        
        <!-- END #footer-copyright -->
    </div>
    <!-- END #page-container -->
    
    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            </ul>
        </div>
    </div>
    <!-- end theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>
