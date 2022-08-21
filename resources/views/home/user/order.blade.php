@extends('layouts.frontbase')
 
@section('title','Order Page')



@section('content')






<div class="container" ...>
    
    <div class="container" ...>
        
        <div class="row">
     
          
     
    

          <form action="{{route('shopcart.storeorder')}}" method="post">
                                                    @csrf
          <div class="">
					<div class="col-md-6">
                                            <div class="billing-details">
                                                <div class="serction-title">
						<h4>Booking Information</h4>
                                                <hr>
                                                </div>
                                                <div class="form-group">
                                                    <input class="input" name="name" type="text" value="{{Auth::user()->name}}" placeholder="Name&Surname" required>
                                                </div>
                                                 <div class="form-group">
                                                     <input class="input" name="phone" type="tel" placeholder="Phone Number" required="">
                                                </div>
                                                 <div class="form-group">
                                                     <input class="input" name="email" type="email" placeholder="Email" >
                                                </div>
                                                <div class="form-group">
                                                 <input class="input" name="address" type="text" placeholder="Address">
                                                </div>
                                                 <div class="form-group">
                                                     <input class="input" name="total" type="hidden" value="{{$total}}" placeholder="total">
                                                </div>
                                                
						
					</div>
                                        </div>


					<div class="col-md-6">
						<h4>Payment Information [{{$total}}]</h4>
                                                <hr>
                                               <div class="input-checkbox">
                                            <div class="form-group">
                                                 <input class="input" type="text" value="" placeholder="Card Holder">
                                                </div>
                                                 <div class="form-group">
                                                 <input class="input" type="number" name="number" placeholder="Card Number">
                                                </div>
                                                <div class="form-group">
                                                 <input class="input" type="text" name="date" placeholder="Exp. Date">
                                                </div>
                                                <div class="form-group">
                                                 <input class="input" type="text" name="code" placeholder="Security Code">
                                                </div>
                                               
             <button type="submit" class="btn btn-primary">Complete Booking</button>
             
                                                 
                                               </div>
                                                
					</div>
              
          </div>
                         
                                      </form>
               </div>
    </div>
</div>
					<div class="clearfix"> </div>
			
        

    
 
@endsection
