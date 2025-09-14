<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-xxl-5 col-xl-5 col-md-5 col-8">
            <div class="list-group list-group-horizontal text-capitalize text-center fw-bold fs-4" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-news-list" data-bs-toggle="list" href="#list-news" role="tab" aria-controls="list-news">News</a>
              <a class="list-group-item list-group-item-action" id="list-articles-list" data-bs-toggle="list" href="#list-articles" role="tab" aria-controls="list-articles">Articles</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="tab-content text-capitalize" id="nav-tabContent">
            {{ $slot }}
        </div>
    </div>
</div>