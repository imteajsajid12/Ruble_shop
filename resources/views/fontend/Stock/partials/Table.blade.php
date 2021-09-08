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
      <table class="table table-borderless">
          <thead class="thead-dark">
              <tr>
                  <th>Product Name</th>
                  <th>Product Code</th>
                  <th>Image</th>
                  <th>Product Quantity</th>
                  <th>Sell price</th>
                  <th>Product Price</th>
                  <th>Product Size</th>
                  @admin('any_role')
                  <th>Action</th>
                  @endadmin
              </tr>
          </thead>
          <tbody>
              @foreach($stocks as $stock)
              <tr id="{{$stock->id }}">
                  <td>{{ $stock->product_name }}</td>
                  <td>
                      {{ $stock->product_code }}
                  </td>
                  <td style="height: 5%;width: 10%; ">
                      {{-- <img :src="`/image/${catagory.image}`" alt="" /> --}}
                  </td>
                  <td class="desc">
                      {{ $stock->product_quantity }}
                  </td>
                  <td>{{ $stock->product_price }} TK</td>
                  <td>
                      <span class="status--process">{{ $stock->sell_price }} Tk</span>
                  </td>
                  <td>{{ $stock->product_size }}</td>
                  @admin('any_role')
                  <td>
                      {{-- <div class="table-data-feature">
                          <button data-toggle="modal" data-target="#mediumModal" class="item" data-placement="top" title="Edit">
                              <i class="zmdi zmdi-edit"></i>
                          </button>
                          <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                              <i class="zmdi zmdi-delete"></i>
                          </button>
                      </div> --}}

                      <form action="{{ route('Stock.destroy', $stock->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group" role="group" aria-label="First group">
                                  <button type="button" class="btn btn-outline-info btn-icon mr-1 editbtn" data-toggle="modal" data-target="#Edit_model">
                                      <i class="zmdi zmdi-edit"></i></button>
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
