@extends('layouts.admin')

@section('page_name') Edit Catalog  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_catalog_update',$catalog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="pb-4">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$catalog->title}}"/>
                    </div>

                
                    <div class="pb-4">
                        @if($catalog->image)
                        <img src="{{asset('assets/catalog/'.$catalog->image)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">

                        <label for="image" class="form-label pt-4">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt Image</label>
                        <input type="text" class="form-control" id="alt" name="alt" value="{{$catalog->alt}}"/>
                    </div>

                
                 
                        <div class="pb-4">
                            <iframe src="{{asset('assets/catalog/'.$catalog->pdf)}}" width="50%" height="600">
                                This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('folder/file_name.pdf') }}">Download PDF</a>
                        </iframe>
                        </div>
                        <div class="pb-4">
                            <label for="pdf" class="form-label">Pdf</label>
                            <input type="file" class="form-control" id="pdf" name="pdf" />
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
