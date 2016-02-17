<?php
	/*
		Contact
	*/
?>
<div id="image_holder" class="contact">
	<div class="cover"></div>
	<div class="contact">
		<div class="ptitle" style="display:none;">
			<div>Contact Me</div>
		</div>
		<form action="" method="post">
			<div id="contact_form">	
				<div class="input" ><input type="text" name="Name" placeholder="* Name"/></div>
				<div class="input" ><input type="text" name="email" placeholder="* Email"/></div>
				<div class="input" ><input type="text" name="phone" placeholder="Phone Number"/></div>
				<div class="input" ><input type="text" name="subject" placeholder="Subject"/></div>
				<textarea placeholder="* Message"></textarea>
				<div class="submit">
					<div>
						<div><i class="fa fa-paper-plane-o"></i></div>
						<div>Send</div>
					</div>
				</div>
			</div>
		<form>
	</div>
	
	<?php require('about.php'); ?>
</div>
