
jQuery(document).ready(function() {
   
       jQuery(".accordion_set > .select_div").first().addClass('active').attr("aria-expanded", "true").focus();
       jQuery(".content-it").first()
              .addClass('active_tab');
  
        jQuery(".accordion_set > .select_div").click(function() {
    
    
          if (jQuery(this).hasClass("active")) {
            jQuery(this).removeClass("active").attr("aria-expanded", "false");
            jQuery(this).siblings(".content-it").removeClass('active_tab')
          } else {
            jQuery(this)
              jQuery(".accordion_set > .select_div").removeClass("active").attr("aria-expanded", "false");
            jQuery(this).addClass("active").attr("aria-expanded", "true");
            jQuery(".content-it").removeClass('active_tab');         
            jQuery(this).siblings(".content-it").addClass('active_tab').focus();
          }
        });
      });