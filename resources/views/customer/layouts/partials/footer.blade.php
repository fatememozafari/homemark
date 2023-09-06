<footer class="footer">
    <div class="main-footer">
        <div class="colophon wigetized">
            <div class="container">
                <div class="row">
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_text">
                            <h4 class="widget-title">{{setting()->value['name'] ?? ''}}</h4>
                            <div class="textwidget">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <ul class="contact-info">
                                    <li><i class="fa fa-map-marker"></i>{{setting()->value['address'] ?? ''}}</li>
                                    <li><i class="fa fa-phone"></i><span class="ltr_text">{{setting()->value['phone_number'] ?? ''}}</span></li>
                                    <li><i class="fa fa-envelope"></i>{{setting()->value['email'] ?? 'info@amlak.com'}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_text">
                            <h4 class="widget-title">ساعات کاری</h4>
                            <div class="textwidget">
                                <ul class="open-info">
                                    <li>شنبه تا چهارشنبه: 10AM - 21PM</li>
                                    <li>پنجشنبه: 10AM - 13PM</li>
                                    <li>جمعه: تعطیل</li>
                                    <li>ما در تعطیلات رسمی هم کار میکنیم</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">لینک های مفید</h4>
                            <ul class="menu">
                                <li><a class="white" href="#">قوانین و مقررات</a></li>
                                <li><a class="white" href="{{route('customer.about.index')}}">درباره ما</a></li>
                                <li><a class="white" href="#">حریم خصوصی</a></li>
                                <li><a class="white" href="#">تماس پشتیبانی</a></li>
                                <li><a class="white" href="#">فرصت های شغلی</a></li>
                                <li><a class="white" href="#">سوالات متداول</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_recent_property">
                            <h4 class="widget-title">جدید ترین ملک ها</h4>
                            <div class="recent-property-wrap">
                                <div class="recent-property-item">
                                    <div class="thumbnail">
                                        <a href="property-fullwidth.html" title="Family House in Hudson">
                                            <img src="{{asset('/customer-assets/images/property/thumb/property_1.jpg')}}" alt="Family House in Hudson">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a  class="white" href="property-fullwidth.html" title="Family House in Hudson">
                                                لورم ایپسوم متن ساختگی
                                            </a>
                                        </div>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-property-item">
                                    <div class="thumbnail">
                                        <a href="property-fullwidth.html" title="Loft Above The City">
                                            <img src="{{asset('/customer-assets/images/property/thumb/property_2.jpg')}}" alt="Loft Above The City">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a class="white" href="property-fullwidth.html" title="Loft Above The City">
                                                لورم ایپسوم متن ساختگی
                                            </a>
                                        </div>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-property-item">
                                    <div class="thumbnail">
                                        <a href="property-fullwidth.html" title="Villa on Hollywood Boulevard">
                                            <img src="{{asset('/customer-assets/images/property/thumb/property_3.jpg')}}" alt="Villa on Hollywood Boulevard">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a class="white" href="property-fullwidth.html" title="Villa on Hollywood Boulevard">
                                                لورم ایپسوم متن ساختگی با تولید
                                            </a>
                                        </div>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
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
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    ارائه شده توسط <a href="https://www.rtl-theme.com" target="_blank">تیم طراحی</a>
                </div>
                <div class="col-sm-6">
                    <div class="footer-social text-right text-center-sm">
                        <a href="{{setting()->value['instagram'] ?? ''}}" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="{{setting()->value['whatsapp'] ?? ''}}" target="_blank" class="linkedin"><i class="fa fa-whatsapp"></i></a>
                        <a href="{{setting()->value['telegram'] ?? ''}}" target="_blank" class="telegram"><i class="fa fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
