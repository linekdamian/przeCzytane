<?php

namespace App\Http\Controllers\User;

use App\Rules\Uniquemail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
//use Validator;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return ($user->name === Auth::user()->name)? view('user.settings', compact('user'))
            : redirect()->back();
    }

    public function edit(Request $request)
    {
//        $user = $this->getUser();
//        $user->firstname = $request->firstname;
//        $user->lastname = $request->lastname;
//        $user->description = $request->description;
//        $user->save();

//        return redirect()->back();
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email,'.$user->email.',email|min:7|max:255',
            'name' => 'required|string|unique:users,name,'.$user->name.',name|min:5|max:255',
            'firstname' => 'max:255',
            'lastname' => 'max:255',
            'description' => 'max:65534',
        ])->validate();

        $user->update($request->all());
        return redirect(route('user.settings.index', $user))->with('success', 'Everything has been saved!');
    }

    public function delete()
    {
        $user = Auth::user();
        Auth::logout();

        if ($user->delete()) {
            return redirect('home')->with('status', 'Your account has been deleted');
        }
        return redirect(route('user.settings.index', $user))->with('success', 'Wystąpił problem');
    }

    public function changepassword(Request $request, User $user)
    {
        if (Hash::check($request->existedpassword, $user->getAuthPassword())) {
            Validator::make($request->all(), [
                'newpassword' => 'required|string|min:6|max:100|confirmed',
            ])->validate();

                $user->password = $request->newpassword;
                $user->save();
            return redirect(route('user.settings.index', $user))->with('success', 'Everything has been saved!');
        }else return redirect(route('user.settings.index', $user))
                ->withErrors('existedpassword', 'Invalid password!')->withInput($request->existedpassword);
    }
}
