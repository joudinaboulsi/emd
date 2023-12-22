@extends('layouts.admin')

@section('page_name') Clients Section  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_client_create')}}" class="btn btn-primary">Add Client</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>Image</th>
                            <th>Alt</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($clients as $client)
                        <tr>
                          
                            <td>
                                @if ($client->image)
                                  <img src="{{asset('assets/client/'.$client->image)}}" height="100">
                                @endif
                            </td>
                            <td>{{ $client->alt}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_client_edit', $client->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_client_delete', $client->id) }}" method="POST">
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
