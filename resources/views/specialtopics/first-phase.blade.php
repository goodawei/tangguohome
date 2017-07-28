<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='content-type' content='text/html;charset=utf-8'>	
	<title>砂板糖培训公开课开始啦！</title>
	<meta name="keywords" content="砂板糖,砂板糖制作,砂板糖熬制,砂板糖配方,砂板糖培训,砂板糖批发,老北京砂板糖">
	<meta name="description" content="老北京砂板糖制作培训，上门传授，包教包会">
	<link rel="stylesheet" type="text/css" href="css/specialtopics/first-phase/index.css">
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js?v=1.01" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
			wx.config({!! $js->config(['onMenuShareTimeline',
                    'onMenuShareAppMessage',
                    'onMenuShareQQ',
                    'onMenuShareWeibo'],true) !!} );

			wx.ready(function () {

				wx.onMenuShareTimeline({
					title: '砂板糖培训公开课开始啦！', // 分享标题
					//link: present_url, // 分享链接
					imgUrl: '{{ $shareImg }}', // 分享图标
					desc: '老北京砂板糖制作培训，上门传授，包教包会', // 分享图标
					success: function () {
						// 用户确认分享后执行的回调函数
					},
					cancel: function () {
						// 用户取消分享后执行的回调函数
						alert("Timeline:");
					}
				});
				wx.onMenuShareAppMessage({
					title: '砂板糖培训公开课开始啦！', // 分享标题
					//link: present_url, // 分享链接
					imgUrl: '{{ $shareImg }}', // 分享图标
					desc: '老北京砂板糖制作培训，上门传授，包教包会', // 分享图标
					type: '', // 分享类型,music、video或link，不填默认为link
					dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
					success: function () {
						// 用户确认分享后执行的回调函数
					},
					cancel: function () {
						// 用户取消分享后执行的回调函数
						alert("AppMessage:");
					}
				});
				wx.onMenuShareQQ({
					title: '砂板糖培训公开课开始啦！', // 分享标题
					desc: '老北京砂板糖制作培训，上门传授，包教包会', // 分享图标
					//link: present_url, // 分享链接
					imgUrl: '{{ $shareImg }}', // 分享图标
					success: function () {
						// 用户确认分享后执行的回调函数
					},
					cancel: function () {
						// 用户取消分享后执行的回调函数
						alert("QQ:");
					}
				});
				wx.onMenuShareWeibo({
					title: '砂板糖培训公开课开始啦！', // 分享标题
					//link: present_url, // 分享链接
					imgUrl: '{{ $shareImg }}', // 分享图标
					desc: '老北京砂板糖制作培训，上门传授，包教包会', // 分享图标
					success: function () {
						// 用户确认分享后执行的回调函数
					},
					cancel: function () {
						alert("Weibo:");
					}
				});
				wx.error(function(res){
					// config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
					alert("errorMSG:"+res);
				});
			});

	</script>
</head>
<body>

