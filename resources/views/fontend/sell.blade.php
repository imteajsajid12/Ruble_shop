@extends('layouts.themes')
@section('content')
@include('proted.navber')
<div class="container">
    <br></br>
    <Sell></Sell>
</div>
@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
{{--<link rel="stylesheet" href="https://unpkg.com/kidlat-css/css/kidlat.css">--}}
@endpush
@endsection
