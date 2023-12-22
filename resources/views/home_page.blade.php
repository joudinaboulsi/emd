@extends('layouts.master')
@section('content')

<!-- Banner area start here -->
<!-- <section class="banner">
    <div class="shape1 d-none d-md-block float-bob-y">
        <img src="assets/images/shape/shape2.png" alt="">
    </div>
    <div class="container">
        <div class="content-wrp pt-65 pb-30">
            <div class="swiper banner-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 data-animation="fadeInUp" data-delay="1s">E.M.D</h2>
                                <h1 data-animation="fadeInUp" data-delay="1.3s">GLOBAL LIMITED</h1>
                            </div>
                            <div class="col-lg-4">
                                <div class="content">
                                    <img data-animation="fadeInUp" data-delay="1.6s" src="/images/logo/ctp-logo-classic.svg" alt="logo" width="150">
                                    <p data-animation="fadeInUp" data-delay="1.6s">Authorized COSTEX-CTP Dealer in Nigeria and Ivory Coast</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="image">
            <div class="swiper banner-slider2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/slider/excavator-action.jpg" alt="image">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/slider/symbol-work-tools-road-construction-city-streets-brick.jpg" alt="image">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/slider/man-driving-crane.jpg" alt="image">
                    </div>
                </div>
            </div>
            <div class="slider-info">
                <div class="dot banner-dot"></div>
            </div>
        </div>
    </div>
</section> -->
<!-- Banner area end here -->


        <!-- Banner area start here -->
        <section class="banner-three">
            <div class="slider-info">
                <div class="dot banner-dot d-none d-sm-block theme"></div>
            </div>
            <div class="gaps-light d-none d-sm-block float-bob-x">
                <img src="/images/shape/shape.png" alt="">
            </div>
            <div class="swiper banner-slider3">
                <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                        
                
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="{{asset('assets/slider/'.$slider->image)}}"></div>
                        <div class="container">
                            <div class="content">
                                <h1 data-animation="fadeInUp" data-delay="1s">{{$slider->title}}
                                    <img src="assets/images/banner/line.png" alt="">
                                    <img data-animation="fadeInUp" data-delay="1.6s" src="{{asset('assets/slider/'.$slider->logo)}}" alt="{{$slider->alt}}" width="150">
                                </h1>
                                <p data-animation="fadeInUp" data-delay="1.3s">{{$slider->subtitle}}</p>
                                <a href="{{$slider->link_url}}" class="btn-one mt-65" data-animation="fadeInUp" data-delay="1.8s"><span>{{$slider->link}}</span> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                 @endforeach
                
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

<!-- About area start here -->

