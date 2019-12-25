@include("Layouts.header")
<body>
<div class="qing tok">
	<div class="juzhong">
		<div class="lf" style="margin-left: 240px;">
			欢迎来到山东省瑞丹堂电子商务有限公司！
		</div>
		<div class="rf toa">
			<ul id="sddm">
            	<li style="padding-left:10px; background:url(/index/images/wei.png) no-repeat left center; background-size:18px;"><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">关注我们</a></a>
				<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
					<img src="/index/images/108430aeb.jpg" width="166" height="166">
				</div>
				</li>
				<li style="padding-left:10px; background:url(/index/images/gwc.png) no-repeat left center; background-size:16px;"><a href="#">购物车</a><span>|</span></a>
				</li>
                <?php
                if(session()->has('username')){
                    echo "<a href='/personage/index'>个人中心</a><span>|</span><a href='#'>联系我们</a>";
                }else{
                    echo"<a href='/index/login' class='user_info_login'>登录</a><a href='/index/register' class='user_info_reg'>注册</a>";
                }
                ?>

                <p>

                {{--<a href="/personage/index">个人中心</a><span>|</span><a href="#">联系我们</a>--}}
			</ul>
		</div>
	</div>
</div>
<!--logo -->
<div class="qing lok">
	<div class="juzhong">
		<div style="height:140px; background-color: #fff; box-shadow: 0 -12px 10px rgba(0,0,0,.2);width: 216px; float:left; position:absolute; top:0;">
						<div>
							<img src="/index/images/jinyihe.png" style="height:140px; padding:0;margin: 0 auto;display: block;">
						</div>
					</div>
		<div class="rf">
			<form name="search" action="#" method="post" style="display:inline; float:left; width:500px;">
				<div class="souk">
					<input type="text" name="gjz" id="gjz" placeholder="请输入关键字" class="sous">
					<div class="sout">
						<a href="#">日用品</a>，                <a href="#">保健</a> 
					</div>
					<input type="submit" value="" class="souc">
				</div>
                <div style="float:left; font-size:12px; margin-top:10px;" >
                	<a href="" style=" color:#999;">服装鞋帽</a><span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">保健用品</a><span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">电子产品</a><span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">日用品</a><span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">办公用品</a><span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">化妆品</a><span style="margin:0 5px; color:#999;">|</span>
                    <a href="" style=" color:#999;">预包装食品</a>
                </div>
			</form>
			<div class="myk">
				<div class="phone">
					<p class="time">
						客户服务热线：
					</p>
					<p class="tel" style="color:#464646; font-size:22px; font-weight:bold;">
						0538-0000000
					</p>
				</div>
                <img src="/index/images/ewm.jpg" width="80" style="float:right;">
			</div>
		</div>
	</div>
