<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transisi</title>
    <style>
        .body{
            padding: 0;
            margin: 0;
        }
        .container:hover .kotak{
            transform: rotate(273deg);
            margin: 800px;
            background-color: blue;
        }
        .kotak{
            margin: 15px;
            width: 100px;
            height: 100px;
            line-height: 100px;
            background: blue;
        }
        .kotak{
            transition: all 5s ease-in-out;
        }
    </style>
</head>
<body>
   <div class="container">
    <div class="kotak"></div>
   </div> 
</body>
</html>