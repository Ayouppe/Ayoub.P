
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'FAQ LIST')

 @section('head')
 <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


   
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">FAQ LIST</h1>        
                    </div>
                </div>
                
                
                
                <div class="card card-primary">
               <div class="card-header">
                        <div class="card-title">
                           FAQ ELEMENTS
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                
                                @csrf
                                
                                
                                            
                                            
                                            
                                
                                      
                                             <div class="form-group">
                                            <label>Question</label>
                                            <input class="form-control" type="text" name="question">
                                        </div>
                                              </div>
                                
                                
                               
                                
                                <div class="form-group">
                                            <label>Answer</label>
                                            <textarea class="form-control" id="answer" name="answer">
                                            </textarea>
                                             <script>
                        ClassicEditor
                                .create( document.querySelector( '#answer' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
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

