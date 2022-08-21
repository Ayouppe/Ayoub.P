
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'EDIT PRODUCT')
 

 @section('head')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
 
@section('content')


     
            
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">edit product: {{$data->title}}</h1>

                    </div>
                </div>
          
                
                
                <div class="card card-primary">
               <div class="card-header">
                        <div class="card-title">
                           PRODUCT ELEMENTS
                        </div>
                   
                   
                        <div class="panel-body">
                            <form role="form" action="{{route('admin.product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                
                                @csrf
                                
                                        
                                             <div class="form-group">
                                                            <div class="form-group">
                                            <label>Parent Product</label>
                                            <select class="form-control select2" name="category_id" style="">
                                              
                                                @foreach($datalist as $rs)
                                                <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}} </option>
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
                                            <input class="form-control" type="text" name="description" value="{{$data->description}}">
                                         
                                
                                                   
                                                   
                                         <div class="form-group">
                                            <label>price</label>
                                            <input class="form-control" type="number" name="price" value="{{$data->price}}">
                                         
                                        </div>
                                
                                
                                   <div class="form-group">
                                            <label>quantity</label>
                                            <input class="form-control" type="number" name="quantity" value="{{$data->quantity}}">
                                         
                                        </div>
                                
                                
                                      <div class="form-group">
                                            <label>minimum quantity</label>
                                            <input class="form-control" type="number" name="minquantity" value="{{$data->minquantity}}">
                                         
                                        </div>
                                
                                
                                   <div class="form-group">
                                            <label>tax%</label>
                                            <input class="form-control" type="number" name="tax" value="{{$data->tax}}">
                                         
                                        </div>
                                
                                <div class="form-group">
                                            <label>detail information</label>
                                            <textarea class="form-control" name="detail" type="String"> {{$data->detail}} </textarea>
                                         
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
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                              
                                            </select>
                                        </div>
                                
                                
                               
                                 
                                        <button type="submit" class="btn btn-primary"> Update Data </button>
                                    </form>
                          
                
@endsection

 @section('foot')
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

   <script>
   $(function(){
       
       $('.textarea').summernote()
   })
   </script>
   @endsection