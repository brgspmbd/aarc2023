<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-aarc-2023.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-login.css">
    <title>Login Form</title>
</head>

<body>
    <div class="login-container m-3">
        <div class="login-form">
            <div class="login-logo">
                <img src="<?php echo base_url(); ?>assets/img/logo-aarc-2023.png" alt="Logo">
            </div>
            <h2 class="mb-4 text-center ">WELCOME BACK</h2>
            <form action="<?php echo base_url(); ?>login/submit_login" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary login-button mb-2 p-3">Login Or Register</button>
                </div>
            </form>
            <hr>
            <p class="text-center">Go to <a href="<?php echo base_url(); ?>landingpage" class="">Landing page</a> </p>
            <!-- <a href="registration.html" class="btn btn-warning register-button p-3">Register</a> -->
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>