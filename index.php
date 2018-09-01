<?php require 'html.inc.php';?>
<body>
<!--start-banner-->
	<div class="banner" id="home">
			
		<?php require 'header.inc.php';?>
			
		<?php require 'banner.inc.php';?>
		
	</div>
			</div>
		</div>	
	<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
		  <!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->		
	<!--end-banner-->
    <!--start-project-->
    <div class="project">
		<div class="container">
			<div class="project-top">
				<div style="width:100%;height:1px;margin:0px auto;padding:0px;background-color:#D5D5D5;overflow:hidden;"></div><div align="center"><h3>ABOUT US</h3></div><div style="width:100%;height:1px;margin:0px auto;padding:0px;background-color:#D5D5D5;overflow:hidden;"></div>
			</div>
			<div class="project-bottom">
				<div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="portfolio">
					
					<div id="portfoliolist">
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="http://sliangpos.com/images/p-6.jpg" class="b-link-stripe b-animate-go   swipebox"  title="利益">
							     <img src="http://sliangpos.com/images/port-6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">查看</h2>
							  	 </div></a>
			                </div>
						</div>				
						<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="http://sliangpos.com/images/p-2.jpg" class="b-link-stripe b-animate-go   swipebox"  title="推广">
							     <img src="http://sliangpos.com/images/port-2.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">查看</h2>
							  	 </div></a>
			               	</div>
						</div>		
						<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="http://sliangpos.com/images/p-3.jpg" class="b-link-stripe b-animate-go   swipebox"  title="协作">
							     <img src="http://sliangpos.com/images/port-3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">查看</h2>
							  	 </div></a>
			                </div>
						</div>				
						<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="http://sliangpos.com/images/p-4.jpg" class="b-link-stripe b-animate-go   swipebox"  title="效率">
							     <img src="http://sliangpos.com/images/port-4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">查看</h2>
							  	 </div></a>
			                </div>
						</div>	
						<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="http://sliangpos.com/images/p-5.jpg" class="b-link-stripe b-animate-go   swipebox"  title="贴心">
							     <img src="http://sliangpos.com/images/port-5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">查看</h2>
							  	 </div></a>
			                </div> 
						</div>			
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="http://sliangpos.com/images/p-1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="创意">
							     <img src="http://sliangpos.com/images/port-1.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">查看</h2>
							  	 </div></a>
			                </div>
			            </div>		
					</div>
				</div>
			</div>
		</div>
	</div>
        <!--end-project-->
    <!--start-number-->
	<div class="number">
		<div class="container">
			<div class="number-main">
				<h3>从2014年公司成立以来……</h3>
			</div>
			<div class="number-bottom">
				<ul>
					<li>
						<h4>53</h4>
						<p>长期合作伙伴</p>
					</li>
					<li>
						
						<h4>723</h4>
						<p>成功的项目</p>
					</li>
					<li>
						
						<h4>4,232</h4>
						<p>使用者</p>
					</li>
					<li>
						
						<h4>24</h4>
						<p>小时，贴心陪伴</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--end-number-->
    
	<!--start-idea-->
	<div class="idea">
		<div class="container">
			<div class="idea-main">
				<div class="idea-top">
					<div class="col-md-5 idea-left id-left">
						<img src="images/idea-1.png" alt="" />
					</div>
					<div class="col-md-7 idea-right id-right">
						<h3>为什么是pos机？</h3>
						<p><b>移动支付，刚性需求</b><br>中国13亿人总计持有约50亿张银行卡，平均每人拥有3.8张银行卡;中国目前约6000万商家仅有300万商家拥有pos机;95%以上的市场空白，成为继信用卡网银之后，金融行业的市场增长点。<b>一个100万的人口城市，有多少消费行为，就有多大市场！</b></p>
						<div class="i-btn">
							<a href="services.html">更多</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="idea-top">
					<div class="col-md-7 idea-right id-one-left">
						<h3>凭什么选择我们？</h3>
						<p><br><b>实力强大，安全快捷，全面贴心，专业领航</b>
                        <br>本公司与与国内各金融机构及组织进行全方位专业化合作，POS管理平台资助查询交易明细清晰安全。支付快捷，与P2P及O2O于一体，刷卡费率按国家MCC标准，资金结算周期 T+1及T+0，便利快捷。</p>
						<div class="i-btn">
							<a href="about-us.html">更多</a>
						</div>
					</div>
					<div class="col-md-5 idea-left id-one-right">
						<img src="images/idea-2.png" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-idea-->
	
	
	
	<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider5").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	
	
	
	
	<link rel="stylesheet" href="http://sliangpos.com/css/swipebox.css">
	<script src="http://sliangpos.com/js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
	<!-- Portfolio Ends Here -->
	<script type="text/javascript" src="http://sliangpos.com/js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
	
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
		// http://mixitup.io
		$('#portfoliolist').mixitup({
			targetSelector: '.portfolio',
			filterSelector: '.filter',
			effects: ['fade'],
			easing: 'snap',
			// call the hover effect
			onMixEnd: filterList.hoverEffect()
		});				
	
	},
	
	hoverEffect: function () {
	
		// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
				$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
				$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
			function () {
				$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
				$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	
	}

};

// Run the show!
	filterList.init();
	
});	
</script>
	<?php require 'footer.inc.php';?>
</body>
</html>
