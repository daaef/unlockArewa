<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
@include('home.header')
<body>
    <!-- BEGIN #page-container -->
    <div id="page-container" class="fade">
        <!-- BEGIN #top-nav -->
        @include('home.top')
        <!-- END #top-nav -->
    
        <!-- BEGIN #header -->
        
        <!-- END #header -->
        
        <!-- BEGIN #page-header -->
        <div id="page-header" class="section-container page-header-container bg-black">
            <!-- BEGIN page-header-cover -->
            <div class="page-header-cover">
                <img src="/assets/img/search-cover.jpg" alt="" />
            </div>
            <!-- END page-header-cover -->
            <!-- BEGIN container -->
            <div class="container">
                <h1 class="page-header">Search Results for "<b>{{$key}}</b>"</h1>
            </div>$key
            <!-- END container -->
        </div>
        <!-- BEGIN #page-header -->
        
        <!-- BEGIN search-results -->
        <div id="search-results" class="section-container bg-silver">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN search-container -->
                <h1 align="center"> No result found for {{$key}}</h1>
                <!-- END search-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END search-results -->
    
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

<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>E-Commerce Front End Theme</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets/css/style.min.css" rel="stylesheet" />
	<link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/css/theme/default.css" id="theme" rel="stylesheet" />
	<link href="/assets/css/animate.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- BEGIN #page-container -->
    <div id="page-container" class="fade">
        <!-- BEGIN #top-nav -->
        <div id="top-nav" class="top-nav">
            <!-- BEGIN container -->
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown"><img src="/assets/img/english.png" class="flag-img" alt="" /> English <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><img src="/assets/img/english.png" class="flag-img" alt="" /> English</a></li>
                                <li><a href="#"><img src="/assets/img/german.png" class="flag-img" alt="" /> German</a></li>
                                <li><a href="#"><img src="/assets/img/spanish.png" class="flag-img" alt="" /> Spanish</a></li>
                                <li><a href="#"><img src="/assets/img/french.png" class="flag-img" alt="" /> French</a></li>
                                <li><a href="#"><img src="/assets/img/chinese.png" class="flag-img" alt="" /> Chinese</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Customer Care</a></li>
                        <li><a href="#">Order Tracker</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Our Forum</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#"><i class="fa fa-facebook f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus f-s-14"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- END container -->
        </div>
        <!-- END #top-nav -->
    
        <!-- BEGIN #header -->
        <div id="header" class="header">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN header-container -->
                <div class="header-container">
                    <!-- BEGIN navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="header-logo">
                            <a href="index.html">
                                <span class="brand"></span>
                                <span>Color</span>Admin
                                <small>e-commerce frontend theme</small>
                            </a>
                        </div>
                    </div>
                    <!-- END navbar-header -->
                    <!-- BEGIN header-nav -->
                    <div class="header-nav">
                        <div class=" collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li class="dropdown dropdown-full-width dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        Our Store 
                                        <i class="fa fa-angle-down"></i>
                                        <span class="arrow top"></span>
                                    </a>
                                    <!-- BEGIN dropdown-menu -->
                                    <div class="dropdown-menu p-0">
                                        <!-- BEGIN dropdown-menu-container -->
                                        <div class="dropdown-menu-container">
                                            <!-- BEGIN dropdown-menu-sidebar -->
                                            <div class="dropdown-menu-sidebar">
                                                <h4 class="title">Shop By Categories</h4>
                                                <ul class="dropdown-menu-list">
                                                    <li><a href="product.html">Mobile Phone <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="product.html">Tablet <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="product.html">Laptop <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="product.html">Desktop <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="product.html">TV <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="product.html">Speaker <i class="fa fa-angle-right pull-right"></i></a></li>
                                                    <li><a href="product.html">Gadget <i class="fa fa-angle-right pull-right"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- END dropdown-menu-sidebar -->
                                            <!-- BEGIN dropdown-menu-content -->
                                            <div class="dropdown-menu-content">
                                                <h4 class="title">Shop By Popular Phone</h4>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu-list">
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 7</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 6s</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 6</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 5s</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> iPhone 5</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu-list">
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy S7</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy A9</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy J3</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy Note 5</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Galaxy S7</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu-list">
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 730</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 735</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 830</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia 820</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Lumia Icon</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu-list">
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia X</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia Z5</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia M5</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia C5</a></li>
                                                            <li><a href="product_detail.html"><i class="fa fa-fw fa-angle-right text-muted"></i> Xperia C4</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4 class="title">Shop By Brand</h4>
                                                <ul class="dropdown-brand-list m-b-0">
                                                    <li><a href="product.html"><img src="/assets/img/apple.png" alt="" /></a></li>
                                                    <li><a href="product.html"><img src="/assets/img/samsung.png" alt="" /></a></li>
                                                    <li><a href="product.html"><img src="/assets/img/htc.png" alt="" /></a></li>
                                                    <li><a href="product.html"><img src="/assets/img/microsoft.png" alt="" /></a></li>
                                                    <li><a href="product.html"><img src="/assets/img/nokia.png" alt="" /></a></li>
                                                    <li><a href="product.html"><img src="/assets/img/blackberry.png" alt="" /></a></li>
                                                    <li><a href="product.html"><img src="/assets/img/sony.png" alt="" /></a></li>
                                                </ul>
                                            </div>
                                            <!-- END dropdown-menu-content -->
                                        </div>
                                        <!-- END dropdown-menu-container -->
                                    </div>
                                    <!-- END dropdown-menu -->
                                </li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        Accessories 
                                        <i class="fa fa-angle-down"></i> 
                                        <span class="arrow top"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="product.html">Mobile Phone</a></li>
                                        <li><a href="product.html">Tablet</a></li>
                                        <li><a href="product.html">TV</a></li>
                                        <li><a href="product.html">Desktop</a></li>
                                        <li><a href="product.html">Laptop</a></li>
                                        <li><a href="product.html">Speaker</a></li>
                                        <li><a href="product.html">Gadget</a></li>
                                    </ul>
                                </li>
                                <li><a href="product.html">New Arrival</a></li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        Pages
                                        <i class="fa fa-angle-down"></i> 
                                        <span class="arrow top"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home (Default)</a></li>
                                        <li><a href="index_fixed_header.html">Home (Fixed Header)</a></li>
                                        <li><a href="index_inverse_header.html">Home (Inverse Header)</a></li>
                                        <li><a href="search_results.html">Search Results</a></li>
                                        <li><a href="product.html">Product Page</a></li>
                                        <li><a href="product_detail.html">Product Details Page</a></li>
                                        <li><a href="checkout_cart.html">Checkout Cart</a></li>
                                        <li><a href="checkout_info.html">Checkout Shipping</a></li>
                                        <li><a href="checkout_payment.html">Checkout Payment</a></li>
                                        <li><a href="checkout_complete.html">Checkout Complete</a></li>
                                        <li><a href="my_account.html">My Account</a></li>
                                        <li><a href="contact_us.html">Contact Us</a></li>
                                        <li><a href="about_us.html">About Us</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" data-toggle="dropdown">
                                        <i class="fa fa-search search-btn"></i>
                                        <span class="arrow top"></span>
                                    </a>
                                    <div class="dropdown-menu p-15">
                                        <form action="search_results.html" method="POST" name="search_form">
                                            <div class="input-group">
                                                <input type="text" placeholder="Search" class="form-control bg-silver-lighter" />
                                                <span class="input-group-btn">
                                                    <button class="btn btn-inverse" type="submit"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div> 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END header-nav -->
                    <!-- BEGIN header-nav -->
                    <div class="header-nav">
                        <ul class="nav pull-right">
                            <li class="dropdown dropdown-hover">
                                <a href="#" class="header-cart" data-toggle="dropdown">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="total">2</span>
                                    <span class="arrow top"></span>
                                </a>
                    
                                <div class="dropdown-menu dropdown-menu-cart p-0">
                                    <div class="cart-header">
                                        <h4 class="cart-title">Shopping Bag (1) </h4>
                                    </div>
                                    <div class="cart-body">
                                        <ul class="cart-item">
                                            <li>
                                                <div class="cart-item-image"><img src="/assets/img/ipad.jpg" alt="" /></div>
                                                <div class="cart-item-info">
                                                    <h4>iPad Pro Wi-Fi 128GB - Silver</h4>
                                                    <p class="price">$699.00</p>
                                                </div>
                                                <div class="cart-item-close">
                                                    <a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-item-image"><img src="/assets/img/imac.jpg" alt="" /></div>
                                                <div class="cart-item-info">
                                                    <h4>21.5-inch iMac</h4>
                                                    <p class="price">$1299.00</p>
                                                </div>
                                                <div class="cart-item-close">
                                                    <a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-item-image"><img src="/assets/img/iphone.png" alt="" /></div>
                                                <div class="cart-item-info">
                                                    <h4>iPhone 6s 16GB - Silver</h4>
                                                    <p class="price">$649.00</p>
                                                </div>
                                                <div class="cart-item-close">
                                                    <a href="#" data-toggle="tooltip" data-title="Remove">&times;</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-footer">
                                        <div class="row row-space-10">
                                            <div class="col-xs-6">
                                                <a href="checkout_cart.html" class="btn btn-default btn-block">View Cart</a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="checkout_cart.html" class="btn btn-inverse btn-block">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="my_account.html">
                                    <img src="/assets/img/user-1.jpg" class="user-img" alt="" /> 
                                    <span class="hidden-md hidden-sm hidden-xs">Login / Register</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END header-nav -->
                </div>
                <!-- END header-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #header -->
        
        <!-- BEGIN #page-header -->
        <div id="page-header" class="section-container page-header-container bg-black">
            <!-- BEGIN page-header-cover -->
            <div class="page-header-cover">
                <img src="/assets/img/search-cover.jpg" alt="" />
            </div>
            <!-- END page-header-cover -->
            <!-- BEGIN container -->
            <div class="container">
                <h1 class="page-header">Search Results for "<b>Mobile Phones</b>"</h1>
            </div>
            <!-- END container -->
        </div>
        <!-- BEGIN #page-header -->
        
        <!-- BEGIN search-results -->
        <div id="search-results" class="section-container bg-silver">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN search-container -->
                <div class="search-container">
                    <!-- BEGIN search-content -->
                    <div class="search-content">
                        <!-- BEGIN search-toolbar -->
                        <div class="search-toolbar">
                            <!-- BEGIN row -->
                            <div class="row">
                                <!-- BEGIN col-6 -->
                                <div class="col-md-6">
                                    <h4>We found 732 Items for "Mobile Phones"</h4>
                                </div>
                                <!-- END col-6 -->
                                <!-- BEGIN col-6 -->
                                <div class="col-md-6 text-right">
                                    <ul class="sort-list">
                                        <li class="text"><i class="fa fa-filter"></i> Sort by:</li>
                                        <li class="active"><a href="#">Popular</a></li>
                                        <li><a href="#">New Arrival</a></li>
                                        <li><a href="#">Discount</a></li>
                                        <li><a href="#">Price</a></li>
                                    </ul>
                                </div>
                                <!-- END col-6 -->
                            </div>
                            <!-- END row -->
                        </div>
                        <!-- END search-toolbar -->
                        <!-- BEGIN search-item-container -->
                        <div class="search-item-container">
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/iphone.png" alt="" />
                                        <div class="discount">15% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product_detail.html">iPhone 6s Plus<br />16GB</a>
                                        </h4>
                                        <p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
                                        <div class="item-price">$649.00</div>
                                        <div class="item-discount-price">$739.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/samsung-note5.png" alt="" />
                                        <div class="discount">32% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product.html">Samsung Galaxy Note 5<br />Black</a>
                                        </h4>
                                        <p class="item-desc">Super. Computer. Now in two sizes.</p>
                                        <div class="item-price">$599.00</div>
                                        <div class="item-discount-price">$799.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/iphone-se.png" alt="" />
                                        <div class="discount">20% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product.html">iPhone SE<br />32/64Gb</a>
                                        </h4>
                                        <p class="item-desc">A big step for small.</p>
                                        <div class="item-price">$499.00</div>
                                        <div class="item-discount-price">$599.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/zenfone2.png" alt="" />
                                        <div class="discount">15% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product_detail.html">Assus ZenFone 2<br />?(ZE550ML)</a>
                                        </h4>
                                        <p class="item-desc">See What Others Can�t See</p>
                                        <div class="item-price">$399.00</div>
                                        <div class="item-discount-price">$453.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/xperia-z.png" alt="" />
                                        <div class="discount">32% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product.html">Sony Xperia Z<br />Black Color</a>
                                        </h4>
                                        <p class="item-desc">For unexpectedly beautiful moments</p>
                                        <div class="item-price">$599.00</div>
                                        <div class="item-discount-price">$799.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/lumia-532.png" alt="" />
                                        <div class="discount">20% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product.html">Microsoft Lumia 531<br />Smartphone Orange</a>
                                        </h4>
                                        <p class="item-desc">1 Year Local Manufacturer Warranty</p>
                                        <div class="item-price">$99.00</div>
                                        <div class="item-discount-price">$199.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/ipad-pro.png" alt="" />
                                        <div class="discount">15% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product_detail.html">9.7-inch iPad Pro<br />32GB</a>
                                        </h4>
                                        <p class="item-desc">3D Touch. 12MP photos. 4K video.</p>
                                        <div class="item-price">$649.00</div>
                                        <div class="item-discount-price">$739.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/galaxy-tab2.png" alt="" />
                                        <div class="discount">32% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product.html">Samsung Galaxy Tab S2<br />Black</a>
                                        </h4>
                                        <p class="item-desc">A Brilliant Screen That Adjusts to You</p>
                                        <div class="item-price">$399.99</div>
                                        <div class="item-discount-price">$499.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/galaxy-taba.png" alt="" />
                                        <div class="discount">20% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product.html">Samsung Galaxy Tab A<br />9.7" 16Gb(Wi-Fi)</a>
                                        </h4>
                                        <p class="item-desc">Keep All Your Samsung Devices In Sync</p>
                                        <div class="item-price">$349.99</div>
                                        <div class="item-discount-price">$399.99</div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/hp-spectrex2.png" alt="" />
                                        <div class="discount">15% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product_detail.html">HP Spectre x2<br />?12-a011nr</a>
                                        </h4>
                                        <p class="item-desc">Our thinnest detachable separates from all others.</p>
                                        <div class="item-price">$799.99</div>
                                        <div class="item-discount-price">$850.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/xperia-z2.png" alt="" />
                                        <div class="discount">32% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product.html">Sony Xperia Z2 Tablet<br />Black Color</a>
                                        </h4>
                                        <p class="item-desc">For unexpectedly beautiful moments</p>
                                        <div class="item-price">$199.00</div>
                                        <div class="item-discount-price">$259.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <img src="/assets/img/ipad-air.png" alt="" />
                                        <div class="discount">20% OFF</div>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="product.html">iPad Air 2<br />32/64Gb</a>
                                        </h4>
                                        <p class="item-desc">Light. Heavyweight.</p>
                                        <div class="item-price">$399.00</div>
                                        <div class="item-discount-price">$459.00</div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                        </div>
                        <!-- END search-item-container -->
                        <!-- BEGIN pagination -->
                        <div class="text-center">
                            <ul class="pagination m-t-0">
                                <li class="disabled"><a href="javascript:;">Previous</a></li>
                                <li class="active"><a href="javascript:;">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a href="javascript:;">4</a></li>
                                <li><a href="javascript:;">5</a></li>
                                <li><a href="javascript:;">Next</a></li>
                            </ul>
                        </div>
                        <!-- END pagination -->
                    </div>
                    <!-- END search-content -->
                    <!-- BEGIN search-sidebar -->
                    <div class="search-sidebar">
                        <h4 class="title">Filter By</h4>
                        <form action="search_results.html" method="POST" name="filter_form">
                            <div class="form-group">
                                <label class="control-label">Keywords</label>
                                <input type="text" class="form-control input-sm" name="keyword" value="Mobile Phones" placeholder="Enter Keywords" />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="row row-space-0">
                                    <div class="col-md-5">
                                        <input type="number" class="form-control input-sm" name="price_from" value="10" placeholder="Price From" />
                                    </div>
                                    <div class="col-md-2 text-center p-t-5 f-s-12 text-muted">to</div>
                                    <div class="col-md-5">
                                        <input type="number" class="form-control input-sm" name="price_to" value="10000" placeholder="Price To" />
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-30">
                                <button type="submit" class="btn btn-sm btn-inverse"><i class="fa fa-search"></i> Filter</button>
                            </div>
                        </form>
                        <h4 class="title m-b-0">Categories</h4>
                        <ul class="search-category-list">
                            <li><a href="#">Microsoft <span class="pull-right">(10)</span></a></li>
                            <li><a href="#">Samsung <span class="pull-right">(15)</span></a></li>
                            <li><a href="#">Apple <span class="pull-right">(32)</span></a></li>
                            <li><a href="#">Micromax <span class="pull-right">(4)</span></a></li>
                            <li><a href="#">Karbonn <span class="pull-right">(6)</span></a></li>
                            <li><a href="#">Intex <span class="pull-right">(8)</span></a></li>
                            <li><a href="#">Sony <span class="pull-right">(42)</span></a></li>
                            <li><a href="#">HTC <span class="pull-right">(33)</span></a></li>
                            <li><a href="#">Asus <span class="pull-right">(15)</span></a></li>
                            <li><a href="#">Nokia <span class="pull-right">(84)</span></a></li>
                            <li><a href="#">Blackberry <span class="pull-right">(8)</span></a></li>
                        </ul>
                    </div>
                    <!-- END search-sidebar -->
                </div>
                <!-- END search-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END search-results -->
    
        <!-- BEGIN #footer -->
        <div id="footer" class="footer">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3">
                        <h4 class="footer-header">ABOUT US</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec tristique dolor, ac efficitur velit. Nulla lobortis tempus convallis. Nulla aliquam lectus eu porta pulvinar. Mauris semper justo erat. 
                        </p>
                        <p>
                            Vestibulum porttitor lorem et vestibulum pharetra. Phasellus sit amet mi congue, hendrerit mi ut, dignissim eros.
                        </p>
                    </div>
                    <!-- END col-3 -->
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3">
                        <h4 class="footer-header">RELATED LINKS</h4>
                        <ul class="fa-ul">
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Shopping Help</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Terms of Use</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Contact Us</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Careers</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Payment Method</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sales & Refund</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Sitemap</a></li>
                            <li><i class="fa fa-li fa-angle-right"></i> <a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                    <!-- END col-3 -->
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3">
                        <h4 class="footer-header">LATEST PRODUCT</h4>
                        <ul class="list-unstyled list-product">
                            <li>
                                <div class="image">
                                    <img src="/assets/img/iphone-6s.jpg" alt="" />
                                </div>
                                <div class="info">
                                    <h4 class="info-title">Iphone 6s</h4>
                                    <div class="price">$1200.00</div>
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <img src="/assets/img/galaxy-s6.jpg" alt="" />
                                </div>
                                <div class="info">
                                    <h4 class="info-title">Samsung Galaxy s7</h4>
                                    <div class="price">$850.00</div>
                                </div>
                            </li>
                        
                            <li>
                                <div class="image">
                                    <img src="/assets/img/ipad-pro.jpg" alt="" />
                                </div>
                                <div class="info">
                                    <h4 class="info-title">Ipad Pro</h4>
                                    <div class="price">$800.00</div>
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <img src="/assets/img/galaxy-note5.jpg" alt="" />
                                </div>
                                <div class="info">
                                    <h4 class="info-title">Samsung Galaxy Note 5</h4>
                                    <div class="price">$1200.00</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END col-3 -->
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3">
                        <h4 class="footer-header">OUR CONTACT</h4>
                        <address>
                            <strong>Twitter, Inc.</strong><br />
                            1355 Market Street, Suite 900<br />
                            San Francisco, CA 94103<br /><br />
                            <abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
                            <abbr title="Fax">Fax:</abbr> (123) 456-7891<br />
                            <abbr title="Email">Email:</abbr> <a href="mailto:sales@myshop.com">sales@myshop.com</a><br />
                            <abbr title="Skype">Skype:</abbr> <a href="skype:myshop">myshop</a>
                        </address>
                    </div>
                    <!-- END col-3 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #footer -->
    
        <!-- BEGIN #footer-copyright -->
        <div id="footer-copyright" class="footer-copyright">
            <!-- BEGIN container -->
            <div class="container">
                <div class="payment-method">
                    <img src="/assets/img/payment_method.png" alt="" />
                </div>
                <div class="copyright">
                    Copyright &copy; 2016 SeanTheme. All rights reserved.
                </div>
            </div>
            <!-- END container -->
        </div>
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