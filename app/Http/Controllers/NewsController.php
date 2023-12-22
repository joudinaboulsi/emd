<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Helpers\FileUploadHelper;

class NewsController extends Controller
{
    //

    public function index(){
    
        $news = News::all();
        return view('cms.news.index',compact('news'));
    }  

    public function create()
    {
        return view('cms.news.create');
    }


    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/news/');
        $image_detail = FileUploadHelper::uploadFile($request, 'image_detail', 'assets/news/');
    
        News::create([

            'image' => $image,
            'image_detail' => $image_detail,
            'alt' => $request->alt,
            'title' => $request->title,
            'link' => $request->link,
            'text' => $request->text,
            
    ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_news');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('cms.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
    
        $news = News::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/news/');
        if($image!=null)
            $news->update(['image' => $image]);

        $image_detail = FileUploadHelper::uploadFile($request, 'image_detail', 'assets/news/');
        if($image_detail!=null)
            $news->update(['image_detail' => $image_detail]);


        $news->update([
        
            'alt' => $request->alt,
            'title' => $request->title,
            'link' => $request->link,
            'text' => $request->text,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_news');
    }

    public function delete($id)
    {
        News::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_news');
    }
}
