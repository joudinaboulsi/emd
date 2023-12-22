@extends('layouts.admin')

@section('page_name') Create Client  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_client_update',$client->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                   
                    <div class="pb-4">
                        @if($client->image)
                        <img src="{{asset('assets/client/'.$client->image)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt Image</label>
                        <input type="text" class="form-control" id="alt" name="alt" value="{{$client->alt}}" />
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
