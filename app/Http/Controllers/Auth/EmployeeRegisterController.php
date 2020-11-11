<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\EmployeeRequest;
use App\Providers\RouteServiceProvider;
use App\Http\Models\Employee;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Panel\Auth\AuthRequest;

class EmployeeRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new Users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect Users after registration.
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
        $this->middleware('guest');
    }

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * @param EmployeeRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(AuthRequest $request)
    {
        if ($request->ajax())
        {
            $employee = new Employee($request->all());
            $employee->first_name = $request->input('first_name');
            $employee->last_name = $request->input('last_name');
            $employee->username = $request->input('username');
            $employee->email = $request->input('email');
            $employee->mobile = $request->input('mobile');
            $employee->home_phone = $request->input('home_phone');
            $employee->mobile = $request->input('mobile');
            $employee->sex = $request->input('sex');
            $employee->about_me = $request->input('about_me');
            $employee->address_home = $request->input('address_home');
            $employee->password = Hash::make($request->input('password'));
            if ($employee->save())
            {
                $response = [
                    'status' => true,
                    'data' => null,
                    'message' => 'کاربر با موفقیت ثبت شد'
                ];
                return response()->json($response, 201);
            }
            else
                {
                $response = [
                    'status' => false,
                    'data' => "",
                    'message' => 'باید ایجکسی صدا زده شود'
                ];
                return response()->json($response, 404);
            }
        }
        else
            {
            $response = [
                'status' => false,
                'data' => "",
                'message' => 'باید ایجکسی صدا زده شود'
            ];
            return response()->json($response, 403);
        }
    }
}
