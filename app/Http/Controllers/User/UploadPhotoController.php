<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class UploadPhotoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fileToUpload' => 'required|file|max:1024',
        ]);

        $image =$request->fileToUpload;
        $fileName = Auth::user()->name.'.'.request()->fileToUpload->getClientOriginalExtension();
//        @imagecropauto($image, IMG_CROP_DEFAULT);
//        if ($crop !== false) { // in case a new image resource was returned
//            imagedestroy($image);    // we destroy the original image
//            $image = $crop;       // and assign the cropped image to $im
//        }
        Image::make($image->getRealPath())->resize(200,200)->save('images/'.$fileName);

//        $image->move(public_path('/images'),$fileName);
        return back()
            ->with('success','You have successfully upload image.');
    }
}
