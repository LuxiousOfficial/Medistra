<link rel="stylesheet" href="/css/doctors.css">
<title>Rs. Medistra || Doctors</title>

<x-layout>
     <section class="home-doctors">
       <div class="container">

        <div class="row">
          <form class="d-flex mt-5" role="search">
            <input class="form-control" type="search" id="search" name="search" placeholder="Find a Doctor" aria-label="Search" autocomplete="off">
            <button class="btn btn-outline-success bg-success fw-bold text-white border-white fs-4" type="submit">Search</button>
          </form>
        </div>

         <div class="row mt-4">
           @foreach ($doctors as $doctor)
          <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 text-capitalize my-3">
            <div class="card shadow">
              <img src="{{ $doctor['image'] }}" class="card-img-top rounded-3">
              <div class="card-body text-capitalize text-center" style="background-color: whitesmoke; border-radius: 1rem;">
                <h2 class="card-title text-center fs-5 fw-bold mb-1">{{ ($doctor['nama']) }}</h2>
                <h3 class="card-title text-center fs-5 fw-bold my-2 text-success">{{ ($doctor['keahlian']) }}</h3>
                <h4 class="card-title text-center fs-5 fw-bold mb-1">{{ ($doctor['jadwalsatu']) }}</h4>
                <h4 class="card-title text-center fs-5 fw-bold mb-1">{{ ($doctor['jadwalkedua']) }}</h4>
                <h4 class="card-title text-center fs-5 fw-bold mb-3">{{ ($doctor['jadwalketiga']) }}</h4>
                <a href="/doctors/{{ $doctor['slug'] }}" class="btn btn-success d-flex justify-content-center fw-bold fs-6 mb-2">Profile</a>
                <a href="/dokter/{{ $doctor['link'] }}" class="btn btn-danger booking d-flex justify-content-center fw-bold fs-6">Booking Now</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    
    {{-- {{ $doctors->links() }} --}}

</x-layout>

<script src="js/releases.js"></script>