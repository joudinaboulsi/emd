<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\PageHeader;
use App\Helpers\FileUploadHelper;


class GalleryController extends Controller
{
    public function index(){

        $page = PageHeader::find(2);
        $galleries = Gallery::all();
        return view('cms.galleries.index',compact('galleries','page'));
    }


    public function storePage(Request $request)
    {
        $page = PageHeader::find(2);

        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'assets/gallery/');
        if($image_header!=null)
            $page->update(['image_header' => $image_header]);

            PageHeader::find(2)->update([
                'title_header' => $request->title_header,
                'subtitle_header' => $request->subtitle_header,
            ]);
         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('cms_gallery');
    }

  
    public function create()
    {
        return view('cms.galleries.create');
    }


    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/gallery/');
      
        Gallery::create([
            'title' => $request->title,
            'small_title' => $request->small_title,
            'image' => $image,
            'alt' => $request->alt,
          
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_gallery');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('cms.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {

        $gallery = Gallery::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/gallery/');
        if($image!=null)
            $gallery->update(['image' => $image]);

        $gallery->update([
            'title' => $request->title,
            'small_title' => $request->small_title,
            'alt' => $request->alt,
        
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_gallery');
    }

    public function delete($id)
    {
        Gallery::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_gallery');
    }
}
