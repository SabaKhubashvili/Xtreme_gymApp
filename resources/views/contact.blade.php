@extends('layouts.app')

@section('header')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        #page-header{
            background-image: url('../images/background/background2.jpg');
        }
    </style>
@endsection

@section('content')


<section id="page-header" class="about-header"> <!--HERO-->
     
    <h2>#lets Talk</h2>

    <p>LEAVE A MASSAGE, We love to hear from you!</p>
   
</section>

<section id="contact-details" class="">
   <div class="details">
     <span>Get In Touch</span>
     <h2>Visit us we are waiting for you</h2>
     <h3>Head Office</h3>
     <div class="contact-details">
       <li>
         <i class="fa-solid fa-map"></i>
         <p> 16th km, დავით აღმაშენებლის ხეივანი, Tbilisi 0131</p>
       </li>
       <li>
         <i class="fa-solid fa-envelope"></i>
         <p>Kubashvili.saba12@gmail.com</p>
       </li>
       <li>
         <i class="fa-solid fa-phone"></i>
         <p>+(995) 598 43 87 88</p>
       </li>
       <li>
         <i class="fa-solid fa-clock"></i>
         <p> Monday to Saturday :9:00-24:00</p>
       </li>
       
     </div>     
   </div>

   <div class="map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47594.03183282462!2d44.80940489820646!3d41.79325187981066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40446e8d50dec5df%3A0x70b3c81f3346eab!2sTbilisi%20Mall!5e0!3m2!1sen!2sge!4v1665714510179!5m2!1sen!2sge"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>

</section>

@endsection


@section('footer')
    
@endsection