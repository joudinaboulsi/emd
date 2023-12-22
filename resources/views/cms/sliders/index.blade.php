@extends('layouts.admin')

@section('page_name') Slider Images Section  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_slider_image_create')}}" class="btn btn-primary">Add Slider iMage</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="slider_table"  class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Link</th>
                            <th>Link url</th>
                            <th>Image</th>
                            <th>Logo</th>
                            <th>Alt</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->title}}</td>
                            <td>{{ $slider->subtitle}}</td>
                            <td>{{ $slider->link}}</td>
                            <td>{{ $slider->link_url}}</td>
                            <td>
                                @if ($slider->image)
                                  <img src="{{asset('assets/slider/'.$slider->image)}}" height="100">
                                @endif
                            </td>
                            <td>
                                @if ($slider->logo)
                                  <img src="{{asset('assets/slider/'.$slider->logo)}}" height="100">
                                @endif
                            </td>
                            <td>{{ $slider->alt}}</td>
                          
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_slider_image_edit', $slider->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_slider_image_delete', $slider->id) }}" method="POST">
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
