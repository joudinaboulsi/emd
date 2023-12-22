@extends('layouts.admin')

@section('page_name') Edit Product  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_product_update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="divider divider-info">
                        <div class="divider-text">Header Section</div>
                    </div>
                    <div class="pb-4 col-md-6">
                        <label for="title_header" class="form-label">Title Header</label>
                        <input type="text" class="form-control" id="title_header" name="title_header" value="{{$product->title_header}}"/>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="subtitle_header" class="form-label">subtitle Header</label>
                        <input type="text" class="form-control" id="subtitle_header" name="subtitle_header" value="{{$product->subtitle_header}}"/>
                    </div>

                    <div class="pb-4">
                        @if ($product->image_header)
                          <img src="{{asset('assets/product/'.$product->image_header)}}" height="100">
                       @endif
                    </div>
                    <div class="pb-4">
                        <label for="image_header" class="form-label">Image Header</label>
                        <input type="file" class="form-control" id="image_header" name="image_header" />
                    </div>
                    <div class="divider divider-info">
                        <div class="divider-text">Product Details</div>
                    </div>
                    <div class="pb-4">
                        <label for="name_product" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name_product" name="name_product" value="{{$product->name_product}}"/>
                    </div>

                    <div class="pb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}"/>
                    </div>

                    <div class="pb-4 col-md-6">
                        @if ($product->image)
                        <img src="{{asset('seo/'.$product->image)}}" height="100">
                    @endif
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt" class="form-label" style="padding-top: 103px">Alt</label>
                        <input type="text" class="form-control" id="alt" name="alt" alue="{{$product->alt}}"/>
                    </div>

                    <div class="pb-4">
                        <label for="desc1" class="form-label">Description1</label>
                        <textarea class="form-control" id="desc1" name="desc1" >{!!$product->desc1 !!}</textarea>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="category1" class="form-label">Category1</label>
                        <input type="text" class="form-control" id="category1" name="category1" value="{{$product->category1}}"/>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="category2" class="form-label">Category2</label>
                        <input type="text" class="form-control" id="category2" name="category2" value="{{$product->category2}}"/>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="category3" class="form-label">Category3</label>
                        <input type="text" class="form-control" id="category3" name="category3" value="{{$product->category3}}"/>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="category4" class="form-label">Category4</label>
                        <input type="text" class="form-control" id="category4" name="category4" value="{{$product->category4}}"/>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="tag1" class="form-label">Tag1</label>
                        <input type="text" class="form-control" id="tag1" name="tag1" value="{{$product->tag1}}"/>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="tag2" class="form-label">Tag2</label>
                        <input type="text" class="form-control" id="tag2" name="tag2" value="{{$product->tag2}}"/>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="tag3" class="form-label">Tag3</label>
                        <input type="text" class="form-control" id="tag3" name="tag3" value="{{$product->tag3}}"/>
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="tag4" class="form-label">Tag4</label>
                        <input type="text" class="form-control" id="tag4" name="tag4" value="{{$product->tag4}}"/>
                    </div>

                    <div class="pb-4">
                        <label for="desc2" class="form-label">Description</label>
                        <textarea class="form-control" id="desc2" name="desc2" >{!!$product->desc2 !!}</textarea>
                    </div>
                    <div class="pb-4">
                        <label for="small_title_components" class="form-label">Small title components</label>
                        <input type="text" class="form-control" id="small_title_components" name="small_title_components" value="{{$product->small_title_components}}"/>
                    </div>
                   
                    <div class="pb-4">
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <textarea class="form-control" id="meta_title" name="meta_title" >{!!$product->meta_title !!}</textarea>
                    </div>

                    <div class="pb-4">
                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                        <textarea class="form-control" id="meta_keywords" name="meta_keywords" >{!!$product->meta_keywords !!}</textarea>
                    </div>

                    <div class="pb-4">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="meta_description" name="meta_description" >{!!$product->meta_description !!}</textarea>
                    </div>

                    <div class="pb-4">
                        @if ($product->og_image)
                            <img src="{{asset('seo/'.$product->og_image)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="og_image" class="form-label">OG Image</label>
                        <input type="file" class="form-control" id="og_image" name="og_image" />
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
