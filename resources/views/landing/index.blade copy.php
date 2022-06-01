@extends('layout.landing')
@section('title', 'Landing Page')

@section('content')
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="#" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <img src="landing/img/logo_pwl (1).png" width="80" height="80">
            <!-- <h2 class="m-0 text">SD Pelita Harapan</h2> -->
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#utama" class="nav-item nav-link">Utama</a>
                <a href="#tentang" class="nav-item nav-link" >Tentang</a>
                <!-- <a href="project.html" class="nav-item nav-link">Lainnya</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#informasi" class="dropdown-item">Informasi</a>
                        <a href="#berita" class="dropdown-item">Berita</a>
                        <a href="#keunggulan" class="dropdown-item">Keunggulan</a>
                    </div>
                </div>
                <a href="#kontak" class="nav-item nav-link">Kontak</a>
            </div>
            <a href="" class="btn rounded-0 py-4 px-lg-5 d-none d-lg-block">Daftar / Masuk<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s" id="utama">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='landing/img/sch.jpg'>">
                <img class="img-fluid" src="landing/img/sch.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-black animated slideInDown" style=" background-color:rgb(250, 228, 201); border-radius: 20px;  padding-left: 10px;" >Tabungan Siswa SD Pelita Harapan</h1>
                                <p class="fs-5 fw-medium mb-4 pb-0 " style="color: black; background-color:rgb(250, 228, 201); border-radius: 20px;  padding-left: 10px;">Selamat datang di website tabungan SD Pelita Harapan.</p>
                                <a href="" class="btn rounded-pill py-3 px-5 animated slideInLeft" >Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='landing/img/d2.jpg'>">
                <img class="img-fluid"src="landing/img/d2.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-black animated slideInDown">Tabungan SD Pelita Harapan yang terpercaya</h1>
                                <p class="fs-5 fw-medium  mb-4 pb-0" style="color: black;">Telah menyimpan dan mengurus tabungan murid SD Pelita Harapan selama 20 tahun lebih.</p>
                                <a href="" class="btn rounded-pill py-3 px-5 animated slideInLeft">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5" >
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4"  style="background-color: #f7ca7c">
                        <div class="btn-lg-square rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">1135</h1>
                    </div>
                    <h5 class="mb-3">Total Murid</h5>
                    <span>Dipercaya orang tua murid sebagat tempat menimbah ilmu anak mereka.</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s" >
                    <div class="d-flex align-items-center mb-4"  style="background-color: #f7ca7c">
                        <div class="btn-lg-square  rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">57</h1>
                    </div>
                    <h5 class="mb-3">Pengajar terbaik</h5>
                    <span>50 pengajar lebih yang sudah terakreditasi sangat baik.</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4" style="background-color: #f7ca7c">
                        <div class="btn-lg-square  rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">259</h1>
                    </div>
                    <h5 class="mb-3">Prestasi Akademik</h5>
                    <span>Prestasi para murid terbaik dari segi akademik.</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4" style="background-color: #f7ca7c">
                        <div class="btn-lg-square  rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">314</h1>
                    </div>
                    <h5 class="mb-3">Prestasi Non Akademik</h5>
                    <span>Prestasi dari para murid terbaik dari segi non akademik</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start --> -->

