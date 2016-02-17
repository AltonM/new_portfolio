<!DOCTYPE html>
<html>
	<head>
	<?php
		/*
			index
		*/
		require('header.php');
		
	?>
	</head>
	<body>
		<div id="body">
			<div id="navigation">
				<div id="logo"></div>
				<div></div>
				<div class="nav-opts">
					<div class="nav-item ham">
						<div>
							<i class="fa fa-bars"></i>
						</div>
					</div>
					<?php $pages->load_pages(); ?>
					<!--<div class="clear"></div>-->
				</div>
				<div class="clear"></div>
			</div>
			<div class="ham">
				<i class="fa fa-bars"></i>
			</div>
			<div class="body">
				<div class="carousel">
					<?php
						switch($pages->current_page){
							case 'works':
								require($pages->current_page.'.php');
							break;
							
							case 'live-preview':
								require(str_replace('-','_',$pages->current_page).'.php');
							break;
							
							default:
								require('home.php');
							break;
						}
					?>
					<?php require('contact.php'); ?>
				</div>
			</div>
			<script type="text/javascript">
				if(navtype == 'all'){
					jQuery('#body > .ham').css({'margin-left':'-98px'});
					jQuery('#navigation').css({'margin-left':'0px'});
					jQuery('.body').css({'margin-left':'97px'});
				}
			</script>
		</div>
	</body>
</html>
