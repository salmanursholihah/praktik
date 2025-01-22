<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <label for="angka1">angka1</label>
    <input type="number" id="angka1">

    <label for="operator">operator</label>
    <select name="operator" id="operator">
        <option value="kali">*</option>
        <option value="bagi">/</option>
        <option value="tambah">+</option>
        <option value="kurang">-</option>
    </select>
    <label for="angka2">angka2</label>
    <input type="number" id="angka2">
    <button type="button" onclick="hitung()">hitung</button>
    <label for="hasil">hasil</label>
    <input type="text" id="hasil" readonly>
    <script>
        function hitung() {
            var angka1 = parseFloat(document.getElementById("angka1").value);
            var angka2 = parseFloat(document.getElementById("angka2").value);
            var operator = document.getElementById("operator").value;
            var hasil;

            if (operator == "kali") {
                hasil = angka1 * angka2;
            } else if (operator == "bagi") {
                hasil = angka1 / angka2;
            } else if (operator == "tambah") {
                hasil = angka1 + angka2;
            } else if (operator == "kurang") {
                hasil = angka1 - angka2;
            }
            document.getElementById("hasil").value = hasil;
        }
    </script>
</body>

</html>
