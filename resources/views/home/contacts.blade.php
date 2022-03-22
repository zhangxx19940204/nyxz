@extends('home.layouts.main')

@section('contacts', 'active')
@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
    <style>
        .home_online_message_ico {
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            color: #2cae58;
        }
        .home_news_ico{
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            color: #2cae58;
        }
    </style>

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