</div>
<!--导航 -->
<div class="qing dabg" style=" overflow:visible;">
	<div class="juzhong" style=" overflow:visible;">
		<div class="lf fenl">
			<!--分类 -->
			<div id="category-2015" onmouseover="this.className='on'" onmouseleave="this.className=''">
				<div class="ld">
					<img src="/index/images/flbg.png" width="21" height="15" class="lf">所有产品分类
				</div>
				<div id="allsort" style=" display:block;">
                <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">医药保健</a><b>></b></span>
						<div class="i-mc"></div>
					</div>
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">

						<span><a href="#">家用电器</a><b>></b></span>
						<div class="i-mc"></div>
					</div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">电脑&nbsp;/&nbsp;</a><a href="#">办公</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox"></div>
							<div class="ejlei"></div>
							<div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
                           <div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
						</div>
					</div>
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">男装&nbsp;/&nbsp;</a><a href="#">女装&nbsp;/&nbsp;</a><a href="#">童装&nbsp;/&nbsp;</a><a href="#">内衣</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox"></div>
							<div class="ejlei"></div>
							<div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
						</div>
					</div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">美妆个护&nbsp;/&nbsp;</a><a href="#">宠物</a><b>></b></span>
						<div class="i-mc"></div>
					</div>
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">家居&nbsp;/&nbsp;</a><a href="#">家具&nbsp;/&nbsp;</a><a href="#">家装&nbsp;/&nbsp;</a><a href="#">厨具</a><b>></b></span>
						<div class="i-mc"></div>
					</div>
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">女鞋&nbsp;/&nbsp;</a><a href="#">女鞋&nbsp;/&nbsp;</a><a href="#">钟表&nbsp;/&nbsp;</a><a href="#">珠宝</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox"></div>
							<div class="ejlei"></div>
							<div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
						</div>
					</div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">汽车&nbsp;/&nbsp;</a><a href="#">汽车用品</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox"></div>
							<div class="ejlei"></div>
							<div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
                            <div class="ejlei"></div>
						</div>
					</div>
				</div>
			</div>
			<!--分类end -->
		</div>
		<div class="rf nav">
			<a href="#">
			<div>
				<span>首页</span><span>首页</span>
			</div>
			<b></b></a>
			<a href="#">
			<div>
				<span>关于我们</span><span>关于我们</span>
			</div>
			<b></b></a>
			<a href="#">
			<div>
				<span>普通会员</span><span>普通会员</span>
			</div>
			<b></b></a>
			<a href="#">
			<div>
				<span>运营商</span><span>运营商</span>
			</div>
			<b></b></a>
			<a href="#">
			<div>
				<span>商城网店</span><span>商城网店</span>
			</div>
			<b></b></a>
			<a href="#">
			<div>
				<span>网店分红</span><span>网店分红</span>
			</div>
			<b></b></a>
			<a href="#">
			<div>
				<span>会员中心</span><span>会员中心</span>
			</div>
			<b></b></a>
            
			<a href="#">
			<div>
				<span>联系我们</span><span>联系我们</span>
			</div>
			<b></b></a>
		</div>
        
	</div>
</div>
<!--banner -->
<div style="width:100%; overflow:hidden;">
<div class="qing bank" style="width:1200px; margin:0 auto; overflow:hidden; background:#fff;">
	<div class="kuai">
    	<div class="J_user user">
	<div class="user_info user_info_level0 user_info_plusNaN" clstag="h|keycount|2016|09a">
		<div class="J_user_info_avatar user_info_avatar">
			<img class="J_user_info_avatar_img" src="/index/images/no_login.jpg"><a class="user_info_avatar_lk" href="#" target="_blank"></a>
		</div>
		<div class="user_info_show">
			<p class="user_info_tip">
				Hi, 欢迎来到瑞丹堂!
			</p>
            <?php
            if(session()->has('username')){
                echo "$data &nbsp <a href='/index/quit' class='user_info_login'>退出</a>";
            }else{
                echo"<a href='/index/login' class='user_info_login'>登录</a><a href='/index/register' class='user_info_reg'>注册</a>";
            }
            ?>

			<p>

			</p>
		</div>
	</div>
	<div class="user_profit">
		<a class="user_profit_lk" href="#" target="_blank" clstag="h|keycount|2016|09b">新人福利</a><a class="user_profit_lk" href="#" target="_blank" clstag="h|keycount|2016|09c">会员优惠</a>
	</div>
