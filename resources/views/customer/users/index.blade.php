@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <div class="section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-2">
                            <div class="wrap-title">
                                <h3 class="title">
                                    <span class="first-word">لیست کاربران</span>
                                </h3>
                            </div>
                        </div>
                        <div class="commerce-cart">
                            <table class="shop-table" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-remove">ردیف</th>
                                    <th class="product-thumbnail">نام</th>
                                    <th class="product-thumbnail">موبایل</th>
                                    <th class="product-thumbnail">تاریخ عضویت</th>
                                    <th class="product-thumbnail"> عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr class="tr-card{{$user->id}}">
                                        <td class="product-remove">{{$loop->iteration}}</td>
                                        <td class="product-thumbnail"><a href="">{{$user->name}}</a></td>
                                        <td class="product-thumbnail"><a href="">{{$user->mobile}}</a></td>
                                        <td class="product-thumbnail">{{$user->created_at}}</td>
                                        <td class="product-thumbnail">
                                            @can('view', \App\Models\User::class)
                                            <a class="addStaff button" data-id="{{$user->id}}">عضویت در کارکنان</a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(".addStaff").on('click', function(e) {
            let itemId = $(this).attr("data-id");

            $.ajax({
                url:'/staff/create/'+itemId,
                method:"get",
                data:{
                    "id" : itemId,
                },
                success: function(data) {

                    $('.tr-card'+itemId).remove();
                    successMessage('با موفقیت به لیست کارکنان اضافه شد.')

                },
                error: function( data ) {
                    errorMessage('با خطا مواجه شد.')

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
@endsection
