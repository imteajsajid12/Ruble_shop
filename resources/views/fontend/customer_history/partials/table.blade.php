  <div class="table-data__tool float-right">
      <div class="table-data__tool-right">
          <button class="btn btn-primary btn-md1 btn-block" data-toggle="modal" data-target="#mediumModal" @click="hide()">
              <i class="zmdi zmdi-plus"></i> Add Payment
          </button>
      </div>
  </div>
  <!-- DATA TABLE -->
  <div class="table-responsive m-b-40">
      <table class="table table-borderless" id="data_table">

          <thead class="thead-dark">
              <tr>
                  <th>ID</th>
                  <th>Payment</th>
                  <th>Due</th>
                  <th>Date</th>
                  {{-- <th>Action</th> --}}
              </tr>
          </thead>
          <tbody>
              @foreach($customers_payments as $customr)
              <tr id="{{$customr->id }}">
                  <td>{{ $loop->index}}</td>
                  <td>{{ $customr->pay }} TK</td>
                  <td>{{ $customr->due }} TK</td>
                  <td>{{ $customr->updated_at->format('j F  Y') }}</td>
              </tr>
              @endforeach
              <tr>
                  <td>Total</td>
                  @if($Total_pay== $Total_due)
                  <td><span class="btn btn-success">Paid</span></td>
                  <td><span class="btn btn-success">Paid</span< /td>
                  <td><span class="btn btn-success">{{$Total_pay}} Tk </span></td>

                  @else
                  <td><span class="btn btn-success">{{$Total_pay}} Tk </span></td>
                  <td><span class="btn btn-danger">{{$Total_due}} Tk</span< /td>
                          @endif

                  <td></td>
              </tr>
          </tbody>
      </table>
  </div>
  <!-- END DATA TABLE -->
