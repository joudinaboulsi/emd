@extends('layouts.admin')

@section('page_name') Contact Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('header_contact_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="divider divider-info">
                    <div class="divider-text"> Section Header</div>
                </div>
            
                <div class="row">
                    <div class="pb-4 col-md-6">
                        <label for="title_header" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_header" name="title_header" value="{{$page->title_header}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="subtitle_header" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle_header" name="subtitle_header" value="{{$page->subtitle_header}}" />
                    </div>

                    <div class="pb-4">
                        @if($page->image_header)
                          <img src="{{asset('assets/contact/'.$page->image_header)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="image_header" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_header" name="image_header" />
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

    <div class="divider divider-info">
        <div class="divider-text">Contact Page</div>
    </div>

    <div class="card">
       
        <div class="card-body">
            <form action="{{route('cms_contact_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                   <div class="pb-4 col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$contact->title}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="title_main" class="form-label">Title Main</label>
                        <input type="text" class="form-control" id="title_main" name="title_main" value="{{$contact->title_main}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="title_office" class="form-label">Title Office</label>
                        <input type="text" class="form-control" id="title_office" name="title_office" value="{{$contact->title_office}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$contact->email}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{$contact->location}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="location_url" class="form-label">Location Url</label>
                        <input type="text" class="form-control" id="location_url" name="location_url" value="{{$contact->location_url}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$contact->phone}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="phone_url" class="form-label">Phone Url</label>
                        <input type="text" class="form-control" id="phone_url" name="phone_url" value="{{$contact->phone_url}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="phone2" class="form-label">Phone2</label>
                        <input type="text" class="form-control" id="phone2" name="phone2" value="{{$contact->phone2}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="phone2_url" class="form-label">Phone2 Url</label>
                        <input type="text" class="form-control" id="phone2_url" name="phone2_url" value="{{$contact->phone2_url}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="phone3" class="form-label">Phone3</label>
                        <input type="text" class="form-control" id="phone3" name="phone3" value="{{$contact->phone3}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="phone3_url" class="form-label">Phone3 Url</label>
                        <input type="text" class="form-control" id="phone3_url" name="phone3_url" value="{{$contact->phone3_url}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="title_location" class="form-label">Title Location</label>
                        <input type="text" class="form-control" id="title_location" name="title_location" value="{{$contact->title_location}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="location2" class="form-label">Location2</label>
                        <input type="text" class="form-control" id="location2" name="location2" value="{{$contact->location2}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="location2_url" class="form-label">Location2 Url</label>
                        <input type="text" class="form-control" id="location2_url" name="location2_url" value="{{$contact->location2_url}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="phone4" class="form-label">Phone4</label>
                        <input type="text" class="form-control" id="phone4" name="phone4" value="{{$contact->phone4}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="phone4_url" class="form-label">Phone4 Url</label>
                        <input type="text" class="form-control" id="phone4_url" name="phone4_url" value="{{$contact->phone4_url}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="phone5" class="form-label">Phone5</label>
                        <input type="text" class="form-control" id="phone5" name="phone5" value="{{$contact->phone5}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="phone5_url" class="form-label">Phone5 Url</label>
                        <input type="text" class="form-control" id="phone5_url" name="phone5_url" value="{{$contact->phone5_url}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="map" class="form-label">Map</label>
                        <input type="text" class="form-control" id="map" name="map" value="{{$contact->map}}" />
                    </div>


                   <div class="pb-4">
                        @if($contact->image)
                          <img src="{{asset('assets/contact/'.$contact->image)}}" height="100">
                        @endif
                    </div>
                   <div class="pb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
