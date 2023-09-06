<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'mobile' => 'required',
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('customer.home');
        }

        return back()->withErrors([
            'mobile' => 'The provided credentials do not match our records.',
        ])->onlyInput('mobile');
    }


    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'mobile' => ['required','min:11','numeric'],
            'password' => ['required','min:6'],
        ],[
            'name.required' => 'وارد کردن نام الزامی است.',
            'mobile.required' => 'وارد کردن شماره موبایل الزامی است.',
            'mobile.numeric' => 'مقدار عددی وارد کنید.',
            'mobile.min' => 'شماره تماس میبایست حداقل 11 کاراکتر باشد.',
            'password.min' => 'پسورد میبایست حداقل 6 کاراکتر باشد.',
            'password.required' => 'وارد کردن رمز عبور الزامی است.',
        ]);

        $user = User::create($credentials);

        if ($user) {
            Auth::login($user);

        }else{
            return redirect()->back()->with('error', 'با خطا مواجه شد.');
        }


    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('customer.home');
    }
}
