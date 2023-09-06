<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function index()
    {
        $this->authorize('viewAny',Newsletter::class);

        $emails = Newsletter::query()->orderBy('id','desc')->simplePaginate(30);

        return view('customer.newsletters.index',compact('emails'));
    }


    public function store(Request $request)
    {
        $data=$request->only('email');

        $request->validate([
            'email'=>'required|email|unique:newsletters,email',
        ],[
            'email.required'=>'وارد کردن ایمیل الزامی است.',
            'email.email'=>'ایمیل با فرمت معتبر وارد کنید.',
            'email.unique'=>'این ایمیل قبلا ثبت شده است.',

        ]);

        Newsletter::create($data);

        return response([
            'data' => 'successfully added'
        ]);

    }

}
