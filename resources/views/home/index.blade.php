@extends('home.layouts.main')

@section('home', 'active')
@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
    <link rel="stylesheet" type="text/css" href="/static/home/css/home_pro_mobile/style.css">


    <section class="section section-lg" style="color:#2cae58;background-image:url('/static/home/images/home_video_background.png'); background-repeat: round;background-size: contain;">
        <div class="container">
            <div class="home_brand_ico">
                <p>品牌简介</p>
                <span>Brand</span>
            </div>
            <div class="row row-50 justify-content-lg-between flex-lg-row-reverse offset-top-1">
                <div class="col-lg-7 col-xl-6">
                    <div class="heading-decorate-wrap">
                        <h3 class="heading-decorate"><span class="heading-decorate-symbol font-weight-ubold">F</span><span class="heading-decorate-main" style="color:#2cae58;">顶级大咖·伊利乳业</span><span style="font-size: x-large;color: #2cae58;margin-left: 80px;">——现调活菌酸奶饮</span></h3>
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
                                        <p>奶优小站，原料来自于全球乳业知名品牌——伊利乳业。<br/>
                                            百亿级乳业大咖玩转市场，携满级营销大号牛刀入市，降维打击。<br/>

                                            品牌核心价值点：奶源优、口味多、负担小、客源广<br/>
                                            超强基因：伊利天然牧场特供的优质奶源，更专业的技术，更放心的品质。<br/>
                                            口味创新：9大系列，几十款产品，涵盖酸奶、鲜奶、乳酸菌等多个品类，满足市场需求，男女老少都爱喝，客源更广。<br/>
                                            市场趋势：人手一杯的酸奶饮品，健康好喝无负担，自带流量。<br/>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow-outer" >
                    <img src="/static/home/images/play.png" class="videoed"/>
                    <img class="wow slideInLeft home_video_img" src="/static/home/images/home_video_img.jpg" alt="" width="470" height="368" />
                </div>
                <div class="videos"></div>
            </div>
        </div>
    </section>