</div>
		<div class="kuti">
			<div class="kuti1">
				商城公告
			</div>
			<a href="#" class="duo">更多<span>>></span></a>
		</div>
		<div class="kulb">
			
			<a href="#">◆&nbsp;&nbsp;居家自营好物2件8折</a>
			<a href="#">◆&nbsp;&nbsp;爆款下单立减1111元</a>
			<a href="#">◆&nbsp;&nbsp;家具建材跨店铺3件8折</a>
			<a href="#">◆&nbsp;&nbsp;每日享折扣 京东品质游</a>
		</div>
		<div class="kusi">
			
            <a href="#"><img src="/index/images/bab1.png" width="38" height="35">会员</a>
            <a href="#"><img src="/index/images/bab2.png" width="38" height="35">活动</a>
            <a href="#"><img src="/index/images/bab5.png" width="38" height="35">网店</a>
            <a href="#"><img src="/index/images/bab6.png" width="38" height="35">购物车</a>
            <a href="#"><img src="/index/images/bab3.png" width="38" height="35">资讯</a>
            <a href="#"><img src="/index/images/bab7.png" width="38" height="35">简介</a>
            <a href="#"><img src="/index/images/bab4.png" width="38" height="35">留言</a>
            <a href="#"><img src="/index/images/bab8.png" width="38" height="35">联系</a>
		</div>
	</div>
	<!--banner -->
	<div class="main_visual">
		<div class="main_image" style="width:790px;margin-left: 225px;margin-top:8px;">
			<div id="slider-wrapper" class="index_post ption_r">
				<div id="slider" class="nivoSlider">
					
					<a href="#" target="_blank">
					<img src="/index/images/banner2.jpg" alt=" "/></a>
					<a href="#" target="_blank">
					<img src="/index/images/banner3.jpg" alt=" "/></a>
                    <a href="#" target="_blank">
					<img src="/index/images/banner1.jpg" alt=" "/></a>
					
					<a href="#" target="_blank">
					<img src="/index/images/banner5.jpg" alt=" "/></a>
					<a href="#" target="_blank">
					<img src="/index/images/banner4.jpg" alt=" "/></a>
				</div>
			</div>
			<script src="/index/js/load.js" type="text/javascript"></script>
			<script src="/index/js/jquery.nivo.slider.js" type="text/javascript"></script>
			<script type="text/javascript">
            $(window).load(function() {
            $('#slider').nivoSlider({
            controlNav:false,
            effect:'random',   
            animSpeed:100,
            captionOpacity:0.9,
            directionNav:true,
            controlNav:true,
            pauseTime:3000,
            directionNavHide: true,
            pauseOnHover:true
            });
            });
            </script>
		</div>
	</div>
	<!--end -->
</div>
</div>

<div class="box_hd clearfix">
	<div class="boxhdcol1">
		<p class="box_hd_dec" style="background-image: url(/index/images/1x.png);background-position: -190px -48px;-moz-background-size: 218px 188px;background-size: 218px 188px;background-repeat: no-repeat;width: 28px;height: 28px; float:left"></p>
        <p class="box_hd_icon" style="margin-top: 8px;margin-right: 8px;background-image: url(/index/images/1x.png);background-position: 0 -40px;-moz-background-size: 218px 188px;background-size: 218px 188px;background-repeat: no-repeat;width: 34px;height: 40px; float:left"></p>
		<h3 class="box_tit" style="font-size: 26px;font-weight: 400;padding-top:0px; color:#fff; float:left;line-height: 48px;float: left;">热销推荐</h3>
		<a href="#" target="_blank" class="box_subtit" style="color:#fff; float:left; line-height:48px; margin-left:10px;">总有你想不到的低价<i class="box_subtit_arrow"></i></a>
	</div>
	<div class="boxhdcol2">
		<div class="J_sk_cd sk_cd"  style="color:#fff; float:right; line-height:48px; margin-right:20px;">
			<span class="sk_cd_tip">当前专区</span>

			<span class="sk_cd_tip">查看更多</span>
		</div>
	</div>
</div>

