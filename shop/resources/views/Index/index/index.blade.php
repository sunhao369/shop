﻿@include("Layouts.header")
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
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">专科用药<b>&gt;</b></a>
                            	<a href="#">滋补养生<b>&gt;</b></a>
                            	<a href="#">膳食补充<b>&gt;</b></a>
                                <a href="#">健康监测<b>&gt;</b></a>
                                <a href="#">靓眼视界<b style="font-family:'宋体'">&gt;</b></a>
                                
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">中西药品<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">感冒咳嗽</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">补肾壮阳</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">补气养血</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">止痛镇痛</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">耳鼻喉用药</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">眼科用药</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">口腔用药</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">皮肤用药</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">肠胃消化</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">风湿骨外伤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">维生素/钙</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">男科/泌尿</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">妇科用药</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">儿科用药</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">心脑血管</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">避孕药</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">肝胆用药</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">中风/心绞痛</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">糖尿病</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">皮肤/妇科炎症</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">性功能障碍</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">肝炎</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">高血压/血脂</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">痛风/关节病</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">前列腺/肾炎</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">营养健康<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">调节免疫</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">调节三高</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">缓解疲劳</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">美体塑身</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">美容养颜</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">肝肾养护</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">肠胃养护</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">明目益智</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">骨骼健康</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">改善睡眠</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">营养成分<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">维生素/矿物质</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">蛋白质</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">鱼油/磷脂</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">螺旋藻</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">番茄红素</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">叶酸</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">葡萄籽</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">左旋肉碱</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">辅酶Q10</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">益生菌</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">玛咖</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">膳食纤维</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">牛初乳</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">胶原蛋白</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">大豆异黄酮</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">芦荟提取</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">酵素</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">滋补养生<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">阿胶</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">蜂蜜/蜂产品</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">枸杞</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">燕窝</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">冬虫夏草</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">人参/西洋参</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">三七</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">鹿茸</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">雪蛤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">青钱柳</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">石斛/枫斗</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">灵芝/孢子粉</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">当归</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">养生茶饮</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">药食同源</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">保健器械<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">血压计</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">血糖仪</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">血氧仪</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">体温计</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">体重秤</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">胎心仪</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">制氧机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">呼吸机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">雾化器</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">助听器</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">轮椅</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">拐杖</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">护理床</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">中医保健</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">养生器械</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">理疗仪</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">家庭护理</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">智能健康</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						
						<span><a href="#">家用电器</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">家电馆<b>&gt;</b></a>
                            	<a href="#">生活电器<b>&gt;</b></a>
                            	<a href="#">商用家电<b>&gt;</b></a>
                                <a href="#">高端电器<b>&gt;</b></a>
                                
                                
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">电视<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">曲面电视</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">超薄电视</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">HDR电视</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">OLED电视</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">4K超清电视</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">55英寸</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">65英寸</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电视配件</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">空调<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">壁挂式空调</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">柜式空调</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">中央空调</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">以旧换新</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">0元安装</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">空调配件</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">洗衣机<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                 <a href="#" class="cate_detail_con_lk" target="_blank">滚筒洗衣机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">洗烘一体机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">波轮洗衣机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">迷你洗衣机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">烘干机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">洗衣机配件</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">冰箱<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">多门</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">对开门</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">三门</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">双门</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">冷柜/冰吧</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">酒柜</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">冰箱配件</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">厨卫大电<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">油烟机</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">燃气灶</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">烟灶套装</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">消毒柜</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">洗碗机</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">电热水器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">燃气热水器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">嵌入式厨电</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">商用厨房电器</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">厨房小电<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电饭煲</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">微波炉</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电烤箱</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电磁炉</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电陶炉</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电压力锅</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">空气炸锅</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">豆浆机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">咖啡机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">面包机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">榨汁机/原汁机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">料理机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电饼铛</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">养生壶/煎药壶</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">酸奶机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">煮蛋器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">面条机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电水壶/热水瓶</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电炖锅</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">多用途锅</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电烧烤炉</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电热饭盒</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">其它厨房电器</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">生活电器<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">取暖电器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">冷风扇</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">吸尘器/除螨仪</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">净化器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">扫地机器人</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">加湿器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">挂烫机/熨斗</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电风扇</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">插座</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电话机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">饮水机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">净水器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">除湿机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">干衣机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">清洁机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">收录/音机</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">毛球修剪器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">其它生活电器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">生活电器配件</a>
								</div>
							</div>
						</div>
					</div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">电脑&nbsp;/&nbsp;</a><a href="#">办公</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">玩3C<b>&gt;</b></a>
                            	<a href="#">本周热卖<b>&gt;</b></a>
                            	<a href="#">企业采购<b>&gt;</b></a>
                                <a href="#">GAME+<b>&gt;</b></a>
                                <a href="#">装机大师<b style="font-family:'宋体'">&gt;</b></a>
                                
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">电脑整机<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">笔记本</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">游戏本</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">平板电脑</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">平板电脑配件</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">台式机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">一体机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">服务器/工作站</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">笔记本配件</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">电脑配件<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">显示器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">CPU</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">主板</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">显卡</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">硬盘</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">内存</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">机箱</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电源</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">散热器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">刻录机/光驱</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">声卡/扩展卡</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">装机配件</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">SSD固态硬盘</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">组装电脑</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">外设产品<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">鼠标</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">键盘</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">键鼠套装</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">网络仪表仪器</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">U盘</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">移动硬盘</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">鼠标垫</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">摄像头</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">线缆</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">手写板</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">硬盘盒</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电脑工具</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">电脑清洁</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">UPS电源</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">插座</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">游戏设备<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">游戏机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">游戏耳机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">手柄/方向盘</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">游戏软件</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">游戏周边</a>
								</div>
							</div>
                           <div class="ejlei">
								<a href="#" class="ejlei1">网络产品<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">路由器</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">网络机顶盒</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">交换机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">网络存储</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">网卡</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">4G/3G上网</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">网络配件</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">办公设备<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">投影机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">投影配件</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">多功能一体机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">打印机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">传真设备</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">验钞/点钞机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">扫描设备</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">复合机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">碎纸机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">考勤机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">收银机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">会议音频视频</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">保险柜</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">装订/封装机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">安防监控</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">办公家具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">白板</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">文具耗材<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">硒鼓/墨粉</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">墨盒</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">色带</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">纸类</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">办公文具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">学生文具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">文件管理</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">本册/便签</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">计算器</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">笔类</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">画具画材</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">财会用品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">刻录碟片/附件</a>
								</div>
							</div> 
                            
						</div>
					</div>
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">男装&nbsp;/&nbsp;</a><a href="#">女装&nbsp;/&nbsp;</a><a href="#">童装&nbsp;/&nbsp;</a><a href="#">内衣</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">优惠专区<b>&gt;</b></a>
                            	<a href="#">男装<b>&gt;</b></a>
                            	<a href="#">女装<b>&gt;</b></a>
                                <a href="#">童装<b>&gt;</b></a>
                                <a href="#">内衣<b style="font-family:'宋体'">&gt;</b></a>
                                
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">女装<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">2017新品</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">商场同款</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">连衣裙</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">羽绒服</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">毛呢大衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">针织衫</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">棉服</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">卫衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">短外套</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">皮草</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">风衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">羊绒衫</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">牛仔裤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">休闲裤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">打底裤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">中老年女装</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">大码女装</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">打底衫</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">T恤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">衬衫</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">真皮皮衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">小西装</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">毛衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">半身裙</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">加绒裤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">雪纺衫</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">仿皮皮衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">马甲</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">短裤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">正装裤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">旗袍/唐装</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">婚纱</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">礼服</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">吊带/背心</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">时尚套装</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">当季热卖</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">设计师/潮牌</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">男装<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">商场同款</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">当季热卖</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">2017新品</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">T恤</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">牛仔裤</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">休闲裤</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">衬衫</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">短裤</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">POLO衫</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">羽绒服</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">棉服</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">真皮皮衣</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">夹克</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">卫衣</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">毛呢大衣</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">大码男装</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">西服套装</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">仿皮皮衣</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">风衣</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">针织衫</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">马甲/背心</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">羊毛衫</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">羊绒衫</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">西服</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">西裤</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">卫裤/运动裤</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">工装</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">设计师/潮牌</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">唐装/中山装</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">中老年男装</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">加绒裤</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">童装<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">套装</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">卫衣</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">裤子</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">外套/大衣</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">毛衣/针织衫</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">衬衫</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">户外/运动服</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">T恤</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">裙子</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">亲子装</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">礼服/演出服</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">羽绒服</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">棉服</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">内衣裤</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">配饰</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">家居服</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">马甲</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">袜子</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">民族服装</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">内衣<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">文胸</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">睡衣/家居服</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">男士内裤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">女士内裤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">吊带/背心</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">文胸套装</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">情侣睡衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">塑身美体</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">少女文胸</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">休闲棉袜</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">商务男袜</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">连裤袜/丝袜</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">美腿袜</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">打底裤袜</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">抹胸</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">内衣配件</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">大码内衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">打底衫</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">泳衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">秋衣秋裤</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">保暖内衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">情趣内衣</a>
								</div>
							</div>
						</div>
					</div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">美妆个护&nbsp;/&nbsp;</a><a href="#">宠物</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">清洁用品<b>&gt;</b></a>
                            	<a href="#">美妆馆<b>&gt;</b></a>
                            	<a href="#">个护馆<b>&gt;</b></a>
                                <a href="#">妆比社<b>&gt;</b></a>
                                <a href="#">全球购美妆<b style="font-family:'宋体'">&gt;</b></a>
                                
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">面部护肤<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">补水保湿</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">卸妆</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">洁面</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">爽肤水</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">乳液面霜</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">精华</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">眼霜</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">防晒</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">面膜</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">剃须</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">套装</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">洗发护发<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">洗发</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">护发</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">染发</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">造型</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">假发</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">美发工具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">套装</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">身体护理<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">补水保湿</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">沐浴</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">润肤</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">精油</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">颈部</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">手足</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">纤体塑形</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">美胸</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">套装</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">口腔护理<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">牙膏/牙粉</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">牙刷/牙线</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">漱口水</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">套装</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">女性护理<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">卫生巾</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">卫生护垫</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">私密护理</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">脱毛膏</a>
								</div>
							</div>
                            
                            <div class="ejlei">
								<a href="#" class="ejlei1">香水彩妆<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">BB霜</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">化妆棉</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">女士香水</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">男士香水</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">底妆</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">眉笔</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">睫毛膏</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">眼线</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">眼影</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">唇膏/彩</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">腮红</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">美甲</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">美妆工具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">套装</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">清洁用品<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">纸品湿巾</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">衣物清洁</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">清洁工具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">家庭清洁</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">一次性用品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">驱虫用品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">皮具护理</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">宠物生活<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">水族世界</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">狗粮</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">猫粮</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">猫狗罐头</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">狗零食</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">猫零食</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">医疗保健</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">宠物玩具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">宠物服饰</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">猫狗窝</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">洗护美容</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">猫砂/猫砂盆</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">狗厕所/尿垫</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">宠物牵引</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">食具水具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">小宠用品</a>
								</div>
							</div>
                            
                            
						</div>
					</div>
					
                    
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">家居&nbsp;/&nbsp;</a><a href="#">家具&nbsp;/&nbsp;</a><a href="#">家装&nbsp;/&nbsp;</a><a href="#">厨具</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">3免1<b>&gt;</b></a>
                            	<a href="#">家装城<b>&gt;</b></a>
                            	<a href="#">居家日用<b>&gt;</b></a>
                                <a href="#">精品家具<b>&gt;</b></a>
                                <a href="#">家装建材<b style="font-family:'宋体'">&gt;</b></a>
                                
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">厨具<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">烹饪锅具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">锅具套装</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">保温杯</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">刀剪菜板</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">厨房配件</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">水具酒具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">餐具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">茶具/咖啡具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">保鲜盒</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">家纺<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">床品套件</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">被子</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">枕芯</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">蚊帐</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">凉席</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">毛巾浴巾</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">地毯地垫</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">床垫/床褥</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">毯子</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">抱枕靠垫</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">窗帘/窗纱</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">床单/床笠</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">被套</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">枕巾枕套</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">沙发垫套/椅垫</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">桌布/罩件</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">电热毯</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">布艺软饰</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">生活日用<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">收纳用品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">雨伞雨具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">净化除味</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">浴室用品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">洗晒/熨烫</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">缝纫/针织用品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">清洁工具</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">家装软饰<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">装饰字画</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">装饰摆件</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">手工/十字绣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">相框/照片墙</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">墙贴/装饰贴</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">花瓶花艺</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">香薰蜡烛</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">节庆饰品</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">钟饰</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">帘艺隔断</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">创意家居</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">保暖防护</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">灯具<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">吸顶灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">吊灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">台灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">筒灯射灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">装饰灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">LED灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">氛围照明</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">落地灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">庭院灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">应急灯/手电</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">节能灯</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">家具<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">卧室家具</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">客厅家具</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">餐厅家具</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">书房家具</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">儿童家具</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">储物家具</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">阳台/户外</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">办公家具</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">床</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">床垫</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">沙发</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">电脑椅</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">衣柜</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">茶几</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">电视柜</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">餐桌</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">电脑桌</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">鞋架/衣帽架</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">儿童桌椅</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">儿童床</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">晾衣架</a>
								</div>
							</div>
                            
						</div>
					</div>
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">女鞋&nbsp;/&nbsp;</a><a href="#">女鞋&nbsp;/&nbsp;</a><a href="#">钟表&nbsp;/&nbsp;</a><a href="#">珠宝</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">自营鞋靴<b>&gt;</b></a>
                            	<a href="#">自营箱包<b>&gt;</b></a>
                            	<a href="#">时尚鞋包<b>&gt;</b></a>
                                <a href="#">国际珠宝馆<b>&gt;</b></a>
                                <a href="#">奢侈品<b style="font-family:'宋体'">&gt;</b></a>
                                
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">时尚女鞋<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                        <a href="#" class="cate_detail_con_lk" target="_blank">2017新品</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">单鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">休闲鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">帆布鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">妈妈鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">布鞋/绣花鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">女靴</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">踝靴</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">马丁靴</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">雪地靴</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">雨鞋/雨靴</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">高跟鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">凉鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">拖鞋/人字拖</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">鱼嘴鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">内增高</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">坡跟鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">防水台</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">松糕鞋</a>
                                        <a href="#" class="cate_detail_con_lk" target="_blank">鞋配件</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">潮流女包<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">真皮包</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">单肩包</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">手提包</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">斜挎包</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">双肩包</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">钱包</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">手拿包</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">卡包/零钱包</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">钥匙包</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">精品男包<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">男士钱包</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">双肩包</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">单肩/斜挎包</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">商务公文包</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">男士手包</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">卡包名片夹</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">钥匙包</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">功能箱包<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">拉杆箱</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">拉杆包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">旅行包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">电脑包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">休闲运动包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">书包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">登山包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">腰包/胸包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">旅行配件</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">相机包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">妈咪包</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">奢侈品<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">箱包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">钱包</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">服饰</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">腰带</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">鞋靴</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">太阳镜/眼镜框</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">饰品</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">配件</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">精选大牌<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">GUCCI</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">COACH</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">雷朋</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">施华洛世奇</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">MK</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">阿玛尼</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">菲拉格慕</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">VERSACE</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">普拉达</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">巴宝莉</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">万宝龙</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">钟表<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">天梭</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">浪琴</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">欧米茄</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">泰格豪雅</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">DW</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">卡西欧</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">西铁城</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">天王</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">瑞表</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">国表</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">日韩表</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">欧美表</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">德表</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">儿童手表</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">智能手表</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">闹钟</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">挂钟</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">座钟</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">钟表配件</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">珠宝首饰<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">黄金</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">K金</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">时尚饰品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">钻石</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">翡翠玉石</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">银饰</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">水晶玛瑙</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">彩宝</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">铂金</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">木手串/把件</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">珍珠</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">发饰</a>
								</div>
							</div>
						</div>
					</div>
                    <div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">汽车&nbsp;/&nbsp;</a><a href="#">汽车用品</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">车品满折<b>&gt;</b></a>
                            	<a href="#">全新汽车<b>&gt;</b></a>
                            	<a href="#">车管婆<b>&gt;</b></a>
                                <a href="#">童装<b>&gt;</b></a>
                                <a href="#">内衣<b style="font-family:'宋体'">&gt;</b></a>
                                
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">汽车车型<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">微型车</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">小型车</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">紧凑型车</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">中型车</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">中大型车</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">豪华车</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">MPV</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">SUV</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">跑车</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">汽车价格<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">5万以下</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">5-8万</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">8-10万</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">10-15万</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">15-25万</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">25-40万</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">40万以上</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">汽车品牌<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">宝马</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">一汽-大众</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">上汽大众</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">五菱宝骏</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">奇瑞</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">广汽传祺</a>
                                  <a href="#" class="cate_detail_con_lk" target="_blank">比亚迪</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">维修保养<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">机油</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">轮胎</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">添加剂</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">防冻液</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">滤清器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">蓄电池</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">雨刷</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">刹车片/盘</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">火花塞</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">轮毂</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">维修配件</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">汽车玻璃</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">减震器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">正时皮带</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">汽车喇叭</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">汽修工具</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">改装配件</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">原厂件</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">汽车装饰<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">座垫座套</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">脚垫</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">头枕腰靠</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">方向盘套</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">后备箱垫</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车载支架</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车钥匙扣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">香水</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">炭包/净化剂</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">扶手箱</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">挂件摆件</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车用收纳袋/盒</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">遮阳/雪挡</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车衣</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车贴</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">踏板</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">行李架/箱</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">雨眉</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">装饰条</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">装饰灯</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">功能小件</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车身装饰件</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">车载电器<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">行车记录仪</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车载充电器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车机导航</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车载蓝牙</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">智能驾驶</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">对讲电台</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">倒车雷达</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">导航仪</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">安全预警仪</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车载净化器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车载吸尘器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">汽车音响</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车载冰箱</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">应急电源</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">逆变器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车载影音</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车载生活电器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">车载电器配件</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">礼品鲜花&nbsp;/&nbsp;</a><a href="#">农资绿植</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">优惠专区<b>&gt;</b></a>
                            	<a href="#">男装<b>&gt;</b></a>
                            	<a href="#">女装<b>&gt;</b></a>
                                <a href="#">童装<b>&gt;</b></a>
                                <a href="#">内衣<b style="font-family:'宋体'">&gt;</b></a>
                                
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">火机烟具<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">电子烟</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">烟油</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">打火机</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">烟嘴</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">烟盒</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">烟斗</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">礼品<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">创意礼品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">电子礼品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">工艺礼品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">美妆礼品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">婚庆节庆</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">礼盒礼券</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">礼品定制</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">军刀军具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">古董文玩</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">收藏品</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">礼品文具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">熏香</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">京东卡</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">鲜花速递<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">鲜花</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">每周一花</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">永生花</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">香皂花</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">卡通花束</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">干花</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">绿植园艺<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">绿植盆栽</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">多肉植物</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">花卉</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">苗木</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">种子种球</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">花盆花器</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">园艺土肥</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">园艺工具</a>
                                      <a href="#" class="cate_detail_con_lk" target="_blank">园林机械</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">种子<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">花草林木类</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">蔬菜/菌类</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">瓜果类</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">大田作物类</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">农药<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">杀虫剂</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">杀菌剂</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">除草剂</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">植物生长调节剂</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">肥料<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">氮/磷/钾肥</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">复合肥</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">有机肥</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">生物菌肥</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">水溶/叶面肥</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">畜牧养殖<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">预混料</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">全价料</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">浓缩料</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">饲料添加剂</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">中兽药</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">西兽药</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">兽医器具</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">生产/运输器具</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item" onmouseover="this.className='item on'" onmouseleave="this.className='item'">
						<span><a href="#">图书&nbsp;/&nbsp;</a><a href="#">音像&nbsp;/&nbsp;</a><a href="#">电子书</a><b>></b></span>
						<div class="i-mc">
                        	<div class="ejbox">
                            	<a href="#">优惠专区<b>&gt;</b></a>
                            	<a href="#">男装<b>&gt;</b></a>
                            	<a href="#">女装<b>&gt;</b></a>
                                <a href="#">童装<b>&gt;</b></a>
                                <a href="#">内衣<b style="font-family:'宋体'">&gt;</b></a>
                            </div>
							<div class="ejlei">
								<a href="#" class="ejlei1">女装<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">邮票</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">钱币</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">邮资封片</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">磁卡</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">票证</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">礼品册</a>
                                  </div>
							</div>
							<div class="ejlei">
								<a href="#" class="ejlei1">少儿<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">0-2岁</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">3-6岁</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">7-10岁</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">11-14岁</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">儿童文学</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">绘本</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">科普</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">幼儿启蒙</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">手工游戏</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">智力开发</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">少儿英语</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">动漫卡通</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">学前教育</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">美术书法</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">少儿国学</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">教育<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                  <a href="#" class="cate_detail_con_lk" target="_blank">教材</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">中小学教辅</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">考试</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">外语学习</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">字典词典</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">课外读物</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">英语四六级</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">会计类考试</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">国家公务员</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">文艺<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">小说</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">文学</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">青春文学</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">传记</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">动漫</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">艺术</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">摄影</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">书法</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">音乐</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">绘画</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">经管励志<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                      <a href="#" class="cate_detail_con_lk" target="_blank">管理</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">金融与投资</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">经济</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">励志与成功</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">市场营销</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">股票</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">智能经济</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">人文社科<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                     <a href="#" class="cate_detail_con_lk" target="_blank">历史</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">心理学</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">政治/军事</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">国学/古籍</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">哲学/宗教</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">社会科学</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">法律</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">文化</a>
								</div>
							</div>
                            <div class="ejlei">
								<a href="#" class="ejlei1">生活<b style="font-family:'宋体'; margin-left:5px;">&gt;</b></a>
								<div class="ejlei2">
                                    <a href="#" class="cate_detail_con_lk" target="_blank">育儿/家教</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">孕产/胎教</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">健身保健</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">旅游/地图</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">美食</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">时尚美妆</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">家居</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">手工DIY</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">两性</a>
  <a href="#" class="cate_detail_con_lk" target="_blank">体育</a>
								</div>
							</div>
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

