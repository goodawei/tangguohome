define("modal_story",function(a,b) {
	var c;a.async("modal_build",function(a){c=a
	});

	var d=function(a) {
		var b="",c="",d="";return a.appKey=b,a.scene=c,a.token=d,a
	},e=function() {
		var a=$("#count-info-url").val(),b=$("#product").val(),c=new Array;$(".load-count-list").each(function(){c.push($(this).attr("data-id"))
		}),c=c.join(",");var d= {
			ids: c,product:b
		};$.ajax( {
			type: "post",url:a,data:d,dataType:"json",async:!0,success:function(a){if(a.success)for(var b in a.data)$(".load-count-list").each(function(){$(this).attr("data-id")==b&&($(this).find(".comment-count").html(a.data[b].comment_num),$(this).find(".agree-count").html(a.data[b].agree_num),$(this).find(".disagree-count").html(a.data[b].disagree_num))
			})}})};$(document).on("click",".js-icon-like-new",function() {
		var a=$(this);a.hasClass("active")?$(".icon-like-prompt").find(".c1").html("-1"): $(".icon-like-prompt").find(".c1").html("+1");
		var b=$(this).parents(".article-type").find(".icon-like-prompt");b.css({opacity: "1"
		}).animate( {
			opacity: "0","margin-top":"-25px"
		},400,function() {
			b.css({"margin-top": "-13px"
			})});

		var e=$("#agree-add-url").val(),f= {
			itemId: $(this).attr("data-id"),product:$(this).attr("data-product"),sourceId:"1",userId:uid,cookieId:$.cookie("huxiu_analyzer_wcy_id")
		};$.ajax( {
			type: "post",url:e,data:d(f),dataType:"json",async:!0,xhrFields:{withCredentials:!0
			},success:function(b) {
				b.success?(_hmt.push(["_trackEvent","短趣内容点赞","点击","点击"]),a.children(".agree-count").html(b.data.agree_num),a.addClass("active")): c.showMessagePrompt(b.error.message,"error")
			}})}),$(function() {
		e()
	}),$(document).on("click",".story-title",function() {
		var a=$(this),b=a.parents("li");"false"==a.attr("story-data-show")?(_hmt.push(["_trackEvent","短趣内容点开","点击","点击"]),a.css("font-weight","600"),b.addClass("story-open"),b.find(".story-info").slideDown(),b.find(".story-time-footer").hide(),b.addClass("dropup"),a.attr("story-data-show","true")): (a.css("font-weight","500").removeClass("dropup"),b.removeClass("story-open"),b.find(".story-info").slideUp(),b.find(".story-time-footer").show(),b.removeClass("dropup"),a.attr("story-data-show","false"))
	}),$(document).on("click",".story-time>.article-type>ul>.js-icon-like",function() {
		_hmt.push(["_trackEvent","短趣内容点赞","点击","点击"])
	}),$(document).ready(function() {
		a.async(["jquery.nanoscroller"],function(){$(".nano").nanoScroller({preventPageScrolling: !1
		})})});

	var f=function(a) {
		var b="";for(var c in a){var d=a[c],e='<li><div class="story-content">    <div class="story-title" story-data-show="false"><p><span class="icon icon-caret"></span>{{title}}</p></div><div class="story-info" style="display:none"><p class="story-detail-hide">{{content}}</p><p class="story-detail">';d.source_url&&(e+='<a href="{{source_url}}" target = "_blank"> 详情 >> </a>'),e+='</p><div class="story-time"><p class="time">{{day}}  {{time}}</p><p class="like"><div class="article-type pull-right"><div class="icon-like-prompt"><i class="icon icon-like active"></i><span class="c1">+1</span></div><ul><li class="js-icon-like-new load-count-list" data-type="like" data-id="{{id}}" data-product="story"><i class="icon icon-like "></i><span class="like agree-count">0</span></li></ul></div></p><div class="clear"></div></div></div><div class="story-time story-time-footer"><p class="time">{{day}}  {{time}}</p><div class="clear"></div></div></div></li>',b+=e.replace("{{title}}",d.title).replace("{{content}}",d.content).replace("{{day}}",d.day).replace("{{time}}",d.time).replace("{{day}}",d.day).replace("{{time}}",d.time).replace("{{id}}",d.id).replace("{{source_url}}",d.source_url)
		}

		return b
	},g=function(a) {
		$(".box-list").append(f(a)),$(".prepend-li").slideDown().removeClass("prepend-li")
	};$(".nano > .nano-content").scroll(function() {
		var a=$(this).height(),b=$(this)[0].scrollHeight,c=$(this)[0].scrollTop;if(c+a>=b){var d=$(".js-more-story"),e=parseInt(d.attr("data-cur_page"))+1;if(1>=e||isNaN(e))return;$.ajax({type: "get",url:"/story/more/"+e,dataType:"json",async:!1,beforeSend:function(a){
		},success:function(a) {
			1==a.result&&(d.attr("data-cur_page",e),$("#loading").remove(),g(a.data)),a.data.length<=0&&d.remove()
		},error:function(a) {
		}})}}),$(document).on("click",".story-detail-hide",function() {
		var a=$(this);a.parents("li").removeClass("story-open"),a.parent().slideUp(),a.parent().next().show(),a.parent().prev().attr("story-data-show","false")
	})});