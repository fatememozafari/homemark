
<header class="header header-desktop">
    <div class="navbar-wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <div class="topmeta">
                            <i class="fa fa-mobile"></i>
                            هم اکنون تماس بگیرید <a href="tel:{{setting()->value['phone_number'] ?? ''}}" class="ltr_text">{{setting()->value['phone_number'] ?? ''}}</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="topmeta topmeta-right pull-right">
                            @guest()
                            <a class="popup-login" href="#popup_01" data-init="magnificPopup" data-options='{"type":"inline","removalDelay":700}' data-effect="mfp-3d-unfold" title="Login / Register">ورود / ثبت نام</a>
                            @endguest
                            @auth()
                                    <a href="{{route('customer.user.profile')}}" class="popup-login">{{auth()->user()->name}}</a>
                                    <a href="{{route('logout')}}" class="popup-login">خروج</a>
                            @endauth
                            <!--  login popup -->
                            <!-- popup-content mfp-with-anim mfp-hide -->
                            <div class="popup-content box-login mfp-with-anim mfp-hide" id="popup_01">
                                <h4 class="title">ورود</h4>
                                <form class="login-member-container" action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="social-login-widget">
                                        <div class="social-login-connect-with">ورود با:</div>
                                        <div class="social-login-provider-list">
                                            <a rel="nofollow" href="javascript:void(0);" title="ورود با فیسبوک" data-provider="Facebook">
                                                <img alt="Facebook" title="ورود با فیسبوک" src="{{asset('/customer-assets/images/icons/facebook.png')}}">
                                            </a>
                                            <a rel="nofollow" href="javascript:void(0);" title="ورود با گوگل" data-provider="Google">
                                                <img alt="Google" title="ورود با گوگل" src="{{asset('/customer-assets/images/icons/google.png')}}">
                                            </a>
                                            <a rel="nofollow" href="javascript:void(0);" title="ورود با توییتر" data-provider="Twitter">
                                                <img alt="Twitter" title="ورود با توییتر" src="{{asset('/customer-assets/images/icons/twitter.png')}}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="login-member-wrap">
                                        <div class="register-member-left">
                                            <div class="item-wrap">
                                                <label>موبایل</label>
                                                <input type="text" id="user_name_login" name="mobile" value="" class="required">
                                            </div>
                                            <div class="item-wrap">
                                                <label>رمز عبور</label>
                                                <input type="password" id="password_login" name="password" value="" class="required">
                                            </div>
                                        </div>
                                        <div class="login-member-action">
                                            <button type="submit" name="login-account" class="button">
                                                ورود <i class="fa-li fa fa-spinner fa-spin hide"></i>
                                            </button>
                                            <p>
                                                <span>حساب کاربری ندارید؟</span>
                                                <a class="color" href="#popup_02" data-init="magnificPopup" title="Register now!">هم اکنون ثبت نام کنید!</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End / popup-content mfp-with-anim mfp-hide -->

                            <!--  register popup -->
                            <!-- popup-content mfp-with-anim mfp-hide -->
                            <div class="popup-content box-login mfp-with-anim mfp-hide" id="popup_02">
                                <h4 class="title">ثبت نام</h4>
                                <form class="login-member-container" action="{{route('register')}}" method="post">
                                    @csrf
                                    <div class="login-member-wrap">
                                        <div class="register-member-left">
                                            <div class="item-wrap">
                                                <label>نام کاربری</label>
                                                <input type="text" id="user_name_login" name="name" value="" class="required">
                                            </div>
                                            <div class="item-wrap">
                                                <label>شماره موبایل</label>
                                                <input type="text" id="user_name_login" name="mobile" value="" class="required">
                                            </div>
                                            <div class="item-wrap">
                                                <label>رمز عبور</label>
                                                <input type="password" id="password_login" name="password" value="" class="required">
                                            </div>
                                        </div>
                                        <div class="login-member-action">
                                            <button type="submit" name="login-account" class="button">
                                                ذخیره <i class="fa-li fa fa-spinner fa-spin hide"></i>
                                            </button>
                                            <p>
                                                <span>حساب کاربری دارید؟</span>
                                                <a class="color" href="#popup_01" data-init="magnificPopup" title="Register now!">هم اکنون وارد شوید!</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End / popup-content mfp-with-anim mfp-hide -->

                            <div class="widget widget-social">
                                <div class="social">
                                    <div class="social-all">
                                        <a href="{{setting()->value['whatsapp'] ?? ''}}" target="_blank" class="facebook"><i class="fa fa-whatsapp"></i></a>
                                        <a href="{{setting()->value['telegram'] ?? ''}}" target="_blank" class="google"><i class="fa fa-telegram"></i></a>
                                        <a href="{{setting()->value['instagram'] ?? ''}}" target="_blank" class="twitter"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-content">
                    <div class="navbar-header pull-left">
                        <button data-target=".nav-collapse" class="btn-navbar icon-menu" type="button">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a href="{{route('customer.home')}}" class="navbar-brand" title="ویرایش اطلاعات مشاور املاک">
                            <img class="logo-img logo-normal" src="{{asset(setting()->value['logo']) ?? asset('/customer-assets/images/logo.png')}}" alt="ویرایش اطلاعات مشاور املاک">
                        </a>
                    </div>
                    @can('viewAny' , \App\Models\Item::class)
                    @auth()

                    <div class="pull-right navbar-meta meta-property">
                        <div class="meta-content">
                            <a href="{{route('customer.item.create')}}" class="meta-property button">
                                <span><i class="fa fa-plus-circle"></i></span>افزودن ملک
                            </a>
                        </div>
                    </div>

                    @endauth
                    @endcan
                    <nav class="pull-right main-menu">
                        <ul class="nav-collapse navbar-nav">
                            <li class="current"><a href="{{route('customer.home')}}">خانه</a></li>
                            <li>
                                <a href="{{route('customer.item.index')}}">املاک</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('customer.item.index')}}">لیست املاک</a></li>
                                    <li><a href="{{route('customer.item.forSale')}}">جستجو در املاک برای فروش</a></li>
                                    <li><a href="{{route('customer.item.forRent')}}">جستجو در املاک برای اجاره</a></li>
                                    @auth()
                                       <li><a href="{{route('customer.bookmark.index')}}">لیست املاک نشان شده</a></li>
                                    @endauth
                                    @can('update', \App\Models\Config::class)
                                        <li><a href="{{route('customer.config.edit')}}">ویرایش اطلاعات مشاوراملاک</a></li>
                                        <li><a href="{{route('customer.item.deleted-item')}}">املاک حذف شده</a></li>
                                    @endcan
                                </ul>
                                <i class="fa fa-angle-down"></i>
                            </li>
                            <li><a href="{{route('customer.staff.index')}}">مباشرین</a></li>

                            @can('viewAny' , \App\Models\User::class)
                                <li><a href="{{route('customer.user.index')}}">کاربران</a></li>
                            @endcan

                            <li><a href="{{route('customer.about.index')}}">درباره ما</a></li>
                            <li><a href="{{route('customer.contact.create')}}">تماس با ما</a>
                                @can('viewAny' , \App\Models\Contact::class)
                                <ul class="sub-menu">
                                         <li><a href="{{route('customer.contact.index')}}">لیست پیام ها</a></li>
                                         <li><a href="{{route('customer.newsletter.index')}}">اعضای خبرنامه</a></li>
                                     </ul>
                                     <i class="fa fa-angle-down"></i>
                                @endcan
                            </li>

                        </ul>
                    </nav>
                    <div class="pull-right navbar-meta meta-property show_on_mobile">
                        <div class="meta-content">
                            <a href="#" class="meta-property button">
                                <span><i class="fa fa-plus-circle"></i></span>افزودن ملک
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