<div style="width:1200px; margin:0 auto; overflow:hidden;">
	<img src="/index/images/bt.jpg" width="100%">
    <ul style="overflow:hidden;width:800px; float:left; margin-top:10px;" class="jp">
        <li class="entry_item entry_item_1">
            <a class="entry_lk J_log" href="#" target="_blank">
                <div class="entry_bg" style="background:#66B687">
                    <div class="entry_info">
                        <h4 class="entry_info_tit">新品首发</h4>
                        <p class="entry_info_desc">新品享免息~</p>
                    </div>
                </div>
                <img src="/index/images/tu1.jpg" data-lazy-img="done" class="entry_img" style="width:390px; height:170px;">
            </a>
        </li>
        <li class="entry_item entry_item_1">
            <a class="entry_lk J_log" href="#" target="_blank">
                <div class="entry_bg" style="background:#e0e271">
                    <div class="entry_info">
                        <h4 class="entry_info_tit">折扣专区</h4>
                        <p class="entry_info_desc">新品享免息~</p>
                    </div>
                </div>
                <img src="/index/images/tu2.jpg" data-lazy-img="done" class="entry_img" style="width:390px; height:170px;">
            </a>
        </li>
        
        <li class="entry_item entry_item_1">
            <a class="entry_lk J_log" href="#" target="_blank">
                <div class="entry_bg" style="background:#b767ad">
                    <div class="entry_info">
                        <h4 class="entry_info_tit">会员专区</h4>
                        <p class="entry_info_desc">新品享免息~</p>
                    </div>
                </div>
                <img src="/index/images/tu3.jpg" data-lazy-img="done" class="entry_img" style="width:390px; height:170px;">
            </a>
        </li>
        <li class="entry_item entry_item_1">
            <a class="entry_lk J_log" href="#" target="_blank">
                <div class="entry_bg" style="background:#7cacd6">
                    <div class="entry_info">
                        <h4 class="entry_info_tit">满减促销</h4>
                        <p class="entry_info_desc">新满199元减100元</p>
                    </div>
                </div>
                <img src="/index/images/tu4.jpg" data-lazy-img="done" class="entry_img" style="width:390px; height:170px;">
            </a>
        </li>
        
        
        
    </ul>
    <div data-am-widget="slider" class="am-slider am-slider-c2" data-am-slider='{&quot;directionNav&quot;:false}' style="width:395px; right:0; float:right; margin-top:10px;">
  <ul class="am-slides" style="height: 350px;">
      
      <li style="height: 350px;">
        	<img src="/index/images/d3.jpg" style="width:395px; height:350px; margin:0;">
          <div class="am-slider-desc">新品首发 新品享免息</div>
         
      </li>
      <li style="height: 350px;">
        	<img src="/index/images/d4.jpg" style="width:395px; height:350px; margin:0;">
          <div class="am-slider-desc">新品首发 新品享免息</div>
         
      </li>
      <li style="height: 350px;">
        	<img src="/index/images/d2.jpg" style="width:395px; height:350px; margin:0;">
          <div class="am-slider-desc">新品首发 新品享免息</div>
         
      </li>
      <li style="height: 350px;">
        	<img src="/index/images/d1.jpg" style="width:395px; height:350px; margin:0;">
          <div class="am-slider-desc">新品首发 新品享免息</div>
         
      </li>
      
  </ul>
