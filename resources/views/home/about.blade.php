@extends('layouts.frontbase')
 
@section('title','About Us/'. $setting->title)

@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')




<div class="container" ...>
    
    <div class="container" ...>
        
        <div class="row">
            {!! $setting->aboutus !!}
          
        </div>
    </div>
</div>
    

<div class="content">
			<div class="about-section">
				<div class="container">
					<h2 class="tittle">About the Fancy Hotel</h2>
					<div class="about-grids">
						<div class="col-md-4 about-grid">
							<h4>About Us</h4>
							<p>The moment you arrive at Fancy Hotel, you are warmly welcomed by a staff dedicated to providing the personalized service expected of one of the best hotels in the country. Timeless elegance and rich history are infused with contemporary luxury to create unforgettable experiences for business travelers, families and couples who seek out the unique and authentic when choosing a hotel.  

Framed by expansive gardens, charming fountains and grand museums like the Palace of Bolivian tin baron Simón I. Patiño, our prestigious hotel is located in strategy location.

The hotel’s traditional-meets-modern style is reflected in each of our 142 spacious, well-appointed rooms, suites and apart suites. Three superlative dining options – Supay Gastrobar, Carrillon Restaurant and Los Cristales - offer guests the opportunity to savor delicious gourmet cuisine in bright, inviting dining rooms or outdoors overlooking the hotel gardens. Leisure amenities include a beautiful, free-form outdoor pool with a water slide, a well-equipped gym and the indulgent Salutem per Aquam Spa. 

                                                        For guests seeking to host a corporate meeting or special event, our convenient, easy-to-reach location in the heart of city’s business and commerce area makes us the ideal choice. From start to finish, our attentive event planning team is available to see to venue design and decorations, customized catering menus, audiovisual equipment, team building activities and special group rates on accommodation for guests staying at the hotel.
    
                                                </p>
						</div>
						<div class="col-md-8 about-grid">
							<div class="about-top">
								<div class="col-md-6 about-left">
									<div class="about-img">
										<img src="{{asset('assets')}}/images/s.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="col-md-6 about-right">
									<div class="about-img">
										<img src="{{asset('assets')}}/images/ga1.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="about-top1">
								<div class="col-md-6 about-left">
									<div class="about-img">
										<img src="{{asset('assets')}}/images/ga2.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="col-md-6 about-right">
									<div class="about-img">
										<img src="{{asset('assets')}}/images/ga7.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>	
			<div class="statistics">
				<div class="container">
					<h3 class="tittle1">Hotel Statistics</h3>
					<div class="statistics-grids">
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='190' data-delay='.5' data-increment="100">190</div>
							<h5>Guest Stay</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="100">372</div>
							<h5>Book Room</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10520' data-delay='.5' data-increment="100">10520</div>
							<h5>Members Stay</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='256' data-delay='.5' data-increment="100">256</div>
							<h5>Meals Served</h5>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
	<div class="team">
		<div class="container">
			<h3 class="tittle">Our Team </h3>
			<div class="team-row">
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Mark Smithy</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur</p>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
					</div>
					<div class="team-img">
						<img src="{{asset('assets')}}/images/t4.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Aliquam amet</h5>
					<p>Consectetur adipi lorem ipsum dolor sit amet, est eligendi scing elit consectetur.</p>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
					</div>
					<div class="team-img">
						<img src="{{asset('assets')}}/images/t5.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl1 wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Daniel Nyari</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur.</p>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
					</div>
					<div class="team-img">
						<img src="{{asset('assets')}}/images/t6.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Alan ipsum</h5>
					<p>Eligendi scing elit lorem ipsum dolor sit amet, consectetur dolore magnam aliquam</p>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
					</div>
					<div class="team-img">
						<img src="{{asset('assets')}}/images/t7.jpg" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	

    
 
@endsection
