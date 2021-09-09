<div class="modal fade" id="Edit_model" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">
                    Update Customer
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- body stRT -->
                <form class="was-validated" id="customer" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required />
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_code">phone</label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" required />
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required />
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_code">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required />
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <br /><br />
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </form>

                <!-- END -->
            </div>
        </div>
    </div>
</div>
<!-- end modal medium -->
