<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\PageHeader;
use App\Helpers\FileUploadHelper;
class CatalogController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

     //
     public function index(){
        $page = PageHeader::find(1);
      
        $catalogs = Catalog::all();
        return view('cms.catalogs.index',compact('catalogs','page'));
    }


    public function storePage(Request $request)
    {
        $catalog = PageHeader::find(1);

        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'assets/catalog/');
        if($image_header!=null)
            $catalog->update(['image_header' => $image_header]);

            PageHeader::find(1)->update([
                'title_header' => $request->title_header,
                'subtitle_header' => $request->subtitle_header,
            ]);
         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('cms_catalog');
    }

  
    public function create()
    {
        return view('cms.catalogs.create');
    }


    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/catalog/');
        $pdf = FileUploadHelper::uploadFile($request, 'pdf', 'assets/catalog/');
    
        Catalog::create([
            'title' => $request->title,
            'image' => $image,
            'alt' => $request->alt,
            'pdf' => $pdf,
           
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_catalog');
    }

    public function edit($id)
    {
        $catalog = Catalog::find($id);
        return view('cms.catalogs.edit', compact('catalog'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $catalog = Catalog::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/catalog/');
        if($image!=null)
            $catalog->update(['image' => $image]);

        $pdf = FileUploadHelper::uploadFile($request, 'pdf', 'assets/catalog/');
        if($pdf!=null)
            $catalog->update(['pdf' => $pdf]);

        $catalog->update([
            'title' => $request->title,
            'alt' => $request->alt,
          
            
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_catalog');
    }

    public function delete($id)
    {
        Catalog::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_catalog');
    }
}
