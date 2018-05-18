<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    protected function findUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            $user = User::where('email', $id)->first();
        }
        return $user;
    }

    protected function deleteUser(User $user)
    {
        if ($user->delete()) {
            return true;
        } else return false;
    }

    protected function addRoles(User $user)
    {
        if ($user->roles_id == 2) {
            $user->roles_id = 1;
            $user->save();
            return true;
        } else return false;
    }

    protected function saveNotRequired(User $user, $roles_id, $description)
    {
//        $user->roles_id = $roles_id;
        $user->description = $description;
        $user->save();
    }

    protected function saveEmail(User $user, $email)
    {
        $user->email = $email;
        $user->save();
    }

    protected function saveName(User $user, $name)
    {
        $user->name = $name;
        $user->save();
    }

    public function index()
    {
        return view('admin.user-actions.home');
    }

    public function delete(Request $request)
    {
        $user = $this->findUser($request->username);
        if (!$user) {
            return Redirect::back()->with('danger_message', 'Nie ma takiego użytkownika');
        } elseif ($user->roles_id == 1) {
            return Redirect::back()->with('bad_message', 'Nie możesz usunąć konta admina');
        } elseif ($this->deleteUser($user)) {
            return Redirect::back()->with('message', 'Użytkownik został usunięty');
        } else {
            return Redirect::back()->with('danger_message', 'Użytkownik NIE został usunięty');
        }
    }

    public function updateRoles(Request $request)
    {
        $user = $this->findUser($request->username);
        if (!$user) {
            return Redirect::back()->with('danger_message', 'Nie ma takiego użytkownika');
        } elseif ($this->addRoles($user)) {
            return Redirect::back()->with('message', 'Użytkownik został adminem');
        } else return Redirect::back()->with('bad_message', 'Użytkownik był już adminem');
    }

    public function editUser(Request $request)
    {
        $user = $this->findUser($request->username);
        if (!$user) {
            return Redirect::back()->with('danger_message', 'Nie ma takiego użytkownika');
        } elseif ($user->roles_id == 1) {
            return Redirect::back()->with('danger_message', 'Nie możesz edytować konta admina');
        } else return view('admin.user-actions.edit', compact('user'));
    }

    public function updateUser(Request $request)
    {
        $user = $this->findUser($request->realname);

        if ($user->name == $request->name && $user->email == $request->email){
            $this->validate(request(),[
                'roles_id' => 'required']);
            $this->saveNotRequired($user, $request->roles_id, $request->description);
            return Redirect::back()
                ->with('message', 'Konto zostało zaaktualizowane');
        }elseif($user->name == $request->name && $user->email != $request->email){
            $this->validate(request(),[
                'email' => 'required|string|email|max:255|unique:users',
                'roles_id' => 'required']);
            $this->saveNotRequired($user, $request->roles_id, $request->description);
            $this->saveEmail($user, $request->email);
            return Redirect::back()
                ->with('message', 'Konto zostało zaaktualizowane');
        }elseif($user->name != $request->name && $user->email == $request->email){
            $this->validate(request(),[
                'name' => 'required|string|max:255|unique:users',
                'roles_id' => 'required']);
            $this->saveNotRequired($user, $request->roles_id, $request->description);
            $this->saveName($user, $request->name);
            return Redirect::action('Admin\UsersController@index')
                ->with('message', 'Konto zostało zaaktualizowane');
        }elseif($user->name != $request->name && $user->email != $request->email){
            $this->validate(request(),[
                'name' => 'required|string|max:255|unique:users',
                'email' => 'required|string|email|max:255|unique:users',
                'roles_id' => 'required']);
            $this->saveNotRequired($user, $request->roles_id, $request->description);
            $this->saveEmail($user, $request->email);
            $this->saveName($user, $request->name);
            Redirect::back()
                ->with('message', 'Konto zostało zaaktualizowane');
        }else return Redirect::action('Admin\UsersController@editUser')
            ->with('danger_message', 'Nieznany błąd');
    }
}
