
    
    
    
    @extends('layouts.adminwindow')
 
@section('title', 'SHOW Order: '.$data->title)
 

 
@section('content')

   
             
                        <div class="card-body p-0">
                            <table class="table table-striped">  
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                
                                  <tr>
                                    <th>User</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                       
                                 
                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                        
                            
                                      <tr>
                                    <th>Phone</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                
                                
                                     <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                
                                
                                  <tr>
                                    <th>Address</th>
                                    <td>{{$data->address}}</td>
                                </tr>
                                
                                
                                      <tr>
                                    <th>Ip Number</th>
                                    <td>{{$data->ip}}</td>
                                </tr>
                                    
                       
                               <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                        
                                
                                      <tr>
                                    <th>Created Data</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                        
                                
                                      <tr>
                                    <th>Updated Data</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                
                                       <tr>
                                           
                                           <th>Admin Note: <br><br> Status:</th>
            
                                    <td>  
        <form role="form" action="{{route('admin.order.update',['id'=>$data->id])}}" method="post">
       @csrf
       
       <textarea name="note" cols="80">{{$data->note}}</textarea>
       <br>
       <br>
 
       <select name="status">
           <option selected="">{{$data->status}}</option>
           <option>New</option>
           <option>Accepted</option>
            <option>Declined</option>
           <option>Cancelled</option>
           <option>Completed</option>
       </select>
      <button type="submit" class="btn btn-primary"> Update </button>
                                    </form>
                                    </td>
                                       </tr>
                                
                            </table>
                            
                              <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                      <th>title</th>
                      <th>price</th>
                       <th>quantity</th>
                       <th>Amount</th>
                       <th>image</th>
                      <th>status</th>
                      
                      <th style="width: 40px">Cancel</th>
                    </tr>
                    </thead>
                  
                    
                    <body>
                    @foreach($datalist as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>
                       <td>{{$rs->product->title}}</td>
                       <td>{{$rs->price}}</td>
                       <td>{{$rs->quantity}}</td>
                        <td>{{$rs->amount}}</td>
                      <td>
                            @if($rs->product->image)
                            <img src="{{Storage::url($rs->product->image)}}" style="height: 40px">
                            @endif
                        </td>
                        
                        
                        
                       <td>{{$rs->status}}</td>
                     <td>
                         <a href="{{route('admin.order.acceptproduct',['id'=>$rs->id])}}" onclick="return confirm('Accepting! are you sure?')" class="btn btn-block btn-success btn-sm"> Accept </a>
                         <a href="{{route('admin.order.cancelproduct',['id'=>$rs->id])}}" onclick="return confirm('Cancelling! are you sure?')" class="btn btn-block btn-danger btn-sm"> Cancel </a></td>
                    </tr>
                  @endforeach
                  </tbody></table>
                    
                            
                            
                        </div>
        </section>
                                        
                                
                               
                                 
                                     
                          
                
@endsection

