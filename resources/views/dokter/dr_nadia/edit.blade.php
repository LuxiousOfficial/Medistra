<x-layout>
    <section>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <form method="post" action="/dokter/dr_nadia/{{ $pasien->id }}">
                        @method('put')
                        @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" class="form-control form-control-lg @error('nama')is-invalid @enderror" placeholder="Ketik nama lengkap anda..." required value="{{ old('nama', $pasien->nama) }}"/>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg @error('email')is-invalid @enderror" placeholder="Ketik alamat email anda..." required value="{{ old('email', $pasien->email) }}"/>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="nik">Nik</label>
                            <input type="number" id="nik" name="nik" class="form-control form-control-lg @error('nik')is-invalid @enderror" placeholder="Ketik nik anda..." required value="{{ old('nik', $pasien->nik) }}"/>
                            @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="jeniskelamin">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" id="jeniskelamin" name="jeniskelamin">
                              <option selected>{{ old('jeniskelamin', $pasien->jeniskelamin) }}</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="tanggallahir">Tanggal Lahir</label>
                            <input type="date" id="tanggallahir" name="tanggallahir" class="form-control form-control-lg w-50 @error('tanggallahir')is-invalid @enderror" placeholder="Ketik tanggal lahir anda..." required value="{{ old('tanggallahir', $pasien->tanggallahir) }}"/>
                            @error('tanggallahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control form-control-lg @error('alamat')is-invalid @enderror" placeholder="Ketik Alamat anda..." required value="{{ old('alamat', $pasien->alamat) }}"/>
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="nohp">Nomor Hp</label>
                            <input type="number" id="nohp" name="nohp" class="form-control form-control-lg @error('nohp')is-invalid @enderror" placeholder="Ketik tempat Lahir anda..." required value="{{ old('nohp', $pasien->nohp) }}"/>
                            @error('nohp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="keterangan">Keluhan</label>
                            <input type="text" id="keterangan" name="keterangan" class="form-control form-control-lg @error('keterangan')is-invalid @enderror" placeholder="Ketik tempat Lahir anda..." required value="{{ old('keterangan', $pasien->keterangan) }}"/>
                            @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="poli">Poli Klinik</label>
                            <select class="form-select" aria-label="Default select example" id="poli" name="poli">
                              <option selected>{{ old('poli', $pasien->poli) }}</option>
                            </select>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="doktor">Doktor</label>
                            <select class="form-select" aria-label="Default select example" id="doktor" name="doktor">
                              <option selected>{{ old('dokter', $pasien->dokter) }}</option>
                            </select>
                          </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                              <label class="form-label fw-bold" for="jadwal">Jadwal Kontrol</label>
                              <select class="form-select" aria-label="Default select example" id="jadwal" name="jadwal">
                                <option selected>{{ old('jadwal', $pasien->jadwal) }}</option>
                                <option value="Senin, 20 Oktober 2025">Senin, 20 Oktober 2025</option>
                                <option value="Kamis, 23 Oktober 2025">Kamis, 23 Oktober 2025</option>
                                <option value="Jumat, 24 Oktober 2025">Jumat, 24 Oktober 2025</option>
                              </select>
                            </div>
  
                            <div class="text-center text-lg-start mt-4 pt-2">
                              <button  type="submit" name="daftar" data-mdb-button-init data-mdb-ripple-init class="btn btn-success text-uppercase btn-lg w-100 fw-bold" style="padding-left: 1.5rem; padding-right: 1.5rem;">Update Data</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>