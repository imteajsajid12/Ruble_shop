<template>
    <div id="app"></div>
</template>

<script>
export default {
    data() {
        return {};
    },
    methods: {
        alertDisplay() {
            // Adding an input method from SweetAlert 2 automatically binds an input form.
            this.$swal({
                title: "What is your Name?",
                input: "text",
                inputPlaceholder: "Enter your name here",
                showCloseButton: true
            });
        }
    }
};
</script>

<script>
import Table from "../components/table.vue";
export default {
    components: {
        Table
    },
    data() {
        return {
            product: {
                id: "",
                product_name: "",
                product_code: "",
                product_quantity: "",
                product_price: "",
                sell_price: "",
                product_size: "",
                image: "",
                imageUrl: null
            },
            status: true,
            catagorys: []
        };
    },
    methods: {
        onImageChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length) return;
            this.createImage(files[0]);
        },
        createImage(file) {
            let reader = new FileReader();
            let vm = this;
            reader.onload = e => {
                vm.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        creatcatagory(e) {
            const file = e.target.files[0];
            this.image = file;
            // console.log((this.image = file));
            // this.item.imageUrl = URL.createObjectURL(file);

            axios
                .post(`/api/store`, this.product)
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
                    console.log(this.product);
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                    console.log(errors);
                });
        },
        Update(id) {
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

<style></style>
