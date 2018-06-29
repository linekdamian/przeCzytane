<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PHPUnit\Framework\Constraint\IsFalse;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function getUser($id)
    {
        return User::find($id);
    }

    protected function getUsers()
    {
        return User::all();
    }

    public function index()
    {
        $users = $this->getUsers();
        return view('user.users', compact('users'));
    }

    public function about($id)
    {
        $user = $this->getUser($id);

        if ($user == null) {
            abort(404);
        } else {
            return view('user.about', compact('user'));
        }
    }

    public function activity($id)
    {
        $user = $this->getUser($id);

        $books = $user->books()->orderBy('pivot_updated_at', 'desc')->get();
        return view('user.activity', compact(['user', 'books']));
    }

    public function ratings($id)
    {
        $user = $this->getUser($id);
        return view('user.ratings', compact('user'));
    }

    public function toRead($id)
    {
        $user = $this->getUser($id);
        return view('user.to-read', compact('user'));
    }

    public function friends($id)
    {
        $friendo = DB::table('users')
            ->join('friends', function ($join) {
                $join->on('name', '=', 'friends.nameFirst')
                    ->orOn('name', '=', 'friends.nameSecond');
            })
            ->where('nameFirst', $id)
            ->orWhere('nameSecond', $id)->get();

        $user = $this->getUser($id);
        return view('user.friends', compact(['user', 'friendo']));
    }
}
