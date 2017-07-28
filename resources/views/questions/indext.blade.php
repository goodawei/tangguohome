@extends('layouts.appt')
@section('content')
<div class="placeholder-height"></div>
<div class="container" id="index" style="padding-right: 0px">
    <div class="wrap-left pull-left">
        <div class="" style="margin-bottom: 33px">
            <div data-ratio="0.6" class="lhw-player is-splash fixed-controls play-button"  style="background: url(/images/system/072308263858.jpg) no-repeat 50% 50%;background-size: 100%;">
                <video data-title="老北京砂板糖/茶膏糖"  loop preload="none">
                    <source type="video/flash" src="Media/砂板糖.mp4">
                </video>
            </div>
        </div>

        <div class="big-pic-box">
            <!--一级banner图-->
            @if(isset($recomond[0]))
            <div class="big-pic">
                <a href="/questions/{{ $recomond[0]['id'] }}" target="_blank" class="transition" title="{{ $recomond[0]['title'] }}">
                    <div class="back-img">
                        <img src="/images/system/910_683.jpg" alt="{{ $recomond[0]['title'] }}">
                    </div>
                    <div class="big-pic-content">
                        <h1 class="t-h1">{{ $recomond[0]['title'] }}</h1>
                    </div>
                </a>
            </div>
            @endif
            <!--二级banner图-->
            @if(isset($recomond[1]))
            <div class="big2-pic big2-pic-index big2-pic-index-top">
                <a href="/questions/{{ $recomond[1]['id'] }}" class="back-img transition" target="_blank" title="{{ $recomond[1]['title'] }}">
                    <img class="lazy" data-original="" alt="{{ $recomond[1]['title'] }}" src="/images/system/463_351.jpg" style="display: inline;">
                </a>
                <a href="/questions/{{ $recomond[1]['id'] }}" target="_blank" title="{{ $recomond[1]['title'] }}">
                    <div class="big2-pic-content">
                        <h2 class="t-h1">{{ $recomond[1]['title'] }}</h2>
                    </div>
                </a>
            </div>
            @endif
            @if(isset($recomond[2]))
            <div class="big2-pic big2-pic-index big2-pic-index-bottom">
                <a href="/questions/{{ $recomond[2]['id'] }}" class="back-img transition" target="_blank" title="{{ $recomond[2]['title'] }}">
                    <img class="lazy" data-original="" alt="{{ $recomond[2]['title'] }}" src="/images/system/463_351_2.jpg" style="display: inline;">
                </a>
                <a href="/questions/{{ $recomond[2]['id'] }}" target="_blank" >
                    <div class="big2-pic-content">
                        <h2 class="t-h1">{{ $recomond[2]['title'] }}</h2>
                    </div>
                </a>
            </div>
            @endif
        </div>

        <!--文章列表-->
        <div class="mod-info-flow">
            @foreach($questions as $question)
                @if($question->is_special == 'N')
                <div class="mod-b mod-art " data-aid="177689">
                    <!--栏目链接-->
                    <div class="mod-thumb">
                        <a class="transition" title="{{ $question->title }}" href="/questions/{{ $question->id }}" target="_blank">
                            <img class="lazy" data-original="" alt="{{ $question->title }}" src="/images/system/15510337665_{{ mt_rand(1,5) }}.jpg" style="display: inline;">
                        </a>
                    </div>
                    @foreach($question->topics as $topic)
                        <a href="/topic{{ $topic->id }}" class="topic column-link" target="_blank"> {{ $topic->name }}</a>
                    @endforeach
                    <div class="mob-ctt">
                        <h2>
                            <a href="/questions/{{ $question->id }}" class="transition msubstr-row2" target="_blank">{{ $question->title }}</a>
                        </h2>

                        <div class="mob-author">
                            <div class="author-face">
                                <a href="#" target="_blank"><img src="{{ $question->user->avatar }}"></a>
                            </div>
                            <a href="#" target="_blank">
                                <span class="author-name ">{{ $question->user->name }}</span>
                            </a>
                            <a href="https://www.tangguohome.com/vip" target="_blank" title="VIP"></a>
                            <i class="i-icon icon-auth1" title="{{ $question->user->name }}"></i>
                            <span class="time">{{ $question->created_at->diffForHumans() }}</span>
                            <i class="icon icon-cmt"></i><em>{{ $question->followers_count }}</em>
                            <i class="icon icon-fvr"></i><em>{{ $question->answers_count }}</em>
                        </div>

                        <!--外部文章/内部文章两者取其一-->
                        <div class="mob-sub">{!! $question->body  !!}</div>
                    </div>
                </div>
                @else
                    <!--特殊文章列表由编辑推送-->
                    <div class="mod-b mod-art mod-b-push">
                        <a class="transition" href="/questions/{{ $question->id }}" target="_blank" title="{{ $question->title }}">
                            <div class="mod-thumb">
                                <img class="lazy" data-original="" alt="{{ $question->title }}" src="/images/system/1561161075_{{ mt_rand(1,3) }}.jpg" style="display: inline;">
                            </div>
                        </a>
                        @foreach($question->topics as $topic)
                            <a href="/topic{{ $topic->id }}" class="topic column-link" target="_blank"> {{ $topic->name }}</a>
                        @endforeach
                        <div class="mob-ctt">
                            <h2><a href="/questions/{{ $question->id }}" class="transition msubstr-row5" target="_blank">{{ $question->title }}</a></h2>

                            <div class="mob-author">
                                <div class="author-face">
                                    <a href="#" target="_blank"><img class="lazy" data-original="{{ $question->user->avatar }}" src="{{ $question->user->avatar }}" style="display: inline;"></a>
                                </div>
                                <a href="#" target="_blank">
                                    <span class="author-name">{{ $question->user->name }}</span>
                                </a>
                                <a href="https://www.tangguohome.com" target="_blank"></a>
                                <i class="i-icon icon-auth1" title="糖果屋认证作者"></i>
                                <span class="time">{{ $question->created_at->diffForHumans() }}</span>
                            </div>

                            <div class="mob-sub">{!! $question->body  !!}</div>
                        </div>
                    </div>
                @endif

            @endforeach

        </div>

        <!--<div class="get-mod-more js-get-mod-more-list transition" data-cur_page="1" data-last_dateline="1483838460">-->
        <!--点击加载更多-->
        <!--</div>-->


    </div>
    <div class="wrap-right pull-right">
        <!--京味部分开始-->
        <div id="story_center"></div>
        <div class="box-moder moder-story-list">
            <h3>京味</h3>
            <span class="pull-right project-more story-more"><a href="" class="transition" target="_blank">全部</a></span>
            <span class="span-mark"></span>
            <div class="story-box-warp">
                <div class="nano has-scrollbar">
                    <div class="overthrow nano-content description" tabindex="0" style="right: -17px;">
                        <ul class="box-list">

                            <li>
                                <div class="story-content">
                                    <div class="story-title" story-data-show="false">
                                        <p class="transition"><span class="icon icon-caret"></span>山东特产--芝麻糖</p>
                                    </div>
                                    <div class="story-info" style="display:none">
                                        <p class="story-detail-hide">芝麻糖，是菏泽地区传统食品，有条形，平板形，色泽乳白，体亮晶明，香甜酥脆，味道纯正可口，营养丰富，并有和胃顺气、止咳和医治便秘等作用。已有200余年的历史。也属于山东美食——芝麻糖：山东菏泽市鄄城糖牛楼制作芝麻糖已有二三百年的历史。香脆可口，绿色营养，集五谷（小麦、小米、大米、黍子、麻）之精华，进多重发酵手工制作的传统休闲食品，至今还是老少皆宜的健康食品。&nbsp;<a href="" target="_blank" class="transition">详情&gt;&gt;</a></p>
                                        <div class="story-time">
                                            <p class="time">20小时前</p>
                                            <p class="like">
                                            </p><div class="article-type pull-right">
                                                <div class="icon-like-prompt">
                                                    <i class="icon icon-like active"></i><span class="c1">+1</span>
                                                </div>
                                                <ul>
                                                    <li class="js-icon-like-new load-count-list" data-type="like" data-id="2091" data-product="story"><i class="icon icon-like "></i><span class="like agree-count">4</span></li>
                                                </ul>
                                            </div>
                                            <p></p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="story-time story-time-footer">
                                        <p class="time">20小时前</p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="story-content">
                                    <div class="story-title" story-data-show="false">
                                        <p class="transition"><span class="icon icon-caret"></span>砂板糖简介</p>
                                    </div>
                                    <div class="story-info" style="display:none">
                                        <p class="story-detail-hide">砂板糖（药糖）之所以不再称为药糖是因商家需尊照相关法规将食品与药品区分开来；该物既然是药膳就应有它一定的功能，但这里必须强调指岀，依国家相关法规，所有食品的包装、标签以及产品说明书均不可带有具医疗作用的宣传语，法规旨在禁止虚假宣传误导消费，是为了保护广大公众利益，也是商家必须尊守的法令，而本文只从历史文化的角度介绍，历史上的经营者对药糖曾有过功能性的宣传，而目前，规范的商品（指砂板糖或其他药膳类食品、饮料）不将其功能标注于包装或说明书上。 好的药膳食品其配料并不是很繁杂，药膳糖果——砂板糖是以食糖为主料再适当加入中草药作为辅助配料； “本草纲目” 中将很多食品列为药材，并系统的分为：果部、木部、草部、兽部，即很多食材为药食同源，好的药膳均应是药食同源的材料组成，砂板糖（药糖）即是典型的一例；有些药糖也适当添加了人工香料，是商家迎合市场的需求也丰富了商品的品种和口味。&nbsp;<a href="" target="_blank" class="transition">详情&gt;&gt;</a></p>
                                        <div class="story-time">
                                            <p class="time">12小时前</p>
                                            <p class="like">
                                            </p><div class="article-type pull-right">
                                                <div class="icon-like-prompt">
                                                    <i class="icon icon-like active"></i><span class="c1">+1</span>
                                                </div>
                                                <ul>
                                                    <li class="js-icon-like-new load-count-list" data-type="like" data-id="2090" data-product="story"><i class="icon icon-like "></i><span class="like agree-count">2</span></li>
                                                </ul>
                                            </div>
                                            <p></p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="story-time story-time-footer">
                                        <p class="time">12小时前</p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="story-content">
                                    <div class="story-title" story-data-show="false">
                                        <p class="transition"><span class="icon icon-caret"></span>砂板糖故事</p>
                                    </div>
                                    <div class="story-info" style="display:none">
                                        <p class="story-detail-hide">1762年(乾隆二十七年)乾隆皇帝第三次南巡路径山东，此时山东正遭遇水灾，百姓受灾严重，乾隆皇帝即刻下令开仓赈灾，免税赋，亲自到民间体察灾情。由于过度劳累又值连绵阴雨，湿气上身，咳嗽痰吐不止，百官正愁，巧遇一位山东张氏郎中，向乾隆皇帝上供药糖，帮助乾隆皇帝调理脾胃，止咳化痰，去除湿气。半月后果然药到病除。龙颜大悦，赐名御用砂板糖，宫廷御用糖。此后乾隆皇帝谒孔林，登泰山，至玉皇顶拈香为天下百姓祈福，砂板糖也成为了乾隆帝每每祭天必用糖!而张氏也因此受诏入宫与太医一起精益求精，完善此奇糖的配方，正宗老北京砂板糖宫廷秘方由此诞生。&nbsp;<a href="" target="_blank" class="transition">详情&gt;&gt;</a></p>
                                        <div class="story-time">
                                            <p class="time">12小时前</p>
                                            <p class="like">
                                            </p><div class="article-type pull-right">
                                                <div class="icon-like-prompt">
                                                    <i class="icon icon-like active"></i><span class="c1">+1</span>
                                                </div>
                                                <ul>
                                                    <li class="js-icon-like-new load-count-list" data-type="like" data-id="2090" data-product="story"><i class="icon icon-like "></i><span class="like agree-count">2</span></li>
                                                </ul>
                                            </div>
                                            <p></p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="story-time story-time-footer">
                                        <p class="time">12小时前</p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="story-content">
                                    <div class="story-title" story-data-show="false">
                                        <p class="transition"><span class="icon icon-caret"></span>传统名牌软糖--高粱饴</p>
                                    </div>
                                    <div class="story-info" style="display:none">
                                        <p class="story-detail-hide">高粱饴，统称饴糖，是山东的特产，是传统的名牌软糖，一向以“弹、韧、柔”三性兼备而著称。吃起来粘牙，甘美爽口。其选用优质白砂糖、淀粉、麦芽糖浆、水、高粱粉等为主料，采用传统工艺、设备、稳火细工熬制而成；以组织细腻、富有韧性、微甜可口的特点成为山东特产中的名品。近几年来，又创制了许多新的花色品种如具有玫瑰味的玫瑰饴，具有清凉解渴生津特点的薄荷饴、止咳贝羚饴和羚翘感冒饴则对预防治疗咳嗽伤风感冒有一定的医疗作用。。&nbsp;<a href="" target="_blank" class="transition">详情&gt;&gt;</a></p>
                                        <div class="story-time">
                                            <p class="time">12小时前</p>
                                            <p class="like">
                                            </p><div class="article-type pull-right">
                                                <div class="icon-like-prompt">
                                                    <i class="icon icon-like active"></i><span class="c1">+1</span>
                                                </div>
                                                <ul>
                                                    <li class="js-icon-like-new load-count-list" data-type="like" data-id="2090" data-product="story"><i class="icon icon-like "></i><span class="like agree-count">2</span></li>
                                                </ul>
                                            </div>
                                            <p></p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="story-time story-time-footer">
                                        <p class="time">12小时前</p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="nano-pane"><div class="nano-slider" style="height: 188px; transform: translate(0px, 0px);"></div></div></div>
            </div>
            <div class="js-more-story" data-cur_page="1"></div>
        </div>
        <div class="placeholder"></div>
        <!--京味部分结束-->


        <!--飞凡部分开始-->
        <div id="rumor_center"></div>
        <div class="box-moder moder-rumors-list">
            <h3>糖果屋</h3>
            <span class="span-mark"></span>
            <div class="big2-pic pull-right">
                <a href="" class="back-img" target="_blank">
                    <img class="lazy" src="/images/system/shabantang.jpg" alt="">
                </a>
                <a href="" target="_blank">
                    <div class="big2-pic-content">
                        <h2 class="t-h1">老北京砂板糖</h2>
                    </div>
                    <div class="clear"></div>
                </a>
            </div>
            <div class="clear"></div>
            <ul class="rumorlist">
                <li>
                    <div class="icon-clock"><img src="/images/avatar/avatar-3.jpg" width="20px" height="20px"></div>
                    <p class="rumor-time">01月05日  16:36</p>
                    <p class="rumor-detail"><a href="" target="_blank">砂板糖是一种糖果类食品，属于药膳，非药物也非保健品，历史上俗称“药糖”， 药糖即砂板糖，砂板糖即药糖；其同类商品在我国南方...</a></p>
                </li>
            </ul>
            <div class="rumor-more">
                <p><a href="" target="_blank">详情&gt;&gt;</a></p>
            </div>
            <div class="rumor-brunt-box">
                <a class="btn btn-blue-cy js-update-cy transition  js-show-bruntback-box1" style="padding:14px 12px" data-url="https://tangguohome.com/">特产专题</a>
            </div>
        </div>
        <div class="placeholder"></div>
        <!--飞凡部分结束-->

        <!--<div class="box-moder moder-project-list">
            <h3>京味</h3>
            <span class="pull-right project-more"><a href="https://www.tangguohome.com/chuangye" class="transition" target="_blank">全部</a></span>
            <span class="span-mark"></span>
            <ul>
                <li>
                    <div class="project-pic">
                        <img src="/images/system/1482475806679924.jpg">
                    </div>
                    <div class="project-content">
                        <div class="project-title">
                            <a href="https://www.tangguohome.com/chuangye/product/59665" class="transition" target="_blank">易加油</a>
                        </div>
                        <p>一款和美团买单一样便捷优惠的汽车加油软件</p>
                    </div>
                </li>
                <li>
                    <div class="project-pic">
                        <img src="/images/system/1482312261177051.png">
                    </div>
                    <div class="project-content">
                        <div class="project-title">
                            <a href="https://www.tangguohome.com/chuangye/product/59655" class="transition" target="_blank">回收宝</a>
                        </div>
                        <p>回收宝是国内专业的二手手机数码回收平台</p>
                    </div>
                </li>
            </ul>
            <div class="project-btn-box">
                <a class="js-open-cy btn btn-blue-cy transition" style="padding:14px 12px">立即报名，获得曝光机会！</a>
            </div>
            <ul class="project-info">
                <li>创业公司立即报名提交信息的好处：</li>
                <li>1.优质的展示和访谈机会</li>
                <li>2.获得投资人的关注</li>
                <li>3.tangguohome提供的创业支持服务</li>
            </ul>
        </div>
        <div class="placeholder"></div>-->

        <!--<div class="box-moder moder-project-list promote-box">
            <h3>赞助内容</h3>
            <span class="span-mark"></span>
            <ul>
                <li>
                    <div class="mod-thumb">
                        <a href="https://www.tangguohome.com/article/176374.html" target="_blank">
                            <img src="/images/system/8a36f9bdd41400ed9bd527e4d2934331.png">
                        </a>
                    </div>
                    <div class="project-content">
                        <a href="https://www.tangguohome.com/zhuanti/hxJaguar.html" class="c2" target="_blank">梦想城行者</a><span class="point">•</span><a href="https://www.tangguohome.com/article/176374.html" target="_blank">无人机市场这么火，自拍型无人机如...</a>
                    </div>
                </li>
                <li>
                    <div class="mod-thumb">
                        <a href="https://www.tangguohome.com/article/175159.html" target="_blank">
                            <img src="/images/system/b5e479e3c0bfc99a9055b61455ae0215.png">
                        </a>
                    </div>
                    <div class="project-content">
                        <a href="https://www.tangguohome.com/zhuanti/hxmime.html" class="c2" target="_blank">金融创业</a><span class="point">•</span><a href="https://www.tangguohome.com/article/175159.html" target="_blank">创业路上意外层出不穷，这家金融创...</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="placeholder"></div>-->


        <!--研究报告部分开始-->
        <!--<div class="box-moder hot-article">
            <h3>创新案例</h3>
        <span class="pull-right project-more story-more">
            <a href="https://www.tangguohome.com/report.html" class="transition" target="_blank">全部</a></span>
            <span class="span-mark"></span>
            <ul>
                <li>
                    <div class="hot-article-img">
                        <a href="https://www.tangguohome.com/article/176765.html" target="_blank">
                            <img src="/images/system/190317489384.jpg">
                        </a>
                    </div>
                    <a href="https://www.tangguohome.com/article/176765.html" class="transition" target="_blank">【创新案例002】三年扭转携程颓势，吞并强大竞争对手，梁建章做对了什么？</a>

                    <div class="report-author-info" style="margin-left:0px;margin-top:0px;">
                <span class="author-face">
                    <img src="/images/system/86_avatar_big.jpg!150x150">
                </span>
                <span>
                    Eastland
                </span>
                <span>
                    tangguohome研究生，关注电商、在线旅游、互联网金融、O2O等领域。
                </span>
                    </div>
                </li>
            </ul>
            <div class="report-explain">
                全年30+篇 案例分析，复盘有代表性的创新公司，还原商业成功背后的魔鬼细节。
            </div>
        </div>
        <div class="placeholder"></div>-->


        <!--<div class="box-moder hot-article">
            <h3>热文</h3>
            <span class="span-mark"></span>
            <ul>
                <li>
                    <div class="hot-article-img">
                        <a href="https://www.tangguohome.com/article/177591.html" target="_blank" title="诺基亚新机 Nokia 6 正式发布：不是旗舰，探路中国">
                            <img src="/images/system/121355366209(1).jpg">
                        </a>
                    </div>
                    <a href="https://www.tangguohome.com/article/177591.html" class="transition" target="_blank">诺基亚新机 Nokia 6 正式发布：不是旗舰，探路中国</a>
                </li>
            </ul>
        </div>
        <div class="placeholder"></div>-->

    </div>
</div>

@endsection