
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'CATEGORY LIST')
 

 
@section('content')


      
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CATEGORY LIST</h1>
        
                    </div>
                </div>
                
                <a href="/admin/category/create" class="btn btn-block btn-primary" style="width: 110px"> Add Category </a>
                       
                        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">CATEGORY LIST</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                      <th>parent</th>
                      <th>title</th>
                       <th>image</th>
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
                      <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                       <td>{{$rs->title}}</td>
                      <td>
                            @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                            @endif
                        </td>
                       <td>{{$rs->status}}</td>
                       <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm"> Edit </a></td>
                              <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting! are you sure?')" class="btn btn-block btn-danger btn-sm"> Delete </a></td>
                                     <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm"> Show </a></td>
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

