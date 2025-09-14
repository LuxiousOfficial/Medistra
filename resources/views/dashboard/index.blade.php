<x-layoutdashboardahm>
    <section>
        <div class="container-fluid">
          <div class="row my-3">
            <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
              <div class="card sport shadow" style="height: 8rem">
                <div class="card-body text-center" style="color: orange;">
                  <h4 class="card-title fs-3">Online Registration</h4>
                  <h4 class="card-title fs-3">{{ $pasiens }}</h4>
                </div>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-2">
              <div class="card sport shadow" style="height: 8rem">
                  <div class="card-body text-center" style="color: orange;">
                    <h4 class="card-title fs-3">Careers</h4>
                    <h4 class="card-title fs-3">{{ $careers }}</h4>
                  </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-2">
              <div class="card sport shadow" style="height: 8rem">
                  <div class="card-body text-center" style="color: orange">
                    <h4 class="card-title fs-3">Candidates</h4>
                    <h4 class="card-title fs-3">{{ $candidates }}</h4>
                  </div>
              </div>
            </div>
            @can('developer')
            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-2">
                <div class="card sport shadow" style="height: 8rem">
                    <div class="card-body text-center" style="color: orange">
                      <h4 class="card-title fs-3">Users</h4>
                      <h4 class="card-title fs-3">{{ $users }}</h4>
                    </div>
                </div>
            </div>
            @endcan
        </div>
        </div>
    </section>
</x-layoutdashboardahm>