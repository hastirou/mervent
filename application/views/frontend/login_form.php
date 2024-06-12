<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .logo {
            display: block;
            margin: 0 auto;
            max-width: 200px;
            margin-bottom: 20px;
        }
        .container {
            max-width: 400px;
            margin-top: 50px;
        }
        .invalid-feedback {
            display: block;
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <img src="<?= base_url('assets/frontend/img/LOGO.png')?>" alt="Logo" class="logo">
        <h1>Login</h1>
        <p>Masuk ke Dashboard</p>

        <?php if($this->session->flashdata('message_login_error')): ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('message_login_error') ?>
            </div>
        <?php endif ?>

        <form action="" method="post" class="text-left">
            <div class="form-group">
                <label for="username">Email/Username*</label>
                <input type="text" name="username" id="username" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>"
                    placeholder="Your username or email" value="<?= set_value('username') ?>" required />
                <div class="invalid-feedback">
                    <?= form_error('username') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password*</label>
                <input type="password" name="password" id="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>"
                    placeholder="Enter your password" value="<?= set_value('password') ?>" required />
                <div class="invalid-feedback">
                    <?= form_error('password') ?>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Login">
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
