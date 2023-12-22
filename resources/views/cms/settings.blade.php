@extends('layouts.admin')

@section('page_name') Settings  @endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
       
        <div class="card-body">
            <form action="{{route('cms_settings_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                 

                   <div class="pb-4 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$settings->email}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{$settings->location}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="location_url" class="form-label">Location Url</label>
                        <input type="text" class="form-control" id="location_url" name="location_url" value="{{$settings->location_url}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$settings->phone}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="phone_url" class="form-label">Phone Url</label>
                        <input type="text" class="form-control" id="phone_url" name="phone_url" value="{{$settings->phone_url}}" />
                    </div>

                 

                   <div class="pb-4 col-md-6">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{$settings->facebook}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{$settings->instagram}}" />
                    </div>

                   <div class="pb-4 col-md-6">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" class="form-control" id="twitter" name="twitter" value="{{$settings->twitter}}" />
                    </div>
                   <div class="pb-4 col-md-6">
                        <label for="whatsap" class="form-label"> Whatsap Link</label>
                        <input type="text" class="form-control" id="whatsap" name="whatsap" value="{{$settings->whatsap}}" />
                    </div>

                    <div class="pb-4">
                        <label for="about" class="form-label">  About Company</label>
                        <textarea class="form-control" id="about" name="about">{!!$settings->about !!}</textarea>
                    </div>
                 


                    <div class="pb-4 col-md-6">
                        @if ($settings->logo)
                            <img src="{{ asset('assets/settings/'.$settings->logo) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="logo" class="form-label">Logo HEader</label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt" class="form-label" style="margin-top: 103px;">Alt Logo </label>
                        <input type="text" class="form-control" id="alt" name="alt" value="{{ $settings->alt }}">
                    </div>


                    <div class="pb-4 col-md-6">
                        @if ($settings->logo2)
                            <img src="{{ asset('assets/settings/'.$settings->logo2) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="logo2" class="form-label">Logo Footer </label>
                        <input type="file" class="form-control" id="logo2" name="logo2">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt2" class="form-label" style="margin-top: 103px;">Alt 2</label>
                        <input type="text" class="form-control" id="alt2" name="alt2" value="{{ $settings->alt2 }}">
                    </div>
                    <div class="pb-4">
                   <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
