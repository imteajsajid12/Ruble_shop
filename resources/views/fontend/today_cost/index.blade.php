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
        <div class="col-xl-12">
            <h3 class="title-5 m-b-35">Cost table</h3>
            @include('fontend.today_cost.partials.table')
            {{-- creare --}}
            @include('fontend.today_cost.partials.create')
            {{--end creare --}}
            @include('fontend.today_cost.partials.update')
        </div>
    </div>
</div>
@endsection
@push('js')


<script src="{{ asset('js/today_cost/main.js') }}" type="text/javascript"></script>

@endpush
