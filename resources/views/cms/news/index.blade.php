@extends('layouts.admin')

@section('page_name') News Section  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_news_create')}}" class="btn btn-primary">Add News</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>Title</th>
                            <th>Text</th>
                            <th>Image</th>
                            <th>Alt</th>
                            <th>Link</th>
                            <th>Image Detail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($news as $n)
                        <tr>
                            <td>{{ $n->title}}</td>
                             <td>{!!$n->text !!}</td>
                            <td>
                                @if ($n->image)
                                  <img src="{{asset('assets/news/'.$n->image)}}" height="100">
                                @endif
                            </td>
                            <td>{{ $n->alt}}</td>
                            <td>{{ $n->link}}</td>
                            <td>
                                @if ($n->image_detail)
                                  <img src="{{asset('assets/news/'.$n->image_detail)}}" height="100">
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_news_edit', $n->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_news_delete', $n->id) }}" method="POST">
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
