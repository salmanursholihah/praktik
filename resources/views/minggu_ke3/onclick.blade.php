<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onclick</title>
</head>
<body>
<button id="btn-klik">klik</button>
    <script>
    const tambahdata = document.getElementById('btn-klik');
    tambahdata.addEventListener('dblclick', function(){
        alert('terimakasih sudah klik 2x');
    });
    </script>
</body>
</html>