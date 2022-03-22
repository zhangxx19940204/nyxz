@extends('home.layouts.main')

@section('news', 'active')
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
{{--                                    <li><a class="button-winona" href="/news">新闻中心</a></li>--}}
                                </ul>
                                <p>{{ $new->summary }}</p>
                            </article>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="news_page">
                {{ $news->links() }}
            </div>

        </div>
    </section>

@endsection
