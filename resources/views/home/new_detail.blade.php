@extends('home.layouts.main')

@section('news', 'active')
@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
    <style>
        .container {
            padding: 30px 0;
            /*width: 1172px;*/
            margin: 0 auto;
        }

        /*  新改新闻详情页样式  */
        .crumbTab {
            line-height: 30px;
            display: flex;
            justify-content: space-between;
            margin-bottom:20px;
        }
        .tab a {
            display:inline;
            color:#000;
        }
        .tab a:last-child {
            color: #4a5bff;
        }
        .catalog a{
            border: 1px solid #535353;
            color: #aca194;
            font-size: 12px;
            padding: 0 20px;
            border-radius: 15px;
        }
        .news_box h1 {
            text-align: center;
            line-height: 64px;
        }
        .newsText {
            line-height: 28px;
            text-indent: 2em;
            font-size: 14px;
        }
        .newsText img {
            display: block;
            margin: 0 auto;
        }
        .newsText a {
            display: inline;
        }
        .turn {
            margin-top: 20px;
        }
        .turnMenu a{
            color: #4a5bff!important;
            display:inline;
        }
        .turn a{
            color: #aca194
        }
        /*  新改新闻详情页样式 END */
        .pagination {
            display: flex;
        }

        .pagination li {
            margin: 0 8px;
        }
        .news_box {
            border: 5px solid #000;
            padding: 30px;
            width: auto;
            box-sizing: border-box;
            margin: 0 auto;
            /*color: #fff;*/
        }
        .news_box h1 {
            text-align: center;
            line-height: 64px;
            font-size: 36px;
        }
        .tab {
            padding: 15px;
        }
        .turn {
            padding: 15px;
        }

    </style>
    <div class="main_box">
        <div class="container">
            <div class="crumbTab">
                <p class="tab">
                    <span>当前位置：</span>
                    <a href="/<?php echo $url_query;?>">首页 &gt; </a>
                    <a href="/news/<?php echo $url_html.$url_query;?>">新闻中心 &gt; </a>
                    <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">{{$new_detail->title}}</a>
                </p>
            </div>
            <div class="news_box">
                <h1 class="news_title">{{$new_detail->title}}</h1>
                <div class="newsText">

                    <div><?php echo html_entity_decode($new_detail->content, 1);?></div>

                </div>
{{--                <div class="btn_box">--}}
{{--                    <div class="btn">--}}
{{--                        <a href="/<?php echo $url_html.$url_query;?>">返回首页</a>--}}
{{--                        <a href="/message<?php echo $url_html.$url_query;?>">在线留言</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

            <div class="turn">
                <div class="turnMenu">
                    <span>下一篇：</span>
                    <?php if(empty($last_info)){ ?>
                        <a href="/news">没有更多的文章了</a>
                    <?php }else{?>
                    <a href="<?php echo '/new_detail/'.$last_info->id;?><?php echo $url_query;?>"><?php echo $last_info->title;?></a>
                    <?php }?>
                </div>

            </div>








        </div>
    </div>


@endsection

