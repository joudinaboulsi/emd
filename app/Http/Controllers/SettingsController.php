<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\Helpers\FileUploadHelper;
class SettingsController extends Controller
{
    //

  
    public function index(){
        $settings = Settings::find(1);
        return view('cms.settings',compact('settings'));
    }



    public function store(Request $request)
    {
      
        $settings = Settings::find(1);
        $logo = FileUploadHelper::uploadFile($request, 'logo', 'assets/settings/');
        if($logo!=null)
            $settings->update(['logo' => $logo]);
        $logo2 = FileUploadHelper::uploadFile($request, 'logo2', 'assets/settings/');
        if($logo2!=null)
            $settings->update(['logo2' => $logo2]);
    

        $settings->update([
            'alt' => $request->alt,
            'alt2' => $request->alt2,
            'email'=> $request->email,
            'location'=> $request->location,
            'location_url'=> $request->location_url,
            'phone'=> $request->phone,
            'phone_url'=> $request->phone_url,
            'about'=> $request->about,
            'facebook'=> $request->facebook,
            'instagram'=> $request->instagram,
            'twitter'=> $request->twitter,
            'whatsap'=> $request->whatsap,
        
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_settings');
   }
}
