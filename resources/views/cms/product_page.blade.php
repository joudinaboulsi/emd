@extends('layouts.admin')

@section('page_name') Products Page Content  @endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
       
        <div class="card-body">
            <form action="{{route('cms_product_info_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="divider divider-info">
                        <div class="divider-text">Products Page Section</div>
                    </div>
                

                   <div class="pb-4">
                        <label for="title_header" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_header" name="title_header" value="{{$product->title_header}}" />
                    </div>

                   <div class="pb-4">
                        <label for="subtitle_header" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle_header" name="subtitle_header" value="{{$product->subtitle_header}}" />
                    </div>

                    <div class="pb-4">
                        @if ($product->image_header)
                            <img src="{{ asset('assets/product/'.$product->image_header) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="image_header" class="form-label">Image </label>
                        <input type="file" class="form-control" id="image_header" name="image_header">
                    </div>

                    <div class="pb-4">
                        <label for="text_product" class="form-label">Text</label>
                        <textarea class="form-control" id="text_product" name="text_product">{!!$product->text_product!!}</textarea>
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Related info</div>
                    </div>
                    <div class="pb-4">
                        <label for="related" class="form-label">Title</label>
                        <input type="text" class="form-control" id="related" name="related" value="{{$product->related}}" />
                    </div>

                    <div class="pb-4">
                   <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
