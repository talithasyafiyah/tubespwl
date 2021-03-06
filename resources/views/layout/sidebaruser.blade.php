<div id="app">
  <div id="sidebar" class="active">
      <div class="sidebar-wrapper active">
          <div class="sidebar-header">
              <div class="d-flex justify-content-between">
                  <div class="toggler">
                      <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                  </div>
              </div>
          </div>
          <div class="sidebar-menu">
              <ul class="menu">
                  <li class="sidebar-item {{ Request::is('dashSiswa') ? 'active' : '' }}">
                      <a href="/dashSiswa" class='sidebar-link'>
                          <i class="bi bi-house-door-fill"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sidebar-title">Tables</li>
                  <li class="sidebar-item {{ Request::is('Siswa') ? 'active' : '' }} || {{ Request::is('Profil') ? 'active' : '' }} || {{ Request::is('Profil/store') ? 'active' : '' }} || {{ Request::is('Profil/{id}') ? 'active' : '' }} || {{ Request::is('Profilupdate/{id}') ? 'active' : '' }}">
                      <a href="/Siswa" class='sidebar-link'>
                          <i class="bi bi-people-fill"></i>
                          <span>Data Siswa</span>
                      </a>
                  </li>

                  <li class="sidebar-item {{ Request::is('Tabungan') ? 'active' : '' }}">
                      <a href="/Tabungan" class='sidebar-link'>
                          <i class="fa-solid fa-hand-holding-dollar"></i>
                          <span>Menabung</span>
                      </a>
                  </li>
                  
                  <li class="sidebar-title">Other</li>

                  <li class="sidebar-item {{ Request::is('Report') ? 'active' : '' }}">
                      <a href="/Report" class='sidebar-link'>
                          <i class="fa-solid fa-print"></i>
                          <span>Report</span>
                      </a>
                  </li>

              </ul>
          </div>
          <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>
  </div>
  <div id="main" class='layout-navbar'>
      <header class='mb-3'>
          <nav class="navbar navbar-expand navbar-light ">
              <div class="container-fluid">
                  <a href="#" class="burger-btn d-block">
                      <i class="bi bi-justify fs-3"></i>
                  </a>

                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item dropdown me-1">
                              <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class='bi bi-envelope bi-sub fs-4 text-gray-600'></i>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                  <li>
                                      <h6 class="dropdown-header">Mail</h6>
                                  </li>
                                  <li><a class="dropdown-item" href="#">No new mail</a></li>
                              </ul>
                          </li>
                          <li class="nav-item dropdown me-3">
                              <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                  <li>
                                      <h6 class="dropdown-header">Notifications</h6>
                                  </li>
                                  <li><a class="dropdown-item">No notification available</a></li>
                              </ul>
                          </li>
                      </ul>
                      <div class="dropdown">
                          <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                              <div class="user-menu d-flex">
                                  <div class="user-name text-end me-3">
                                      <h6 class="mb-0 text-gray-600">{{auth()->user()->username}}</h6>
                                      <p class="mb-0 text-sm text-gray-600">{{auth()->user()->level}}</p>
                                  </div>
                                  <div class="user-img d-flex align-items-center">
                                      <div class="avatar avatar-md">
                                          <img src="{{asset('assets/images/faces/1.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <h6 class="dropdown-header">Hello, {{auth()->user()->username}}!</h6>
                            </li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                      </div>
                  </div>
              </div>
          </nav>
      </header>

<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

<script src="assets/js/main.js"></script>
</body>

</html>