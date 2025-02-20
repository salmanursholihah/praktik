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
        <img src="https://w7.pngwing.com/pngs/285/477/png-transparent-web-development-web-design-internet-web-hosting-service-world-wide-web-logo-symmetry-sphere-thumbnail.png" alt="logo" width="80">
        <h2>lupa sandi</h2>
        <div class="registerform">
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" id="email">
            </div>
            <button type="submit" class="btn" onclick="confirm()">reset</button>
        </div>
        <a href="login">kembali ke halaman login</a>
    </div>
</body>
<script>
    function confirm(){
        alert('reset password akan di kirim ke email');
    }
</script>
</html>