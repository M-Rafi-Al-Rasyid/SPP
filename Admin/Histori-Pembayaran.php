<?php
include "../Template-SPP/Header.php";
include "../Template-SPP/Navbar.php";
include "../Template-SPP/Sidebar.php";
?>
<!-- Main Content -->
<div class="main-content">
    <h1>Ini Halaman Histori Pembayaran</h1>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">
                        Data Siswa
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Siswa</h4>
                    </div>
                    <div class="card-body">3</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">
                        Data Kelas
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Kelas</h4>
                    </div>
                    <div class="card-body">3</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">
                        Data SPP
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total SPP</h4>
                    </div>
                    <div class="card-body">1</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">
                        Data Transaksi Bulanan
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Transaksi Bulanan</h4>
                    </div>
                    <div class="card-body">59</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">
                        Data Transaksi Tahunan
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Transaksi Tahunan</h4>
                    </div>
                    <div class="card-body">59</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Transaksi Pembayaran SPP</h4><br>
                </div>
                <div class="card-body">
                    <table class="table" style="text-align: center;">
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Tanggal Bayar</th>
                            <th>Jumlah Bayar</th>
                            <th>Petugas</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2022121201</td>
                            <td>M Rafi Al Rasyid</td>
                            <td>2023-01-18</td>
                            <td>20000</td>
                            <td><a class="btn btn-success" href="#">Petugas</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2022121201</td>
                            <td>Sendy Nurdian</td>
                            <td>2023-01-17</td>
                            <td>20000</td>
                            <td><a class="btn btn-success" href="#">Ujang</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../Template-SPP/Footer.php";
?>