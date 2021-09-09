@extends('layouts.themes')
@section('content')
@include('proted.navber')
@push('css')

@endpush

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
        <div class="col-xl-12">
            <h3 class="title-5 m-b-35">Customer Table</h3>
            @include('fontend.customer.partials.table')
            {{-- creare --}}
            @include('fontend.customer.partials.create')
            {{--end creare --}}
            @include('fontend.customer.partials.update')
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('js/customer/main.js') }}" type="text/javascript"></script>


@endpush
