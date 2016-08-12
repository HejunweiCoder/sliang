<!--Doctype HTML
Author: hejunwei&majialichen
Author URL: http://9thnet.com
-->
<!DOCTYPE html>
<html>
<head>
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
	<!--start-error-->
	<div class="error">
		<div class="container">
			<div class="error-main">
				<h3>404</h3>
				<p>oops! something goes wrong</p>
				<div class="error-btn">
					<a href="index.html">返回首页</a>
				</div>
			</div>
		</div>
	</div>
	<!--end-error-->
	<?php require 'footer.inc.php';?>
</body>
</html>