@foreach ($homepage as $about)
<section class="about section-padding">
    <div class="about-wrp">
        <div class="bg-image inline d-none d-lg-block" style="background-image: url(/images/shape/shape1.png);"></div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="left-item">
                        <div class="video-btn-wrp">
                            @if($about->youtube)
                            <div class="video video-pulse">
                                <a class="video-popup secondary-bg" href="{{$about->youtube}}"><i class="fa-solid fa-play"></i></a>
                            </div>
                            @endif
                        </div>
                        <div class="image wow bounceInLeft">
                            <img src="{{asset('assets/home/'.$about->image_s1)}}" alt="{{$about->alt_s1}}">
                        </div>
                        <h2 class="d-none d-xl-block">{{$about->image_title}}</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-item">
                        <div class="section-header">
                            <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">{{$about->title_s1}}</h5>
                            <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">{{$about->subtitle_s1}}</h2>
                            <div class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">{!!$about->text_s1 !!}</div>
                        </div>
                        <div class="content pb-65 bor-bottom">
                            <div class="row g-4">
                                <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".3s">
                                    <div class="info">
                                        <h3><span class="count">{{$about->count}} </span></h3>
                                        <p>{{$about->count_title}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s">
                                    <div class="info">
                                        <h3 class="count">{{$about->count2}}</h3>
                                        <p>{{$about->count_title2}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.7s" data-wow-delay=".5s">
                                    <div class="info">
                                        <h3 class="count">{{$about->count3}}</h3>
                                        <p>{{$about->count_title3}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInLeft" data-wow-duration="1.9s" data-wow-delay=".6s">
                                    <div class="info">
                                        <h3 class="count">{{$about->count4}}</h3>
                                        <p>{{$about->count_title4}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about_info pt-65 wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">
                            <div class="info">
                                <i class="fa-solid fa-phone-volume ring-animation"></i>
                                <div class="about_info_con">
                                    <span>{{$about->small_title}}</span>
                                    <a href="tel:+2348035921116">+ 234 803 5921 116</a>
                                </div>
                            </div>
                            <span class="d-none d-sm-inline">{{$about->small_title2}}</span>
                            <a href="{{$about->link_url}}" class="btn-one"><span>{{$about->link}}</span> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- About area end here -->

<!-- Product area start here -->
<section class="product  section-padding pt-0">
    <!-- <div class="map">
        <img src="/images/map.png" alt="">
    </div> -->
    <div class="container">
        @foreach ($homepage as $product_title)
        <div class="section-header text-center position-relative">
            <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">{{$product_title->subtitle_product}}</h5>
            <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">{{$product_title->title_product}}</h2>
        </div>
       @endforeach
        <div class="row">
            @foreach($products as $p)
            <div class="col-md-4 mb-5">
                <img src="{{asset('assets/product/'.$p->image)}}" alt="{{$p->alt}}" width="100%">
                <div class="content">
                    <h4><a href="{{ route('products') }}">{{$p->name_product}}</a></h4>
                </div>
            </div>
       
       @endforeach

           
        </div>
    </div>
</section>
<!-- Product area end here -->
<!-- Blog area start here -->
<section class="blog section-padding sub-bg">
    <div class="shape1 d-none d-lg-block float-bob-y">
        <img src="/images/shape/shape3.png" alt="">
    </div>
    <div class="shape2 d-none d-lg-block float-bob-y">
        <img src="/images/shape/shape2.png" alt="">
    </div>
    <div class="container">
        @foreach ($homepage as $news_title)
            <div class="section-header text-center">
                <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">{{$news_title->subtitle_news}}</h5>
                <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">{{$news_title->title_news}}</h2>
            </div>
        @endforeach
        <div class="row g-4">
            @foreach($news as $n)
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <div class="item">
                        <div class="content">
                            <img src="{{asset('assets/news/'.$n->image)}}" alt="{{$n->alt}}">
                            <h3><a href="blog-single.html">{{$n->title}}</a></h3>
                        <div>{!!$n->text !!}</div>
                        </div>
                        <a href="{{asset('assets/news/'.$n->image_detail)}}" class="flyer-popup btn-two"><span>{{$n->link}}</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Text slider area start here -->
<div class="marquee-wrapper text-slider secondary-bg">
    <div class="marquee-inner to-left">
        <ul class="marqee-list d-flex">
            <li class="marquee-item">
                @foreach($slidersText as $s)
                <span class="stroke-text">{{$s->text}}</span>  {{$s->text2}}
              @endforeach
            </li>
        </ul>
    </div>
</div>
<!-- Text slider area end here -->
<!-- Trust area start here -->
<section class="trust bg-image section-padding">
    <div class="shape1 d-none d-md-block float-bob-y">
        <img src="assets/images/shape/shape1.png" alt="">
    </div>
    <div class="container">
        @foreach($homepage as $c)
        <h4 class="mb-65 text-center">{{$c->title_client}}</h4>
        @endforeach
        <div class="item">
            <div class="swiper trust-slider">
                <div class="swiper-wrapper">
                    @foreach($clients as $client)
                        <div class="swiper-slide">
                            <img src="{{asset('assets/client/'.$client->image)}}" alt="{{$client->alt}}" width="100">
                        </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trust area start here -->

<!-- Blog area end here -->

@endsection