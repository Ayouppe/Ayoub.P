@extends('layouts.frontbase')
 
@section('title','User Order List')



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
						<h4>User Order List</h4>
                                                <hr>
                   <div class="box-body">              
		   <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                      <th>Name & Surname</th>
                      <th>Phone</th>
                      <th>Email</th>
                       <th>Address</th>
                      <th>status</th>
                      
                       <th style="width: 40px">Cancel</th>
                    </tr>
                    </thead>
                  
                    
                    <body>
                    @foreach($data as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>
                      <td>{{$rs->name}}</td>
                       <td>{{$rs->phone}}</td>
                       <td>{{$rs->email}}</td>
                       <td>{{$rs->address}}</td>
                       <td>{{$rs->status}}</td>
                  
                       
       <td><a href="{{route('userpanel.orderdetail',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm"> Show Detail </a></td>
                    </tr>
                  @endforeach
                  </tbody>
                                                </table>
                       
                          </div><!-- /.box-body -->
            
                    
                    
                </div>
                                                
                                                
				
					<div class="clearfix"> </div>
		
        

    
 
@endsection
