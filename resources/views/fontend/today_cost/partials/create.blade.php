<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">
                    Add Cost
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- body stRT -->
                <form class="was-validated" action="{{route('today_cost.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_code">Today Cost</label>
                            <input type="number" class="form-control" id="taka" name="taka" placeholder="Cost" required />
                        </div>
                    </div>
                    <br /><br />
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </form>

                <!-- END -->
            </div>
        </div>
    </div>
</div>
<!-- end modal medium -->
