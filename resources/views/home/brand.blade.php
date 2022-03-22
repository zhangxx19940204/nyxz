@extends('home.layouts.main')

@section('brand', 'active')
@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
    <style>
        .header_title{
            color: #2cae58;
        }
        .list-group li {
            color: #2cae58;
            font-size: large;
        }
    </style>

    <section class="section section-lg">
        <div class="container">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <!-- Bootstrap tabs -->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1"><!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">品牌故事</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">品牌亮点</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">品牌理念</a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">

                                    <div class="container">
                                        <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse align-items-center">
                                            <div class="col-md-10 col-lg-6 col-xxl-5">
                                                <div class="heading-decorate-wrap">
                                                    <h3 class="heading-decorate"><span class="heading-decorate-symbol font-weight-ubold">A</span><span class="header_title heading-decorate-main">品牌起源</span></h3>
                                                    <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">奶优小站，起源于全球乳业知名品牌————伊利乳业。百亿级乳业大咖玩转市场，携满级营销大号牛刀入市，降维打击。</span></p>
                                                    <p class="wow-outer">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">01.始于1993年</li>
                                                        <li class="list-group-item">02.千亿级乳业王者</li>
                                                        <li class="list-group-item">03.全球乳业五强</li>
                                                    </ul>
                                                    </p>
                                                    {{--                                        <div class="wow-outer button-outer"><a class="button button button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="about-us.html">Read More</a></div>--}}
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-lg-6 col-xxl-5">
                                                <div class="block-modern">
                                                    {{--                                        <div class="block-modern-overlay"></div>--}}
                                                    <div class="block-modern-image"><img class="img-responsive wow slideInLeft" src="/static/home/images/brand_left.png" alt="" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">

                                <section class="section section-lg text-center">
                                    <div class="container">
                                        <img src="/static/home/images/brand_light.png" />
                                    </div>
                                </section>

                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">

                                <section class="section section-lg text-center" >
                                    <div class="container">
                                        <img src="/static/home/images/brand_idea.png" />
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

@endsection
