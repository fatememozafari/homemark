<?php

namespace App\Http\Controllers\Customer;

use App\Filters\ItemFilter;
use App\Filters\RentItemFilter;
use App\Filters\SaleItemFilter;
use App\Http\Controllers\Controller;
use App\Models\Bookmark;
use App\Models\Item;
use App\Models\ItemImage;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::where('status','active')->orderBy('id','DESC')->simplePaginate(20);

        return view('customer.items.index',compact('items'));
    }

    public function removedItem()
    {
        $items = Item::where('status','in-active')->orderBy('id','DESC')->simplePaginate(20);

        return view('customer.items.deleted-item',compact('items'));
    }


    public function forSale()
    {
        $items = Item::filter(new SaleItemFilter())->where('status','active')->where('contract','sale')->orderBy('id','DESC')->paginate(20);

        return view('customer.items.sale-item',compact('items'));
    }


    public function forRent()
    {
        $items = Item::filter(new RentItemFilter())->where('status','active')->where('contract','rent')->orderBy('id','DESC')->paginate(20);

        return view('customer.items.rent-item',compact('items'));
    }


    public function create()
    {
        $this->authorize('create' , Item::class);

        return view('customer.items.create');
    }


    public function store(Request $request)
    {
        $this->authorize('create', Item::class);

        $request->validate([
            'title'=>'required',
            'seller_phone'=>'required|size:11',
            'private_address'=>'required',
            'type'=>'required',
            'contract'=>'required',
            'price'=>'nullable|numeric',
            'deposit'=>'nullable|numeric',
            'rent'=>'nullable|numeric',
            'avatar'=>'nullable|image|max:256',
            'video'=>'nullable|video|max:1000',
            'map'=>'nullable|image|max:256',
            'built_at'=>'required',
            'case_number'=>'required',

        ],[
            'title.required'=>'وارد کردن عنوان الزامی است.',
            'seller_phone.required'=>'وارد کردن شماره تماس فروشنده الزامی است.',
            'seller_phone.size'=>'شماره تماس باید 11 کاراکتر باشد',
            'private_address.required'=>'وارد کردن ادرس ملک الزامی است.',
            'type.required'=>'وارد کردن نوع ملک الزامی است.',
            'contract.required'=>'وارد کردن نوع قرارداد الزامی است.',
            'price.numeric'=>'مقدار عددی وارد کنید.',
            'deposit.numeric'=>'مقدار عددی وارد کنید.',
            'rent.numeric'=>'مقدار عددی وارد کنید.',
            'avatar.max'=>'بیشترین حجم مجاز برای تصویر 256 مگابایت است.',
            'video.max'=>'بیشترین حجم مجاز برای تصویر 1000 مگابایت است.',
            'map.max'=>'بیشترین حجم مجاز برای تصویر 256 مگابایت است.',
            'built_at.required'=>'وارد کردن سال ساخت الزامی است.',
            'case_number.required'=>'وارد کردن شماره پرونده الزامی است.',
        ]);

        $data =$request->except('_token');

        $data['user_id']= auth()->id();

        if ($request->file('video')) {
            $data['video'] = $this->uploadImage($request->file('video'), 'uploads/item-video');
        }

        if ($request->file('map')) {
            $data['map'] = $this->uploadImage($request->file('map'), 'uploads/item-map');
        }

        $item= Item::create($data);

        if ($request->file('images')) {

            foreach ($request->images as $image)
            {
                $url= $this->uploadImage($image, 'uploads/item-image');
                $img['item_id']=$item->id;
                $img['url']= $url;
                ItemImage::create($img);
            }

        }

        if ($item){
            return redirect()->route('customer.item.index')->with('success','ملک جدید با موفقیت ثبت شد.');

        }
        return redirect()->back()->with('error','با خطا مواجه شد.');
    }


    public function show(Item $item)
    {
        return view('customer.items.show',compact('item'));
    }


    public function edit(Request $request,Item $item)
    {
        return view('customer.items.edit',compact('item'));
    }


    public function update(Request $request,Item $item)
    {
        $this->authorize('create', Item::class);

        $request->validate([
            'seller_phone'=>'size:11',
            'price'=>'nullable|numeric',
            'deposit'=>'nullable|numeric',
            'rent'=>'nullable|numeric',
            'avatar'=>'nullable|image|max:256',
            'video'=>'nullable|video|max:1000',
            'map'=>'nullable|image|max:256',

        ],[
            'seller_phone.size'=>'شماره تماس باید 11 کاراکتر باشد',
            'price.numeric'=>'مقدار عددی وارد کنید.',
            'deposit.numeric'=>'مقدار عددی وارد کنید.',
            'rent.numeric'=>'مقدار عددی وارد کنید.',
            'avatar.max'=>'بیشترین حجم مجاز برای تصویر 256 مگابایت است.',
            'video.max'=>'بیشترین حجم مجاز برای تصویر 1000 مگابایت است.',
            'map.max'=>'بیشترین حجم مجاز برای تصویر 256 مگابایت است.',
        ]);

        $data =$request->except('_token');

        $data['user_id']= auth()->id();

        $item->update($data);

        if ($request->file('images')) {

            if ( $item->images->count() > 0 ) {
                foreach ( $item->images as $image){
                    $image->delete();
                }
            }

            foreach ($request->images as $image)
            {
                $url= $this->uploadImage($image, 'uploads/item-image');
                $img['item_id']=$item->id;
                $img['url']= $url;
                ItemImage::create($img);
            }

        }

        if ($item){
            return redirect()->route('customer.item.index')->with('success','ملک با موفقیت ویرایش شد.');

        }
        return redirect()->back()->with('error','با خطا مواجه شد.');
    }


    public function destroy($id)
    {
        $this->authorize('delete', Item::class);

        $item= Item::find($id);
        $item->update([
            'status'=> "in-active",
            'deleted_at'=> now(),
        ]);

        return response([
            'data'=>'delete successfully',
        ]);
    }

    public function restore($id)
    {
        $this->authorize('delete', Item::class);

        $item= Item::find($id);
        $item->update([
            'status'=> "active",
            'deleted_at'=> null,
        ]);

        return response([
            'data'=>'delete successfully',
        ]);
    }
}

