@extends('layouts.admin')

@section('page_name') Create SLider Image  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_slider_image_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                   
                    <div class="pb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" />
                    </div>

                    <div class="pb-4">
                        <label for="subtitle" class="form-label">Subitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" />
                    </div>

                    <div class="pb-4">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link" name="link" />
                    </div>
                    <div class="pb-4">
                        <label for="link_url" class="form-label">Link Url</label>
                        <input type="text" class="form-control" id="link_url" name="link_url" />
                    </div>
                
                    <div class="pb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4">
                        <label for="lgoo" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="lgoo" name="lgoo" />
                    </div>
                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt</label>
                        <input type="text" class="form-control" id="alt" name="alt" />
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
