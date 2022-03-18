@extends('home.layouts.main')

@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
    <link href="/static/home/css/about.css" rel="stylesheet" /> {{--  首页的样式代码  --}}

        <div class="main7_2">
            <div class="container columns">
                <div class="main7_2_top_img"><img src="/static/home/images/home-brand-bg1.png"> </div>

                <div class="main7_2_content_eight">

                    <div class="company_introduce">
                        <img src="/static/home/images/company_introduce_icon.png" class="company_introduce_icon">
                    </div>
                    <div>
                        <p>杭州德胜企业管理有限公司成立于2014年，简称德胜企业，总部坐落于美丽的杭州，是一家以餐饮连锁经营与品牌管理为一体的国际集团。公司专注餐饮行业，整合全国
                            资源，不断推进餐饮互联网化，孵化高品质、高标准、创新型特色餐饮品牌，全力打造极具竞争力的创新餐饮商业模式，通过特许经营建立渠道，形成品牌连锁体系，传播
                            “诚朴善真”的企业文化，拥有产品研发、品牌推广、招商项目合作、运营管理完整体系，团队现有400余人。
                        </p>
                        <p>
                            目前，旗下品牌共开设合作店700余家，足迹遍布浙江、陕西、山东、河南、甘肃、安徽、江苏、贵州、江西、辽宁、黑龙江、广东、湖北、湖南、四川、西藏、新疆、
                            海南等20多个省市地区。
                        </p>
                        <p>
                            德胜企业致力于标准化餐饮管理、流程化餐饮实操，从原产地食材到门店营销策划管理，建立完整的餐饮操作系统，保证食材安全、优化用餐环境，指导投资者进行有效的
                            餐饮管理、经营、营销策划，以流程化、标准化、系统化为工具，打造干净整洁、安全环保、美味好口碑的餐饮品牌。
                            成立时间：2018年5月立项杭州，开始品牌策划，18年8月6日注册成立德胜企业，同年12月定品牌半城外，于2019年3月垄断购买半城外品牌商标，同年7月公证商标归属
                            德胜企业，至此半城外牛杂火锅成立！
                        </p>
                        <p>

                        </p>
                    </div>
                    <div class="company_img_div">
                        <img src="/static/home/images/about_us-image1.png" class="company_img">
                    </div>

                    {{--  商务部备案的 icon    --}}
                    <div class="business_beian_icon">
                        <img src="/static/home/images/business_beian_icon.png" class="business_beian_icon">
                    </div>

                    <div class="business_beian_div">
                        <img src="/static/home/images/about_us-image2.png" class="business_beian_img">
                    </div>

                    {{--  我们的合作伙伴 icon    --}}
                    <div class="us_partner_icon">
                        <img src="/static/home/images/my_partne.png" class="us_partner_icon">
                    </div>

                    <div class="us_partner_div">
                        <img src="/static/home/images/us-image-jingdong.png" class="us_partner_img1">
                        <img src="/static/home/images/us-image-nanfangairpoot.png" class="us_partner_img2">
                    </div>

                    {{--  食材供应 icon    --}}
                    <div class="provide_food_icon">
                        <img src="/static/home/images/food_provide.png" class="provide_food_icon">
                    </div>

                    <div class="provide_food_div">
                        <div>
                            <p>
                                餐饮做的好，选材是关健，我们的肉品选材是很讲究的，与海底捞共享食材资源，冷链运送到全国各门店，保证
                                每家门店食客都吃到的都是最新鲜的肉品。
                            </p>
                        </div>
                        <img src="/static/home/images/us-image-shuhai.png" class="provide_food_img1">
                    </div>


                </div>

            </div>
        </div>

        <div class="btn_box">
            <div class="btn">
                <a href="/">返回首页</a>
                <a href="/message">在线留言</a>
{{--                <a href="//tb.53kf.com/code/client/10165465/4">联系我们</a>--}}
                <a href="/brand">品牌优势</a>
            </div>
        </div>




@endsection
