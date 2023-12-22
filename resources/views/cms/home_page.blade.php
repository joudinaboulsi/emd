@extends('layouts.admin')

@section('page_name') Home Page  @endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
       
        <div class="card-body">
            <form action="{{route('cms_home_page_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="divider divider-info">
                        <div class="divider-text">Section 1</div>
                    </div>
                

                   <div class="pb-4">
                        <label for="title_s1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_s1" name="title_s1" value="{{$home->title_s1}}" />
                    </div>

                   <div class="pb-4">
                        <label for="subtitle_s1" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle_s1" name="subtitle_s1" value="{{$home->subtitle_s1}}" />
                    </div>

                   <div class="pb-4">
                        <label for="text_s1" class="form-label">Text</label>
                        <textarea class="form-control" id="text_s1" name="text_s1">{!!$home->text_s1!!}</textarea>
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="count" class="form-label">Count</label>
                        <input type="text" class="form-control" id="count" name="count" value="{{$home->count}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="count_title" class="form-label">Subtile Count</label>
                        <input type="text" class="form-control" id="count_title" name="count_title" value="{{$home->count_title}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="count2" class="form-label">Count2</label>
                        <input type="text" class="form-control" id="count2" name="count2" value="{{$home->count2}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="count_title2" class="form-label">Subtile Count2</label>
                        <input type="text" class="form-control" id="count_title2" name="count_title2" value="{{$home->count_title2}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="count3" class="form-label">Count3</label>
                        <input type="text" class="form-control" id="count3" name="count3" value="{{$home->count3}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="count_title3" class="form-label">Subtile Count3</label>
                        <input type="text" class="form-control" id="count_title3" name="count_title3" value="{{$home->count_title3}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="count4" class="form-label">Count4</label>
                        <input type="text" class="form-control" id="count4" name="count4" value="{{$home->count4}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="count_title4" class="form-label">Subtile Count4</label>
                        <input type="text" class="form-control" id="count_title4" name="count_title4" value="{{$home->count_title4}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="youtube" class="form-label">Youtube</label>
                        <input type="text" class="form-control" id="youtube" name="youtube" value="{{$home->youtube}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link" name="link" value="{{$home->link}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="link_url" class="form-label">Link Url</label>
                        <input type="text" class="form-control" id="link_url" name="link_url" value="{{$home->link_url}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="small_title" class="form-label">Small Title</label>
                        <input type="text" class="form-control" id="small_title" name="small_title" value="{{$home->small_title}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="small_title2" class="form-label">Small Title2</label>
                        <input type="text" class="form-control" id="small_title2" name="small_title2" value="{{$home->small_title2}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="image_title" class="form-label">Small Title Image</label>
                        <input type="text" class="form-control" id="image_title" name="image_title" value="{{$home->image_title}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        @if ($home->image_s1)
                            <img src="{{ asset('assets/home/'.$home->image_s1) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="image_s1" class="form-label">Image </label>
                        <input type="file" class="form-control" id="image_s1" name="image_s1">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt_s1" class="form-label" style="margin-top: 103px;">Alt</label>
                        <input type="text" class="form-control" id="alt_s1" name="alt_s1" value="{{ $home->alt_s1 }}">
                    </div>

                   
                    <div class="divider divider-info">
                        <div class="divider-text">Titles</div>
                    </div>
                

                    <div class="pb-4 col-md-6">
                        <label for="subtitle_product" class="form-label">Subtitle Products</label>
                        <input type="text" class="form-control" id="subtitle_product" name="subtitle_product" value="{{$home->subtitle_product}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="title_product" class="form-label">Title Products</label>
                        <input type="text" class="form-control" id="title_product" name="title_product" value="{{$home->title_product}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="subtitle_news" class="form-label">Subtitle News</label>
                        <input type="text" class="form-control" id="subtitle_news" name="subtitle_news" value="{{$home->subtitle_news}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="title_news" class="form-label">Title News</label>
                        <input type="text" class="form-control" id="title_news" name="title_news" value="{{$home->title_news}}" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="title_client" class="form-label">Title Client</label>
                        <input type="text" class="form-control" id="title_client" name="title_client" value="{{$home->title_client}}" />
                    </div>


                    <div class="pb-4">
                   <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
