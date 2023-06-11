<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 360px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            margin-bottom: 30px;
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
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Login</h3>
        <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <?php echo session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('/login') ?>" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Username/Email address</label>
                <input id="email" class="form-control" name="username" value="<?= old('username') ?>" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" />
            </div>
            <center>
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </center>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>