<div class='container'>
	<!-- 头部内容 开始 -->
	<header class='zhuanti_head'>
		<div class='head'>
			<div class='head_con'>
				<span class='line'></span>
				<span class='text'>砂板糖学堂</span>
				
				<div class='tel'>
					<p class='p1'>—电话咨询—</p>
					<p class='p2'>15510337665</p>
				</div>
				<div class='text2'>
					<p class='p1'>预约试听</p>
					<p class='p2'>糖果屋</p>
				</div>
			</div>
			
		</div>
		<div class='banner_out'>
			<div class='banner'>
				<img src="images/specialtopics/first-phase/bg_01.jpg">
				<img src="images/specialtopics/first-phase/bg_02.jpg">
				<img src="images/specialtopics/first-phase/bg_03.jpg">
			</div>
		</div>
		
	</header>
	<!-- 头部内容 结束 -->

	<!-- 我们的服务 开始-->
	<article>
		<!-- 详情介绍 -->
		<section>
			<div class='service'>
				<p class='tit'>我们的服务</p>
				<div class='tit_con'>
					<ul >
						<li><a href="#">手把手包教包会</a></li>
						<li><a href="#">北京可上门传授</a></li>
						<li><a href="#">培训制作模具</a></li>
						<li><a href="#">赠送两套模具</a></li>
					</ul>
				</div>						
			</div>
			<div class='floor1'>
				详情介绍
			</div>
			<div class='floor1_con'>
				<div class='price'>
					<p class='p1'>传统片状</p>
					<p class='p2'>培训价<b>￥</b><span class='jiage'>15888</span></p>
				</div>
				<div class='introduction'>
					    片状是最传统的砂板糖形状，板塘长12cm，宽7cm,由专门的模具塑形而成，整个培训过程包括：中草药配方、原材料配比、草药熬制、砂糖冰糖熬制火候控制方法、出锅塑形、切片、包装存储等
				</div>
			</div>
			<div class='floor1_con floor1_con2'>
				<div class='price'>
					<p class='p1'>工具制作</p>
					<p class='p2'>培训价<b>￥</b><span class='jiage'>800</span></p>
				</div>
				<div class='introduction'>
					   免费赠送价值 680元模具一套,并且免费培训片状工具制作。
				</div>
				<span class='song'><img src="images/specialtopics/first-phase/song.png"></span>
			</div>
			<div class='floor1_con floor1_con3'>
				<div class='price'>
					<p class='p1'>时尚心形/方形</p>
					<p class='p2'>培训价<b>￥</b><span class='jiage'>18888</span></p>
				</div>
				<div class='introduction'>
					   纯手工制作心形颗粒状，小方块颗粒状等不同形状的砂板糖
				</div>
				<span class='song'><img src="images/specialtopics/first-phase/song.png"></span>
			</div>
			<div class='floor1_con floor1_con4'>
				<div class='price'>
					<p class='p1'>工具制作</p>
					<p class='p2'>培训价<b>￥</b><span class='jiage'>800</span></p>
				</div>
				<div class='introduction'>
					   免费赠送价值 680元模具一套，并且免费培训心形工具制作
				</div>
				<span class='song'><img src="images/specialtopics/first-phase/song.png"></span>
			</div>
		</section>
		<!-- 详情介绍 结束 -->
		<!-- 图片展示 -->
		<section>
			<div class='floor2'>
				图片展示
			</div>
			<div class='floor2_con'>
				<span class='tu1'><img src="images/specialtopics/first-phase/pic_01.jpg"></span>
				<span class='tu2'><img src="images/specialtopics/first-phase/pic_03.jpg"></span>
			</div>
			<div class='floor2_con'>
				<span class='tu1'><img src="images/specialtopics/first-phase/pic_01.jpg"></span>
				<span class='tu2'><img src="images/specialtopics/first-phase/pic_04.jpg"></span>
			</div>
			<div class='floor2_con'>
				砂板糖，本质上属于润喉糖的一种，但是由于熬制工艺的不同，又区别于一般的润喉糖，即它是没有改变白砂糖的化学性质的糖。在熬制这个板状的硬糖的时候，加入一些药食同源的中草药，就成了我们的产品---砂板糖。
				砂板糖，最初发源于山东民间，后因为其独特的效果而传入京城，后来被皇宫收纳为专门为皇亲国戚特供的润喉糖，典型的药膳糖果，至今已逾百年历史，清朝覆灭后，宫廷制糖人流落民间，代代相传，现传承人严格按照百年传统工艺，遵循古老配方，经多道工序纯手工制作，配料采用药食同源的草本植物，健康、天然，无任何添加剂，防腐剂，着色剂，亦食亦药，合食疗、糖果为一体，是中华民族宝贵的文化遗产，是古老华夏食疗文化的珍品。由于它对经常发生的咽喉部位的杂症或不适有着显著的食疗作用，所以在过去，人们俗称它为“药糖”。
				<br/>	<br/>	<br/>
				关于糖的作用，在民间曾有如下谚语描述：
				吃糖保健，口味凉香；喉痛咽痛，消炎复康；
				宣肺化痰，食消气畅；健脾健胃，通便润肠；
				鼻塞牙痛，咳喘良方；晕车晕船，一扫而光。
			</div>
			<div class='floor2_con'>
				当今社会上有好多品牌自称是植物糖，但我们不得不戳穿它们都只是“伪植物糖”，真正的植物糖是指配方中所用原料皆属纯天然绿色植物，不含任何化学添加剂和防腐剂亦或是着色剂，大家在食用之前可以仔细看下食品的配方，如有食用香精、食用香料，价廉的薄荷油、薄膜包衣预混剂，柠檬黄、日落黄、胭脂红、焦糖色等，均属化学元素，此类糖实属化学糖。长期食用非但不能起到护嗓功能，甚至可以危害人体健康。而我们的大兵黄润喉糖，始终如一坚持使用纯天然绿色植物原料，安全又健康，是您最放心的 选择
				<br/>	<br/>
				咽喉问题一直是困扰人们的一个常见症状，那么砂板糖对于咽喉问题的食疗作用体现在哪里呢？
				咽炎，在中医上这个病属于“湿证”，也就是体内有湿气，反映在生理上就表现为咽喉部有一团类似于粘糊糊的湿气，在喉咙里吐之不出，咽之不下，很是难受，时间久了，造成嗓子痒，干，咳，严重的甚至疼痛难忍，这就是我们所说的咽炎的表现，从西医上来说的话，就是咽喉部细胞分泌不正常了，咽喉部的细胞长期处于活跃状态，不停地往外出分泌物，久而久之造成嗓部难受，本糖的成分里面的中草药，是抓住了咽炎的本质而进行的对症下药，因为咽喉是脾胃的门户，咽喉的疾病其根很大程度在于胃部，所以消费者可能看到我们的配料里面竟然大部分都不是我们常识里讲的治疗嗓部疾病的药，比如说什么胖大海啊，金银花啊，甘草啊，罗汉果啊等等，而是治疗胃病的药，比如说砂仁，良姜等等，一个原因就是因为这些药材是主要作用于胃部，平息胃火的，胃之于咽喉好比火焰之于炉灶，下面的火旺了，上面就干了，胃火平息了，咽喉自然就不干了，另一个原因是这些中草药大部分是芳香化湿的，化湿说的就是化掉体内的湿气，使其干燥起来，这样，咽喉部的异物感就被消除掉了。
				总而言之，我们大兵黄润喉糖是从根本上缓解咽喉不适的糖，而非像其他品牌使用过量的薄荷油暂时性的让喉咙凉爽。大兵黄，值得常年咽喉不适的你信赖！
			</div>

		</section>
		<!-- 图片展示 结束 -->
		<!-- 营销方案 -->
		<section>
			<div class='floor3'>
				营销方案
			</div>
			<div class='floor3_con'>
				<br/>	<br/><br/>	<br/>
				<center>早市，展会，电商，自主贴牌，招商代理等</center>
			</div>
			
			<!--<div class='floor3_con2'>
				<div class='floor3_con left'>
					订单
					<span class='yuyue'></span>
				</div>
				<div class='floor3_con right'>
					<span class='yuyue'></span>
				</div>
			</div>-->

		</section>
		<!-- 营销方案 结束 -->

	</article>
	<!-- 我们的服务 结束-->
</div>

</body>
</html>