<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman lupa sandi</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>lupa sandi</h2>
        <div class="registerform">
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" id="email">
            </div>
            <button type="submit" class="btn">reset</button>
        </div>
        <a href="login">kembali ke halaman login</a>
    </div>
</body>
</html>