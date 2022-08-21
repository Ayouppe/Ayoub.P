
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'FAQ LIST')
 

 @section('head')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
 
@section('content')


     
            
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">edit FAQ: {{$data->title}}</h1>

                    </div>
                </div>
          
                
                
                <div class="card card-primary">
               <div class="card-header">
                        <div class="card-title">
                           FAQ ELEMENTS
                        </div>
                   
                   
                        <div class="panel-body">
                            <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                
                                @csrf
                                
                                   
                                      
                                                 
                                            <label>Question</label>
                                            <input class="form-control" type="text" name="question" value="{{$data->question}}">
                                        </div>
                                             
                               
                              
                                <div class="form-group">
                                            <label>Answer</label>
                                            <textarea class="form-control" name="answer" type="String"> {{$data->answer}} </textarea>
                                         
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