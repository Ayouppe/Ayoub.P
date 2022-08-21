
    
    
    
    @extends('layouts.adminwindow')
 
@section('title', 'USER DATA: '.$data->title)
 

 
@section('content')

   
    

     
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> USER Data: <br> {{$data->title}}</h1>
                   

                    </div>
                </div>
             
                   
                        <div class="card-body p-0">
                            <table class="table table-striped">  
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                
                                 
                                       
                                 
                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                           
                              <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                
                                
                                      <tr>
                                 <th>Role</th>
                           <td>  @foreach($data->roles as $role)
                           {{$role->name}}
                           <a href="{{route('admin.user.destroyrole',['uid'=>$data->id, 'rid'=>$role->id])}}" onclick="return confirm('Deleting! are you sure?')" class="btn-sm"> [x] </a>
                           @endforeach</td>
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
   <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
       @csrf
       <select name="role_id">
          @foreach($roles as $role)
           <option value="{{$role->id}}"> {{$role->name}} </option>
           @endforeach
       </select>
      <button type="submit" class="btn btn-primary"> Add Role </button>
                                    </form>
                                    </td>
                                       </tr>
                                
                            </table>
                        </div>
        </section>
                                        
                                
                               
                                 
                                     
                          
                
@endsection

