<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman register</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <div class="registerform">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password">
            </div>
            <button type="submit" class="btn">Register</button>
        </div>
        <a href="login">apakah anda sudah punya akun?</a>
    </div>
</body>
</html>