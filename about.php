<?php
	/*
		about
	*/
	
	$skills = array(
		array(
		'name'=>'PHP'
		,'percentage'=>'10'
		,'info'=>'My name is Alton Mais and I am a web developer who specializesn'
		)
		,array(
		'name'=>'HTML'
		,'percentage'=>'30'
		,'info'=>'My name is Alton Mais and I am a web developer '
		)
		,array(
		'name'=>'Javascript'
		,'percentage'=>'30'
		,'info'=>'My name is Alton Mais and I am a web developer '
		)
		,array(
		'name'=>'CSS'
		,'percentage'=>'50'
		,'info'=>'My name is Alton Mais and I am a web developer '
		)
		,array(
		'name'=>'AJAX'
		,'percentage'=>'50'
		,'info'=>'My name is Alton Mais and I am a web developer '
		)
		,array(
		'name'=>'MYSQL'
		,'percentage'=>'50'
		,'info'=>'My name is Alton Mais and I am a web developer '
		)
	)
?>
<div class="about" style="background-color: rgba(255, 255, 255, 0.7);background:none;">
	<div class="ptitle" style="display:none;">
		<div>About Me</div>
	</div>
	<div class="about"  style="">
		<div style="width:200px;">
			<?php //layered_words('about me');?>
			<div><span>A</span>bout Me</div>
			<div>A<span>b</span>out Me</div>
			<div>Ab<span>o</span>ut Me</div>
			<div>Abo<span>u</span>t Me</div>
			<div>Abou<span>t</span> Me</div>
			<div>About <span>M</span>e</div>
			<div>bout <span>e</span>M</div>
		</div>
		<div style="display:block;color:white;oveflow:hidden;max-width:70%;float:none;">
			<div>Who I am</div>
			 <p>My name is Alton Mais and I am a web developer who specializes in dynamic website and application derived from PHP, Javascript and AJAX. I am currently working as Web Application Developer in Long Island, NY building applications that enhance the learning experience for students.My favorite language to work with is PHP as I enjoy building dynamic web pages and applications, with AJAXed content. I also enjoy building well designed web pages and watching them come to life.</p>

			<p>I love being part of a development team, where we can share ideas build applications together as a team and learn from each other. My dream is to master as many development languages as possible to challenge myself as well as become diverse.</p>
		</div>
		<div class="clear"></div>
		<div class="skills">
			<div style="display:inline-block;">
				<?php $pos = 'right'; foreach($skills as $index=>$s): $pos = ($pos == 'right')?'left':'right'; ?>
					<div class="skill <?php /*$pos = (count($skills) - ($index+1) < 1 && $pos == 'left')?'center':$pos;*/ echo $pos;?>">
						<div></div>
						<div><div data-width="<?php echo $s['percentage'];?>"></div></div>
						<div class="c"><?php echo $s['name'];?></div>
						<div class="clear"></div>
						<div><?php echo $s['info'];?></div>
					</div>
				<?php endforeach; ?>
				
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
