<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComponentTwo;
use App\Product;
use App\Helpers\FileUploadHelper;

class ComponentTwoController extends Controller
{
    //
    public function index($id)
    {
    
        $components = ComponentTwo::with('product')->where('product_id',$id)->get();
    
       
        return view('cms.components_two.index',compact('components','id'));
    }  

    public function create($id)
    {
        $product= Product::find($id);
        return view('cms.components_two.create',compact('product'));
    }


    public function store(Request $request,$id)
    {
    
        $product_id = Product::find($id);
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/product/');
        ComponentTwo::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $image,
            'alt' => $request->alt,
            'product_id'=> $product_id->id,
       ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_components_two',['id' => $id]);
    }

    public function edit($id,$product_id)
    {
        $product = Product::find($id);
        $component= ComponentTwo::where('id',$product_id)->first();
    
        return view('cms.components_two.edit', compact('component','product','product_id'));
    }

    public function update(Request $request, $id,$product_id)
    {   $component = ComponentTwo::find($id);
    
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/product/');
        if($image!=null)
            $component->update(['image' => $image]);

     
        $component->update([
           'title' => $request->title,
            'text' => $request->text,
            'image' => $image,
            'alt' => $request->alt,
            'product_id'=> $product_id,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_components_two',compact('product_id'));
    }

    public function delete($product_id,$id)
    {
        // dd($id);
        ComponentTwo::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_components_two',['id' => $product_id]);
    }
}
