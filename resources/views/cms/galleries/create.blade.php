@extends('layouts.admin')

@section('page_name') Create Gallery  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_gallery_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="pb-4">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" />
                    </div>

                    <div class="pb-4">
                        <label for="small_title" class="form-label">Small title </label>
                        <input type="text" class="form-control" id="small_title" name="small_title" />
                    </div>

                
                    <div class="pb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt Image</label>
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
