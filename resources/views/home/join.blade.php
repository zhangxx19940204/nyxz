@extends('home.layouts.main')

@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
    <style>
        .technology_ul li div {
            /*display: inline;*/
            width: max-content;
            background-color: #2cae58;
            color: #fff;
            font-size: xx-large;
            margin-right: 5px;
            border-radius: 8px;
            margin-bottom: 5px;
        }
        .img-responsive {
            width: 100%;
            margin-top: 90px;
        }
        .home_news_ico{
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            color: #2cae58;
        }
        .join_ico_words a {
            color: #2cae58;
        }
        @media (min-width: 768px) {
            .layout-bordered-item {
                flex-basis: 33.333%;
                border-right-width: 0px;
            }
            .layout-bordered-item:first-child {
                border-left-width: 0px;
            }
        }
    </style>
    <section class="section section-lg oh">
        <div class="container"><!-- Isotope Filters-->
            <div class="isotope-filters isotope-filters-modern">
                <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                <ul class="isotope-filters-list" id="isotope-filters">
                    <li><a data-isotope-filter="advantage" data-isotope-group="gallery" href="#">合作优势</a></li>
                    <li><a data-isotope-filter="profit" data-isotope-group="gallery" href="#">盈利分析</a></li>
                    <li><a data-isotope-filter="process" data-isotope-group="gallery" href="#">合作流程</a></li>
                    <li><a data-isotope-filter="budget" data-isotope-group="gallery" href="#">费用预算</a></li>
                    <li><a data-isotope-filter="condition" data-isotope-group="gallery" href="#">选址条件</a></li>
                    <li><a data-isotope-filter="technology" data-isotope-group="gallery" href="#">技术支持</a></li>
                </ul>
            </div>
            <div class="isotope isotope-responsive row" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="advantage"><!-- 合作优势-->

                        <section class="section section-lg text-center" style="width: max-content;">
                            <div class="container">
                                <h3 class="wow-outer"><span class="wow slideInUp">合作电话：400-998-5757</span></h3>
                                <hr>
                                <h3 class="wow-outer"><span class="wow slideInUp">合作优势</span></h3>

                                <section class="section section-sm">
                                    <div class="container">
                                        <div class="layout-bordered join_ico_words">

                                            <div class="layout-bordered-item wow-outer">
                                                <div class="layout-bordered-item-inner wow slideInUp">
                                                    <img src="/static/home/images/join_ico1.png" />
                                                    <a class="link-default" href="#">规范化店面</a></div>
                                            </div>

                                            <div class="layout-bordered-item wow-outer">
                                                <div class="layout-bordered-item-inner wow slideInUp">
                                                    <img src="/static/home/images/join_ico2.png" />
                                                    <a class="link-default" href="#">专业设计</a></div>
                                            </div>

                                            <div class="layout-bordered-item wow-outer">
                                                <div class="layout-bordered-item-inner wow slideInUp">
                                                    <img src="/static/home/images/join_ico3.png" />
                                                    <a class="link-default" href="#">统一化运作</a></div>
                                            </div>

                                            <div class="layout-bordered-item wow-outer">
                                                <div class="layout-bordered-item-inner wow slideInUp">
                                                    <img src="/static/home/images/join_ico4.png" />
                                                    <a class="link-default" href="#">规范化管理</a></div>
                                            </div>

                                            <div class="layout-bordered-item wow-outer">
                                                <div class="layout-bordered-item-inner wow slideInUp">
                                                    <img src="/static/home/images/join_ico5.png" />
                                                    <a class="link-default" href="#">标椎化产品</a></div>
                                            </div>

                                            <div class="layout-bordered-item wow-outer">
                                                <div class="layout-bordered-item-inner wow slideInUp">
                                                    <img src="/static/home/images/join_ico6.png" />
                                                    <a class="link-default" href="#">专业化产品</a></div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>


                </div>
                {{--  盈利分析--}}
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="profit"><!-- Thumbnail Corporate-->

                    <section class="section section-lg text-center" style="width: max-content;">
                        <div class="container">

                            <img src="/static/home/images/join_condition_table.png" />
                        </div>
{{--                        <h3 class="wow-outer"><span class="wow slideInUp">集成装修物资按30平方计，具体根据实际情况测算</span></h3>--}}
                        {{--                        <div class="wow-outer button-outer"><a class="button button-lg button-primary-outline button-winona wow slideInUp" href="careers.html">View all Job Positions</a></div>--}}
                    </section>

                </div>
                {{--  合作流程--}}
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="process"><!-- Thumbnail Corporate-->

                    <section class="section section-lg section-last text-center" style="width: max-content;">
                        <h3 class="heading-decorate text-center">
                            <span class="heading-decorate-symbol font-weight-ubold">W</span>
                            <span class="heading-decorate-main home_news_ico">合作流程</span>
                        </h3>
                        <div class="container">

                            <img src="/static/home/images/join_process.png" style="width: 70%;margin-top: 10px;"/>
                        </div>

                    </section>

                </div>
                {{--  费用预算--}}
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="budget"><!-- Thumbnail Corporate-->

                    <section class="section section-lg text-center" style="width: max-content;">
                        <h3 class="wow-outer"><span class="wow slideInUp">投资费用明细分析</span></h3>
                        <div class="container">

                            <img src="/static/home/images/join_condition_table.png" />
                        </div>
                        <h3 class="wow-outer"><span class="wow slideInUp">集成装修物资按30平方计，具体根据实际情况测算</span></h3>
                        {{--                        <div class="wow-outer button-outer"><a class="button button-lg button-primary-outline button-winona wow slideInUp" href="careers.html">View all Job Positions</a></div>--}}
                    </section>

                </div>
                {{--  选址条件--}}
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="condition"><!-- Thumbnail Corporate-->

                    <section class="section section-lg text-center" style="width: max-content;">
                        <div class="container">
                            <h3 class="wow-outer"><span class="wow slideInUp">店面模式对应的服务模式、环境模式、工程条件</span></h3>
                            <img src="/static/home/images/join_condition_table.png" />
                        </div>
{{--                        <div class="wow-outer button-outer"><a class="button button-lg button-primary-outline button-winona wow slideInUp" href="careers.html">View all Job Positions</a></div>--}}
                    </section>

                </div>
                {{--  技术支持--}}
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="technology"><!-- 技术支持 -->

                    <section class="section section-lg" style="width: max-content;">
                        <div class="container">
                            <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
                                <div class="col-md-10 col-lg-6 col-xl-5">

                                    <ul class="list-group list-group-flush technology_ul">
                                        <li class="list-group-item"><div>技术研发支持</div><span>&nbsp;&nbsp;拥护“产、供销、研”为一体的专业团队积极研发适应大环境的产品构成；</span></li>
                                        <li class="list-group-item"><div>区域保障支持</div><span>&nbsp;&nbsp;总部严格控制加盟区域，初期设立1公里商圈保距范围（特殊情况可向公司申请）<br>保障加盟商的利益，让您投资的放心投资的安心。</span></li>
                                        <li class="list-group-item"><div>装修选址支持 </div><span>&nbsp;&nbsp;总部协助选择最佳开店地址，保证消费人群最大化。<br>总部提供店铺整体装修方案，让你拥有标椎化的店铺品牌形象；</span></li>
                                        <li class="list-group-item"><div>营销策划支持</div><span>&nbsp;&nbsp;专业的品牌策划团队为您的店铺提供节假日活动策划，吸引食客消费欲；</span></li>
                                        <li class="list-group-item"><div>系统培训支持</div><span>&nbsp;&nbsp;资深督导为您进行全方位的品牌运营培训，强大系统护航您的经营。</span></li>
                                    </ul>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-6"><img class="img-responsive" src="/static/home/images/join_left_ico.png" alt="" width="470" height="368"/></div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>


@endsection
