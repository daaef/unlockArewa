<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.startimestv.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2017 10:55:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="StarTimes" />
    <meta name="description" content="StarTimes" />
    <meta name="author" content="index.html" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
            <title>My app</title>
    <link href="Public/static/themes/css/global.css" rel="stylesheet" type="text/css" />
    <script src="Public/static/themes/js/jquery-1.7.2.min.js"></script>
    <script src="Public/static/themes/js/fun.js"></script>
    <script src="Public/static/themes/js/global.js"></script>
    <script src="Public/static/themes/js/plus/jquery.mScroll.js"></script>
    <link rel="shortcut icon" href="Public/static/themes/image/favicon.ico" type="image/x-icon"/>
    
    <script>
		var CONFIG = {
			UID: 0,
			THEME: '/Public/static/themes/',
			BASE_URL: ''
		};
	</script>
	
	

    <script>

        $(function(){
            // 获取用户时区
            var d = new Date()
            var gmt = "GMT" + d.getTimezoneOffset()/60;

            // 登录
            $(document).on('click', '.btn_head_login', function(){

                // 清空之前的提醒
                $('#login_username_msg').html("");
                $('#login_pwd_msg').html("");


                var login_username = $('#login_username').val();
                var login_pwd = $('#login_pwd').val();
                var area_id = $('#area-id').val();
                if( $.trim(login_username) == "" ) {
                    $('#login_username_msg').html( "Please fill out the phone number or email" );
                    return false;
                }
                if( $.trim( login_pwd ) == "" ) {
                    $('#login_pwd_msg').html( "Please fill in the password" );
                    return false;
                }

                if( login_username.indexOf("@") == -1 ) {
                    var type = 10;
                } else {
                    var type = 0;
                }
                $.post("Member/Passport/login.html", {username:login_username, pwd:$('#login_pwd').val(), timeZoneID:gmt, type:type, area_number:$('#area-number').val(), area_id:area_id,versionCode:100}, function( data ){
                    if( data.status == 1 || data.status == 2 ) {
                        // 登录成功
                        var areaID = $('#area-id').val();
                        window.location.reload();
                    } else if( data.status == 0 ) {
                        if( data.type == "login_username" ) {
                            $('#login_username_msg').html( data.info );
                        } else if( data.type == "login_pwd" ) {
                            $('#login_pwd_msg').html( data.info );
                        } else if( data.type == "" ) {
                            my_alert( data.info );
                        }

                    }
                });
            })
        })
    </script>

    <script>
    //TODO begin 处理登陆用户时区
    //获得登陆用户时区与GMT时区的差值
    var exp = new Date();
    var gmtHours = -(exp.getTimezoneOffset()/60);
    setCookie('customer_timezone',gmtHours,1);
    //设置Cookie
    function setCookie(c_name,value,expiredays){
            var exdate=new Date()
            exdate.setDate(exdate.getDate()+expiredays)
            document.cookie=c_name+ "=" +escape(value)+
            ((expiredays==null) ? "" : "; expires="+exdate.toGMTString())
    }
    //DONE end
    </script>

    <script>
        host2=document.domain;
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
        if(host2=='127.0.0.1'||host2=='localhost'){
            ga('create', '', 'auto');
        }else{
            ga('create', 'UA-55969660-2', 'auto');
        }
        ga('send', 'pageview', {
            'dimension1':  '2'
        });

    </script>
</head>


<body>
    <div class="shadow_alert" style="z-index:500;"></div>
    <div class="layer1_alert my_alert" style="z-index:600;display:none;">
        <div class="confirm">
            <div class="ico"><!--<img src="image/ok_1.png" />--></div>
            <h3 class="center"></h3>
            <div class="button">
                <a href="javascript:;" onClick="hidealert('.layer1_alert')">确定</a>
            </div>
        </div>
    </div>

    <div class="shadow_alert" style="z-index:500;"></div>
    <div class="layer1_alert my_confirm" style="z-index:600;display:none;">
        <div class="confirm">
            <div class="ico"><!--<img src="image/ok_1.png" />--></div>
            <h3 class="center"></h3>
            <div class="button">
                <a href="javascript:;" onClick="hidealert('.layer1_alert')" class="true">确定</a>
                <a href="javascript:;" onClick="hidealert('.layer1_alert')">取消</a>
            </div>
        </div>
    </div>

    <script>
        var my_alert = function( content, ico, url){
//            url = url ? url : 'javascript:;';
//            ico = ( ( ico == 1 ) ? 1 : 0 ) || 0;
//            $('.my_alert .center').html( content );
//            $('.my_alert .button a').attr('href',url);
//            $('.my_alert .ico img').attr('src','/Public/static/themes/wap/image/ok_' + ico + '.png');
//            if (typeof(url) == 'function') {
//                $('.my_alert .button a').attr('href','javascript:;');
//                $('.my_alert .button a').click(function(e) {
//                    url();
//                    return false;
//                });
//            }
//
//            showalert('.my_alert');
            alert( content );
        }


        var my_confirm = function( content , callback ){

//            $('.my_confirm .center').html( content );
//            $('.my_confirm .ico img').attr('src','/Public/static/themes/image/ico1.png');
//            showalert('.my_confirm');
//
//            $('.my_confirm').find('.true').unbind().click(function() {
//                callback();
//                hidealert( '.my_confirm' );
//                return false;
//            });
            confirm( content );
        }
    </script>

    <style>
#header .block .nav_main .widget-area-notice{ width:529px !important; }
</style>

<!-- Header -->
@include('partials.header')


<script>
    $(function(){
        // 让地区下拉列表可选
        selector(".login .select");
        $("#header .log .a").click(function(){
            // 如果登录，则不再显示登录窗口
            var isLogin = "";
            if( isLogin ) {
                return false;
            }
            $(this).addClass("act");
            showlayer(".login");
            selector(".login .select");
            $("#body,#focus,#footer").addClass("blur");
        });

        // 退出登录
        $('#logout').click(function(){
            $.post("Member/Passport/logout.json", {}, function( data ){
                if( data.status == 1 || data.status == 'error' ) {
                    window.location.href = "index.html";
                }
            });
        });
        $('#headerSearchBut').click(function(event) {
             var k = $('#header-search').val();
            window.location.href="Member/Index/search778b.html?keys="+encodeURI(k);
        });
        $("#header-search").keyup(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            var k = $(this).val();
        if(keycode == '13'){
             window.location.href="Member/Index/search778b.html?keys="+encodeURI(k);
         }
        });
    })
