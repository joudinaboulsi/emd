<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Component;
use App\Helpers\FileUploadHelper;
use App\PageHeader;

class ProductController extends Controller
{
    //

    public function index(){
        $products = Product::all();
        return view('cms.products.index',compact('products'));
    }

    public function create(){
        $components = Component::all();
        return view('cms.products.create',compact('components'));
    }

    public function store(Request $request)
    {
        // dd($request);
      
        $image_header  = FileUploadHelper::uploadFile($request, 'image_header', 'assets/product/');
        $image  = FileUploadHelper::uploadFile($request, 'image', 'assets/product/');
        $og_image = FileUploadHelper::uploadFile($request, 'og_image', 'seo/');
       
       $product= Product::create([

            'title_header' => $request->title_header,
            'subtitle_header' => $request->subtitle_header,
            'title_details' => $request->title_details,
            'name_product' => $request->name_product,
            'title' => $request->title,
            'desc1' => $request->desc1,
            'tag1' => $request->tag1,
            'tag2' => $request->tag2,
            'tag3' => $request->tag3,
            'tag4' => $request->tag4,
            'category1' => $request->category1,
            'category2' => $request->category2,
            'category3' => $request->category3,
            'category4' => $request->category4,
            'small_title_components' => $request->small_title_components,
            'desc2' => $request->desc2,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_description' => $request->meta_description,
            'og_image' => $og_image,
            'image_header' => $image_header,
            'image' => $image,
        
        ]);
     
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_products');
    }

    public function edit($id)
    {
       
        $product = Product::find($id);
        // dd($product);
        return view('cms.products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
       
        
        $product = Product::find($id);

       
        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'assets/product/');
            if($image_header!=null)
                $product->update(['image_header' => $image_header]);


        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/product/');
        if($image!=null)
            $product->update(['image' => $image]);

        $og_image = FileUploadHelper::uploadFile($request, 'og_image', 'seo/');
        if($og_image!=null)
            $product->update(['og_image' => $og_image]);



        $product->update([
            'title_header' => $request->title_header,
            'subtitle_header' => $request->subtitle_header,
            'title_details' => $request->title_details,
            'name_product' => $request->name_product,
            'title' => $request->title,
            'desc1' => $request->desc1,
            'tag1' => $request->tag1,
            'tag2' => $request->tag2,
            'tag3' => $request->tag3,
            'tag4' => $request->tag4,
            'category1' => $request->category1,
            'category2' => $request->category2,
            'category3' => $request->category3,
            'category4' => $request->category4,
            'small_title_components' => $request->small_title_components,
            'desc2' => $request->desc2,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'alt' => $request->alt,
           
        ]);

        
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_products');
    }

    public function delete($id)
    {
        Product::where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_products');
    }


    public function info(){
        $product = PageHeader::find(6);
      
        return view('cms.product_page',compact('product'));
    }

    public function storePageProduct(Request $request)
    {
        $product = PageHeader::find(6);

        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'assets/product/');
        if($image_header!=null)
            $product->update(['image_header' => $image_header]);

            PageHeader::find(6)->update([
                'title_header' => $request->title_header,
                'subtitle_header' => $request->subtitle_header,
                'text_product' => $request->text_product,
                'related' => $request->related,
            ]);
         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('cms_product_info');
    }

}
