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
                            <form class="login-form" method="post" action="{{route('customer.item.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>عنوان <span class="required">*</span></label>
                                            <input type="text" id="title" name="title" value="{{old('title') ?? ''}}" @error('title') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('title') <p class="text-danger">{{ $errors->first('title') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>شماره پرونده <span class="required">*</span></label>
                                            <input type="text" id="case_number" name="case_number" value="{{old('case_number') ?? ''}}"  @error('case_number') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('case_number') <p class="text-danger">{{ $errors->first('case_number') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>نوع قرارداد <span class="required">*</span></label>
                                            <select  name="contract" class="contract"  @error('contract') style="border:solid 1px red" @enderror>
                                                <option value="">انتخاب کنید</option>
                                                <option value="sale" >برای فروش</option>
                                                <option value="rent" >برای اجاره</option>
                                            </select>
                                        </div>
                                        @error('contract') <p class="text-danger">{{ $errors->first('contract') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>نوع ملک <span class="required">*</span></label>
                                            <select  name="type" class="type" @error('type') style="border:solid 1px red" @enderror>
                                                <option value="">انتخاب کنید</option>
                                                <option value="apartment" >آپارتمان</option>
                                                <option value="villa" >ویلا</option>
                                                <option value="land" >زمین</option>
                                                <option value="ُhouse" >منزل شخصی</option>
                                                <option value="garden" >باغ</option>
                                                <option value="shop" >مغازه</option>
                                                <option value="office" >اداری</option>
                                                <option value="prebuy" >پیش خرید</option>
                                            </select>
                                        </div>
                                        @error('type') <p class="text-danger">{{ $errors->first('type') }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 price">
                                        <div class="item-wrap">
                                            <label>قیمت فروش <span class="required">*</span></label>
                                            <input type="text" id="price" name="price" value="{{old('price') ?? ''}}" @error('price') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('price') <p class="text-danger">{{ $errors->first('price') }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 rent">
                                        <div class="item-wrap">
                                            <label>اجاره بها <span class="required"></span></label>
                                            <input type="text" id="rent" name="rent" value="{{old('rent') ?? ''}}"  @error('rent') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('rent') <p class="text-danger">{{ $errors->first('rent') }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 rent">
                                        <div class="item-wrap">
                                            <label>ودیعه <span class="required"></span></label>
                                            <input type="text" id="deposit" name="deposit" value="{{old('deposit') ?? ''}}" @error('deposit') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('deposit') <p class="text-danger">{{ $errors->first('deposit') }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>شماره تماس فروشنده <span class="required">*</span></label>
                                            <input type="text" id="seller_phone" name="seller_phone" value="{{old('seller_phone') ?? ''}}" @error('seller_phone') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('seller_phone') <p class="text-danger">{{ $errors->first('seller_phone') }}</p> @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-wrap">
                                            <label>ادرس ملک <span class="required">*</span></label>
                                            <input type="text" id="address" name="private_address" value="{{old('private_address') ?? ''}}" @error('private_address') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('private_address') <p class="text-danger">{{ $errors->first('private_address') }}</p> @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item-wrap" style="display: flex">
                                            <label class="mt-2 mr-4">وضعیت <span class="required">*</span></label>
                                            <input type="radio" id="status" name="status" value="active" checked   @error('status') style="border:solid 1px red" @enderror>
                                            <label class="m-2">فعال </label>
                                            <input type="radio" id="status" name="status" value="in-active" @error('status') style="border:solid 1px red" @enderror>
                                            <label class="m-2">غیرفعال </label>
                                        </div>
                                        @error('status') <p class="text-danger">{{ $errors->first('status') }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 land">
                                        <div class="item-wrap">
                                            <label>مساحت <span class="required"></span></label>
                                            <input type="text" id="area" name="area" value="{{old('area') ?? ''}}" @error('area') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('area') <p class="text-danger">{{ $errors->first('area') }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 other">
                                        <div class="item-wrap">
                                            <label>مساحت بنا <span class="required"></span></label>
                                            <input type="text" id="house_area" name="house_area" value="{{old('house_area') ?? ''}}"  @error('house_area') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('house_area') <p class="text-danger">{{ $errors->first('house_area') }}</p> @enderror
                                    </div>
                                    <div class="col-md-4 other">
                                        <div class="item-wrap">
                                            <label>مساحت حیاط <span class="required"></span></label>
                                            <input type="text" id="yard_area" name="yard_area" value="{{old('yard_area') ?? ''}}" @error('yard_area') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('yard_area') <p class="text-danger">{{ $errors->first('yard_area') }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row other">
                                    <div class="col-md-3 ">
                                        <div class="item-wrap">
                                            <label>سال ساخت <span class="required">*</span></label>
                                            <input type="text" id="built_at" name="built_at" value="{{old('built_at') ?? ''}}" @error('built_at') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('built_at') <p class="text-danger">{{ $errors->first('built_at') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>تعداد اتاق <span class="required"></span></label>
                                            <input type="number" id="room" name="room" value="{{old('room') ?? ''}}"  @error('room') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('room') <p class="text-danger">{{ $errors->first('room') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>تعداد پارکینگ <span class="required"></span></label>
                                            <input type="number" id="parking" name="parking" value="{{old('parking') ?? ''}}"  @error('parking') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('parking') <p class="text-danger">{{ $errors->first('parking') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>تعداد سرویس بهداشتی <span class="required"></span></label>
                                            <input type="number" id="bathroom" name="bathroom" value="{{old('bathroom') ?? ''}}" @error('bathroom') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('bathroom') <p class="text-danger">{{ $errors->first('bathroom') }}</p> @enderror
                                    </div>

                                </div>

                                <div class="row other">
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>اپلود ویدئو <span class="required"></span></label>
                                            <input type="file" id="video" name="video" value="{{old('video') ?? ''}}" @error('video') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('video') <p class="text-danger">{{ $errors->first('video') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>اپلود تصاویر <span class="required"></span></label>
                                            <input type="file" id="images" name="images[]" value="{{old('images') ?? ''}}" multiple  @error('images') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('images') <p class="text-danger">{{ $errors->first('images') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>اپلود نقشه <span class="required"></span></label>
                                            <input type="file" id="map" name="map" value="{{old('map') ?? ''}}" multiple   @error('map') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('map') <p class="text-danger">{{ $errors->first('map') }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row other">
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="elevator" name="elevator" value="1" @error('elevator') style="border:solid 1px red" @enderror>
                                            <label class="m-2">آسانسور</label>
                                        </div>
                                        @error('elevator') <p class="text-danger">{{ $errors->first('elevator') }}</p> @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="warehouse" name="warehouse" value="1"   @error('warehouse') style="border:solid 1px red" @enderror>
                                            <label class="m-2">انباری </label>
                                        </div>
                                        @error('warehouse') <p class="text-danger">{{ $errors->first('warehouse') }}</p> @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="is_vip" name="is_vip" value="1"  @error('is_vip') style="border:solid 1px red" @enderror>
                                            <label class="m-2">ویژه</label>
                                        </div>
                                        @error('is_vip') <p class="text-danger">{{ $errors->first('is_vip') }}</p> @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="pool" name="pool" value="1"   @error('pool') style="border:solid 1px red" @enderror>
                                            <label class="m-2">استخر</label>
                                        </div>
                                        @error('pool') <p class="text-danger">{{ $errors->first('pool') }}</p> @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="laundry" name="laundry" value="1"  @error('laundry') style="border:solid 1px red" @enderror>
                                            <label class="m-2">رخت شویی</label>
                                        </div>
                                        @error('laundry') <p class="text-danger">{{ $errors->first('laundry') }}</p> @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <div style="display: flex" class="item-wrap">
                                            <input type="checkbox" id="underground" name="underground" value="1"   @error('underground') style="border:solid 1px red" @enderror>
                                            <label class="m-2">زیرزمین </label>
                                        </div>
                                        @error('underground') <p class="text-danger">{{ $errors->first('underground') }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row other">


                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="item-wrap">
                                            <label>توضیحات تکمیلی <span class="required"></span></label>
                                            <textarea id="description" name="description" cols="30" rows="5" @error('description') style="border:solid 1px red" @enderror>{{old('description') ?? ''}}</textarea>
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
@section('script')
    <script>

        $(document).ready(function() {
            $("select.contract").change(function() {
                let selectedItem = $(this).children("option:selected").val();

                if (selectedItem == 'rent'){
                    $('.price').hide();
                    $('.rent').show();

                }
                else if (selectedItem == 'sale'){
                    $('.rent').hide();
                    $('.price').show();

                }
            });



            $("select.type").change(function() {
                let selectedItem2 = $(this).children("option:selected").val();

                if (selectedItem2 == 'land'){
                    $('.other').hide();
                    $('.land').show();

                }
                else if (selectedItem2 == 'garden'){
                    $('.other').hide();
                    $('.land').show();

                }
                else if (selectedItem2 != 'garden' || selectedItem2 != 'land'){
                    $('.other').show();
                    $('.land').hide();

                }
            });

        });

    </script>
@endsection
