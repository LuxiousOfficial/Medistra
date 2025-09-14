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
           <h1 class="fs-3 fw-bold text-success text-uppercase text-center">Data Pasien</h1>
         </div>
           <a href="/dokter/dr_adrianus/create" class="btn btn-success mb-3 fw-bold">Tambah Pasien</a>
           <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
               <table class="table table-sm">
                 <thead>
                   <tr class="table table-success">
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
                   <tr>
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
                         <a href="/dokter/dr_adrianus/{{ $pasien->id }}" class="btn btn-info px-3 fw-bold border-0">Details</a>
                         <a href="/dokter/dr_adrianus/{{ $pasien->id }}/edit" class="btn btn-warning px-3 fw-bold border-0 mx-2">Edit</a>
                         <form method="post" action="/dokter/dr_adrianus/{{ $pasien->id }}">
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