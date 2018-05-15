<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddFriendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addFriend(Request $request)
    {
//        DB:table('friends')->insert(['nameFirst' => Auth::user()->name, 'nameSecond' => $id]);
        return redirect()->back();
    }
}
