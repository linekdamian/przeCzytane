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

        $image = $request->fileToUpload;
        $fileName = Auth::user()->name.'.'.request()->fileToUpload->getClientOriginalExtension();

        Auth::user()->image = 'images/user/'.$fileName;
        Auth::user()->save();

        Image::make($image->getRealPath())->resize(200,200)->save(Auth::user()->image);
        return back()
            ->with('success','You have successfully upload image.');
    }
}
