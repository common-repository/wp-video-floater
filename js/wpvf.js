jQuery(window).load(function wpvf_runrun(){
	  if(!Modernizr.touch){
	    jQuery(window).scroll(function(){
	      if(jQuery(this).scrollTop() > 400){
	      		if((jQuery("div.video-plugin-new").hasClass( "wp-video-floater" ))){
	        		jQuery("div.wp-video-floater").removeClass("not-flowplayer");
	        	}
	        	jQuery(".wp-video-floater").addClass("wpvf");
	      } else {
	        	jQuery(".wp-video-floater").removeClass("wpvf");
            		if((jQuery("div.video-plugin-new").hasClass( "wp-video-floater" ))){
	        		jQuery("div.wp-video-floater").removeClass("not-flowplayer");
	        	}

	      }
	    });
	  }
	});
