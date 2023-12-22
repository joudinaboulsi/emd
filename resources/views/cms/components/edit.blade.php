@extends('layouts.admin')

@section('page_name') Edit Component  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_component_update',[$component->id,$product->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                  
                    <div class="pb-4">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$component->name}}"/>
                    </div>

                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
