@extends('admin/layouts.app')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@section('header')
    <style>
    .full_create form {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.full_create form .job-info{
    width: 70%;
}
form .post_job{
  text-align: center;
  background-color: #00D363;
  width: 130px;
  border-radius: 10px;
  padding: 10px 15px;
  margin-left: 40px;
  color: white !important;
}
form .price{
    padding: 10px 20px;
}

</style>
@endsection


@section('content')
<section class="blog-form">
    <div class="mx-auto full_create my-5 py-5">

        {!! Form::open(['route'=>'membership.store','method'=>'POST']) !!}
          <h1 class="text-2xl mb-2">Add Membership</h1>

          
          <div class="job-info border-b-2 py-2 mb-5">

            <div class="mb-4 form-item">
              <label class="block text-gray-700 text-sm mb-2" for="name">Name</label>
              <input class="appearance-none block w-full  text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" required type="text" id="title" name="name" placeholder="Enter Name" autofocus>
            </div>

            <div >

            <div class="mb-4 form-item">
                {!! Form::label('price', 'Enter Price',['class'=>'block text-gray-700 text-sm mb-2']) !!}
                {!! Form::number('price',null,['class'=>'price appearance-none block   text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500','required']) !!}         
            </div>
           

            <div class="mt-4 form-item">
                {!! Form::label('in', 'In',['class'=>'block text-gray-700 text-sm mb-2']) !!}
                {!! Form::text('in',null,['class'=>'price appearance-none block   text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500','required']) !!}         
           </div>

            <div class="mt-4 form-item">
                {!! Form::label('out', 'Out',['class'=>'block text-gray-700 text-sm mb-2']) !!}
                {!! Form::text('out',null,['class'=>'price appearance-none block   text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500','required']) !!}         
           </div>

            <div class="mt-4 form-item">

                <select class="select2-multiple form-control" name="tags[]" multiple="multiple" id="select2Multiple">
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>                    
                    @endforeach
              </select>
            </div>

          <div class="d-flex" style="justify-content: center; margin-top:30px;">
            <button class="text-white   rounded post_job" type="submit" style="padding: 20px 0;">Add Membership</button>
          </div>
          

        {!! Form::close() !!}
      </div>

</section>

@endsection


@section('footer')
    
@endsection