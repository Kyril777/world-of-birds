<!-- footer -->
<footer>
<div id ="left-column-connect">
<a id="contact"></a>
<h1>Follow Us</h1>
<ul>
  <li><a href="http://instagram.com/"><img src="https://storage.gra1.cloud.ovh.net/v1/AUTH_1c29e295cfe54b009156f34b40adfc67/media/images/125x125/photos/instagram-android-240012201.png" alt="instagram" /></a></li>

  <li><a href="http://facebook.com/"><img src="http://www.oogazone.com/wp-content/uploads/unique-facebooklogo-photos-125x125.jpg" alt="facebook" /></a></li>
</ul>
<ul>
  <li><a href="http://www.twitter.com/"><img src="https://store.jahia.com/files/live/sites/private-app-store/contents/modules-repository/org/jahia/modules/twitter-api-connector/icon/twitter-api-connector.png" alt="twitter" /></a></li>
  <li><a href="http://www.youtube.com/"><img src="https://storage.gra1.cloud.ovh.net/v1/AUTH_1c29e295cfe54b009156f34b40adfc67/media/images/125x125/photos/youtube-android-130755.png" alt="youtube" /></a></li>
</ul>

</div>
<div id ="right-container-connect">
<div id ="middle-column-connect">
  <h1>Contact Us</h1>
    <form method="post" action="sendmail.php">        	 		<label>Name</label>
        <input name="name" placeholder="Type Here">
          <label>Email</label>
        <input name="email" type="email" placeholder="Type Here">
              <label>Message</label>
      <textarea name="message" placeholder="Type Here"></textarea>
      <label>*What is 2+2? (Anti-spam)</label>
<input name="human" placeholder="Type Here">
             <input id="submit" name="submit" type="submit" value="Submit">
  </form>
</div>
<div id ="right-column-connect">
<h1>Our Commitment</h1>
<p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. </p>
</div>
</div>
</footer>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script>
(function($) {
$.fn.SmoothAnchors = function() {

  function scrollBodyTo(destination, hash) {

      // Change the hash first, then do the scrolling. This retains the standard functionality of the back/forward buttons.
      var scrollmem = $(document).scrollTop();
      window.location.hash = hash;
      $(document).scrollTop(scrollmem);
      $("html,body").animate({
          scrollTop: destination
      }, 500);

  }

  if (typeof $().on == "function") {
      $(document).on('click', 'a[href^="#"]', function() {

          var href = $(this).attr("href");

          if ($(href).length == 0) {

              var nameSelector = "[name=" + href.replace("#", "") + "]";

              if (href == "#") {
                  scrollBodyTo(0, href);
              }
              else if ($(nameSelector).length != 0) {
                  scrollBodyTo($(nameSelector).offset().top, href);
              }
              else {
                  // fine, we'll just follow the original link. gosh.
                  window.location = href;
              }
          }
          else {
              scrollBodyTo($(href).offset().top, href);
          }
          return false;
      });
  }
  else {
      $('a[href^="#"]').click(function() {
          var href = $(this).attr("href");

          if ($(href).length == 0) {

              var nameSelector = "[name=" + href.replace("#", "") + "]";

              if (href == "#") {
                  scrollBodyTo(0, href);
              }
              else if ($(nameSelector).length != 0) {
                  scrollBodyTo($(nameSelector).offset().top, href);
              }
              else {
                  // fine, we'll just follow the original link. gosh.
                  window.location = href;
              }
          }
          else {
              scrollBodyTo($(href).offset().top, href);
          }
          return false;
      });
  }
};
})(jQuery);

$(document).ready(function() {
$().SmoothAnchors();
});
</script>
<script>
var originalNavClasses;

function toggleNav() {
var elem = document.getElementById('navigation_list');
var classes = elem.className;
if (originalNavClasses === undefined) {
  originalNavClasses = classes;
}
elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}
  </script>
  </div>
</body>
</html>	
