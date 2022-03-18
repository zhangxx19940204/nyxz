@extends('home.layouts.main')

@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
    <style>
        .home_brand_ico {
            text-align: center;
            font-size: 28px;
            font-weight: 600;
        }
        .videos{ display:none; border: 1px solid #080808; position:fixed; left:50%; top:50%; margin-left:-320px; margin-top:-210px; z-index:1090; width:640px; height:360px; }
        .vclose { position:absolute;right:1%; top:1%; border-radius:100%; cursor: pointer; }
        .videoed { display:none; width:50px; height:50px; position: absolute; left:45%; top:45%; z-index:99; border-radius:100%; }

        .home_product_img1{
            top: -104px;
            position: relative;
        }
        .home_product_img2{
            position: relative;
            top: -339px;
        }
        .home_product_img3{
            position: relative;
            top: -546px;
        }
        .home_product_div3{
            position: absolute;
        }
        .li_stand {

            margin: 0 auto;

            height: 140px;

            writing-mode: vertical-lr;/*从左向右 从右向左是 writing-mode: vertical-rl;*/

            writing-mode: tb-lr;/*IE浏览器的从左向右 从右向左是 writing-mode: tb-rl；*/

        }
        .home_news_ico{
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            color: #2cae58;
        }
        .home_online_message_ico {
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            color: #2cae58;
        }
        /*.post-modern-title a {*/
        /*    overflow: hidden;*/
        /*    white-space: nowrap;*/
        /*    text-overflow: ellipsis;*/
        /*}*/


    </style>


    <section class="section section-lg" style="color:#2cae58;background-image:url('/static/home/images/home_video_background.png'); background-repeat: round;background-size: contain;">
        <div class="container">
            <div class="home_brand_ico">
                <p>品牌简介</p>
                <span>Brand</span>
            </div>
            <div class="row row-50 justify-content-lg-between flex-lg-row-reverse offset-top-1">
                <div class="col-lg-7 col-xl-6">
                    <div class="heading-decorate-wrap">
                        <h3 class="heading-decorate"><span class="heading-decorate-symbol font-weight-ubold">F</span><span class="heading-decorate-main" style="color:#2cae58;">顶级大咖·伊利乳业</span></h3>
                        <!-- Bootstrap collapse-->
                        <div class="card-group-custom card-group-corporate wow-outer" id="accordion2" role="tablist" aria-multiselectable="false"><!--Bootstrap card-->
                            <article class="card card-custom wow fadeInDown" data-wow-delay=".05s">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a id="accordion2-card-head-fkfutyjm" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-card-body-lxekxbgl" aria-controls="accordion2-card-body-lxekxbgl" aria-expanded="true" role="button">
                                            <div class="card-arrow"></div>
                                        </a></div>
                                </div>
                                <div class="collapse show" id="accordion2-card-body-lxekxbgl" aria-labelledby="accordion2-card-head-fkfutyjm" data-parent="#accordion2" role="tabpanel">
                                    <div class="card-body">
                                        <p>奶优小站，起源于全球乳业知名品牌 —— <br/>—— 伊利乳业。百亿级乳业大咖玩转市场，<br/>携满级营销大号牛刀入市，<br/>降维打击。</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow-outer" >
                    <img src="/static/home/images/play.png" ipath="https://blz-videos.nosdn.127.net/1/OverWatch/OVR-S03_E03_McCree_REUNION_zhCN_1080P_mb78.mp4" class="videoed"/>
                    <img class="wow slideInLeft home_video_img" ipath="https://blz-videos.nosdn.127.net/1/OverWatch/OVR-S03_E03_McCree_REUNION_zhCN_1080P_mb78.mp4" src="/static/home/images/home_video_img.jpg" alt="" width="470" height="368" />
                </div>
                <div class="videos"></div>
            </div>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse align-items-center">
                <div class="col-md-12 col-lg-12 col-xxl-12">
                    <div class="heading-decorate-wrap">
                        <div class="home_product_div1">
                            <img src="/static/home/images/home_product_01.png" class="home_product_img1">
                        </div>
                        <div class="home_product_div2">
                            <img src="/static/home/images/home_product_02.png" class="home_product_img2">
                        </div>
                        <div class="home_product_div3">
                            <img src="/static/home/images/home_product_03.png" class="home_product_img3">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse align-items-center">
                <div class="col-md-12 col-lg-12 col-xxl-12">
                    <div class="heading-decorate-wrap" style="text-align: center;">


{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <ul class="list-group list-group-horizontal li_stand">--}}
{{--                                    <li class="list-group-item"><span>1</span>合作咨询</li>--}}
{{--                                    <li class="list-group-item"><span>2</span>意向洽谈</li>--}}
{{--                                    <li class="list-group-item"><span>3</span>合作签约</li>--}}
{{--                                    <li class="list-group-item"><span>4</span>审查确定</li>--}}
{{--                                    <li class="list-group-item"><span>5</span>选址评估</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col">--}}
{{--                                2 of 3--}}
{{--                            </div>--}}
{{--                            <div class="col">--}}
{{--                                <ul class="list-group list-group-horizontal li_stand">--}}
{{--                                    <li class="list-group-item"><span>6</span>装修设计</li>--}}
{{--                                    <li class="list-group-item"><span>7</span>物资筹备</li>--}}
{{--                                    <li class="list-group-item"><span>8</span>培训考核</li>--}}
{{--                                    <li class="list-group-item"><span>9</span>店铺试营</li>--}}
{{--                                    <li class="list-group-item"><span>10</span>开店营业</li>--}}
{{--                                    <li class="list-group-item"><span>11</span>运营盈利</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                            <div>
                                <img src="/static/home/images/home_join.png">
                            </div>
                            <div>
                                <button id="btn_consultation" style="background-color: #2cae58;color: #FFFFFF;" type="button" class="btn btn-success btn-lg"><span style="font-size: xx-large">投资费用</span>（点击查看）<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index" viewBox="0 0 16 16">
                                        <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 1 0 1 0V6.435a4.9 4.9 0 0 1 .106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 0 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.035a.5.5 0 0 1-.416-.223l-1.433-2.15a1.5 1.5 0 0 1-.243-.666l-.345-3.105a.5.5 0 0 1 .399-.546L5 8.11V9a.5.5 0 0 0 1 0V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v5.34l-1.2.24a1.5 1.5 0 0 0-1.196 1.636l.345 3.106a2.5 2.5 0 0 0 .405 1.11l1.433 2.15A1.5 1.5 0 0 0 6.035 16h6.385a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z"/>
                                    </svg></button>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="home_news_ico">
                <p>新闻中心</p>
                <span>News center</span>
            </div>
            <div class="row row-50 row-xxl-70">

                @foreach ($news as $new)
                    <div class="col-md-6 scaleFadeInWrap"><!-- Post Modern-->
                        <div class="wow scaleFadeIn">
                            <article class="post-modern">
                                <a class="post-modern-media" href="#">
{{--                                    <img src="images/grid-blog-1-571x353.jpg" alt="" width="571" height="353"/>--}}
                                </a>
                                <h4 class="post-modern-title"><a href="/new_detail/{{$new->id}}">{{  $new->title }}</a></h4>
                                <ul class="post-modern-meta">
                                    <li>by 奶优站长</li>
                                    <li>
                                        <time datetime="2022">{{  $new->updated_at }}</time>
                                    </li>
                                    <li><a class="button-winona" href="#">新闻中心</a></li>
                                </ul>
                                <p>{{ $new->summary }}</p>
                            </article>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="home_news_ico">
                <p>联系我们</p>
                <span>Contact us</span>
            </div>

            <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse align-items-center">
                <div class="col-lg-6 col-xl-5">
                    <div class="inset-right-3" style="margin-left: 10%;">

                        <div class="col-md-12 col-lg-12">
                            <h5 class="text-uppercase font-weight-bold">联系我们</h5>
                            <hr>
                            <ul class="list-sm">
                                <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="#">杭州市钱塘区下沙街道元成路199号 <br>
                                        龙驰智慧谷B座17楼</a></li>
                                <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span>
                                    <ul class="list-0">
                                        <li><a class="link-default" href="">400-998-5757</a></li>
                                    </ul>
                                </li>
                                <li class="object-inline"><span class="icon icon-md mdi mdi-email-outline text-gray-700"></span><a class="link-default" href="mailto:#">1852786950@qq.com</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="width:700px;height:550px;border:#ccc solid 1px;font-size:12px" id="map"></div>
                </div>
            </div>

        </div>
    </section>

    <section class="section bg-gray-100 section-buba section-lg">
        <div class="container">
            <div class="row section-buba-row justify-content-center row-40">
                <div class="col-lg-8 col-xl-6">
                    <div class="heading-decorate-wrap">
                        <h3 class="heading-decorate">
                            <span class="heading-decorate-symbol font-weight-ubold">C</span><span class="heading-decorate-main home_online_message_ico">在线留言</span>
                        </h3>
                        <!-- RD Mailform--><!-- RD Mailform-->
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="#">
                            <div class="row row-10">
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-phone">姓名</label>
                                        <input class="form-input" id="contact_name" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-phone">手机号</label>
                                        <input class="form-input" id="contact_phone" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-message">留言</label>
                                        <textarea class="form-input" id="contact_message" name="message"></textarea>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div class="group group-middle">
                            <div class="wow-outer">
                                <button class="button button-primary button-winona wow slideInRight" id="home_message_btn" type="submit">点击提交</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-6 section-buba-col">
                    <div class="section-buba-image"><img src="/static/home/images/contact-big-1-874x742.jpg" alt="" width="874" height="742"/></div>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=T38BTxHIa8DfpPCCQvVg0tyFVLYEBll4"></script>
    <script>
        window.onload = function () {  //事件处理函数
            console.log('页面加载完毕');
            $('.videoed').show();
            $(".home_video_img").click(function(){ //这个视频被点击后执行
                let video = $(this).attr('ipath');//获取视频路径
                $('.videos').html("<video id=\"video\" style='width: 640px' src='"+video+"' preload=\"auto\" controls=\"controls\" autoplay=\"autoplay\"></video><img onClick=\"close1()\" class=\"vclose\" src=\"/static/home/images/gb.png\" width=\"25\" height=\"25\"/>");
                $('.videos').show();
            });
            $(".videoed").click(function(){ //这个视频被点击后执行
                let video = $(this).attr('ipath');//获取视频路径
                $('.videos').html("<video id=\"video\" style='width: 640px' src='"+video+"' preload=\"auto\" controls=\"controls\" autoplay=\"autoplay\"></video><img onClick=\"close1()\" class=\"vclose\" src=\"/static/home/images/gb.png\" width=\"25\" height=\"25\"/>");
                $('.videos').show();
            });

            //
            $("#btn_consultation").click(function (){
                window.location.href="/join";
            });

            //获取留言信息
            $("#home_message_btn").click(function (){
                $("#home_message_btn").attr("disabled","disabled");
                $("#home_message_btn").html('提交中');
                let name = $("#contact_name").val(),
                    phone = $("#contact_phone").val(),
                    prov = '',
                    city = '',
                    message = $("#contact_message").val();
                if (!isPhoneAvailable(phone)) {
                    alert('请输入正确的手机号码');
                    $("#home_message_btn").removeAttr("disabled");
                    $("#home_message_btn").html('点击提交');
                    return false;
                }
                let origin = null;
                if (/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                    origin = "手机端";
                } else {
                    origin = "电脑端";
                }
                let content = null;
                if(message){
                    content = message;
                } else {
                    content = '该用户没有添加留言内容';
                }
                let dizhi = null;
                if(prov || city){
                    dizhi =  prov + "-" + city;
                } else {
                    dizhi = '';
                }
                $.ajax({
                    type: "POST",
                    url: "/createMessage",
                    data: {
                        "name": name,
                        "phone": phone,
                        "address": dizhi,
                        "content": content,
                        "origin": window.location.href,
                        "description": origin
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    success: function(data){
                        if (data.code) {
                                $("#contact_name").val('')
                                $("#contact_phone").val('')
                                $("#contact_message").val('')
                                alert(data.message);
                        }
                        else {
                                alert(data.message);
                        }
                        $("#home_message_btn").removeAttr("disabled");
                        $("#home_message_btn").html('点击提交');
                    },
                    error: function (e){
                        $("#home_message_btn").removeAttr("disabled");
                        $("#home_message_btn").html('点击提交');
                        alert('网站开小差了，请咨询页面客服');
                    }
                });

            });
        }
        function close1(){
            var v = document.getElementById('video');//获取视频节点
            $('.videos').hide();//点击关闭按钮关闭暂停视频
            v.pause();
            $('.videos').html();
        }

        function isPhoneAvailable(phone) {
            var myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
            if (!myreg.test(phone)) {
                return false;
            } else {
                return true;
            }
        }

    </script>

    <script type="text/javascript">
        //创建和初始化地图函数：
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMapOverlay();//向地图添加覆盖物
        }
        function createMap(){
            map = new BMap.Map("map");
            map.centerAndZoom(new BMap.Point(120.348342,30.338586),17);
        }
        function setMapEvent(){
            map.enableScrollWheelZoom();
            map.enableKeyboard();
            map.enableDragging();
            map.enableDoubleClickZoom()
        }
        function addClickHandler(target,window){
            target.addEventListener("click",function(){
                target.openInfoWindow(window);
            });
        }
        function addMapOverlay(){
            var markers = [
                {content:"我的备注",title:" 杭州德胜品牌管理有限公司",imageOffset: {width:0,height:3},position:{lat:30.337978,lng:120.348449}}
            ];
            for(var index = 0; index < markers.length; index++ ){
                var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
                var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                        imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                    })});
                var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
                var opts = {
                    width: 200,
                    title: markers[index].title,
                    enableMessage: false
                };
                var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
                marker.setLabel(label);
                addClickHandler(marker,infoWindow);
                map.addOverlay(marker);
            };
        }
        //向地图添加控件
        function addMapControl(){
            var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
            scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
            map.addControl(scaleControl);
            var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
            map.addControl(navControl);
            var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
            map.addControl(overviewControl);
        }
        var map;
        initMap();
    </script>
@endsection
