<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <?php
    if(!empty($page_info)){
        $title = $page_info['page_title'];
        $keywords = $page_info['page_keywords'];
        $description = $page_info['page_description'];
    }else{
        $title = '';
        $keywords = '';
        $description = '';
    }
    ?>
    <title><?php echo $title;?></title>
    <meta name="keywords" content="<?php echo $keywords;?>"/>
    <meta name="description" content="<?php echo $description;?>"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="/static/home/css/bootstrap.css">
    <link rel="stylesheet" href="/static/home/css/fonts.css">
    <link rel="stylesheet" href="/static/home/css/style.css" id="main-styles-link">

</head>

<body>

<?php
$url_query = '';
$first_url_arr = parse_url($_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]);
if(array_key_exists('query',$first_url_arr)) {
    $first_query_arr = explode('&', $first_url_arr['query']);
    $second_query_array = [];
    foreach($first_query_arr as $key=>$value){
        if(strpos($value,'page=') !== false || strpos($value,'news_type=') !== false || $value == 'f=wtr'){
            //这为分页参数和新闻类别参数

        }else{
            //不为分页参数
            $second_query_array[] = $value;
        }
    }
    if(empty($second_query_array)){
        $url_query = '';
    }else{
        $url_query = '?'.implode('&',$second_query_array);
    }
}
$url_html = "";
?>

    <!-- 共用模块 -->
