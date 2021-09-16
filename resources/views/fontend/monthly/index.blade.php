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
            <h3 class="title-5 m-b-35">data table</h3>
            <div class="table-data__tool float-right">
                <div class="table-data__tool-right">
                    <button class="btn btn-primary btn-md1 btn-block" data-toggle="modal" data-target="#mediumModal" @click="hide()">
                        <i class="zmdi zmdi-plus"></i> Add item
                    </button>
                </div>
            </div>
            <!-- DATA TABLE -->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless" id="data_table">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Total Due</th>
                            <th>Total Pay</th>
                            <th>Total Cost</th>
                            <th> Total Product Quantity</th>
                            <th> Total Product Price</th>
                            <th> Total Sell price</th>
                            <th>Date</th>
                            @admin('any_role')
                            <th>Action</th>
                            @endadmin
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($monthly as $data)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $data->due_price }} TK</td>
                            <td>
                                {{ $data->pay_price }} TK
                            </td>
                            <td class="desc">
                                {{ $data->cost_price }} Tk
                            </td>
                            <td>{{ $data->sell_quantity }} TK</td>
                            <td>
                                <span class="status--process">{{ $data->product_price }} Tk</span>
                            </td>
                            <td>{{ $data->sell_total_price }} Tk</td>
                            <td>{{ $data->created_at->format('j F  Y') }}</td>
                            @admin('any_role')
                            <td>
                                <form action="{{ route('monthly.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">

                                            <button type="submit" class="btn btn-outline-danger btn-icon"><i class="la fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            @endadmin
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->


            <!-- End DATA TABLE -->

        </div>
    </div>
</div>
<!-- end table -->
@push('js')
<script src="{{ asset('js/stock/main.js') }}" type="text/javascript"></script>
@endpush

@endsection
