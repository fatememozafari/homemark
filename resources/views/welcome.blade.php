@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <div class="section section-bg-1 pt-2 pb-17" style="background-image: url({{asset(setting()->value['image']) ?? asset('/customer-assets/images/background/bg_1.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="property-box-meta">
                            <div class="property-box-meta-content">
                                <span class="property-status">ویژه</span>
                                <div class="item-head">
                                    <h1 class="item-title">
                                        <a href="property-fullwidth.html" title="Store Space Greenville">
                                            {{setting()->value['name'] ?? ''}}
                                        </a>
                                    </h1>
                                    <span class="location">{{setting()->value['address'] ?? ''}}</span>
                                </div>
                                <div class="info">
											<span class="primary-file-1">
												<i class="fa-mobile-phone"></i> <span>{{setting()->value['phone_number'] ?? ''}}</span>
											</span>
                                    <span class="primary-file-2">
												<i class="agent-phone"></i> <span>{{setting()->value['mobile'] ?? ''}}</span>
											</span>
                                    <span class="primary-file-3">
												<i class="ion-email"></i> <span>{{setting()->value['email'] ?? ''}}</span>
											</span>
                                    <span class="primary-file-4">
												<i class=""></i> <span></span>
											</span>
                                </div>
                                <div class="price">
{{--                                    <span class="before-price"></span>--}}
{{--                                    <span class="amount">560,000,000 تومان</span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <div class="wrap-title">
                                <h3 class="title">
                                    <span class="first-word">جدیدترین</span> املاک
                                </h3>
                                <p class="sub-title">
                                    <i class="icon-decotitle"></i>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($items as $case)
                        <div class="col-md-4 col-sm-6 card{{$case->id}}">
                            <div class="property-item">
                                <div class="property-item-wrap">
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">{{$case->case_number}}</i>
                                            <a href="{{route('customer.item.show',$case)}}" title="Vilayi 2 tabage">{{$case->title}}</a>
                                        </h4>
                                        @can('viewAny' , \App\Models\Item::class)
                                            <span class="location">{{$case->private_address}}</span>
                                        @endcan
                                    </div>
                                    <div class="item-featured">
                                        <a href="{{route('customer.item.show',$case)}}" title="Family House in Hudson">
                                            @if($case->images->count() >0)
                                            <img src="{{asset($case->images->first()->url)}}" width="258px" height="203px" alt="Family House in Hudson">
                                            @else
                                                <img src="{{asset('/customer-assets/images/property/property_3.jpg')}}" alt="Family House in Hudson">

                                            @endif
                                        </a>
                                        <span class="property-status">{{$case->itemContract}}</span>
                                    </div>
                                    <div class="info">
											<span class="primary-file-1">
												<i class="icon-ruler"></i> <span>{{$case->area}} متر مربع</span>
											</span>
                                        <span class="primary-file-2">
												<i class="icon-bed"></i> <span>{{$case->room}} اتاق</span>
											</span>
                                        <span class="primary-file-3">
												<i class="icon-storage"></i> <span>{{$case->parking}} پارکینگ</span>
											</span>
                                        <span class="primary-file-4">
												<i class="icon-bath"></i> <span>{{$case->bathroom}} سرویس بهداشتی</span>
											</span>
                                    </div>
                                    <div class="action">
                                        <div class="price">
                                            <span class="amount">{{$case->price}} تومان</span>
                                        </div>
                                        <div class="action-post">
                                            @guest()
                                                <a title="" data-original-title="علاقه‌مندی‌ها" href="#" class="addBookmark" data-id="{{$case->id}}">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            @endguest
                                            @auth()
                                                @if($case->users->contains(auth()->id()))
                                                    <a title="حذف از علاقه مندی ها" data-original-title="علاقه‌مندی‌ها" class="deleteBookmark"
                                                       data-id="{{\App\Models\Bookmark::query()->where('item_id', $case->id)->where('user_id', auth()->id())->first()->id}}">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                @else
                                                    <a title="افزودن به علاقه مندی ها" data-original-title="علاقه‌مندی‌ها" class="addBookmark"
                                                       data-id="{{$case->id}}">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                @endif
                                            @endauth

                                            <div class="property-sharing">
                                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                    <i class="ion-android-share-alt"></i>
                                                </a>
                                                <div class="social-property">
                                                    <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در توییتر" class="share">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                        <i class="fa fa-telegram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                                @can('delete' , \App\Models\Item::class)
                                              <a class="deleteItem" data-placement="top" title="حذف ملک" data-id="{{$case->id}}" data-original-title="حذف ملک">
                                              <i class="fa fa-remove"></i>
                                              </a>
                                                @endcan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="section section-overlay section-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ads-service">
                            <h3 class="title">بهترین خدمات ملکی</h3>
                            <span class="sub-title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</span>
                            <div class="ads-phone">
                                <i class="fa fa-phone"></i>
                                <div class="ads-desc">
                                    هم اکنون تماس بگیرید <br>
                                    <a href="tel:(+1)-800-555-6789" class="ltr_text">{{setting()->value['phone_number'] ?? ''}}</a>
                                </div>
                            </div>
                            <img src="{{asset('/customer-assets/images/best_property_service.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <div class="wrap-title">
                                <h3 class="title">
                                    <span class="first-word">خدمات</span> ما
                                </h3>
                                <p class="sub-title">
                                    <i class="icon-decotitle"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                            <div class="service-icon icon-mapmarker">
                                <span class="icon icon-price-house"></span>
                            </div>
                            <h4 class="service-title">خدمات فروش</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                            <div class="service-icon icon-mapmarker">
                                <span class="icon icon-rent"></span>
                            </div>
                            <h4 class="service-title">خدمات اجاره</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                            <div class="service-icon icon-mapmarker">
                                <span class="icon icon-painting"></span>
                            </div>
                            <h4 class="service-title">مشارکت در ساخت</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                            <div class="service-icon icon-mapmarker">
                                <span class="icon icon-safe-house"></span>
                            </div>
                            <h4 class="service-title">مدیریت ملک</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @isset($item)
        <div class="section section-overlay section-bg-4 mt-12 mb-27 featured_property">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-item">
                            <div class="featured-main">
                                <div class="meta">
                                    <h3 class="title">{{$item->title}}</h3>
                                    <span class="location">
												<i class="fa fa-map-marker"></i>
												{{$item->address}}
											</span>
                                    <span class="price">{{$item->price}} تومان</span>
                                </div>
                                <div class="info">
											<span class="primary-file-1">
												<i class="icon-ruler"></i> <span>{{$item->area}} متر مربع</span>
											</span>
                                    <span class="primary-file-2">
												<i class="icon-bed"></i> <span>{{$item->room}} خوابه</span>
											</span>
                                    <span class="primary-file-3">
												<i class="icon-storage"></i> <span>{{$item->parking}} پارکینگ</span>
											</span>
                                    <span class="primary-file-4">
												<i class="icon-bath"></i> <span>{{$item->bathroom}} سرویس بهداشتی</span>
											</span>
                                </div>
                                <div class="box-image">
                                    <div class="box-image-inner">
                                        <div class="box-image-content"></div>
                                    </div>
                                </div>
                                <div class="view">
                                    <p>{{$item->description}}</p>
                                    <a class="readmore" href="{{route('customer.item.show',$item)}}">بیشتر بخوانید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endisset
        <div class="section section-overlay section-bg-5 pt-10 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="1" data-laptop="1" data-tablet="1" data-mobile="1">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section mtn-16">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-index">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="blog-item">
                                        <div class="blog-featured">
                                            <div class="content-featured">
                                                <a class="content-thumb" href="blog-detail-sidebar.html">
                                                    <img src="{{asset('/customer-assets/images/blog/blog_1.jpg')}}" alt="">
                                                    <span></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="wrap-entry">
                                            <div class="entry-header">
                                                <h2>
                                                    <a href="blog-detail-sidebar.html">
                                                        ویلا لوکس دو طبقه همراه با استخر  </a>
                                                </h2>
                                                <span class="tag-date">
															<span>26</span>
															<span>خرداد</span>
														</span>
                                                <div class="item-info">
															<span class="author vcard">
																<i class="fa fa-user"></i>
																<a class="url" href="#"></a>
															</span>
                                                    <span class="count-comment">
																<i class="fa fa-comment"></i> 8
															</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="blog-item">
                                        <div class="blog-featured">
                                            <div class="content-featured">
                                                <a class="content-thumb" href="blog-detail-sidebar.html">
                                                    <img src="{{asset('/customer-assets/images/blog/blog_2.jpg')}}" alt="">
                                                    <span></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="wrap-entry">
                                            <div class="entry-header">
                                                <h2>
                                                    <a href="blog-detail-sidebar.html">
                                                        آپارتمان لاکچری 150 متری
                                                    </a>
                                                </h2>
                                                <span class="tag-date">
															<span>26</span>
															<span>خرداد</span>
														</span>
                                                <div class="item-info">
															<span class="author vcard">
																<i class="fa fa-user"></i>
																<a class="url" href="#"></a>
															</span>
                                                    <span class="count-comment">
																<i class="fa fa-comment"></i> 5
															</span>
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
        </div>
        <div class="section section-bg-6 section-overlay section-fixed mt-5 newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mailchimp">
                            <h3 class="title">عضویت در خبرنامه</h3>
                            <span class="sub-title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</span>
                                <div class="mailchimp-main">
                                    <input type="email" id="email" name="email" placeholder="ایمیل خود را وارد کنید" required="">
                                    <input type="submit" class="addEmail" value="Subscribe">
                                    <i class="ion-ios-paperplane"></i>
                                </div>
                            <img src="{{asset('/customer-assets/images/subscribe.png')}}" alt="subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section pt-5 pb-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <div class="wrap-title">
                                <h3 class="title">
                                    <span class="first-word">شرکای</span> ما
                                </h3>
                                <p class="sub-title">
                                    <i class="icon-decotitle"></i>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                </p>
                            </div>
                        </div>
                        <div class="partner-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="6" data-laptop="4" data-tablet="3" data-mobile="2">
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_1.jpg')}}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_3.jpg')}}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_4.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_5.jpg')}}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_6.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_7.jpg')}}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_8.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_9.jpg')}}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_10.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_1.jpg')}}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_11.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_5.jpg')}}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_7.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_9.jpg')}}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{asset('/customer-assets/images/partners/partner_3.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(".addEmail").on('click', function(e) {
            let email = $("#email").val();
            // alert(email)
            $.ajax({
                url:'/newsletter/store',
                method:"get",
                data:{
                    "email" : email,
                },
                success: function( data ) {
                    successMessage('ایمیل شما ثبت شد')

                },
                error: function( data ) {
                    errorMessage('ایمیل تکراری.')

                }
            });
            function successMessage(message){
                var successTag = '<div class="alert alert-success alert-dismissible" id="alert" role="alert" style="position:fixed;bottom: 0; right:10px; width: 400px; z-index: 1000" data-delay="5000">\n' +
                    ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                    '<span aria-hidden="true">&times;</span>\n' +
                    '</button>\n' +
                    '<h4 class="alert-heading">عملیات موفق <small>"'+ message+'"</small></h4>\n' +
                    '</div>'
                $('.ajaxMessage').append(successTag)
                $('#alert').delay(5000).fadeOut()
            }

            function errorMessage(message){
                var errorTag = '<div class="alert alert-danger alert-dismissible" id="alert" role="alert" style="position:fixed;bottom: 0; right:10px; width: 400px; z-index: 1000" data-delay="5000">\n' +
                    ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                    '<span aria-hidden="true">&times;</span>\n' +
                    '</button>\n' +
                    '<h4 class="alert-heading">عملیات ناموفق <small>"'+ message+'"</small></h4>\n' +
                    '</div>'
                $('.ajaxMessage').append(errorTag)
                $('#alert').delay(5000).fadeOut()
            }

        });





    </script>
    @include('customer.bookmarks.script.script')

@endsection
