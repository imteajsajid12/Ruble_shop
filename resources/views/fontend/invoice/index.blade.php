<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<style>
    .card {
        margin: 20px;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    span {
        font-size: 15px;
    }

    #cn {
        padding: 30px;
        display: flex;
        flex-direction: column;
    }

    #fashol {
        margin: 5px;
    }

    #product {
        margin: 5px;
    }

    #trade {
        padding-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }



    .card-title {
        margin: 15px;
    }

</style>
<body">
    <div class="container  h-100">
        <div class="row justify-content-center align-self-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><img src="http://127.0.0.1:8000/default/fashol.png" alt="fashol.com" class="brand-image" width="170px"></h5>
                    <span id="fashol"><b>FASHOLDOTCOM LTD</b></span>
                    <div id="trade">
                        <span> Trade: 12312332</span>
                        <span>Call: +8801212121212</span>
                        <span>70, Greenroad,</span>
                        <span>Farmgate, Dhaka-1216</span>
                    </div>
                    <div id="product">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>quantity</th>
                                    <th>%</th>
                                    <th>prine</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($save as $data)
                                <tr>
                                    <td scope="row">{{$data->product_name}}</td>
                                    <td>{{$data->product_quantity}}</td>
                                    <td>{{$data->discount}}%</td>
                                    <td>{{$data->product_price}}$</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4">Total</td>
                                    <td>${</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        //   $(document).ready(function() {
        window.resizeTo(200, 100);
        window.print();

        $('#print').click(function() {

        })
        //  });

    </script>

    </body>
</html>
