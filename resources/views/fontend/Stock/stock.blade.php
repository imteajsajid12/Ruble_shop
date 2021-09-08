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
<script>
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            var id = $(this).closest('tr').attr('id');
            console.log(id);
            axios.get(`/admin/Stock/${id}/edit`)
                .then((res) => {
                    console.log(res.data);
                    let value = res.data;
                    $("input[id='product_name']").val(value.product_name);
                    $("input[id='product_code']").val(value.product_code);
                    $("input[id='product_price").val(value.product_price);
                    $("input[id='sell_price']").val(value.sell_price);
                    // $("select[id='status1']").val(value.pay_by);
                    $("input[id='product_quantity']").val(value.product_quantity);
                    $("input[id='product_size']").val(value.product_size);
                    $("input[name='image']").val(value.image);
                    $("#Stock_update").attr("action", "/admin/Stock/" + id);

                })
        });

    });

</script>

@endpush

{{-- <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script> --}}
@endsection
