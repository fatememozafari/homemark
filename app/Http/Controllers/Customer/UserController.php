<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $this->authorize('viewAny', User::class);

        $users = User::query()->where('user_type', 'customer')->orderBy('id', 'desc')->select(['id','name', 'mobile', 'created_at'])->simplePaginate(30);

        return view('customer.users.index', compact('users'));
    }


    public function show()
    {
        $user = auth()->user();

        return view('customer.users.profile', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $credentials = $request->except('_token');

        $request->validate([
            'name' => ['string'],
            'mobile' => ['min:11','numeric'],
            'password' => ['min:6'],
            'email' => ['email'],
            'address' => ['string'],
            'description' => ['string'],
        ],[
            'mobile.numeric' => 'مقدار عددی وارد کنید.',
            'mobile.min' => 'شماره تماس میبایست حداقل 11 کاراکتر باشد.',
            'password.min' => 'پسورد میبایست حداقل 6 کاراکتر باشد.',
            'email.email' =>'ایمیل با فرمت معتبر وارد کنید.',
        ]);

        if ($request->has('password')) {
            $credentials['password'] = Hash::make($request->password)  ?? auth()->user()->password;
        }

       $a= $user->update($credentials);

        if ($a){
            return redirect()->back()->with('success','پروفایل شما با موفقیت ویرایش شد.');

        }
        return redirect()->back()->with('error',' با خطا مواجه شد.');
    }

}
