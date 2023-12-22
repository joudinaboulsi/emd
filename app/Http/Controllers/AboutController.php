<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageHeader;
use App\About;
use App\Helpers\FileUploadHelper;
class AboutController extends Controller
{
    //
    public function index(){
        $page = PageHeader::find(5);
      
        $about = About::find(1);
        return view('cms.about',compact('about','page'));
    }


    public function storePage(Request $request)
    {
        $about = PageHeader::find(5);

        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'assets/about/');
        if($image_header!=null)
            $about->update(['image_header' => $image_header]);

            PageHeader::find(5)->update([
                'title_header' => $request->title_header,
                'subtitle_header' => $request->subtitle_header,
            ]);
         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('cms_about');
    }



    public function store(Request $request)
    {
        // dd($request);
        $about = About::find(1);

        $image_s1 = FileUploadHelper::uploadFile($request, 'image_s1', 'assets/about/');
        if($image_s1!=null)
            $about->update(['image_s1' => $image_s1]);


        $icon = FileUploadHelper::uploadFile($request, 'icon', 'assets/about/');
        if($icon!=null)
            $about->update(['icon' => $icon]);
    
        $icon2 = FileUploadHelper::uploadFile($request, 'icon2', 'assets/about/');
        if($icon2!=null)
            $about->update(['icon2' => $icon2]);


        $icon3 = FileUploadHelper::uploadFile($request, 'icon3', 'assets/about/');
        if($icon3!=null)
            $about->update(['icon3' => $icon3]);

        $icon4 = FileUploadHelper::uploadFile($request, 'icon4', 'assets/about/');
        if($icon4!=null)
            $about->update(['icon4' => $icon4]);



        $about->update([
            'title_s1' => $request->title_s1,
            'subtitle_s1' => $request->subtitle_s1,
            'small_title_s1' => $request->small_title_s1,
            'alt_s1' => $request->alt_s1,
            'image_title_s1' => $request->image_title_s1,
            'count' => $request->count,
            'title_count' => $request->title_count,
            'title_s2' => $request->title_s2,
            'subtitle_s2' => $request->subtitle_s2,
            'text_s2' => $request->text_s2,
            'alt'=> $request->alt,
            'alt2'=> $request->alt2,
            'alt3'=> $request->alt3,
            'alt4'=> $request->alt4,
            'p'=> $request->p,
            'p2'=> $request->p2,
            'p3'=> $request->p3,
            'p4'=> $request->p4,
            'title_product'=> $request->title_product,
            'text_product'=> $request->text_product,
            'small_title_product'=> $request->small_title_product,
            'text2_product'=> $request->text2_product,
            'subtitle_s3'=> $request->subtitle_s3,
            'title_s3'=> $request->title_s3,
            'title2_s3'=> $request->title2_s3,
            'title3_s3'=> $request->title3_s3,
            'link_s3'=> $request->link_s3,
            'url_s3'=> $request->url_s3,
            'link2_s3'=> $request->link2_s3,
            
            'link3_s3'=> $request->link3_s3,
            'url3_s3'=> $request->url3_s3,
            'li'=> $request->li,
            'li2'=> $request->li2,
            'li3'=> $request->li3,
            'li4'=> $request->li4,
            'li5'=> $request->li5,
            'li6'=> $request->li6,
            'li7'=> $request->li7,
            'li8'=> $request->li8,
            'li9'=> $request->li9,
            'li10'=> $request->li10,
            'li11'=> $request->li11,
            'li12'=> $request->li12,
            'li13'=> $request->li13,
            'li14'=> $request->li14,
            'li15'=> $request->li15,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_about');
    }

 
}
