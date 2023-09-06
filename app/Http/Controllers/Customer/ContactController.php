<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $this->authorize('viewAny',Contact::class);

        $messages = Contact::query()->orderBy('id','desc')->simplePaginate(30);

        return view('customer.contact-us.index',compact('messages'));
    }


    public function create()
    {
        return view('customer.single-pages.contact-us');
    }


    public function store(Request $request)
    {
        $data=$request->only(['name','mobile','message']);

        $request->validate([
            'name'=>'required',
            'mobile'=>'required|min:11|numeric',
            'message'=>'required|min:5',
        ],[
            'name.required'=>'وارد کردن نام الزامی است.',
            'mobile.required'=>'وارد کردن شماره تماس الزامی است.',
            'mobile.min'=>'شماره تماس میبایست 11 کاراکتر باشد.',
            'mobile.numeric'=>'مقدار عددی وارد کنید.',
            'message.required'=>'وارد کردن متن پیام الزامی است.',
            'message.min'=>'حداقل کاراکتر ورودی 5 حرف است.',
        ]);

        $data['user_id']=auth()->id();

        $a=Contact::create($data);

        if ($a){
            return redirect()->back()->with('success','پیام با موفقیت ارسال شد.');
        }
        return redirect()->back()->with('error','ارسال پیام با خطا مواجه شد.');
    }

}
