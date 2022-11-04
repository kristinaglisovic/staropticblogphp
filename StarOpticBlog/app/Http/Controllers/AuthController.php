<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends OsnovniController
{
    public function login(){
        return view('front.pages.main.login',$this->data);
    }

    public function registration(){
        return view('front.pages.main.registration',$this->data);
    }

    public function registerUser(Request $request){
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
        $u->role_id=2;
        $res=$u->save();

        if($res){
            $activityLog=[
                'username'=>$u->username,
                'email'=>$u->email,
                'role_name'=>$u->role->name,
                'activity'=>'Registrovan'
            ];
            DB::table('user_activity_logs')->insert($activityLog);

            return redirect(route('register'))->with([
                'success'=>'Uspešno ste se registrovali!',
                //klasa koja boji polja
                "sent"=>"uspesno"
            ]);
        }
        else{
            return redirect(route('register'))->with([
                'fail'=>'Došlo je do problema, molimo pokušajte kasnije.'
            ]);
        }

    }


    public function loginUser(Request $request){


        $request->validate([
            'username'=>'required|min:5|max:30',
            'password'=>'required|min:8|max:20',
        ]);

        $user=User::where('username',"=",$request->username)->first();
        if($user) {
            if(Hash::check($request->password,$user->password)){
                $activityLog=[
                    'username'=>$user->username,
                    'email'=>$user->email,
                    'role_name'=>$user->role->name,
                    'activity'=>'Prijavljen'
                ];

                DB::table('user_activity_logs')->insert($activityLog);

                $request->session()->put('user',$user);
                return redirect(route('home'));
            }
            else{
                return redirect(route('login'))->with([
                    'fail'=>'Uneta lozinka je pogrešna'
                ])->withInput();
            }
        }
        else{
            return redirect(route('login'))->with([
                'fail'=>'Ne postoji korisnik sa unetim imenom i lozinkom'
            ]);
        }
    }


    public function logout(){
        if(Session::has('user')){
            $user=session()->get('user');
            $activityLog=[
                'username'=>$user->username,
                'email'=>$user->email,
                'role_name'=>$user->role->name,
                'activity'=>'Izlogovan'
            ];
            DB::table('user_activity_logs')->insert($activityLog);

            Session::pull('user');
           return redirect(route('login'));
        }
        return redirect(route('login'));
    }


}