</script>

	
    <link href="Public/static/newhome/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="Public/static/newhome/css/style.css"/>
    <!--Luara样式文件-->
    <!--渐隐样式-->
    <link rel="stylesheet" href="Public/static/newhome/css/luara.css"/>
    <link rel="stylesheet" type="text/css" href="Public/static/newhome/css/index.css">

    <!--Luara样式文件-->
    <!--渐隐样式-->

    <script type="text/javascript" src="Public/static/newhome/js/jquery.bxslider.js"></script>

    <!--Luara js文件-->
    <script src="Public/static/newhome/js/jquery.luara.0.0.1.min.js"></script>
    <div id="widget-area-home-index-index-593f3e608d13e9955" uniqid="home-index-index-593f3e608d13e9955" class="widget-area"><div id="focus" style="margin-top: -15px;">
    <div class="block" style="width: 1240px">
        <div class="frame" style="width: 1200px">
            <div class="child"  style="width:1200px;height:100%;overflow:hidden;">
                    <a href="Product.html" >
                        <img src="Uploads/Picture/2017/06/05/s593575b213d65.jpg" title="">
                    </a>
                </div><div class="child"  style="width:1200px;height:100%;overflow:hidden;">
                    <a href="javascript:void(0);" >
                        <img src="Uploads/Picture/2017/05/15/s591968ca422c2.jpg" title="">
                    </a>
                </div><div class="child"  style="width:1200px;height:100%;overflow:hidden;">
                    <a href="javascript:void(0);" >
                        <img src="Uploads/Picture/2017/06/01/s592fb20b84e00.jpg" title="">
                    </a>
                </div><div class="child"  style="width:1200px;height:100%;overflow:hidden;">
                    <a href="programdetail/16070.html" >
                        <img src="Uploads/Picture/2017/06/07/s5937cc6522bfc.jpg" title="">
                    </a>
                </div><div class="child"  style="width:1200px;height:100%;overflow:hidden;">
                    <a href="newsdetail1b83.html?newsid=1496912023047&amp;code=2&amp;1496912185" >
                        <img src="Uploads/Picture/2017/06/08/s593911215fd7d.jpg" title="">
                    </a>
                </div>        </div>
        <div class="nav">
            <i></i><i></i><i></i><i></i><i></i>        </div>
        <a href="javascript:;" class="prev"></a><a href="javascript:;" class="next"></a>
    </div>

</div>

<script>
    $('#focus .frame').mScroll({
        auto : 1,                   //自动开始
        direction : "h",                 //滚动方向,h横向,v纵向
        dtype : "left",              //正反方向
        isfocus : 0,                   //是否作为焦点图
        minsize : 1,                   //最小数量
        speed : 500,                 //滚动速度
        easing : "",                  //缓冲类型
        delay : 5000,                //自动滚动间隔
        nav : "#focus .nav i",                //导航按钮
        scrollnav : 0,                   //导航滚动
        nav_direction : "h",                 //导航方向,h横向,v纵向
        prev : "#focus .prev",      //前一个
        next : "#focus .next",      //后一个
        arrow : 1,                   //是否反转
        cycle : 1,                   //是否循环
        mousestop : 1,                   //鼠标划入停止
        mousewheel : 0                    //开启滚轮事件
    });
