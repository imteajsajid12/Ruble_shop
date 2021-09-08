<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">
                    Add New Product
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- body stRT -->
                <form class="was-validated" action="{{route('Stock.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Product Name" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_code">Product Code</label>
                            <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Product Code" required />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Product Quantity</label>
                            <input type="number" class="form-control" name="product_quantity" id="Product_Quantity" placeholder="Product Quantity" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_price">Product Price</label>
                            <input type="number" class="form-control" id="Product_price" name="product_price" placeholder=" Product Price" required />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="sell_price">Sell price</label>
                            <input type="number" class="form-control" name="sell_price" id=" sell_price" placeholder="Sell price" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="validationTextarea">Product Size</label>
                            <input type="text" class="form-control is-invalid" name="product_size" id="product_size" placeholder="Product Size" required />
                        </div>
                    </div>

                    <div class="custom-file">
                        <label for="validationTextarea">Product Image</label>
                        <input type="file" class="custom-file-input" id="image" name="image" />
                        <label class="custom-file-label" for="image">Choose file...</label>
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
