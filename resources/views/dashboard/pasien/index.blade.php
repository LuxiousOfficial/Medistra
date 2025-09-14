<x-layoutdashboardahm>
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
           <h1 class="fs-3 fw-bold text-warning text-uppercase">Data Pasien</h1>
         </div>
         <section class="bg-white rounded-3 p-4">
          <div class="row">
            <div class="col-md-8 col-10">
              <a href="/dashboard/pasien/create" class="btn btn-warning text-white fw-bold">Tambah Pasien</a>
            </div>
          </div>
      
          <div class="row">
            <div class="col-xxl-8 col-xl-8 col-md-8 col-12">
              <form class="d-flex my-3" role="search">
                <input style="height: 3rem" class="form-control bg-gray-100" type="search" id="search" name="search" placeholder="Cari Data Lowongan Kerja" aria-label="Search" autocomplete="off">
                <button style="height: 3rem" class="btn btn-outline-success bg-warning fw-bold text-white border-0 fs-5" type="submit">Search</button>
              </form>
            </div>
          </div>

          <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
            <table class="table table-sm">
              <thead>
                <tr class="table table-warning text-center">
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Nik</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No HP</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Dokter</th>
                  <th scope="col">Poli</th>
                  <th scope="col">Jadwal</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pasiens as $pasien)
                <tr class="text-center">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->email }}</td>
                    <td>{{ $pasien->nik }}</td>
                    <td>{{ $pasien->jeniskelamin }}</td>
                    <td>{{ $pasien->tanggallahir }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>{{ $pasien->nohp }}</td>
                    <td>{{ $pasien->keterangan }}</td>
                    <td>{{ $pasien->dokter }}</td>
                    <td>{{ $pasien->poli }}</td>
                    <td>{{ $pasien->jadwal }}</td>
                    <td class="d-flex">
                      <a href="/dashboardhrdastrahonda/pasien/{{ $pasien->id }}" class="btn btn-info px-3 fw-bold border-0">Details</a>
                      <a href="/dashboardhrdastrahonda/pasien/{{ $pasien->id }}/edit" class="btn btn-warning px-3 fw-bold border-0 mx-2">Edit</a>
                      <form method="post" action="/dashboardhrdastrahonda/pasien/{{ $pasien->id }}">
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
         </section>
       </div>
    </section>
 </x-layoutdashboardahm>