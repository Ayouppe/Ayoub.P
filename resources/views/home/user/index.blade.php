@extends('layouts.frontbase')
 
@section('title','User Panel')



@section('content')






<div class="container" ...>
    
    <div class="container" ...>
        
        <div class="row">
     
          
        </div>
    </div>
</div>
    

	
					<div class="col-md-4 contact-left">
						<h4>User Menu</h4>
                                                <hr>
						@include('home.user.usermenu')
						<ul>
							
						</ul>
					</div>
					<div class="col-md-8 contact-left cont">
						<h4>User Profile</h4>
                                                <hr>
                                                <h3>{{Session::get('info')}}</h3>
						@include('profile.show')
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			
		</div>
        

    
 
@endsection
