<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'roles_id'
    ];

    public $primaryKey = 'name';
    public $incrementing = false;

    public static function checkFriendship($id){

        if(Auth::user()->name != $id){
            $ffriend = DB::table('friends')
                ->select('*')
                ->where('nameSecond', Auth::user()->name)
                ->orWhere('nameFirst', Auth::user()->name)
                ->get();

            if ($ffriend->contains('nameFirst',$id)){
                $friendship = 0;
            }
            elseif ($ffriend->contains('nameSecond',$id)){
                $friendship = 0;
            }
            else{
                $friendship = 1;
            }

            return $friendship;
        }
    }
}