</div>
    
</div>

<div class="web">
	<div class="con">
		<ul>
			<li>
			<img src="/index/images/sban5.jpg"/>
			<div class="txt">
				<h3></h3>
				<p></p>
			</div>
			</li>
			<li>
			<img src="/index/images/sban3.jpg"/>
			<div class="txt">
				<h3></h3>
				<p></p>
			</div>
			</li>
            <li>
			<img src="/index/images/sban4.jpg"/>
			<div class="txt">
				<h3></h3>
				<p></p>
			</div>
			</li>
		</ul>
	</div>
</div>
<script type="text/javascript">
$(".con ul li").hover(function(){
	$(this).find(".txt").stop().animate({height:"120px"},400);
	$(this).find(".txt h3").stop().animate({paddingTop:"20px"},400);
},function(){
	$(this).find(".txt").stop().animate({height:"0px"},400);
	$(this).find(".txt h3").stop().animate({paddingTop:"0px"},400);
})
</script>



<div class="module_row module_row_736727 MOD_ID_260932 has-log-mod"  style="width:1200px; margin:0 auto;">
	<div class="mod_row MCUBE_MOD_ID_260932 J_mod_row_show">
		<div class="lazyData clearfix cateTitleBar yahei" data-ptp="_keyword_32495" data-source-type="" data-source-key="32495" data-manual="true">
			<div class="sideIcon" style="background-color: #7CACEF;"></div>
			<div class="cateTitleName col333">
				医疗保健
			</div>
			<div class="cateLinkBox col666">
				热门搜索：<a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank">健康监测</a> | 
                <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank">呼吸制氧</a> | 
                <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank">养生理疗</a> | 
                <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank">康复辅助</a>
			</div>
			<a class="checkMore col666" href="#" target="_blank">查看全部<span class="checkMoreArchor"></span></a>
		</div>
		<div class="floor-con clearfix " data-module-title="男友">
			<!--左边大图-->
			<div class="big-banner-con fl" style="background: #cee2fe; ">
				<!-- 热搜词 -->
				<div class="lazyData big-banner-cate" data-ptp="_keyword_37418" data-source-type="" data-source-key="37418" data-manual="true">
					<a class="big-banner-hotword fl text-hide" href="#" target="_blank">康复</a>
                    <a class="big-banner-hotword fl text-hide" href="#" target="_blank">制氧机</a>
                    <a class="big-banner-hotword fl text-hide" href="#" target="_blank">保健品</a>
                    <a class="big-banner-hotword fl text-hide" href="#" target="_blank">滋补品</a>
                    <a class="big-banner-hotword fl text-hide" href="#" target="_blank">家用医疗</a>
                    <a class="big-banner-hotword fl text-hide" href="#" target="_blank">轮椅</a>
				</div>
				<!-- 文案部分 -->
				<div class="lazyData clearfix fl big-banner-content" data-ptp="_keyword_18883" data-source-type="" data-source-key="18883" data-manual="true">
					<a rel="nofollow" target="_blank" href="#" class="big-banner-item cube-acm-node yahei has-log-mod">
					<div class="title title-base bigBanner-color text-hide yahei" style="color: #333;">
						 医疗仪器
					</div>
					<div class="sub-title title-base bigBanner-color text-hide yahei" style="color: #666;">
						特价大促 全场满减
					</div>
					<div class="big-banner-img J_dynamic_imagebox J_loading_success" img-src="https://s2.mogucdn.com/mlcdn/c45406/170906_7lgcc369al3dll2l0756cki3474c5_300x300.png">
						<img class="J_dynamic_img fill_img" src="/index/images/bj1.png" alt="">
					</div>
					</a>
				</div>
			</div>
			<!-- 中部六张图 -->
			<div class="lazyData clearfix fl" data-ptp="_keyword_32496" data-source-type="" data-source-key="32496" data-manual="true">
				<div class="multi-col-con fl">
					<!-- 中部六张图 -->
					<div class="multi-pic">
						<a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod" data-log-content="3.mce.1_10_1dbqk.32496.0.kJzwcqAUgr5XL.m_310842-pos_0" data-log-index="0" data-ext-acm="3.mce.1_10_1dbqk.32496.0.kJzwcqAUgr5XL.m_310842-pos_0">
						<div class="top-title text-hide yahei col333" style="">
							 传统滋补
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 人气热销 养生保健
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bj2.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 传统滋补
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 人气热销 养生保健
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bj3.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 传统滋补
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 人气热销 养生保健
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bj4.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 传统滋补
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 人气热销 养生保健
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bj5.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 传统滋补
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 人气热销 养生保健
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bj1.png" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 传统滋补
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 人气热销 养生保健
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bj2.jpg" alt="">
						</div>
						</a>
					</div>
				</div>
			</div>
			<!--右边推荐-->
			<!-- 品牌推荐 -->
			<div class="lazyData clearfix fl tofuData" data-ptp="_keyword_31249" data-source-type="" data-source-key="31249" data-manual="true">
				<div class="tofu-col-con fl">
					<div class="recGoodsTitle yahei fl">
						大家都在买
					</div>
					<div class="changeNew yahei fr">
						<span class="changeNewAnchor"></span>换一批
					</div>
					<div class="tofu-col-con-items">
						<a class="recSingleGoodsBox clearfix cube-acm-node has-log-mod" href="#" target="_blank">
						<div class="recGoodsPicBox J_dynamic_imagebox fl J_loading_success" suffix-ratio="1:1">
							<img class="J_dynamic_img fill_img" src="/index/images/bj6.jpg" alt="">
						</div>
						<div class="recGoodsInfo yahei">
							<div class="goodsDesc">
								同仁堂燕窝 燕窝盏 一盏一码 马来进口可溯源 孕妇正品燕窝 白燕盏-二
							</div>
							<div class="goodsPrice">
								￥1799.00
							</div>
							<div class="goodsOriginPrice col999">
								￥1988.00
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="module_row module_row_736718 MOD_ID_260932 has-log-mod" style="width:1200px; margin:0 auto;">
	<div class="mod_row MCUBE_MOD_ID_260932 J_mod_row_show">

		<div class="lazyData clearfix cateTitleBar yahei">
			<div class="sideIcon" style="background-color: #FFA1B8;">
			</div>
			<div class="cateTitleName col333">
				女装
			</div>
			<div class="cateLinkBox col666">
				热门搜索：
				<a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aebs.32489.0.cvbvPqAUgfSFZ.m_242536-pos_0" data-log-index="0">毛呢大衣</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aebw.32489.0.cvbvPqAUgfSFZ.m_242538-pos_1" data-log-index="1">时尚套装</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aebu.32489.0.cvbvPqAUgfSFZ.m_242537-pos_2" data-log-index="2">毛衣</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aebq.32489.0.cvbvPqAUgfSFZ.m_242535-pos_3" data-log-index="3">打底裤</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1dy6u.32489.0.cvbvPqAUgfSFZ.m_325391-pos_4" data-log-index="4">棉衣棉服</a>
			</div>
			<a class="checkMore col666" href="#" target="_blank">查看全部<span class="checkMoreArchor"></span></a>
		</div>
		<div class="floor-con clearfix " data-module-title="女装">
			<!--左边大图-->
			<div class="big-banner-con fl" style="background: #fce6ee; ">
				<!-- 热搜词 -->
				<div class="lazyData big-banner-cate" data-ptp="_keyword_37427" data-source-type="" data-source-key="37427" data-manual="true">
					<a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1bbhq.37427.0.zfiJ0qAUgeb7y.m_264027-pos_0" data-log-index="0">卫衣</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1bbhs.37427.0.zfiJ0qAUgeb7y.m_264028-pos_1" data-log-index="1">连衣裙</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1bbhu.37427.0.zfiJ0qAUgeb7y.m_264029-pos_2" data-log-index="2">秋冬外套</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1bbhw.37427.0.zfiJ0qAUgeb7y.m_264030-pos_3" data-log-index="3">阔腿裤</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1bbhy.37427.0.zfiJ0qAUgeb7y.m_264031-pos_4" data-log-index="4">针织衫</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1bbi0.37427.0.zfiJ0qAUgeb7y.m_264032-pos_5" data-log-index="5">半身裙</a>
				</div>
				<!-- 文案部分 -->
				<div class="lazyData clearfix fl big-banner-content" data-ptp="_keyword_18881" data-source-type="" data-source-key="18881" data-manual="true">
					<a rel="nofollow" target="_blank" href="#" class="big-banner-item cube-acm-node yahei has-log-mod">
					<div class="title title-base bigBanner-color text-hide yahei" style="color: #333;">
						 潮流女装
					</div>
					<div class="sub-title title-base bigBanner-color text-hide yahei" style="color: #666;">
						冬季新品 不止7折
					</div>
					<div class="big-banner-img J_dynamic_imagebox J_loading_success">
						<img class="J_dynamic_img fill_img" src="/index/images/nz1.png" alt="">
					</div>
					</a>
				</div>
			</div>
			<!-- 中部六张图 -->
			<div class="lazyData clearfix fl" data-ptp="_keyword_65338" data-source-type="" data-source-key="65338" data-manual="true">
				<div class="multi-col-con fl">
					<!-- 中部六张图 -->
					<div class="multi-pic">
						<a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 爆款套装
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 搭配指南 美翻整个冬季
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/nz1.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 毛呢榜单
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 抢！网红同款 库存有限
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/nz2.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 特卖毛衣
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 低至49元 温柔整个冬天
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/nz3.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 人气卫衣
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 为减龄神器疯狂打call
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/nz4.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 御寒棉服
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 女神最爱 显瘦温暖两不误
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/nz5.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 显瘦牛仔裤
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 搭配神器 视觉甩肉5KG
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/nz6.jpg" alt="">
						</div>
						</a>
					</div>
				</div>
			</div>
			<!--右边推荐-->
			<!-- 品牌推荐 -->
			<div class="lazyData clearfix fl tofuData" data-ptp="_keyword_32488" data-source-type="" data-source-key="32488" data-manual="true">
				<div class="tofu-col-con fl">
					<div class="tofu-col-con-items">
						<a rel="nofollow" target="_blank" href="#" class="tofu-pic-item fl cube-acm-node has-log-mod">
						<div class="tofu-pic J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/pp1.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="tofu-pic-item fl cube-acm-node has-log-mod">
						<div class="tofu-pic J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/pp2.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="tofu-pic-item fl cube-acm-node has-log-mod">
						<div class="tofu-pic J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/pp3.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="tofu-pic-item fl cube-acm-node has-log-mod">
						<div class="tofu-pic J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/pp4.jpg" alt="">
						</div>
						</a>
                       <a rel="nofollow" target="_blank" href="#" class="tofu-pic-item fl cube-acm-node has-log-mod">
						<div class="tofu-pic J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/pp5.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="tofu-pic-item fl cube-acm-node has-log-mod">
						<div class="tofu-pic J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/pp6.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="tofu-pic-item fl cube-acm-node has-log-mod">
						<div class="tofu-pic J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/pp7.jpg" alt="">
						</div>
						</a>
                        <a rel="nofollow" target="_blank" href="#" class="tofu-pic-item fl cube-acm-node has-log-mod">
						<div class="tofu-pic J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/pp8.jpg" alt="">
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="module_row module_row_736720 MOD_ID_260932 has-log-mod" style="width:1200px; margin:0 auto;">
	<div class="mod_row MCUBE_MOD_ID_260932 J_mod_row_show">

		<!--顶部标题链接-->
		<div class="lazyData clearfix cateTitleBar yahei" data-ptp="_keyword_32498" data-source-type="" data-source-key="32498" data-manual="true">
			<div class="sideIcon" style="background-color: #83C0E6;">
			</div>
			<div class="cateTitleName col333">
				包包
			</div>
			<div class="cateLinkBox col666">
				热门搜索：<a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aa9w.32498.0.5jJjpqAUgeAH4.m_239910-pos_0" data-log-index="0">学院双肩</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aaa2.32498.0.5jJjpqAUgeAH4.m_239913-pos_1" data-log-index="1">短款钱包</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aaa4.32498.0.5jJjpqAUgeAH4.m_239914-pos_2" data-log-index="2">刺绣徽章</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aaag.32498.0.5jJjpqAUgeAH4.m_239920-pos_3" data-log-index="3">男士手拿包</a>
			</div>
			<a class="checkMore col666" href="#" target="_blank">查看全部<span class="checkMoreArchor"></span></a>
		</div>
		<div class="floor-con clearfix " data-module-title="包包">
			<!--左边大图-->
			<div class="big-banner-con fl" style="background: #d8ebf6; ">
				<!-- 热搜词 -->
				<div class="lazyData big-banner-cate" data-ptp="_keyword_37419" data-source-type="" data-source-key="37419" data-manual="true">
					<a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aa92.37419.0.5jJjpqAUgeAE2.m_239895-pos_0" data-log-index="0">宽肩带</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aa96.37419.0.5jJjpqAUgeAE2.m_239897-pos_1" data-log-index="1">马鞍包</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aa9a.37419.0.5jJjpqAUgeAE2.m_239899-pos_2" data-log-index="2">怪萌包</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aa9i.37419.0.5jJjpqAUgeAE2.m_239903-pos_3" data-log-index="3">锁扣包</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aa9k.37419.0.5jJjpqAUgeAE2.m_239904-pos_4" data-log-index="4">铂金包</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aa9q.37419.0.5jJjpqAUgeAE2.m_239907-pos_5" data-log-index="5">旅行箱包</a>
				</div>
				<!-- 文案部分 -->
				<div class="lazyData clearfix fl big-banner-content" data-ptp="_keyword_18884" data-source-type="" data-source-key="18884" data-manual="true">
					<a rel="nofollow" target="_blank" href="#" class="big-banner-item cube-acm-node yahei has-log-mod" data-log-content="3.mce.1_10_1b3u4.18884.0.0geWvqAUgeB9G.m_259066-pos_0" data-log-index="0" data-ext-acm="3.mce.1_10_1b3u4.18884.0.0geWvqAUgeB9G.m_259066-pos_0">
					<div class="title title-base bigBanner-color text-hide yahei" style="color: #333;">
						 点睛美包
					</div>
					<div class="sub-title title-base bigBanner-color text-hide yahei" style="color: #666;">
						新品3折起
					</div>
					<div class="big-banner-img J_dynamic_imagebox J_loading_success">
						<img class="J_dynamic_img fill_img" src="/index/images/bb1.png" alt="">
					</div>
					</a>
				</div>
			</div>
			<!-- 中部六张图 -->
			<div class="lazyData clearfix fl" data-ptp="_keyword_65347" data-source-type="" data-source-key="65347" data-manual="true">
				<div class="multi-col-con fl">
					<!-- 中部六张图 -->
					<div class="multi-pic">
						<a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod" data-log-content="3.mce.1_10_1dhm6.65347.0.0geWvqAUgeB8E.m_314651-pos_0" data-log-index="0" data-ext-acm="3.mce.1_10_1dhm6.65347.0.0geWvqAUgeB8E.m_314651-pos_0">
						<div class="top-title text-hide yahei col333" style="">
							 斜挎包
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 17新款热销中
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bb1.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 双肩包
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 出游必备 百搭双肩包
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bb2.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 手提包
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 时髦好装 多彩手提包
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bb3.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 单肩包
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 解放双手 尽在单肩包
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bb4.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 拉杆箱
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 旅行好伴侣 品质拉杆箱
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bb5.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 钱包
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 买对钱包 财源广进
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bb6.jpg" alt="">
						</div>
						</a>
					</div>
				</div>
			</div>
			<!--右边推荐-->
			<!-- 品牌推荐 -->
			<div class="lazyData clearfix fl tofuData" data-ptp="_keyword_31251" data-source-type="" data-source-key="31251" data-manual="true">
				<div class="tofu-col-con fl">
					<div class="recGoodsTitle yahei fl">
						大家都在买
					</div>
					<div class="changeNew yahei fr">
						<span class="changeNewAnchor"></span>换一批
					</div>
					<div class="tofu-col-con-items">
						<a class="recSingleGoodsBox clearfix cube-acm-node has-log-mod" href="#" target="_blank">
						<div class="recGoodsPicBox J_dynamic_imagebox fl J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/bb7.jpg" alt="">
						</div>
						<div class="recGoodsInfo yahei">
							<div class="goodsDesc">
								箱子万向轮女拉杆箱行李箱女学生密码箱皮箱男旅行箱女学生24寸
							</div>
							<div class="goodsPrice">
								¥ 124.96
							</div>
							<div class="goodsOriginPrice col999">
								¥ 176.00
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="module_row module_row_736724 MOD_ID_260932 has-log-mod" style="width:1200px; margin:0 auto;">
	<div class="mod_row MCUBE_MOD_ID_260932 J_mod_row_show">
		
		<div class="lazyData clearfix cateTitleBar yahei" data-ptp="_keyword_32506" data-source-type="" data-source-key="32506" data-manual="true">
			<div class="sideIcon" style="background-color: #FFA1B8;">
			</div>
			<div class="cateTitleName col333">
				美妆
			</div>
			<div class="cateLinkBox col666">
				热门搜索：<a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aa14.32506.0.zmryYqAUgk8Td.m_239752-pos_0" data-log-index="0">补水面膜</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aa16.32506.0.zmryYqAUgk8Td.m_239753-pos_1" data-log-index="1">保湿套装</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aa18.32506.0.zmryYqAUgk8Td.m_239754-pos_2" data-log-index="2">遮瑕BB</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aa1a.32506.0.zmryYqAUgk8Td.m_239755-pos_3" data-log-index="3">洗面卸妆</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1bbh0.32506.0.zmryYqAUgk8Td.m_264014-pos_4" data-log-index="4">斩男口红</a>
			</div>
			<a class="checkMore col666" href="#" target="_blank">查看全部<span class="checkMoreArchor"></span></a>
		</div>
		<div class="floor-con clearfix " data-module-title="美妆">
			<!--左边大图-->
			<div class="big-banner-con fl" style="background: #ffd4e3; ">
				<!-- 热搜词 -->
				<div class="lazyData big-banner-cate" data-ptp="_keyword_37426" data-source-type="" data-source-key="37426" data-manual="true">
					<a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1a9vi.37426.0.zmryYqAUgk94h.m_239651-pos_0" data-log-index="0">面膜</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1a9vu.37426.0.zmryYqAUgk94h.m_239657-pos_1" data-log-index="1">套装</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1a9w6.37426.0.zmryYqAUgk94h.m_239663-pos_2" data-log-index="2">底妆</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1a9w8.37426.0.zmryYqAUgk94h.m_239664-pos_3" data-log-index="3">口红</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1a9wc.37426.0.zmryYqAUgk94h.m_239666-pos_4" data-log-index="4">洁面</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1a9wa.37426.0.zmryYqAUgk94h.m_239665-pos_5" data-log-index="5">身体护理</a>
				</div>
				<!-- 文案部分 -->
				<div class="lazyData clearfix fl big-banner-content" data-ptp="_keyword_18887" data-source-type="" data-source-key="18887" data-manual="true">
					<a rel="nofollow" target="_blank" href="#" class="big-banner-item cube-acm-node yahei has-log-mod" data-log-content="3.mce.1_10_1faaa.18887.0.zmryYqAUgk8Ue.m_356557-pos_0" data-log-index="0" data-ext-acm="3.mce.1_10_1faaa.18887.0.zmryYqAUgk8Ue.m_356557-pos_0">
					<div class="title title-base bigBanner-color text-hide yahei" style="color: #333;">
						 护肤彩妆
					</div>
					<div class="sub-title title-base bigBanner-color text-hide yahei" style="color: #666;">
						买1送1 大牌满减
					</div>
					<div class="big-banner-img J_dynamic_imagebox J_loading_success">
						<img class="J_dynamic_img fill_img" src="/index/images/mz1.png" alt="">
					</div>
					</a>
				</div>
			</div>
			<!-- 中部六张图 -->
			<div class="lazyData clearfix fl" data-ptp="_keyword_32507" data-source-type="" data-source-key="32507" data-manual="true">
				<div class="multi-col-con fl">
					<!-- 中部六张图 -->
					<div class="multi-pic">
						<a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 美妆大赏
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 爆款抢的早 不怕售罄了
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/mz1.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 必备面膜
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 面膜敷的勤 小脸变水灵
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="index/images/mz2.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 超值套装
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 套装选的牛 省钱你最六
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/mz3.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 底妆遮瑕
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 底妆用的对  永远十八岁
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/mz4.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 斩男口红
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 口红选的好  男神跑不了
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/mz5.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 身体个护
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 护理做的好  老公回家早
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/mz6.jpg" alt="">
						</div>
						</a>
					</div>
				</div>
			</div>
			<!--右边推荐-->
			<!-- 品牌推荐 -->
			<div class="lazyData clearfix fl tofuData" data-ptp="_keyword_31255" data-source-type="" data-source-key="31255" data-manual="true">
				<div class="tofu-col-con fl">
					<div class="recGoodsTitle yahei fl">
						大家都在买
					</div>
					<div class="changeNew yahei fr">
						<span class="changeNewAnchor"></span>换一批
					</div>
					<div class="tofu-col-con-items">
						<a class="recSingleGoodsBox clearfix cube-acm-node has-log-mod" href="#" target="_blank">
						<div class="recGoodsPicBox J_dynamic_imagebox fl J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/mz7.jpg" alt="">
						</div>
						<div class="recGoodsInfo yahei">
							<div class="goodsDesc">
								【第二件半价】植美村素颜霜遮瑕提亮肤色补水面霜懒人霜
							</div>
							<div class="goodsPrice">
								¥ 39.68
							</div>
							<div class="goodsOriginPrice col999">
								¥ 128.00
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="module_row module_row_736725 MOD_ID_260932 has-log-mod" style="width:1200px; margin:0 auto;">
	<div class="mod_row MCUBE_MOD_ID_260932 J_mod_row_show">
		
		<div class="lazyData clearfix cateTitleBar yahei" data-ptp="_keyword_32510" data-source-type="" data-source-key="32510" data-manual="true">
			<div class="sideIcon" style="background-color: #CD947F;">
			</div>
			<div class="cateTitleName col333">
				家居&amp;食品
			</div>
			<div class="cateLinkBox col666">
				热门搜索：<a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aao8.32510.0.zmryYqAUgk8Xg.m_240168-pos_0" data-log-index="0">家纺好货</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aaoa.32510.0.zmryYqAUgk8Xg.m_240169-pos_1" data-log-index="1">纸品洗液</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aaoc.32510.0.zmryYqAUgk8Xg.m_240170-pos_2" data-log-index="2">居家百货</a> | <a class="topLink cube-acm-node col666 has-log-mod" href="#" target="_blank" data-log-content="3.mce.1_10_1aaok.32510.0.zmryYqAUgk8Xg.m_240174-pos_3" data-log-index="3">手机数码</a>
			</div>
			<a class="checkMore col666" href="#" target="_blank">查看全部<span class="checkMoreArchor"></span></a>
		</div>
		<div class="floor-con clearfix " data-module-title="家居">
			<!--左边大图-->
			<div class="big-banner-con fl" style="background: #ece8de; ">
				<!-- 热搜词 -->
				<div class="lazyData big-banner-cate" data-ptp="_keyword_37422" data-source-type="" data-source-key="37422" data-manual="true">
					<a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aagu.37422.0.ph9EoqAUgko5L.m_240035-pos_0" data-log-index="0">手机周边</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aaf6.37422.0.ph9EoqAUgko5L.m_240005-pos_1" data-log-index="1">毛巾浴巾</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aagi.37422.0.ph9EoqAUgko5L.m_240029-pos_2" data-log-index="2">四件套</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aags.37422.0.ph9EoqAUgko5L.m_240034-pos_3" data-log-index="3">零食</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aah0.37422.0.ph9EoqAUgko5L.m_240038-pos_4" data-log-index="4">茶酒冲饮</a><a class="big-banner-hotword fl text-hide" href="#" target="_blank" data-log-content="3.mce.1_10_1aaeu.37422.0.ph9EoqAUgko5L.m_239999-pos_5" data-log-index="5">生鲜水果</a>
				</div>
				<!-- 文案部分 -->
				<div class="lazyData clearfix fl big-banner-content" data-ptp="_keyword_18888" data-source-type="" data-source-key="18888" data-manual="true">
					<a rel="nofollow" target="_blank" href="#" class="big-banner-item cube-acm-node yahei has-log-mod" data-log-content="3.mce.1_10_1bsnk.18888.0.ph9EoqAUgkohO.m_275148-pos_0" data-log-index="0" data-ext-acm="3.mce.1_10_1bsnk.18888.0.ph9EoqAUgkohO.m_275148-pos_0">
					<div class="title title-base bigBanner-color text-hide yahei" style="color: #333;">
						 换季上新
					</div>
					<div class="sub-title title-base bigBanner-color text-hide yahei" style="color: #666;">
						只买性价比最高的
					</div>
					<div class="big-banner-img J_dynamic_imagebox J_loading_success">
						<img class="J_dynamic_img fill_img" src="/index/images/jj1.png" alt="">
					</div>
					</a>
				</div>
			</div>
			<!-- 中部六张图 -->
			<div class="lazyData clearfix fl" data-ptp="_keyword_47363" data-source-type="" data-source-key="47363" data-manual="true">
				<div class="multi-col-con fl">
					<!-- 中部六张图 -->
					<div class="multi-pic">
						<a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 秋冬床品
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 床品特卖全场3折起
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/jj1.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 收纳宝盒
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 收纳神器必备 全场满减
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/jj2.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 手机配件
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 吸睛手机壳全场9元起
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/jj3.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 情趣生活
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 家居生活用品
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/jj4.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 零食大礼包
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 爱她，就送零食大礼包
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/jj5.jpg" alt="">
						</div>
						</a><a rel="nofollow" target="_blank" href="#" class="multi-pic-item-2 fl cube-acm-node has-log-mod">
						<div class="top-title text-hide yahei col333" style="">
							 早秋茶饮
						</div>
						<div class="sub-title top-subTitle text-hide yahei col999" style="">
							 由内而外美美美
						</div>
						<div class="pic-box J_dynamic_imagebox J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/jj6.jpg" alt="">
						</div>
						</a>
					</div>
				</div>
			</div>
			<!--右边推荐-->
			<!-- 品牌推荐 -->
			<div class="lazyData clearfix fl tofuData" data-ptp="_keyword_31256" data-source-type="" data-source-key="31256" data-manual="true">
				<div class="tofu-col-con fl">
					<div class="recGoodsTitle yahei fl">
						大家都在买
					</div>
					<div class="changeNew yahei fr">
						<span class="changeNewAnchor"></span>换一批
					</div>
					<div class="tofu-col-con-items">
						<a class="recSingleGoodsBox clearfix cube-acm-node has-log-mod" href="#" target="_blank">
						<div class="recGoodsPicBox J_dynamic_imagebox fl J_loading_success">
							<img class="J_dynamic_img fill_img" src="/index/images/jj7.jpg" alt="">
						</div>
						<div class="recGoodsInfo yahei">
							<div class="goodsDesc">
								维达抽纸三层卫生纸抽取式纸巾纸面巾130抽/包 中规格
							</div>
							<div class="goodsPrice">
								¥ 9.90
							</div>
							<div class="goodsOriginPrice col999">
								¥ 9.90
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="qing tjk3">
  <div class="flf1 juzhong">
    <img src="/index/images/bt2.jpg" width="100%" style="margin-bottom:10px;">
    <div class="juzhong">
      <div class="fllb">
       <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tu.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt1.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt2.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt3.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt4.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
    <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt4.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="index/images/tt3.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt2.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt1.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tu.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
     <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tu.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt1.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt2.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt3.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt4.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
       <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt4.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt3.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt2.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tt1.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <div class="rxk">
        <a href="#" class="rxcptu"><img src="/index/images/tu.jpg" width="215" height="215"></a>
        <a href="#" class="rxcpm">上海绿源(SHLY) 节能灯 E27 灯泡 白炽灯色  螺旋形 螺旋形8W 色温6500K 白光</a>
        <div class="rxcpjg">￥<span>36.00</span></div>
        <div class="yinc">
          <div class="yjg">￥<span>36.00</span></div>
          <a href="#" class="ygm"><img src="/index/images/che1.png" height="40" class="lf"><div class="lf">购物车</div></a>
        </div>
      </div>
      <!--列表end -->
      </div>
    </div>
  </div>
