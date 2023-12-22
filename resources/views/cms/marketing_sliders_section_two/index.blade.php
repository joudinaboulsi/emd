@extends('layouts.admin')

@section('page_name') SliderText Section  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_text_create')}}" class="btn btn-primary">Add </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>Text 1</th>
                            <th>Text2</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sliders as $slider)
                        <tr>
                        
                            <td>{{ $slider->text}}</td>
                            <td>{{ $slider->text2}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_text_edit', $slider->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_text_delete', $slider->id) }}" method="POST">
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
