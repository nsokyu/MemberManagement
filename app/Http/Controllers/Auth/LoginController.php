<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
      return 'name';
    }

    // public function login(Request $request)
    // {
    //         //ログインの認証
    //         if (USER::where('name', $request->name)->exists()) {
    //             $user = USER::where('name', $request->name)->first();
    //             if (Hash::check($request->password, $user->password)) {
    //                 $request->session()->put('user_id', $user);
    //                 // return route('main');
    //                 return redirect()->route('search', $user);
    //             } else {
    //                 $errormessage = "メールアドレスまたはパスワードに誤りがあります。";
    //                 return back()->with('errormessage', $errormessage);
    //             }
    //         } else {
    //             $errormessage = "メールアドレスまたはパスワードに誤りがあります。";
    //             return back()->with('errormessage', $errormessage);
    //         }
    // }
}
