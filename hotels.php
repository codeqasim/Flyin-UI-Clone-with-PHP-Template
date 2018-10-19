<link rel="stylesheet" href="assets/css/list.css" />

  <!--
<div class="continer-fluid hotels-mob-view-design ">
  <div class="header-mob">
    <div class="row">
      <div class="col-xs-2 text-left">
        <a class="icon-angle-left mob-back" onclick="goBack()"></a>
      </div>
      <div class="col-xs-8">
        <div class="mob-trip-info-head">
          <strong>Dubai, </strong><span>United Arab Emirates</span>
          <div>Tue, 30 May 2017  -  Sat, 03 Jun 2017 </div>
        </div>
      </div>
      <div class="col-xs-2 text-right">
        <a class="mobile_filter_target" href="#mobile_filter_menu">
          <i class="icon-filter mob-filter"></i>
          <span>Filters</span>
        </a>
      </div>
    </div>
  </div>
  <div class="mob-search-filter">
    <div class="row">
      <div class="col-xs-8">
        <i class="icon-search"></i>
        <input type="text" placeholder="Filter by hotel name">
      </div>
      <div class="col-xs-2">
        <div class="mob-search-filter-box">
          <i class="icon-th-list"></i>
        </div>
      </div>
      <div class="col-xs-2">
        <div class="mob-search-filter-box">
          <i class="icon-map-1"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="mob-rating-price-sec ">
    <div class="row">
      <div class="col-xs-6 text-center mob-border-right">
        <div class="mob-star-rating">STAR RATING</div>
      </div>
      <div class="col-xs-6 text-center">
        <div class="mob-price">PRICE</div>
      </div>
    </div>
  </div>
  <div class="mob-alert-msg">
    <i class="icon-info-circled-alt"></i>
    <span>All prices are including taxes except tourism fees</span>
  </div>
  <div class="mob-availabe-hotels">
    <span>382</span>
    <label>Hotels are available in Dubai</label>
  </div>
</div>-->



<section class="modifySearch hidden-xs">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-sm-9 col-xs-12">
        <h3>
        <span id="hotelCount">380</span>
        <label>Hotels are available in</label>
        Dubai
        </h3>
        <p><span><label data-i18n="room">Room</label>: <span>1</span></span><span><label>Guests</label>  : <span>2</span> </span> <span><label>Nights</label> : <span>25</span></span><span><label>Dates</label> : <span>Sat, 13 May 2017 - Wed, 07 Jun 2017</span> </span> </p>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-12 text-right mdfySrch">
        <a href="#" class="modifyHotelSearch">Modify Search <i class="icon-angle-down"></i></a>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<section class="results-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-12 col-xs-12 filter-Sec mobile_filter_menu" id="mobile_filter_menu">
        <div class="title">
          <h3>
          <a href="#" class="mob-filter-closebtn btn btn-sm btn-default hidden-md hidden-lg"><i class="icon-cancel"></i></a>
          Filter Search
          <div class="pull-right">
            <input class="mob-filter-cencelbtn hidden-sm hidden-md hidden-lg" type="button" value="Cancel" >
            <input class="mob-filter-applybtn hidden-sm hidden-md hidden-lg" type="button" value="Apply">
          </div>
          </h3>
          <span>to narrow down your search</span>
        </div>
        <div class="search-hotel">
          <i class="icon-search hotel-search-icon"></i>
          <input class="form-control" type="search" placeholder="Search by Hotel">
        </div>
        <div class="panel-heading collapser">
          <h4>
          <button  class="bg-none custom_collapse"> <i class="icon-angle-up"></i> </button>
          <span>Price</span>
          </h4>
        </div>
        <div class="collapsing_data" style="margin-bottom: 20px;">
          <div class="slider-vals"> <span>SAR 3267</span> <span class="pull-right">SAR 4658</span> </div>
          <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/>
          <div class="cleafix"></div>
        </div>
        <div class="panel-heading collapser">
          <h4>
          <button  class="bg-none custom_collapse"> <i class="icon-angle-up"></i> </button>
          <span>Star Rating</span>
          </h4>
        </div>
        <div class="collapsing_data box-row">
          <div class="pure-checkbox">
            <input name="" value="1" id="1" type="checkbox">
            <label for="1"><span><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><span class="green-txt">123 Hotels</span></span>
            <span>Price start form <b>SAR 245</b></span>
          </label>
        </div>
        <div class="pure-checkbox">
          <input name="" value="2" id="2" type="checkbox">
          <label for="2"> <span><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i></span><span class="green-txt">123 Hotels</span>
          <span>Price start form <b>SAR 245</b></span>
        </label>
      </div>
      <div class="pure-checkbox">
        <input name="" value="3" id="3" type="checkbox">
        <label for="3"> <span><i class="star icon"></i><i class="star icon"></i><i class="star icon"></i></span><span class="green-txt">123 Hotels</span>
        <span>Price start form <b>SAR 245</b></span>
      </label>
    </div>
    <div class="pure-checkbox">
      <input name="" value="4" id="4" type="checkbox">
      <label for="4"> <span><i class="star icon"></i><i class="star icon"></i></span><span class="green-txt">123 Hotels</span>
      <span>Price start form <b>SAR 245</b></span>
    </label>
  </div>
  <div class="pure-checkbox">
    <input name="" value="5" id="5" type="checkbox">
    <label for="5"> <span><i class="star icon"></i></span><span class="green-txt">123 Hotels</span>
    <span>Price start form <b>SAR 245</b></span>
  </label>
