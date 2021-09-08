<template>
    <div id="app">
        <!-- table -->
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">data table</h3>
                <div class="table-data__tool float-right">
                    <div class="table-data__tool-right">
                        <button
                            class="btn btn-primary btn-md1 btn-block"
                            data-toggle="modal"
                            data-target="#mediumModal"
                            @click="hide()"
                        >
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
                                <th>Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-shadow" v-for="catagory in catagorys">
                                <td>{{ catagory.product_name }}</td>
                                <td>
                                    {{ catagory.product_code }}
                                </td>
                                <td style="height: 5%;width: 10%; ">
                                    <img
                                        :src="`/image/${catagory.image}`"
                                        alt=""
                                    />
                                </td>
                                <td class="desc">
                                    {{ catagory.product_quantity }}
                                </td>
                                <td>{{ catagory.product_price }} TK</td>
                                <td>
                                    <span class="status--process"
                                        >{{ catagory.sell_price }} Tk</span
                                    >
                                </td>
                                <td>{{ catagory.product_Size }}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <button
                                            data-toggle="modal"
                                            data-target="#mediumModal"
                                            class="item"
                                            data-placement="top"
                                            title="Edit"
                                            @click="Edit(catagory.id)"
                                        >
                                            <i class="zmdi zmdi-edit"></i>
                                        </button>
                                        <button
                                            class="item"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Delete"
                                            @click="Delete(catagory.id)"
                                        >
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
        <!-- end table -->
        <!-- modal medium -->
        <div
            class="modal fade"
            id="mediumModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="mediumModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5
                            class="modal-title"
                            v-if="status"
                            id="mediumModalLabel"
                        >
                            Add New Product
                        </h5>
                        <h5 v-else class="modal-title" id="mediumModalLabel">
                            Update Product
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- body stRT -->

                        <form
                            v-if="status"
                            class="was-validated"
                            @submit.prevent="creatcatagory"
                            enctype="multipart/form-data"
                        >
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4"
                                        >Product Name</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="product_name"
                                        placeholder="Product Name"
                                        v-model="product.product_name"
                                        required
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="product_code"
                                        >Product Code</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="product_code"
                                        placeholder="Product Code"
                                        v-model="product.product_code"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4"
                                        >Product Quantity</label
                                    >
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="Product_Quantity"
                                        placeholder="Product Quantity"
                                        v-model="product.product_quantity"
                                        required
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4"
                                        >Product Price</label
                                    >
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="inputPassword4"
                                        placeholder="Product Price"
                                        v-model="product.product_price"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Sell price</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="inputEmail4"
                                        placeholder="Sell price"
                                        v-model="product.sell_price"
                                        required
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationTextarea"
                                        >Product Size</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control is-invalid"
                                        id="validationTextarea"
                                        placeholder="Product Size"
                                        v-model="product.product_size"
                                        required
                                    />
                                </div>
                            </div>

                            <div class="custom-file">
                                <label for="validationTextarea"
                                    >Product Image</label
                                >
                                <input
                                    type="file"
                                    class="custom-file-input"
                                    id="validatedCustomFile"
                                    v-on:change="onImageChange"
                                />
                                <label
                                    class="custom-file-label"
                                    for="validatedCustomFile"
                                    >Choose file...</label
                                >
                            </div>

                            <br /><br />

                            <!-- </div> -->
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                >
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </form>
                        <!-- update from -->
                        <form
                            v-else
                            class="was-validated"
                            @submit.prevent="Update(product.id)"
                            enctype="multipart/form-data"
                        >
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4"
                                        >Product Name</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="product_name"
                                        placeholder="Product Name"
                                        v-model="product.product_name"
                                        required
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="product_code"
                                        >Product Code</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="product_code"
                                        placeholder="Product Code"
                                        v-model="product.product_code"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4"
                                        >Product Quantity</label
                                    >
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="Product_Quantity"
                                        placeholder="Product Quantity"
                                        v-model="product.product_quantity"
                                        required
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4"
                                        >Product Price</label
                                    >
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="inputPassword4"
                                        placeholder="Product Price"
                                        v-model="product.product_price"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Sell price</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="inputEmail4"
                                        placeholder="Sell price"
                                        v-model="product.sell_price"
                                        required
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationTextarea"
                                        >Product Size</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control is-invalid"
                                        id="validationTextarea"
                                        placeholder="Product Size"
                                        v-model="product.product_Size"
                                        required
                                    />
                                </div>
                            </div>

                            <br /><br />

                            <!-- </div> -->
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                >
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </form>
                        <!--end update from -->
                        <!-- END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal medium -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            image: "",
            product: {
                id: "",
                product_name: "",
                product_code: "",
                product_quantity: "",
                product_price: "",
                sell_price: "",
                product_Size: ""
            },
            status: true,
            catagorys: [],
            catagory1: []
        };
    },
    computed: {
        filterblog: function() {
            return this.catagorys.filter(catagory => {
                console.log(catagory.product_name.match(this.scearch));
                this.catagory1 = catagory.match(this.scearch);
            });
        }
    },
    methods: {
        onImageChange(e) {
            console.log(e.target.files[0]);
            this.image = e.target.files[0];
        },

        creatcatagory(e) {
            e.preventDefault();
            let currentObj = this;

            const config = {
                headers: { "content-type": "multipart/form-data" }
            };

            let formData = new FormData();
            formData.append("image", this.image);
            formData.append("product_name", this.product.product_name);
            formData.append("product_code", this.product.product_code);
            formData.append("product_quantity", this.product.product_quantity);
            formData.append("product_price", this.product.product_price);
            formData.append("sell_price", this.product.sell_price);
            formData.append("product_size", this.product.product_size);

            axios
                .post(`/api/store`, formData, config)
                .then(({ data }) => {
                    this.read();
                    this.clear();
                    this.playSound();
                    this.$swal(
                        "Save",
                        "You successfully Save this file",
                        "success"
                    );
                })
                .catch(error => {
                    console.log(errors);
                });
        },
        Edit(id) {
            this.status = false;
            axios
                .get(`/api/store/${id}/edit`)
                .then(({ data }) => {
                    this.product = data;
                    // console.log(this.product);
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                    console.log(errors);
                });
        },
        Update(id) {
            this.status = false;
            axios
                .put(`/api/store/${id}`, this.product)
                .then(({ data }) => {
                    this.read();
                    this.clear();
                    this.$swal(
                        "Update",
                        "You successfully Updare this file",
                        "success"
                    );

                    console.log(data);
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                    console.log(errors);
                });
        },
        hide() {
            this.status = true;
        },
        Delete(id) {
            this.$swal({
                title: "Are you sure?",
                text: "You can't revert your action",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes Delete it!",
                cancelButtonText: "No, Keep it!",
                showCloseButton: true,
                showLoaderOnConfirm: true
            }).then(result => {
                if (result.value) {
                    axios.delete(`/api/store/${id}`).then(({ data }) => {});
                    this.read();
                    this.$swal(
                        "Deleted",
                        "You successfully deleted this file",
                        "success"
                    );
                } else {
                    this.$swal(
                        "Cancelled",
                        "Your file is still intact",
                        "info"
                    );
                }
            });
        },
        read() {
            axios.get(`/api/store`).then(({ data }) => {
                this.catagorys = data;
            });
        },

        clear() {
            (this.product.product_name = ""),
                (this.product.product_code = ""),
                (this.product.product_quantity = ""),
                (this.product.product_price = ""),
                (this.product.sell_price = ""),
                (this.product.product_size = ""),
                (this.product.image = "1");
        },

        playSound(url) {
            const audio = new Audio(`/assets/media/iphone.mp3`);
            audio.play();
        }
    },
    mounted() {
        this.read();
    }
};
</script>
