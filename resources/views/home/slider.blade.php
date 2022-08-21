    <div class="content">
        
        
        


    <!---
    <div class="welcome">
    <div class="container">
    <h2 class="tittle">Welcome To Hotel</h2>
    <p class="wel text">The moment you arrive at Fancy Hotel, you are warmly welcomed by a staff dedicated to providing the personalized service expected of one of the best hotels in the country. Timeless elegance and rich history are infused with contemporary luxury to create unforgettable experiences for business travelers, families and couples who seek out the unique and authentic when choosing a hotel.  

Framed by expansive gardens, charming fountains and grand museums like the Palace of Bolivian tin baron Simón I. Patiño, our prestigious hotel is located in strategy location.

The hotel’s traditional-meets-modern style is reflected in each of our 142 spacious, well-appointed rooms, suites and apart suites. Three superlative dining options – Supay Gastrobar, Carrillon Restaurant and Los Cristales - offer guests the opportunity to savor delicious gourmet cuisine in bright, inviting dining rooms or outdoors overlooking the hotel gardens. Leisure amenities include a beautiful, free-form outdoor pool with a water slide, a well-equipped gym and the indulgent Salutem per Aquam Spa. 

For guests seeking to host a corporate meeting or special event, our convenient, easy-to-reach location in the heart of city’s business and commerce area makes us the ideal choice. From start to finish, our attentive event planning team is available to see to venue design and decorations, customized catering menus, audiovisual equipment, team building activities and special group rates on accommodation for guests staying at the hotel. </p>
    welcome--->

        
    <div class="content">
<!---welcome--->
<div class="welcome">
        <div class="container">
                <h2 class="tittle">Welcome To Fancy Hotel</h2>
                        <p class="wel text"></p>
                <div class="wel-grids">
                   @foreach($sliderdata as $rs)
                        <div class="col-md-3 wel-grid">
                                <img src="{{Storage::url($rs->image)}}" class="img-responsive" style="width: 250px; height: 150px">
                                <h4>{{$rs->title}}</h4>
                                
                                <p class="grid1 ">
               <a href="{{route('product',['id'=>$rs->id])}}"><button type="button" class="btn btn-1 btn-primary">More Detail</button></a>
               <a href="{{route('shopcart.add',['id'=>$rs->id])}}"><button type="button" class="btn btn-1 btn-success">Book Now</button></a>
					
				  </p>
                                
                                
                             
                          
                           
               </div>
            @endforeach
                        <div class="clearfix"></div>
                </div>
				</div>
			</div>
    

                                            
                                            


<!---welcome--->
<div class="resort-section">
<div class="container">
        <h3 class="tittle">Resort latest <span>deals</span></h3>
        <div class="resort-grids">
<!-- start content_slider -->
                <div id="owl-demo" class="owl-carousel">
                    @foreach($sliderdata as $rs)
                <div class="item">
                   <div class="col-md-6 cap-img">
                       <a href="{{route('product',['id'=>$rs->id])}}"> <img src="{{Storage::url($rs->image)}}" class="img-responsive" style="width: 640px; height: 400px"></a>
                                </div>
                                <div class="col-md-6 cap">
                                        <h4>{{$rs->title}}</h4>	
                                    									
                                       <p><br><b>DETAIL:</b><br>{{$rs->detail}}</p>    
                                       <div class="detais">
                                           
                                                <div class="col-md-3 deatils-right">
                                                        <div class="detail-top">
                                                                <span>PER NIGHT</span>
                                                                <h4>{{$rs->price}}</h4>
                                                        </div>
                                                </div>
                                                <div class="clearfix"> </div>
                                        </div>
                                </div>
                    <div class="clearfix"> </div>
                </div>
         @endforeach
                    
        </div>
        </div>
</div>
</div>

    
    
    
    
    





