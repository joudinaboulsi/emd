<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketingSLiderText2;
class MarketingSLiderText2Controller extends Controller
{
    //

       //
       public function index(){
  
        $sliders = MarketingSLiderText2::all();
        return view('cms.marketing_sliders_section_two.index',compact('sliders'));
    }  
    
    public function create()
    {
        return view('cms.marketing_sliders_section_two.create');
    }
    
    
    public function store(Request $request)
    {
      
        MarketingSLiderText2::create([
    
            'text' => $request->text,
            'text2' => $request->text2,
       ]);
    
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_text');
    }
    
    public function edit($id)
    {
        $slider = MarketingSLiderText2::find($id);
        return view('cms.marketing_sliders_section_two.edit', compact('slider'));
    }
    
    public function update(Request $request, $id)
    {

        MarketingSLiderText2::find($id)->update([
            'text' => $request->text,
            'text2' => $request->text2,
        ]);
    
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_text');
    }
    
    public function delete($id)
    {
        MarketingSLiderText2::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_text');
    }
}
