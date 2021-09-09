@extends('layouts.themes')
@section('content')
@include('proted.navber')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<br></br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            @include('fontend.Stock.partials.Table')
            <!-- End DATA TABLE -->
            <!-- Model -->
            @include('fontend.Stock.partials.model')
            <!-- End Model-->
            <!-- Update Model -->
            @include('fontend.Stock.partials.update_model')
            <!-- End Model-->
        </div>
    </div>
</div>
<!-- end table -->
@push('js')
<script src="{{ asset('js/stock/main.js') }}" type="text/javascript"></script>
@endpush

@endsection
