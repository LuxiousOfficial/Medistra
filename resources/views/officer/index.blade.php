<x-layout>
   <section>
      <div class="container-fluid">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()->has('update'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          {{ session('update') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="my-3 border-bottom">
          <h1 class="fs-3 fw-bold text-success text-uppercase text-center">Data Calon Karyawan</h1>
        </div>
          <a href="/officer/create" class="btn btn-success mb-3 fw-bold">Tambah Karyawan</a>
          <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
              <table class="table table-sm">
                <thead>
                  <tr class="table table-success">
                    <th scope="col">No</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($officers as $officer)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $officer->jabatan->jabatan }}</td>
                      <td>{{ $officer->email }}</td>
                      <td>{{ $officer->nik }}</td>
                      <td>{{ $officer->namalengkap }}</td>
                      <td>{{ $officer->tanggallahir }}</td>
                      <td>{{ $officer->tempatlahir }}</td>
                      <td>{{ $officer->jeniskelamin }}</td>
                      <td>{{ $officer->alamat }}</td>
                      <td>{{ $officer->agama }}</td>
                      <td>{{ $officer->nohp }}</td>
                      <td class="d-flex">
                        <a href="/officer/{{ $officer->id }}" class="btn btn-info px-3 fw-bold border-0">Details</a>
                        <a href="/officer/{{ $officer->id }}/edit" class="btn btn-warning px-3 fw-bold border-0 mx-2">Edit</a>
                        <form method="post" action="/officer/{{ $officer->id }}">
                          @method('delete')
                          @csrf
                          <button class="btn btn-danger px-3 fw-bold border-0" onclick="return confirm('Apa kamu yakin mau menghapus data ini?')">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
   </section>
</x-layout>