<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marketing;
use App\PageHeader;
use App\Helpers\FileUploadHelper;


class MarketingController extends Controller
{
      //
    public function index(){
        $page = PageHeader::find(4);
      
        $marketing = Marketing::all();
        return view('cms.marketing.index',compact('marketing','page'));
    }


    public function storePage(Request $request)
    {
        $marketing = PageHeader::find(4);

        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'assets/marketing/');
        if($image_header!=null)
            $marketing->update(['image_header' => $image_header]);
        $image_marketing = FileUploadHelper::uploadFile($request, 'image_marketing', 'assets/marketing/');
        if($image_marketing!=null)
            $marketing->update(['image_marketing' => $image_marketing]);

            PageHeader::find(4)->update([
                'title_header' => $request->title_header,
                'subtitle_header' => $request->subtitle_header,
                'link_video' => $request->link_video,
            ]);
         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('cms_marketing');
    }

  
    public function create()
    {
        return view('cms.marketing.create');
    }


    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/marketing/');
        $image2 = FileUploadHelper::uploadFile($request, 'image2', 'assets/marketing/');
     
        Marketing::create([
            'title' => $request->title,
            'image' => $image,
            'alt' => $request->alt,
            'item' => $request->item,
            'item_value' => $request->item_value,
            'price_value' => $request->price_value,
            'price' => $request->price,
            'title_modal' => $request->title_modal,
            'text_modal' => $request->text_modal,
            'alt2' => $request->alt2,
            'image2' => $image2,

        
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_marketing');
    }

    public function edit($id)
    {
        $marketing = Marketing::find($id);
        return view('cms.marketing.edit', compact('marketing'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $marketing = Marketing::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/marketing/');
        if($image!=null)
            $marketing->update(['image' => $image]);
    
        $image2 = FileUploadHelper::uploadFile($request, 'image2', 'assets/marketing/');
        if($image2!=null)
            $marketing->update(['image2' => $image2]);

        $marketing->update([
            'title' => $request->title,
            'alt' => $request->alt,
            'item' => $request->item,
            'item_value' => $request->item_value,
            'price_value' => $request->price_value,
            'price' => $request->price,
            'title_modal' => $request->title_modal,
            'text_modal' => $request->text_modal,
            'alt2' => $request->alt2,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_marketing');
    }

    public function delete($id)
    {
        Marketing::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_marketing');
    }
}
