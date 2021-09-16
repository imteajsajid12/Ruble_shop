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
            @include('fontend.total_sell.partials.Table')
            <!-- End DATA TABLE -->
        </div>
    </div>
</div>
<!-- end table -->
@push('js')
@endpush

@endsection
