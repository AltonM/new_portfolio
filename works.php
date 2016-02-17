<?php
	/*
	
	*/
	$projects = new project();
	$projects->get_all_projects();
?>
<div id="image_holder">
	<div class="ptitle">
		<div>Portfolio</div>
	</div>
	
	<?php  foreach($projects->projects as $p){ ?>
		<div class="image">
			<div>
				<div class="cover">
					<div><?php echo $p[0]['project_name'];?></div>
					<br />
					<div><?php echo $p[0]['company'];?></div>
				</div>
				<div style="background-image:url(<?php echo $pages->backtrace();?>../portfolio/project_images/<?php echo $p[0]['image'];?>);">
					<?php  foreach($p as $i){ ?>
						<div data-image="<?php echo $pages->backtrace();?>../portfolio/project_images/<?php echo $i['image'];?>"></div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="clear"></div>
	<div id="image_over">
			<div class="closer" onclick="jQuery(this).parent().animate({'top':'100%'},750);jQuery(this).parent().find('.controls').hide();">
				<i class="fa fa-times"></i>
			</div>
			<div class="controls">
				<div class="arrow left">
					<i class="fa fa-chevron-left"></i>
				</div>
				<div class="arrow right">
					<i class="fa fa-chevron-right"></i>
				</div>
				
				<div id="info">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="image"></div>
	</div>
</div>
