<link rel="stylesheet" href="/css/doctor.css">
<title>Rs. Medistra || Doctors</title>

<x-layout>
    <section class="spesialis">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="fs-1 fw-bold text-center text-capitalize my-3">{{ $doctor['nama'] }}</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-xxl-6 col-xl-6 col-md-6 col-12">
                    <img src="../{{ $doctor['image'] }}" class="gambar mb-3">
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-xxl-5 col-xl-5 col-md-5 col-8">
                        <div class="list-group list-group-horizontal text-capitalize text-center fw-bold fs-5" id="list-tab" role="tablist">
                          <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Skills</a>
                          <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Graduated</a>
                          <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Schedule</a>
                        </div>
                    </div>
            </div>
            <div class="row mt-2">
                <div class="tab-content text-center text-capitalize" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="row">
                            <h5>Skills</h5>
                            <p>{{ $doctor['keahlian'] }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="row">
                            <h5>Graduated - 1</h5>
                            <p>{{ $doctor['lulusansatu'] }}</p>
                        </div>
                        <div class="row">
                            <h5>Graduated - 2</h5>
                            <p>{{ $doctor['lulusankedua'] }}</p>
                        </div>
                        <div class="row">
                            <h5>Graduated - 3</h5>
                            <p>{{ $doctor['lulusanketiga'] }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="row">
                            <div class="row">
                                <h5>Schedule - 1</h5>
                                <p>{{ $doctor['jadwalsatu'] }}</p>
                            </div>
                            <div class="row">
                                <h5>Schedule - 2</h5>
                                <p>{{ $doctor['jadwalkedua'] }}</p>
                            </div>
                            <div class="row">
                                <h5>Schedule - 3</h5>
                                <p>{{ $doctor['jadwalketiga'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>