@extends('layouts.app')


@section('header')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style>
        main{
  
      width: 100%;
    }

    #page-header{
      background-image: url('images/background/background4.jpg');
    }
  
  
    </style>
    
@endsection



@section('content')


<section id="page-header" class="about-header"> <!--HERO-->
     
  <h2>#Memberships</h2>

  <p>YOU CAN SEE HERE All MEMBERSHIPS</p>
 
</section>
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