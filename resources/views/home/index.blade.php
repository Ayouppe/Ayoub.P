@extends('layouts.frontbase')
 
@section('title', $setting->title)

@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
 
@section('slider')
 @include("home.slider")
@endsection
  @show
 
@section('content')




<div class="container" ...>
    

    <div class="section" ...>
        
        <div class="section section-grey" ...>
            
            <div class="section" ...>
 
@endsection
