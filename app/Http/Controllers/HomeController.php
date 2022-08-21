<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use \App\Models\Setting;
use \App\Models\Faq;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public static function maincategorylist(){
       return Category::where('parent_id', '=', 0)->with('children')->get();  
        
    }






    public function index(){
       
        $page='home';
 $sliderdata=Product::limit(4)->get();
 $productlist1=Category::limit(4)->get();
      $setting = Setting::first();
     return view('home.index',[
         'page'=>$page,
         'setting'=>$setting,
         'sliderdata'=>$sliderdata,
          'productlist1'=>$productlist1
     ]);
  
    }
    
    
    
    public function aboutus(){
       
  
      $setting = Setting::first();
     return view('home.about',[
         'setting'=>$setting,
       
     ]);
  
    }
    
    public function references(){
       
   
      $setting = Setting::first();
     return view('home.references',[
         'setting'=>$setting,
       
     ]);
  
    }
    
    public function contact(){
       
   
      $setting = Setting::first();
     return view('home.contact',[
         'setting'=>$setting,
       
     ]);
  
    }
    
        public function faq(){
       
   
      $setting = Setting::first();
      $datalist = Faq::all();
     return view('home.faq',[
         'setting'=>$setting,
         'datalist'=>$datalist
       
     ]);
  
    }
    
        public function gallery(){
       
  $setting = Setting::first();
     return view('home.gallery',[
         'setting'=>$setting,
       
     ]);
    }
    
         public function storemessage(Request $request){
             
             //dd($request);
        $data = new Message();
          $data->name = $request->input('name');
            $data->email = $request->input('email');
              $data->phone = $request->input('phone');
                $data->subject = $request->input('subject');
                  $data->message = $request->input('message');
                   $data->ip=request()->ip();
                  
                  $data->save();
                  
                    return redirect()->route('contact')->with('info','your messge has been sent, Thank you.');
    }
    
           public function storecomment(Request $request){
             
           //  dd($request);
        $data = new Comment();
          $data->user_id = Auth::id();  //logged in yuser id
            $data->product_id = $request->input('product_id');
              $data->subject = $request->input('subject');
                $data->review = $request->input('review');
                  $data->rate = $request->input('rate');
                   $data->ip=request()->ip();
                  
                  $data->save();
                  
                    return redirect()->route('product', ['id'=>$request->input('product_id')])->with('info','your messge has been sent, Thank you.');
    }
    
    
    
    public function product($id){
    
        $data=Product::find($id);
          $images = DB::table('images')->where('product_id' ,$id)->get();
          $reviews = Comment::where('product_id',$id)->where('status','True')->get();
         return view('home.product',[
         'data'=>$data,
          'images'=>$images,
          'reviews'=>$reviews
          
     ]);
  
    }




    public function test(){
        
        return view('home.test');
    }
    
     public function save(){
        
        echo "this is save function";
    }
    
    public function logout(Request $request){
        
        Auth::logout();
        $request->session()->invalidate();
          $request->session()->regenerateToken();
          return redirect('/');
    }
               public function loginadmincheck(Request $request)
    {
                   
                   //dd($request);
                   
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
           
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
