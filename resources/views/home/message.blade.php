@extends('home.layouts.main')

@section('content')
    <?php
    $url_html = "";
    $url_query = "";
    ?>
{{--    <link href="/static/home/css/message.css" rel="stylesheet" /> --}}{{--  首页的样式代码  --}}

    <div class="main5">
        <div class="container columns main5_second_div">

            <div class="formMain">
                <h3>请在下方给我们留言，我们会尽快与您电话沟通</h3>
                <form>
                    <ul>
                        <li>
                            <span>姓名：</span>
                            <input type="text" id="messageName" value="">
                        </li>
                        <li id="messageSex">
                            <span class="sex">男</span><input type="radio" name="sex" value="男">
                            <span class="sex">女</span><input type="radio" name="sex" value="女">
                        </li>
                        <li>
                            <span>电话：</span>
                            <input type="text" id="messagePhone" value="">
                        </li>
                        <li>
                            <span>地址：</span>
                            <input type="text" id="messageAddress" value="">
                        </li>
                        <li>
                            <span>邮箱：</span>
                            <input type="text" id="messageEmail" value="">
                        </li>
                        <li>
                            <span>主题：</span>
                            <input type="text" id="messageTheme" value="">
                        </li>
                        <li>
                            <span>留言：</span>
                            <textarea id="messages" value=""></textarea>
                        </li>
                        <li>
                            <label>
                                <input type="reset" name="Submit2" value="错误重写" />
                            </label>
                            <label>
                                <input type="button" id="messageBtn" name="Submit" value="发布留言" />
                            </label>
                        </li>
                    </ul>
                </form>
            </div>



        </div>

        <div class="btn_box" style="margin-left: 45%;" >
            <div class="btn">
                <a href="/">返回首页</a>
{{--                <a href="/message">在线留言</a>--}}
                {{--                <a href="//tb.53kf.com/code/client/10165465/4">联系我们</a>--}}
                {{--                    <a href="/news">新闻中心</a>--}}
            </div>
        </div>

    </div>

    <script>
        $("#messageBtn").on("click",function(){
            var messageName = $("#messageName").val(),
                messagePhone = $("#messagePhone").val(),
                messageAddress = $("#messageAddress").val(),
                messageEmail = $("#messageEmail").val(),
                messageSex = $('#messageSex input[name="sex"]:checked').val()
            messageTheme = $("#messageTheme").val(),
                messages = $("#messages").val();

            if (!isPhoneAvailable(messagePhone)) {
                alert('请输入正确的手机号码');
                return;
            }

            var origin = null;
            if (/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                origin = "手机端";
            } else {
                origin = "电脑端";
            }

            var content = null;
            if(messages){
                content = messages;
            } else {
                content = '该用户没有添加留言内容';
            }

            $.ajax({
                type: "POST",
                url: "/createMessage",
                data: {
                    "name": messageName,
                    "phone": messagePhone,
                    "address": messageAddress,
                    "content": content,
                    "origin": window.location.href,
                    "description": origin
                },
                dataType: "json",
                success: function(data){
                    if (data.code) {
                        messageName = $("#messageName").val(''),
                            messagePhone = $("#messagePhone").val(''),
                            messageAddress = $("#messageAddress").val(''),
                            messageEmail = $("#messageEmail").val(''),
                            messageSex = $('#messageSex input[name="sex"]:checked').val('')
                        messageTheme = $("#messageTheme").val(''),
                            messages = $("#messages").val('');

                        alert(data.message);
                    }
                    else {
                        alert(data.msg);
                        window._agl && window._agl.push(['track', ['success', {t: 3}]])
                    }
                }
            });
        })
    </script>
@endsection
