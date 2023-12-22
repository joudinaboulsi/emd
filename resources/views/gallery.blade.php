@extends('layouts.master')
@section('content')


@foreach($header as $h)
    <!-- Page banner area start here -->
    @include('components.banner', ['class' => "assets/gallery/$h->image_header", 'title' => "$h->title_header" ,  'subtitle' => "$h->subtitle_header"])
    <!-- Page banner area end here -->
@endforeach

<!-- Portfolio area start here -->
<section class="page-portfolio team-one section-padding">
    <div class="container">
        <div class="row">
            @foreach($gallery as $g)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="item">
                        <a href="{{asset('assets/gallery/'.$g->image)}}" class="gallery-popup image d-block" data-title="Image1">
                            <img src="{{asset('assets/gallery/'.$g->image)}}" alt="{{$g->alt}}">
                        </a>
                        @if($g->title || $g->small_title)
                            <div class="content">
                                <span class="text-capitalize pb-2">{{$g->title}}</span>
                                <h3>{{$g->small_title}}</h3>
                            </div>
                        @endif
                    </div>
                </div>
         @endforeach
       
        </div>
    </div>
</section>
<!-- Portfolio area end here -->

@endsection