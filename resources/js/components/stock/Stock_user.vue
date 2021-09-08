<template>
    <div id="app">
        <!-- table -->
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">data table</h3>
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
                                        >{{ catagory.sell_price }} TK</span
                                    >
                                </td>
                                <td>{{ catagory.product_Size }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
        <!-- end table -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            catagorys: []
        };
    },

    methods: {
        read() {
            axios.get(`/api/store`).then(({ data }) => {
                this.catagorys = data;
            });
        }
    },
    mounted() {
        this.read();
    }
};
</script>
