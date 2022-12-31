@extends('layouts.app')


@section('header')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
    main{
    
        width: 100%;
    }
    #page-header{
        background-image: url('../images/background/background3.jpg');
    }



    </style>
@endsection


@section('content')

<section id="page-header" class="about-header"> <!--HERO-->
     
    <h2>#Blogs</h2>

    <p>YOU CAN SEE HERE OUR BLOGS</p>
   
</section>

<div class="blog">
    <div class="blog_wrapper">
        @foreach($blogs as $blog)
      <div class="blog_item">
        <a href="{{route('blogShow',$blog->id)}}">
          <div class="bi_img"><img src="{{$blog->path}}"></div>
          <div class="bi_title">{{$blog->name}}</div>
          <div class="bi_content">{{ strlen($blog->description) > 80 ? substr($blog->description,0,80).'......' : $blog->description }} </div>
        </a> 
        <div class="blog_button">
        <a class="" href="{{route('blogShow',$blog->id)}}">See Full</a>
        </div>
      </div>
     
      @endforeach
@endsection


@section('footers')
    
@endsection