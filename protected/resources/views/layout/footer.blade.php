
<div class="templatemo_footer">
  <div class="container">
      <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
          <h2>About Smoothy</h2>
            <p>Etiam faucibus turpis id ipsum egestas porta. Cras in aliquet purus, ac varius turpis. Proin nibh mauris, lacinia at tincidunt egestas, tincidunt eleifend urna. Aliquam erat volutpat.</p>
      </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
          <h2>Services</h2>
            <ul>
              <li>Integer condimentum</li>
              <li>Quisque eget mi felis</li>
              <li>Mauris placerat lacinia</li>
              <li>Cras molestie imperdiet</li>
              <li>Duis vel consectetur</li>
            </ul>
            <div class="clear"></div>
            <div class="templatemo_morelink"><a href="#">and more... </a></div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
          <h2>Flicker</h2>
      <div id="templatemo_flicker" >
      <ul class="nobullet footer_gallery">
            <li><a href="{{ asset("assets/images/flicker/1.jpg") }}" data-rel="lightbox[gallery]"><img src="{{ asset("assets/images/flicker/s1.jpg") }}" alt="image 1" /></a></li>
            <li><a href="{{ asset("assets/images/flicker/2.jpg") }}" data-rel="lightbox[gallery]"><img src="{{ asset("assets/images/flicker/s2.jpg") }}" alt="image 2" /></a></li>
            <li><a href="{{ asset("assets/images/flicker/3.jpg") }}" data-rel="lightbox[gallery]"><img src="{{ asset("assets/images/flicker/s3.jpg") }}" alt="image 3" /></a></li>
            <li><a href="{{ asset("assets/images/flicker/4.jpg") }}" data-rel="lightbox[gallery]"><img src="{{ asset("assets/images/flicker/s4.jpg") }}" alt="image 4" /></a></li>
            <li><a href="{{ asset("assets/images/flicker/5.jpg") }}" data-rel="lightbox[gallery]"><img src="{{ asset("assets/images/flicker/s5.jpg") }}" alt="image 5" /></a></li>
            <li><a href="{{ asset("assets/images/flicker/6.jpg") }}" data-rel="lightbox[gallery]"><img src="{{ asset("assets/images/flicker/s6.jpg") }}" alt="image 6" /></a></li>
            <li><a href="{{ asset("assets/images/flicker/7.jpg") }}" data-rel="lightbox[gallery]"><img src="{{ asset("assets/images/flicker/s7.jpg") }}" alt="image 7" /></a></li>
            <li><a href="{{ asset("assets/images/flicker/8.jpg") }}" data-rel="lightbox[gallery]"><img src="{{ asset("assets/images/flicker/s8.jpg") }}" alt="image 8" /></a></li>
        </ul>
        <br style="clear: left" />
    </div>
      </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        <h2>Contact</h2>
          <span class="left col-xs-1 fa fa-map-marker"></span>
            <span class="right col-xs-11">120-240 Nam bibendum consectetur diam et fringilla</span>
            <div class="clear height10"></div>
            <span class="left col-xs-1 fa fa-phone"></span>
            <span class="right col-xs-11">010-020-0680</span>
            <div class="clear height10"></div>
            <span class="left col-xs-1 fa fa-envelope"></span>
            <span class="right col-xs-11">contact@company.com</span>
            <div class="clear height10"></div>
            <span class="left col-xs-1 fa fa-globe"></span>
            <span class="right col-xs-11">www.company.com</span>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--Footer End-->
<!-- Bottom Start -->
<div class="templatemo_bottom">
  <div class="container">
      <div class="row">
          <div class="left">© 2016
            <a href="#">Disbudpar Bangli</a> Developed by
            <a rel="nofollow" href="http://www.facebook.com/bayu.diarsa"> Bayu Diarsa </a> Design by
            <a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_396_smoothy">Smoothy</a></div>
            <div class="right">
              <a href="#"><div class="fa fa-rss soc"></div></a>
                <a href="#"><div class="fa fa-twitter soc"></div></a>
                <a href="#"><div class="fa fa-linkedin soc"></div></a>
                <a href="#"><div class="fa fa-dribbble soc"></div></a>
                <a href="#"><div class="fa fa-facebook soc"></div></a>
            </div>
        </div>
    </div>
