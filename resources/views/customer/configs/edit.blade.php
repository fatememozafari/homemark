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
                                    <span class="first-word">ویرایش اطلاعات </span> مشاور املاک
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="my-account-wrap">
                            <form class="login-form" method="post" action="{{route('customer.config.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>عنوان <span class="required">*</span></label>
                                            <input type="text" id="name" name="name" value="{{$config->value['name']}}" @error('name') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('name') <p class="text-danger">{{ $errors->first('name') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>شماره مشاور املاک <span class="required">*</span></label>
                                            <input type="text" id="phone_number" name="phone_number" value="{{$config->value['phone_number']}}" @error('phone_number') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('phone_number') <p class="text-danger">{{ $errors->first('phone_number') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>شماره موبایل <span class="required">*</span></label>
                                            <input type="text" id="mobile" name="mobile" value="{{$config->value['mobile']}}" @error('mobile') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('mobile') <p class="text-danger">{{ $errors->first('mobile') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>ادرس مشاور املاک <span class="required">*</span></label>
                                            <input type="text" id="address" name="address" value="{{$config->value['address']}}" @error('address') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('address') <p class="text-danger">{{ $errors->first('address') }}</p> @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>آدرس ایمیل<span class="required">*</span></label>
                                            <input type="text" id="email" name="email" value="{{$config->value['email']}}" @error('email') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('email') <p class="text-danger">{{ $errors->first('email') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>اپلود لوگو <span class="required"></span></label>
                                            <input type="file" id="logo" name="logo" value="{{$config->value['logo']}}" @error('logo') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('logo') <p class="text-danger">{{ $errors->first('logo') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>اپلود تصاویر <span class="required"></span></label>
                                            <input type="file" id="image" name="image" value="{{$config->value['image']}}" @error('image') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('image') <p class="text-danger">{{ $errors->first('image') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>آدرس واتساپ<span class="required"></span></label>
                                            <input type="text" id="whatsapp" name="whatsapp" value="{{$config->value['whatsapp']}}" @error('whatsapp') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('whatsapp') <p class="text-danger">{{ $errors->first('whatsapp') }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>آدرس اینستاگرام<span class="required"></span></label>
                                            <input type="text" id="instagram" name="instagram" value="{{$config->value['instagram']}}"  @error('instagram') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('instagram') <p class="text-danger">{{ $errors->first('instagram') }}</p> @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <div class="item-wrap">
                                            <label>آدرس تلگرام<span class="required"></span></label>
                                            <input type="text" id="telegram" name="telegram" value="{{$config->value['telegram']}}"   @error('telegram') style="border:solid 1px red" @enderror>
                                        </div>
                                        @error('telegram') <p class="text-danger">{{ $errors->first('telegram') }}</p> @enderror
                                    </div>
                                </div>


                                <div class="item-wrap form-submit">
                                    <input type="submit" class="btn btn-warning"  value="ثبت">
                                    <a href="{{ \Illuminate\Support\Facades\URL::previous()}}" class="btn btn-primary">لغو</a>                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

