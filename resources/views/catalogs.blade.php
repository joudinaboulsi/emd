@extends('layouts.master')
@section('content')


@foreach($header as $h)
    <!-- Page banner area start here -->
    @include('components.banner', ['class' => "assets/about/$h->image_header", 'title' => "$h->title_header" ,  'subtitle' => "$h->subtitle_header"])
    <!-- Page banner area end here -->
@endforeach



<!-- Team area start here -->
<section class="team-two section-padding">
    <div class="container">
        <div class="row g-4">
            @foreach($catalogs as $catalog)
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <div class="image d-block">
                        <img src="{{asset('assets/catalog/'.$catalog->image)}}" alt="{{$catalog->alt}}">
                    </div>
                    <div class="content">
                        <h3 class="mb-4">{{$catalog->title}}</h3>
                        <a href="{{asset('assets/catalog/'.$catalog->pdf)}}" class="btn-two" target="_blank"><span>View More Details</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
<!-- Team area end here -->



<div class="col-md-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
    <p class="text-center mb-5 p-4 py-0">© Copyright - All rights reserved - No duplication of any type is permitted without written permission from Costex Corporation</p>
</div>
<!-- Blog area end here -->

@endsection