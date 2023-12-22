<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketingSLiderText;
class MarketingSLiderTextController extends Controller
{
    //
    public function index(){
  
        $sliders = MarketingSLiderText::all();
        return view('cms.marketing_sliders.index',compact('sliders'));
    }  
    
    public function create()
    {
        return view('cms.marketing_sliders.create');
    }
    
    
    public function store(Request $request)
    {
      
        MarketingSLiderText::create([
    
            'text' => $request->text,
            'text2' => $request->text2,
       ]);
    
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_marketing_text');
    }
    
    public function edit($id)
    {
        $slider = MarketingSLiderText::find($id);
        return view('cms.marketing_sliders.edit', compact('slider'));
    }
    
    public function update(Request $request, $id)
    {

        MarketingSLiderText::find($id)->update([
            'text' => $request->text,
            'text2' => $request->text2,
        ]);
    
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_marketing_text');
    }
    
    public function delete($id)
    {
        MarketingSLiderText::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_marketing_text');
    }
}