<div class="superlist">
				<div class="container">
					<h3 class="tittle">Our Gallery</h3>
					<p class="wel text"></p>
					<div class="super-grids">
						<div class="col-md-8 super-grid">
							<div class="super-top">
  <a href="{{route('gallery')}}"><img src="{{asset('assets')}}/images/ga3.jpg" class="img-responsive gray" style="width: 800px; height: 426px"> </a>
                                                      
							</div>
							<div class="super-bottom">
								<div class="col-md-6 super-left">
                                                                    <a href="{{route('gallery')}}"><img src="{{asset('assets')}}/images/p.jpg" class="img-responsive gray" style="width: 640px; height: 267px"></a>
								</div>
								<div class="col-md-6 super-right">
                                                                    <a href="{{route('gallery')}}"><img src="{{asset('assets')}}/images/w4.jpg" class="img-responsive gray" style="width: 640px; height: 267px"></a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 super-grid1">
							<div class="super-top">
                                                            <a href="{{route('gallery')}}"><img src="{{asset('assets')}}/images/a3.jpg" class="img-responsive gray" style="width: 440px; height: 567px"></a>
									<h4>Luxury Suite</h4>
									<p>Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
							</div>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
			</div>


    
    
    
    
    
    
    
    
    
    
    
        <!-- end content_slider -->
    

        
      
    <div class="testimonial-section">
    <div class="container">
    <h3 class="tittle"></h3>
    <div class="testimonial-grids">
    <div class="col-md-6 testimonial-grid">
    <div class="testimonial-left">
        <img src="{{asset('assets')}}/images/t1.jpg" class="img-responsive" alt=""/>
    </div>
    <div class="testimonial-right">
        <div class="testimonial-text">
                <h5>Exactly What I Need</h5>
        </div>
        <div class="testimonial-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
        </div>
        <div class="clearfix"></div>
        <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
        <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-6 testimonial-grid test3">
    <div class="testimonial-left">
        <img src="{{asset('assets')}}/images/t2.jpg" class="img-responsive" alt="dint load"/>
    </div>
    <div class="testimonial-right">
        <div class="testimonial-text">
                <h5>Best Support Ever</h5>
        </div>
        <div class="testimonial-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
        </div>
        <div class="clearfix"></div>
        <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
        <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->

    </div>
    <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="testimonial-grids test2">
    <div class="col-md-6 testimonial-grid">
    <div class="testimonial-left">
        <img src="{{asset('assets')}}/images/t3.jpg" class="img-responsive" alt=""/>
    </div>
    <div class="testimonial-right">
        <div class="testimonial-text">
                <h5>Totally Impressed</h5>
        </div>
        <div class="testimonial-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
        </div>
        <div class="clearfix"></div>
        <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
        <div class="testimonial-sign">- Kim Glove</div><!-- /.testimonial-sign -->

    </div>
    <div class="clearfix"></div>
    </div>
    <div class="col-md-6 testimonial-grid test3">
    <div class="testimonial-left">
        <img src="{{asset('assets')}}/images/t8.jpg" class="img-responsive" alt=""/>
    </div>
    <div class="testimonial-right">
        <div class="testimonial-text">
                <h5>Exactly What I Need</h5>
        </div>
        <div class="testimonial-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
        </div>
        <div class="clearfix"></div>
        <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
        <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->

    </div>
    <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="testimonial-grids">
    <div class="col-md-6 testimonial-grid">
    <div class="testimonial-left">
        <img src="{{asset('assets')}}/images/t9.jpg" class="img-responsive" alt=""/>
    </div>
    <div class="testimonial-right">
        <div class="testimonial-text">
                <h5>Exactly What I Need</h5>
        </div>
        <div class="testimonial-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
        </div>
        <div class="clearfix"></div>
        <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
        <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->

    </div>
    <div class="clearfix"></div>
    </div>
    <div class="col-md-6 testimonial-grid test3">
    <div class="testimonial-left">
        <img src="{{asset('assets')}}/images/t10.jpg" class="img-responsive" alt=""/>
    </div>
    <div class="testimonial-right">
        <div class="testimonial-text">
                <h5>Exactly What I Need</h5>
        </div>
        <div class="testimonial-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
        </div>
        <div class="clearfix"></div>
        <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
        <div class="testimonial-sign">-Rachel Fast</div><!-- /.testimonial-sign -->

    </div>
    <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    </div>
    </div>
    </div>
    </div>





