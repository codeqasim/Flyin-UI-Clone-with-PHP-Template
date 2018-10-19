<!-- Sidebar -->
<div data-wow-duration="0.3s" data-wow-delay="0s" class="side-toggle wow fadeIn search-form" style="display:none;" id="selector">
  <div class="leavingFrom"> Leaving from <span onclick="selector_close()" class="btn btn-success goBack">Back</span></div>
  <div class="search-bar">
    <div class="group">
      <i class="icon_set_1_icon-41 icon tr"></i>
      <input type="text" autofocus required class="tr form-control input-lg" value="">
      <span class="highlight"></span>
      <label class="tr">Leaving from</label>
    </div>
  </div>
  <div class="cur-location flight">
    <a href="javaScript:void(0);">
    Current Location
    </a>
  </div>
  <div class="recent-search predSerCont flt">
    <p style="display:none;">Recently Searched</p>
    <ul class="psrdd">
      <li class="topRoutesFlt">Top Routes</li>
      <li><a href="#" class="autoRes fltRouteLink" iatacode1="RUH" iatacode2="DXB" cityname1="Riyadh" cityname2="Dubai" citycode1="50754" citycode2="50257">Riyadh (RUH) - Dubai (DXB)</a></li>
      <li><a href="#" class="autoRes fltRouteLink" iatacode1="JED" iatacode2="CAI" cityname1="Jeddah" cityname2="Cairo" citycode1="50419" citycode2="50156">Jeddah (JED) - Cairo (CAI)</a></li>
      <li><a href="#" class="autoRes fltRouteLink" iatacode1="RUH" iatacode2="MNL" cityname1="Riyadh" cityname2="Manila" citycode1="50754" citycode2="50561">Riyadh (RUH) - Manila (MNL)</a></li>
      <li><a href="#" class="autoRes fltRouteLink" iatacode1="RUH" iatacode2="JED" cityname1="Riyadh" cityname2="Jeddah" citycode1="50754" citycode2="50419">Riyadh (RUH) - Jeddah (JED)</a></li>
      <li><a href="#" class="autoRes fltRouteLink" iatacode1="JED" iatacode2="DXB" cityname1="Jeddah" cityname2="Dubai" citycode1="50419" citycode2="50257">Jeddah (JED) - Dubai (DXB)</a></li>
      <li><a href="#" class="autoRes fltRouteLink" iatacode1="RUH" iatacode2="LHE" cityname1="Riyadh" cityname2="Lahore" citycode1="50754" citycode2="55347">Riyadh (RUH) - Lahore (LHE)</a></li>
      <li><a href="#" class="autoRes fltRouteLink" iatacode1="JED" iatacode2="RUH" cityname1="Jeddah" cityname2="Riyadh" citycode1="50419" citycode2="50754">Jeddah (JED) - Riyadh (RUH)</a></li>
    </ul>
  </div>
</div>
<script>
  function selector_open() {
  document.getElementById("selector").style.display = "block";
  }
  function selector_close() {
  document.getElementById("selector").style.display = "none";
  }
</script>
