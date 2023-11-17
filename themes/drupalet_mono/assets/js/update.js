jQuery(document).ready(function() {
	
	if (jQuery('.remove-row-class').length) {
		jQuery('.remove-row-class').each(function(){
			//jQuery(this).children(".container").removeClass("container");
			jQuery(this).children(".container").children(".row").removeClass("row");
		});
		
		
	}
	
	if (jQuery('.remove-container-class').length) {
		jQuery('.remove-container-class').each(function(){
			jQuery(this).children(".container").removeClass("container");
		});
		
	}
	if (jQuery('.form-contact-business-2').length) {
		jQuery('.form-contact-business-2').each(function(){
			jQuery(this).children(".webform-elements").addClass("row");
			jQuery(this).find(".webform-section-wrapper").addClass("row");
		});
		
	}
	if (jQuery('.progress-box').length) {
		jQuery('.progress-box').each(function(){
			var aria = jQuery(this).children(".progress").children(".progress-bar").attr("aria-valuenow");
			jQuery(this).children(".progress").children(".progress-bar").css("width",aria+"%");
			
		});
		
	}
	
	
	//Set subtitle
	if (jQuery('.section').length) {
		jQuery('.section').each(function(){
			
			if(jQuery(this).attr("data-sub-title")){
				var subtitle = jQuery(this).attr("data-sub-title");
			
				if (subtitle !== ''){
					jQuery(this).find(".subtitle-section").html(subtitle);
				}
			}else{
				jQuery(this).find(".subtitle-section").hide();
			}
			
			if(jQuery(this).attr("data-title")){
				var dttitle = jQuery(this).attr("data-title");
			
				if (dttitle !== ''){
					jQuery(this).find(".title-section").html(dttitle);
				}
			}
			
			//desction section 
			if(jQuery(this).attr("data-block-desc")){
				var desc_section = jQuery(this).attr("data-block-desc");
			
				if (desc_section !== ''){
					jQuery(this).find(".desc-section").html(desc_section).show();
					
				}
			}
			
			
		});
		
	}
	
	/*if (jQuery('.remove-content-block-section').length) {TETEAM MEMBERSAM MEMBERS
		jQuery('.remove-content-block-section').each(function(){
			jQuery(this).children(".container").children(".content-block-section").removeClass("content-block-section");
		});
		
	}
	
	
	if (jQuery('.item .bg-image-services-block').length) {
		
		jQuery('.item .bg-image-services-block').each(function(){
			var bg = jQuery(this).attr("bgservices");
			jQuery(this).css('background-image', 'url(' + bg + ')');
		  });
	}
	if (jQuery('.bg-image-services-block-hp').length) {
		
		jQuery('.bg-image-services-block-hp').each(function(){
			var bg = jQuery(this).attr("bgservices");
			jQuery(this).css('background-image', 'url(' + bg + ')');
		  });
	}*/
	
	
});

