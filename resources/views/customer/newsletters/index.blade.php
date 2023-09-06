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
                                    <span class="first-word">اعضای خبرنامه</span>
                                </h3>
                            </div>
                        </div>
                        <div class="commerce-cart">
                            <table class="shop-table" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">ردیف</th>
                                    <th class="product-thumbnail">ایمیل</th>
                                    <th class="product-thumbnail">تاریخ عضویت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($emails as $email)
                                    <tr>
                                        <td class="product-thumbnail">{{$loop->iteration}}</td>
                                        <td class="product-thumbnail"><a href="">{{$email->email}}</a></td>
                                        <td class="product-thumbnail">{{$email->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $emails->links() }}
                        </div>
                        <div class="">
                            <div class="cart-totals">
                                <div class="section-title mb-2">
                                    <div class="wrap-title">
                                        <h3 class="title">
                                            <span class="first-word"> ارسال </span>ایمیل
                                        </h3>
                                    </div>
                                </div>
                                <table cellspacing="0" class="shop-table p-2" style="border: 2px solid rgba(169,169,169,0.58)">
                                    <tbody>
                                    <form action="" method="post">
                                        @csrf
                                    <tr class="cart-subtotal">
                                        <td>عنوان پیام</td>
                                        <td>
                                            <input type="text" name="subject">
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <td>متن پیام</td>
                                        <td data-title="جمع">
                                            <textarea name="body"></textarea>
                                        </td>
                                    </tr>
                                       <tr>
                                           <td>
                                               <div class="proceed-to-checkout">
                                                   <button type="submit" class="button">ارسال</button>
                                               </div>
                                           </td>
                                           <td></td>
                                       </tr>
                                    </form>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
