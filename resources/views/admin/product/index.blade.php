
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'PRODUCT LIST')
 

 
@section('content')


              
            
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PRODUCT LIST</h1>
        
                    </div>
                </div>
                
                <a href="/admin/product/create" class="btn btn-block btn-primary" style="width: 110px"> Add Product </a>
                       
                        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">PRODUCT LIST</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                      <th>category</th>
                      <th>title</th>
                      <th>price</th>
                       <th>quantity</th>
                       <th>image</th>
                       <th>image gallery</th>
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
                      <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                       <td>{{$rs->title}}</td>
                       <td>{{$rs->price}}</td>
                       <td>{{$rs->quantity}}</td>
                      <td>
                            @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                            @endif
                        </td>
                        
                        <td> <a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                onclick ="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                            <img src="{{asset('assets')}}/admin/img/galleryg.jpeg" style="height: 40px"> 
                            </a>
                        </td>
                        
                       <td>{{$rs->status}}</td>
                       <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm"> Edit </a></td>
                              <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting! are you sure?')" class="btn btn-block btn-danger btn-sm"> Delete </a></td>
                                     <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm"> Show </a></td>
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

