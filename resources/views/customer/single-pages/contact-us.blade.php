@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <div class="section mt-7 mb-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-information">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <h3 class="title">در ارتباط باشید</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی</p>
                                    <div class="wrap-info">
                                        <div class="info-item">
                                            <span class="info-icon"><i class="fa fa-map-marker"></i></span>
                                            <p class="info-text">{{setting()->value['address'] ?? ''}}</p>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-icon"><i class="fa fa-phone"></i></span>
                                            <p class="info-text ltr_text">{{setting()->value['phone_number'] ?? ''}}</p>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-icon"><i class="fa fa-envelope"></i></span>
                                            <p class="info-text">{{setting()->value['email'] ?? ''}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <h3 class="title">ارسال پیام</h3>
                                    <form class="contact-form" action="{{route('customer.contact.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-item">
                                                    <input type="text" name="name" value="" size="40" placeholder="نام" @error('name') style="border:solid 1px red" @enderror>
                                                </div>
                                                @error('name') <p class="text-danger">{{ $errors->first('name') }}</p> @enderror

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-item">
                                                    <input type="text" name="mobile" value="" size="40" placeholder="موبایل" @error('mobile') style="border:solid 1px red" @enderror>
                                                </div>
                                                @error('mobile') <p class="text-danger">{{ $errors->first('mobile') }}</p> @enderror

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-item form-textarea">
                                                    <textarea name="message" cols="40" rows="10" placeholder="دیدگاه شما ..." @error('message') style="border:solid 1px red" @enderror></textarea>
                                                </div>
                                                @error('message') <p class="text-danger">{{ $errors->first('message') }}</p> @enderror

                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="button">ارسال پیام</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