<div class="page">


    <section class="section page-header-navbar rd-navbar-outer jumbotron-classic bg-gray-700">
        <header class="section page-header"><!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-minimal rd-navbar-minimal-wide" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main"><!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel"><!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <a class="rd-navbar-brand" href="/"><img src="/static/home/images/logo-inverse-246x44.png" alt="" width="246" height="44" srcset="/static/home/images/logo-inverse-487x88.png 2x"/></a></div>

                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap"><!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item @yield('home','')"><a class="rd-nav-link" href="/">首页</a></li>
                                        <li class="rd-nav-item @yield('brand','')"><a class="rd-nav-link" href="/brand">品牌介绍</a></li>
                                        <li class="rd-nav-item @yield('product','')"><a class="rd-nav-link" href="/product">产品展示</a></li>
                                        <li class="rd-nav-item @yield('store','')"><a class="rd-nav-link" href="/store">店面展示</a></li>
                                        <li class="rd-nav-item @yield('news','')"><a class="rd-nav-link" href="/news">新闻中心</a></li>
                                        <li class="rd-nav-item @yield('join','')"><a class="rd-nav-link" href="/join">品牌合作</a></li>
                                        <li class="rd-nav-item @yield('contacts','')"><a class="rd-nav-link" href="/contacts">联系我们</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-autoplay="4500" data-simulate-touch="false">
            <div class="swiper-wrapper">

                <div class="swiper-slide" data-slide-bg="/static/home/images/banner_01.png">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-xl-7">
                                    <div class="heading-decorate-wrap">
                                        <h1 class="heading-decorate text-large">
                                            <span class="heading-decorate-symbol font-weight-ubold">O</span>
                                            <span class="heading-decorate-main">
                                                <span class="font-weight-ubold">芒果酸奶刨冰</span>
                                                <span class="font-weight-light" style="">MANGO YOGURT SHAVED ICE</span>
                                            </span>
                                        </h1>
                                        <a class="button button-secondary button-winona" href="/product" data-wow-delay=".4s">详情查看</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="/static/home/images/banner_02.png">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-xl-7">
                                    <div class="heading-decorate-wrap">
                                        <h1 class="heading-decorate text-large">
                                            <span class="heading-decorate-symbol font-weight-ubold">O</span>
                                            <span class="heading-decorate-main">
                                                <span class="font-weight-ubold">草莓酸奶刨冰</span>
                                                <span class="font-weight-light" style="">STRAWBERRY YOGURT SHAVED ICE</span>
                                            </span>
                                        </h1>
                                        <a class="button button-secondary button-winona" href="/product" data-wow-delay=".4s">详情查看</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="/static/home/images/banner_03.png">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-xl-7">
                                    <div class="heading-decorate-wrap">
                                        <h1 class="heading-decorate text-large">
                                            <span class="heading-decorate-symbol font-weight-ubold">O</span>
                                            <span class="heading-decorate-main">
                                                <span class="font-weight-ubold">西柚酸奶刨冰</span>
                                                <span class="font-weight-light" style="">POMELO YOGURT SHAVED ICE</span>
                                            </span>
                                        </h1>
                                        <a class="button button-secondary button-winona" href="/product" data-wow-delay=".4s">详情查看</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination swiper-pagination-custom"></div>
        </div>
    </section>





    @section('content')

    @show


    <!-- Page Footer-->
    <footer class="section footer-linked ">
        <div class="footer-linked-main">
            <div class="container">
                <div class="row row-50">
                    <div class="col-lg-8">
                        <h5 class="text-uppercase font-weight-bold">友情链接</h5>
                        <hr class="offset-right-1">
                        <div class="row row-20">
                            <div class="col-12 col-sm-3">
                                <ul class="list list-xs">
                                    @foreach ($links as $link)
                                        <li><a href="{{ $link->url }}" target="_blank">{{ $link->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-7 col-lg-4">
                        <h5 class="text-uppercase font-weight-bold">与我们联系</h5>
                        <hr>
                        <ul class="list-sm">
                            <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="#"> 杭州市钱塘区下沙元成路199号 <br>
                                    龙驰科创园B座17楼</a></li>
                            <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span>
                                <ul class="list-0">
                                    <li><a class="link-default" href="tel:4009985757">400-998-5757</a></li>
                                    <!-- <li><a class="link-default" href="">1-800-8765-098</a></li> -->
                                </ul>
                            </li>
                            <li class="object-inline"><span class="icon icon-md mdi mdi-email-outline text-gray-700"></span><a class="link-default" href="mailto:#">1852786950@qq.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-linked-aside">
            <div class="container"><!-- Rights-->
                <p class="rights">

                    <span>&copy;&nbsp; <span class="copyright-year"></span> &nbsp 奶优小站 &nbsp;All Rights By <a href="#">杭州德胜品牌管理有限公司</a> &nbsp;版权所有</span>
                    <span style="margin-left: 9%;"><a class="ICP" href="https://beian.miit.gov.cn/#/Integrated/index"
                                                      target="_blank">浙ICP备2021040075号-1</a></span>
                    <span style="margin-left: 4%;">投资有风险 合作需谨慎</span>
                </p>

            </div>
        </div>
    </footer>

</div>



</body>
<script src="/static/home/js/jquery.min.js"></script>
<script src="/static/home/js/swiper.min.js"></script>
<script src="/static/home/js/core.min.js"></script>
<script src="/static/home/js/script.js"></script>
<script src="/static/home/js/cityselect.js"></script>




{{--判定设备类型--}}
<script>
    // //平台、设备和操作系统
    //
    // let system = {
    //
    //     win: false,
    //
    //     mac: false,
    //
    //     xll: false,
    //
    //     ipad: false
    //
    // };
    //
    // //检测平台
    //
    // let p = navigator.platform;
    // console.log(p);
    //
    // system.win = p.indexOf("Win") == 0;
    //
    // system.mac = p.indexOf("Mac") == 0;
    //
    // system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
    //
    // system.ipad = (navigator.userAgent.match(/iPad/i) != null) ? true : false;
    // if (system.win || system.mac || system.xll || system.ipad) {
    //
    // } else {
    //
    //     window.location.href = "/mobile";//切换到手机页面
    //
    // }
</script>
<!-- 53 -->


<script>
    // var _hmt = _hmt || [];
    // (function() {
    //     let hm = document.createElement("script");
    //     hm.src = "https://hm.baidu.com/hm.js?6b71b80cfa80192f6c24d5f32783c30e";
    //     let s = document.getElementsByTagName("script")[0];
    //     s.parentNode.insertBefore(hm, s);
    // })();
</script>

</html>
