<title>Rs. Medistra || Officer</title>

<x-layout>
  <div class="my-3 border-bottom">
    <h1 class="fs-3 fw-bold text-success text-center text-capitalize">Biodata Karyawan</h1>
  </div>
    <section class="form-pendaftaran">
      <div class="container">
          <div class="row text-center">
              <div class="col-md-12 col-12">
                <div class="title text-capitalize">
                    <h2 class="fs-1 fw-bold mb-4">{{ $officer->namalengkap }}</h2>
                </div>
                <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small">
                      <table class="table table-sm text-center fs-5">
                        <thead class="fs-4">
                          <tr class="table table-info">
                            <th scope="col">Info</th>
                            <th scope="col">Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Jabatan</td>
                          <td>{{ $officer->jabatan->jabatan }}</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>{{ $officer->email }}</td>
                        </tr>
                        <tr>
                          <td>Nik</td>
                          <td>{{ $officer->nik }}</td>
                        </tr>
                        <tr>
                          <td>Tanggal Lahir</td>
                          <td>{{ $officer->tanggallahir }}</td>
                        </tr>
                        <tr>
                          <td>Tempat Lahir</td>
                          <td>{{ $officer->tempatlahir }}</td>
                        </tr>
                        <tr>
                          <td>Jenis Kelamin</td>
                          <td>{{ $officer->jeniskelamin }}</td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td>{{ $officer->alamat }}</td>
                        </tr>
                        <tr>
                          <td>Agama</td>
                          <td>{{ $officer->agama }}</td>
                        </tr>
                        <tr>
                          <td>No Hp</td>
                          <td>{{ $officer->nohp }}</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="daftar text-center text-capitalize mt-5">
                    <a href="/officer" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-success text-uppercase text-white rounded">Back</a>
                  </div>
              </div>
          </div>
      </div>
    </section>
</x-layout>