
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script>
	$("#location-bar a").click(function(event){
  event.preventDefault();
  
  var $this = $(this),
      $li = $this.parent(),
      selectedMap = $this.attr("href"),
      selectedLocation = $this.data('location');
 
  $li.addClass('active').siblings('li').removeClass('active');

  //Update #map bkimage with the image from the location
  $('#map').css('background-image', 'url(' + selectedMap + ')');  
  //update tooltip 'address'
  $('.selectedLocation').text(selectedLocation);
});</script></head>
	<body>
<div id="browser">
  <div id="content">
    <div id="left">
      <div id="map">
        <p>Where To Find Us</p>
        <div class="map-locator">
          <div class="tooltip">
            <ul>
              <li>
                <span class="entypo-location"></span>
                <span class="selectedLocation">India</span>
              </li>
              <li>
                <span class="entypo-mail"></span>
                <a href="#">sayanis80709@gmail.com</a>
              </li>
              <li>
                <span class="entypo-phone"></span>
                (+972 2) 629 06 32
              </li>
            </ul>
          </div>
        </div>
        <div class="zoom"></div>
      </div>
      <ul id="location-bar">
        <li>
          <a class="location" data="USA" href="">India</a>
        </li>
      </ul>
    </div>
    <div id="right">
      <p>Connect</p>
      <div id="social">
        <a class="social">
          <span class="entypo-facebook"></span>
        </a>
        <a class="social">
          <span class="entypo-twitter"></span>
        </a>
        <a class="social">
          <span class="entypo-linkedin"></span>
        </a>
        <a class="social">
          <span class="entypo-gplus"></span>
        </a>
        <a class="social">
          <span class="entypo-instagrem"></span>
        </a>
      </div>
      <form>
        <p>Get in Contact</p>
        <input placeholder="Email" type="email">/ </input>
        <input placeholder="Subject" type="text"></input>
        <textarea placeholder="Message" rows="4"></textarea>
        <input placeholder="Send" type="submit">/ </input>
      </form>
      <p>other way</p>
      <p class="other entypo-mail">
        <a href="#">sayanis80709@gmail.com</a>
      </p>
      <p class="other entypo-phone">(+972 2) 629 06 32</p>
    </div>
  </div>
</div>

</body>
</html>