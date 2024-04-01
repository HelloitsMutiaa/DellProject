@extends('Admin.template')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Buku</h1>
    <div>
        <button class="btn btn-secondary" style="background-color: #26C64B;">Laporan</button>
        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#tambahBukuModal">Tambah Buku</button>
    </div>
</div>
<hr>

  @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
  @endif

<div class="modal fade" id="tambahBukuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @csrf
      <div class="modal-body">
        @include ('admin.modal.buku')
      </div>
    </div>
  </div>
</div>

 <!-- /.row -->
 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">Total Buku :  Judul,  Eksemplar</h3>
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
              <table id="tabelBuku" class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Buku</th>
                      <th>Bahasa</th>
                      <th>Subjek</th>
                      <th>Edisi</th>
                      <th>Pengarang</th>
                      <th>Penerbit</th>
                      <th>Tahun</th>   
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <div>
                      <td>
                        <span class="icon-frame">
                            <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                        </span>
                        </div>                 
                      </div>
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