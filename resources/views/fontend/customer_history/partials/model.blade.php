<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">
                    Add Payment
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- body stRT -->
                <form class="was-validated" action="{{route('customer_payment.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Payment</label>
                            <input type="text" class="form-control" name="pay" id="pay" placeholder="Payment" />
                            <input type="text" class="form-control" name="customer_id" id="pay" placeholder="Payment" value="{{$customers->id}}" hidden />
                            @error('pay')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_code">Due</label>
                            <input type="text" class="form-control" name="due" id="due" placeholder="Due" />

                            {{-- <input type="number" class="form-control" id="due name=" due" placeholder="Due" required /> --}}
                            @error('due')
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