</div>
</div>
<div class="panel-heading collapser">
<h4>
<button  class="bg-none custom_collapse"> <i class="icon-angle-up"></i> </button>
<span>Deals</span>
</h4>
</div>
<div class="collapsing_data box-row">
<div class="pure-checkbox">
  <input name="" value="6" id="6" type="checkbox">
  <label for="6"><span>Hot Deal</span>   </label>
</div>
</div>
<div class="panel-heading collapser">
<h4>
<button  class="bg-none custom_collapse"> <i class="icon-angle-up"></i> </button>
<span>Accomodations Types</span>
</h4>
</div>
<div class="collapsing_data box-row">
<div class="pure-checkbox">
  <input name="" value="7" id="7" type="checkbox">
  <label for="7"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="8" id="8" type="checkbox">
  <label for="8"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="9" id="9" type="checkbox">
  <label for="9"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="10" id="10" type="checkbox">
  <label for="10"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="11" id="11" type="checkbox">
  <label for="11"> <span>Hot Deal</span>   </label>
</div>
</div>
<div class="panel-heading collapser">
<h4>
<button  class="bg-none custom_collapse"> <i class="icon-angle-up"></i></button>
<span>District</span>
</h4>
</div>
<div class="collapsing_data box-row">
<div class="pure-checkbox">
  <input name="" value="12" id="12" type="checkbox">
  <label for="12"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="13" id="13" type="checkbox">
  <label for="13"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="14" id="14" type="checkbox">
  <label for="14"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="15" id="15" type="checkbox">
  <label for="15"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="16" id="16" type="checkbox">
  <label for="16"> <span>Hot Deal</span>   </label>
</div>
</div>
<div class="panel-heading collapser">
<h4>
<button  class="bg-none custom_collapse"> <i class="icon-angle-up"></i> </button>
<span>Hotel Chains</span>
</h4>
</div>
<div class="collapsing_data box-row">
<div class="pure-checkbox">
  <input name="" value="17" id="17" type="checkbox">
  <label for="17"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="18" id="18" type="checkbox">
  <label for="18"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="19" id="19" type="checkbox">
  <label for="19"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="20" id="20" type="checkbox">
  <label for="20"> <span>Hot Deal</span>   </label>
</div>
<div class="pure-checkbox">
  <input name="" value="21" id="21" type="checkbox">
  <label for="21"> <span>Hot Deal</span>   </label>
</div>
</div>
</div>
<div class="col-md-10 col-sm-12 col-xs-12 hotel-info-sec">
<span class="filter-search-close hidden-sm hidden-xs"><i class="icon-angle-left"></i></span>

