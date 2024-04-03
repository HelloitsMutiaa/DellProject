 <form>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama">
          </div>
          <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="text" class="form-control" id="id_anggota">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
          </div>

          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control" required>
                <option value="Sarjana/Strata 1 (S1) Program Studi Informatika">Sarjana/Strata 1 (S1) Program Studi Informatika</option>
                <option value="Sarjana/Strata 1 (S1) Sistem Informasi">Sarjana/Strata 1 (S1) Sistem Informasi</option>
                <option value="Sarjana/Strata 1 (S1) Teknik Elektro">Sarjana/Strata 1 (S1) Teknik Elektro</option>
                <option value="D4 (Sarjana Terapan) Teknologi Rekayasa Perangkat Lunak">D4 (Sarjana Terapan) Teknologi Rekayasa Perangkat Lunak</option>
                <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
                <option value="D3 Teknologi Komputer">D3 Teknologi Komputer</option>
                <option value="Program Sarjana (S1) Teknik Bioproses">Sarjana (S1) Teknik Bioproses</option>
                <option value="Sarjana (S1) Manajemen Rekayasa"> Sarjana (S1) Manajemen Rekayasa</option>
                <option value="Sarjana (S1) Teknik Metalurgi">Sarjana (S1) Teknik Metalurgi</option>
            </select>
        </div>

          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="nomor_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="nomor_hp">
          </div>
          <div class="mb-3">
            <label for="batas_buku" class="form-label">Batas Buku</label>
            <input type="number" class="form-control" id="batas_buku">
          </div>
          <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan">
          </div>
          <div class="mb-3">
            <label for="peran" class="form-label">Peran</label>
            <input type="text" class="form-control" id="peran">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>