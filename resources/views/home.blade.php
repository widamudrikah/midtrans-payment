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
        <h1 class="my-3 d-flex justify-content-center">Toko durian</h1>

        <div class="d-flex justify-content-center">
        <div class="card mb-4" style="width: 20rem;">
            <img src="{{ asset('assets/durian-c.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Durian Lokal</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                <form action="/checkout" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Mau pesen berapa</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Quantity">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Pelanggan</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor HP</label>
                        <input type="text" name="phone" class="form-control" id="name" placeholder="Masukan Nomor HP">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Alamat</label>
                        <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Checkout</button>
                </form>

            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>