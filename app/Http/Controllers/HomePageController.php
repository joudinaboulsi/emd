<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;
use App\Helpers\FileUploadHelper;

class HomePageController extends Controller
{
    //

    public function index(){
      
        $home = HomePage::find(1);
        return view('cms.home_page',compact('home'));
    }



    public function store(Request $request)
    {
      
        $home = HomePage::find(1);
        $image_s1 = FileUploadHelper::uploadFile($request, 'image_s1', 'assets/home/');
        if($image_s1!=null)
            $home->update(['image_s1' => $image_s1]);

        $home->update([
            'title_s1' => $request->title_s1,
            'subtitle_s1'=> $request->subtitle_s1,
            'text_s1'=> $request->text_s1,
            'alt_s1'=> $request->alt_s1,
            'image_title'=> $request->image_title,
            'count'=> $request->count,
            'count_title'=> $request->count_title,
            'count2'=> $request->count2,
            'count_title2'=> $request->count_title2,
            'count3'=> $request->count3,
            'count_title3'=> $request->count_title3,
            'count4'=> $request->count4,
            'count_title4'=> $request->count_title4,
            'youtube'=> $request->youtube,
            'link'=> $request->link,
            'link_url'=> $request->link_url,
            'small_title'=> $request->small_title,
            'small_title2'=> $request->small_title2,
            'subtitle_product'=> $request->subtitle_product,
            'title_product'=> $request->title_product,
            'subtitle_news'=> $request->subtitle_news,
            'title_news'=> $request->title_news,
            'title_client'=> $request->title_client,

        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_home_page');
    }

}
