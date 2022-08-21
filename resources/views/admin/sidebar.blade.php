 <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <a href="#" style="color:bisque">{{Auth::user()->name}}</a>
                            <br>
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>



                    <li>
                        <a  href="/"><i class="fa fa-home "></i>Dashboard</a>
                    </li>
                  
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i> Bookings <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/order/new"><i class="fa fa-coffee"></i>New Bookings</a>
                            </li>
                            <li>
                                <a href="/admin/order/accepted"><i class="fa fa-flash "></i>Accepted Bookings</a>
                            </li>
                             <li>
                                <a href="/admin/order/declined"><i class="fa fa-key "></i>Declined Bookings</a>
                            </li>
                              <li>
                                <a href="/admin/order/cancelled"><i class="fa fa-send "></i>Cancelled Bookings</a>
                            </li>
                            
                             <li>
                                <a href="/admin/order/completed"><i class="fa fa-send "></i>Completed Bookings</a>
                            </li>
                            
                         
                           
                           
                        </ul>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a href="/admin/category" class="nav-link"><i class="nav-icon fa fa-th "></i> Categories </a>;
                  </li>
                  
                  
                   
                       <li class="nav-item">
                        <a href="/admin/product" class="nav-link"><i class="nav-icon fa fa-th-list"></i> Product </a>
                   </li>
                   
                   
                       <li class="nav-item">
                        <a href="{{route('admin.comment.index')}}" class="nav-link"><i class="nav-icon fa fa-comments"></i> Comments </a>
                  </li>
                  
                  
                     <li class="nav-item">
                        <a href="{{route('admin.faq.index')}}" class="nav-link"><i class="nav-icon fa fa-question"></i> FAQ </a>
                   </li>
                   
                   
                       <li class="nav-item">
                        <a href="{{route('admin.message.index')}}" class="nav-link"><i class="nav-icon fa fa-mail-reply-all"></i> Messages </a>
                   </li>
                    
                   
                    <li class="nav-item">
                        <a href="admin/social" class="nav-link"><i class="nav-icon fa fa-twitch"></i> Social </a>
                   </li>
                   
                   
                       <li class="nav-item">
                        <a href="{{route('admin.user.index')}}" class="nav-link"><i class="nav-icon fa fa-user"></i> Users </a>
                   </li>
                    
                   <li class="nav-header" style="color: blueviolet">LABELS</li>
                   <li class="nav-item">
                       <div class="accordion-item"></div>
                       <a href="/admin/settings" class="nav-link"><i class="nav-icon fa fa-cogs "></i>Settings</a>
                            </li>
                            
                            
                    
                   
                    <li>
                        <a class="active-menu" href="/admin/product/create"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>
            </div>

        </nav>
            
     