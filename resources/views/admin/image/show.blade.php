
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'SHOW CATEGORY')
 

 
@section('content')


   
      
            
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Detail Data: <br> {{$data->title}}</h1>
                   

                    </div>
                </div>
                <div class="col-sm-3">
                       <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-block btn-primary" style="width: 110px"> Edit </a>
                </div>
                       
                 <div class="col-sm-3">
                       <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting! are you sure?')" class="btn btn-block btn-primary" style="width: 110px"> Delete </a>
                 </div>
            <br>
            <br>
                   
                        <div class="card-body p-0">
                            <table class="table table-striped">  
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                
                                 
                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                        
                                
                                     
                                <tr>
                                    <th>Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                
                                
                                    
                                <tr>
                                    <th>Description</th>
                                    <td>{{$data->description}}</td>
                                </tr>
                                        
                                
                                                  
                                         <tr>
                                    <th>Image</th>
                                    <td> @if($data->image)
                            <img src="{{Storage::url($data->image)}}" style="height: 100px">
                            @endif
                                    </td>
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
                                
                            </table>
                        </div>
            </div>
        </section>
                                        
                                
                               
                                 
                                     
                          
                
@endsection

