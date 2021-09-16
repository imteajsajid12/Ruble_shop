<template>
    <!-- print -->
    <div class="container  h-100">
        <div class="row justify-content-center align-self-center">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <img
                            src="http://127.0.0.1:8000/default/fashol.png"
                            alt="fashol.com"
                            class="brand-image"
                            width="170px"
                        />
                    </h5>
                    <span id="fashol"><b>FASHOLDOTCOM LTD</b></span>
                    <div id="trade">
                        <span> Trade: 12312332</span>
                        <span>Call: +8801212121212</span>
                        <span>70, Greenroad,</span>
                        <span>Farmgate, Dhaka-1216</span>
                    </div>
                    <div id="product">
                        <table class="table" style="margin:30px;">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>Q.</th>
                                    <th>Size.</th>
                                    <th>%</th>
                                    <th>price</th>
                                    <th>subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="catagory in catagorys"
                                    :key="catagory.id"
                                >
                                    <td>{{ catagory.product_name }}</td>
                                    <td>
                                        {{ catagory.product_quantity }}
                                    </td>
                                    <td>{{ catagory.product_size }}</td>
                                    <td>{{ catagory.discount }} %</td>
                                    <td>{{ catagory.sell_price }} $</td>
                                    <td>{{ itemtotal(catagory) }} $</td>
                                </tr>
                                <tr>
                                    <td colspan="5">Total</td>
                                    <td>{{ subtotal }} $</td>
                                    <hr />
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end print -->
</template>

<script>
export default {
    data() {
        return {
            catagorys: []
        };
    },
    computed: {
        subtotal: function() {
            return this.catagorys.reduce((total, item) => {
                return total + item.product_quantity * item.sell_price;
            }, 0.0);
        }
    },
    methods() {
        axios.get(`/api/Sell`).then(({ data }) => {
            this.catagorys = data;
        });
    }
};
</script>

<style></style>
