@extends('layout.main')
@section('title', 'Dasboard')

@section('content')
    
@include('layout.sidebaruser')
            <div id="main-content">
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-12 card p-4" style="height: 100vh;">
                            
                            <div class="row row-cols-1 row-cols-md-2 g-4">

                                @for ($i = 1; $i <= 10 ; $i++)
                                <div class="col">
                                    <div class="card shadow">
                                      <img src="assets/images/test.jpg" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title">Berita {{$i}}</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex align-items-center ">
                                            <img src="assets/images/profil.png" alt="" style="width: 40px">
                                            <p class="my-0 mx-2 fs-6 fw-bold">John Doe</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                @endfor

                                
                                
                              </div>
                            
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <script>
    </script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
@endsection