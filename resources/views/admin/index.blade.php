        @extends('admin/layouts.app')
        
        
        
        @section('header')
            <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
        @endsection

            @section('content')
                
            <section class="table">
                <h1>Blogs</h1>
                <div class="tbl-header">
                  <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Edit</th>                       
                        <th>Delete</th>                       
                      </tr>
                    </thead>
                  </table>
                </div>
                <div class="tbl-content">
                  <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                      @foreach($blogs as $blog)
                      <tr>
                        <td ><img src="{{$blog->path}}" style="width: 50px;" alt=""></td>
                        <td>{{$blog->id}}</td>
                        <td>{{$blog->name}}</td>
                        <td>{{ strlen($blog->description) > 50 ? substr($blog->description,0,50).'......' : $blog->description }} </td>

                      
                       <td><a href="{{route('blog.edit',$blog)}}" class="btn btn-primary">Edit</a></td>


                        {!! Form::model($blog,['route'=>['blog.destroy', $blog->id],'method'=>'DELETE']) !!}

                        <td>{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}</td>

                        {!! Form::close() !!}
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </section>
              

              <section class="news_section">
                    <h1>Stats</h1>
                <div class="container-fluid mt-4">
                    <div class="row mx-auto news">
                        <div class="col-md-4 single_news">
                            <div class="title">
                                Active Treiners
                                <span>{{count($trainers)}}</span>
                            </div>
                        </div>
                        <div class="col-md-4 single_news">
                            <div class="title">
                                Blog Number
                                <span>{{count($blogs)}}</span>
                            </div>
                        </div>
                        <div class="col-md-4 single_news">
                            <div class="title">
                                Site Guests
                                <span>150</span>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              
              
              
  @endsection

    @section('footer')
        
    @endsection
