@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <div class="section section-overlay-2 section-bg-7 mt-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="faq">
                            <h3 class="title">
                                <span class="sub-title">مشاور املاک</span>
                                <span class="first-word">لند</span>مارک
                            </h3>
                            <div class="faq-group">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading active" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    ما کیستیم؟
                                                </a>
                                                <i class="toggle-icon ion-plus"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                    ما چطور میتوانیم به شما کمک کنیم؟
                                                </a>
                                                <i class="toggle-icon ion-plus"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                    چه مقدار هزینه های ما کوچک است؟
                                                </a>
                                                <i class="toggle-icon ion-plus"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 faq-img-wrap">
                        <div class="faq-img">
                            <img src="{{asset('/customer-assets/images/image_1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <span class="skew"></span>
        </div>
        <div class="section mt-9 mb-12">
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
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="btlink">--}}
{{--                            <a class="readmore" href="#">بیشتر بخوانید </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="section section-overlay-3 section-about-group section-bg-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pl-30">
                        <div class="skills has-image">
                            <div class="progress-header">
                                <h3 class="title">درباره ما</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان</p>
                            </div>
                            <div class="progress-content">
                                <div class="progress-wraper group-progressbar mb-2">
                                    <div class="block-progressbar" data-color="#f9a11b">
                                        <h3 class="progress-title">قیمت</h3>
                                        <div class="progresswrap">
                                            <div role="progressbar" data-transitiongoal="87" class="progressbar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-wraper group-progressbar mb-2">
                                    <div class="block-progressbar" data-color="#f9a11b">
                                        <h3 class="progress-title">کیفیت</h3>
                                        <div class="progresswrap">
                                            <div role="progressbar" data-transitiongoal="69" class="progressbar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-wraper group-progressbar mb-2">
                                    <div class="block-progressbar" data-color="#f9a11b">
                                        <h3 class="progress-title">برند</h3>
                                        <div class="progresswrap">
                                            <div role="progressbar" data-transitiongoal="61" class="progressbar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('/customer-assets/images/about.png')}}" alt="about">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="popup-video">
                            <a class="popup-youtube" href="{{asset('/customer-assets/video/video1.mp4')}}"><span><span></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="skew"></span>
        </div>

    </div>
@endsection
