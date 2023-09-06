@if(session('warning'))

    <div class="alert alert-warning alert-dismissible" id="alert" role="alert" style="position:absolute; bottom: 0; right:10px; width: 400px; z-index: 1000" data-delay="5000">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="alert-heading"><small>"{{session('warning')}}"</small>هشدار</h4>
    </div>


@endif
@section('script')
    <script>
        $(document).ready(function (){
            $('#alert').delay(5000).fadeOut()
        });

    </script>
@endsection
