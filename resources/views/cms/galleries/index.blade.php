@extends('layouts.admin')

@section('page_name') Galleries Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('header_gallery_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="pb-4 col-md-6">
                        <label for="title_header" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_header" name="title_header" value="{{$page->title_header}}" />
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="title_header" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="title_header" name="subtitle_header" value="{{$page->subtitle_header}}" />
                    </div>

                    <div class="pb-4">
                        @if($page->image_header)
                          <img src="{{asset('assets/gallery/'.$page->image_header)}}" height="100">
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
        <div class="divider-text">Details</div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_gallery_create')}}" class="btn btn-primary">Add Gallery</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Small title</th>
                            <th>Image</th>
                            <th>Alt</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($galleries as $gallery)
                        <tr  class="gradeX">
                            <td>{{ $gallery->title }}</td>
                            <td>{{ $gallery->small_title }}</td>
            
                            <td>
                                @if ($gallery->image)
                                  <img src="{{asset('assets/gallery/'.$gallery->image)}}" height="100">
                                @endif
                            </td>
                            <td>{{ $gallery->alt}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_gallery_edit', $gallery->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_gallery_delete', $gallery->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                    </form>
                                </div>
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
