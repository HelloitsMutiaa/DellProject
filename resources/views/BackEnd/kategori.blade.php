@extends('layouts.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Kategori</h1>
    <div>
        <button class="btn btn-secondary" style="background-color: #26C64B;">Laporan</button>
        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#tambahKategori">Tambah Kategori</button>
    </div>
</div>
<hr>

<!-- Modal Tambah Pengumuman -->
<div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include ('FrontEnd.modal.kategoriCreate')
      </div>
    </div>
  </div>
</div>

 <!-- /.row -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <form action="{{ route('categories') }}" method="GET">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" class="form-control float-right" placeholder="Search" name="search">
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
              <th>Nama Kategori</th>
              <th>Total</th>                     
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $index => $category)
            <tr>
              <td>{{ $index + $categories -> firstItem() }}</td>
              <td>{{ $category->nama }}</td>
              <td>123</td>
              <td>
                <span class="icon-frame">
                  <button  type="button" data-target="#editKategori" class="btn" data-toggle="modal">
                    <a href="{{ route('categories.edit', $category->id) }}">
                      <i class="fas fa-pencil-alt" style="color:green;"></i>
                    </a>
                  </button>
                </span>
                <div class="modal fade" id="editKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                        @include ('FrontEnd.modal.kategoriEdit')
                      </div>
                    </div>
                  </div>
                </div>                 
                <span class="icon-frame">
                  <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                </span>
              </td>
            </tr>
            @endforeach
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