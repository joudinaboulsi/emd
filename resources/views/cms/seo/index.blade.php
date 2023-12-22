@extends('layouts.admin')

@section('page_name') SEO Pages @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Meta Title</th>
                            <th>Meta Keywords</th>
                            <th>Meta Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($pages as $page)
                            <tr>
                                <td>{{ $page->page }}</td>
                                <td>{{ $page->meta_title }}</td>
                                <td>{!! $page->meta_keywords !!}</td>
                                <td>{!! $page->meta_description !!}</td>
                                <td>
                                    @if ($page->image)
                                    <img src="{{ asset('seo/'.$page->image) }}" width="150" alt="SEO Image">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('seoEdit', $page->id) }}" class="btn btn-outline-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
