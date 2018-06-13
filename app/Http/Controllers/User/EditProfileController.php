<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function getUser()
    {
        return Auth::user();
    }

    public function index($id)
    {
        $user = $this->getUser();
        if (Auth::user()->name == $id){
            return view('user.edit-profile', compact('user'));
        }else return redirect()->back();
    }

    public function edit(Request $request)
    {
        $user = $this->getUser();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->description = $request->description;
        $user->save();

        return redirect()->back();
    }

    public function delete()
    {
        $user = Auth::user();
        Auth::logout();

        if ($user->delete()) {
            return redirect('home')->with('msg', 'Twoje konto zostało usunięte');
        }
        return redirect('home')->with('status', 'Wystąpił problem');
    }
}
