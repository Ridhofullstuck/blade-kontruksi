@extends('layouts.utama')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Selamat Datang<span> Di LvConstruction</span></h2>
                        <p data-aos="fade-up">LvConstruction menjadi mitra pilihan utama dalam membangun masa depan melalui
                            solusi konstruksi yang unggul dan berkelanjutan. Kami berkomitmen untuk memberikan hasil terbaik
                            dengan mengutamakan kualitas, keamanan, dan ketepatan waktu dalam setiap proyek yang kami
                            kerjakan.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="/about" class="btn-get-started">Tentang
                            LvConstruction</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active" style="background-image: url(img/hero-carousel/hero-carousel-1.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(img/hero-carousel/hero-carousel-2.jpg)"></div>
            <div class="carousel-item" style="background-image: url(img/hero-carousel/hero-carousel-3.jpg)"></div>
            <div class="carousel-item" style="background-image: url(img/hero-carousel/hero-carousel-4.jpg)"></div>
            <div class="carousel-item" style="background-image: url(img/hero-carousel/hero-carousel-5.jpg)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Layanan Kami</h2>
                <p>LvConstruction ingin memberikan layanan yang terbaik untuk para client</p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(img/constructions-1.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Renovasi dan Restorasi</h4>
                                    <p> Kami menghidupkan kembali bangunan bersejarah melalui proses restorasi yang cermat
                                        dan memberikan sentuhan modern melalui proyek renovasi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(img/constructions-2.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Pembangunan Infrastruktur</h4>
                                    <p>Kami memiliki keahlian dalam membangun jalan, jembatan, pelabuhan, dan fasilitas
                                        infrastruktur lainnya yang mendukung pertumbuhan ekonomi dan konektivitas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(img/constructions-3.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Pembangunan Komersial</h4>
                                    <p>Dari perencanaan hingga penyelesaian, kami menghadirkan solusi konstruksi yang
                                        memenuhi kebutuhan proyek komersial seperti pusat perbelanjaan, kantor, dan kompleks
                                        industri.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(img/constructions-4.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Pembangunan Perumahan</h4>
                                    <p>Dari hunian mewah hingga hunian berskala besar, kami merancang dan membangun rumah
                                        dengan perhatian terhadap detail dan kualitas yang tinggi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Keunggulan</h2>
                <p>LvConstruction memberikan keunggulan yang terbaik untuk para client dengan keunggulan dibawah ini</p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-person-digging"></i>
                        </div>
                        <h3>Keahlian Teknisi dan Pengalaman</h3>
                        <p>Perusahaan konstruksi profesional memiliki tim ahli yang terlatih dan berpengalaman dalam berbagai aspek konstruksi.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-toolbox"></i>
                        </div>
                        <h3>Manajemen Proyek yang Efisien</h3>
                        <p>Jasa konstruksi sering dilengkapi dengan manajer proyek yang terampil dalam merencanakan, mengorganisir, dan mengawasi setiap tahap proyek.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-tower-observation"></i>
                        </div>
                        <h3>Akses ke Sumber Daya dan Jaringan</h3>
                        <p>Perusahaan konstruksi yang mapan memiliki jaringan luas dengan pemasok, subkontraktor, dan profesional terkait lainnya.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-user-check"></i>
                        </div>
                        <h3>Kepatuhan Regulasi</h3>
                        <p>Jasa konstruksi yang berpengalaman tahu persis regulasi apa yang perlu diikuti dan berkomitmen untuk memastikan bahwa proyek Anda memenuhi semua persyaratan teknis yang berlaku.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-building-lock"></i>
                        </div>
                        <h3>Kontrol Kualitas yang Ketat</h3>
                        <p>Perusahaan konstruksi serius tentang menjaga reputasi dan kualitas pekerjaan mereka. Mereka sering melakukan pengujian dan inspeksi rutin untuk memastikan bahwa pekerjaan dilakukan dengan standar tertinggi.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-helmet-safety"></i>
                        </div>
                        <h3>Fokus pada Keamanan</h3>
                        <p>Keselamatan adalah aspek krusial dalam konstruksi. Jasa konstruksi profesional memiliki program pelatihan dan prosedur keselamatan yang ketat untuk melindungi pekerja, pemilik proyek, dan masyarakat sekitar.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
