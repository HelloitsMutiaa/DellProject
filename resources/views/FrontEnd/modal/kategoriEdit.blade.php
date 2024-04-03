<form action="{{ route('categories.update', $category->id)}}" method="post">
    @csrf
      <div class="form-group">
        <label for="kategori">Nama Kategori :</label>
        <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $category->nama }}" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
  </form>