</div>
<!-- Bottom End -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="https://code.jquery.com/jquery.js"></script> -->
<script src="{{ asset("assets/js/jquery-1.10.2.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.cycle2.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.cycle2.carousel.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.nivo.slider.pack.js") }}"></script>
<script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
<script type="text/javascript">
  $(function(){
      var default_view = 'grid';
      if($.cookie('view') !== 'undefined'){
          $.cookie('view', default_view, { expires: 7, path: '/' });
      }
      function get_grid(){
          $('.list').removeClass('list-active');
          $('.grid').addClass('grid-active');
          $('.prod-cnt').animate({opacity:0},function(){
              $('.prod-cnt').removeClass('dbox-list');
              $('.prod-cnt').addClass('dbox');
              $('.prod-cnt').stop().animate({opacity:1});
          });
      }
      function get_list(){
          $('.grid').removeClass('grid-active');
          $('.list').addClass('list-active');
          $('.prod-cnt').animate({opacity:0},function(){
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1});
          });
      }
      if($.cookie('view') == 'list'){
          $('.grid').removeClass('grid-active');
          $('.list').addClass('list-active');
          $('.prod-cnt').animate({opacity:0});
          $('.prod-cnt').removeClass('dbox');
          $('.prod-cnt').addClass('dbox-list');
          $('.prod-cnt').stop().animate({opacity:1});
      }

      if($.cookie('view') == 'grid'){
          $('.list').removeClass('list-active');
          $('.grid').addClass('grid-active');
          $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dboxlist');
              $('.prod-cnt').addClass('dbox');
              $('.prod-cnt').stop().animate({opacity:1});
      }

      $('#list').click(function(){
          $.cookie('view', 'list');
          get_list()
      });

      $('#grid').click(function(){
          $.cookie('view', 'grid');
          get_grid();
      });

      /* filter */
      $('.menuSwitch ul li').click(function(){
          var CategoryID = $(this).attr('category');
          $('.menuSwitch ul li').removeClass('cat-active');
          $(this).addClass('cat-active');

          $('.prod-cnt').each(function(){
              if(($(this).hasClass(CategoryID)) == false){
                 $(this).css({'display':'none'});
              };
          });
          $('.'+CategoryID).fadeIn();

      });
  });
</script>
<script src="{{ asset("assets/js/jquery.singlePageNav.js") }}"></script>

<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
      prevText: '',
      nextText: '',
      controlNav: false,
    });
});
</script>
<script>
  $(document).ready(function(){

    // hide #back-top first
    $("#back-top").hide();

    // fade in #back-top
    $(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('#back-top').fadeIn();
        } else {
          $('#back-top').fadeOut();
        }
      });

      // scroll body to 0px on click
      $('#back-top a').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 800);
        return false;
      });
    });

  });
  </script>
  <script type="text/javascript">
  <!--
      function toggle_visibility(id) {
         var e = document.getElementById(id);
         if(e.style.display == 'block'){
            e.style.display = 'none';
            $('#togg').text('show footer');
        }
         else {
            e.style.display = 'block';
            $('#togg').text('hide footer');
        }
      }
  //-->
  </script>
  <script type="text/javascript" src="{{ asset("assets/js/lib/jquery.mousewheel-3.0.6.pack.js") }}"></script>

  <script type="text/javascript">
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  </script>
  <script src="{{ asset("assets/js/stickUp.min.js") }}" type="text/javascript"></script>
  <script type="text/javascript">
    //initiating jQuery
    jQuery(function($) {
      $(document).ready( function() {
        //enabling stickUp on the '.navbar-wrapper' class
        $('.mWrapper').stickUp();
      });
    });
  </script>
  <script>
 $('a.menu').click(function(){
$('a.menu').removeClass("active");
$(this).addClass("active");
});
  </script>

  <script> <!-- scroll to specific id when click on menu -->
     // Cache selectors
var lastId,
topMenu = $("#top-menu"),
topMenuHeight = topMenu.outerHeight()+15,
// All list items
menuItems = topMenu.find("a"),
// Anchors corresponding to menu items
scrollItems = menuItems.map(function(){
  var item = $($(this).attr("href"));
  if (item.length) { return item; }
});

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
var href = $(this).attr("href"),
  offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
$('html, body').stop().animate({
  scrollTop: offsetTop
}, 300);
e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
// Get container scroll position
var fromTop = $(this).scrollTop()+topMenuHeight;

// Get id of current scroll item
var cur = scrollItems.map(function(){
 if ($(this).offset().top < fromTop)
   return this;
});
// Get the id of the current element
cur = cur[cur.length-1];
var id = cur && cur.length ? cur[0].id : "";

if (lastId !== id) {
   lastId = id;
   // Set/remove active class
   menuItems
     .parent().removeClass("active")
     .end().filter("[href=#"+id+"]").parent().addClass("active");
}
});
  </script>
</body>
</html>
<!--
Free Template by templatemo
http://www.templatemo.com
-->
