@if(session('error'))

    <div class="alert alert-danger alert-dismissible" id="alert" role="alert" style="position:absolute; bottom: 0; right:10px; width: 400px; z-index: 1000" data-delay="5000">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="alert-heading">عملیات ناموفق<small>"{{session('error')}}"</small></h4>
    </div>

@endif
@section('script')
    <script>
        $(document).ready(function (){
            $('#alert').delay(5000).fadeOut()
        });

    </script>
@endsection