<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}/*清楚内外默认边距*/
.web{width:100%;margin:0px auto; background:#e0e0e0;}
.con{width:1200px;background:#fff;margin:10px auto; overflow:hidden}
.con ul li{width:400px;height:120px;float:left;margin-right:0px;margin-left:0px;margin-bottom:0px;position:relative;overflow:hidden;cursor:pointer;}
.txt{width:585px;height:0px;background:rgba(0, 0, 0, 0.05);/*透明背景色，不透明其文字内容*/position:absolute;left:0;bottom:0;color:#fff;font-family:"微软雅黑";}
.txt h3{font-size:15px;font-weight:100;height:40px;text-align:left;line-height:40px;margin-left:30px;}
.txt img{ margin-left:30px;margin-top: 20px;}
.txt p{font-size:14px;text-align:left; width:90%; margin:0 auto; line-height:30px;margin-left:30px;margin-top:10px;}
.tjmk{ margin-top:15px; }
.tjmk a{ color:#999; line-height:18px;  width:100%;overflow:hidden !important; font-size:12px; text-align:left;}
.tjm2{background:#fff; padding-top:10px; font-size:12px; color:#f63;}
</style>

<div class="tabPanelz1" style="width:1200px; margin:0 auto;">
	<div class="panesz1" style=" background:#fff;overflow: hidden;">
    	<div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
  <ul class="am-slides">
      <li>
        	<div class="panez1" style="display:block;">
			<div class="qing bai">
				<div class="lf zgk1">
					<ul class="zgcplb">
						<li><a href="#" class="tjtu"><img src="/index/images/1.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
						<li><a href="#" class="tjtu"><img src="/index/images/2.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
						<li><a href="#" class="tjtu"><img src="/index/images/3.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
						<li><a href="#" class="tjtu"><img src="/index/images/4.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
						<li><a href="#" class="tjtu"><img src="/index/images/5.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
					</ul>
				</div>
			</div>
		</div>

      </li>
      <li>
        	<div class="panez1" style="display:block;">
			<div class="qing bai">
				<div class="lf zgk1">
					<ul class="zgcplb">
						<li><a href="#" class="tjtu"><img src="/index/images/1.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
						<li><a href="#" class="tjtu"><img src="/index/images/2.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
						<li><a href="#" class="tjtu"><img src="/index/images/3.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
						<li><a href="#" class="tjtu"><img src="/index/images/4.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
						<li><a href="#" class="tjtu"><img src="/index/images/5.jpg" width="130" height="130"></a>
						<div class="tjmk">
							<a href="#" class="tjm1">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>
							<div class="tjm2" style="color:#f10214">
								¥<span style="color:#f10214; font-size:18px; font-weight:bold;">89.00</span><em style="margin-left:10px; font-style:normal; color:#999; text-decoration: line-through">¥99.00</em>
							</div>
						</div>
						<div class="tjyc">
							<a href="#" class="tjycm">沃盼福建红心柚子新鲜水果2只装重约2-3kg（2只装）</a>

						</div>
						<!--line-->
						<span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span class="line-4"></span></li>
					</ul>
				</div>
			</div>
		</div>

      </li>
  </ul>
</div>
		<div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false}' style="width:216px; float:right; margin-top:10px; height:250px;">
  <ul class="am-slides">
      <li>
        	<img src="/index/images/sban1.jpg" style="width:216px; margin-top:0; height:250px;">
      </li>
      <li>
        	<img src="/index/images/sban2.jpg" style="width:216px; margin-top:0; height:250px;">
      </li>

  </ul>
</div>
	</div>
</div>
<!--友情链接 -->
<div class="qing juzhong youk">
  <div class="lf youkm">友情链接：</div>
  <div class="liana">
  <a href="#" target="_blank"> 山东省瑞丹堂电子商务有限公司</a>　|　<a href="#" target="_blank">山东省瑞丹堂电子商务有限公司</a>　|　<a href="#" target="_blank">山东省瑞丹堂电子商务有限公司</a>　|　<a href="#" target="_blank">诺盾网络</a>　|　<a href="#" target="_blank">诺盾网络</a>    </div>
</div>
<!--版权 -->
<div class="qing banq">
山东省瑞丹堂电子商务有限公司  版权所有&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" target="_blank">诺盾网络</a>提供<a href="#" target="_blank">网站建设</a>

</div>





<!--右侧浮动 --><!--导航分类 -->
<script type="text/javascript">
$(function(){	
	$('.tabPanel dl dd').click(function(){
		$(this).addClass('hit').siblings().removeClass('hit');
		$('.panes>div:eq('+$(this).index()+')').show().siblings().hide();	
	})
});
$(function(){	
	$('.tabPanel2 dl dd').click(function(){
		$(this).addClass('hit2').siblings().removeClass('hit2');
		$('.panes2>div:eq('+$(this).index()+')').show().siblings().hide();	
	})
});
$(function(){	
	$('.tabPanel3 dl dd').click(function(){
		$(this).addClass('hit3').siblings().removeClass('hit3');
		$('.panes3>div:eq('+$(this).index()+')').show().siblings().hide();	
	})
})
$(function(){	
	$('.tabPanelcp ul li').click(function(){
		$(this).addClass('hitcp').siblings().removeClass('hitcp');
		$('.panescp>div:eq('+$(this).index()+')').show().siblings().hide();	
	})
})
</script>
</body>
</html>
