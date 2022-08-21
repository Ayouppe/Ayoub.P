
    
    
    @extends('layouts.adminwindow')
 
@section('title', 'PRODUCT IMAGE GALLERY')
 

 
@section('content')


<h3>{{$product->title}}</h3>
<hr>
  <form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                
                                @csrf
                            
     
                        <div class="input-group">
                            
                             <label>title</label>
                                            <input class="form-control" type="text" name="title">
                            
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
 <label class="custom-file-label" for="exampleInputFile">choose image file</label>
                     </div>  
                              <div class="input-group-append">
                                  <inpu class="input-group-text"t type="submit" value="Upload">
                              </div>
                                              <button type="submit" class="btn btn-primary"> Save </button>
                        </div>
                 
                                    </form>  


            
            
              <!-- /. NAV SIDE  -->

                
                       
                        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">PRODUCT IMAGE LIST</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                  
                      <th>title</th>
                       <th>image</th>
                      <th style="width: 40px">Delete</th>
                     
                    </tr>
                    </thead>
                  
                    
                    <body>
                    @foreach($images as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>
                       <td>{{$rs->title}}</td>
                      <td>
                            @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 150px">
                            @endif
                        </td>
                   
                              <td><a href="{{route('admin.image.destroy',['pid'=>$product->id, 'id'=>$rs->id])}}" onclick="return confirm('Deleting! are you sure?')" class="btn btn-block btn-danger btn-sm"> Delete </a></td>
                    </tr>
                  @endforeach
                  </tbody></table>
                    
                    
                </div><!-- /.box-body -->
                 
              </div>
                        
                        
             @endsection


