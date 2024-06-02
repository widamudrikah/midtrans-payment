<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Durian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="my-3 d-flex justify-content-center">Invoice</h1>

        <div class="d-flex justify-content-center">
            <div class="card mb-4" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Detail pesanan</h5>
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td> : {{ $order->name }}</td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td> : {{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> : {{ $order->address }}</td>
                        </tr>
                        <tr>
                            <td>Quantity</td>
                            <td> : {{ $order->quantity }}</td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td> : {{ $order->total_price }}</td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td> : {{ $order->status }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>