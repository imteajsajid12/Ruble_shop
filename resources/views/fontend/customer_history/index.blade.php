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

 <section class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-3">

                 <!-- Profile Image -->
                 <div class="card card-primary card-outline">
                     <div class="card-body box-profile">
                         <div class="text-center">
                             <img class="profile-user-img img-fluid img-circle" src="{{ asset('image/customer.png') }}" style="height: 95px" alt="User profile picture">
                         </div>
                         <ul class="list-group list-group-unbordered mb-3">
                             <li class="list-group-item">
                                 <b>Today's order</b> <a class="float-right">
                                     @php
                                     $today_order = 0;
                                     @endphp
                                     {{-- @foreach ($Orders as $order)
                                     @if ($order->created_at->toDateString() === date('Y-m-d'))
                                     @if ($order->customer_id == $customer->id)
                                     @php
                                     $today_order++;
                                     @endphp
                                     @endif
                                     @endif
                                     @endforeach --}}
                                     {{ $today_order }}
                                 </a>
                             </li>
                             <li class="list-group-item">
                                 <b>Total order</b> <a class="float-right">
                                     @php
                                     $total_order = 0;
                                     @endphp
                                     {{-- @foreach ($Orders as $order)
                                     @if ($order->customer_id == $customer->id)
                                     @php
                                     $total_order++;
                                     @endphp
                                     @endif
                                     @endforeach --}}
                                     {{ $total_order }}
                                 </a>
                             </li>

                         </ul>

                         {{-- <a href="#" class="btn btn-block {{ $customer->account_status ? 'btn-success' : 'btn-danger' }}"><b>{{ $customer->account_status ? 'Active' : 'Inactive' }}</b></a> --}}
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->

                 <!-- About Me Box -->
                 <div class="card card-primary">
                     <div class="card-header">
                         <h3 class="card-title">About Me</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <strong><i class="fas fa-book mr-1"></i>Zone</strong>
                         <p class="text-muted">
                             {{-- {{ optional($customer->zone)->name }} --}}
                         </p>
                         <hr>
                         <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                         {{-- <p class="text-muted">{{ $customer->address_line_1 }}</p> --}}
                         <hr>
                         <strong><i class="fas fa fa-id-card mr-1"></i>NID Card</strong>
                         <div class="py-1">

                             {{-- <img class="border img-fluid" src="{{ $customer->image ? asset('storage/Customer_image/' . $customer->image) : asset('default/nid.jpg') }}" style="width: 250px" alt="{{ $customer->image }}"> --}}

                         </div>
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
             </div>
             <!-- /.col -->
             <div class="col-md-9">
                 <div class="card">
                     <div class="card-header p-2">
                         <ul class="nav nav-pills">
                             <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Today's
                                     Order</a></li>
                             <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Total Order</a>
                             </li>
                             <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update
                                     Profile</a>
                             </li>
                         </ul>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <div class="tab-content">
                             <div class="active tab-pane" id="activity">
                                 {{-- @include('customer.show_petials.today_order_petials') --}}
                             </div>
                             <!-- /.tab-pane -->
                             <div class="tab-pane" id="timeline">
                                 {{-- @include('customer.show_petials.total_order_petials') --}}

                             </div>

                             <div class="tab-pane" id="settings">
                                 {{-- @include('customer._petials.edit') --}}
                             </div>
                             <!-- /.tab-content -->
                         </div><!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
             </div>
             <!-- /.row -->
         </div><!-- /.container-fluid -->
 </section>
 @endsection
