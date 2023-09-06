fixed@extends('customer.layouts.master')
@section('content')
    <div id="main">
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-11">
                        @foreach($staffs as $staff)
                        <div class="row agent-detail style-2 tr-card{{$staff->id}}">
                            <div class="thumbnail col-md-4">
                                <img src="{{asset('/customer-assets/images/team/team_2.png')}}" alt="">
                                <div class="agent-social text-center">
                                    <a class="fa fa-facebook" href="#"></a>
                                    <a class="fa fa-twitter" href="#"></a>
                                    <a class="fa fa-google" href="#"></a>
                                    <a class="fa fa-pinterest" href="#"></a>
                                </div>
                            </div>
                            <div class="info-agent col-md-8">
                                <div class="box-content">
                                    <h3 class="title">
                                        <a href="" title="Kent Pather">{{$staff->name}}</a>
                                    </h3>
                                    <div class="box-info">
                                        <div class="item-info">
                                            <span class="position">{{$staff->status}} </span>
                                        </div>
                                        <ul class="item-info">
                                            <li class="agent-email">
                                                <a href="mailto:kentpather@landmark.com" target="_top">{{$staff->email}}</a>
                                            </li>
                                            <li class="agent-mobile">
                                                <a href="tel:0" target="_top">{{$staff->mobile}}</a>
                                            </li>
                                            <li class="agent-address">{{$staff->address}}</li>
                                        </ul>
                                        <div class="agent-about">
                                            @can('view', \App\Models\User::class)
                                            <a class="deleteStaff button" data-id="{{$staff->id}}">حذف از لیست کارکنان</a>
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
    </div>
@endsection
@section('script')
    <script>
        $(".deleteStaff").on('click', function(e) {
            let itemId = $(this).attr("data-id");

            $.ajax({
                url:'/staff/delete/'+itemId,
                method:"get",
                data:{
                    "id" : itemId,
                },
                success: function( data ) {
                    $('.tr-card'+itemId).remove();
                    successMessage('با موفقیت از لیست کارکنان حذف شد.')
                    console.log('removed successfully');


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
