@extends('layouts.admin')

@section('page_name') Edit {{ $page->page }} @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('seoUpdate', $page->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="pb-4">
                    <label for="meta_title" class="form-label">Title</label>
                    <input class="form-control" type="text" id="meta_title" name="meta_title" value="{{ $page->meta_title }}" />
                </div>

                <div class="pb-4">
                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                    <textarea class="form-control" id="meta_keywords" name="meta_keywords">{!! $page->meta_keywords !!}</textarea>
                </div>

                <div class="pb-4">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description">{!! $page->meta_description !!}</textarea>
                </div>

                <div class="pb-4">
                    @if($page->image)
                    <img src="{{ asset('seo/' . $page->image) }}" height="100" class="d-block">
                    @endif
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" id="image" name="image" />
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
