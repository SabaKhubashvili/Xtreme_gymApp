@extends('layouts.app')

@section('header')

<link rel="stylesheet" href="{{asset('css/style.css')}}">


@endsection

@section('content')
    

    {{--*  Hero Section  --}}

    <div class="hero-section">	
		<div class="section-center">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<img src="{{asset('images/logo/xtreme-logos_white.png')}}" alt="">
					</div>
					<div class="col-12 text-center mt-2 mb-2">
						<div class="dancing">Best Place To Start Changing</div>
					</div>
					<div class="col-12 text-center mt-4 mt-lg-5">
						<p>
							<a href="{{route('pricing')}}" style="text-decoration: none; color:#fff"><span class="travel hover-target">Pricing</span> </a>
              <a href="{{route('blogs')}}" style="text-decoration: none; color:#fff"><span class="nature hover-target">Blog</span></a>
              <a href="{{route('contact')}}" style="text-decoration: none; color:#fff"><span class="nature hover-target">Contact</span></a>
							<a href="{{route('faq')}}" style="text-decoration: none; color:#fff"><span class="wildlife hover-target">Faq</span> </a>
            </p>
					</div>
				</div>
			</div>
		</div>
	</div>	


    <section class="prices my-5 py-5" id="Pricing">
      @foreach($memberships as $membership)
        <div class="col-md-4 col-lg-4 text-center price_container">
            <div class="panel panel-success panel-pricing">
              <div class="panel-heading">
                <h3>{{$membership->name}}</h3>
              </div>
              <div class="panel-body text-center">
                <p>
                  <strong>{{$membership->price}} USD</strong>
                </p>
              </div>
              <ul class="list-group text-center">
                <li class="list-group-item">In : {{$membership->in}}</li>
                <li class="list-group-item">Out : {{$membership->out}}</ </li>
          
                <li class="list-group-item"></li>
              </ul>
              <div class="panel-footer">
                <a
                  class="btn btn-lg btn-block btn-success ShowMorePopUp"
                  style="background-color: #b1b1b1; border-color: #d9d6d6;"
                  data-bs-toggle="modal" href="#portfolioModal">
                  Details
                </a>
          
                <div class="payButtons mt-2">
                  <a
                    class="btn btn-lg btn-block btn-buy" style="color: #fff">
                    Buy
                  </a>
          

                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </section>

 {{--*  Hero End --}}

    {{--* Trainers --}}
    <section class="trainers">
        <div class="trainers_name">
            <h1>Trainers</h1>
            <hr width="50px" color="#FC7F00">
        </div>
        <div class="people">  
          @foreach($trainers as $trainer)

            <div>
              <img style="width: 200px;" src="{{asset($trainer->profile_image)}}" alt="">
              <p><span style="color: #FC7F00">{{$trainer->name}}</span>  :  Proffesional Fitness Trainer <br> 
                <span style="color: #FC7F00">Phone: </span> +(995){{$trainer->number}} <br>
                <span style="color: #FC7F00">Gmail: </span> {{$trainer->gmail}}</p>

                <a href="{{route('trainerShow', $trainer->id)}}">See More</a>
            </div>
            @endforeach
          </div>
    </section>
    {{--* Trainers End --}}

    {{--* Blog  --}}

    <section class="page-section my-5 py-5" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Blog</h2>
                <hr width="80px" color="#FC7F00">
            </div>
            <div class="row">
              @foreach($blogs as $blog)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item" >
                        <a class="portfolio-link" href="{{route('blogShow',$blog->id)}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" style="height: 200px; width:100%;" src="{{asset($blog->path)}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{$blog->name}}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ strlen($blog->description) > 50 ? substr($blog->description,0,50).'......' : $blog->description }} </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>




    {{--! Membership Desc --}}
    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i></div>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="modal-body">
                              <!-- Project details-->
                              <h2 class="text-uppercase">Membership Includes</h2>
                              <p style="margin:40px 0 0  0 !important;">1. Consultation With Proffesional Trainer</p>
                              <p style="margin-top:10px !important;">2.All Types Of Equimpent</p>
                              <p style="margin-top:10px !important;">3. Cardio Zone</p>
                              <p style="margin-top:10px !important;">4. Sauna + Bath + Lockeroom  </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
   {{--! Membership Desc End --}}

@endsection



@section('footer')





@endsection