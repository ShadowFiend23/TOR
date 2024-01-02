<x-admin_layout>

<div class="container-lg px-3">
  <h1 class="app-page-title">Dashboard</h1>
  <div class="alert alert-dismissible alert-info">
    Hi {{ ucwords(auth()->user()->role) }}, Welcome to your Dashboard

  </div>
  <div class="row gx-0 mb-4">
    <div class="col-12 col-md-3 p-2">
      <div class="card bg-warning">
        <div class="card-body">
          <h5>Department Head Users</h5>
          <h3 class="my-4">
            {{ $data['departments']->count() }}
          </h3>
          <button class="btn btn-dark btn-sm w-100 d-flex align-items-center justify-content-center">
            <p class="m-0">More Info</p>&nbsp;
            <i class='bx bx-arrow-back bx-rotate-180' ></i>
          </button>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3 p-2">
      <div class="card bg-success">
        <div class="card-body">
          <h5>Registrar Users</h5>
          <h3 class="my-4">{{ $data['registrar']->count() }}</h3>
          <button class="btn btn-dark btn-sm w-100 d-flex align-items-center justify-content-center">
            <p class="m-0">More Info</p>&nbsp;
            <i class='bx bx-arrow-back bx-rotate-180' ></i>
          </button>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3 p-2">
      <div class="card bg-info">
        <div class="card-body">
          <h5>Evaluator Users</h5>
          <h3 class="my-4">{{ $data['evaluator']->count() }}</h3>
          <button class="btn btn-dark btn-sm w-100 d-flex align-items-center justify-content-center">
            <p class="m-0">More Info</p>&nbsp;
            <i class='bx bx-arrow-back bx-rotate-180' ></i>
          </button>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3 p-2">
      <div class="card bg-danger">
        <div class="card-body">
          <h5>Student Users</h5>
          <h3 class="my-4">{{ $data['students']->count() }}</h3>
          <button class="btn btn-dark btn-sm w-100 d-flex align-items-center justify-content-center">
            <p class="m-0">More Info</p>&nbsp;
            <i class='bx bx-arrow-back bx-rotate-180' ></i>
          </button>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3 p-2">
      <div class="card bg-warning">
        <div class="card-body">
          <h5>SASO Users</h5>
          <h3 class="my-4">{{ $data['saso']->count() }}</h3>
          <button class="btn btn-dark btn-sm w-100 d-flex align-items-center justify-content-center">
            <p class="m-0">More Info</p>&nbsp;
            <i class='bx bx-arrow-back bx-rotate-180' ></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

</x-admin_layout>
