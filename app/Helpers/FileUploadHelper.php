<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class FileUploadHelper
{
    public static function uploadFile(Request $request, $fieldName, $destination)
    {
        if ($request->hasFile($fieldName)) {
            $photo = $request->file($fieldName);
            $imageName = time() . $photo->getClientOriginalName();
            $photo->move($destination, $imageName);
            return $imageName;
        }
        return null;
    }
}
