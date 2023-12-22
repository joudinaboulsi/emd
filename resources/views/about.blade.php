@extends('layouts.master')
@section('content')

@foreach($header as $h)
    <!-- Page banner area start here -->
    @include('components.banner', ['class' => "assets/about/$h->image_header", 'title' => "$h->title_header" ,  'subtitle' => "$h->subtitle_header"])
    <!-- Page banner area end here -->
@endforeach
    <!-- Service area start here -->
 @foreach ($aboutpage  as $about)
<!-- About area start here -->
<section class="page-about section-padding">
    <div class="shape1 d-none d-lg-block float-bob-y">
        <img src="/images/shape/shape3.png" alt="">
    </div>
    <div class="shape2 d-none d-lg-block float-bob-y">
        <img src="/images/shape/shape2.png" alt="">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="image">
                    <img src="{{asset('assets/about/'.$about->image_s1)}}" alt="{{$about->alt_s1}}">
                    <div class="info d-none d-sm-block">
                    <h2><span id="count"></span> + </h2>
                        <span>Years Experience</span>
                    </div>
                    <div class="stroke-text d-none d-sm-block">
                        <h2>since 2006</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-item">
                    <div class="section-header mb-5">
                        <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">{{$about->title_s1}}</h5>
                        <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">{{$about->subtitle_s1}}</</h2>
                        <p class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">{{$about->small_title_s1}}</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-12 col-md-6 wow fadeInLeft" data-wow-duration="1.6s" data-wow-delay=".6s">
                            <ul>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li2}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li3}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li4}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li5}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li6}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li7}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li8}} </li>
                              
                               
                             
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 wow fadeInRight " data-wow-duration="1.6s" data-wow-delay=".6s">
                            <ul>  
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li9}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li10}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li11}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li12}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li13}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li14}} </li>
                                <li><i class="fa-solid mb-4 me-2 primary-color fa-gear"></i>{{$about->li15}} </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About area end here -->
<!-- Choose area start here -->
<section class="choose bg-image section-padding">
    <div class="shape d-none d-xl-block float-bob-x">
        <img src="/images/shape/shape4.png" alt="">
    </div>
    <div class="container">
        <div class="row mb-5 mb-lg-0 ">
            <div class="col-lg-6">
                <div class="section-header">
                    <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">{{$about->title_s2}}</h5>
                    <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">{{$about->subtitle_s2}}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s">{!!$about->text_s2 !!}</div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="item">
                    <img src="{{asset('assets/about/'.$about->icon)}}" alt="{{$about->alt}}" width="100">
                    <h4>{{$about->p}}</h4>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="item">
                    <img src="{{asset('assets/about/'.$about->icon2)}}" alt="{{$about->alt2}}" width="100">
                    <h4>{{$about->p2}}</h4>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="item">
                    <img src="{{asset('assets/about/'.$about->icon3)}}" alt="{{$about->alt3}}" width="100">
                    <h4>{{$about->p3}}</h4>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="item">
                    <img src="{{asset('assets/about/'.$about->icon4)}}" alt="{{$about->alt4}}" width="100">
                    <h4>{{$about->p4}}</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose area end here -->
<!-- Service area start here -->
<section class="service-two section-padding sub-bg">
    <div class="bulding d-none d-lg-block">
        <img src="/images/emd-wheel-loaders.png" alt="">
    </div>
    <div class="container relative-container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".3s">
                <div class="item-wrp">
                    <div class="left-item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header pt-0" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa-solid fa-wrench"></i> {{$about->title_product}}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div>{!!$about->text_product !!}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa-solid fa-cogs"></i> {{$about->small_title_product}}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                   <div>{!!$about->text2_product !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape d-none d-xl-block">
                        <img src="/images/shape/shape5.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-item">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">{{$about->subtitle_s3}}</h5>
                        <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">{{$about->title_s3}}
                            <span class="primary-color text-decoration-underline"><a href="{{$about->url_s3}}" target="_blank">{{$about->link_s3}}</a></span> {{$about->title2_s3}}
                            <span class="new-color">{{$about->link2_s3}}</span> {{$about->title3_s3}}
                        </h2>
                    </div>
                    <a class="wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".9s" href="{{$about->url3_s3}}">
                        <i class="fa-solid fa-plus"></i>
                        <div style="width:200px">{{$about->link3_s3}}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service area end here -->
@endforeach
<script>
    // Define the starting year
    var startYear = 2006;
    
    // Calculate the number of years that have passed
    var currentYear = new Date().getFullYear();
    var yearsPassed = currentYear - startYear;
    
    // Display the result in the element with id="count"
    document.getElementById("count").innerHTML = yearsPassed;
</script>
@endsection