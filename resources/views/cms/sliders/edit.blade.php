@extends('layouts.admin')

@section('page_name') Edit Slider Image  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_slider_image_update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                   
                    <div class="pb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$slider->title}}" />
                    </div>

                    <div class="pb-4">
                        <label for="subtitle" class="form-label">Subitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$slider->subtitle}}" />
                    </div>

                    <div class="pb-4">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link" name="link" value="{{$slider->link}}" />
                    </div>
                    <div class="pb-4">
                        <label for="link_url" class="form-label">Link Url</label>
                        <input type="text" class="form-control" id="link_url" name="link_url" value="{{$slider->link_url}}" />
                    </div>
                
                    <div class="pb-4">
                        @if ($slider->image)
                            <img src="{{asset('assets/slider/'.$slider->image)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">

                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4">
                        @if ($slider->logo)
                            <img src="{{asset('assets/slider/'.$slider->logo)}}"  height="100">
                        @endif
                    </div>
                    <div class="pb-4">

                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo" />
                    </div>
                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt</label>
                        <input type="text" class="form-control" id="alt" name="alt" value="{{$slider->alt}}" />
                    </div>

                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
