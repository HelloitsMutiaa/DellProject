@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>CD/DVD</h1>
    <div>
        <button class="btn btn-secondary" style="background-color: #26C64B;">Laporan</button>
        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#tambahPengumumanModal">Tambah CD/DVD</button>
    </div>
</div>
<hr>

<!-- Modal Tambah Pengumuman -->
<div class="modal fade" id="tambahPengumumanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah CD/DVD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi form tambah pengumuman di sini -->
        @include ('admin.modal.cddvd')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

 <!-- /.row -->
 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 650px;">
              <table id="tabelCdDvd" class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Subjek</th>
                      <th>Judul CD/DVD</th>
                      <th>Tahun</th>
                      <th>Pengarang</th>
                      <th>Prodi</th>
                      <th>Sumber</th>
                      <th>Deskripsi</th>
                      <th>Jenis Koleksi</th>
                      <th>Gambar</th>                      
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                    <td>1</td>
                    <td>Tugas Akhir 1</td>
                    <td>Pengembangan Aplikasi UMKM Toba</td>
                    <td>2019</td>
                    <td>Kelompok 4</td>
                    <td>D4 Teknologi Rekayasa Perangkat Lunak</td>
                    <td>Perpustakaan IT DEL</td>
                    <td>Buku ini membahas seputar pengembangan aplikasi UMKM Toba</td>
                    <td>Develop</d>
                    <td>GAMBAR</td>
                      <td>
                      <span class="icon-frame">
                            <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                        </span>
                        <span class="icon-frame">
                            <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                        </span>
                        <span class="icon-frame">
                            <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                        </span>
                    </td>
                    </tr>

                      <tr>
                        <td>2</td>
                        <td>Tugas Akhir 1</td>
                        <td>Reengineering Aplikasi Markopi</td>
                        <td>2020</td>
                        <td>Kelompok 10</td>
                        <td>D4 Teknologi Rekayasa Perangkat Lunak</td>
                        <td>Perpustakaan IT DEL</td>
                        <td>Buku ini membahas seputar reengineering aplikasi Markopi</td>
                        <td>Reengineering</td>
                        <td>GAMBAR</td>
                        <td>
                            <span class="icon-frame">
                                <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                            </span>
                            <span class="icon-frame">
                                <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                            </span>
                            <span class="icon-frame">
                                <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                            </span>
                        </td>
                        </tr>

                        <tr>
                        <td>3</td>
                        <td>Tugas Akhir 1</td>
                        <td>Pengembangan Aplikasi PA/TA/KP</td>
                        <td>2022</td>
                        <td>Kelompok 4</td>
                        <td>D4 Teknologi Rekayasa Perangkat Lunak</td>
                        <td>Perpustakaan IT DEL</td>
                        <td>Buku ini membahas seputar pengembangan aplikasi PA/TA/KP</td>
                        <td>Develop</td>
                        <td>GAMBAR</td>
                        <td>
                            <span class="icon-frame">
                                <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                            </span>
                            <span class="icon-frame">
                                <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                            </span>
                            <span class="icon-frame">
                                <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                            </span>
                        </td>
                        </tr>

                        <tr>
                        <td>4</td>
                        <td>Tugas Akhir 2</td>
                        <td>Reengineering Online Library System</td>
                        <td>2024</td>
                        <td>Kelompok 24</td>
                        <td>D4 Teknologi Rekayasa Perangkat Lunak</td>
                        <td>Perpustakaan IT DEL</td>
                        <td>Buku ini membahas seputar reengineering aplikasi OLIS</td>
                        <td>Reengineering</td>
                        <td>GAMBAR</td>
                        <td>
                            <span class="icon-frame">
                                <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                            </span>
                            <span class="icon-frame">
                                <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                            </span>
                            <span class="icon-frame">
                                <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                            </span>
                        </td>
                        </tr>

                        <tr>
                        <td>3</td>
                        <td>Tugas Akhir 1</td>
                        <td>Pengembangan Aplikasi Manajemen Resto Toba Tio Cafe</td>
                        <td>2020</td>
                        <td>Kelompok 8</td>
                        <td>D4 Teknologi Rekayasa Perangkat Lunak</td>
                        <td>Perpustakaan IT DEL</td>
                        <td>Buku ini membahas seputar pengembangan aplikasi Manajemen Resto</td>
                        <td>Develop</td>
                        <td>GAMBAR</td>
                        <td>
                            <span class="icon-frame">
                                <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                            </span>
                            <span class="icon-frame">
                                <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                            </span>
                            <span class="icon-frame">
                                <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                            </span>
                        </td>
                        </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

@endsection