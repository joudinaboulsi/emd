@extends('layouts.admin')

@section('page_name') Edit Marketing  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_marketing_update',$marketing->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="pb-4">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$marketing->title}}"/>
                    </div>

                
                    <div class="row">
                        <div class="col-md-6 pb-4">
                            @if ($marketing->image)
                                <img src="../assets/marketing/{{ $marketing->image }}" height="100" class="d-block">
                            @endif
                            <label for="image" class="form-label">Image </label>
                            <input type="file" class="form-control" id="image" name="image" />
                        </div>
    
                        <div class="col-md-6 pb-4">
                            <label for="alt" class="form-label" style="margin-top:103px">Alt Image</label>
                            <input type="text" class="form-control" id="alt" name="alt" value="{{ $marketing->alt }}"  />
                        </div>
                    </div>
                    <div class="pb-4">
                        <label for="item" class="form-label">Item </label>
                        <input type="text" class="form-control" id="item" name="item" value="{{$marketing->item}}"/>
                    </div>
                    <div class="pb-4">
                        <label for="item_value" class="form-label">Item Value</label>
                        <input type="text" class="form-control" id="item_value" name="item_value" value="{{$marketing->item_value}}"/>
                    </div>

                    <div class="pb-4">
                        <label for="price" class="form-label">Price </label>
                        <input type="text" class="form-control" id="price" name="price"  value="{{$marketing->price}}"/>
                    </div>
                    <div class="pb-4">
                        <label for="price_value" class="form-label">Price Value</label>
                        <input type="text" class="form-control" id="price_value" name="price_value" value="{{$marketing->price_value}}"/>
                    </div>

                    <div class="pb-4">
                        <label for="title_modal" class="form-label">Title Details </label>
                        <input type="text" class="form-control" id="title_modal" name="title_modal" value="{{$marketing->title_modal}}"/>
                    </div>

                    <div class="pb-4">
                        <label for="text_modal" class="form-label">Text Details </label>
                        <textarea class="form-control" id="text_modal" name="text_modal">{!! $marketing->text_modal !!}</textarea>
                    </div>

                
                    <div class="row">
                        <div class="col-md-6 pb-4">
                            @if ($marketing->image2)
                                <img src="../assets/marketing/{{ $marketing->image2 }}" height="100" class="d-block">
                            @endif
                            <label for="image2" class="form-label">Image </label>
                            <input type="file" class="form-control" id="image2" name="image2" />
                        </div>
    
                        <div class="col-md-6 pb-4">
                            <label for="alt2" class="form-label" style="margin-top:103px">Alt Image</label>
                            <input type="text" class="form-control" id="alt2" name="alt2" value="{{ $marketing->alt2 }}"  />
                        </div>
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
