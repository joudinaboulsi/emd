@extends('layouts.admin')

@section('page_name') Components Section  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_component_create',$id)}}" class="btn btn-primary">Add Component</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            
                          
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($components as $component)
                        <tr>
                         
                            <td>{{ $component->name}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_component_edit',[$id, $component->id]) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_component_delete', [$id, $component->id]) }}" method="POST">
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
