<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>糖果屋-砂板糖_砂板糖制作_砂板糖培训_砂板糖批发</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="renderer" content="webkit">
    <meta name="author" content="糖果屋">
    <meta name="keywords" content="砂板糖,砂板糖制作,砂板糖熬制,砂板糖配方,砂板糖培训,砂板糖批发,砂板糖咽炎,特产网,特产培训">
    <meta name="description" content="糖果屋是一个专注于老北京特产制作培训,砂板糖批发代理,砂板糖是一种糖果类食品，属于药膳，非药物也非保健品,北方及东北地区称“罗卜糖”，天津及北京虽也属北方但却有其独自的称呼，天津称其“茶膏糖”，北京则称之“药糖”、“ 大罗卜膏糖”、“ 砂板糖” ">
    <meta name="base-static-url" content="https://tangguohome.com">
    <link rel="stylesheet" type="text/css" href="/css/index/build.css">
    <link href="/favicon.ico" type="image/x-icon" rel=icon>
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="/css/sweetalert.css" rel="stylesheet">
    <link href="{{ elixir('./css/app.css') }}" rel="stylesheet">
    <!-- player styling -->
    <link rel="stylesheet" type="text/css" href="/Media/flowplayer-6.0.5/skin/minimalist.css">
</head>
<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
<body>
<div id="login-reg-warp" class="login-reg-warp-modal"></div>
<style>
    .lhw-player{
        background-color: #000;
        -webkit-background-size: 50%;
        background-size: 50%;
        background-position: 50% -100%;

        /*-webkit-transition: background 1s 0.5s;*/
        /*-moz-transition: background 1s 0.5s;*/
        /*-ms-transition:background 1s 0.5s;*/
        /*-o-transition:background 1s 0.5s;*/
        /*transition: background 1s 0.5s;*/

        -webkit-transition: all 1s 0.5s;
        -moz-transition: all 1s 0.5s;
        -ms-transition:all 1s 0.5s;
        -o-transition:all 1s 0.5s;
        transition: all 1s 0.5s;
    }
    .is-poster{
        -webkit-background-size: 100%;
        background-size: 100%;
        background-position: 50% 50%;
    }
    .is-mouseover{
        opacity: .8;
        -webkit-background-size: 103%;
        background-size: 103%;
    }
    .lhw-player .fp-ration{
        padding-top: 80.5%;
    }
    .lhw-player {
        height: 400px;
    }
</style>
<!--[if lt IE 9]>
<style>
    .search-box{
        background-color: #fff !important;
    }
    header .header-column{
        background-color: #fff !important;
    }
    header .navbar-right,header .navbar-left{
        margin-top: -15px;
    }
    .icon-search{
        position: relative;
        top: 18px;
    }
    body{
        border: none;
    }
    .praise-box-add,.icon-like-prompt,.icon-no-like-prompt{
        display: none;
    }
