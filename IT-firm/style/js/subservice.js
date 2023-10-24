
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

      const runBtns = document.querySelectorAll('.run')

      runBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
          const boxes = e.target.parentElement.querySelectorAll('.box')
          boxes.forEach(box => {
            const animation = box.style.animation
            box.style.animation = 'none'
            setTimeout(() => {
              box.style.animation = animation
            }, 200)
          })
        })
      })