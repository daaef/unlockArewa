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
        
        <!-- BEGIN #checkout-payment -->
        <div class="section-container" id="checkout-payment">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN checkout -->
                <div class="checkout">
                    <form action="checkout_complete.html" method="POST" name="form_payment" class="form-horizontal">
                        <!-- BEGIN checkout-header -->
                        <div class="checkout-header">
                            <!-- BEGIN row -->
                            @include('home.ordertop')
                            <!-- END row -->
                        </div>
                        <!-- END checkout-header -->
                        <!-- BEGIN checkout-body -->
                        <h1>By clicking proceed, your other will be booked with various vendors and let you arranged the delivery. buy Please only pay on delivery is strictly advised</h1>
                        <!-- END checkout-body -->
                        <!-- BEGIN checkout-footer -->
                        <div class="checkout-footer">
                            <a href="checkout_info.html" class="btn btn-white btn-lg pull-left">Back</a>
                            <a href="/ack" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10">Proceed</a>
                        </div>
                        <!-- END checkout-footer -->
                    </form>
                </div>
                <!-- END checkout -->
                
                <h4 class="checkout-title m-t-30 m-b-15">Payment Frequently Asked Questions</h4>
                <!-- BEGIN checkout-question-list -->
                <div class="row checkout-question-list" id="checkout-faq">
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6">
                        <div class="clearfix">
                            <div class="question">
                                <a href="#checkout-faq-1" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> Is my Credit Card / Debit Card details protected?
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit, felis vel tincidunt sodales, urna metus rutrum leo, sit amet finibus velit ante nec lacus. Cras erat nunc, pulvinar nec leo at, rhoncus elementum orci. Nullam ut sapien ultricies, gravida ante ut, ultrices nunc.
                            </div> 
                        </div>
                        <div class="clearfix m-t-10">
                            <div class="question">
                                <a href="#checkout-faq-2" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> Can I use a Debit Card to make payment??
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-2">
                                Curabitur vitae venenatis odio, eget molestie mauris. Nullam vitae turpis at mi consequat rutrum quis quis mi. Vestibulum imperdiet neque non libero condimentum, quis sodales magna molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                            </div> 
                        </div>
                        <div class="clearfix m-t-10">
                            <div class="question">
                                <a href="#checkout-faq-3" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> Credit Card/Debit Card transaction keep failing. Why?
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-3">
                                Cras malesuada mi quis purus pharetra egestas. Curabitur auctor sapien est, eu porttitor velit ornare in. Fusce porta suscipit diam at placerat. Donec lobortis iaculis accumsan. Ut semper felis vel nisi aliquam facilisis.
                            </div> 
                        </div>
                    </div>
                    <!-- END col-6 -->
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6">
                        <div class="clearfix">
                            <div class="question">
                                <a href="#checkout-faq-4" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> Did not receive the Pin Code on my mobile?
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-4">
                                Duis gravida sem eu arcu efficitur, laoreet egestas nibh posuere. Pellentesque suscipit tincidunt porttitor. Aliquam vitae massa vel justo lobortis posuere. Nulla tempor enim at auctor dignissim. Aenean sit amet venenatis odio.
                            </div> 
                        </div>
                        <div class="clearfix m-t-10">
                            <div class="question">
                                <a href="#checkout-faq-5" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> My credit card has been charged, but my order shows failed?
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-5">
                                Nunc consectetur tellus libero, at tempor dolor scelerisque id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat ligula vitae tincidunt sagittis. Etiam congue ligula purus, ut fringilla ante interdum eu.
                            </div> 
                        </div>
                    </div>
                    <!-- END col-6 -->
                </div>
                <!-- END checkout-question-list -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #checkout-payment -->
    
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