{{--    首页  产品展示 pc 端--}}
    <section class="section section-lg compatible_product">
{{--        <div class="container">--}}
            <div class="productIndex">
        <div class="pro_1">
            <div class="pro_1_con">
                <div class="pro_1_left wow" style="visibility: visible;animation-delay:0.1s; animation-name: fadeInLeft">
                    <div class="title">紫水晶酸奶</div>
                    <div class="intro">精选优质酸奶</div>
                </div>
                <div class="pro_1_right">
                    <div class="pro_11 wow" style="visibility: visible;animation-delay:0.3s; animation-name:rotateInDownRight "><img src="/static/home/images/home_pro/pr_b_11.png"></div>
                    <div class="pro_12 wow" style="visibility: visible;animation-delay:0.5s; animation-name:fadeInUp "><img src="/static/home/images/home_pro/pr_b_12.png"></div>
                    <div class="pro_13 wow" style="visibility: visible;animation-delay:0.8s; animation-name: rotateInUpRight "><img src="/static/home/images/home_pro/pr_b_13.png"></div>
                    <img src="/static/home/images/home_pro/20210207092914_75643.png" class="p_img wow" style="visibility: visible;animation-delay:0.2s; animation-name: zoomIn;width:445px;">
                </div>
            </div>
        </div>
        <div class="pro_2">

            <div class="pro_2_con">
                <div class="pro_2_left">
                    <img src="/static/home/images/home_pro/20210621112259_57969.png" class="p_img wow" style="visibility: visible;animation-delay:0.2s; animation-name: bounceInLeft;width:445px;">
                </div>
                <div class="pro_2_ritht wow" style="visibility: visible;animation-delay:0.1s; animation-name: flipInX">
                    <div class="title">紫水晶酸奶</div>
                    <div class="intro">精选优质酸奶</div>
                </div>
            </div>
            <div class="pro_2_back wow" style="visibility: visible;animation-delay:0.8s; animation-name: slideInRight "><img src="/static/home/images/home_pro/pr_b_2.png"></div>

        </div>
        <div class="pro_3">
            <div class="pro_3_con">

                <div class="pro_3_left">
                    <div class="left_top wow" style="visibility: visible;animation-delay:1s; animation-name: fadeInDown "><img src="/static/home/images/home_pro/pr_b_31.png"></div>
                    <div class="left_con">
                        <div class="title">紫水晶酸奶</div>
                        <div class="intro">精选优质酸奶</div>
                    </div>
                </div>
                <div class="pro_3_right">
                    <img src="/static/home/images/home_pro/20210621112357_90211.png" class="p_img wow" style="visibility: visible;animation-delay:0.2s; animation-name: fadeInUp;width:445px;">
                    <img src="/static/home/images/home_pro/pr_b_32.png" class="po_img wow" style="visibility: visible;animation-delay:1s; animation-name: zoomIn">
                </div>
            </div>
        </div>
    </div>
{{--        </div>--}}
    </section>

    <section class="section section-lg mobile_product">

        <div class="m_Index">
            <div class="indProd">
                <div class="prd1">

                    <div class="img">
                        <div class="pl">
                            <img src="/static/home/images/home_pro_mobile/pr_1.png" class="pic1 wow" style="animation-delay:0.3s;animation-name: rotateInDownRight">
                            <img src="/static/home/images/home_pro_mobile/pr_2.png" class="pic2 wow" style="animation-delay:0.5s;animation-name: fadeInUp">
                            <img src="/static/home/images/home_pro_mobile/pr_3.png" class="pic3 wow" style="animation-delay:0.8s;animation-name: rotateInUpRight">
                        </div>
                        <img src="/static/home/images/home_pro_mobile/20210207092914_75643.png" class="pr wow" style="animation-delay:0.1s;animation-name: zoomIn">
                    </div>
                    <div class="rig wow" style="animation-delay:0.1s;animation-name: fadeIn">
                        <div class="t">紫水晶酸奶</div>
                        <div class="c">精选优质酸奶</div>
                    </div>

                </div>
                <div class="prd2">

                    <div class="rig wow" style="animation-delay:0.1s;animation-name: fadeIn">
                        <div class="t">紫水晶酸奶</div>
                        <div class="c">精选优质酸奶</div>
                    </div>
                    <div class="img">
                        <img src="/static/home/images/home_pro_mobile/20210621112259_57969.png" class="pr wow" style="animation-delay:0.1s;animation-name: fadeInUp">
                    </div>
                    <div class="img_pr"><img src="/static/home/images/home_pro_mobile/pr_b2s.png"></div>

                </div>
                <div class="prd3">

                    <div class="img">
                        <img src="/static/home/images/home_pro_mobile/pr_4.png" class="rlc wow" style="animation-delay:0.8s;animation-name: zoomIn">
                        <img src="/static/home/images/home_pro_mobile/20210621112357_90211.png" class="pr wow" style="animation-delay:0.1s;animation-name:fadeInUp ">
                    </div>
                    <img src="/static/home/images/home_pro_mobile/pr_b3.png" class="rlb">
                    <div class="rig wow" style="animation-delay:0.2s;animation-name: fadeIn">
                        <div class="t">紫水晶酸奶</div>
                        <div class="c">
                            精选优质酸奶
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>


