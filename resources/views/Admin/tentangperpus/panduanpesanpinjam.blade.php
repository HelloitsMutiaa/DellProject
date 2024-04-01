@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Panduan Pesan Pinjam</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPanduanModal">Tambah Panduan</button>
</div>
<hr>

<div class="modal fade" id="tambahPanduanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Panduan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include ('admin.modal.panduanpesanpinjam')
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
                      <th>Nomor</th>
                      <th>Judul</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>PPITDEL/13/09/23/01</td>
                      <td>Panduan Pesan Pinjam Tahun 2017</td>
                      <td>
                      <span class="icon-frame">
                      <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Gunakan
                      </button>                        
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
                      <td>PPITDEL/13/09/23/01</td>
                      <td>Panduan Pesan Pinjam Tahun 2018</td>
                      <td>
                      <span class="icon-frame">
                      <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Gunakan
                      </button>                        
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
                      <td>PPITDEL/13/09/23/01</td>
                      <td>Panduan Pesan Pinjam Tahun 2019</td>
                      <td>
                      <span class="icon-frame">
                      <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Gunakan
                      </button>                        
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
                      <td>PPITDEL/13/09/23/01</td>
                      <td>Panduan Pesan Pinjam Tahun 2020</td>
                      <td>
                      <span class="icon-frame">
                      <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Gunakan
                      </button>                        
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
                      <td>PPITDEL/13/09/23/01</td>
                      <td>Panduan Pesan Pinjam Tahun 2021</td>
                      <td>
                      <span class="icon-frame">
                      <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Gunakan
                      </button>                        
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