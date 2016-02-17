<?php
	/*
		Header
	*/
	require('objs.php');
	$access = true;
	$pages = new pages();
	$p = (isset($_GET['page']))?$_GET['page']:'home';
	$pages->set_current_page($p);
?>
<title>Alton Mais - <?php echo $pages->pages[$pages->current_page]['page'];?></title>
<link rel="stylesheet" type="text/css" href="<?php echo $pages->backtrace();?>style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $pages->backtrace();?>script.js"></script>
<script type="text/javascript">
	navtype = (!getLocalVariable('navType'))?'ham':getLocalVariable('navType');
	jQuery(document).ready(function(){
		jQuery('.nav-item.ham,#body > .ham').click(function(){
			if(jQuery('#navigation').css('margin-left') == '0px'){
				jQuery('#navigation').animate({'margin-left':'-98px'},350,function(){
					jQuery('#body > .ham').animate({'margin-left':'-2px'},350);
					var currentDate = new Date();
					expirationDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate()+1, 0, 0, 0);
					setLocalVariable('navType','ham',expirationDate);
				});
				jQuery('.body').animate({'margin-left':'0px'},350);
			}else{
				jQuery('#body > .ham').animate({'margin-left':'-98px'},350,function(){
					jQuery('#navigation').animate({'margin-left':'0px'},350);
					jQuery('.body').animate({'margin-left':'97px'},350);
					var currentDate = new Date();
					expirationDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate()+1, 0, 0, 0);
					setLocalVariable('navType','all',expirationDate);
				});
			}
		});
		
		jQuery('.nav-item #contact,.nav-item #about').click(function(){
			if(jQuery('#image_holder.contact').css('display') == 'none'){
				jQuery('#image_holder.contact').show().animate({'opacity':'1'},450).click(function(){
					jQuery(this).find('.cover').click(function(){
						jQuery(this).parent().animate({'opacity':'0'},450,function(){
							jQuery(this).hide();
							jQuery('#image_holder.contact > .about').hide().find('div[data-width]').css({'width':'0%'});
							jQuery('#image_holder.contact > .contact').hide();
						})
					});
				});
			}
			
			if(jQuery(this).attr('id') == 'about'){
				jQuery('#image_holder.contact > .contact').hide().css({'opacity':'0'});
				jQuery('#image_holder.contact > .about').show().animate({'opacity':'1'},350,function(){
					jQuery(this).find('div[data-width]').each(function(){
						jQuery(this).animate({'width':jQuery(this).attr('data-width')+'%'},350);
					});
				});
			}else{
				jQuery('#image_holder.contact > .about').hide().css({'opacity':'0'});
				jQuery('#image_holder.contact > .contact').show().animate({'opacity':'1'},350);
			}
		});
		
		<?php if($pages->current_page == 'works'){ ?>
			jQuery('.image > div> .cover').each(function(index){
				var t;
				var el = jQuery(this);
				t = setTimeout(function(){
					jQuery(el).parent().parent().animate({'opacity':'1'},1000,function(){
						jQuery(this).find('.cover').animate({'opacity':'0'},1000);
					})
				},(100*index));
			});
			
			jQuery('.image').mouseover(function(){
				jQuery(this).find('.cover > div:first-of-type').animate({'padding':'5px 15px'},500);
			}).mouseout(function(){
				jQuery(this).find('.cover > div:first-of-type').css({'padding':'5px 0px'});
			});
			
			jQuery('.image').click(function(){
				image_slider(jQuery(this));
			});
			
		<?php } ?>
		
		
			
			jQuery('input').focus(function(){
				jQuery(this).parent().css({'border':'1px solid #90daff','box-shadow':'0 0 11px 2px #e4e4e4'});
			}).blur(function(){
				jQuery(this).parent().css({'border':'solid 1px lightgrey','box-shadow':'none'});
			});
			
			jQuery('textarea').focus(function(){
				jQuery(this).css({'border':'1px solid #90daff','box-shadow':'0 0 11px 2px #e4e4e4'});
			}).blur(function(){
				jQuery(this).css({'border':'solid 1px lightgrey','box-shadow':'none'});
			});
	
	});
</script>
