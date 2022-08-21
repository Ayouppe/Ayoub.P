
    
    
    
    @extends('layouts.adminbase')
 
@section('title', 'Order LIST')
 

 
@section('content')


   
              <!-- /. NAV TOP  -->
              
              <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Order LIST</h1>
        
                    </div>
                </div>
                
                       
                        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Order LIST</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">Id</th>
                       <th>User</th>
                      <th>Name & Surname</th>
                      <th>Phone</th>
                      <th>Email</th>
                       <th>Address</th>
                        <th>Amount</th>
                         <th>Admin Note</th>
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
                          <a href="{{route('admin.user.show',['id'=>$rs->user_id])}}" onclick ="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                          {{$rs->user->name}}
                          </a>
                      </td>
                       <td>{{$rs->name}}</td>
                       <td>{{$rs->phone}}</td>
                       <td>{{$rs->email}}</td>
                       <td>{{$rs->address}}</td>
                       <td> $ {{$rs->total}}</td>
                       <td>{{$rs->note}}</td>
                       <td>{{$rs->status}}</td>
                  
                                <td>
                                  <a href="{{route('admin.order.show',['id'=>$rs->id])}}"
                                onclick ="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')"class="btn btn-block btn-primary"> Show </a></td>
                       
       <td><a href="{{route('admin.order.cancelorder',['id'=>$rs->id])}}" onclick="return confirm('Cancelling! are you sure?')" class="btn btn-block btn-danger btn-sm"> Cancel </a></td>
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

