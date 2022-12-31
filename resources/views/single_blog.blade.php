@extends('layouts.app')


@section('header')
<style>
    main{
  
      width: 100%;
    }
    
    .navbar-brand #logo_white{
      display: none;
    }
    .navbar-brand #logo_black {
      display: inline;
    }
  
    .navbar .navbar-collapse ul li a{
      color: #000
    }
    .navbar .navbar-collapse ul li a:hover{
      color: rgb(1, 1, 1)
    }
  
  
    </style>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
@endsection


@section('content')
    




 <div class="row article-container">
  <div class="leftcolumn">
    <div class="card">
      <h2>{{$blog->name}}</h2>
      <h5 style="color: rgb(103, 98, 98)">Blog</h5>
      <img src="{{asset($blog->path)}}" class="img" style="margin: 0 auto; " alt="">
      <p>Content</p>
      <p>{{$blog->description}}</p>
</div>
</div> 




@endsection



@section('footer')
    
@endsection