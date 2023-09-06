@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <!-- START MAP HORIZONTAL -->
        <div  style="background-image: url('{{asset("/customer-assets/images/background/bg-map.jpg")}}'); height: 400px">
            <section id="search_map_horizontal" class="wrap advanced_search_property horizontal mb-27" style="background-color: #f3f3f9; margin:20px; padding: 30px">
                <div class="noo-map">
                    <div class="gsearch">
                        <div class="gsearch-wrap">
                            <form class="advanced-search-property">
                                <div class="advanced-search-property-wrap">
                                    <div class="row">
                                        <div class="item-wrap col-md-3">
                                            <input type="text" id="keyword" name="title" value="" placeholder="جستجوی عنوان ...">
                                        </div>
                                        <div class="item-wrap col-md-3">
                                            <input type="text" id="case_number" name="case_number" value="" placeholder="جستجوی شماره پرونده ...">
                                        </div>
                                        <div class="item-wrap col-md-3">
                                            <input type="text" id="address" name="address" value="" placeholder="جستجوی آدرس ...">
                                        </div>
                                        <div class="item-wrap col-md-3">
                                            <select class="selection" name="type">
                                                <option value="">همه انواع ملک</option>
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

                                        <div class="item-wrap col-md-3">
                                            <div class="price_slider_wrapper widget_price_filter price">
                                                <label for="">مبلغ رهن</label>
                                                <div class="price_slider" style="display:none;"></div>
                                                <div class="price_slider_amount" data-currency="تومان" data-step="100000">
                                                    <input type="hidden" id="min_price" name="min_rent" value="" data-min="0" placeholder="حداقل قیمت">
                                                    <input type="hidden" id="max_price" name="max_rent" value="" data-max="100000000000" placeholder="حداکثر قیمت">
                                                    <div class="price_label" style="display:none;">
                                                        <span class="from"></span> - <span class="to"></span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-wrap col-md-3">
                                            <div class="price_slider_wrapper widget_price_filter price">
                                                <label for="">مبلغ اجاره</label>
                                                <div class="price_slider" style="display:none;"></div>
                                                <div class="price_slider_amount" data-currency="تومان" data-step="100000">
                                                    <input type="hidden" id="min_price" name="min_deposit" value="" data-min="0" placeholder="حداقل قیمت">
                                                    <input type="hidden" id="max_price" name="max_deposit" value="" data-max="1000000000" placeholder="حداکثر قیمت">
                                                    <div class="price_label" style="display:none;">
                                                        <span class="from"></span> - <span class="to"></span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap col-md-3">
                                            <select class="selection contract hidden" name="contract" >
                                                <option value="rent" selected>برای اجاره</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row box-action">
                                        {{--                                        <div class="col-md-9 box-show-features">--}}
                                        {{--                                            <span class="show-features">فیلتر های بیشتر</span>--}}
                                        {{--                                        </div>--}}
                                        <div class="col-md-3 box-button">
                                            <button type="submit" class="button">
                                                <span class="ion-search"></span> جستجوی ملک
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>

        </div>
        <!-- END MAP HORIZONTAL -->

        <div class="section pt-2 pb-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <div class="wrap-title">
                                    <h3 class="title">
                                        <span class="first-word">لیست</span> ملک ها
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-md-4 col-sm-6 card{{$item->id}}">
                                <div class="property-item">
                                    <div class="property-item-wrap">
                                        <div class="item-head">
                                            <h4 class="item-title">
                                                <i class="ion-bookmark">{{$item->case_number}}</i>
                                                <a href="{{route('customer.item.show',$item)}}" title="Vilayi 2 tabage">{{$item->title}}</a>
                                            </h4>
                                            @can('viewAny' , \App\Models\Item::class)
                                                <span class="location">{{$item->private_address}}</span>
                                            @endcan
                                        </div>
                                        <div class="item-featured">
                                            <a href="{{route('customer.item.show',$item)}}" title="Family House in Hudson">
                                                @if($item->images->count() >0)
                                                    <img src="{{asset($item->images->first()->url)}}" width="258px" height="203px" alt="Family House in Hudson">
                                                @else
                                                    <img src="{{asset('/customer-assets/images/property/property_3.jpg')}}" alt="Family House in Hudson">

                                                @endif
                                            </a>
                                            <span class="property-status">{{$item->itemContract}}</span>
                                        </div>
                                        <div class="info">
											<span class="primary-file-1">
												<i class="icon-ruler"></i> <span>{{$item->area}} متر مربع</span>
											</span>
                                            <span class="primary-file-2">
												<i class="icon-bed"></i> <span>{{$item->room}} اتاق</span>
											</span>
                                            <span class="primary-file-3">
												<i class="icon-storage"></i> <span>{{$item->parking}} پارکینگ</span>
											</span>
                                            <span class="primary-file-4">
												<i class="icon-bath"></i> <span>{{$item->bathroom}} سرویس بهداشتی</span>
											</span>
                                        </div>
                                        <div class="action">
                                            <div class="price">
                                                <span class="amount">{{$item->price}} تومان</span>
                                            </div>
                                            <div class="action-post">
                                                @guest()
                                                    <a title="" data-original-title="علاقه‌مندی‌ها" href="#" class="addBookmark" data-id="{{$item->id}}">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                @endguest
                                                @auth()
                                                    @if($item->users->contains(auth()->id()))
                                                        <a title="حذف از علاقه مندی ها" data-original-title="علاقه‌مندی‌ها" class="deleteBookmark"
                                                           data-id="{{\App\Models\Bookmark::query()->where('item_id', $item->id)->where('user_id', auth()->id())->first()->id}}">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    @else
                                                        <a title="افزودن به علاقه مندی ها" data-original-title="علاقه‌مندی‌ها" class="addBookmark"
                                                           data-id="{{$item->id}}">
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
                                                    <a class="deleteItem" data-placement="top" data-id="{{$item->id}}" title="حذف ملک" data-original-title="حذف ملک">
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
                    {{ $items->links() }}
                </div>
            </div>

    </div>

@endsection
@section('script')
    @include('customer.bookmarks.script.script')
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
        });

    </script>
@endsection
