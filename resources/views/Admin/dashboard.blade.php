@extends('Admin.template')
@section('content')
    <?php
    // Set zona waktu ke WIB (Indonesia Barat)
    date_default_timezone_set('Asia/Jakarta');
    ?>
    <h3 style="margin-left: 7px; margin-bottom: 25px;">
        <b>
        {{ date('l, Y-m-d H:i:s') }}
        </b>
    </h3>
    
    <div class="container mt-4" style="margin-top: 100px; margin-left: 2px; text-align: center; font-weight: bold; "> 
    <div class="row">
        <div class="col-md-6"> <!-- Mengubah ukuran kolom -->
            <div class="card">
                <div class="card-header">
                    <h4><b>
                    Pengunjung
                    </b></h4>
                </div>
                <div class="card-body" style="font-size: 24px; color: #20A9C7">
                    170
                </div>
            </div>
        </div>
        <div class="col-md-6"> <!-- Mengubah ukuran kolom -->
            <div class="card">
                <div class="card-header">
                <h4><b>
                Total Peminjaman 
                </b></h4>
                </div>
                <div class="card-body" style="font-size: 24px; color: #20A9C7">
                    97
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-0">
        <div class="col-md-6"> <!-- Mengubah ukuran kolom -->
            <div class="card">
                <div class="card-header">
                <h4><b>
                Pemesanan
                </b></h4>
                </div>
                <div class="card-body" style="font-size: 24px; color: #20A9C7">
                    {{ $pemesanan_count }}
                </div>
            </div>
        </div>
        <div class="col-md-6"> <!-- Mengubah ukuran kolom -->
            <div class="card">
                <div class="card-header">
                <h4><b>
                Peminjaman 
                </b></h4>                
                </div>
                <div class="card-body" style="font-size: 24px; color: #20A9C7">
                    9
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4><b>
                    Pengumuman
                    </b></h4>
                </div>
                <div class="card-body">
                    <a href="/Admin/tambahpengumuman" class="btn btn-primary d-inline-flex align-items-center">
                        <i class="fas fa-plus mr-2"></i> <!-- Margin-right untuk memberikan jarak antara ikon dan teks -->
                        <h5 class="mb-0">Tambah Pengumuman</h5> <!-- Margin-bottom 0 untuk menghilangkan ruang bawah pada teks -->
                    </a>
                    </div>
                        <div style="margin-left: 30px; text-align: left;">
                            <h5>Webinar Mendeley khusus untuk prodi D4 TRPL Angkatan 2019 - 17 Des 2023</h5>
                            <h5>Sosialisasi keasramaan dengan topik penguasaan diri khusus untuk prodi D4 TRPL</h5>
                        </div>
                        <div style="position: absolute; bottom: 0; right: 0; margin-right: 10px;">
                            <a href="/Admin/lihatselengkapnya" class="btn btn-link"><h5>Lihat Selengkapnya</h5></a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

@endsection
