<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\PageHeader;
use App\Helpers\FileUploadHelper;
class ContactController extends Controller
{
    //

    public function index(){
        $page = PageHeader::find(3);
        $contact = Contact::find(1);
        return view('cms.contact',compact('contact','page'));
    }

    public function storePage(Request $request)
    {
        // dd($request);
        $contact = PageHeader::find(3);

        $image_header = FileUploadHelper::uploadFile($request, 'image_header', 'assets/contact/');
        if($image_header!=null)
            $contact->update(['image_header' => $image_header]);

            $contact->update([
                'title_header' => $request->title_header,
                'subtitle_header' => $request->subtitle_header,
            ]);
         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('cms_contact');
    }



    public function storeContact(Request $request)
    {
      
        $contact = Contact::find(1);
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/contact/');
        if($image!=null)
            $contact->update(['image' => $image]);


        $contact->update([
            'title' => $request->title,
            'title_main'=> $request->title_main,
            'title_office'=> $request->title_office,
            'email'=> $request->email,
            'location'=> $request->location,
            'location_url'=> $request->location_url,
            'phone'=> $request->phone,
            'phone_url'=> $request->phone_url,
            'phone2'=> $request->phone2,
            'phone2_url'=> $request->phone2_url,
            'phone3'=> $request->phone3,
            'phone3_url'=> $request->phone3_url,
            'title_location'=> $request->title_location,
            'location2'=> $request->location2,
            'location2_url'=> $request->location2_url,
            'phone4'=> $request->phone4,
            'phone4_url'=> $request->phone4_url,
            'phone5'=> $request->phone5,
            'phone5_url'=> $request->phone5_url,
            'map'=> $request->map,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_contact');
    }


}
