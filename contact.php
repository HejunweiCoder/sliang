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
	<!--start-banner-->
	<div class="stop">
		<div class="container">
			<div class="stop-top">
				<h3>欢迎您的来信</h3>
			</div>
			<div class="stop-bottom">
				<div class="col-md-4 stop-left">
					<div class="address">
						<h4>ADDRESS</h4>
						<p>西安市<span>莲湖区</span>西稍门十字东南角号开元商住广场第1单元22层12203号</p>
					</div>
					<div class="email">
						<h4>EMAIL</h4>
						<p><a href="mailto:sliangpos@163.com">sliangpos@163.com</a></p>
					</div>
					<div class="phone">
						<h4>PHONE</h4>
						<p>029-85389266</p>
					</div>
				</div>
				<div class="col-md-8 stop-left">
					<h4>SAY HELLO</h4>
					<div class="stop-btm">
                    
						<input type="text" name="iname" id="name" placeholder="姓名">		
					  <input type="text" name="iemail" id="email"  placeholder="Email address">
				        <input type="text" name="iphone" id="phone" placeholder="手机">
						<textarea name="imessage" id="message" placeholder="说点什么ba"></textarea>
							<div class="s-btn">
									<input type="submit" value="submit" id="post">
                                    
						    </div>
                            
                           
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-banner-->
	<?php require 'footer.inc.php';?>
	
<script>
document.getElementById("post").onclick = function() { 
	var request = new XMLHttpRequest();
	request.open("POST", "action.php");
	var data = "iname=" + document.getElementById("name").value 
	                  + "&iemail=" + document.getElementById("email").value 
	                  + "&iphone=" + document.getElementById("phone").value 
	                  + "&imessage=" + document.getElementById("message").value;
	request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	request.send(data);
	request.onreadystatechange = function() {
		if (request.readyState===4) {
			if (request.status===200) { 
				alert("发送成功");
			} else {
				alert("发生错误：" + request.status);
			}
		} 
	}
}
</script>

</body>
</html>