</script></div>
 <div id="body" class="home">

    <div id="main" style="margin-top:0px;">
        <div class="container jsmovies">

            <div id="widget-area-home-index-index-593f3e608deba1810" uniqid="home-index-index-593f3e608deba1810" class="widget-area"><div class="june box">
    <h1 class="title" style="margin-left: 8px;">
        WHAT'S ON STARTIMES CHANNELS    </h1>
    <ul class="june-slider" >
        <li class="slide" >
                <a href="programdetail/124735841.html?code=2">
                    <img class="movie" style="width: 300px; height: 168px;" src="../cdn.startimestv.com/files/img/group1/M00/00/1D/wKj4l1kayyuAfPYSAAIsNanZxjk940.jpg" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'"/>
                </a>
                <div class="info" style="background-color: #FFFCEE">
                    <div style="height: 250px;">
                            <h2 style="height: 50px;font-size: 24px;">Along Came Love&nbsp;</h2>
                            <h3 style="height: 65px; margin-bottom: 2px;">Two episodes per day from Thursday to Friday 6:50pm</h3>
                            <div class="icon-box">
                                <img src="../portal.tenbre.me/portal/img/channel/logo/c_-718536587.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'" >
                                <span style="padding-left:5px;">

                                 <div  style='float: left;margin-right:10px;'><img  style='width:23px;height: auto;margin-right:-10px;' src='Public/static/newhome/images/dth_channel_copy.png' />127 </div> <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' />53 </div>                                </span>
                            </div>
                            <p>

                                David loses his wife Lisa in a seemingly unintentional accident, perpetrated by his obsessive...                            </p>
                    </div>
                    <a style=" padding-top: 10px" href="programdetail/124735841.html?code=2">Read more</a>
                </div>
            </li><li class="slide" >
                <a href="programdetail/158545841.html?code=2">
                    <img class="movie" style="width: 300px; height: 168px;" src="../cdn.startimestv.com/files/img/group1/M00/00/6B/wKj4l1k1dmSASYUFAASCSw8CIAo966.jpg" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'"/>
                </a>
                <div class="info" style="background-color: #FFFCEE">
                    <div style="height: 250px;">
                            <h2 style="height: 50px;font-size: 24px;">Paranormal Lockdown&nbsp;</h2>
                            <h3 style="height: 65px; margin-bottom: 2px;">From Saturday 10 June at 8:50 PM</h3>
                            <div class="icon-box">
                                <img src="../portal.tenbre.me/portal/img/channel/logo/c_1766957761.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'" >
                                <span style="padding-left:5px;">

                                 <div  style='float: left;margin-right:10px;'><img  style='width:23px;height: auto;margin-right:-10px;' src='Public/static/newhome/images/dth_channel_copy.png' />223 </div> <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' />334 </div>                                </span>
                            </div>
                            <p>

                                Paranormal all-star Nick Groff and ghost hunter Katrina Weidman host this thirteen-episode series...                            </p>
                    </div>
                    <a style=" padding-top: 10px" href="programdetail/158545841.html?code=2">Read more</a>
                </div>
            </li><li class="slide" >
                <a href="programdetail/109805841.html?code=2">
                    <img class="movie" style="width: 300px; height: 168px;" src="../cdn.startimestv.com/files/img/group1/M00/02/51/CgA_9FjnSMeAPaXGAAEedtrZ_LY344.jpg" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'"/>
                </a>
                <div class="info" style="background-color: #FFFCEE">
                    <div style="height: 250px;">
                            <h2 style="height: 50px;font-size: 24px;">Shots Fired&nbsp;</h2>
                            <h3 style="height: 65px; margin-bottom: 2px;">Wednesdays, 12th April at 21:00 CAT</h3>
                            <div class="icon-box">
                                <img src="../portal.tenbre.me/portal/img/channel/logo/c_-1620658638.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'" >
                                <span style="padding-left:5px;">

                                 <div  style='float: left;margin-right:10px;'><img  style='width:23px;height: auto;margin-right:-10px;' src='Public/static/newhome/images/dth_channel_copy.png' />131 </div> <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' />70 </div>                                </span>
                            </div>
                            <p>

                                Examining the dangerous aftermath of racially charged shootings in a small Southern town, SHOTS...                            </p>
                    </div>
                    <a style=" padding-top: 10px" href="programdetail/109805841.html?code=2">Read more</a>
                </div>
            </li><li class="slide" >
                <a href="programdetail/119965841.html?code=2">
                    <img class="movie" style="width: 300px; height: 168px;" src="../cdn.startimestv.com/files/img/group1/M00/00/05/wKj4l1kIjjSARvruAAVFjte0uqo855.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'"/>
                </a>
                <div class="info" style="background-color: #FFFCEE">
                    <div style="height: 250px;">
                            <h2 style="height: 50px;font-size: 24px;">Hey Daddy&nbsp;</h2>
                            <h3 style="height: 65px; margin-bottom: 2px;">Every Monday-Friday at 20:20GMT/ 22:20CAT</h3>
                            <div class="icon-box">
                                <img src="../portal.tenbre.me/portal/img/channel/logo/c_-867556708.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'" >
                                <span style="padding-left:5px;">

                                 <div  style='float: left;margin-right:10px;'><img  style='width:23px;height: auto;margin-right:-10px;' src='Public/static/newhome/images/dth_channel_copy.png' />130 </div> <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' />58 </div>                                </span>
                            </div>
                            <p>

                                This is a story between a cynical son who has been away from home for many years,and a lonely...                            </p>
                    </div>
                    <a style=" padding-top: 10px" href="programdetail/119965841.html?code=2">Read more</a>
                </div>
            </li><li class="slide" >
                <a href="programdetail/145235841.html?code=2">
                    <img class="movie" style="width: 300px; height: 168px;" src="../cdn.startimestv.com/files/img/group1/M00/00/37/wKj4l1ko0a-AGfwFAAmQTnZw0LM213.jpg" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'"/>
                </a>
                <div class="info" style="background-color: #FFFCEE">
                    <div style="height: 250px;">
                            <h2 style="height: 50px;font-size: 24px;">nowhere boy&nbsp;</h2>
                            <h3 style="height: 65px; margin-bottom: 2px;">Season 1. Four episodes every Monday, 18:40GMT/20:40CAT</h3>
                            <div class="icon-box">
                                <img src="../portal.tenbre.me/portal/img/channel/logo/c_-895391725.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'" >
                                <span style="padding-left:5px;">

                                 <div  style='float: left;margin-right:10px;'><img  style='width:23px;height: auto;margin-right:-10px;' src='Public/static/newhome/images/dth_channel_copy.png' />125 </div> <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' />51 </div>                                </span>
                            </div>
                            <p>

                                Set in the fictional suburb of Bremin, the series follows four mismatched year ten students—who...                            </p>
                    </div>
                    <a style=" padding-top: 10px" href="programdetail/145235841.html?code=2">Read more</a>
                </div>
            </li><li class="slide" >
                <a href="programdetail/124985841.html?code=2">
                    <img class="movie" style="width: 300px; height: 168px;" src="../cdn.startimestv.com/files/img/group1/M00/00/17/wKj4l1kUCSuAQ9gEAAJ8IQUbDkA527.jpg" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'"/>
                </a>
                <div class="info" style="background-color: #FFFCEE">
                    <div style="height: 250px;">
                            <h2 style="height: 50px;font-size: 24px;">Parks and Recreation S3&nbsp;</h2>
                            <h3 style="height: 65px; margin-bottom: 2px;">Three episodes per day from May 25 Every Friday ,18:00GMT/20:00CAT</h3>
                            <div class="icon-box">
                                <img src="../portal.tenbre.me/portal/img/channel/logo/c_-895391725.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'" >
                                <span style="padding-left:5px;">

                                 <div  style='float: left;margin-right:10px;'><img  style='width:23px;height: auto;margin-right:-10px;' src='Public/static/newhome/images/dth_channel_copy.png' />125 </div> <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' />51 </div>                                </span>
                            </div>
                            <p>

                                "Parks and Recreation" is a hilarious ensemble comedy that follows Leslie Knope (Emmy and Golden...                            </p>
                    </div>
                    <a style=" padding-top: 10px" href="programdetail/124985841.html?code=2">Read more</a>
                </div>
            </li><li class="slide" >
                <a href="programdetail/102385841.html?code=2">
                    <img class="movie" style="width: 300px; height: 168px;" src="../cdn.startimestv.com/files/img/group1/M00/02/05/CgA_9Fi_32OAfBG-AAEowDc90WY242.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'"/>
                </a>
                <div class="info" style="background-color: #FFFCEE">
                    <div style="height: 250px;">
                            <h2 style="height: 50px;font-size: 24px;">Wasaka Tonge&nbsp;</h2>
                            <h3 style="height: 65px; margin-bottom: 2px;">Every Friday at 18:00 (GMT+3)
(Kila Alhamisi na Ijumaa saa 12 jioni)</h3>
                            <div class="icon-box">
                                <img src="../portal.tenbre.me/portal/img/channel/logo/c_1780519567.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'" >
                                <span style="padding-left:5px;">

                                 <div  style='float: left;margin-right:10px;'><img  style='width:23px;height: auto;margin-right:-10px;' src='Public/static/newhome/images/dth_channel_copy.png' />400 </div>                                </span>
                            </div>
                            <p>

                                Wasaka tonge ni hadithi inayozungumzia watu watafutaji, kuna wengine wanatafuta kwa njia halali na...                            </p>
                    </div>
                    <a style=" padding-top: 10px" href="programdetail/102385841.html?code=2">Read more</a>
                </div>
            </li><li class="slide" >
                <a href="programdetail/157745841.html?code=2">
                    <img class="movie" style="width: 300px; height: 168px;" src="../cdn.startimestv.com/files/img/group1/M00/00/66/wKj4l1k0xjiAM7D9AAkhatmW7KU446.jpg" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'"/>
                </a>
                <div class="info" style="background-color: #FFFCEE">
                    <div style="height: 250px;">
                            <h2 style="height: 50px;font-size: 24px;">Asali wa Moyo&nbsp;</h2>
                            <h3 style="height: 65px; margin-bottom: 2px;">Everyday 6:00 PM. (Kila siku saa kumi na mbili jioni)</h3>
                            <div class="icon-box">
                                <img src="../portal.tenbre.me/portal/img/channel/logo/c_1780519567.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'" >
                                <span style="padding-left:5px;">

                                 <div  style='float: left;margin-right:10px;'><img  style='width:23px;height: auto;margin-right:-10px;' src='Public/static/newhome/images/dth_channel_copy.png' />400 </div>                                </span>
                            </div>
                            <p>

                                Baadhi ya mbwa mara tu walipozaliwa, wanaelewa ujumbe wa wanajeshi. Hulka ya binadamu inamulika juu...                            </p>
                    </div>
                    <a style=" padding-top: 10px" href="programdetail/157745841.html?code=2">Read more</a>
                </div>
            </li><li class="slide" >
                <a href="programdetail/124815841.html?code=2">
                    <img class="movie" style="width: 300px; height: 168px;" src="../cdn.startimestv.com/files/img/group1/M00/00/17/wKj4l1kT9wuAI3tgAALKZFJzmVU249.jpg" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'"/>
                </a>
                <div class="info" style="background-color: #FFFCEE">
                    <div style="height: 250px;">
                            <h2 style="height: 50px;font-size: 24px;">Inside No. 9&nbsp;</h2>
                            <h3 style="height: 65px; margin-bottom: 2px;">four episodes per day from May 23, Every Tuesday , 17:50GMT/19:50CAT</h3>
                            <div class="icon-box">
                                <img src="../portal.tenbre.me/portal/img/channel/logo/c_-895391725.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'" >
                                <span style="padding-left:5px;">

                                 <div  style='float: left;margin-right:10px;'><img  style='width:23px;height: auto;margin-right:-10px;' src='Public/static/newhome/images/dth_channel_copy.png' />125 </div> <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' />51 </div>                                </span>
                            </div>
                            <p>

                                Inside No. 9 is an anthology series, with each episode featuring a new story, with a new setting...                            </p>
                    </div>
                    <a style=" padding-top: 10px" href="programdetail/124815841.html?code=2">Read more</a>
                </div>
            </li>    </ul>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var width = parseInt($('.june-slider .slide').eq(0).width());
        $('.june-slider').bxSlider({
            slideWidth: 296,
            minSlides: 2,
            maxSlides: 3,
            moveSlides: 1,
            slideMargin: 0,
            customSetMargin:30
        });
    });

