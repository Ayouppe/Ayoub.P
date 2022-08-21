
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'PRODUCT LIST')

 @section('head')
 <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


   
     
            
            
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PRODUCT LIST</h1>        
                    </div>
                </div>
                
                
                
                <div class="card card-primary">
               <div class="card-header">
                        <div class="card-title">
                           PRODUCT ELEMENTS
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                                
                                @csrf
                                
                                
                                     <div class="card-body">
                                             <div class="form-group">
                                            <label>Parent Product</label>
                                            <select class="form-control select2" name="category_id" style="">
                                               
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
                                            <label>price</label>
                                            <input class="form-control" type="number" name="price" value="0">
                                         
                                        </div>
                                
                                
                                   <div class="form-group">
                                            <label>quantity</label>
                                            <input class="form-control" type="number" name="quantity" value="0">
                                         
                                        </div>
                                
                                
                                      <div class="form-group">
                                            <label>minimum quantity</label>
                                            <input class="form-control" type="number" name="minimum quantity" value="0">
                                         
                                        </div>
                                
                                
                                   <div class="form-group">
                                            <label>tax%</label>
                                            <input class="form-control" type="number" name="tax" value="0">
                                         
                                        </div>
                                
                                <div class="form-group">
                                            <label>detail information</label>
                                            <textarea class="form-control" id="detail" name="detail">
                                            </textarea>
                                             <script>
                        ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
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

