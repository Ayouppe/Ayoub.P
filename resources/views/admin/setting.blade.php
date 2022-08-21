 @extends('layouts.adminbase')
 
@section('title', 'SETTINGS')

 @section('head')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')


   

              
            
              
           <div id="page-wrapper">
                <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                                  
                                  <h1 class="page-head-line"> Settings </h1>
                             </div>
                      </div>
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                               <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                                
                                @csrf
                        
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#general" data-toggle="tab">General</a>
                                </li>
                                <li class=""><a href="#smtp" data-toggle="tab">Smtp Email</a>
                                </li>
                                <li class=""><a href="#social" data-toggle="tab">Social Media</a>
                                </li>
                                <li class=""><a href="#aboutus" data-toggle="tab">About Us</a>
                                </li>
                                 <li class=""><a href="#contact" data-toggle="tab">Contact</a>
                                </li>
                               <li class=""><a href="#references" data-toggle="tab">References</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="general">
                                     <input type="" id="hidden" name="id" value="{{$data->id}}" class="form-control">
                                   <div class="form-group">
                                              <label>Title</label>
                                              <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                          </div>
                                     <div class="form-group">
                                              <label>Keywords</label>
                                              <input type="text"  name="keywords" value="{{$data->keywords}}" class="form-control">
                                          </div>
                                           
                                          <div class="form-group">
                                              <label>Description</label>
                                              <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                          </div>
                                           
                                          <div class="form-group">
                                              <label>Company</label>
                                              <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                          </div>
                                             <div class="form-group">
                                              <label>Address</label>
                                              <input type="text" id="address" name="address" class="form-control" value="{{$data->address}}" >
                                          </div>
                                           
                                          <div class="form-group">
                                              <label>Phone</label>
                                              <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                          </div>
                                           
                                          <div class="form-group">
                                              <label>Email</label>
                                              <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                          </div>
                                    
                                          
                                          <div class="form-group">
                                              <label>Icon</label>
                                              <input type="file" name="icon" value="{{$data->icon}}" class="form-control">
                                              <label>chose icon to your project</label>
                                          </div>
                          
                                    
                                           <div class="form-group">
                                              <label>Status</label>
                                              <select class="form-control select2" name="status" style="">
                                                  <option selected="selected"> {{$data->status}} </option>
                                                  <option> True </option>
                                                  <option> False </option>
                                              </select>
                                           </div>
                                </div>
                          
                                
                                
                                
                                <div class="tab-pane fade" id="smtp">
                                    <div class="form-group">
                                              <label>Smtp Server</label>
                                              <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                          </div>
                                           
                                          <div class="form-group">
                                              <label>Smtp Email</label>
                                              <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                          </div>
                                      <div class="form-group">
                                              <label>Smtppassword</label>
                                              <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                          </div>
                                           
                                          <div class="form-group">
                                              <label>Smtpport</label>
                                              <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                          </div>
                                </div>
                                
                                
                                <div class="tab-pane fade" id="social">
                                <div class="form-group">
                                              <label>Fax</label>
                                              <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                          </div>
                                           
                                          <div class="form-group">
                                              <label>Facebook</label>
                                              <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                          </div>
                                       <div class="form-group">
                                              <label>Instagram</label>
                                              <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                          </div>
                                           
                                          <div class="form-group">
                                              <label>Twitter</label>
                                              <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                          </div>
                                          <div class="form-group">
                                              <label>Youtube</label>
                                              <input type="text"  name="youtube" value="{{$data->youtube}}" class="form-control">
                                          </div>
                                </div>
                                
                                
                                
                                <div class="tab-pane fade" id="aboutus">
                                  <div class="form-group">
                                  <label>About Us</label>
                                  <textarea id="aboutus" name="aboutus"> {{$data->youtube}} </textarea>
                              </div>
                                
                                </div>
                                
                                   <div class="tab-pane fade" id="contact">
                                    <div class="form-group">
                                              <label>Contact</label>
                                              <textarea id="contact" name="contact"> {{$data->contact}} </textarea>
                                          </div>
                                       
                                </div>
                                
                                <div class="tab-pane fade" id="references">
                                  <div class="form-group">
                                              <label>References</label>
                                              <textarea id="references" name="references"> {{$data->references}} </textarea>
                                          </div>
                                </div>
                        
                                
                                 
                                 
                                   <div class="card-footer">
                                          <button type="submit" class="btn btn-primary">Update Setting</button>
                                      </div>
                              </div>
                                  </div>
                              </div>
              
               
                   @endsection
                   
        @section('food')
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

   <script>
   $(document).ready(function(){
       
       $('#aboutus').summernote();
        $('#contact').summernote();
         $('#references').summernote();
   });
   </script>
   @endsection
