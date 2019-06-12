<!DOCTYPE html>
<html>
	<head>
		<style>
			.header{
				position:absolute;
				margin-top:-50px;
				width:100%;
				height:50px;
			}
			.left,.right{
				width:50%;
				height:50px;
				float:left;
				position:relative;
				text-align:center;
			}
			.left img{
				padding-top:2%;
			}
		
			.right{
				display:flex;
				align-items:center;
			}
		</style>
	</head>
	<body>
		<header class="header">
			<div class="left">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/uslu-yapi.jpg" />
			</div>
			<div class="right">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/fb-ins.jpg" /><span>BİZE ULAŞIN:<b>0 312 489 1990</b></span>

			</div>
		</header>
	</body>
</html>