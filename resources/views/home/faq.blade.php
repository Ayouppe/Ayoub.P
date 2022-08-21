@extends('layouts.frontbase')
 
@section('title','Frequently Asked Questions/'. $setting->title)

@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')




<div class="container" ...>
    
    <div class="container" ...>
        
        <div class="row">
            <h1><ins>Frequently Asked Questions</ins></h1>
            <br>
            <br>
           @foreach($datalist as $rs)
           <h3 style="color: blueviolet">{{$rs->question}}</h3>
           <br>
           <p>{!! $rs->answer !!}</p>
           <br>
           <br>
           
           @endforeach
          
        </div>
    </div>
</div>
    


 
@endsection