{{--    首页 店面展示--}}
    <section class="section section-lg" style="padding: 0px;">
        <div class="container">
            <div class="row row-50 row-xxl-70">

                <div class="col-md-12 scaleFadeInWrap"><!-- Post Modern-->
                    <div class="wow scaleFadeIn">
                        <article class="post-modern post-modern-media">
                                <img src="/static/home/images/home_store_01.png" alt="" width="571" height="353"/>
                        </article>
                    </div>
                </div>
                <div class="col-md-6 scaleFadeInWrap"><!-- Post Modern-->
                    <div class="wow scaleFadeIn">
                        <article class="post-modern post-modern-media">
                                <img src="/static/home/images/home_store_02.png" alt="" width="571" height="353"/>
                        </article>
                    </div>
                </div>
                <div class="col-md-6 scaleFadeInWrap"><!-- Post Modern-->
                    <div class="wow scaleFadeIn">
                        <article class="post-modern post-modern-media">
                                <img src="/static/home/images/home_store_03.png" alt="" style="height: 356px;width: 576px;" width="571" height="353"/>
                        </article>
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

                        <div class="home_news_ico">
                            <p>合作流程</p>
                            <span>Cooperation process</span>
                        </div>

                            <div>
                                <img src="/static/home/images/home_join.png">
                            </div>
                            <div>
{{--                                <button id="btn_consultation" style="background-color: #2cae58;color: #FFFFFF;" type="button" class="btn btn-success btn-lg"><span style="font-size: xx-large">投资费用</span></button>--}}
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

                <div class="col-lg-12">
                    <div style="height:550px;border:#ccc solid 1px;font-size:12px" id="map"></div>
                </div>

                <div class="col-lg-12 col-xl-12">
                    <div class="inset-right-3">

                        <div class="col-md-12 col-lg-12">
                            {{--                            <h5 class="text-uppercase font-weight-bold">联系我们</h5>--}}
                            {{--                            <hr>--}}
                            <ul class="list-sm" style="text-align: center;">
                                <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="#">杭州市钱塘区下沙街道元成路199号 <br>
                                        龙驰智慧谷B座17楼</a></li>
                                <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span>
                                    <ul class="list-0">
                                        <li><a class="link-default" href="tel:4009985757">400-998-5757</a></li>
                                    </ul>
                                </li>
                                <li class="object-inline"><span class="icon icon-md mdi mdi-email-outline text-gray-700"></span><a class="link-default" href="mailto:#">1852786950@qq.com</a></li>
                            </ul>
                        </div>

                    </div>
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
            let platform_code = judge_platform()
            $(".home_video_img").click(function(){ //这个视频被点击后执行
                console.log(platform_code)
                let video = 'http://static.wintersweet.cn/nyxz/20220324_nyxz.mp4';//获取视频路径
                if (platform_code == '1'){
                    //pc
                    $('.videos').html("<video id=\"video\" style='width: 640px' src='"+video+"' preload=\"auto\" controls=\"controls\" autoplay=\"autoplay\"></video><img onClick=\"close1()\" class=\"vclose\" src=\"/static/home/images/gb.png\" width=\"25\" height=\"25\"/>");
                    $('.videos').show();
                }else{
                    window.open(video,'_blank');
                }

            });
            $(".videoed").click(function(){ //这个视频被点击后执行
                console.log(platform_code)
                let video = 'http://static.wintersweet.cn/nyxz/20220324_nyxz.mp4';//获取视频路径
                if (platform_code == '1'){
                    //pc
                    $('.videos').html("<video id=\"video\" style='width: 640px' src='"+video+"' preload=\"auto\" controls=\"controls\" autoplay=\"autoplay\"></video><img onClick=\"close1()\" class=\"vclose\" src=\"/static/home/images/gb.png\" width=\"25\" height=\"25\"/>");
                    $('.videos').show();
                }else{
                    window.open(video,'_blank');
                }
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
            let myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
            if (!myreg.test(phone)) {
                return false;
            } else {
                return true;
            }
        }

        function judge_platform(){
            //平台、设备和操作系统

            let system = {

                win: false,

                mac: false,

                xll: false,

                ipad: false

            };

            //检测平台

            let p = navigator.platform;
            console.log(p);

            system.win = p.indexOf("Win") == 0;

            system.mac = p.indexOf("Mac") == 0;

            system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);

            system.ipad = (navigator.userAgent.match(/iPad/i) != null) ? true : false;
            if (system.win || system.mac || system.xll || system.ipad) {
                //pc
                return 1;
            } else {

                //切换到手机页面
                return 0;

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
