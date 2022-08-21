
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'Comments & Reviews LIST')
 

 
@section('content')


   
              <!-- /. NAV TOP  -->
              
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Comment LIST</h1>
        
                    </div>
                </div>
                
                       
                        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Comment LIST</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                      <th>Product</th>
                      <th>Name</th>
                      <th>Subject</th>
                      <th>Review</th>
                       <th>Rate</th>
                      <th>status</th>
                      
                      <th style="width: 40px">Show</th>
                       <th style="width: 40px">Delete</th>
                    </tr>
                    </thead>
                  
                    
                    <body>
                    @foreach($data as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>
                      <td>
                          <a href="{{route('admin.product.show',['id'=>$rs->product_id])}}">
                          {{$rs->product->title}}
                          </a>
                      </td>
                       <td>{{$rs->user->name}}</td>
                       <td>{{$rs->subject}}</td>
                       <td>{{$rs->review}}</td>
                       <td>{{$rs->rate}}</td>
                       <td>{{$rs->status}}</td>
                  
                                <td>
                                  <a href="{{route('admin.comment.show',['id'=>$rs->id])}}"
                                onclick ="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')"class="btn btn-block btn-primary"> Show </a></td>
                       
       <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting! are you sure?')" class="btn btn-block btn-danger btn-sm"> Delete </a></td>
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

