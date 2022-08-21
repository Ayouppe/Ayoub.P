@extends('layouts.frontbase')
 
@section('title','Contact/'. $setting->title)

@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')




<div class="container" ...>
    
    <div class="container" ...>
        
        <div class="row">
            {!! $setting->contact !!}
          
        </div>
    </div>
</div>
    

	<div class="contact">
				<div class="container">
					<h2 class="tittle">How To Find Us</h2>
					<div class="contact-bottom">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24208.257297137407!2d-74.00459896044924!3d40.673260299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25afeeec2a7c9%3A0xad18759baca1029a!2sHotel+Le+Bleu!5e0!3m2!1sen!2sin!4v1459521299656"  frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-4 contact-left">
						<h4>Address</h4>
						<p>Est eligendi optio cumque nihil impedit quo minus id quod maxime
							<span>26 56D Rescue,US</span></p>
						<ul>
							<li>Free Phone :+1 078 4589 2456</li>
							<li>Telephone :+1 078 4589 2456</li>
							<li>Fax :+1 078 4589 2456</li>
							<li><a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
					</div>
					<div class="col-md-8 contact-left cont">
                                            
                                            @include('home.messages')
						<h4>Contact Form</h4>
                                                <h3>{{Session::get('info')}}</h3>
						<form action="{{route("storemessage")}}" method="post">
                                                    @csrf
                                                    <input type="text" name="name" value="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}" required="">
                                                        
                                                        <input type="text" name="phone" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}" required="">

							<input type="email" name="email" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" required="">
                                                        
							<input type="text" name="subject" value="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'subject';}" required="">
                                                        
							<textarea type="text" name="message"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'message...';}" required="">Message...</textarea>
							<input type="submit" value="Submit" >
							<input type="reset" value="Clear" >
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			
		</div>
        

    
 
@endsection