</script></div>            <div id="widget-area-home-index-index-593f3e608f0a44291" uniqid="home-index-index-593f3e608f0a44291" class="widget-area"><div class="swahili box">
    <h1 class="title" style="margin-left: 8px;">
        BEST OF MONTH
    </h1>
    <ul class="swahili-slider-move">
        <li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/159105841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/6E/wKj4l1k2QDaABWAQAALQ5OrWUMA050.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">INTERNATIONAL SURFING DAY&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/159125841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/6E/wKj4l1k2REmAdTx-AAP9KCpj73Y954.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">GEE RAFFA&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/159415841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/6F/wKj4l1k2X-2AG8nHAAYvrIr7xDg763.png" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Bunsen is a beast&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/159475841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/70/wKj4l1k2cQKAF9LFAAC_j1mB7vw161.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Murder Maps S1&2&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/160355841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/70/wKj4l1k3UdSATkMCAAIxWSit51I219.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Asteroid Day (Stunt)&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/160395841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/74/wKj4l1k6bXmAb6-6AAA0Hv8-2SM577.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Hell on Earth: Fall of Syria and the Rise of Isis&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/160385841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/70/wKj4l1k3WcyAYF6dAAaV82fDvxY923.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">CATWALK STORIES EP 3&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/160375841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/70/wKj4l1k3WGaAaq0-AAmpoZoeef4321.png" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Two Sides Of A Coin&nbsp;</p>
            </li>
    </ul>
</div>
<script type="text/javascript">
    var swahiliWidth = parseInt($('.swahili-slider-move .slide').eq(0).width());
    $('.swahili-slider-move').bxSlider({
        slideWidth: 220,
        minSlides: 3,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 10
    });
