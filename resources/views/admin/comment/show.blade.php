
    
    
    
    @extends('layouts.adminwindow')
 
@section('title', 'SHOW COMMENTS: '.$data->title)
 

 
@section('content')

   
    

     
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Detail Comment Data: <br> {{$data->title}}</h1>
                   

                    </div>
                </div>
             
                   
                        <div class="card-body p-0">
                            <table class="table table-striped">  
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                
                                  <tr>
                                    <th>Product</th>
                                    <td>{{$data->product->title}}</td>
                                </tr>
                                       
                                 
                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                        
                            
                                      <tr>
                                    <th>Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                
                                
                                     <tr>
                                    <th>Review</th>
                                    <td>{{$data->review}}</td>
                                </tr>
                                
                                
                                  <tr>
                                    <th>Rate</th>
                                    <td>{{$data->rate}}</td>
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
                                           
                                    <th>Admin Note</th>
            
                                    <td>  
        <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
       @csrf
 
       <select name="status">
           <option selected="">{{$data->status}}</option>
           <option>True</option>
           <option>False</option>
       </select>
      <button type="submit" class="btn btn-primary"> Update Note </button>
                                    </form>
                                    </td>
                                       </tr>
                                
                            </table>
                        </div>
        </section>
                                        
                                
                               
                                 
                                     
                          
                
@endsection