</style>
<![endif]-->
<header id="top" role="banner" class="transition active">
    <div class="container">
        <div class="navbar-header transition" style="width: 110px">
            <a href="/" title="首页">
                <img src="/images/system/logo.png" alt="糖果屋" title="首页">
            </a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li class="nav-news js-show-menu">
                <ul class="header-column header-column-zx menu-box" onmouseover="isOut=false" onmouseout="isOut=true" style="opacity: 0; margin-top: 70px; display: none;">
                    <li><a href="https://www.tangguohome.com" target="_blank" class="transition">砂板糖</a></li>
                    <li><a href="#" target="_blank" class="transition">芝麻糖</a></li>
                    <li><a href="#" target="_blank" class="transition">高粱饴</a></li>
                </ul>
                <a href="javascript:" class="header-zixun">资讯 <span class="caret"></span></a>
            </li>
            <li class="nav-news"><a href="#" target="_blank">推荐<span class="nums-prompt nums-prompt-topic" style="display: none;"></span></a></li>
            <li class="nav-news"><a href="{{ url('/shabantang') }}" target="_blank">活动</a></li>
            <!--<li class="nav-news"><a href="{{ url('/oauth') }}" target="_blank">糖果授权</a></li>-->
        </ul>

        <ul class="nav navbar-nav navbar-right transition">
            <!--<li class="app-guide js-app-guide">
                <div class="app-guide-box" style="opacity: 0; margin-top: 0px; display: none;">
                    <img src="/images/system/1448211685.png">
                    <div class="app-guide-title">
                        <span>微信扫一扫</span><br>
                        <span>下载tangguohome客户端</span>
                    </div>
                </div>
                <i class="icon icon-sm-phone"></i>客户端<em class="guide-prompt" style="display: none;"></em>
            </li>-->
            {{--<li class="search-li js-show-search-box"><i class="icon icon-search "></i><span>搜索</span></li>--}}
            @if (Auth::guest())
                <li class="login-link-box"><a class="js-login" href="{{ url('/login') }}">登录</a></li>
                <li><a class="js-register" href="{{ url('/register') }}">注册</a></li>
            @else
                <li class="user-head js-show-menu">
                    <div class="header-column header-column-user menu-box logined" onmouseover="isOut=false" onmouseout="isOut=true">
                        <a href="#" name="menu" class="transition">评论回复<span class="badge comment_message"></span></a>
                        <a href="#" name="menu" class="transition">系统通知<span class="badge system_message"></span></a>
                        <a href="#"  class="transition">私信<span class="badge private_message"></span></a>
                        <a href="{{ url('/logout') }}" class="transition js-btn-logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">退出登录</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <a class="avatar transition" style="padding-top:2px">
                        <span class="icon-s"></span>
                        <img src="{{ Auth::user()->avatar }}"><span class="caret"></span>
                        <em class="message-num nums"></em>
                    </a>
                </li>
            @endif

            <li><a class="js-open-contribute transition" style="padding-top:2px" target="_blank" href="{{ url('questions/create') }}">提问</a></li>
        </ul>
    </div>
</header>
@yield('content')
<div id="flash-message">
    @if (session()->has('flash_notification.message'))
        <div class="alert alert-{{ session('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! session('flash_notification.message') !!}
        </div>
    @endif
</div>

<footer class="footer">
    <div class="modal-backdrop fade in js-modal-backdrop" style="display: none;"></div>
    <div class="feedback-box" onmouseover="is_feedback=false" onmouseout="is_feedback=true" style="display: none;">
        <div class="close-box pull-right js-feedback-close" data-show="true">
            <i class="icon icon-close"></i>
        </div>
        <div class="will-choose">*</div>
        <textarea id="content" class="form-control" placeholder="请输入反馈，我们将为您不断改进"></textarea>
        <input class="form-control" id="contact" placeholder="请输入手机/邮箱">
        <a class="btn btn-article pull-left js-feedback-submit transition">提交</a><span class="will-choose-error">请输入反馈信息</span>
    </div>
    <div class="go-top go-feedback transition" style="display: block;">
        <div class="js-show-feedback-box">
            用户反馈
        </div>
    </div>
    <div class="go-top go-feedback app-feedback js-app-feedback transition" style="display: block;">
        <div class="app-footer-guide " style="height: 150px">
            <img src="/images/system/1450293529.png">
            <span style="color: #333;line-height:2;">微信扫一扫</span>
        </div>
        <div class="">
            <i class="icon icon-big-phone"></i>
            客户端
        </div>
    </div>
    <div class="go-top js-go-top transition" id="go-top-btn" style="display: block; bottom: 151px;"><i class="icon icon-top"></i></div>

    <div class="container copy-right">
        <div class="footer-tag-list">
            <a href="https://www.tangguohome.com" target="_blank" class="transition">关于我们</a>
            <a href="https://www.tangguohome.com" target="_blank" class="transition">加入我们</a>
            <a href="https://www.tangguohome.com" target="_blank" class="transition">合作伙伴</a>
            <a href="javascript:" target="_blank" class="transition js-show-feedback-box min-feedback" style="display: none;">用户反馈</a>
        </div>
        <span>Copyright © <a href="https://www.tangguohome.com/">糖果屋</a> <a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP备12035787号-2</a>
        </span>
        <div class="footer-icon-list pull-right">
            <ul>
                <a><li class="Qr-code-footer">
                        <div class="app-qrcode">
                            <img src="/images/system/qrcode.jpg">
                        </div>
                        <i class="icon icon-footer icon-footer-wx"></i>
                    </li>
                </a>
                <!--<a><li class="Qr-code-footer">
                        <div class="app-qrcode" style="opacity: 0; margin-top: -150px; display: none;">
                            <img src="/images/system/app_erweima.png">
                        </div>
                        <i class="icon icon-footer icon-footer-ios"></i>
                    </li>
                </a>
                <a><li class="Qr-code-footer">
                        <div class="app-qrcode" style="opacity: 0; margin-top: -150px; display: none;">
                            <img src="/images/system/app_erweima.png">
                        </div>
                        <i class="icon icon-footer icon-footer-android"></i>
                    </li>
                </a>-->
                <a href="http://en.tangguohome.com/" target="_blank" title="糖果屋英文版">
                    <li><i class="icon icon-footer icon-footer-inter"></i></li>
                </a>
                <!--<a href="http://www.tangguohome.com/" target="_blank" title="糖果屋RSS订阅中心">
                    <li><i class="icon icon-footer icon-footer-rss"></i></li>
                </a>-->
            </ul>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script src="{{elixir('/js/app.js')}}"></script>
