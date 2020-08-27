<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; // for auth facade
use App\Post;
class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {

            // ** STEPS **
            // 1.validate the form data

            $this->validate($request,[
                'email'=> 'required',
                'password'=>'required'

            ]);

            // 2.attempt to log the admin-user in, using auth facade
                // we need to specife the specific guards in this case it is admin guard,
                //  otherwise it will consider the default guard in (config/auth)
                // Auth::guard('admin')->attempt($credentials, $remember)
                // replacing ceredentials from the 'form'
                // we are requesting the true or false value from the checkbox ($request->remember)
                // we dosen't need to hash the raw password as, the attempt function do that automatically
                // intended() -> laravel function to set the intended redirects
                // back() -> larvel function return to the previous page

            if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember)){
            // 3.if successfull, then redirect to their intended location
                return redirect()->intended(route('admin.dashboard'));
            }
            // 4.if unsuccessfull, then redirect to login form with the form login data
            return redirect()->back()->withInput($request->only('email', 'remember'));

    }
}
