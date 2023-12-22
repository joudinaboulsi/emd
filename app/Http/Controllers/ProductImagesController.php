<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductImages;
use App\Product;
use App\Helpers\FileUploadHelper;

class ProductImagesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    
        $sliders = ProductImages::with('product')->where('product_id',$id)->get();

       return view('cms.images_product.index',compact('sliders','id'));
    }

    public function create($id)
    {
        $product= Product::find($id);
        return view('cms.images_product.create',['id' => $id]);
    }

     
    public function store(Request $request,$id)
    {
    
        $product_id = Product::find($id);
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/products/');
        ProductImages::create([
            'alt_image' => $request->alt_image,
            'image' => $image,
            'product_id'=> $product_id->id,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_product_images',['id' => $id]);
    }

    public function edit($id,$image_id)
    {
        $product = Product::find($id);
        $slider= ProductImages::where('id',$image_id)->first();
    
        return view('cms.images_product.edit',compact('image_id','slider','product'));
    }


    public function update(Request $request,$id, $product_id)
    {
    //    dd($id);
        $product = Product::find($product_id);
        $slider= ProductImages::find($id);
        
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/products/');
        if($image!=null)
        $slider->update(['image' => $image]);

        $slider->update([
            'alt_image' => $request->alt_image,
            'product_id'=> $product->id,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_product_images',['id' => $product_id]);
    }

    public function delete($product_id,$id)
    {
        // dd($id);
        ProductImages::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_product_images',['id' => $product_id]);
    }
}
