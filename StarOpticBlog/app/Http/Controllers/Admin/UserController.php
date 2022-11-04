<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registeredUsers()
    {
        $users=User::where('role_id',2)->with('role')->get();
        $admins=User::where('role_id',1)->with('role')->get();
        return view('admin.pages.registeredUsers',[
            'pageName'=>"Registrovani korisnici",
            'users'=>$users,
            'admins'=>$admins,
            'roles'=>Role::all()
        ]);
    }


    public function destroyUser(User $user){
        $activityLog=[
            'username'=>$user->username,
            'email'=>$user->email,
            'role_name'=>$user->role->name,
            'activity'=>'Obrisan'
        ];
        DB::table('user_activity_logs')->insert($activityLog);
        $user->delete();
        return redirect(route('admin.users.registered'))->with([
            'msg'=>'Korisnik je uspešno obrisan',
        ]);
    }



    public function truncateForgottenPass(){
        DB::table('password_resets')->truncate();
        return redirect(route('admin.users.forgotten'))->with([
            'msg'=>'Logovi su uspešno obrisani',
        ]);
    }

    public function createAdmin(){
        return view('admin.pages.admin-create',[
            'pageName'=>"Kreiranje admina",
        ]);
    }

    public function registerAdmin(Request $request){
        $request->validate([
            'firstname'=>'required|min:2|max:20|regex:/^([A-ZŽŠĐČĆa-zžšđčć][a-zšđčćžA-ZŽČĆŠĐ]*)$/',
            'lastname'=>'required|min:2|max:20|regex:/^([A-ZŽŠĐČĆa-zžšđčć][a-zšđčćžA-ZŽČĆŠĐ]*)$/',
            'username'=>'required|unique:users|min:5|max:30',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:20|confirmed',
            'password_confirmation'=>'required|min:8|max:20'
        ]);

        $u=new User();
        $u->first_name=$request->firstname;
        $u->last_name=$request->lastname;
        $u->username=$request->username;
        $u->email=$request->email;
        $u->password=Hash::make($request->password);
        $u->role_id=1;
        $res=$u->save();

        if($res){
            $activityLog=[
                'username'=>$u->username,
                'email'=>$u->email,
                'role_name'=>$u->role->name,
                'activity'=>'Registrovan'
            ];
            DB::table('user_activity_logs')->insert($activityLog);
            return redirect(route('admin.create'))->with([
                'success'=>'Uspešno ste kreirali admina!',
                //klasa koja boji polja
                "sent"=>"uspesno"
            ]);
        }
        else{
            return redirect(route('admin.create'))->with([
                'fail'=>'Došlo je do problema, molimo pokušajte kasnije.'
            ]);
        }
    }

    function roleUpdate(Request $request){
        $id=$request->userId;
        $role=$request->roleUser;
        $user=User::where('id',$id)->first();
        $user->role_id=$role;

        $user->save();
        $activityLog=[
            'username'=>$user->username,
            'email'=>$user->email,
            'role_name'=>$user->role->name,
            'activity'=>'Izmenjena uloga'
        ];
        DB::table('user_activity_logs')->insert($activityLog);
        return redirect(route('admin.users.registered'))->with([
            'msg'=>"Uloga za ".$user->first_name." ".$user->last_name." je uspešno promenjena"
        ]);
    }

}
