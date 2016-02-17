<?php
	$margin = 0;
?>
<style>
	<!--
		#cal_body{
		
		}
		
		.cal_container{
			max-width:1300px;
			margin:auto;
			border:1px lightgrey;
			border-style:solid none none solid;
			font-size:13px;
		}
		
		.cal_container > div.cal_cell{
			width: 14.28%;
			height:140px;
			float:left;
			position:relative;
		}
		
		.cal_container > div.cal_cell > div{
			position:absolute;
			top:<?php echo $margin;?>px;
			bottom:<?php echo $margin;?>px;
			left:<?php echo $margin;?>px;
			right:<?php echo $margin;?>px;
			border:1px lightgrey;
			border-style:none solid solid none;
			padding:5px;
			opacity:.8;
		}
		
		.cal_container > div.cal_cell > div:hover{
			opacity:1;
			cursor:pointer;
			background-color:#e6e6e6;
		}
		
		.cal_container > div.cal_cell > div > .date_number{
			color:grey;
		}
		
		.cal_container > div.cal_cell > div > .date_number.today{
			color:red;
			font-weight:bold;
			opacity:.8;
		}
		.cal_tools{
			background-color:#e6e6e6;
			border:solid 1px lightgrey;
			padding:5px;
			max-width:1300px;
			margin:0 auto 20px;
		}
		
		.cal_tools > div{
			display:inline-block;
			padding:5px;
			border:solid 1px lightgrey;
			border-color:#d9d9d9;
			margin-right:3px;
			font-size:13px;
			color:grey;
			background-color:#f2f2f2;
			
		}
	-->
</style>
<script type="text/javascript">
	var view ="month";
	jQuery(window).ready(function(){
		
	});
	
	next = function(view){
		switch(view){
			case 'month':
				
			break;
		}
	}
</script>

<div id="cal_body">
	<div class="cal_tools">
		<div>
			Prev
		</div>
		<div>
			Next
		</div>
	</div>
	
	<div class="cal_container">
	<?php for($i=0;$i<35;$i++):?>
		<div class="cal_cell">
			<div>
				<div class="date_number <?php if($i+1 == date('d')): echo 'today'; endif;?>">
					<?php echo $i+1;?>
				</div>
			</div>
		</div>
	<?php endfor;?>
	<div class="clear"></div>
	</div>
</div>
