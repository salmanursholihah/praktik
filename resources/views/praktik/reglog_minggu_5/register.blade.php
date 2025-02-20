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
        <img src="https://w7.pngwing.com/pngs/285/477/png-transparent-web-development-web-design-internet-web-hosting-service-world-wide-web-logo-symmetry-sphere-thumbnail.png" alt="logo" width="80">
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
            <button type="submit" class="btn" onclick=confirm()>Register</button>
        </div>
        <a href="login">apakah anda sudah punya akun?</a>
    </div>
</body>
<script>
    function confirm(){
        alert('register berhasil');
    }
</script>
</html>