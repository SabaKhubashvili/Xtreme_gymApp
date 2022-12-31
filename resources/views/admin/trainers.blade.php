@extends('admin/layouts.app')

@section('header')
<link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
@endsection

    @section('content')
        
    <section class="table">
        <h1>All Trainers</h1>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>Image</th>
                <th>Id</th>
                <th>Title</th>
                <th>Achivments</th>
                <th>Edit</th>                       
                <th>Delete</th>                       
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody>

                @foreach($trainers as $trainer)
              <tr>
                <td><img src="{{asset($trainer->profile_image)}}" style="width: 50px;" alt=""></td>
                <td> {{$trainer->id}} </td>  
                <td>{{$trainer->name}}</td>
                <td><pre> {{$trainer->achivments}} </pre> </td>

          
                <td>{!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}</td>
                
                {!! Form::model($trainer, ['method'=>'DELETE', 'route'=>['trainer.destroy', $trainer->id]]) !!}
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