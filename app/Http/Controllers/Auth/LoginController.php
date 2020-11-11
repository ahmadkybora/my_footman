<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Models\UserLog;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating Users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect Users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if($request->ajax())
        {
            $request->validate([
                'username' => ['required', 'string'],
                'password' => ['required', 'string',],
            ]);
            if(Auth::attempt([
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ]))
            {
                $user=Auth::user()->id();
                $userLog=new UserLog();
                $userLog->username=$user->username;
                if($userLog->save())
                {
                    $response = [
                        'state' => true,
                        'message' => 'شما با موفقیت وارد شدید',
                        'data' => null,
                    ];
                    return response()->json($response,200);
                }
                else
                {
                    $response = [
                        'state' => false,
                        'message' => 'خطا در اتصال به سرور',
                        'data' => null,
                    ];
                    return response()->json($response,503);
                }
            }
            else{
                $response = [
                    'state' => false,
                    'message' => 'نام کاربری و یا رمز عبور اشتباه است',
                    'data' => null,
                ];
                return response()->json($response,401);
            }
        }
        else
            {
            $response = [
                'state' => false,
                'message' => 'باید ایحکسی صدا زده شود',
                'data' => null,
            ];
            return response()->json($response,403);
        }
    }
}
