<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onchange</title>
</head>
<body>
    <div id="info"></div>
<label for="siswa" ></label>
<select name="siswa" id="siswa">
<option >siska</option>
<option >hana</option>
<option >udin</option>
<option >mimin</option>
</select></body>
<script>
const info = document.getElementById('info');
const siswa = document.getElementById('siswa');

siswa = addEventListener('change', function(e){
    info.innerText=`anda memilih:${e.target.value}`;
});
</script>
</html>