@extends('admin/layouts.app')

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

    </style>
@endsection


@section('content')
    <section class="blog-form">
        <div class="max-w-xl mx-auto full_create my-5 py-5">

            {!! Form::model($blog, ['route'=>['blog.update',$blog->id],'method'=>'PUT', 'files'=>true]) !!}
              <h1 class="text-2xl mb-2">Update Blog</h1>

              
              <div class="job-info border-b-2 py-2 mb-5">
                <!--    Title      -->
                <div class="mb-4">
                  <label class="block text-gray-700 text-sm mb-2" for="jtitle">Title</label>
                  <input class="appearance-none block w-full  text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" required type="text" value="{{$blog->name}}" id="title" name="name" placeholder="Enter Name" autofocus>
                </div>
  
                <div class="md:flex md:justify-between">
                <div>
                  <label for="description" class="block text-gray-700 text-sm mb-2">Description</label>
                  <textarea name="description" required class="w-100" id="description"  style="height: 400px;" cols="" rows="">{{$blog->description}}</textarea>
                </div>
                <div class="">
                {!! Form::file('path') !!}
                     </div>

              <div class="d-flex" style="justify-content: center; margin-top:30px;">
                <button class=" text-white py-2 px-3 rounded post_job" type="submit">Post Blog</button>
              </div>
              

            {!! Form::close() !!}
          </div>

    </section>
@endsection


@section('footer')
    
@endsection