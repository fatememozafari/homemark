
<!DOCTYPE html>
<html lang="fa-IR">
@include('customer.layouts.partials.head')
<body>
<div class="site">
    @include('customer.layouts.partials.header')
    <div class="ajaxMessage"></div>
    @include('alert.error')
    @include('alert.warning')
    @include('alert.success')
    @yield('content')
    @include('customer.layouts.partials.footer')
</div>
<div id="go-to-top" class="go-to-top">
    <i class="fa fa-angle-up"></i>
</div>

@include('customer.layouts.partials.script')
@yield('script')


</body>
</html>
