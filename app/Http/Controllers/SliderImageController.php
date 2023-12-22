<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderImage;
use App\Helpers\FileUploadHelper;

class SliderImageController extends Controller
{
    //
    public function index(){
    
        $sliders = SliderImage::all();
        return view('cms.sliders.index',compact('sliders'));
    }  

    public function create()
    {
        return view('cms.sliders.create');
    }


    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/slider/');
        $logo = FileUploadHelper::uploadFile($request, 'logo', 'assets/slider/');
    
        SliderImage::create([

            'image' => $image,
            'logo' => $logo,
            'alt' => $request->alt,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'link_url' => $request->link_url,
    ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_slider_image');
    }

    public function edit($id)
    {
        $slider = SliderImage::find($id);
        return view('cms.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
    
        $slider = SliderImage::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/slider/');
        if($image!=null)
            $slider->update(['image' => $image]);
        $logo = FileUploadHelper::uploadFile($request, 'logo', 'assets/slider/');
        if($logo!=null)
            $slider->update(['logo' => $logo]);


        $slider->update([
            'alt' => $request->alt,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'link_url' => $request->link_url,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_slider_image');
    }

    public function delete($id)
    {
        SliderImage::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_slider_image');
    }
}
