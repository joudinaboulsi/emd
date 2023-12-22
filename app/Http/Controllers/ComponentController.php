<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Component;
use App\Product;

class ComponentController extends Controller
{
    //
    public function index($id)
    {
        
    
        $components = Component::with('product')->where('product_id',$id)->get();
    
       
        return view('cms.components.index',compact('components','id'));
    }  

    public function create($id)
    {
        $product= Product::find($id);
        return view('cms.components.create',compact('product'));
    }


    public function store(Request $request,$id)
    {
    
        $product_id = Product::find($id);

        Component::create([
            'name' => $request->name,
            'product_id'=> $product_id->id,
       ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_components',['id' => $id]);
    }

    public function edit($id,$product_id)
    {
        $product = Product::find($id);
        $component= Component::where('id',$product_id)->first();
    

        return view('cms.components.edit', compact('component','product','product_id'));
    }

    public function update(Request $request, $id,$product_id)
    {
       
  
        Component::where('id',$id)->update([
        
            'name' => $request->name,
            'product_id'=> $product_id,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_components',compact('product_id'));
    }

    public function delete($product_id,$id)
    {
        // dd($id);
        Component::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_components',['id' => $product_id]);
    }
}
