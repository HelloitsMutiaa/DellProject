@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Pengumuman</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPengumumanModal">Tambah Pengumuman</button>
</div>
<hr>

<!-- Modal Tambah Pengumuman -->
<div class="modal fade" id="tambahPengumumanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi form tambah pengumuman di sini -->
        @include ('admin.modal.pengumuman')
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
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Webinar Mendeley khusus untuk prodi D4 TRPL ANgkatan 2019 - 17 Des 2023</td>
                      <td> Kegiatan dilaksanakan tanggal 11-3-2024</td>
                      <td><span class="tag tag-success">GAMBAR</span></td>
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
                      <td> Pendaftaran Kegiatan Ekstrakurikuler</td>
                      <td>Kegiatan dilaksanakan tanggal 23-2-2024</td>
                      <td><span class="tag tag-warning">GAMBAR</span></td>
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
                      <td> Jadwal Ujian Akhir Semester</td>
                      <td>Kegiatan dilaksanakan tanggal 01-3-2024</td>
                      <td><span class="tag tag-primary">GAMBAR</span></td>
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
                      <td> Penggalangan Dana Amal</td>
                      <td>Kegiatan dilaksanakan tanggal 11-3-2024</td>
                      <td><span class="tag tag-danger">GAMBAR</span></td>
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
                      <td>05</td>
                      <td> Seminar Internasional</td>
                      <td>Kegiatan dilaksanakan tanggal 9-3-2024</td>
                      <td><span class="tag tag-success">GAMBAR</span></td>
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
                      <td>06</td>
                      <td> Pelatihan Kewirausahaan</td>
                      <td>Kegiatan dilaksanakan tanggal 21-3-2024</td>
                      <td><span class="tag tag-warning">GAMBAR</span></td>
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
                      <td>07</td>
                      <td>Penutupan Sementara Perpustakaan</td>
                      <td>Kegiatan dilaksanakan tanggal 21-2-2024</td>
                      <td><span class="tag tag-primary">GAMBAR</span></td>
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