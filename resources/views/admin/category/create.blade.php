
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'CATEGORY LIST')
 

 
@section('content')


   
              <!-- /. NAV TOP  -->
       
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CATEGORY LIST</h1>
        
                    </div>
                </div>
                
                
                
                <div class="card card-primary">
               <div class="card-header">
                        <div class="card-title">
                           CATEGORY ELEMENTS
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                                
                                @csrf
                                
                                
                                     <div class="card-body">
                                             <div class="form-group">
                                            <label>Parent Category</label>
                                            <select class="form-control select2" name="parent_id" style="">
                                                <option value="0" selected="selected">Main Category</option>
                                                @foreach($data as $rs)
                                                <option value="{{ $rs->id }}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}} </option>
                                                @endforeach
                                            </select>
                                             </div>
                                            
                                            
                                            
                                            
                                
                                      
                                             <div class="form-group">
                                            <label>title</label>
                                            <input class="form-control" type="text" name="title">
                                        </div>
                                              </div>
                                
                                
                                 <div class="form-group">
                                            <label>keywords</label>
                                            <input class="form-control" type="text" name="keywords">
                                        </div>
                                
                                
                                 <div class="form-group">
                                            <label>description</label>
                                            <input class="form-control" type="text" name="description">
                                         
                                        </div>
                                
                                
                            
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
                                                <option>True</option>
                                                <option>False</option>
                                              
                                            </select>
                                        </div>
                                
                                
                               
                                 
                                        <button type="submit" class="btn btn-primary"> Save </button>
                                    </form>
                          
                
@endsection

