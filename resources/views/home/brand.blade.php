@extends('home.layouts.main')

@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
    <style>
        .heading-decorate-main{
            color: #2cae58;
        }
        .list-group li {
            color: #2cae58;
            font-size: large;
        }
    </style>
    <section class="section section-lg oh">
        <div class="container"><!-- Isotope Filters-->
            <div class="isotope-filters isotope-filters-modern">
                <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                <ul class="isotope-filters-list" id="isotope-filters">
                    <li><a data-isotope-filter="tale" data-isotope-group="gallery" href="#">品牌故事</a></li>
                    <li><a data-isotope-filter="highlight" data-isotope-group="gallery" href="#">品牌亮点</a></li>
                    <li><a data-isotope-filter="idea" data-isotope-group="gallery" href="#">品牌理念</a></li>
                </ul>
            </div>
            <div class="isotope isotope-responsive row" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="tale"><!-- Thumbnail Corporate-->

                    <section class="section section-lg" style="width: max-content;">
                        <div class="container">
                            <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse align-items-center">
                                <div class="col-md-10 col-lg-6 col-xxl-5">
                                    <div class="heading-decorate-wrap">
                                        <h3 class="heading-decorate"><span class="heading-decorate-symbol font-weight-ubold">A</span><span class="heading-decorate-main">品牌起源</span></h3>
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
                                <div class="col-md-10 col-lg-6">
                                    <div class="block-modern">
{{--                                        <div class="block-modern-overlay"></div>--}}
                                        <div class="block-modern-image"><img class="img-responsive wow slideInLeft" src="/static/home/images/brand_left.png" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="highlight"><!-- Thumbnail Corporate-->

                    <section class="section section-lg text-center"  style="width: max-content;">
                        <div class="container">
                            <img src="/static/home/images/brand_light.png" />
                        </div>
                    </section>

                </div>
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="idea"><!-- Thumbnail Corporate-->

                    <section class="section section-lg text-center"  style="width: max-content;">
                        <div class="container">
                            <img src="/static/home/images/brand_idea.png" />
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
@endsection
