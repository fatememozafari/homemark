@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <div class="section mt-7 mb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-agent">
                            <div class="row agent-detail">
                                <div class="thumbnail col-md-5">
                                      <img src="{{asset('/customer-assets/images/team/team_detail.png')}}" alt="">
                                </div>
                                <div class="info-agent col-md-7">
                                    <div class="box-content">
                                        <h3 class="title">
                                            <a href="" title="Johnny Sanders">{{auth()->user()->name}} </a>
                                        </h3>
                                        <div class="box-info">
                                            <div class="item-info">
                                                <span class="position">کاربر </span>
                                            </div>
                                            <ul class="item-info">
                                                <li class="agent-mobile">
                                                    <a class="ltr_text" href="tel:0" target="_top">{{auth()->user()->mobile}}</a>
                                                </li>
                                                <li class="agent-email">
                                                    <a href="mailto:johnnysanders@landmark.com" target="_top">{{auth()->user()->email}}</a>
                                                </li>
                                                <li class="agent-address">{{auth()->user()->address}}</li>
                                            </ul>
{{--                                            <div class="agent-about">--}}

{{--                                            </div>--}}
                                            <div class="agent-action">
                                                <div class="col-sm-6 contact-now">
                                                    <a  href="#popup_03" data-init="magnificPopup" title="Johnny Sanders" class="button">ویرایش اطلاعات </a>
                                                </div>
                                                <div class="col-sm-6 agent-social text-right text-center-sm">
                                                    <a class="fa fa-facebook" href="#"></a>
                                                    <a class="fa fa-twitter" href="#"></a>
                                                    <a class="fa fa-google" href="#"></a>
                                                    <a class="fa fa-pinterest" href="#"></a>
                                                </div>
                                            </div>

                                            <!-- popup-content mfp-with-anim mfp-hide -->
                                            <div class="popup-content box-login mfp-with-anim mfp-hide" id="popup_03">
                                                <h4 class="title">ویرایش اطلاعات</h4>
                                                <form class="login-member-container" action="{{route('customer.user.update',auth()->user())}}" method="post">
                                                    @csrf
                                                    <div class="login-member-wrap">
                                                        <div class="register-member-left">
                                                            <div class="item-wrap">
                                                                <label>نام کاربری</label>
                                                                <input type="text" id="user_name_login" name="name" value="{{auth()->user()->name}}" class="required">
                                                            </div>
                                                            <div class="item-wrap">
                                                                <label>موبایل</label>
                                                                <input type="text" id="user_name_login" name="mobile" value="{{auth()->user()->mobile}}" class="required">
                                                            </div>
                                                            <div class="item-wrap">
                                                                <label>رمز عبور</label>
                                                                <input type="password" id="password_login" name="password" value="" class="required">
                                                            </div>
                                                            <div class="item-wrap">
                                                                <label>ایمیل</label>
                                                                <input type="text" id="password_login" name="email" value="{{auth()->user()->email}}" class="required">
                                                            </div>
                                                            <div class="item-wrap">
                                                                <label>آدرس</label>
                                                                <input type="text" id="password_login" name="address" value="{{auth()->user()->address}}" class="required">
                                                            </div>
                                                            <div class="item-wrap">
                                                                <label>توضیحات</label>
                                                                <input type="text" id="password_login" name="description" value="{{auth()->user()->description}}" class="required">
                                                            </div>
                                                        </div>
                                                        <div class="login-member-action">
                                                            <button type="submit" class="button">
                                                                ذخیره <i class="fa-li fa fa-spinner fa-spin hide"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End / popup-content mfp-with-anim mfp-hide -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
