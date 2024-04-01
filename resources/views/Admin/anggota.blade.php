@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Anggota</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahAnggotaModal">Tambah Anggota</button>
</div>
<hr>

<div class="modal fade" id="tambahAnggotaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include ('admin.modal.anggota')
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
                      <th>ID Anggota</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                      <th>Alamat</th>
                      <th>Nomor HP</th>
                      <th>Batas Buku</th>
                      <th>Jabatan</th>
                      <th>Peran</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>John Doe</td>
                    <td>12345</td>
                    <td>john.doe@example.com</td>
                    <td>Manajemen</td>
                    <td>Jl. Sudirman No. 123</td>
                    <td>08123456789</td>
                    <td>5</td>
                    <td>Ketua</td>
                    <td>Admin</td>
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
                      <td>Jane Smith</td>
                        <td>54321</td>
                        <td>jane.smith@example.com</td>
                        <td>Teknik Informatika</td>
                        <td>Jl. Ahmad Yani No. 456</td>
                        <td>0876543210</td>
                        <td>3</td>
                        <td>Sekretaris</td>
                        <td>Anggota</td>
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
                    <td>Alice Johnson</td>
                    <td>67890</td>
                    <td>alice.johnson@example.com</td>
                    <td>Kedokteran</td>
                    <td>Jl. Merdeka No. 789</td>
                    <td>0890123456</td>
                    <td>4</td>
                    <td>Bendahara</td>
                    <td>Anggota</td>
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
                    <td>Michael Brown</td>
                    <td>09876</td>
                    <td>michael.brown@example.com</td>
                    <td>Arsitektur</td>
                    <td>Jl. Gajah Mada No. 101</td>
                    <td>08123456789</td>
                    <td>6</td>
                    <td>Anggota</td>
                    <td>Anggota</td>
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
                    <td>Sarah Lee</td>
                    <td>24680</td>
                    <td>sarah.lee@example.com</td>
                    <td>Hukum</td>
                    <td>Jl. Darmo No. 555</td>
                    <td>0876543210</td>
                    <td>2</td>
                    <td>Anggota</td>
                    <td>Anggota</td>
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
                    <td>David Kim</td>
                    <td>13579</td>
                    <td>david.kim@example.com</td>
                    <td>Ekonomi</td>
                    <td>Jl. Asia No. 333</td>
                    <td>0890123456</td>
                    <td>4</td>
                    <td>Anggota</td>
                    <td>Anggota</td>
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
                    <td>Emily Taylor</td>
                    <td>11223</td>
                    <td>emily.taylor@example.com</td>
                    <td>Seni Rupa</td>
                    <td>Jl. Pahlawan No. 222</td>
                    <td>08123456789</td>
                    <td>3</td>
                    <td>Anggota</td>
                    <td>Anggota</td>
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