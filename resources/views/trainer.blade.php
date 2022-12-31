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


  </style>
  <link rel="stylesheet" href="{{asset("css/style.css")}}">
@endsection


@section('content')
    

<div class="row article-container">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="my-3">{{$trainer->name}}</h2>
      <hr width="25px" color="coral">
      <h5 class="mb-5" style="color:rgb(110, 105, 105);">Proffesional Fitness Trainer</h5>

      <img src="{{asset($trainer->profile_image)}}" style=" margin:0 auto;" class="img" alt="" srcset="">
      
      <h5 class="mt-5"><span style="color: coral"> Number: </span> {{$trainer->number}}</h5>

      <h5 class=""><span style="color: coral"> Gmail: </span> {{$trainer->gmail}}</h5>

      <h3 class="my-5">Achivments</h3>
      <p><pre>{{$trainer->achivments}}</pre></p>

</div>
</div>
</div>



@endsection



@section('footer')
    
@endsection