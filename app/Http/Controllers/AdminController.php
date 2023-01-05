<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;
use App\Models\User;
// use App\Models\UsersBlocked;
// use App\Models\UsersWarned;
use Validator;
use Session;
use Hash;


class AdminController extends Controller
{
    public function checkArtak(Request $r){
        $messages = [
            'username.required' => 'Պարտադիր լրացրեք բոլոր դաշտերը։',
            'username.exists' => 'Username-ը սխալ է։',
            'password.required' => 'Պարտադիր լրացրեք բոլոր դաշտերը։',
        ];
        $validator = Validator::make($r->all(), [
            'username' => 'required|exists:administrators,username',
            'password' => 'required',
        ], $messages);

        // $username=Hash::make($r->username);
        $admin = Administrator::where('username', $r->username)->first();

        $validator->after(function ($validator) use ($admin, $r){
            if($admin){
                if(!Hash::check($r->password, $admin->password)){
                    $validator->errors()->add('password', 'Գաղտնաբառը սխալ է։');
                }
            }
        });

        if($validator->fails()){
            return redirect('/change-admin')
                    ->withInput()
                    ->withErrors($validator);
        }

        Session::put([
            'admin_id' => $admin->id,
            'uesrname' => $admin->username,
        ]);
        
        return redirect('/show-active-users');
    }

    public function showActiveUsers(){
        $allUsers=User::get();
        
        return view('admin/active_users', [
            'allUsers' => $allUsers,
        ]);
    }

    public function showWarnedUsers(){
        $users=User::get();

        return view('admin/warned_users', [
            'users' => $users,
        ]);
    }

    public function showBlockedUsers(){
        $users=User::get();

        return view('admin/blocked_users', [
            'users' => $users,
        ]);
    }

    public function showInactiveUsers(){
        $users=User::get();

        return view('admin/inactive_users', [
            'users' => $users,
        ]);
    }

    public function warnUser(Request $r){
        $user=User::find($r->id);
        $user->warned = 1;
        $user->save();
    }

    public function blockUser(Request $r){
        $user=User::find($r->id);
        $user->blocked = 1;
        $user->save();
    }

    public function deleteUser(Request $r){
        $user=User::find($r->id);
        $user->delete();
    }

    public function logOutAdmin(Request $r){
        $r->session()->flush();
        return redirect('/');
    }
}