<div class="hotel-listing">
<div class="sort-sec-hotel hidden-xs">
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-9 col-lg-8">
      <span class="sort-by">Sort by :</span>
      <select class="sort-reco-select">
        <option>Recommended</option>
        <option>1</option>
        <option>2</option>
      </select>
      <select class="sort-reco-select">
        <option>Recommended</option>
        <option>1</option>
        <option>2</option>
      </select>
    </div>
    <div class="col-md-3 col-lg-3  pull-right text-right list-map-tabs">
      <ul class="nav nav-tabs pull-right" role="tablist">
        <li role="presentation" class="active"><a href="#list" class="padding-left" aria-controls="home" role="tab" data-toggle="tab">List</a></li>
        <li role="presentation"><a href="#map" aria-controls="profile" role="tab" data-toggle="tab">map</a></li>
      </ul>
    </div>
    <div class="tab-content padding-zero">
      <div class="tab-pane active fadein" id="list">
      </div>
      <div class="tab-pane fadein hotel-map" id="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1gaQSzilmEXF7ALoUH7VAifYe9fg&hl=en_US" width="100%" height="200" style="border:none;"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="tax-alert-msg hidden-xs"><i class="alarm outline icon"></i><label>All prices are including taxes except tourism fees</label></div>
<?php  for($i=1; $i<=8; $i++) {  ?>
<section class="hotel-info">
    <div class="col-md-4 col-sm-4 col-xs-4">
    <div class="row">
        <img style="min-width:100%" class="img-responsive" style="" src="<?php echo $base_url; ?>assets/img/hotel.jpg" alt="" />
      <!-- <div class="map-wrap">
        <a href="#">Nearby Hotels</a>
        <a href="#">Get Directions</a>
      </div>-->
    </div>
    </div>
    <div class="col-md-5 col-sm-5 col-xs-5 mob-hotel-padding padding-col">
      <div class="row">
      <div class="hotel-information">
        <div class="hotel-title">
          <h3>The ST Regis Dubai</h3>
          <a href="#" class="place-mob">Down Town, Dubai</a>
          <div class="mob-strs-font"><?php  for($j=1; $j<=5; $j++) {  ?><i class="star icon"></i><?php } ?></div>
          <div class="trip-advisor-rating-mob"></div>
          <a class="trip-reviews-mob hidden-xs" href="#">237 Trip Advisor Reviews</a>
          <div>
            <a href="#" class="place hidden-xs"><i class="icon-location-4"></i>Business Bay, Dubai</a>
            <span class="distance hidden-xs">9.7 km  form city enter</span>
            <ul>
              <li>
                <span class="rooms hidden-xs"> 1 X deluxe room </span>
                <span class="room-only hidden-xs">Room Only</span>
                <span class="cancellation green-txt hidden-xs">Free Cancellation</span>
                <!--<div class="hotel-features hidden-xs">
                  <i class="icon-doc-text"></i>
                  <i class="icon-swimming" title="Swimming"></i>
                  <i class="icon-wifi" title="Wifi"></i>
                  <i class="icon-home-1" title="Wifi"></i>
                  <i class="icon-wine" title="Wifi"></i>
                  <i class="icon-users-outline" title="Wifi"></i>
                </div>-->
              </li>
            </ul>
          </div>
        </div>
        <!--<div class="deal">
          <span class="deal-tag">Deal</span>
          <span>Hurry !!! Special Offer 12% Off</span>
        </div>
        <div class="pay-later">Reserve your room at this great price today! You can pay later</div>-->
      </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3 padding-zero">
      <div class="booking-block">
        <div class="price-block">
          US <strong> $80</strong><span></span>
        </div>
        <small class="no-of-nights hidden-xs">For 25 Nights</small>
        <div>
          <a class="btn hotel-book-now">Book <span class="now">Now</span></a>
        </div>
        <small class="tax-include hidden-xs">(Includes all taxes except tourism fees)</small>
        <!--<div class="trip-advisor-rating hidden-xs">
        </div>
        <a class="trip-reviews hidden-xs" href="#">237 Trip Advisor Reviews</a>-->
      </div>
    </div>
    <div class="clearfix"></div>
</section>
<?php } ?>
</div>
<div class="pagination-styled pull-right hidden-xs">
<div class="pagination">
  <a href="#">Previous</a>
  <a href="#" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">...</a>
  <a href="#">13</a>
  <a href="#">14</a>
  <a href="#" class="active">Next</a>
</div>
</div>
</div>
</div>
</div>
</section>
