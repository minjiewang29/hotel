    <div class="special featured">
        <div class="container">
            <div class="ab-w3l-spa">
                <h3 class="tittle">欢迎来到我们的酒店!</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. ever since the 1500s.Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores hasellusMaecenas ac hendrerit purus. Lorem ipsum dolor sit amet.Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </p>
            </div>

            <?php include 'services.php';?>
        </div>
    </div>
    
    <?php include 'featured-facility.php' ?>
    
    <div class="about-bottom">
        <div class="col-md-6 w3l_about_bottom_left">
            <div class="video-grid-single-page-agileits">
                <div data-video="44fbHx7P-t8" id="video"> 
                    <img src="<?php echo base_url('asset/images/watch.jpg');?>" alt="" class="img-responsive" /> 
                </div>
            </div>
            <div class="w3l_about_bottom_left_video">
                <h4>观看视频</h4>
            </div>
        </div>
        
        <div class="col-md-6 w3l_about_bottom_right one">
            <h3 class="tittle why">为什么选择我们 ?</h3>
            <p>Lorem Aenean aliquet nec mi et lacinia. Aliquam maximus iaculis mi, sed efficitur orci efficitur nec.</p>
            <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title asd">
                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Restaurant & Banquets
                            </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body panel_text">
                            Lorem Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.
                      </div>
                    </div>
              </div>
              <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Transportation Included
                            </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                       <div class="panel-body panel_text">
                            Lorem Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.
                      </div>
                    </div>
              </div>
              <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>The best care for our precious visitors
                            </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                       <div class="panel-body panel_text">
                            Lorem Amet quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.
                      </div>
                    </div>

              </div>
              <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Pool Deluxe Room
                            </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                       <div class="panel-body panel_text">
                            Lorem Amet quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.
                      </div>
                    </div>

              </div>
            </div>
        </div>
	<div class="clearfix"> </div>
    </div>

    <div class="about-bottom" id="ab">
	<div class="col-md-6 w3l_about_bottom_right two">
            <h3 class="tittle why">预  订</h3>
            <div class="book-form">
                <form action="#" method="post">
                    <div class="col-md-6 form-date-w3-agileits">
                        <label><i class="fa fa-user" aria-hidden="true"></i> Name :</label>
                        <input type="text" name="name" placeholder="Your name" required="">
                    </div>
                    <div class="col-md-6 form-date-w3-agileits second-agile">
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
                    <div class="col-md-6 form-time-w3layouts second-agile">
                        <label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
                        <input type="time">
                    </div>
                    <div class="col-md-6 form-left-agileits-w3layouts bottom-w3ls">
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
                    <div class="col-md-6 form-left-agileits-w3layouts second-agile">
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
                    <div class="clearfix"></div>
                    <div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
                        <input type="submit" value="Make a Reservation">
                    </div>
                </form>
            </div>
        </div>
	<div class="col-md-6 w3l_about_bottom_left">
            <img src="<?php echo base_url('asset/images/33.jpg');?>" alt="" class="img-responsive" />
            <div class="w3l_about_bottom_left_video book-text">
                    <h4>预订</h4>
            </div>
        </div>
		
        <div class="clearfix"> </div>
    </div>

    <div class="plans-section">
        <div class="container">
            <h3 class="w3l-inner-h-title">Rates and Booking</h3>
            <div class="priceing-table-main">
                <div class="col-md-3 price-grid">
                    <div class="price-block agile">
                       <div class="price-gd-top pric-clr1">
                            <h4>单人间</h4>
                            <h3><span>￥</span>79</h3>
                            <h5>1 晚</h5>
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
                                <a href="#ab" class="scroll" >预订</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid ">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr2">
                            <h4>THE COTTAGE</h4>
                            <h3><span>$</span>119</h3>
                            <h5>1 晚</h5>
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
                                <a href="#ab" class="scroll" >预订</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid lost">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr3">
                            <h4>GUEST HOUSE</h4>
                            <h3><span>$</span>159</h3>
                            <h5>1 晚</h5>
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
                                <a href="#ab" class="scroll" >预订</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid wthree lost">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr4">
                            <h4>THE SEA VILLA</h4>
                            <h3><span>$</span> 199</h3>
                            <h5>1 晚</h5>
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
                                <a href="#ab" class="scroll" >预订</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    
    <!--
    <div class="guests-agile">
        <h3 class="tittle">Our Guests</h3>
        <div class="w3_agileits_testimonial_grids">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3_agileits_testimonial_grid">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <img src="<?php echo base_url('asset/images/admin.jpg');?>" alt=" " class="img-responsive" />
                            </div>
                        </li>
                        <li>
                            <div class="w3_agileits_testimonial_grid">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <img src="<?php echo base_url('asset/images/admin2.jpg');?>" alt=" " class="img-responsive" />
                            </div>
                        </li>
                        <li>
                            <div class="w3_agileits_testimonial_grid">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <img src="<?php echo base_url('asset/images/admin.jpg');?>" alt=" " class="img-responsive" />
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    -->
