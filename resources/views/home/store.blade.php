@extends('home.layouts.main')

@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>

    <style>
        .home_news_ico{
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            color: #2cae58;
        }
        .news_page {
            width: 80%;
            /* text-align: center; */
            padding-left: 39%;
            font-size: 21px;
            padding-top: 20px;
        }
        .page .text-gray-700 {
            color: #fa9046;
        }
    </style>
    <section class="section section-lg section-last text-center">
        <div class="container">
            <h3 class="heading-decorate text-center"><span class="heading-decorate-symbol font-weight-ubold">W</span><span class="heading-decorate-main home_news_ico">店铺展示</span></h3>
            <div class="row row-50">
                @foreach ($store_list as $store)
                    <div class="col-sm-6 col-lg-4"><!-- Profile Minimal-->
                        <article class="profile-minimal"><img class="profile-minimal-image" src="{{ $store->url }}" alt="" width="370" height="368"/>
                            <div class="profile-minimal-caption">
                                <h4 class="profile-minimal-title">{{ $store->store_name }}</h4>
                                {{--                                <p class="profile-minimal-position">Chief Technology Officer</p>--}}
                            </div>
                        </article>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="news_page">
            {{ $store_list->links() }}
        </div>
    </section>
@endsection
