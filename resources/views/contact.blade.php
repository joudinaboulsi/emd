@extends('layouts.master')
@section('content')



@foreach($header as $h)
    <!-- Page banner area start here -->
    @include('components.banner', ['class' => "assets/contact/$h->image_header", 'title' => "$h->title_header" ,  'subtitle' => "$h->subtitle_header"])
    <!-- Page banner area end here -->
@endforeach

<!-- Contact form area start here -->

<section class="contact section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                @foreach($contactpage as $contact)
                <div class="content bg-image" style="background-image:url('{{asset('assets/contact/'.$contact->image)}}');">
                    <h2>Have something in mind?
                    </h2>
                    <ul>
                        <li><a href="mailto:{{$contact->email}}"><i class="fa-solid fa-envelope"></i>{{$contact->email}}</a></li>
                    </ul>
                    <div class="arry"><img src="/images/icon/arry.png" alt=""></div>
                    <h3>{{$contact->title_office}}</h3>
                    <ul>
                        <li><a href="{{$contact->location_url}}" target="_blank"><i class="fa-solid fa-location-dot"></i>{{$contact->location}}</a>
                        </li>
                        <li><a href="tel:{{$contact->phone_url}}"><i class="fa-solid fa-phone-volume"></i>{{$contact->phone}}</a>
                        </li>
                        <li><a href="tel:{{$contact->phone2_url}}"><i class="fa-solid fa-phone-volume"></i>{{$contact->phone2}}</a>
                        </li>
                        <li><a href="tel:{{$contact->phone3_url}}"><i class="fa-solid fa-phone-volume"></i>{{$contact->phone3}}</a>
                        </li>
                     
                    </ul>
                    <h3>{{$contact->title_location}}</h3>
                    <ul>
                        <li><a href="{{$contact->location2_url}}" target="_blank"><i class="fa-solid fa-location-dot"></i>{{$contact->location2}}</a>
                        </li>
                        <li><a href="tel:{{$contact->phone4_url}}"><i class="fa-solid fa-phone-volume"></i>{{$contact->phone4}}</a>
                            <li><a href="tel:{{$contact->phone5_url}}"><i class="fa-solid fa-phone-volume"></i>{{$contact->phone5}}</a>
                        
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                <h3 class="my-5"><i class="fa fa-quote-left"></i> E.M.D GLOBAL IS EQUIPPED TO SERVE NUMEROUS STATES ACROSS THE COUNTRY.<i class="fa fa-quote-right"></i></h3>
                <div class="form-area">
                    <form action="#0">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <input type="phone" placeholder="Phone">
                        <select name="subject" id="subject">
                            <option value="0">Select Subject</option>
                            <option value="0">Account</option>
                            <option value="0">Service</option>
                            <option value="0">Pricing</option>
                            <option value="0">Support</option>
                        </select>
                        <textarea name="Your Review" id="massage" placeholder="Message..."></textarea>
                        <button class="mt-40">Submit Now <i class="fa-solid fa-arrow-right-long"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact form area end here -->

<!-- Contact map area start here -->
@foreach($contactpage as $c1)
<div class="google-map">
    <iframe src="{{$c1->map}}"></iframe>
</div>
@endforeach
<!-- Contact map area end here -->

@endsection