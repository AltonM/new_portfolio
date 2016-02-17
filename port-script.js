/*
	JS
*/

function image_slider(el){
	var image_array = [],container_width=0,container_height=0,image_index=0;
	jQuery('#image_over > .image').html('');
	jQuery('#image_over').animate({'top':'0%'},750,function(){
		
		jQuery('#image_over > .controls').show();
		
		jQuery(el).find('div[data-image]').each(function(){
			image_array[image_array.length] = jQuery(this).attr('data-image');
		});
		container_width = jQuery('#image_over').width();
		container_height = jQuery('#image_over').height();
		
		jQuery('#image_over > .image').append('<div style="width:'+(container_width*image_array.length)+'"></div>');
		
		jQuery('#image_over > .controls > #info > div:first-of-type').html((image_index+1)+'/'+image_array.length);
		jQuery('#image_over > .controls > #info > div:last-of-type').prev().html('jQuery, PHP, Javascript, HTML, CSS');
		jQuery('#image_over > .controls > #info > div:last-of-type').html('Web production of the a new dashboard screen for schoolwide,inc');
		
		for(i=0;i<image_array.length;i++){
			jQuery('#image_over > .image > div').append('<div style="width:'+container_width+'px;"><div style="height:'+(container_height)+'px"><img src="'+image_array[i]+'" /></div></div>');
		}
	});
	
	
}


function getLocalVariable(name){
	var found = false;
	
	if(typeof(Storage) !== "undefined") {
		if(sessionStorage[name]){
			found = sessionStorage[name];
		}
	}else{
		x = document.cookie.split(';');
		for(o in x){
			var s = x[o].split('=');
			if(s[0] == name){
				found = s[1];
				break;
			}
		}
	}
	return found;
}

function setLocalVariable(name,cont,expire,remove){
	date = new Date();
	if(typeof(Storage) !== "undefined") {
		/*
			Set the local session to expire when the user closes the browser.
		*/
		sessionStorage[name] = cont;
	} else {
		/*
			Set the cookie to expire the next day
		*/
		document.cookie=name+"="+cont+"; expires="+expire+" UTC";
	}
}
