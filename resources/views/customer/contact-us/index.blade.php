@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-2">
                            <div class="wrap-title">
                                <h3 class="title">
                                    <span class="first-word">پیام ها</span>
                                </h3>
                            </div>
                        </div>
                        <div class="commerce-cart">
                            <table class="shop-table" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-price">ردیف</th>
                                    <th class="product-thumbnail">ارسال کننده</th>
                                    <th class="product-name">متن پیام</th>
                                    <th class="product-price">شماره تماس</th>
                                    <th class="product-thumbnail">تاریخ ارسال پیام</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                <tr>
                                    <td class="product-price">{{$loop->iteration}}</td>
                                    <td class="product-thumbnail"><a href="">{{$message->name}}</a></td>
                                    <td class="product-name"><a href="">{{$message->message}}</a></td>
                                    <td class="product-price">{{$message->mobile}}</td>
                                    <td class="product-thumbnail">{{$message->created_at}}</td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{ $messages->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
