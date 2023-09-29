<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::guest())
            return view('admin.auth.login');

        return redirect('admin');
    }

    public function login(Request $request)
    {
        if (Auth::guard('web')->check())
            return redirect()->to('admin');

        $data = $request->only(['email', 'password']);

        $validateUser = Validator::make($data,
        [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validateUser->fails())
            return redirect()->intended('login.page');

        if(Auth::guard('web')->attempt($data))
        {
            $request->session()->regenerate();
            $request->session()->save();
            return redirect()->intended('admin');
        }

        return redirect()->intended('admin');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('web')->check())
        {
            Auth::logout();
        }

        return redirect(route('login.page'));
    }
}
