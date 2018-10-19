<div class="panel-body">
  <div class="flight-selection fr">
    <div class="col-md-6 col-xs-2 check-width row">
      <div class="pure-checkbox">
        <input id="checkbox1" name="stars" type="radio" data-type="round" checked class="checkbox flightradio" value="1">
        <label for="checkbox1">Round Trip </label>
      </div>
    </div>
    <div class="col-md-6 col-xs-2 check-width row">
      <div class="pure-checkbox">
        <input id="checkbox2" name="stars" type="radio" data-type="oneway" class="checkbox flightradio" value="2">
        <label for="checkbox2">One Way</label>
      </div>
    </div>
  </div>
  <!--<div class="col-md-2 col-xs-2 check-width">
    <div class="pure-radiobutton row">
        <input id="checkbox3" name="stars" type="radio" data-type="multicity" class="checkbox flightradio" value="3">
        <label for="checkbox3">
        Multi City
        </label>
    </div>
    </div>-->
  <div class="clearfix"></div>
  <div class="search-form">
    <div class="col-md-3 col-sm-6 col-xs-12 input-form fr">
      <div class="group">
        <i class="icon_set_1_icon-37 icon tr"></i>
        <input onclick="selector_open()" type="text" required class="tr form-control input-lg" value="Lahore, Pakistan">
        <span class="highlight"></span>
        <label class="tr">Leaving from</label>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 input-form fr">
      <div class="group">
        <i class="icon_set_1_icon-41 icon tr"></i>
        <input onclick="selector_open()" type="text" required class="tr form-control input-lg" value="Dubai, Sharjah">
        <span class="highlight"></span>
        <label class="tr">Going to</label>
      </div>
    </div>
    <div class="col-md-2 col-xs-6 input-form fr" id="rangestart">
      <div class="dates">
        <label class="tr">Departing</label>
        <i class="icon_set_1_icon-53 icon tr"></i>
        <input type="text"  required class="form-control input-lg dpd1 tr" readonly value="10/10/2017">
      </div>
    </div>
    <div class="col-md-2 col-xs-6 oneway-hide input-form fr" id="rangeend">
      <div class="dates">
        <label class="tr">Returning</label>
        <i class="icon_set_1_icon-53 icon tr"></i>
        <input type="text"  required class="tr form-control input-lg dpd2" readonly value="15/10/2017">
      </div>
    </div>
    <div class="col-md-1 col-xs-12 traveller-field input-form fr" >
      <div class="group">
        <i class="icon_set_1_icon-70 icon tr"></i>
        <input value="1" type="text" data-toggle="modal" data-target="#travellers" required class="tr form-control input-lg guestinput" readonly value="2">
        <span class="highlight"></span>
        <span class="bar"></span>
        <label class="tr">Guest</label>
      </div>
    </div>
    <div class="col-md-1 col-xs-12 input-form fr">
      <button class="btn btn-danger btn-lg btn-block tr bb">SEARCH</button>
    </div>

<!--<section id="multicity" style="display: none;">
      <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-6 search-field">
       <label>Leaving from</label>
       <div class="icon">
           <div class="ui input left icon">
               <i class="icon_set_1_icon-41 icon"></i>
               <input type="text"  class="form-control" placeholder="Flying from">
           </div>
       </div>
      </div>
      <div class="col-md-3 col-xs-6 search-field">
       <label>Going To</label>
       <div class="ui input left icon">
           <i class="icon_set_1_icon-37 icon"></i>
           <input type="text"  class="form-control" placeholder="Flying To">
       </div>
      </div>
      <div class="col-md-2 col-xs-6 date-field">
       <label>Departing</label>
       <div class="field">
           <div class="ui calendar" id="rangestart4">
               <div class="ui input left icon">
                   <i class="calendar icon"></i>
                   <input type="text"  class="form-control" placeholder="Departure">
               </div>
           </div>
       </div>
      </div>
      </div>
      </section>-->
  </div>
  <div class="clearfix form-group"></div>

  <div class="row mt-16">

   <div class="col-md-3 col-sm-8 col-xs-6 form-horizontal">

  <div class="row">
              <div class="col-md-44 col-sm-12 col-xs-12 fl">

              <select id="basic" class="selectpicker show-tick form-control">
            <option value="Economy">Economy CLASS</option>
                  <option value="Business">Business CLASS</option>
                  <option value="First">First CLASS</option>
        </select>


              </div>
            </div>
            </div>


  <div class="col-md-2 col-sm-4 col-xs-6">
  <div class="pure-checkbox fr">
    <input class="fr" name="" value="5" id="nonestop"  type="checkbox">
    <label class="fl" for="nonestop"> NONE STOPS </label>
  </div>
  </div>


            </div>










  <div class="clearfix"></div>
  <div class="country-names hidden-xs hide-list">
    <div class="fr">
      <a href="#">Riyadh - Dubai</a>
      <a href="#">Riyadh - Dubai</a>
      <a href="#">Riyadh - Dubai</a>
      <a href="#">Riyadh - Dubai</a>
      <a href="#">Riyadh - Dubai</a>
      <a href="#">Riyadh - Dubai</a>
      <a href="#">Riyadh - Dubai</a>
      <a href="#">Riyadh - Dubai</a>
    </div>
  </div>
</div>
<script type="text/javascript">
$(function(){$("#multicity").hide();$(".flightradio").on("click",function(){$("#multicity").hide();var type=$(this).data('type');$("#"+type).show();if(type!="round"){$(".oneway-hide").hide();}else{$(".oneway-hide").show();}})
$(".travellercount").on("change",function(){var guestcount=0;var ftype=$("#classtype").val();$(".travellercount").each(function(index){guestcount+=parseInt($(this).val());});var travtext=guestcount+" Traveller "+ftype;if(guestcount>1){travtext=guestcount+" Travellers, "+ftype;}
$(".guestinput").val(travtext);console.log(guestcount);});$("#classtype").on("change",function(){$(".travellercount").trigger("change");});})
</script>
