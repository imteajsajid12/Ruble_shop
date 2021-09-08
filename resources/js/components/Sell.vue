<template>
    <div id="app">
        <div class="continer">
            <div class="row">
                <div class="col-md-8" id="printMe">
                    <div class="table-responsive table--no-card m-b-40">
                        <table
                            name="cart"
                            class="table table-borderless table-striped table-earning"
                            v-if="show"
                        >
                            <thead>
                                <tr>
                                    <th colspan="2">id</th>
                                    <th>name</th>
                                    <th>Quantity</th>
                                    <th>Size</th>
                                    <th>Price</th>

                                    <th>Item Total</th>
                                </tr>
                            </thead>
                            <tr
                                v-for="catagory in catagorys"
                                :key="catagory.id"
                            >
                                <td>
                                    <a
                                        @click="deletecatagory(catagory.id)"
                                        class="btn btn-danger btn-sm"
                                        >x</a
                                    >
                                </td>
                                <td>{{ catagory.id }}</td>
                                <td>{{ catagory.product_name }}</td>
                                <td>
                                    {{ catagory.product_quantity }}
                                </td>
                                <td>{{ catagory.product_size }}</td>
                                <td>${{ catagory.product_price }}</td>
                                <td>${{ itemtotal(catagory) }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">Total</td>
                                <td>${{ subtotal }}</td>
                            </tr>
                        </table>
                    </div>
                    <div v-if="!show">
                        <img
                            src="/image/bercode.gif"
                            alt="Girl in a jacket"
                            style="height: 300pt"
                        />
                    </div>
                </div>

                <!-- <div><img src="../image.barcodr.gif" /></div> -->

                <div class="col-md-3">
                    <form @submit.prevent="editecatagory">
                        <div class="">
                            <div class="form-grup">
                                <label for="">Automatic</label>
                                <div class="card-block">
                                    <div
                                        class="btn-group"
                                        data-toggle="buttons"
                                    >
                                        <label class="btn btn-primary active">
                                            <input
                                                v-model="auto"
                                                name="removelines"
                                                type="radio"
                                                class="cheker"
                                                autocomplete="off"
                                                v-bind:value="1"
                                                checked
                                            />
                                            Yes
                                        </label>
                                        <label class="btn btn-danger">
                                            <input
                                                v-model="auto"
                                                name="removelines"
                                                type="radio"
                                                class="cheker"
                                                v-bind:value="0"
                                            />
                                            No
                                        </label>
                                    </div>
                                </div>

                                <input
                                    type="text"
                                    class="form-control"
                                    v-model="product.search"
                                    autofocus
                                    required
                                />
                            </div>
                        </div>
                    </form>
                    <div class="" v-if="auto === 0">
                        <div class="form-grup">
                            <label for=""> Name</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                v-model="product.product_name"
                            />
                        </div>
                        <div class="form-grup">
                            <label for="">Quantity</label>
                            <input
                                type="number"
                                name="slug"
                                class="form-control"
                                v-model="product_quantity"
                            />
                            <input
                                type="number"
                                name="slug"
                                class="form-control"
                                v-model="product.product_quantity"
                                hidden
                            />
                            <div class="form-grup">
                                <label for=""> Size</label>
                                <input
                                    type="text"
                                    name="slug"
                                    class="form-control"
                                    v-model="product.product_size"
                                />
                            </div>
                            <label for="">Price</label>
                            <input
                                type="text"
                                name="price"
                                class="form-control"
                                v-model="product.product_price"
                            />
                        </div>
                    </div>
                    <br />
                    <button class="btn btn-primary" @click="creatcatagory">
                        Save
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#staticBackdrop"
                        style="float: right"
                    >
                        Refresh
                    </button>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div
                        class="modal fade"
                        id="staticBackdrop"
                        data-backdrop="static"
                        data-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="staticBackdropLabel"
                        aria-hidden="true"
                    >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5
                                        class="modal-title"
                                        id="staticBackdropLabel"
                                    >
                                        Price
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
                                <form @submit.prevent="refresh">
                                    <div class="modal-body">
                                        <span>Total Price</span>
                                        <h3>${{ subtotal }}</h3>
                                        <div class="form-grup">
                                            <label for="">price</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                v-model="product.total_price"
                                                q
                                                required
                                            />
                                        </div>
                                        <span>Return Back</span>
                                        <h3>${{ Return_back }}</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button
                                            type="submit"
                                            class="btn btn-secondary"
                                        >
                                            Close
                                        </button>
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Payment
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <p>{{data.name }}</p> -->
    </div>
</template>

<!--vuejs-->
<script>
export default {
    data() {
        return {
            auto: "1",
            // Auto: false,
            product_quantity: "1",
            product: {
                id: "",
                product_size: "",
                product_name: "",
                product_code: "",
                product_quantity: "",
                product_price: "",
                sell_price: "",

                image: ""
            },
            catagorys: [],
            show: true
        };
    },
    computed: {
        subtotal: function() {
            return this.catagorys.reduce((total, item) => {
                return total + item.product_quantity * item.product_price;
            }, 0.0);
        },
        Return_back: function() {
            //   return this.subtotal((total, item) => {
            return this.product.total_price - this.subtotal;
            //   }, 0.0);
        }
    },
    methods: {
        creatcatagory() {
            if (this.product.qty < 1) {
            } else {
                axios.post("/api/Sell", {
                    product_name: this.product.product_name,
                    product_code: this.product.product_code,
                    product_price: this.product.product_price,
                    product_quantity: this.product.product_quantity,
                    sell_price: this.product.sell_price,
                    product_size: this.product.product_size,
                    image: this.product.image,
                    quantity: this.product_quantity
                });
                // console.log(this.product.name);
                this.read();
                this.clearcart();
                this.$toast.success({
                    title: "Success",
                    message: "Item add successfully"
                });
            }
        },
        read() {
            axios
                .get(`/api/Sell`)
                .then(({ data }) => {
                    console.log(data);
                    this.catagorys = data;
                })
                .catch(err => ocnsole.error(err));
        },
        editecatagory() {
            var id = this.product.search;
            // (this.isInsert = false),
            axios.get(`/api/Sell/${id}/edit`).then(({ data }) => {
                this.product = data;
                if (data.faild) {
                    this.$swal("warning", "There Is no Product", "warning");
                } else {
                    if (data.product_quantity < 1) {
                        this.$swal(
                            "warning",
                            "There Is no Product Quantity",
                            "warning"
                        );
                    } else {
                        if (this.auto == 1) {
                            this.creatcatagory();
                            this.show = true;
                        }
                    }
                }
                // this.product = data;
                // if (this.product.qty < 1) {
                //     // this.$swal("Heading", "this is a Heading", "OK");
                // } else {
                //     this.creatcatagory();
                //     // this.show = true;
                // }
            });
        },
        editecatagory1() {
            var kk = this.product.ss1;
            (this.isInsert = false),
                axios.get(`api/catagory/edit/${kk}`).then(({ data }) => {
                    //console.log(data)
                    this.product = data;
                    //   this.creatcatagory();
                });
        },
        updatecatagory() {
            var id = this.product.id;
            (this.isInsert = true),
                axios.post(`api/catagory/${id}/update`, {
                    name: this.product.name,
                    slug: this.product.slug
                });
            this.$toast.success({
                title: "update",
                message: "update successfully"
            });
            this.read();
            this.clearcart();
        },

        deletecatagory(id) {
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
                    axios.delete(`/api/Sell/${id}`).then(({ data }) => {});
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
            this.read();
        },
        clearcart: function() {
            this.product.product_name = "";
            this.product.product_code = "";
            this.product.product_price = "";
            this.product.product_quantity = "";
            this.product.sell_price = "";
            this.product.product_size = "";
            this.product.image = "";
            this.product_quantity = "1";
        },

        refresh() {
            axios.post(`api/data`);
            this.read();
            this.clearcart();
            this.print();
        },
        addQty: function(item) {
            Object.assign(item, {
                qty: parseInt(item.product_quantity) + 1
            });
        },
        removeQty: function(item) {
            Object.assign(item, {
                qty: parseInt(item.product_quantity) - 1
            });
        },
        itemtotal: function(item) {
            return item.product_quantity * item.product_price;
        },
        print() {
            // Pass the element id here
            this.$htmlToPaper("printMe");
        }
    },
    mounted() {
        this.read();
        // this.Auto = false;
    }
};
</script>

<!--vuejs end-->
