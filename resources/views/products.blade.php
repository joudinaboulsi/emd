@extends('layouts.master')
@section('content')


@foreach($header as $h)
    <!-- Page banner area start here -->
    @include('components.banner', ['class' => "assets/product/$h->image_header", 'title' => "$h->title_header" ,  'subtitle' => "$h->subtitle_header"])
    <!-- Page banner area end here -->
@endforeach

        <!-- Shop page area start here -->
        <div class="shop section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12">
                        {{-- <div
                            class="top-bar sub-bg mb-4 d-flex flex-wrap justify-content-between align-items-center main-bg radius10 px-4 py-3">
                            <span>Showing 1–12 of 15 results</span>
                           

                            <form action="" method="GET">
                             
                                <select name="sort" id="sort">
                                    <option value="latest">New</option>
                                    <option value="update">Update</option>
                                
                                </select>
                              
                            </form>
                        </div> --}}
                        @foreach($header as $h1)
                          <div class="mb-5">{!!$h1->text_product !!}</div>
                       @endforeach
                        <div class="product light">
                            <div class="container">
                                <div class="row g-4">
                                    @foreach($products as $product)
                                    <div class="col-md-4">
                                        <div class="item">
                                        <img src="{{asset('assets/product/'.$product->image)}}" alt="{{$product->alt}}">
                                            <div class="content">
                                                <h4><a href="{{ route('product-details',$product->id) }}">{{$product->name_product}}</a></h4>
                                             
                                            </div>
                                          
                                        </div>
                                    </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Shop page area end here -->

        {{-- <script>
            function filtrProduct() {
                let queryString = window.location.search; // get url parameters
                let params = new URLSearchParams(queryString); // create url search params object
                params.delete('sort'); // delete city parameter if it exists, in case you change the dropdown more then once
                params.append('sort', document.getElementById("sort").value); // add selected city
                document.location.href = "?" + params.toString(); // refresh the page with new url
            }
        </script> --}}
    
@endsection