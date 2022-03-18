@extends('home.layouts.main')

@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
    <link href="/static/home/css/team.css" rel="stylesheet" /> {{--  首页的样式代码  --}}

    <div class="main6">
        <div class="container columns">

            {{--   公司团队    --}}

            <div class="case_box">
                <div class="category w1200">
                    <ul>
                        <li class="active">选址团队</li>
                        <li>设计团队</li>
                        <li>装修指导</li>
                        <li>技术团队</li>
                        <li>运营指导</li>
{{--                        <li>活动策划</li>--}}
                        <li>客服支持</li>
                    </ul>
                </div>
                <div class="content w1200">
                    <div class="cont active">

                        <div class="choose_address_team">
                            <img src="/static/home/images/choose_address_team.png" class="choose_address_team_img">

                        </div>
                        <div class="choose_address_title">
                            <img src="/static/home/images/choose_address_title.png" class="choose_address_title_img">
                        </div>
                        <div class="choose_address_content">
                            <p>
                                大数据选址分析，制定完整店面评估方案，为您提供具有市场消费力巨大的选址方案。用专业数据和多年选址经验为您贴心制定完整店面评估方案，从选址到周边环境为您负责，帮您把关。
                            </p>
                        </div>

                    </div>
                    <div class="cont">

                        <div class="design_team">
                            <img src="/static/home/images/design_team.png" class="design_team_img">

                        </div>
                        <div class="design_title">
                            <img src="/static/home/images/design_title.png" class="design_title_img">
                        </div>
                        <div class="design_content">
                            <p>
                                为餐饮创业者提供详细的室内设计方案,总部专业设计师合理布局，利用好门店的每一平方。根据门店实情，量身定制，专业指导装修设计，装修进度全程跟进。
                            </p>
                        </div>

                    </div>
                    <div class="cont">


                        <div class="decoration_team">
                            <img src="/static/home/images/decoration_team.png" class="decoration_team_img">

                        </div>
                        <div class="design_title">
                            <img src="/static/home/images/decoration_title.png" class="decoration_title_img">
                        </div>
                        <div class="decoration_content">
                            <p>
                                监督完整店面选址评估方案，监督店面整体装修进度、装修情况和食材质量选用等。按照标准化流程进行督察，提供专业门店管理指导，开业统筹一条龙服务以及门店整体装修开始至落地指导。
                            </p>
                        </div>

                    </div>
                    <div class="cont">

                        <div class="technology_team">
                            <img src="/static/home/images/technology_team.png" class="technology_team_img">

                        </div>
                        <div class="technology_title">
                            <img src="/static/home/images/technology_title.png" class="technology_title_img">
                        </div>
                        <div class="technology_content">
                            <p>
                                研发全新口味的产品，改良现有产品（比如缩减成本、改善质地和风味之类）。没有经验？不用担心，手把手实操教学。我们提供开业前全方位系统培训，
                                如产品培训、营销技能、管理技能等。
                            </p>
                        </div>

                    </div>
                    <div class="cont">


                        <div class="operation_team">
                            <img src="/static/home/images/operation_team.png" class="operation_team_img">

                        </div>
                        <div class="technology_title">
                            <img src="/static/home/images/operation_title.png" class="operation_title_img">
                        </div>
                        <div class="operation_content">
                            <p>
                                现场观摩门店实际经营过程，与各大门户网站合作，自有媒体运营团队，腾讯、微博、抖音、小红书，全方位媒体曝光。半城外专业运营团队运用多年专业经验，手把手教您吸客、 锁客、留客。
                            </p>
                        </div>


                    </div>
{{--                    <div class="cont">--}}


{{--                        <div class="operation_team">--}}
{{--                            <img src="/static/home/images/operation_team.png" class="operation_team_img">--}}

{{--                        </div>--}}
{{--                        <div class="technology_title">--}}
{{--                            <img src="/static/home/images/operation_title.png" class="operation_title_img">--}}
{{--                        </div>--}}
{{--                        <div class="operation_content">--}}
{{--                            <p>--}}
{{--                                活动策划--}}
{{--                            </p>--}}
{{--                        </div>--}}


{{--                    </div>--}}
                    <div class="cont">


                        <div class="customer_team">
                            <img src="/static/home/images/customer_team.png" class="customer_team_img">

                        </div>
                        <div class="technology_title">
                            <img src="/static/home/images/customer_title.png" class="customer_title_img">
                        </div>
                        <div class="customer_content">
                            <p>
                                客户服务（Customer Service），主要体现了一种以客户为导向的价值观，它整合及管理在预先设定的最优成本——服务组合中的客户界面的所有要素。
                                一对一跟踪，保障产品的标准化统一配送，服务每一位加盟商。一对一服务跟踪既节省了采购中浪费的金钱人力成本，又保证了操作好上手， 千店一味。
                            </p>
                        </div>


                    </div>
                </div>
            </div>
            <!--选项卡-->
            <script type="text/javascript">
                $(function() {
                    $('.category ul li').click(function() {
                        var i = $(this).index();
                        $(this).addClass('active').siblings().removeClass('active');
                        $('.content .cont').eq(i).addClass('active').siblings().removeClass('active');
                    })
                });
            </script>


            {{--   公司团队      --}}
            <div class="btn_box" style="margin-left: 45%;position: relative;left: -18%;top: 14px;" >
                <div class="btn">
                    <a href="/">返回首页</a>
                    <a href="/message">在线留言</a>
                    {{--                <a href="//tb.53kf.com/code/client/10165465/4">联系我们</a>--}}
                    {{--                    <a href="/news">新闻中心</a>--}}
                </div>
            </div>


        </div>

    </div>




@endsection
