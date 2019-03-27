<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

// use Illuminate\Foundation\Auth\Session;
use Session;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Notifications\RegisterationNotification;
use App\Model\Domain;




class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    private $domainValidate;

    // Vikram Overiding RegistersUsers Trits Method 14-feb-2019
    // protected function registered(Request $request, $user)
    // {
    //     //
    //     Session::flash('flash_message', "Thanks, {$request->user()->name}! You've been registered and logged in."); // or however else you want to flash your message

    // }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user); // use for auto login AFTER REGISTRATION

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    // Vikram Overiding RegistersUsers Trits Method 14-feb-2019


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/registered-succesfully';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    // Sandip For Domain Validation
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email_domain:'  .$data['email'], 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:6', 'confirmed'],
    //         'g-recaptcha-response'=>'required|recaptcha',
    //     ]);
    // }
    // ./Sandip For Domain Validation


    // Sandip & Vikram For Reactha & Domain Validation Using Closures
    protected function validator(array $data)
    {
        $that=$this;
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email_domain:'  .$data['email'], 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'max:255', 'unique:users',
                function($attribute, $value, $fail) use ($that){
                        if (!($that->compDomain($that->getDomain($value)))) {
                            return $fail($attribute.' with invalid domain.');
                        }
                    }
            ],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            // 'g-recaptcha-response'=>'required|recaptcha',
        ]);
    }
    // ./Sandip & Vikram For Reactha & Domain Validation Using Closures

    private function compDomain($domain)
    {
        return in_array($domain, Domain::select('domain_name')->get()->pluck('domain_name')->toArray());
    }

    private function getDomain($email)
    {
        return substr(strrchr($email, "@"), 1);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         // 'password' => Hash::make($data['password']),
    //         'password' => $data['password'],
    //     ]);
    // }

    // Vikram For Change Passport Storing Rule because of Permission module (It Already Added in User Model)
    protected function create(array $data)
    {
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            // 'password' => Hash::make($data['password']),
            'password' => $data['password'],
        ]);

        $user->notify(new RegisterationNotification('/users/'.$user->id));

        return $user;
    }
    // ./Vikram For Change Passport Storing Rule because of Permission module (It Already Added in User Model)

}
