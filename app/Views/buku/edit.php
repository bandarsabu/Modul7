<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .btn-primary {
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Responsive styles */
        @media (max-width: 576px) {
            .form-container {
                max-width: 300px;
            }

            h3 {
                font-size: 20px;
            }

            .form-control {
                font-size: 14px;
                padding: 8px;
            }

            .btn-primary {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h3>Edit Data Buku</h3>
            <form action="<?= base_url('/buku/' . $buku['id'] . '/edit') ?>" method="post">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>">
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis'] ?>">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
