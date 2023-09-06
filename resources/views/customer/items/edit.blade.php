@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <div class="section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <div class="wrap-title">
                                <h3 class="title">
                                    <span class="first-word">ثبت</span> ملک جدید
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="my-account-wrap">
                            <form class="login-form" method="post" action="{{route('customer.item.update',$item)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>عنوان <span class="required">*</span></label>
                                            <input type="text" id="title" name="title" value="{{$item->title}}" @error('title') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('title') <p class="text-danger">{{ $errors->first('title') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>شماره پرونده <span class="required">*</span></label>
                                            <input type="text" id="case_number" name="case_number" value="{{$item->case_number}}"  @error('case_number') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('case_number') <p class="text-danger">{{ $errors->first('case_number') }}</p> @enderror

                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>نوع قرارداد <span class="required">*</span></label>
                                            <select  name="contract"  @error('contract') style="border:solid 1px red" @enderror>
                                                <option value="">انتخاب کنید</option>
                                                <option value="sale" {{ $item->contract == 'sale' ? 'selected' : '' }} >برای فروش</option>
                                                <option value="rent"  {{ $item->contract == 'rent' ? 'selected' : '' }}>برای اجاره</option>
                                            </select>
                                        </div>
                                        @error('contract') <p class="text-danger">{{ $errors->first('contract') }}</p> @enderror

                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>نوع ملک <span class="required">*</span></label>
                                            <select  name="type" @error('type') style="border:solid 1px red" @enderror>
                                                <option value="">انتخاب کنید</option>
                                                <option value="apartment" {{ $item->type == 'apartment' ? 'selected' : '' }}>آپارتمان</option>
                                                <option value="villa" {{ $item->type == 'villa' ? 'selected' : '' }}>ویلا</option>
                                                <option value="land" {{ $item->type == 'land' ? 'selected' : '' }}>زمین</option>
                                                <option value="ُhouse" {{ $item->type == 'ُhouse' ? 'selected' : '' }}>منزل شخصی</option>
                                                <option value="garden" {{ $item->type == 'garden' ? 'selected' : '' }}>باغ</option>
                                                <option value="shop" {{ $item->type == 'shop' ? 'selected' : '' }}>مغازه</option>
                                                <option value="office" {{ $item->type == 'office' ? 'selected' : '' }}>اداری</option>
                                                <option value="prebuy" {{ $item->type == 'prebuy' ? 'selected' : '' }}>پیش خرید</option>
                                            </select>
                                        </div>
                                        @error('type') <p class="text-danger">{{ $errors->first('type') }}</p> @enderror

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>قیمت فروش <span class="required">*</span></label>
                                            <input type="text" id="price" name="price" value="{{$item->price}}" @error('price') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('price') <p class="text-danger">{{ $errors->first('price') }}</p> @enderror

                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>اجاره بها <span class="required"></span></label>
                                            <input type="text" id="rent" name="rent" value="{{$item->rent}}" @error('rent') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('rent') <p class="text-danger">{{ $errors->first('rent') }}</p> @enderror

                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>ودیعه <span class="required"></span></label>
                                            <input type="text" id="deposit" name="deposit" value="{{$item->deposit}}" @error('deposit') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('deposit') <p class="text-danger">{{ $errors->first('deposit') }}</p> @enderror

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>شماره تماس فروشنده <span class="required">*</span></label>
                                            <input type="text" id="seller_phone" name="seller_phone" value="{{$item->seller_phone}}"  @error('seller_phone') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('seller_phone') <p class="text-danger">{{ $errors->first('seller_phone') }}</p> @enderror

                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>ادرس ملک <span class="required">*</span></label>
                                            <input type="text" id="address" name="private_address" value="{{$item->private_address}}"  @error('private_address') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('private_address') <p class="text-danger">{{ $errors->first('private_address') }}</p> @enderror

                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-wrap" style="display: flex">
                                            <label class="mt-2 mr-4">وضعیت <span class="required">*</span></label>
                                            <input type="radio" id="status" name="status" value="active" {{ $item->status == 'active' ? 'checked' : '' }} >
                                            <label class="m-2">فعال </label>
                                            <input type="radio" id="status" name="status" value="in-active" {{ $item->status == 'in-active' ? 'checked' : '' }} >
                                            <label class="m-2">غیرفعال </label>
                                        </div>
                                        @error('status') <p class="text-danger">{{ $errors->first('status') }}</p> @enderror

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>مساحت <span class="required"></span></label>
                                            <input type="text" id="area" name="area" value="{{$item->area}}" @error('area') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('area') <p class="text-danger">{{ $errors->first('area') }}</p> @enderror

                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>مساحت بنا <span class="required"></span></label>
                                            <input type="text" id="house_area" name="house_area" value="{{$item->house_area}}" @error('house_area') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('house_area') <p class="text-danger">{{ $errors->first('house_area') }}</p> @enderror

                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>مساحت حیاط <span class="required"></span></label>
                                            <input type="text" id="yard_area" name="yard_area" value="{{$item->yard_area}}" @error('yard_area') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('yard_area') <p class="text-danger">{{ $errors->first('yard_area') }}</p> @enderror

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>سال ساخت <span class="required">*</span></label>
                                            <input type="text" id="built_at" name="built_at" value="{{$item->built_at}}" @error('built_at') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('built_at') <p class="text-danger">{{ $errors->first('built_at') }}</p> @enderror

                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>تعداد اتاق <span class="required"></span></label>
                                            <input type="number" id="room" name="room" value="{{$item->room}}"  @error('room') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('room') <p class="text-danger">{{ $errors->first('room') }}</p> @enderror

                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>تعداد پارکینگ <span class="required"></span></label>
                                            <input type="number" id="parking" name="parking" value="{{$item->parking}}"  @error('parking') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('parking') <p class="text-danger">{{ $errors->first('parking') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>تعداد سرویس بهداشتی <span class="required"></span></label>
                                            <input type="number" id="bathroom" name="bathroom" value="{{$item->bathroom}}" @error('bathroom') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('bathroom') <p class="text-danger">{{ $errors->first('bathroom') }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>اپلود ویدئو <span class="required"></span></label>
                                            <input type="file" id="video" name="video" value="{{$item->video}}" @error('video') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('video') <p class="text-danger">{{ $errors->first('video') }}</p> @enderror

                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>اپلود تصاویر <span class="required"></span></label>
                                            <input type="file" id="images" name="images[]" value="{{$item->images}}" multiple  @error('images') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('images') <p class="text-danger">{{ $errors->first('images') }}</p> @enderror

                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>اپلود نقشه <span class="required"></span></label>
                                            <input type="file" id="map" name="map" value="{{$item->map}}" multiple  @error('map') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('map') <p class="text-danger">{{ $errors->first('map') }}</p> @enderror

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="elevator" name="elevator" value="1" {{ $item->elevator == 1 ? 'checked' : '' }} @error('elevator') style="border:solid 1px red" @enderror>
                                            <label class="m-2">آسانسور</label>
                                        </div>
                                        @error('elevator') <p class="text-danger">{{ $errors->first('elevator') }}</p> @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="warehouse" name="warehouse" value="1" {{ $item->warehouse == 1 ? 'checked' : '' }}>
                                            <label class="m-2">انباری </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="is_vip" name="is_vip" value="1" {{ $item->is_vip == 1 ? 'checked' : '' }}>
                                            <label class="m-2">ویژه</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="pool" name="pool" value="1" {{ $item->pool == 1 ? 'checked' : '' }}>
                                            <label class="m-2">استخر</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="laundry" name="laundry" value="1" {{ $item->laundry == 1 ? 'checked' : '' }}>
                                            <label class="m-2">رخت شویی</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="underground" name="underground" value="1" {{ $item->underground == 1 ? 'checked' : '' }}>
                                            <label class="m-2">زیرزمین </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="item-wrap">
                                            <label>توضیحات تکمیلی <span class="required"></span></label>
                                            <textarea id="description" name="description" cols="30" rows="5" @error('description') style="border:solid 1px red" @enderror>{{$item->description}}</textarea>
                                        </div>
                                        @error('description') <p class="text-danger">{{ $errors->first('description') }}</p> @enderror

                                    </div>
                                </div>
                                <div class="item-wrap form-submit">
                                    <input type="submit" class="btn btn-warning"  value="ثبت">
                                    <a href="{{ \Illuminate\Support\Facades\URL::previous()}}" class="btn btn-primary">لغو</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

