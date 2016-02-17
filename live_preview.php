<?php
	//Live preview

	
	$projects = array(
		array(
			'title'=>'Image Cropping'
			,'link'=>'image-cropping/'
			,'page'=>'image-cropping'
			,'src'=>'photocrop.php'
			,'active'=>true
		)
		,array(
			'title'=>'Calendar'
			,'link'=>'calendar/'
			,'page'=>'calendar'
			,'src'=>'calendar.php'
			,'active'=>true
		)
		,array(
			'title'=>'Secret Santa Picker'
			,'link'=>'santapicker/'
			,'page'=>'santapicker'
			,'src'=>'santapicker.php'
			,'active'=>true
		)
	);
	
	if( isset( $_GET['work'] ) ){
		foreach($projects as $p){
			if( $p['page'] == $_GET['work'] && $p['active'] ){
				$project = $p;
			}
		}
	}
	
	if( isset( $project ) ){
		include( $project['src'] );
	}else{ ?>
	
		<div id="live-body">
		<?php foreach($projects as $p): if( $p['active'] ): ?>
			<div class="project">
				<a href="<?php echo $p['link'];?>">
				<div>
					<div><?php echo $p['title'];?></div>
				</div>
				</a>
			</div>
		<?php endif; endforeach; ?> 
		</div>
	</body>
	<?php 
	}
?>
<!--Live Preview-->
