<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Helpers\FileUploadHelper;
class ClientController extends Controller
{
   //
    public function index(){
    
        $clients = Client::all();
        return view('cms.clients.index',compact('clients'));
    }  

    public function create()
    {
        return view('cms.clients.create');
    }


    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/client/');
    
        Client::create([

            'image' => $image,
            'alt' => $request->alt,
    ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_clients');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('cms.clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
    
        $client = Client::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/client/');
        if($image!=null)
            $client->update(['image' => $image]);


        $client->update([
        
            'alt' => $request->alt,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('cms_clients');
    }

    public function delete($id)
    {
        Client::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('cms_clients');
    }
}
