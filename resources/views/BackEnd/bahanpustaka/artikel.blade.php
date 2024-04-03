@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Artikel</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahArtikelModal">Tambah Artikel</button>
</div>
<hr>

<div class="modal fade" id="tambahArtikelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include ('admin.modal.artikel')
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
                      <td>Perubahan Iklim: Tantangan dan Solusi</td>
                      <td>Membahas dampak perubahan iklim global pada lingkungan dan kehidupan manusia</td>
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
                      <td>Mengatasi Stigma: Menjaga Kesehatan Mental di Tempat Kerja</td>
                      <td>Membahas pentingnya kesehatan mental di tempat kerja</td>
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
                      <td>Revitalisasi Pembelajaran: Peran Teknologi dalam Pendidikan</td>
                      <td>Mengeksplorasi bagaimana teknologi telah mengubah lanskap pendidikan</td>
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
                      <td>Menuju Pariwisata Berkelanjutan: Tanggung Jawab Bersama</td>
                      <td>Membahas pentingnya pariwisata berkelanjutan dalam menjaga kelestarian lingkungan dan budaya</td>
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
                      <td>5</td>
                      <td>Membongkar Potensi: Masa Depan Teknologi Blockchain</td>
                      <td>Membahas bagaimana teknologi blockchain telah berkembang menjadi solusi berbagai masalah</td>
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
                      <td>6</td>
                      <td>Melacak Jejak Rasa: Keberagaman Kebudayaan Makanan Loka</td>
                      <td>Mengeksplorasi kekayaan ragam makanan lokal dari berbagai belahan dunia</td>
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
                      <td>Sosial di Era Digital: Koneksi yang Membangun atau Memecah</td>
                      <td>Membahas bagaimana media sosial mengubah cara berinteraksi dalam masyarakat</td>
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