<a href="" id="informasi"></a>
    <!-- Service Start -->
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text" >Informasi</h6>
                <h1 class="mb-4">Informasi Seputar Tabungan </h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="landing/img/menabung3.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-info-circle fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Tumbuhkan Minat Menabung Sejak Dini</h4>
                            <p>Menabung tidak hanya baik untuk diri sendiri, tapi juga bermanfaat buat masa depan.Karena itulah, mengajarkan anak menabung sejak dini sangatlah penting.</p>
                            <a class="small fw-medium" href="https://jabarprov.go.id/index.php/news/43453/2021/08/10/Atalia-Tumbuhkan-Minat-Menabung-Sejak-Dini" style="color: #E45826">Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="landing/img/menabung1.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">7 Tips Menabung untuk Pelajar, Pasti Bisa!</h4>
                            <p>Menabung adalah salah kegiatan pengelolaan keuangan yang bertujuan untuk menyiapkan dana cadangan di kemudian hari.</p>
                            <a class="small fw-medium" href="https://bintangsekolahindonesia.com/tips/tips-menabung-untuk-pelajar/" style="color: #E45826">Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="landing/img/menabung2.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-check-square fa-3x"></i>
                            </div>
                            <h4 class="mb-3">12 Manfaat Menabung Sejak Dini untuk Masa Depan</h4>
                            <p>Menabung di usia dini dapat membuat anak menjadi mandiri di kemuadian hari.</p>
                            <a class="small fw-medium" href="https://www.qoala.app/id/blog/keuangan/tabungan/manfaat-menabung-sejak-dini/" style="color: #E45826">Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <a href="" id="tentang"></a>
        <!-- About Start -->
        <div class="container-fluid bg-light overflow-hidden my-3 px-lg-0">
            <div class="container about px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid h-100 w-100" src="landing/img/abt.png" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 pe-lg-0">
                            <h6 class="text">Tentang Kami</h6>
                            <h1 class="mb-5">20+ Tahun Berpengalaman dalam Menyimpan Tabungan Siswa</h1>
                            <p>Dengan membiasakan anak-anak menabung sejak dini, maka akan terbentuk juga kebiasaan serta pola pikirnya dalam mengatur keuangan.</p>
                            <p><i class="fa fa-check-circle text me-2"></i>Keamanan keuangan yang terjamin</p>
                            <p><i class="fa fa-check-circle text me-2"></i>Transparan dalam berbagai aspek</p>
                            <p><i class="fa fa-check-circle text me-2"></i>Dapat dipantau kapan saja</p>
                            <a href="" class="btn  rounded-pill py-3 px-5 mt-3">Lebih lanjut..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    <!-- Feature Start -->
    <a href="" id="keunggulan"></a>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0" >
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text">Kenapa Memilih Kami?</h6>
                        <h1 class="mb-4">Tabungan Siswa SD Pelita Harapan</h1>
                        <p class="mb-4 pb-2">Dengan memilih kami, keuangan dan masa depan anak anda akan terjamin. 
                            Kami telah berpengalaman 20 tahun lebih dalam menyimpan tabungan siswa/siswi  SD Pelita Harapan.
                            Berikut ini merupakan beberapa keunggulan kami : </p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square rounded-circle" style="background-color: #f7ca7c">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Kualitas</p>
                                        <h5 class="mb-0">Layanan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square rounded-circle"  style="background-color: #f7ca7c">
                                        <i class="fa fa-user-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Ahli</p>
                                        <h5 class="mb-0">Tenaga Kerja</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square rounded-circle"  style="background-color: #f7ca7c">
                                        <i class="fa fa-drafting-compass text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Gratis</p>
                                        <h5 class="mb-0">Konsultasi</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square rounded-circle"  style="background-color: #f7ca7c">
                                        <i class="fa fa-headphones text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Senantiasa</p>
                                        <h5 class="mb-0">Membantu</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="landing/img/excellent.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <a href="" id="berita"></a>
    <!-- Projects Start -->
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text">Berita</h6>
                <h1 class="mb-4">Kunjungi Berita Terbaru dari SD Pelita Harapan</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Seputar Sekolah</li>
                        <li class="mx-2" data-filter=".second">Tentang Pendidikan</li>
                        <li class="mx-2" data-filter=".third">Siswa Berprestasi</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="landing/img/rapat orangtua.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="landing/img/rapat orangtua.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    @foreach ($beritas as $berita)
                    <div class="pt-3">
                        <p class="text mb-0">Seputar Sekolah</p>
                        <hr class="text w-25 my-2">
                        <h5 class="lh-base">{{$berita->judul}}</h5>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="landing/img/lomba renang.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="landing/img/lomba renang.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text mb-0">Siswa Berprestasi</p>
                        <hr class="text w-25 my-2">
                        <h5 class="lh-base">Siswa SD Pelita Harapan memenangkan kompetisi renang antarsekolah</h5>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="landing/img/lab.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/lab.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text mb-0">Seputar sekolah</p>
                        <hr class="text w-25 my-2">
                        <h5 class="lh-base">SD Pelita Harapan membangun lab komputer terbaru</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="landing/img/sri.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="landing/img/sri.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text mb-0">Tentang pendidikan</p>
                        <hr class="text w-25 my-2">
                        <h5 class="lh-base">Sri Mulyani Harap UU HKPD Perbaiki Akses Kesehatan dan Pendidikan</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="landing/img/nadiem.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="landing/img/nadiem.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text mb-0">Tentang Pendidikan</p>
                        <hr class="text w-25 my-2">
                        <h5 class="lh-base">Kurikulum Merdeka ala Nadiem, Tak Ada Lagi Jurusan IPA-IPS di SMA</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="landing/img/lomba sains.jpeg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="landing/img/lomba sains.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text mb-0">Siswa berprestasi</p>
                        <hr class="text w-25 my-2">
                        <h5 class="lh-base">Tim sains SD Pelita Harapan mendapat posisi kedua dalam olimpiade sains siswa se kabupaten</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!--Team Start  -->
    <div class="container-xxl py-5" id="kontak">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text">Kontak</h6>
                <h1 class="mb-4">Anggota Kelompok 2</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="landing/img/team-1.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Talitha Syafiyah</h5>
                            <span>211402018</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="landing/img/team-2.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Murniwati Siahaan</h5>
                            <span>211402066</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="landing/img/team-3.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Dhani Dwi Septian Bangun</h5>
                            <span>211402120</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="landing/img/team-1.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Agnes Tryani Simbolon</h5>
                            <span>211402003</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="landing/img/team-2.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Muhammad Nurahman</h5>
                            <span>211402155</span>
                        </div>
                    </div>
                </div>
            </div>
      </div>
  <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-gradient footer mt-4 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-6">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-dark mb-4">Alamat</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Dr. T. Mansur No.9, Padang Bulan, Kota Medan, Sumatera Utara
                    </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope  me-3"></i>sdpelitaharapan@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-dark mb-4">Link Cepat</h5>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Kontak Kami</a>
                    <a class="btn btn-link" href="">Pelayanan Kami</a>
                    <a class="btn btn-link" href="">Syarat dan Ketentuan</a>
                    <a class="btn btn-link" href="">Dukungan</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-dark mb-4">Galeri Projek</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="landing/img/sch.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="landing/img/d2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="landing/img/sch.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="landing/img/d2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="landing/img/sch.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="landing/img/d2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container-fluid">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; SD Pelita Harapan 2022. All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection