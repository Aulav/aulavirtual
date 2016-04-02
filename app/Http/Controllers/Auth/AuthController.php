<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Session;
use Mail;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     *
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     *
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }*/
    public function postRegister(Request $request)
    {
        $this->validate(
            $request, [
                'name'      => 'required|min:3|max:16|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i', 
                'email'     => 'required|email|max:255|unique:users,email',
                'password'  => 'required|min:6|max:18|confirmed'
            ]

            );
       
        $user = new User($request->all());
        $data['name'] = $user->name = $request->name;
        $data['email'] = $user->email =$request->email;
        $data['password'] = $user->password = $request->password;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(100);
        $data['confirm_token'] = $user->confirm_token = str_random(100);
        $user->roles_id = 1;
        $user->administrador_id =1;
        $user->save();

        Mail::send('emails.register', ['data' => $data], function($email) use($data){
            $email->subject('Confirma tu cuenta porfavor para poder acceder al sistema');
            $email->to($data['email'], $data['name']);
        });
        
        Session::flash('message', $user->name . ' Hemos enviado un enlace de confirmación a su cuenta de correo electronico');
        return redirect('/auth/register');
            }

    public function confirmRegister($email, $confirm_token)
    {
        $user = new User;
        $the_user = $user->select()->where('email', '=', $email)->where('confirm_token', '=', 
            $confirm_token)->get();
       
 
        if (count($the_user) > 0) {
            $active = 1;
            $confirm_token = str_random(100);
            $user->where('email', '=', $email)->update(['activo' => $active, 'confirm_token' => $confirm_token]);
              Session::flash('message', 'Felicidades ' .$the_user[0]['name']. ' ya puede iniciar sesión');
              return redirect('/admin/login');
        }

        else
        {
            return redirect('');
        }
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt(
            [
            'email' => $request->email,
            'password' => $request->password,
            'activo' => 0

            ]
            , $request->has('remember')
            ))

             {
            //return redirect()->intended($this->redirectPath());
         return redirect()->intended('/institucion/panel');
           //return redirect('/institucion/panel');
        }
        else{
            $this->validate(
            $request, [
                'email'     => 'required|email',
                'password'  => 'required',

            ]         
        );
        return redirect('auth/login');

        }
    }
    public function getLogin()
    {
        return view('auth.login');
    }
    public function getLogout()
    {
        Auth::logout();
        Auth::flash('message', 'Ha cerrado sesión correctamente');
        return redirect('/auth/login');
    }

}
