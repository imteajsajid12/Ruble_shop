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
                  <th>Name</th>
                  <th>Cost</th>
                  <th>Date</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach($today_costs as $today_cost)
              <tr id="{{$today_cost->id }}">
                  <td>{{ $today_cost->name }}</td>
                  <td>{{ $today_cost->taka }} Tk</td>
                  <td>{{ $today_cost->updated_at->format('j F  Y') }}</td>
                  <td>
                      <form action="{{ route('today_cost.destroy', $today_cost->id) }}" method="POST">
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
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  <!-- END DATA TABLE -->
