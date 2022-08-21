@extends('layouts.frontbase')
 
@section('title','User Shop Cart')



@section('content')






<div class="container" ...>
    
    <div class="container" ...>
        
        <div class="row">
     
          
        </div>
    </div>
</div>
    

	
					<div class="col-md-4 contact-left">
						<h4>USER MENU</h4>
                                                <hr>
						@include('home.user.usermenu')
						<ul>
							
						</ul>
					</div>

					<div class="col-md-8 contact-left cont">
						
                                            <h4>Booking LIST</h4>
                                            <hr>
              
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      
                          <th style="width: 40px">Delete</th>
                 
                        </tr>
                        
                         <body>
                             
                             @php
                             $total=0;
                             @endphp
                    @foreach($data as $rs)
                    <tr>
                   
                          
                     
                        <td <img src="{{Storage::url($rs->product->image)}}">{{$rs->product->title}}</td>
                       <td>{{$rs->product->price}}</td>
                       <td>{{$rs->quantity}}</td>
                       <td>{{$rs->product->price * $rs->quantity}}</td>
                  
      <td><a href="{{route('shopcart.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting! are you sure?')" class="btn btn-block btn-danger btn-sm"> Delete </a></td>                           
                    </tr>
                    
                    @php
                    $total += $rs->product->price * $rs->quantity;
                    @endphp
                           @endforeach
                    </tbody>
                
                                            
                                            <tfoot>
                                                
                                                <tr>
                                                    <th class="empty" colspan="3"></th>
                                                    <th>Total</th>
                                                    <th colspan="2" class="total">{{$total}}</th>
                                                </tr>
                                            </tfoot>
                                              </table>
                                            <div class="pull-right">
                                                <form action="{{route('shopcart.order')}}" method="post">
                                                    @csrf
                                                    <input name="total" value="{{$total}}" type="hidden">
                                                <button class="primery-btn">Place Booking</button>
                                                </form>
                                            </div>
                                        </div>
                                            
					
					<div class="clearfix"> </div>
			

    
 
@endsection
