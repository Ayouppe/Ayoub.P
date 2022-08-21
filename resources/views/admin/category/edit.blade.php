
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'EDIT CATEGORY')
 

 
@section('content')


         
            
            
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">edit category: {{$data->title}}</h1>

                    </div>
                </div>
          
                
                
                <div class="card card-primary">
               <div class="card-header">
                        <div class="card-title">
                           CATEGORY ELEMENTS
                        </div>
                   
                   
                        <div class="panel-body">
                            <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                
                                @csrf
                                
                                        
                                             <div class="form-group">
                                                            <div class="form-group">
                                            <label>Parent Category</label>
                                            <select class="form-control select2" name="parent_id" style="">
                                                <option value="0" selected="selected">Main Category</option>
                                                @foreach($datalist as $rs)
                                                <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}} </option>
                                                @endforeach
                                            </select>
                                             </div>
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                            <label>title</label>
                                            <input class="form-control" type="text" name="title" value="{{$data->title}}">
                                        </div>
                                             
                               
                                 <div class="form-group">
                                            <label>keywords</label>
                                            <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}>
                                   
                                            
                                
                                 
                                 <div class="form-group">
                                            <label>description</label>
                                            <input class="form-control" type="text" name="description" value="{{$data->description}}>
                                         
                                
                                
                            
                        
                            <div class="form-group">
                            <label for="exampleInputFile">image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">choose image file</label>
                                </div>
                        </div>
                    </div>
           
                   
            
                                
                                <div class="form-group">
                                            <label>status</label>
                                            <select class="form-control" name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                              
                                            </select>
                                        </div>
                                
                                
                               
                                 
                                        <button type="submit" class="btn btn-primary"> Update Data </button>
                                    </form>
                          
                
@endsection

