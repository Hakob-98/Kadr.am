<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Session;
use Cookie;
use Hash;
use Mail;

class UserController extends Controller
{
    public function home(){
        if(Cookie::has('id')){
            Session::set('id', Cookie::get('id'));
            Session::set('email', Cookie::get('email'));
        }
        $userId = Session::get('id')??0;
        return view('home');
    }

    public function addUser(RegistrationRequest $r){
        // Создание задачи...
        $user = new User;
        $user->category_user = $r->catUser;
        $user->first_name = $r->firstName;
        $user->last_name = $r->lastName;
        $user->email = $r->email;
        $user->password = Hash::make($r->password);
        $user->phone_number = $r->phoneNumber;
        $user->work_experience = $r->workExp;
        $user->gender = $r->gender;
        $user->country = $r->countries;
        $user->city = $r->cities;
        $user->save();

        $data = array(
            'id' => $user->id,
            'name' => $r->firstName,
            'hash' => md5($r->email),
        );

        Mail::send('activate_account', $data, function ($message) use ($r) {
            $message->to($r->email, 'support@kadr.am');
            $message->subject('Kadr.am գրանցում');
            $message->from('kadr@support.am', 'support@kadr.am');
        });
        return redirect('/registor-end');
    }

    public function activateUser($id, $hash){
        $user = User::find($id);
        if(!$user){
            return view('system_error');
        }
        if($hash !== md5($user->email)){
            return view('system_error');
        }
        $user->active = 1;
        $user->save();
        return redirect('/login');
    }

    public function doLogin(Request $r){
        $messages = [
            'email.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
            'email.email' => 'Խնդրում ենք լրացնել գործող էլ․ հասցե։',
            'email.exists' => 'Էլ․ հասցեն սխալ է։',
            'password.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
        ];
        $validator = Validator::make($r->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], $messages);

        $user = User::where('email', $r->email)->first();

        $validator->after(function ($validator) use ($user, $r) {
            if($user){
                if(!Hash::check($r->password, $user->password)){
                    $validator->errors()->add('password', 'Գաղտնաբառը սխալ է։');
                } elseif(!$user->active){
                    $validator->errors()->add('active', 'Ձեր էջը ակտիվացված չէ, խնդրում ենք ստուգել Ձեր էլ․ հասցեն։');
                }
            }
        });

        if($validator->fails()){
            return redirect('/login')
                    ->withErrors($validator)
                    ->withInput();
        }

        Session::put([
            'id' => $user->id,
            'email' => $user->email,
        ]);
        if(isset($r->check)){
            Cookie::forever('id', $user->id);
            Cookie::forever('email', $user->email);
        }

        return redirect('/');
    }

    public function logOut(Request $r) {
        $r->session()->flush();
        $cookie = Cookie::forget('id');
        return redirect('/')->withCookie($cookie);
    }

    public function changeEmail(Request $r) {
        $messages = [
            'email.required'    => "Պարտադիր լրացնել դաշտը",
            'email.email'    => "Տվյալ էլ փոստի հասցեն սխալ է:",
            'email.exists' => "Տվյալ էլ. փոստի հասցեով գրանցված անձ հայտնաբերված չէ: Խնդրում ենք Ձեզ գրանցվել:",
        ];
        $validator = Validator::make($r->all(), [
            'email' => 'required|email|exists:users,email',
        ], $messages);

        if($validator->fails()){
            return redirect('/restore-password')
                    ->withInput()
                    ->withErrors($validator);
        }

        $code = rand(10000,99999);

        $user = User::where('email', $r->email)->first();
        $user->one_time_code=$code;
        $user->save();

        $data = [
            'code' => $code,
        ];

        Mail::send('change_password', $data, function ($message) use ($r) {
            $message->to($r->email, 'support@kadr.am');
            $message->subject('Հաստատեք ձեր էլփոստի հասցեն');
            $message->from('kadr@support.am', 'support@kadr.am');
        });
        Session::put('user_id', $user->id);
        return redirect('/one-time-code');
    }

    public function checkTheClient(Request $r){
        $messages = [
            'code.required' => 'Պարտադիր լրացրեք դաշտը:',
            'code.numeric' => 'Պարտադիր լրացրեք միայն թվանշաններ:',
            'code.exists' => 'Գաղտնաբառը սխալ է:',
        ];
        $validator = Validator::make($r->all(), [
            'code' => 'required|numeric|exists:users,one_time_code',
        ], $messages);

        if($validator->fails()){
            return redirect('/one-time-code')
                    ->withInput()
                    ->withErrors($validator);
        }

        return redirect('/show-password-form');
    }

    public function newPassword(Request $r){
        $messages = [
            'password.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
            'password.min' => 'Գաղնաբառը պետք է կազմված լինի առնվազն 8 նիշից։',
            'password.max' => 'Գաղնաբառը չպետք է գերազանցի 20 նիշը։',
            'password.regex' =>'Գաղտնաբառը պետք է լինի լատինատառ և պարտադիր պարունակի փոքրատառ և մեծատառ տառեր, թվանշաններ և հատուկ սիմվոլներ:',
            'comfPassword.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
            'comfPassword.same' => 'Գաղնաբառները չեն համընկնում',
        ];
        $validator = Validator::make($r->all(), [
            'password' => [
                'required',
                'min:8',
                'max:20',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'
            ],
            'comfPassword' => [
                'required',
                'same:password'
            ],
        ], $messages);

        if($validator->fails()){
            return redirect('/show-password-form')
                    ->withInput()
                    ->withErrors($validator);
        }

        $user = User::find(Session::get('user_id'));
        $user->password = Hash::make($r->password);
        $user->save();
        return view('password_changed');
    }
}


