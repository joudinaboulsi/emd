@extends('layouts.admin')

@section('page_name') Edit
 News  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_news_update',$news->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                   
                    <div class="pb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$news->title}}"/>
                    </div>

                    <div class="pb-4">
                        <label for="text" class="form-label">Text</label>
                        <textarea class="form-control" id="text" name="text">{!!$news->text !!}</textarea>
                    </div>

                    <div class="pb-4">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link" name="link"  value="{{$news->link}}"/>
                    </div>
                    
                
                    <div class="pb-4">
                        @if($news->image)
                          <img src="{{asset('assets/news/'.$news->image)}}" height="100">
                        @endif
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>
                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt</label>
                        <input type="text" class="form-control" id="alt" name="alt"  value="{{$news->alt}}"/>
                    </div>
                    
                    <div class="pb-4">
                        @if($news->image)
                        <img src="{{asset('assets/news/'.$news->image_detail)}}" height="100">
                        @endif
                        <label for="image_detail" class="form-label">Image Detail</label>
                        <input type="file" class="form-control" id="image_detail" name="image_detail" />
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
