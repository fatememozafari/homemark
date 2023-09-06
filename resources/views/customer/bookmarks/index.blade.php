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
                                    <span class="first-word">لیست</span> ملک های نشان شده
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($user->items as $item)
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
                                                <img src="{{asset('/customer-assets/images/property/property_2.jpg')}}" alt="Family House in Hudson">

                                            @endif                                        </a>
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

                                            @auth()
                                                    <a title="حذف از علاقه مندی ها" data-original-title="علاقه‌مندی‌ها"
                                                       data-id="{{\App\Models\Bookmark::query()->where('item_id', $item->id)->where('user_id', auth()->id())->first()->id}}"
                                                    class="deleteBookmark">
                                                        <i class="fa fa-heart"></i>
                                                    </a>

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
                                                    <a class="deleteItem" data-placement="top" title="حذف ملک" data-id="{{$item->id}}" data-original-title="حذف ملک">
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
    </div>
@endsection
@section('script')
    @include('customer.bookmarks.script.script')

@endsection

