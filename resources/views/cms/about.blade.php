@extends('layouts.admin')

@section('page_name') About Page  @endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <div class="divider divider-info">
                <div class="divider-text">Section Header</div>
            </div>
            <form action="{{route('cms_about_store_page')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="pb-4 col-md-6">
                        <label for="title_header" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_header" name="title_header" value="{{$page->title_header}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="title_header" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="title_header" name="subtitle_header" value="{{$page->subtitle_header}}" />
                    </div>

                    <div class="pb-4">
                        @if($page->image_header)
                        <img src="{{asset('assets/about/'.$page->image_header)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="image_header" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_header" name="image_header" />
                    </div>
                </div>
                <div class="pb-4">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
    </div>
        <div class="card-body">
            <form action="{{route('cms_about_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                  

                    <div class="divider divider-info">
                        <div class="divider-text">Section 1</div>
                    </div>
                
                   <div class="pb-4">
                        <label for="title_s1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_s1" name="title_s1" value="{{$about->title_s1}}" />
                    </div>

                   <div class="pb-4">
                        <label for="subtitle_s1" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle_s1" name="subtitle_s1" value="{{$about->subtitle_s1}}" />
                    </div>
                    <div class="pb-4">
                        <label for="small_title_s1" class="form-label">Small title</label>
                        <input type="text" class="form-control" id="small_title_s1" name="small_title_s1" value="{{$about->small_title_s1}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li" class="form-label">Li</label>
                        <input type="text" class="form-control" id="li" name="li" value="{{$about->li}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="li2" class="form-label">Li2</label>
                        <input type="text" class="form-control" id="li2" name="li2" value="{{$about->li2}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li3" class="form-label">Li3</label>
                        <input type="text" class="form-control" id="li3" name="li3" value="{{$about->li3}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li4" class="form-label">Li4</label>
                        <input type="text" class="form-control" id="li4" name="li4" value="{{$about->li4}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li5" class="form-label">Li5</label>
                        <input type="text" class="form-control" id="li5" name="li5" value="{{$about->li5}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li6" class="form-label">Li6</label>
                        <input type="text" class="form-control" id="li6" name="li6" value="{{$about->li6}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li7" class="form-label">Li7</label>
                        <input type="text" class="form-control" id="li7" name="li7" value="{{$about->li7}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li8" class="form-label">Li8</label>
                        <input type="text" class="form-control" id="li8" name="li8" value="{{$about->li8}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li9" class="form-label">Li9</label>
                        <input type="text" class="form-control" id="li9" name="li9" value="{{$about->li9}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li10" class="form-label">Li10</label>
                        <input type="text" class="form-control" id="li10" name="li10" value="{{$about->li10}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li11" class="form-label">Li11</label>
                        <input type="text" class="form-control" id="li11" name="li11" value="{{$about->li11}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li12" class="form-label">Li12</label>
                        <input type="text" class="form-control" id="li12" name="li12" value="{{$about->li12}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li13" class="form-label">Li13</label>
                        <input type="text" class="form-control" id="li13" name="li13" value="{{$about->li13}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="li14" class="form-label">Li14</label>
                        <input type="text" class="form-control" id="li14" name="li14" value="{{$about->li14}}" />
                    </div>

                    <div class="pb-4">
                        <label for="li15" class="form-label">Li15</label>
                        <input type="text" class="form-control" id="li15" name="li15" value="{{$about->li15}}" />
                    </div>
                
             
                    <div class="pb-4 col-md-6">
                        @if ($about->image_s1)
                            <img src="{{ asset('assets/about/'.$about->image_s1) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="image_s1" class="form-label">Image </label>
                        <input type="file" class="form-control" id="image_s1" name="image_s1">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt_s1" class="form-label" style="margin-top: 103px;">Alt  </label>
                        <input type="text" class="form-control" id="alt_s1" name="alt_s1" value="{{ $about->alt_s1 }}">
                    </div>
                  
                    <div class="divider divider-info">
                        <div class="divider-text">Section 2</div>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="title_s2" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_s2" name="title_s2" value="{{$about->title_s2}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="subtitle_s2" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle_s2" name="subtitle_s2" value="{{$about->subtitle_s2}}" />
                    </div>


                    <div class="pb-4">
                        <label for="text_s2" class="form-label">Text</label>
                        <textarea class="form-control" id="text_s2" name="text_s2">{!!$about->text_s2!!}</textarea>
                    </div>


                    <div class="pb-4 col-md-6">
                        <label for="p" class="form-label" style="margin-top: 103px;">small text </label>
                        <input type="text" class="form-control" id="p" name="p" value="{{ $about->p }}">
                    </div>


                    <div class="pb-4 col-md-6">
                        @if ($about->icon)
                            <img src="{{ asset('assets/about/'.$about->icon) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="icon" class="form-label">Image </label>
                        <input type="file" class="form-control" id="icon" name="icon">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt" class="form-label" style="margin-top: 103px;">Alt  </label>
                        <input type="text" class="form-control" id="alt" name="alt" value="{{ $about->alt }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="p2" class="form-label" style="margin-top: 103px;">small text2</label>
                        <input type="text" class="form-control" id="p2" name="p2" value="{{ $about->p2 }}">
                    </div>


                    <div class="pb-4 col-md-6">
                        @if ($about->icon2)
                            <img src="{{ asset('assets/about/'.$about->icon2) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="icon2" class="form-label">Image2 </label>
                        <input type="file" class="form-control" id="icon2" name="icon2">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt2" class="form-label" style="margin-top: 103px;">Alt2  </label>
                        <input type="text" class="form-control" id="alt2" name="alt2" value="{{ $about->alt2 }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="p3" class="form-label" style="margin-top: 103px;">small text 3 </label>
                        <input type="text" class="form-control" id="p3" name="p3" value="{{ $about->p3 }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        @if ($about->icon3)
                            <img src="{{ asset('assets/about/'.$about->icon3) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="icon3" class="form-label">Image3 </label>
                        <input type="file" class="form-control" id="icon3" name="icon3">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt3" class="form-label" style="margin-top: 103px;">Alt3  </label>
                        <input type="text" class="form-control" id="alt3" name="alt3" value="{{ $about->alt3 }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="p4" class="form-label" style="margin-top: 103px;">small text4 </label>
                        <input type="text" class="form-control" id="p4" name="p4" value="{{ $about->p4 }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        @if ($about->icon4)
                            <img src="{{ asset('assets/about/'.$about->icon4) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="icon4" class="form-label">Image3 </label>
                        <input type="file" class="form-control" id="icon4" name="icon4">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt4" class="form-label" style="margin-top: 103px;">Alt4</label>
                        <input type="text" class="form-control" id="alt4" name="alt4" value="{{ $about->alt4 }}">
                    </div>


                   <div class="divider divider-info">
                        <div class="divider-text">Section 3 - left</div>
                    </div>

                    <div class="pb-4">
                        <label for="link_product" class="form-label">Title Tab1</label>
                        <input type="text" class="form-control" id="title_product" name="title_product" value="{{ $about->title_product }}">
                    </div>
                  

                   <div class="pb-4">
                        <label for="text_product" class="form-label">Text Tab1</label>
                        <textarea class="form-control" id="text_product" name="text_product">{!!$about->text_product !!}</textarea>
                    </div>
                    <div class="pb-4">
                        <label for="small_title_product" class="form-label">Title Tab2</label>
                        <input type="text" class="form-control" id="small_title_product" name="small_title_product" value="{{ $about->small_title_product }}">
                    </div>

                    <div class="pb-4">
                        <label for="text2_product" class="form-label">Text Tab 2</label>
                        <textarea class="form-control" id="text2_product" name="text2_product">{!!$about->text2_product !!}</textarea>
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section 3 - right</div>
                    </div>


                    <div class="pb-4 col-md-6">
                        <label for="subtitle_s3" class="form-label">Subitle</label>
                        <input type="text" class="form-control" id="subtitle_s3" name="subtitle_s3" value="{{ $about->subtitle_s3 }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="title_s3" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_s3" name="title_s3" value="{{ $about->title_s3 }}">
                    </div>
                   
                    <div class="pb-4 col-md-6">
                        <label for="link_s3" class="form-label">link Blue text </label>
                        <input type="text" class="form-control" id="link_s3" name="link_s3" value="{{ $about->link_s3 }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="url_s3" class="form-label">Url Link </label>
                        <input type="text" class="form-control" id="url_s3" name="url_s3" value="{{ $about->url_s3 }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="title2_s3" class="form-label">Title2</label>
                        <input type="text" class="form-control" id="title2_s3" name="title2_s3" value="{{ $about->title2_s3 }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="link2_s3" class="form-label">Title 3 Yellow</label>
                        <input type="text" class="form-control" id="link2_s3" name="link2_s3" value="{{ $about->link2_s3 }}">
                    </div>

                    
                    <div class="pb-4 col-md-6">
                        <label for="title3_s3" class="form-label">Title4</label>
                        <input type="text" class="form-control" id="title3_s3" name="title3_s3" value="{{ $about->title3_s3 }}">
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="link3_s3" class="form-label">link Button </label>
                        <input type="text" class="form-control" id="link3_s3" name="link3_s3" value="{{ $about->link3_s3 }}">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="url3_s3" class="form-label">Url Button</label>
                        <input type="text" class="form-control" id="url3_s3" name="url3_s3" value="{{ $about->url3_s3 }}">
                    </div>

                    <div class="pb-4">
                   <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
