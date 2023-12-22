@extends('layouts.master')
@section('content')

@foreach($product as $p)
    <!-- Page banner area start here -->
    @include('components.banner', ['class' => "assets/product/$p->image_header", 'title' => "$p->title_header" ,  'subtitle' => "$p->subtitle_header"])
    <!-- Page banner area end here -->

    <!-- Shop single area start here -->
    <section class="shop-single section-padding">
        <div class="container">
            <!-- product-details area start here -->
            <div class="product-details-single pb-40">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="image img">
                            <div class="swiper shop-single-slide">
                                <div class="swiper-wrapper">
                                    @foreach ($p->images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{asset('assets/products/'.$image->image)}}" alt="{{$image->alt}}">
                                    </div>
                                  @endforeach
                                </div>
                            </div>
                            <div class="mt-3 swiper shop-slider-thumb">
                                <div class="swiper-wrapper">
                                    @foreach ($p->images as $image)
                                    <div class="swiper-slide slide-smoll">
                                        <img src="{{asset('assets/products/'.$image->image)}}" alt="{{$image->alt}}">
                                    </div>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="content h24">
                            <h3 class="pb-2 primary-color">{{$p->title}}</h3>
                            <h4 class="pb-2 mt-4">Product Description</h4>
                            <div class="text-justify">{!!$p->desc1 !!}</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="details-area">
                                    <div class="category flex-wrap mt-4 d-flex py-3 bor-top bor-bottom">
                                        <h4 class="pe-3">Categories :</h4>
                                        <a href="#0" class="primary-hover">Wheel</a>
                                        <span class="px-2">|</span>
                                        
                                    </div>
                                    <div class="d-flex flex-wrap py-3 bor-bottom">
                                        <h4 class="pe-3">Tags :</h4>
                                        <a href="#0" class="primary-hover">tag</a>
                                        <span class="px-2">|</span>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center py-3 bor-bottom">
                                        <h4 class="pe-3">Share:</h4>
                                        <div class="social-media">
                                            <a href="#" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="#" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-linkedin-in"></i></a>
                                            <a href="#" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-instagram"></i></a>
                                            <a href="#" class="mx-2 primary-color secondary-hover"><i class="fa-brands fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-details area end here -->

            <!-- description review area start here -->
            <div class="shop-singe-tab">
                <ul class="nav nav-pills mb-4 bor-bottom py-2">
                    <li class="nav-item">
                        <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active">
                            <h4 class="text-uppercase">description</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#components" data-bs-toggle="tab" class="nav-link">
                            <h4 class="text-uppercase">COMPONENTS</h4>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="description" class="tab-pane fade show active">
                        <div class="pb-4 text-justify">{!!$p->desc2 !!}</div>
                      
                    </div>
                    <div id="components" class="tab-pane fade">
                        <p class="mb-4 fw-bold">{{$p->small_title_components}}</p>
                        <div class="row">
                          
                            <div class="col-6 col-lg-3">
                                <ul>
                                   @if($p->components)
                                        
                                 
                                  @foreach ($p->components as $comp)
                                  <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i> 
                                    {{$comp->name}}
                                    
                                  </li>
                                  @endforeach
                                   @endif
                                  
                                </ul>
                            </div>
        
                           
                        </div>
                        <div class="listing mt-5">
                            @foreach ($p->componentsSecond as $com2)
                            <div class="abmin d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                <div class="img pb-4 pb-md-0 me-4">
                                    <img src="{{asset('assets/product/'.$com2->image)}}" alt="{{$com2->alt}}">
                                </div>
                                <div class="content position-relative p-4 bor w-100">
                                    <div class="head-wrp pb-1 d-flex justify-content-between">
                                        <a href="#0">
                                            <h4 class="text-capitalize primary-color">{{$com2->title}}
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="text-justify">{!!$com2->text !!}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- description review area end here -->
    </section>
    <!-- Shop single area end here -->
@endforeach
    <!-- Product area start here -->
    <section class="product light section-padding sub-bg">
        <div class="container">
            <div class="section-header text-center position-relative">
              @foreach($header as $h1)

                <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">{{$h1->related }}</h2>
              @endforeach
            </div>
            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="/images/prod1.png" alt="image">
                            <div class="content">
                                <h4><a href="#0">Inverter Power Generator</a></h4>
                              
                            </div>
                           
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="/images/fuel-oil-filters.png" alt="image">
                            <div class="content">
                                <h4><a href="#0">Compact Drill Cordless</a></h4>
                               
                            </div>
                          
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="/images/air-filters-group.png" alt="image">
                            <div class="content">
                                <h4><a href="#0">LiIon Compact Drill Driver</a></h4>
                            
                            </div>
                         
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="/images/products-idler.png" alt="image">
                            <div class="content">
                                <h4><a href="#0">Compound Saw Makita</a></h4>
                              
                            </div>
                        
                        </div>
                    </div>
                </div>
                <button class="arry-prev product-arry-prev"><i class="ti-angle-left"></i></button>
                <button class="arry-next product-arry-next"><i class="ti-angle-right"></i></button>
            </div>
        </div>
    </section>
    <!-- Product area end here -->

@endsection