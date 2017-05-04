    <div class="w3_content_agilleinfo_inner">
        <div class="container">
            <div class="inner-agile-w3l-part-head">
                <h2 class="w3l-inner-h-title">关于我们</h2>
            </div>
            <div class="ab-w3l-spa">
                <img src="<?php echo base_url('asset/images/ab.jpg');?>" alt="" class="img-responsive" />
                <p>
                    介绍酒店情况.
                </p>
            </div>
            
            <?php include 'services.php'; ?>
        </div>

        <?php include 'featured-facility.php' ?>
    </div>
    <div class="plans-section">
				 <div class="container">
				 <h3 class="w3l-inner-h-title">Rates and Booking</h3>
						<div class="priceing-table-main">
				 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr1">
							<h4>SINGLE ROOM</h4>
							<h3><span>$</span>79</h3>
							<h5>1 Night</h5>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
								
									<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								     </ul>
									 <h6 class="bed"><i class="fa fa-bed" aria-hidden="true"></i></h6>
							</div>
							<div class="price-selet pric-sclr1">		    			   
								<a href="#" data-toggle="modal" data-target="#myModal1" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr2">
							<h4>THE COTTAGE</h4>
							<h3><span>$</span>119</h3>
							<h5>1 Night</h5>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								
									<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								</ul>
								<h6 class="bed two"><i class="fa fa-bed" aria-hidden="true"></i></h6>
								
							</div>
							<div class="price-selet pric-sclr2">
								<a href="#" data-toggle="modal" data-target="#myModal1" >Book Now</a>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr3">
							<h4>GUEST HOUSE</h4>
							<h3><span>$</span>159</h3>
							<h5>1 Night</h5>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								</ul>
								<h6 class="bed three"><i class="fa fa-bed" aria-hidden="true"></i></h6>
							</div>
							<div class="price-selet pric-sclr3">
								<a href="#" data-toggle="modal" data-target="#myModal1" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr4">
							<h4>THE SEA VILLA</h4>
							<h3><span>$</span> 199</h3>
							<h5>1 Night</h5>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								</ul>
								<h6 class="bed four"><i class="fa fa-bed" aria-hidden="true"></i></h6>
							</div>
							<div class="price-selet pric-sclr4">
								<a href="#" data-toggle="modal" data-target="#myModal1" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- Modal1 -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Reservation Form</h4>
											<div class="book-form-inner">

											   <form action="#" method="post">
													<div class="col-md-6 form-date-w3-agileits1">
														<label><i class="fa fa-user" aria-hidden="true"></i> Name :</label>
														<input type="text" name="name" placeholder="Your name" required="">
													</div>
													<div class="col-md-6 form-date-w3-agileits1 second-agile1">
														<label><i class="fa fa-envelope" aria-hidden="true"></i> Email :</label>
														<input type="email" name="email" placeholder="Your email" required="">
													</div>
													  <div class="col-md-6 form-date-w3-agileits">
																<label><i class="fa fa-calendar" aria-hidden="true"></i> Arrival Date :</label>
																<input  id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
															
															</div>
												<div class="col-md-6 form-time-w3layouts second-agile">
														<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
														<input type="time">
												</div>
												<div class="col-md-6 form-date-w3-agileits">
															<label><i class="fa fa-calendar" aria-hidden="true"></i> Departure Date :</label>
																<input  id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
																
															</div>
													<div class="col-md-6 form-time-w3layouts1 second-agile1">
															<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
															<input type="time">
													</div>
													<div class="col-md-6 form-left-agileits-w3layouts1 bottom-w3ls1">
															<label><i class="fa fa-home" aria-hidden="true"></i> Choose a Room :</label>
															<select class="form-control">
																<option></option>
																<option>Standard Double Room</option>
																<option>Standard Family Room</option>
																<option>Garden Family Room</option>
																<option>Deluxe Double Room</option>
																<option>Executive Junior Suite</option>
																<option>Maisonette</option>
															</select>
													</div>
													<div class="col-md-6 form-left-agileits-w3layouts1 second-agile1">
															<label><i class="fa fa-users" aria-hidden="true"></i> No.of People :</label>
															<select class="form-control">
																<option></option>
																<option>1 Person</option>
																<option>2 People</option>
																<option>3 People</option>
																<option>4 People</option>
																<option>5 People</option>
																<option>More</option>
															</select>
													</div>
													<div class="clearfix"> </div>
													<div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
														  <input type="submit" value="Make a Reservation">
													</div>
											</form>
								</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->
			
			<!--//content-inner-section-->