</script></div>
            <div id="widget-area-home-index-index-593f3e608fd815706" uniqid="home-index-index-593f3e608fd815706" class="widget-area"><div class="swahili box">
    <h1 class="title" style="margin-left: 8px;">
        SPORTS
    </h1>
    <ul class="swahili-slider-program">
        <li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/29725841.html?code=2">
                    <img src="/images/a.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Barça TV&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/98055841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/01/DE/CgA_9Fi1DWmAZsJoAABSHkDIUls464.png" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">ONE Championship&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/27135841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/11/CgA_9Fe23qWABFl7AAATpreuFKg683.png" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">PGA Tour Highlights&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/30965841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/04/wKj4n1fG1KGAHJYUAADIldbwilg771.png" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">European Qualifiers to FIFA World Cup 2018&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/84665841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/01/54/CgA_9FhrPWGAfEd8AAA7Ullu-Zw709.png" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Italian Cup Last 16&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/51025841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/4F/wKj4n1f68bqAFkgpAAUheYhqrI8206.png" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Football paparazzi&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/27115841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/11/CgA_9Fe23ZuAWJvgAAAQsP19yLc067.png" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">BarçaTV&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/63965841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/9B/CgA_9FgZzb6ABm25AAA38P1EUSY423.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">BVB-WORLD&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/48525841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/41/wKj4n1fuHuOAD9FXAAMwTYkuDvI916.png" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Bundesliga&nbsp;</p>
            </li>
    </ul>
</div>
<script type="text/javascript">
    var swahiliWidth = parseInt($('.swahili-slider .slide').eq(0).width());
    $('.swahili-slider-program').bxSlider({
        slideWidth: 220,
        minSlides: 3,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 10
    });
</script></div>
            <div id="widget-area-home-index-index-593f3e60909e76208" uniqid="home-index-index-593f3e60909e76208" class="widget-area"><div class="swahili box">
    <h1 class="title" style="margin-left: 8px;">
        HIGHLIGHTS OF NEW CHANNELS
    </h1>
    <ul class="swahili-slider-swahili">
        <li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/160475841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/70/wKj4l1k3X0KAJSgCAAEyUDqau_0635.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">House of Curves&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/160405841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/70/wKj4l1k3Xh-ASRi4AAM19BMY3Bk411.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Breakthrough II&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/160495841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/70/wKj4l1k3Yc2Aa1uIAAQqkq--Hck508.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Dragon Island&nbsp;</p>
            </li><li class="first slide" style="width: 220px; height: 124px;">
                <a href="programdetail/160505841.html?code=2">
                    <img src="../cdn.startimestv.com/files/img/group1/M00/00/70/wKj4l1k3YueASQ90AFNGUKcA5IM773.jpg" style="width: 220px; height: 124px;"  onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">

                </a>
                <p style="width: 220px;">Married To Medicine S1&nbsp;</p>
            </li>
    </ul>
</div>
<script type="text/javascript">
    var swahiliWidth = parseInt($('.swahili-slider .slide').eq(0).width());
    $('.swahili-slider-swahili').bxSlider({
        slideWidth: 220,
        minSlides: 3,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 10
    });
</script></div>
            <div id="widget-area-home-index-index-593f3e609158a3856" uniqid="home-index-index-593f3e609158a3856" class="widget-area"></div>

        </div>

            <div id="widget-area-home-index-index-593f3e60921046622" uniqid="home-index-index-593f3e60921046622" class="widget-area"><div class='container package' style="height:auto">
    <h1 class='title'>
        Bouquet    </h1>
    <ul class="button-area">
        <li class="button"> ANTENNA</li>
        <li class="button"> DISH</li>
        <li class='slider'>ANTENNA</li>
    </ul>
    <div class="parkage-wrapper" >
        <div class="parkage-container parkage-container001 show" style="width: 980px;">
            <ul>
                
                <li class="first">
                    <a href="packages/11999.html?platformTypes=0&amp;color=#FFFFFF">
                        <div  style="background-image:url(Public/static/images/DTT/DTT_Basic_en.png);background-size: 217px; width: 220px;height: 120px;padding-top: 30px;padding-left:30px;">
                            <span style="color: #FFFFFF;font-size: 22px;">₦ 1300/m</span>
                        </div>
                    </a>
                </li>
                
                <li >
                    <a href="packages/21999.html?platformTypes=0&amp;color=#FFFFFF">
                        <div  style="background-image:url(Public/static/images/DTT/DTT_Classic_en.png);background-size: 217px; width: 220px;height: 120px;padding-top: 30px;padding-left:30px;">
                            <span style="color: #FFFFFF;font-size: 22px;">₦ 2600/m</span>
                        </div>
                    </a>
                </li>
                
                <li >
                    <a href="packages/31999.html?platformTypes=0&amp;color=#FFFFFF">
                        <div  style="background-image:url(Public/static/images/DTT/DTT_Unique_en.png);background-size: 217px; width: 220px;height: 120px;padding-top: 30px;padding-left:30px;">
                            <span style="color: #FFFFFF;font-size: 22px;">₦ 3800/m</span>
                        </div>
                    </a>
                </li>
                
                <li >
                    <a href="packages/3681999.html?platformTypes=0&amp;color=#FFFFFF">
                        <div  style="background-image:url(Public/static/images/DTT/DTT_Nova_en.png);background-size: 217px; width: 220px;height: 120px;padding-top: 30px;padding-left:30px;">
                            <span style="color: #FFFFFF;font-size: 22px;">₦ 900/m</span>
                        </div>
                    </a>
                </li>
                            </ul>
        </div>
        <div class="parkage-container parkage-container002"  style="width: 980px;">
            <ul style="padding-left:10px;">
                                <li class="first">
                    <a href="packages/94f623.html?platformTypes=1&amp;color=#FFFFFF">
                        <div  style="background-image:url(Public/static/images/DTH/DTH_Nova_en.png);background-size: 215px; width: 215px;height: 120px;padding-top:47px;padding-right:15px;text-align: right">
                            <span style="color: ##FFFFFF;font-size: 22px;">900<br/></span><span style="color: ##FFFFFF;font-size: 14px;">₦/m</span>
                        </div>
                    </a>
                </li>

                                <li >
                    <a href="packages/95b896.html?platformTypes=1&amp;color=169E3C">
                        <div  style="background-image:url(Public/static/images/DTH/DTH_Smart_en.png);background-size: 215px; width: 215px;height: 120px;padding-top:47px;padding-right:15px;text-align: right">
                            <span style="color: #169E3C;font-size: 22px;">1900<br/></span><span style="color: #169E3C;font-size: 14px;">₦/m</span>
                        </div>
                    </a>
                </li>

                                <li >
                    <a href="packages/97afc2.html?platformTypes=1&amp;color=D21577">
                        <div  style="background-image:url(Public/static/images/DTH/DTH_Super_en.png);background-size: 215px; width: 215px;height: 120px;padding-top:47px;padding-right:15px;text-align: right">
                            <span style="color: #D21577;font-size: 22px;">3800<br/></span><span style="color: #D21577;font-size: 14px;">₦/m</span>
                        </div>
                    </a>
                </li>

                            </ul>

        </div>
    </div>
