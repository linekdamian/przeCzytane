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

    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->select('*')->get();
        return view('user.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created friendship in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(Request $request)
    {
        $id = $request[trim('userName')];
        DB::table('friends')->insert(['nameFirst' => Auth::user()->name, 'nameSecond' => $id]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function about($id)
    {
        $friendship = 0;
        $user = $this->findUser($id);

        if(Auth::user()->name != $id)
        {
            $ffriend = DB::table('friends')
                ->select('*')
                ->where('nameSecond', Auth::user()->name)
                ->orWhere('nameFirst', Auth::user()->name)
                ->get();

            if ($ffriend->contains('nameFirst',$id))
            {
                $friendship = 0;
            }
            elseif ($ffriend->contains('nameSecond',$id))
            {
                $friendship = 0;
            }
            else{
                $friendship = 1;
            }
        }


        if ($user == null)
        {
            abort(404);
        }
        else{
            return view('user.about', compact(['user', 'friendship']));
        }
    }

    public function activity($id)
    {
        $user = $this->findUser($id);
        return view('user.activity', compact('user'));
    }

    public function ratings($id)
    {
        $user = $this->findUser($id);
        return view('user.ratings', compact('user'));
    }

    public function toRead($id){
        $user = $this->findUser($id);
        return view('user.toRead', compact('user'));
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

        $user = $this->findUser($id);
        return view('user.friends', compact(['user', 'friendo']));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Protected Function Section
     *
     */
    protected function findUser($id)
    {
        $user = DB::table('users')->where('name', $id)->first();

        if ($user == null)
        {
            abort(404);
        }
        else{
            return $user;
        }
    }
}
