@extends('layouts.frontbase')
 
@section('title','Gallery/'. $setting->title)

@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')




<div class="container" ...>
    
    <div class="container" ...>
        
        <div class="row">
            {!! $setting->gallery !!}
          
        </div>
    </div>
</div>


<!---header--->		
		<div class="content">
<div class="gallery">
	<div class="container">
			<h2 class="tittle">Gallery</h2>
		<div class="gal-btm">
			<div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="#image-1" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/ga.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
				

			</div>
			<div class="col-md-4 gal-gd wow fadeInUp animated" data-wow-delay=".5s">
				<a href="#image-2" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/ga1.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
				

			</div>
			<div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
				<a href="#image-3" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/ga2.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
                    
                    
                    
                    
                                                         <div class="rest-bottom">
								<div class="col-md-4 rest-left">
									<img src="{{asset('assets')}}/images/r2.jpg" class="img-responsive gray" alt=""/>
									<h4>Family Dining</h4>
								</div>
								<div class="col-md-4 rest-right">
								<img src="{{asset('assets')}}/images/r3.jpg" class="img-responsive gray" alt=""/>
									<h4>Casual Dining</h4>
								</div>
							
                    	<div class="col-md-4 rest-right">
								<img src="{{asset('assets')}}/images/r4.jpg" class="img-responsive gray" alt=""/>
									<h4>Buffet Dining</h4>
								</div>
								<div class="clearfix"></div>
							</div>
                                             
                   
                    
                    
                    
                    
                    
                    
                    
                    		<div class="gal-btm">
			<div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="#image-1" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/P.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
				

			</div>
			<div class="col-md-4 gal-gd wow fadeInUp animated" data-wow-delay=".5s">
				<a href="#image-2" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/P1.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
				

			</div>
			<div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
				<a href="#image-3" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/P2.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
                                    
                            
                    
			<div class="col-md-6 gal-gd-sec wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="#image-4" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/ga3.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="col-md-6 gal-gd-sec wow fadeInRight animated" data-wow-delay=".5s">
				<a href="#image-5" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/ga4.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
                                                    
                                                    
                                            
                                                    
                                                    
			<div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="#image-6">
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/ga5.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="col-md-4 gal-gd wow fadeInDown animated" data-wow-delay=".5s">
				<a href="#image-7">
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/ga6.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
				<a href="#image-8">
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/ga7.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
                        
    
    
                                                         <div class="rest-bottom">
								<div class="col-md-4 rest-left">
									<img src="{{asset('assets')}}/images/r6.jpg" class="img-responsive gray" alt=""/>
									<h4>Bars and Lounges </h4>
								</div>
								<div class="col-md-4 rest-right">
								<img src="{{asset('assets')}}/images/r5.jpg" class="img-responsive gray" alt=""/>
									<h4>Wedding Dining</h4>
								</div>
							
                    	<div class="col-md-4 rest-right">
								<img src="{{asset('assets')}}/images/r8.jpg" class="img-responsive gray" alt=""/>
									<h4>Outdoor Dining </h4>
								</div>
								<div class="clearfix"></div>
							</div>
                                             
                   
                    
                        
                        
                        
                                       
                                    		<div class="gal-btm">
			<div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="#image-1" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/W1.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
				

			</div>
			<div class="col-md-4 gal-gd wow fadeInUp animated" data-wow-delay=".5s">
				<a href="#image-2" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/s2.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
				

			</div>
			<div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
				<a href="#image-3" >
					<div class="nd-wrap nd-style-8">
						<img src="{{asset('assets')}}/images/w4.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
                                                    <div class="clearfix"></div>
                        
                        
                 
 
@endsection
