
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'FAQ LIST')
 

 
@section('content')


              
            
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">FAQ LIST</h1>
        
                    </div>
                </div>
                
                <a href="/admin/faq/create" class="btn btn-block btn-primary" style="width: 110px"> Add Question </a>
                       
                        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">FAQ LIST</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                      <th>Question</th>
                      <th>Answer</th>
                      <th>status</th>
                      
                       <th style="width: 40px">Edit</th>
                      <th style="width: 40px">Delete</th>
                       <th style="width: 40px">Show</th>
                    </tr>
                    </thead>
                  
                    
                    <body>
                    @foreach($data as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>
                       <td>{{$rs->question}}</td>
                       <td>{!! $rs->answer !!}</td>
                       <td>{{$rs->status}}</td>
                       <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm"> Edit </a></td>
                              <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting! are you sure?')" class="btn btn-block btn-danger btn-sm"> Delete </a></td>
                                     <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm"> Show </a></td>
                    </tr>
                  @endforeach
                  </tbody></table>
                    
                    
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
                        
                        
                


@endsection

