  <h3 class="title-5 m-b-35">data table</h3>
  <div class="table-data__tool float-right">
  </div>
  <!-- DATA TABLE -->
  <div class="table-responsive m-b-40">
      <table class="table table-borderless" id="data_table">
          <thead class="thead-dark">
              <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Product Code</th>
                  <th>Image</th>
                  <th>Product Quantity</th>
                  <th>Sell price</th>
                  <th>Product Price</th>
                  <th>Product Size</th>
                  <th>Date</th>
              </tr>
          </thead>
          <tbody>
              @foreach($products as $stock)
              <tr id="{{$stock->id }}">
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $stock->product_name }}</td>
                  <td>
                      {{ $stock->product_code }}
                  </td>
                  <td style="width: 10%; ">
                      <img class="w3-circle" style="border-radius: 50%; width:60%" src="{{ asset('/assets/images/imteaj.jpg')}}" alt="imteaj" />
                  </td>
                  <td class="desc">
                      {{ $stock->product_quantity }}
                  </td>
                  <td>{{ $stock->product_price }} TK</td>
                  <td>
                      <span class="status--process">{{ $stock->sell_price }} Tk</span>
                  </td>
                  <td>{{ $stock->product_size }}</td>
                  <td>{{ $stock->created_at->format('j F  Y') }}</td>

              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  <!-- END DATA TABLE -->
