<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman login</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <div class="registerform">
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password">
            </div>
            <button type="submit" class="btn">Login</button>
        </div>
        <a href="register">apakah anda belum punya akun?</a>
        <a href="lupa_sandi">lupa sandi?</a>
    </div>
</body>
</html>