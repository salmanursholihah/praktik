<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ ('') }}">
    <title>dashboard</title>
</head>
<body>
    <header>
        <img src="#" alt="logo aplikasi" width="100px">
        <p><i class="fa-regular fa-user"></i></p>
    </header>
    <aside>
        <div class="sidebar">
            <div class="dashboard">
                <h4><i class="fa-solid fa-gauge"></i>Dashboard</h4>
            </div>
            <div class="product">
                <h4><i class="fa-solid fa-bag-shopping"></i>product</h4>
                <ul>
                    <li><a href="#"></a>daftar product</li>
                    <li><a href="#"></a>product masuk</li>
                    <li><a href="#"></a>product keluar</li>
                </ul>
            </div>
            <div class="pelanggan">
                <h4><i class="fa-solid fa-user"></i>pelanggan</h4>
                <ul>
                    <li><a href="#"></a>daftar pelanggan</li>
                    <li><a href="#"></a>pelanggan masuk</li>
                </ul>
            </div>
            <div class="laporan">
                <h4><i class="fa-solid fa-calendar"></i>laporan</h4>
                <ul>
                    <li><a href="#"></a>laporan masuk</li>
                    <li><a href="#"></a>laporan keluar</li>
                    <li><a href="#"></a>laporan diverifikasi</li>
                </ul>
            </div>
            <div class="logout">
                <h4><i class="#"></i></h4>
            </div>
        </div>
    </aside>
    <main>
        <div class="content">
            <div class="card-container">
                <div class="card">
                    <h4>pelanggan</h4>
                    <i class="fa-solid fa-users"></i>
                    <p>200</p>
                </div>
                <div class="card">
                    <h4>product masuk</h4>
                    <i class="fa-solid cart-shopping"></i>
                    <p>200</p>
                </div>
                <div class="card">
                    <h4>pelanggan</h4>
                    <i class="fa-solid fa-bag-shopping"></i>
                    <p>200</p>
                </div>
            </div>
            <br><br>
            <table>
                <thead>
                    <th>ID</th>
                    <th>nama</th>
                    <th>telepon</th>
                    <th>alamat</th>
                    <th>aksi</th>
                </thead>
                <tbody>
                    <tr>
                        <td>123</td>
                        <td>mimin</td>
                        <td>098765</td>
                        <td>indonesia</td>
                        <td>
                            <button class="hapus">hapus</button>
                            <button class="edit">edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>123</td>
                        <td>mimin</td>
                        <td>098765</td>
                        <td>indonesia</td>
                        <td>
                            <button class="hapus">hapus</button>
                            <button class="edit">edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>123</td>
                        <td>mimin</td>
                        <td>098765</td>
                        <td>indonesia</td>
                        <td>
                            <button class="hapus">hapus</button>
                            <button class="edit">edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        &copy; my aplikasi |2025
    </footer>
</body>
</html>