</div>

<div class="qing juzhong sik0">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>
        <div class="sik" style=" border-left:none;"><img src="/index/images/sik1.png" width="55" height="64"><div class="sikm">正品保证</div></div>
        <div class="sik"><img src="/index/images/sik2.png" width="55" height="64"><div class="sikm">100%实物拍摄</div></div>
        <div class="sik"><img src="/index/images/sik3.png" width="55" height="64"><div class="sikm">实体直营 质优价廉</div></div>
        <div class="sik"><img src="/index/images/sik4.png" width="55" height="64"><div class="sikm">每天上新</div></div>
      </td>
    </tr>
  </table>
</div>
<!--fonav -->
<div class="qing juzhong">
  <dl class="fonav">
  <dd>
      <p>配送方式</p>
      <a href="#">订单状态查询</a><a href="#">支付方式说明</a><a href="#">货到付款区域</a>    </dd><dd>
      <p>新手上路</p>
      <a href="#">订购方式</a><a href="#">购物流程</a><a href="#">会员注册</a>    </dd><dd>
      <p>会员中心</p>
      <a href="#">资金管理</a><a href="#">我的收藏</a><a href="#">我的订单</a>    </dd><dd>
      <p>售后服务</p>
          </dd><dd>
      <p>客服中心</p>
      <a href="#">联系方式</a><a href="#">在线客服</a>    </dd>    <dd>
      <p>关于我们</p>
      <a href="#" target="_blank">活动介绍</a>
      <a href="#" target="_blank">会员专区</a>
      
      <a href="#" target="_blank">我的网店</a>
    </dd>
  </dl>
  <div class="rf hobg"><img src="/index/images/hot.png" width="303" height="107"></div>
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
