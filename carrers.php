<?php require 'html.inc.php';?>
<body>
<!--start-banner-->
	<div class="banner banner1" id="home">
	
		<?php require 'header.inc.php';?>
			
		<?php require 'banner.inc.php';?>
		
	</div>	
	<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->	
	<!--end-banner-->
	<!--start-carrer-->
	<div class="carrer">
		<div class="container">
			<div class="carrer-top">
				<h3>相关职位</h3>
			</div>
			<div class="tabs-box">
			<ul class="tabs-menu">
				<li><a href="#tab1"><span> </span>招聘信息</a></li>
				
				
			</ul>
			<div class="clearfix"> </div>
			<div class="tab-grids">
				<div id="tab1" class="tab-grid">
					<div class="tb-one">
						<h3>客户经理</h3>
						<p>岗位职责：
 1、拓展本地各商户；
 2、协助商户完成pos机有关业务；
 3、对商家实施POS机知识的培训并不定期对商家提供运营跟踪服务。
  <br>
岗位要求：<br>
<br>
1、品行端正，勤奋、诚信、激情、敬业，对餐饮行业有一定的兴趣；<br>
2、优秀的谈判能力，配合团队完成营销项目跟进，并能够独自完成营销项目；<br>
3、善于沟通，有较好表达能力，思维清晰；具备良好的客户服务意识；<br>
4、乐于从事挑战性的工作，抗压力强，能化压力为动力；<br>
5、市场拓展能力强，具有较强的陌生拜访及挖掘客户能力；<br>
6、熟悉pos机申办流程与产品安装流程。<br>
7、有一定的抗压能力。<br>
8、有销售经验者或O2O市场拓展经验者与优先，应届毕业生优先。<br>
</p>
					</div>
					<div class="tb-one">
						<h3>业务代表</h3>
						<p>
1、负责线下快速餐饮业、快速消费品行业、零售业和生活服务类连锁商户等渠道的业务开发；<br>
2、分析客户需求，制定个性化营销方案；<br>
3、熟悉公司产品优势，与商家谈判并达成合作；<br>
4、主动寻找并拜访客户，完成销售指标。<br>
5、了解pos机使用方法和办理流程。<br>
职位要求：
 <br>
1、有销售经验或O2O市场拓展经验者与优先，应届毕业生优先。工资3000+500补助<br>
2、具备良好的人际沟通能力，商户谈判能力，分析和解决问题的能力；<br>
3、熟悉当地餐饮、娱乐、生活服务业等优先。提供补助、定期团队建设活动。<br>
</p>
					</div>
					<div class="tb-one">
						<h3>职位申请：</h3>
							<div class="tb-two">
								<form method="post" action="action.php">
								<input type="text" name="iname" placeholder="姓名">		
					 			<input type="text" name="iemail"  placeholder="Email address">
				       			<input type="text" name="iphone" placeholder="手机">
								<textarea name="imessage" placeholder="说点什么ba"></textarea>
                                <div class="s-btn">
                                        <input type="submit" value="提交">
                                        
                                </div>
                            </form>
							</div>   				
					</div>
				</div>
				<div id="tab2" class="tab-grid">	
				</div>
			</div>
		</div>
		</div>
	</div>
	<!--start-carrer-->
	<!----- Comman-js-files ----->
		<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$("#tab3").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
			});
		</script>
		<!----- Comman-js-files ----->
	<?php require 'footer.inc.php';?>
</body>
</html>