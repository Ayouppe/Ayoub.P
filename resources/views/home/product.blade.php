        @extends('layouts.frontbase')

        @section('title', $data->title)


        @section('content')
        
     
        
         <!---welcome--->
        <div class="resort-section">
        <div class="container">
        <h3 class="tittle">{{$data->category->title}}</h3>
        <div class="resort-grids">
        <!-- start content_slider -->
        <div id="owl-demo" class="owl-carousel">
        <div class="item">
        <div class="col-md-6 cap-img">
        <img src="{{Storage::url($data->image)}}" class="img-responsive" style="width: 500px; height: 350px">
        </div>
            
                               @foreach($images as $rs)
              <div class="col-md-2 cap-img-right">
           
                <img src="{{Storage::url($rs->image)}}" class="img-responsive" style="width:280px; height: 120px">
            </div>
            @endforeach
        </div>
            
     
        </div>
        </div>
        
        
           <div class="col-md-1 cap">
               <form action="{{route('shopcart.store')}}" method="post">
                   @csrf
                   <div class="qty-input">
                       <span class="text-uppercase">QTY</span>
                       <input class="input" name="quantity" type="number" value="1" min="1">
                          <input class="input" name="id" value="{{$data->id}}" type="hidden">
                   </div>
          <button type="submit" class="btn btn-lg btn-primary">Book Now</button>
             </form>
           </div>  
        <br>
        <br>
         <br>
        <br>
             
                           <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#detail-pills" data-toggle="tab">Detail</a>
                                </li>
                                <li class=""><a href="#review-pills" data-toggle="tab">Review</a>
                                </li>
                       
                                </li>
                            </ul>
    <br>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="detail-pills">
                                   
                                    <br>
                                    
                                     <div class="col-md-6 cap">
        <h4>{{$data->title}}</h4>	
        <ul class="cap1">
        <li><i class="glyphicon glyphicon-map-marker"></i> 33 Street Name, City Name United States</li>
        <li><i class="glyphicon glyphicon-plane"></i> US Airlines</li>
        <li><i class="glyphicon glyphicon-road"></i> Free Transport</li>
        </ul>										
        <p><br><b>DETAIL:</b><br>{{$data->detail}}</p>
        <div class="detais">
        <div class="col-md-9 deatils-left">
                <div class="list">
                        <ul>
                                <li><i class="glyphicon glyphicon-thumbs-up"></i><br><b>DESCRIPTION:</b><br> {{$data->description}}</li>
                                <li><i class="glyphicon glyphicon-cutlery"></i> In Room Dining is Available 09:00 P.M. - 12:09 P.M.</li>
                                <li><i class="glyphicon glyphicon-signal"></i> Free High Speed Wi-Fi Internet in Room</li>
                        </ul>
                </div>
        </div>
        <div class="col-md-3 deatils-right">
                <div class="detail-top">
                        <span>PER NIGHT</span>
                        <h4>${{$data->price}}</h4>
                       
              
                </div>
            
        </div>
              
       
             </div>
                                     </div>
        
                                    
                        </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                <div class="tab-pane fade" id="review-pills">
                    <div class="col-md-8">

                    @foreach($reviews as $rs)
                      <div class="detais">
        <div class="col-md-3 deatils-left">
                        <div><a href="#"><i class="fa fa-user-o"></i>Name: {{$rs->user->name}}</a></div>
                         <div><a href="#"><i class="fa fa-clock-o-o"></i>Time & Date: {{$rs->created_at}}</a></div>
                             <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                 <i class="fa fa-star-o empty"></i>
                                 <strong>Subject: {{$rs->subject}}</strong>
                                    <p>Review: {{$rs->review}}</p>
                         </div>
                    </div>
                  @endforeach
                  <br>
                    </div>
                        
                      @include('home.messages')
                        
        <div class="col-md-4 ">
                        <h4>Write Your Review</h4>
                                    <p>Your email adress will not be pablished</p>
                                    <br>
                                    <form class="review-form" action="{{route('storecomment')}}">
                                        @csrf
                                        <input class="input" type="hidden" name="product_id" value="{{$data->id}}">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" type="text" placeholder="subject">
                                        </div>
                                 
                                            <div class="form-group">
                                                <textarea class="form-control" name="review" rows="3" placeholder="your review"></textarea>
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <div class="input-rating">
                                                <strong class="text-uppercase">Your Rating</strong>
                                                <div class="stars">
                                                    
                                                    <input type="radio" id="star5" name="rate" value="5" /><label  for="star5"></label>
                                                        <input type="radio" id="star4" name="rate" value="4" /><label  for="star4"></label>
                                                          <input type="radio" id="star3" name="rate" value="3" /><label  for="star3"></label>
                                                        <input type="radio" id="star2" name="rate" value="2" /><label  for="star2"></label>
                                                          <input type="radio" id="star1" name="rate" value="1" /><label  for="star1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <br>
                                 @auth
                                        <button type="submit" class="btn btn-info">SUBMIT</button>
                                        @else
                                        <a href="/login" class="primery-btn">For Submit Your Review Please Login</a>
                                        @endauth
                                    </form>
                                    
                                </div>
                                
                       
              
                </div>
            
        </div>
              
       
             </div>
                    
                    
                    
                                
                               
                            </div>
                        </div>   
        
        
        
        
        
        
        


       @endsection
     
