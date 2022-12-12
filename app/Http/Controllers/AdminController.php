<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;
use Validator;
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
        
        return view('admin/admin_home');
    }
}
