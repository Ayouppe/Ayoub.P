                    <?php

                    use Illuminate\Support\Facades\Route;
                    /*
                    |--------------------------------------------------------------------------
                    | Web Routes
                    |--------------------------------------------------------------------------
                    |
                    | Here is where you can register web routes for your application. These
                    | routes are loaded by the RouteServiceProvider within a group which
                    | contains the "web" middleware group. Now create something great!
                    |
                    */

                    Route::get('/', function () {
                    return view('welcome');

                    });
                    
                    
                    

                    //calling the home controller
                    route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
                    route::get('/aboutus',[\App\Http\Controllers\HomeController::class,'aboutus'])->name('aboutus');
                    route::get('/references',[\App\Http\Controllers\HomeController::class,'references'])->name('references');
                    route::get('/contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
                      route::get('/gallery',[\App\Http\Controllers\HomeController::class,'gallery'])->name('gallery');
                       route::post('/storemessage',[\App\Http\Controllers\HomeController::class,'storemessage'])->name('storemessage');
                       route::get('/faq',[\App\Http\Controllers\HomeController::class,'faq'])->name('faq');
                       route::get('/storecomment',[\App\Http\Controllers\HomeController::class,'storecomment'])->name('storecomment');
                    Route::view('/loginuser', 'home.login');
                        Route::view('/registeruser', 'home.register');
                         Route::view('/loginadmin', 'admin.login')->name('loginadmin');
                         route::get('/logoutuser',[\App\Http\Controllers\HomeController::class,'logout'])->name('logoutuser');
                         route::get('/loginadmincheck',[\App\Http\Controllers\HomeController::class,'loginadmincheck'])->name('loginadmincheck');

                    
                    //calling the test controller

                    route::get('/test',[\App\Http\Controllers\HomeController::class,'test'])->name('test');

                    route::post('/save',[\App\Http\Controllers\HomeController::class,'save'])->name('save');

                    route::get('/product/{id}',[\App\Http\Controllers\HomeController::class,'product'])->name('product');


                      //User Auth Controll
                      route::middleware('auth')->group(function(){
                          
                          //User Panel Root

                    route::prefix('userpanel')->name('userpanel.')->controller(App\Http\Controllers\UserController::class)->group(function(){
                    route::get('/','index')->name('index');
                    route::get('/reviews','reviews')->name('reviews');
                     route::get('/reviewdestroy/{id}','reviewdestroy')->name('reviewdestroy');
                       route::get('/orders','orders')->name('orders');
                       route::get('/orderdetail/{id}','orderdetail')->name('orderdetail');
                          route::get('/cancelproduct/{id}','cancelproduct')->name('cancelproduct');
                        });
                        
                        
                        //Shop Cart Root
                   route::prefix('shopcart')->name('shopcart.')->controller(\App\Http\Controllers\ShopCartController::class)->group(function(){
                    route::get('/','index')->name('index');
                    route::get('/create','create')->name('create');
                    route::post('/store','store')->name('store');
                    route::get('/add/{id}','add')->name('add');
                    route::post('/update/{id}','update')->name('update');
                    route::get('/destroy/{id}','destroy')->name('destroy');
                    route::get('/show/{id}','show')->name('show');
                    route::post('/order','order')->name('order');
                     route::post('/storeorder','storeorder')->name('storeorder');
                       route::get('/ordercomplete','ordercomplete')->name('ordercomplete');
                    

                    });
                    
                    
                    //admin panel

                    route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){
       
                    route::get('/',[\App\Http\Controllers\AdminPanel\HomeController::class,'index'])->name('index');
                      
                    
                    
                    
                    
                        //general route
                    route::get('/settings',[\App\Http\Controllers\AdminPanel\HomeController::class,'setting'])->name('setting');
                    route::post('/settings',[\App\Http\Controllers\AdminPanel\HomeController::class,'settingUpdate'])->name('setting.update');
                    
                    
                    
                    
                route::prefix('category')->name('category.')->controller(\App\Http\Controllers\AdminPanel\CategoryController::class)->group(function(){


                    route::get('/','index')->name('index');

                    route::get('/create','create')->name('create');

                    route::post('/store','store')->name('store');

                    route::get('/edit/{id}','edit')->name('edit');

                    route::post('/update/{id}','update')->name('update');
                    route::get('/destroy/{id}','destroy')->name('destroy');
                    route::get('/show/{id}','show')->name('show');

                    });



                    //Admin product

                    route::prefix('product')->name('product.')->controller(\App\Http\Controllers\AdminPanel\AdminProductController::class)->group(function(){


                    route::get('/','index')->name('index');

                    route::get('/create','create')->name('create');

                    route::post('/store','store')->name('store');

                    route::get('/edit/{id}','edit')->name('edit');

                    route::post('/update/{id}','update')->name('update');
                    route::get('/destroy/{id}','destroy')->name('destroy');
                    route::get('/show/{id}','show')->name('show');

                    });


                                                     //Admin image

                    route::prefix('image')->name('image.')->controller(\App\Http\Controllers\AdminPanel\ImageController::class)->group(function(){

                    route::get('/{pid}','index')->name('index');
                    route::post('/store/{pid}','store')->name('store');
                    route::get('/destroy/{pid}/{id}','destroy')->name('destroy');


                    });
                    
                                                 //Admin message
                    route::prefix('message')->name('message.')->controller(\App\Http\Controllers\AdminPanel\MessageController::class)->group(function(){

                    route::get('/','index')->name('index');
                      route::get('/show/{id}','show')->name('show');
                     route::post('/update/{id}','update')->name('update');
                    route::get('/destroy/{id}','destroy')->name('destroy');


                    });
                    
                        //Admin Faq

                    route::prefix('faq')->name('faq.')->controller(\App\Http\Controllers\AdminPanel\FaqController::class)->group(function(){


                    route::get('/','index')->name('index');

                    route::get('/create','create')->name('create');

                    route::post('/store','store')->name('store');

                    route::get('/edit/{id}','edit')->name('edit');

                    route::post('/update/{id}','update')->name('update');
                    route::get('/destroy/{id}','destroy')->name('destroy');
                    route::get('/show/{id}','show')->name('show');

                    });
                    
                                                                //Admin Comment
                    route::prefix('comment')->name('comment.')->controller(\App\Http\Controllers\AdminPanel\CommentController::class)->group(function(){

                    route::get('/','index')->name('index');
                      route::get('/show/{id}','show')->name('show');
                     route::post('/update/{id}','update')->name('update');
                    route::get('/destroy/{id}','destroy')->name('destroy');


                    });
                    
                                                                      //Admin User
                    route::prefix('user')->name('user.')->controller(\App\Http\Controllers\AdminPanel\AdminUserController::class)->group(function(){

                    route::get('/','index')->name('index');
                     route::get('/edit/{id}','edit')->name('edit');
                      route::get('/show/{id}','show')->name('show');
                     route::post('/update/{id}','update')->name('update');
                    route::get('/destroy/{id}','destroy')->name('destroy');
                    route::post('/addrole/{id}','addrole')->name('addrole');
                     route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');
                    


                    });
                    
                         //Admin Order Route

                    route::prefix('order')->name('order.')->controller(\App\Http\Controllers\AdminPanel\OrderController::class)->group(function(){


                    route::get('/{slug}','index')->name('index');

                    route::get('/create','create')->name('create');

                    route::post('/store','store')->name('store');

                    route::get('/edit/{id}','edit')->name('edit');

                    route::post('/update/{id}','update')->name('update');
                    route::get('/destroy/{id}','destroy')->name('destroy');
                    route::get('/show/{id}','show')->name('show');
                    route::get('/cancelorder/{id}','cancelorder')->name('cancelorder');
                    route::get('/cancelproduct/{id}','cancelproduct')->name('cancelproduct');
                    route::get('/acceptproduct/{id}','acceptproduct')->name('acceptproduct');

                    });

                     });
                    });




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
