<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\ItemImage;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

    public function edit()
    {
        $this->authorize('update', Config::class);

        $config = Config::query()->where('key','real-estate-setting')->first();

        return view('customer.configs.edit',compact('config'));
    }


    public function update(Request $request)
    {

        $this->authorize('update', Config::class);

        $request->validate([
            'name'=>'string',
            'address'=>'string',
            'phone_number'=>'min:8|numeric',
            'mobile'=>'min:11',
            'telegram'=>'string',
            'whatsapp'=>'string',
            'instagram'=>'string',
            'email'=>'email',
            'logo'=>'dimensions:max_width=195,max_height=60',
            'image'=>'dimensions:max_width=1519,max_height=740'
        ],[
            'phone_number.min'=>'شماره تماس با ید حداقل 8 کاراکتر باشد',
            'phone_number.max'=>'شماره تماس باید حداکثر 11 کاراکتر باشد.',
            'phone_number.numeric'=>'مقادیر عددی وارد کنید.',
            'email.email'=>'ایمیل با فرمت معتبر وارد کنید.',
            'logo.max_width'=>'حداکثر عرض مناسب برای لوگو 195 پیکسل میباشد.',
            'logo.max_height'=>'حداکثر طول مناسب برای لوگو 60 پیکسل میباشد.',
            'image.max_width'=>'حداکثر عرض مناسب برای لوگو 1519 پیکسل میباشد.',
            'image.max_height'=>'حداکثر طول مناسب برای لوگو 740 پیکسل میباشد.',
        ]);
        $inputs= [
            'name'=> $request->name ? $request->name : 'مشاور املاک',
            'address'=> $request->address ? $request->address : 'اراک',
            'phone_number'=> $request->phone_number ? $request->phone_number : '08633664455',
            'mobile'=> $request->mobile ? $request->mobile : '09186420000',
            'email'=> $request->email ? $request->email : 'info@amlak.com',
            'telegram'=> $request->telegram ? $request->telegram : 'www.telegram.com',
            'whatsapp'=> $request->whatsapp ? $request->whatsapp : 'www.whatsapp.com',
            'instagram'=> $request->instagram ? $request->instagram : 'www.instagram.com',

        ];


        if ($request->file('logo')) {
            $inputs['logo'] = $this->uploadImage($request->file('logo'), 'uploads/config-image');
        }else{
            $inputs['logo'] = '/customer-assets/images/logo.png';
        }

        if ($request->file('image')) {
            $inputs['image'] = $this->uploadImage($request->file('image'), 'uploads/config-image');
        }else{
            $inputs['image'] = '/customer-assets/images/background/bg_1.jpg';
        }

        $data['key'] = 'real-estate-setting';
        $data['value'] = json_encode($inputs);


        $configSetting= Config::query()->where('key','real-estate-setting')->update($data);


        if ($configSetting){
            return redirect()->route('customer.home')->with('success','اطلاعات با موفقیت ویرایش شد.');
        }
        return back()->with('error','با خطا مواجه شد.');




    }
}
