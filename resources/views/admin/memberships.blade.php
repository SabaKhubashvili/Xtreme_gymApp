
@extends('admin/layouts.app')


@section('header')
<link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
@endsection


@section('content')
<section class="table">
    <h1>Memberships</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>In</th>
            <th>Out</th>
            <th>Tags</th>                       
            <th>Edit</th>                       
            <th>Delete</th>                       
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          @foreach($memberships as $membership)
          <tr>
            <td>{{$membership->id}}</td>
            <td>{{$membership->name}}</td>
            <td>{{$membership->in}}</td>
            <td>{{$membership->out}}</td>
            <td>@foreach($membership->tags as $tag)
              <li>{{$tag->name}}</li> 
              @endforeach             
            </td>

          
           <td><a href="{{route('membership.edit', $membership->id)}}" class="btn btn-primary">Edit</a></td>


            {!! Form::model($membership,['route'=>['membership.destroy',$membership->id], 'method'=>'DELETE']) !!}

            <td>{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}</td>

            {!! Form::close() !!}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection


@section('footer')
    
@endsection