</div>

<script language="javascript">

    $(document).ready(function(){
        var $button = $('#main .package .button-area .button');
        var $parkageContainer = $('#main .package .parkage-container');
        var $silder = $('#main .package .button-area .slider');
        var $sliderWidth = parseInt($silder.width());
        var $parkageWrapper = $('#main .package .parkage-wrapper');
        $button.each(function(index, item){
            var me = $(this);
            me.on('click', function(){
                if(!$parkageContainer.eq(index).hasClass('show')){
                    if(index==1){
                        $silder.animate({
                            'left':'50%'
                        },300).html(me.html());
                    }else {
                        $silder.animate({
                            'left':0
                        },300).html(me.html());
                    }
                    $parkageContainer.eq(index).siblings('.parkage-container').fadeOut(300).removeClass('show');
                    setTimeout(function(){
                        $parkageContainer.eq(index).fadeIn(300).addClass('show');
                    },150);
                }
            });
        });
    });

</script></div>
            <div id="widget-area-home-index-index-593f3e609f552697" uniqid="home-index-index-593f3e609f552697" class="widget-area"><style>
.ionespan{
        display: inline-block;
        padding-top: 10px;
        color: #ff8D00;
        width: 200px;
        margin-left:0px;
        background-size: contain;
        font-size: 18px;
        line-height: 23px;
    }

</style>
<div class="container channels">
    <h1 class="title" style="margin-left: 8px;">
        CHANNELS    </h1>
   <ul class="channels-slider">
       <li class="slide">
                                  <a href="channeldetail/651.html">
                       <img class="channel-icon" src="Uploads/Picture/2017/01/09/s5872f1f73cd24.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">
                   </a>
                              <div class="info">
                   <div style="height: 300px">
                   <h2 style="text-transform:uppercase;">VIASAT LIFE</h2>
                   <div style="line-height: 30px;width: 200px;">
                       <div class="ionespan">
                        <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dth_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>229</div>  <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>230</div>                        </div>

                    </div>
                   <p  style="color: #4A4A4A;margin-top: 10px; display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 10;overflow: hidden;">
                       Bringing you quality factual entertainment with inspiring stories of ordinary people who have made it big, insightful and practical information for you and your family to make the most out of your life, from entrepreneurship to cooking, how to deal with the kids or how to fix up the home. We tell stories with heart, passion and about  people believing in and achieving their dreams.                    </p>
               </div>
                        <a href="packages/97585f.html?platformTypes=1">DTH: Super</a>
               </div>
           </li><li class="slide">
                                  <a href="channeldetail/626.html">
                       <img class="channel-icon" src="Uploads/Picture/2016/10/14/s58009674a8b1a.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">
                   </a>
                              <div class="info">
                   <div style="height: 300px">
                   <h2 style="text-transform:uppercase;">FOX LIFE</h2>
                   <div style="line-height: 30px;width: 200px;">
                       <div class="ionespan">
                        <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>81</div>  <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dth_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>133</div>                        </div>

                    </div>
                   <p  style="color: #4A4A4A;margin-top: 10px; display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 10;overflow: hidden;">
                       FOX LIFE featuring a mixture of female skewing scripted non scripted content; local and international (NBC, Disney, Fremantle)                   </p>
               </div>
                        <a href="packages/95585f.html?platformTypes=1">DTH: Smart</a>
               </div>
           </li><li class="slide">
                                  <a href="channeldetail/628.html">
                       <img class="channel-icon" src="Uploads/Picture/2016/10/14/s58009674a89d3.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">
                   </a>
                              <div class="info">
                   <div style="height: 300px">
                   <h2 style="text-transform:uppercase;">NGW</h2>
                   <div style="line-height: 30px;width: 200px;">
                       <div class="ionespan">
                        <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>225</div>  <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dth_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>221</div>                        </div>

                    </div>
                   <p  style="color: #4A4A4A;margin-top: 10px; display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 10;overflow: hidden;">
                       NAT GEO WILD focused primarily on wildlife and natural history programming. It is a sister network to National Geographic Channel and it is the latest channel to be jointly launched by the National Geographic Society and Fox Cable Networks.Extraordinary tales from the natural world that ignite our audience’s passion for the world's wildest animals and most exhilarating places.                   </p>
               </div>
                        <a href="packages/10f76.html?platformTypes=0">DTT: Basic</a>
               </div>
           </li><li class="slide">
                                  <a href="channeldetail/444.html">
                       <img class="channel-icon" src="Uploads/Picture/2016/08/29/s57c42e55b5c75.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">
                   </a>
                              <div class="info">
                   <div style="height: 300px">
                   <h2 style="text-transform:uppercase;">ST World Football</h2>
                   <div style="line-height: 30px;width: 200px;">
                       <div class="ionespan">
                        <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dth_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>244</div>  <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>254</div>                        </div>

                    </div>
                   <p  style="color: #4A4A4A;margin-top: 10px; display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 10;overflow: hidden;">
                       World Football is a professional football channel, featuring exclusive, live and top-notch football matches around the world including the Bundesliga, Serie A, FIFA Club World Cup and International Champions Cup, etc. On average, there are 10 top-shelf matches live on World Football every week. You can also enjoy selected football magazine shows, highlights and football news, etc.                   </p>
               </div>
                        <a href="packages/550f76.html?platformTypes=0">DTT: Sport Plus</a>
               </div>
           </li><li class="slide">
                                  <a href="channeldetail/158.html">
                       <img class="channel-icon" src="Uploads/Picture/2016/10/14/s58009696d641f.png" onerror="onerror=null;src='/Public/static/images/PC_Product_160_120.png'">
                   </a>
                              <div class="info">
                   <div style="height: 300px">
                   <h2 style="text-transform:uppercase;">ST Bollywood</h2>
                   <div style="line-height: 30px;width: 200px;">
                       <div class="ionespan">
                        <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dth_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>550</div>  <div  style='float: left'><img  style='width:25px;height: auto' src='Public/static/newhome/images/dtt_channel_copy.png' /> </div><div  style='float: left;margin-right: 5px;'>500</div>                        </div>

                    </div>
                   <p  style="color: #4A4A4A;margin-top: 10px; display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 10;overflow: hidden;">
                       Exclusive on StarTimes' platform, a pure Bollywood movie channel, more artistic aims and more sophisticated stories, both inside and outside the Bollywood tradition. 3 subtitles and 7 audios you can pick from. With the best actress and first world first run every week                   </p>
               </div>
                        <a href="packages/20f76.html?platformTypes=0">DTT: Classic</a>
               </div>
           </li>
   </ul>
