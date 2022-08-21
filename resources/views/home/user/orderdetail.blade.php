@extends('layouts.frontbase')
 
@section('title','User Order Detail')



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
						
                                            <h4>Booking Items</h4>
                                            <hr>
                                            
                                            
                                             <table class="table table-bordered">
                                                 <tr>
                                                     <th>Name: </th> <td>{{$order->name}}</td> 
                                                 </tr>
                                                 <tr>
                                                     <th>Phone: </th> <td>{{$order->phone}}</td>
                                                 </tr>
                                                 <tr>
                                                       <th>Email: </th> <td>{{$order->email}}</td>
                                                 </tr>
                                                 <tr>
                                                        <th>Address: </th> <td>{{$order->address}}</td>
                                                 </tr>
                                                 <tr>
                                                        <th>Note: </th> <td>{{$order->note}}</td>
                                                 </tr>
                                                 <tr>
                                                       <th>Status: </th> <td>{{$order->status}}</td>
                                                 </tr>
                                                
                                             </table>
                                            
                                            
              
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                       <th>Status</th>
                      
                          <th style="width: 40px">Delete</th>
                 
                        </tr>
                        
                         <body>
                             
                           
                    @foreach($orderproducts as $rs)
                    <tr>
                   
                          
                     
                        <td>{{$rs->product->title}}</td>
                       <td>{{$rs->product->price}}</td>
                       <td>{{$rs->quantity}}</td>
                       <td>{{$rs->amount}}</td>
                       <td>{{$rs->status}}</td>
                  @if($rs->status=='new')
                             <td><a href="{{route('userpanel.cancelproduct',['id'=>$rs->id])}}" onclick="return confirm('Canceling! are you sure?')" class="btn btn-block btn-danger btn-sm"> Cancel </a></td>
                             @endif
                    </tr>
                    
                   
                           @endforeach
                    </tbody>
                    
                
                                            
                                            <tfoot>
                                                
                                                <tr>
                                                    <th class="empty" colspan="3"></th>
                                                    <th style="background-color: blueviolet">Total</th>
                                                    <th colspan="2" class="total" style="background-color: blueviolet">{{$order->total}}</th>
                                                </tr>
                                            </tfoot>
                                              </table>
                                           
                                        </div>
                                            
					
					<div class="clearfix"> </div>
			

    
 
@endsection
