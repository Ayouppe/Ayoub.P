@extends('layouts.frontbase')
 
@section('title','User Comments & Reviews')



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
						<h4>User Comments & Reviews</h4>
                                                <hr>
                   <div class="box-body">              
		   <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                      <th>Product</th>
                      <th>Subject</th>
                      <th>Review</th>
                       <th>Rate</th>
                      <th>status</th>
                      
                       <th style="width: 40px">Delete</th>
                    </tr>
                    </thead>
                  
                    
                    <body>
                    @foreach($comments as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>
                      <td>
                          <a href="{{route('product',['id'=>$rs->product_id])}}">
                          {{$rs->product->title}}
                          </a>
                      </td>
                       <td>{{$rs->subject}}</td>
                       <td>{{$rs->review}}</td>
                       <td>{{$rs->rate}}</td>
                       <td>{{$rs->status}}</td>
                  
                       
       <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting! are you sure?')" class="btn btn-block btn-danger btn-sm"> Delete </a></td>
                    </tr>
                  @endforeach
                  </tbody>
                                                </table>
                       
                          </div><!-- /.box-body -->
            
                    
                    
                </div>
                                                
                                                
				
					<div class="clearfix"> </div>
		
        

    
 
@endsection
