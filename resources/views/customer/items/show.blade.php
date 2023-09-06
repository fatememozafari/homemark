@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <div class="section section-bg-12 section-overlay-4 section-fixed pt-8 pb-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-page-title">
                            <h1 class="page-title">{{$item->title}}</h1>
                            <div class="page-breadcrumb">
                                <span><a title="بازگشت به خانه" href="#" class="home"><span>خانه</span></a></span>
                                <i class="icon ion-ios-arrow-back"></i>
                                <span><a title="بازگشت به لیست ملک ها" href="#"><span>املاک</span></a></span>
                                <i class="icon ion-ios-arrow-back"></i>
                                <span><span>{{$item->title}}</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section mt-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
{{--                        <ul class="header-control tabs">--}}
{{--                            <li class="active">--}}
{{--                                <a data-toggle="tab" href="#tab-gallery" aria-expanded="true"><i class="fa fa-picture-o" aria-hidden="true"></i> نمایش تصاویر</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a data-toggle="tab" href="#tab-map" aria-expanded="false"><i class="fa fa-map-marker" aria-hidden="true"></i> نمایش نقشه</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab-gallery">
                                <div class="property-detail-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="1" data-laptop="1" data-tablet="1" data-mobile="1">
                                  @if($item->images->count() > 0)
                                       @foreach($item->images as $image)
                                        <div class="item">
                                            <img src="{{asset($image->url)}}" alt="">
                                        </div>
                                        @endforeach
                                  @else
                                        <div class="item">
                                            <img src="{{asset('/customer-assets/images/property/slides/property_2.jpg')}}" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{asset('/customer-assets/images/property/slides/property_3.jpg')}}" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{asset('/customer-assets/images/property/slides/property_4.jpg')}}" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{asset('/customer-assets/images/property/slides/property_5.jpg')}}" alt="">
                                        </div>
                                  @endif

                                </div>
                            </div>
                            <div id="tab-map" class="tab-pane fade">
                                <div id="googleMap2" data-icon="images/icon_location.png" data-lat="38.066082" data-lon="46.323638"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section mt-7 mb-9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-property-detail">
                            <div class="detail-header">
                                <div class="action-post">
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="چاپ" class="compare" href="#">
                                        <i class="ion-printer"></i>
                                    </a>
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" href="#">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <div class="property-sharing">
                                        <a data-toggle="tooltip" data-placement="top" title="ویرایش اطلاعات ملک" class="like" href="{{route('customer.item.edit',$item)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                    </div>
                                </div>
                                <h3 class="detail-title">توضیحات</h3>
                            </div>
                            <div class="detail-content">
                                <p>{{$item->description}}</p>
                            </div>
                            <div class="detail-header">
                                <h3 class="detail-title">آدرس</h3>
                            </div>
                            <div class="detail-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-box-item">
                                            <label>آدرس</label>
                                            <span>{{setting()->value['address'] ?? ''}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-box-item">
                                            <label>تلفن تماس</label>
                                            <span>{{setting()->value['phone_number'] ?? ''}}</span>
                                        </div>
                                    </div>
                                </div>
                                @can('viewAny', \App\Models\Item::class)
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-box-item">
                                            <label> آدرس ملک</label>
                                            <span>{{$item->private_address}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-box-item">
                                            <label>تلفن فروشنده</label>
                                            <span>{{$item->saler_phone}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endcan
                            </div>
                            <div class="detail-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-header">
                                            <h3 class="detail-title">اطلاعات تکمیلی</h3>
                                        </div>
                                        <div class="content-box">
                                            <div class="content-box-item">
                                                <label>وضعیت</label>
                                                <span>{{$item->itemStatus}} </span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>نوع قرارداد</label>
                                                <span><a href="#">{{$item->itemContract}}</a></span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>نوع ملک</label>
                                                <span><a href="#">{{$item->itemType}}</a></span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>سال ساخت</label>
                                                <span>{{$item->built_at}}</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>قیمت فروش</label>
                                                <span> {{$item->price}}تومان</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>مبلغ رهن</label>
                                                <span>{{$item->diposit}}تومان</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>مبلغ اجاره</label>
                                                <span>{{$item->rent}}تومان</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>مساحت کل</label>
                                                <span>{{$item->area}}مترمربع</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>مساحت بنا</label>
                                                <span>{{$item->house_area}}مترمربع</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>مساحت حیاط</label>
                                                <span>{{$item->yard_area}}مترمربع</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>طبقه</label>
                                                <span>{{$item->floor}}</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>پارکینگ</label>
                                                <span>{{$item->parking}}</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>اتاق خواب</label>
                                                <span>{{$item->room}}</span>
                                            </div>
                                            <div class="content-box-item">
                                                <label>سرویس بهداشتی</label>
                                                <span>{{$item->bathroom}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-header">
                                            <h3 class="detail-title">ویژگی ها</h3>
                                        </div>
                                        <div class="content-box row">
                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    @if($item->underground )
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                    @endif
                                                    زیرزمین
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    @if($item->elevator)
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                    @endif
                                                    آسانسور
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    @if($item->warehouse)
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                    @endif
                                                    انباری
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    @if($item->pool)
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                    @endif
                                                    استخر شنا
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    @if($item->laundry)
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    @else
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                    @endif
                                                    رخت شویی
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                                    سیستم سرمایش
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                                    گرمایش گازی
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                                    بالکن
                                                </div>
                                            </div>

                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                                    سیستم امنیتی
                                                </div>
                                            </div>

                                            <div class="col-xs-6">
                                                <div class="content-box-item">
                                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                                    حیاط خلوت
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-header">
                                <h3 class="detail-title">فیلم ملک</h3>
                            </div>
                            @if($item->video)
                                <div class="detail-content">
                                    <iframe height="420" src="{{asset($item->video)}}" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            @else
                                <div class="detail-content">
                                    <iframe height="420" src="{{asset('/customer-assets/video/video1.mp4')}}" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                @endif

                            <div class="detail-header">
                                <h3 class="detail-title">نقشه ملک</h3>
                            </div>
                            <div class="detail-content">
                                <div class="floor-plan-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="1" data-laptop="1" data-tablet="1" data-mobile="1">
                                   @if($item->map)
                                        <div class="item text-center">
                                            <a href="{{asset($item->map)}}" class="mfp-image gallery-item">
                                                <img src="{{asset($item->map)}}" alt="">
                                            </a>
                                        </div>
                                    @else
                                        <div class="item text-center">
                                            <a href="{{asset('/customer-assets/images/floor_plan/plan_1.jpg')}}" class="mfp-image gallery-item">
                                                <img src="{{asset('/customer-assets/images/floor_plan/plan_1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="item text-center">
                                            <a href="{{asset('/customer-assets/images/floor_plan/plan_2.jpg')}}" class="mfp-image gallery-item">
                                                <img src="{{asset('/customer-assets/images/floor_plan/plan_2.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="item text-center">
                                            <a href="{{asset('/customer-assets/images/floor_plan/plan_3.jpg')}}" class="mfp-image gallery-item">
                                                <img src="{{asset('/customer-assets/images/floor_plan/plan_3.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="item text-center">
                                            <a href="{{asset('/customer-assets/images/floor_plan/plan_4.jpg')}}" class="mfp-image gallery-item">
                                                <img src="{{asset('/customer-assets/images/floor_plan/plan_4.jpg')}}" alt="">
                                            </a>
                                        </div>
                                       @endif


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
