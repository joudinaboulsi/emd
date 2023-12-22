@extends('layouts.admin')

@section('page_name') Create Marketing  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_marketing_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="pb-4">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" />
                    </div>

                
                    <div class="pb-4 col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt" class="form-label">Alt Image</label>
                        <input type="text" class="form-control" id="alt" name="alt" />
                    </div>

                    <div class="pb-4">
                        <label for="item" class="form-label">Item </label>
                        <input type="text" class="form-control" id="item" name="item" />
                    </div>
                    <div class="pb-4">
                        <label for="item_value" class="form-label">Item Value</label>
                        <input type="text" class="form-control" id="item_value" name="item_value" />
                    </div>

                    <div class="pb-4">
                        <label for="price" class="form-label">Price </label>
                        <input type="text" class="form-control" id="price" name="price" />
                    </div>
                    <div class="pb-4">
                        <label for="price_value" class="form-label">Price Value</label>
                        <input type="text" class="form-control" id="price_value" name="price_value" />
                    </div>

                    <div class="pb-4">
                        <label for="title_modal" class="form-label">Title Details </label>
                        <input type="text" class="form-control" id="title_modal" name="title_modal" />
                    </div>

                    <div class="pb-4">
                        <label for="text_modal" class="form-label">Text Details </label>
                        <textarea class="form-control" id="text_modal" name="text_modal"></textarea>
                    </div>

                    <div class="pb-4 col-md-6">
                       
                        <label for="image2" class="form-label">Image2 </label>
                        <input type="file" class="form-control" id="image2" name="image2">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt2" class="form-label">Alt2 </label>
                        <input type="text" class="form-control" id="alt2" name="alt2" >
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
