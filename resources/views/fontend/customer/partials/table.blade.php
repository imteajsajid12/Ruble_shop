  <div class="table-data__tool float-right">
      <div class="table-data__tool-right">
          <button class="btn btn-primary btn-md1 btn-block" data-toggle="modal" data-target="#mediumModal" @click="hide()">
              <i class="zmdi zmdi-plus"></i> Add Customer
          </button>
      </div>
  </div>
  <!-- DATA TABLE -->
  <div class="table-responsive m-b-40">
      <table class="table table-borderless" id="data_table">

          <thead class="thead-dark">
              <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Date</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach($customers as $customr)
              <tr id="{{$customr->id }}">
                  <td>{{ $customr->name }}</td>
                  <td>{{ $customr->phone }}</td>
                  <td>{{ $customr->email }}</td>
                  <td>{{ $customr->address }}</td>
                  <td>{{ $customr->updated_at->format('j F  Y') }}</td>
                  <td>
                      <form action="{{ route('customer.destroy', $customr->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group" role="group" aria-label="First group">
                                  <button type="button" class="btn btn-outline-info btn-icon mr-1 editbtn" data-toggle="modal" data-target="#Edit_model">
                                      <i class="zmdi zmdi-edit"></i></button>
                                  <a href="{{route('customer.show',$customr->id)}}" class="btn btn-outline-info btn-icon mr-1 editbtn">
                                      <i class="zmdi zmdi-eye"></i></a>
                                  @admin('super')
                                  <button type="submit" class="btn btn-outline-danger btn-icon"><i class="la fas fa-trash"></i></button>
                                  @endadmin
                              </div>
                          </div>
                      </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  <!-- END DATA TABLE -->
