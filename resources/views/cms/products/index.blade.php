@extends('layouts.admin')

@section('page_name') Products  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_product_create')}}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Title</th>
                            <th>Images</th>
                            <th>Components</th>
                            <th>Components Two</th>
                           
                         
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name_product}}</td>
                            <td>{{ $product->title}}</td>
                            
                            <td>  <a class="btn btn-outline-dark" href="{{ route('cms_product_images', $product->id) }}">Show</a></td>
                            <td>  <a class="btn btn-outline-dark" href="{{ route('cms_components', $product->id) }}">Show</a></td>
                            <td>  <a class="btn btn-outline-dark" href="{{ route('cms_components_two', $product->id) }}">Show</a></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_product_edit', $product->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_product_delete',$product->id) }}" method="POST">
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
