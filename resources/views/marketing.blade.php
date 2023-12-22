@extends('layouts.master')
@section('content')

@foreach($header as $h)

    <!-- Page banner area start here -->
    @include('components.banner', ['class' => "assets/marketing/$h->image_header", 'title' => "$h->title_header" ,  'subtitle' => "$h->subtitle_header"])
    <!-- Page banner area end here -->
@endforeach
    <!-- Service area start here -->

    <section class="page-service section-padding">
        <div class="container">
            <div class="row g-4">
                @foreach($marketingpage as $marketing)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <div class="item">
                        <h3>{{$marketing->title}}</h3>
                        <div class="image d-block">
                            <img src="{{asset('assets/marketing/'.$marketing->image)}}" alt="image">
                            <div class="gaps-left d-none d-sm-block float-bob-x">
                                <img src="/images/shape/shape.png" alt="Shape">
                            </div>
                        </div>
                        <p class="mt-4">{{$marketing->item}} {{$marketing->item_value}}</p>
                        <p class="mt-4">{{$marketing->price}} {{$marketing->price_value}}</p>
                        <button class="btn-three" data-bs-toggle="modal" data-bs-target="#storeModal{{$marketing->id }}">View Details<i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    @endforeach
                    <div class="modal fade" id="storeModal{{$marketing->id }}">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                    <button type="button" class="close marketing-modal-close" data-bs-dismiss="modal"><i class="fa fa-close"></i></button>
                                <img src="{{asset('assets/marketing/'.$marketing->image2)}}" alt="{{$marketing->alt2}}" width="100%">
                                <div class="modal-body">
                                    <h3 class="primary-color">{{$marketing->title_modal}}</h3>
                                   <div>{!!$marketing->text_modal !!}</div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                    <p><span class="text-black fw-semibold">{{$marketing->item}}</span> {{$marketing->item_value}}</p>
                                    <p><span class="text-black fw-semibold">{{$marketing->price}}</span> {{$marketing->price_value}}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    <!-- Service area end here -->

    <!-- Text slider area start here -->
    <div class="marquee-wrapper text-slider primary-bg">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
            <li class="marquee-item">
                @foreach($sliders as $s)
                <span class="stroke-text">{{$s->text}}</span>  {{$s->text2}}
              @endforeach
            </li>
            </ul>
        </div>
    </div>
    <!-- Text slider area end here -->

    <!-- Video-area area start here -->
    @foreach($header as $h1)
        <section class="video-area bg-image section-padding" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)),url('{{asset('assets/marketing/'.$h1->image_marketing)}}')">
        
            <div class="container">
                <a class="video-popup wow bounceIn" href="{{$h1->link_video}}"><i class="fa-solid fa-play"></i></a>
            
            </div>
        
        </section>
    @endforeach
    <!-- Video-area area end here -->

    <!-- Text slider area start here -->
    <div class="marquee-wrapper text-slider primary-bg">
        <div class="marquee-inner to-right">
            <ul class="marqee-list d-flex">
            <li class="marquee-item">
                @foreach($slidersText as $s)
                <span class="stroke-text">{{$s->text}}</span>  {{$s->text2}}
              @endforeach
            </ul>
        </div>
    </div>
    <!-- Text slider area end here -->

@endsection