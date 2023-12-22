@extends('layouts.admin')

@section('page_name') Edit SLider Text  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_slider_text_update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                
                    <div class="pb-4">
                        <label for="text" class="form-label">Text</label>
                        <input type="text" class="form-control" id="text" name="text" value="{{$slider->text}}"/>
                    </div>

                    
                    <div class="pb-4">
                        <label for="text2" class="form-label">Text2</label>
                        <input type="text" class="form-control" id="text2" name="text2" value="{{$slider->text2}}"/>
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
