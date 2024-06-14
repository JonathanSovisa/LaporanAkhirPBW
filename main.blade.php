<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  {{-- CSS untuk Datatables --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

  {{-- CSS untuk Boostrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>.:Admin MyUmkm - @yield('title'):.</title>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 bg-primary py-4">

        <div class="dropdown float-right">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-sliders"></i> User
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#"> <i class="bi bi-person-circle"></i> {{ Auth::user()->name ?? "" }} </a>
              <a class="dropdown-item" href="/user"> <i class="bi bi-gear"></i> Change Password</a>
              <a class="dropdown-item" href="/logout"> <i class="bi bi-box-arrow-right"></i> Log Out</a>
            </div>
          </div>

      </div>
    </div>

    <div class="row vh-100">
      <div class="col-md-2 bg-light">
        <div class="card mt-4">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link {{ ($key == "home") ? "active":"" }}" id="v-pills-home-tab" href="/home" role="tab">Home</a>
            <a class="nav-link {{ ($key == "masterdata") ? "active":"" }}" id="v-pills-profile-tab" href="/masterdata" role="tab">Master Data</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="/about" role="tab">About</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="/faq" role="tab">FAQ</a>
          </div>
        </div>
      </div>

      <div class="col-md-10 bg-light">
        <div class="card mt-4">
          <div class="card-header">
            @yield('title')
          </div>
          <div class="card-body">
            @yield('artikel')  <!-- This is where the child view content will be rendered -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
  <script>
    new DataTable('#example');
  </script>

</body>
</html>
