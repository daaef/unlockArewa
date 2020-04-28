<!DOCTYPE html>
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
                                    <h4>We found {{$amount}} Items for "{{$key}}"</h4>
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
                                        <p class="item-desc">See What Others Can’t See</p>
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
