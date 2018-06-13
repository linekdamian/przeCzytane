<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddFriendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function addFriend(Request $request)
    {
        $id = $request[trim('userName')];
        DB::table('friends')->insert(['nameFirst' => Auth::user()->name, 'nameSecond' => $id]);
        return redirect()->back();
    }
}
