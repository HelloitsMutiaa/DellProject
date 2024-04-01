@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Link Link Lainnya</h1>
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
        @include ('admin.modal.linklinklainnya')
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
                      <th>Nama</th>
                      <th>Link</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Web Akademik</td>
                      <td>https://akademik.del.ac.id/users/sign_in</td>
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
                      <td>Web Mail</td>
                      <td>https://mail.del.ac.id/</td>
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
                      <td>Web IT DEL</td>
                      <td>https://www.del.ac.id/</td>
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
                      <td>Web Student</td>
                      <td>https://students.del.ac.id/</td>
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