</div>

<script type="text/javascript">
    var channelsWidth = parseInt($('.channels-slider .slide').eq(0).width());
    $('.channels-slider').bxSlider({
        slideWidth: 220,
        minSlides: 4,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 10
    });
</script></div>
            <div id="widget-area-home-index-index-593f3e60a50472802" uniqid="home-index-index-593f3e60a50472802" class="widget-area"><div class="container self-service">
    <ul>
        <li>
            <a href="problem.html"><img class="self-icon" src="Uploads/Picture/2017/01/16/s587c839f611a9.png"></a>
            <p>FAQ</p>
        </li>
        <li>
            <a href="contact-us.html"><img class="self-icon" src="Uploads/Picture/2017/01/16/s587c839f6135c.png"></a>
            <p>CONTACT US</p>
        </li>
        <li>
            <a href="http://startv.com.ng:8080/selfservice/WSS2.4_public/Customer_login.action"><img class="self-icon" src="Uploads/Picture/2017/01/16/s587c839f614b9.png"></a>
            <p>SERVICE</p>
        </li>
    </ul>
</div></div>
            <div id="widget-area-home-index-index-593f3e60a5a30185" uniqid="home-index-index-593f3e60a5a30185" class="widget-area newad"><div  class="container channels" >
    <h1 class="title" >
        Products    </h1>
    <ul class="channels-slider" id="products_info">
                <li class="slide"  >
            <a href="Prodetail/1.html">
                <img class="product-img" style="max-height: 250px" src="Uploads/Picture/2017/02/05/s5896b4b9def59.png">
            </a>
            <h3 style="word-break:break-all;color: #FF8D00;font-size: 24px;margin-top: 35px;line-height: 24px;">Combo Decoder</h3><br>
            <span style="word-break:break-all;color: #4A4A4A;font-size: 14px;margin-top: 15px;">The new combo decoder works with both antenna and dish and offers all channels from both for the price of one. It also grants our esteemed customers access to over 100 channels across the genres with an enhanced high definition (HD) picture quality.</span><br>
            <span style="text-decoration:underline;color: #FF8D00;font-size: 14px;line-height: 40px">
                <a href="Prodetail/1.html">Read more</a>
            </span>
        </li>
                <li class="slide"  >
            <a href="Prodetail/2.html">
                <img class="product-img" style="max-height: 250px" src="Uploads/Picture/2016/12/29/s586486cd896d5.png">
            </a>
            <h3 style="word-break:break-all;color: #FF8D00;font-size: 24px;margin-top: 35px;line-height: 24px;">StarTimes HD Decoder</h3><br>
            <span style="word-break:break-all;color: #4A4A4A;font-size: 14px;margin-top: 15px;">Get the most out of your HD Television with the all new StarTimes Light HD DVB T2 Decoder</span><br>
            <span style="text-decoration:underline;color: #FF8D00;font-size: 14px;line-height: 40px">
                <a href="Prodetail/2.html">Read more</a>
            </span>
        </li>
                <li class="slide"  >
            <a href="Prodetail/3.html">
                <img class="product-img" style="max-height: 250px" src="Uploads/Picture/2016/12/29/s586486cd89a61.png">
            </a>
            <h3 style="word-break:break-all;color: #FF8D00;font-size: 24px;margin-top: 35px;line-height: 24px;">StarTimes TV – 24″</h3><br>
            <span style="word-break:break-all;color: #4A4A4A;font-size: 14px;margin-top: 15px;"></span><br>
            <span style="text-decoration:underline;color: #FF8D00;font-size: 14px;line-height: 40px">
                <a href="Prodetail/3.html">Read more</a>
            </span>
        </li>
                <li class="slide"  >
            <a href="Prodetail/4.html">
                <img class="product-img" style="max-height: 250px" src="Uploads/Picture/2016/12/29/s586486cd89c40.png">
            </a>
            <h3 style="word-break:break-all;color: #FF8D00;font-size: 24px;margin-top: 35px;line-height: 24px;">StarTimes 32″ Ultra Slim HD LED TV</h3><br>
            <span style="word-break:break-all;color: #4A4A4A;font-size: 14px;margin-top: 15px;"></span><br>
            <span style="text-decoration:underline;color: #FF8D00;font-size: 14px;line-height: 40px">
                <a href="Prodetail/4.html">Read more</a>
            </span>
        </li>
                <li class="slide"  >
            <a href="Prodetail/5.html">
                <img class="product-img" style="max-height: 250px" src="Uploads/Picture/2016/12/29/s586486cd89e25.png">
            </a>
            <h3 style="word-break:break-all;color: #FF8D00;font-size: 24px;margin-top: 35px;line-height: 24px;">StarTimes 40″ –FHDTV</h3><br>
            <span style="word-break:break-all;color: #4A4A4A;font-size: 14px;margin-top: 15px;">Startimes 3-in-1 Digital LED TV</span><br>
            <span style="text-decoration:underline;color: #FF8D00;font-size: 14px;line-height: 40px">
                <a href="Prodetail/5.html">Read more</a>
            </span>
        </li>
                <li class="slide"  >
            <a href="Prodetail/6.html">
                <img class="product-img" style="max-height: 250px" src="Uploads/Picture/2016/12/29/s586486cd898af.png">
            </a>
            <h3 style="word-break:break-all;color: #FF8D00;font-size: 24px;margin-top: 35px;line-height: 24px;">10m External Antenna</h3><br>
            <span style="word-break:break-all;color: #4A4A4A;font-size: 14px;margin-top: 15px;"></span><br>
            <span style="text-decoration:underline;color: #FF8D00;font-size: 14px;line-height: 40px">
                <a href="Prodetail/6.html">Read more</a>
            </span>
        </li>
            </ul>
