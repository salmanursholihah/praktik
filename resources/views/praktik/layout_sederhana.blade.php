<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <style>
        *{
            box-sizing: border-box;
        }
        header{
            background-color: sienna;
            padding: 20px;
            margin: 0;
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
        }
        .nav{
            background-color: lightgray;
            padding: 20px;
        }
        .nav a{
            text-decoration: none;
            padding: 20px;
            background-color: lightgray;
            text-align: center;
        }
        .nav a:hover{
            background-color: #faf0fa;
            color: black;
        }
        .row{
            display: flex;
            flex-direction: wrap;
        }
        .aside
    {
        padding: 20px;
        background-color: #faf0e6;
        justify-content: center;
    }
    .main{
        padding: 20px;
        justify-content: center;
    }
    .img{
        padding: 20px;
        background: #faf0fa;
        width: 200px;
    }

    .footer{
        background-color: sienna;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        padding: 20px;
   
    }

    @media screen and(max-width=700px){
        .row,
        .nav,
        .main{
            flex-direction: column;
        }
    }
    </style>
</head>
<body>
    <header>
        <h1>aplikasiku</h1>
<img src="https://static.vecteezy.com/system/resources/previews/023/654/784/non_2x/golden-logo-template-free-png.png" alt="" width="200px">    </header>
    
    <div class="nav">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">contact</a>
    </div>

    <div class="row">
        <div class="aside">
            <h2>about</h2>
            <h5>gallery</h5>
            <img src="https://onlinejpgtools.com/images/examples-onlinejpgtools/sunflower.jpg" alt="gambar1" width="200px">
            <p>deskripsi gambar</p>
            <img src="https://onlinejpgtools.com/images/examples-onlinejpgtools/sunflower.jpg" alt="" width="200px">
            <h2>gambar lain</h2>
            <img src="https://onlinejpgtools.com/images/examples-onlinejpgtools/sunflower.jpg" alt="gambar lain 1" width="200px">
            <img src="https://onlinejpgtools.com/images/examples-onlinejpgtools/sunflower.jpg" alt="gambar lain 2" width="200px">
            <img src="https://onlinejpgtools.com/images/examples-onlinejpgtools/sunflower.jpg" alt="gambar lain 3" width="200px">
        </div>
        <div class="main">
            <h2>judul artikel</h2>
            <h5>tanggal : 12/12/24</h5>
            <img src="https://onlinejpgtools.com/images/examples-onlinejpgtools/sunflower.jpg" alt="ilustrasi" width="200px">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, recusandae. Voluptatum, neque. Nemo asperiores esse temporibus expedita repellendus nam eligendi doloremque est quae velit. Accusamus aliquid numquam eaque. Vitae, maxime?
            <h2>judul artikel</h2>
            <h5>tanggal : 13/12/24</h5>
            <img src="https://onlinejpgtools.com/images/examples-onlinejpgtools/sunflower.jpg" alt="ilustrasi" width="200px">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, recusandae. Voluptatum, neque. Nemo asperiores esse temporibus expedita repellendus nam eligendi doloremque est quae velit. Accusamus aliquid numquam eaque. Vitae, maxime?
        </div>
        </div>
        <div class="footer">
            <p>&copy;footer</p>
        </div>
   
    
</body>
</html>