<script src="/js/sweetalert.min.js"></script>
<!-- flowplayer.js -->
<script type="text/javascript" src="/Media/flowplayer-6.0.5/flowplayer.min.js"></script>
<script>
    flowplayer.conf.volume = '0.7'
    flowplayer.conf.fullscreen = false
    flowplayer.conf.embed = false
</script>
@yield('js')
@if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::pull('sweet_alert.alert') !!});
    </script>
@endif
<script>
    var _hmt = _hmt || [];
    _hmt.push(['_setAccount', '324368ef52596457d064ca5db8c6618e']);

    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(300);
    $('.lhw-player').flowplayer();

    $('.avatar').mousemove(
       function(){
           $('.header-column').show();
       }
    )
    $('.logined').hover(
        function(){
            $('.header-column').show();
        },
        function (){
            $('.header-column').hide();
        }
    )
    $('.header-zixun').hover(
        function(){
            $('.menu-box').show().css({ opacity:1});
        }
    )
    $('.menu-box').hover(
        function(){
            $(this).show().css({ opacity:1});
        },
        function(){
            $(this).hide().css({ opacity:0});
        }
    )
    $('.icon-footer-wx').hover(
        function(){
           $(this).parent().find('.app-qrcode').show().css({ opacity:1});
        },
        function(){
           $(this).parent().find('.app-qrcode').hide().css({ opacity:0});
        }
    )
    $(function(){
        $('.story-box-warp .story-detail-hide').click(function(){
            var a=$(this);a.parents("li").removeClass("story-open"),a.parent().slideUp(),a.parent().next().show(),a.parent().prev().attr("story-data-show","false")
        })
        $(document).on("click",".story-title",function() {
            var a=$(this),b=a.parents("li");"false"==a.attr("story-data-show")?(_hmt.push(["_trackEvent","京味内容点开","点击","点击"]),a.css("font-weight","600"),b.addClass("story-open"),b.find(".story-info").slideDown(),b.find(".story-time-footer").hide(),b.addClass("dropup"),a.attr("story-data-show","true")): (a.css("font-weight","500").removeClass("dropup"),b.removeClass("story-open"),b.find(".story-info").slideUp(),b.find(".story-time-footer").show(),b.removeClass("dropup"),a.attr("story-data-show","false"))
        })
    })
</script>
</body>
</html>

