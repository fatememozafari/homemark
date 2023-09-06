<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function uploadFile(UploadedFile $uploadedFile, $uploadPath)
    {
        $uploadPath = trim($uploadPath , '\/ . ');

        // generate filename
        $filename = \Str::random() . '_' . time() . '.' . $uploadedFile->getClientOriginalExtension();
        $filepath = $uploadPath . '/' . $filename;

        // storage file
        Storage::putFileAs($uploadPath , $uploadedFile , $filename);

        // return filename
        return str_replace('public/' , 'storage/' , $filepath);
    }

    public function uploadImage($uploadedFile, $uploadPath)
    {
        $uploadedFileName = $uploadedFile->getClientOriginalName();
        $fileNameToStore = uniqid().'_'.time().'_'.$uploadedFileName;

        $fileUploaded = $uploadedFile->move(public_path($uploadPath), $fileNameToStore);

        if($fileUploaded){
            return $uploadPath.'/'.$fileNameToStore;
        }
        return null;

    }
}