</div>
<script type="text/javascript">
    $('#products_info').bxSlider({
        slideWidth: 296,
        minSlides: 3,
        maxSlides: 3,
        moveSlides: 1,
        slideMargin: 30
    });
</script>
</div>

    </div>

 </div>


    <div id="footer">
    <div class="block clearfix">
    	<div class="part">
    <h2>CONTACT US</h2>
    <div class="text">
        <!--<p>Afribank House,<br>Fatai Atere Way,<br>Oshodi, Lagos, Nigeria</p>-->
        <p>
            Telephone:<br>
            094618888,24 hours everyday<br/>014618888,7:00-20:00 everyday<br/>        </p>
        <!--<p>Email:<br><a href="mailto:newmedia@startimes.com">newmedia@startimes.com</a></p>-->
    </div>
</div>
        <div id="widget-area-home-index-index-593f3e60a6e6e8607" uniqid="home-index-index-593f3e60a6e6e8607" class="widget-area part"><h2>SITE MAP</h2>
<ul>
	<li><a href="index.html" target="_blank">Home</a></li><li><a href="tv_guide-2.html" target="_blank">TV Guide</a></li><li><a href="product-2.html" target="_blank">Products</a></li><li><a href="product-2.html" target="_blank">Bouquet</a></li><li><a href="http://startv.com.ng:8080/selfservice/WSS2.4_public/Customer_login.action" target="_blank">Self-Service</a></li><li><a href="legal.html" target="_blank">Legal Terms</a></li><li><a href="newslist-2.html" target="_blank">News</a></li></ul></div>
        <div id="widget-area-home-index-index-593f3e60a744e16" uniqid="home-index-index-593f3e60a744e16" class="widget-area part"><h2>HELP</h2>
<ul>
	<li><a href="problem-2.html" target="_blank">FAQ</a></li><li><a href="contact-us-2.html" target="_blank">Find Business Hall</a></li><li><a href="contact-us-2.html" target="_blank">Feedback</a></li></ul></div>
        <div class="part">
            <h2>SOCIAL</h2>
            <div id="widget-area-home-index-index-593f3e608bfd54534" uniqid="home-index-index-593f3e608bfd54534" class="widget-area btn"><a class="a2" target="_blank" href="https://www.facebook.com/StarTimesNG/"></a><a class="a1" target="_blank" href="https://twitter.com/StarTimes_Ng"></a><a class="a5" target="_blank" href="https://www.instagram.com/StarTimesNG/"></a><a class="a4" target="_blank" href="https://plus.google.com/u/0/+StarTimesNG"></a></div>
        </div>
    </div>
</div>
<div class="shadow" ></div>
<div class="login" ><a href="javascript:;" class="close"></a>
    <div class="inner">
        <div class="logo"><img src="Public/static/themes/image/STlogo_WHT.png"></div>
        <div class="form">
            <div class="line">
                <div class="ipt ico1">
                	<input id="login_username" name="username" type="text" style="width:235px;" placeholder="E-mail/phone number" class="" value="">
                </div>
                <p id="login_username_msg"></p>
            </div>
            <div class="line">
                <div class="ipt ico2">
                    <div class="passwd">
                    	<input type="password" id="login_pwd" name="pwd"  style="width:235px;text-align:left;" class="a">
                        <input type="text" style="width:235px;" placeholder="Password" class="b">
                    </div>
                </div>
                <p id="login_pwd_msg"></p>
            </div>
                        <input type="hidden" id="area-id" value=""/>
            <input type="hidden" id="area-number" value=""/>

        </div>
        <div class="button"><a class="btn_head_login" href="javascript:;">Log in</a></div>
        <div class="logbtn" id="third">
        <h3><a href="passport/forget_password.html">Forget Password?</a><br>OR</h3>
            <p>
                <a href="javascript:;" class="fb"></a>
                <!--
                <a href="javascript:;" class="tw"></a>
                -->
            </p>
        </div>
        <div class="b">Don't have an account? <a style="border-bottom:1px solid #fff;" href="passport/signup.html">Sign up</a></div>
    </div>
</div>

<script>
$('#third').find( ".fb" ).click(function(){
    var d = new Date()
    var gmt = "GMT" + d.getTimezoneOffset()/60;
	$.post( "Third/Index/getTokenUrl.html" , { key : 'facebook', gmt : gmt } , function( res ){
		if( res.status == 1 )
		{
			window.location.href = res.info;
		}else{
			my_alert( res.info );
			return false;
		}
	});
});

$('#third').find( ".tw" ).click(function(){
	var _this = $(this);
    var d = new Date()
    var gmt = "GMT" + d.getTimezoneOffset()/60;
	$.post( "Third/Index/getTokenUrl.html" , { key : 'twitter', gmt : gmt } , function( res ){
		if( res.status == 1 )
		{
			window.location.href = res.info;
		}else{
			my_alert( res.info );
			return false;
		}
	});
});

$(function(){
    $('#choose-area').find('li').click(function(){
        $('#area-id').val( $(this).attr('area-id') );
        $('#area-number').val( $(this).attr('area-number') );
    })
})

// 关闭登录窗口
$(".login .close").click(function(){

    $("#body,#focus,#footer").removeClass("blur");
    hidelayer(".login");
    $("#header .log .a").removeClass("act");
    // 清除修改密码保存的session，避免登录窗口一直打开
    $.post("Member/Passport/clear_reset_session.html", {}, function(data) {
        var logining = "" ? "" : 0;
        if ( logining ) {
            // 需要登录时，把登录窗口的关闭按钮，变成跳转首页
            window.location.href = "index.html";
        }
    });

});

</script>

    
</body>

<!-- Mirrored from www.startimestv.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2017 11:04:59 GMT -->
</html>