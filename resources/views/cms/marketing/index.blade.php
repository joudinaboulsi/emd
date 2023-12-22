@extends('layouts.admin')

@section('page_name') Marketing Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('header_marketing_store')}}" method="POST" enctype="multipart/form-data">
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
                          <img src="{{asset('assets/marketing/'.$page->image_header)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="image_header" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_header" name="image_header" />
                    </div>
                    <div class="pb-4">
                        <label for="link_video" class="form-label">Video</label>
                        <input type="text" class="form-control" id="link_video" name="link_video" value="{{$page->link_video}}" />
                    </div>

                    <div class="pb-4">
                        @if($page->image_marketing)
                          <img src="{{asset('assets/marketing/'.$page->image_marketing)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="image_marketing" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_marketing" name="image_marketing" />
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
            <a href="{{route('cms_marketing_create')}}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Price Value</th>
                            <th>Item</th>
                            <th>Item Value</th>
                            <th>Image</th>
                            <th>Alt</th>
                            <th>Title Detail</th>
                            <th>Text</th>
                            <th>Image2</th>
                            <th>Alt2</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                     @foreach ($marketing as $m)
                        <tr>
                            <td>{{ $m->title }}</td>
                            <td>{{ $m->price }}</td>
                            <td>{{ $m->price_value }}</td>
                            <td>{{ $m->item}}</td>
                            <td>{{ $m->item_value }}</td>
                        
                            <td>
                                @if ($m->image)
                                  <img src="{{asset('assets/marketing/'.$m->image)}}" height="100">
                                @endif
                            </td>
                            <td>{{ $m->alt}}</td>
                            <td>{{ $m->title_modal }}</td>
                            <td>{!!$m->text_modal !!}</td>
                            <td>
                                @if ($m->image2)
                                  <img src="{{asset('assets/marketing/'.$m->image2)}}" height="100">
                                @endif
                            </td>
                            <td>{{ $m->alt2}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_marketing_edit', $m->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_marketing_delete', $m->id) }}" method="POST">
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
