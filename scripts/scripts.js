(function ($) {
    $(function(){

      // GLOBAL VARIABLES =============================
  		wndw = $(window);
  		bod = $('body');
  		htmlheadbod = $('html,head,body'),
      mtrig = $('.mobile-trigger'),
      mmenu = $('#mobile-menu'),
      ovrly = $('.overlay');

      // HELPER FUNCTIONS ======================
  		function placeBgImg(container,path) {
  		  container.css({
  		    'background-image': 'url(' + path + ')'
  		  });
  		}//placeBgImg()

      // GLOBAL ================================
      mtrig.on('click',function(){
        $(this).toggleClass('vis');
        bod.toggleClass('vis');
        ovrly.toggleClass('vis');
        mmenu.toggleClass('vis');
      });

      function addScroll() {
        scrTop = wndw.scrollTop();
        wwdth = wndw.width();
        if ( scrTop > 9 || wwdth < 890 ) {
          bod.addClass('scrolled');
        } else {
          bod.removeClass('scrolled');
        }
      }

      // RANDOMIZE HOME HERO BACKGROUND IMAGE ==================
      var bgArray = ['bg-01','bg-02','bg-03'];
      var randomBg = bgArray[Math.floor(Math.random()*bgArray.length)];
      $('.home .featured-post').addClass(randomBg);

      // LOAD EVENT ============================
  		wndw.on('load',function(){
        addScroll();
  		});

  		// SCROLL EVENT ============================
  		wndw.on('scroll',function(){
        addScroll();
  		});

  		// RESIZE EVENT ============================
  		wndw.on('resize',function(){
        addScroll();
  		});

    });
}(jQuery));
