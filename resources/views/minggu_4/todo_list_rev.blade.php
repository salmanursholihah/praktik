<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo list revisi</title>
</head>
<body>
    <input type="text" id="InputTugas" placeholder="masukkan data tugas">
    <button id="TambahTugas">Tambah</button>
    <ul id="ListTugas"></ul>
</body>
<script>
document.getElementById("TambahTugas").addEventListener("click", function(){
    let InputTugas = document.getElementById("InputTugas");
    let taskText = InputTugas.value.trim();

    if(taskText ==="") return;

    let li = document.createElement("li");
    li.textContent=taskText;
li.addEventListener("click",function(){
    this.remove();
});
document.getElementById("ListTugas").appendChild(li);
taskText.value="";
});
</script>
</html>