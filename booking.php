<div class="continer-fluid hotels-mob-view-design ">
     <div class="header-mob">
           <div class="row">
             <a class="icon-angle-left mob-back" onclick="goBack()"></a>  
            <ul id="progressbar">
		<li class="active">Review Hotel</li>
		<li>Passenger Details</li>
		<li>Payment</li>
	</ul>
           </div>
     </div>
     <div class="mob-guest-detail">
          Enter Guest Detail
     </div>
</div>
<div class="contact-bg-clr">
  <section class="booking-steps hidden-sm hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 text-center hidden-xs">
          <div class="step done">
            <span>1</span>
          </div>
          <label>Review Hotel Details</label>
        </div>
        <div class="col-md-3 col-sm-3 text-center hidden-xs">
          <div class="step active-review">
            <span>2</span>
          </div>
          <label>Review Hotel Details</label>
        </div>
        <div class="col-md-3 col-sm-3 text-center hidden-xs">
          <div class="step">
            <span>3</span>
          </div>
          <label>Review Hotel Details</label>
        </div>
        <div class="col-md-3 col-sm-3 text-center hidden-xs">
          <div class="step">
            <span>4</span>
          </div>
          <label>Review Hotel Details</label>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9">
          <div class="round-border hidden-xs">
            <h3>
              <span>1</span>
              <label>Review Hotel</label>
            </h3>
            <div>
              <div class="row">
                <div class="col-md-4 col-sm-6 hotel-slider">
                  <img src="assets/img/detail-hotel.jpg">
                  <a href="#" class="btn btn-default btn-sm">View Hotel Details</a>
                </div>
                <div class="col-md-8 col-sm-6 contact-htinfo">
                  <h3>Hotel Al Khozama</h3>
                  <span><?php  for($j=1; $j<=4; $j++) {  ?><i class="star icon"></i><?php } ?></span>
                  <p>Dubai Internet City, Sheikh Zayed Road, P.O. Box: 502222, Dubai, UAE.</p>
                  <div class="row">
                    <div class="col-md-6 col-sm-6 border-right">
                      <strong>1 <label>Adult</label> , 2 <label>Nights</label></strong>
                      <div class="contact-roomtype">Room Type:</div>
                      <div class="bathroom">SUITE EXECUTIVE </div>
                      <div class="breakfast">BED AND BREAKFAST</div>
                      <div class="contact-features-icons">
                        <i class="icon-doc-text"></i>
                        <i class="icon-swimming" title="Swimming"></i>
                        <i class="icon-wifi" title="Wifi"></i>
                        <i class="icon-home-1" title="Wifi"></i>
                        <i class="icon-wine" title="Wifi"></i>
                        <i class="icon-users-outline" title="Wifi"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 check-sec">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-4">
                          <label>Check in</label>
                          <span>16/05/2017</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-4">
                          <label>Check out</label>
                          <span>16/05/2017</span>
                        </div>
                      </div>
                      <div class="green-txt">Cancellation Policy</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="round-border">
            <h3 class="hidden-sm hidden-xs">
              <span>2</span>
              <label>Guest Details</label>
              <small> Sign in to your <a href="#">Flyin account</a> or connect using <a href="#">Facebook</a> to book fatsre!</small>
            </h3>
            <div class="guestdetails">
              <h4>
                Room 1: <span class="grey-txt">2 Adults</span>
              </h4>
              <div class="row">
                <div class="col-sm-2 col-md-2 input-fgroup">
                  <label>
                  Title
                  <span>*</span>
                  </label>
                  <select class="form-control">
                    <option value="">Select</option>
                    <option value="Mr">Mr</option>
                    <option value="Miss">Miss</option>
                    <option value="Mrs">Mrs</option>
                  </select>
                </div>
                <div class="col-sm-5 col-md-5 input-fgroup">
                  <label>
                  First Name
                  <span>*</span>
                  </label>
                  <input type="text" placeholder="First Name" class="form-control">
                  <span class="note hidden-xs hidden-sm">Note: Must be 18 or older.</span>
                </div>
                <div class="col-sm-5 col-md-5 input-fgroup">
                  <label>
                  Last Name
                  <span>*</span>
                  </label>
                  <input type="text" placeholder="First Name" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-6 input-fgroup">
                  <label>
                  Email Address
                  <span>*</span>
                  </label>
                  <input type="text" placeholder="First Name" class="form-control">
                </div>
                <div class="col-sm-6 col-md-6 input-fgroup">
                  <label>
                  Phone Number
                  <span>*</span>
                  </label>
                  <input type="text" placeholder="First Name" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-3 padding-col hidden-xs">
          <div class="summary-sec">
            <h2>Summary Detail</h2>
            <div class="smry-htl-info">
              <div class="smry-htl-nme">
                <h3>
                  <i class="sprite-icon detail-hotel-icon"></i>
                  Gloria Hotel
                </h3>
                <small>
                <span>Dubai Internet City, Sheikh Zayed Road, P.O. Box: 502222,
                Dubai, UAE.</span>
                </small>
              </div>
              <div class="detail-night">
                4 Nights:17/05/2017 - 21/05/2017
              </div>
              <div class="total-fare">
                <ul>
                  <li>
                    <span>Total</span>
                    <span class="pull-right">SAR 7458</span>
                  </li>
                </ul>
              </div>
              <div class="tax">
                Includes all taxes except tourism fees
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
            <div class="col-md-9">
                  <div class="btn btn-lg payment-btn hidden-xs">Continue To Payment</div>
            </div>
            <div class="col-md-3">

            </div>

      </div>
    </div>
  </section>
  <button class="btn btn-block mob-continue-booking-btn">CONTINUE BOOKING</button>
</div>