<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <!-- <script type="text/javascript" src="https://app.stg.midtrans.com/snap/snap.js" data-client-key="config('midtrans.client_key')"></script> -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>

    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <title>Toko Durian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="my-3 d-flex justify-content-center">Toko durian</h1>

        <div class="d-flex justify-content-center" id="snap-container">
            <div class="card mb-4" style="width: 20rem;">
                <img src="{{ asset('assets/durian-c.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Detail Pesanan</h5>
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
                    </table>
                    <button class="btn btn-primary mt-3" id="pay-button">Bayar Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
            // Also, use the embedId that you defined in the div above, here.
            window.snap.embed('{{ $snapToken }}', {
                embedId: 'snap-container',
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    //alert("payment success!");
                    window.location.href = '/invoice/{{ $order->id }}'
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            });
        });
    </script>
</body>

</html>