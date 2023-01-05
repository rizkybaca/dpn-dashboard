<section class="detail_program" id="detail_program">
    <div class="card bg-dark text-white ">
        <img src="<?= base_url('assets/') ?>/img/baner1.png" class="card-img" alt="...">
        <div class=" card-img-overlay text-center text-bold font-weight-bolder mt-5">
            <div class="row" style="margin-top: 120px;">
                <div class="col "> <img src="<?= base_url('assets/') ?>/img/logo2.png" class="card-img" alt="..." style="width: 55px; height:55px; float:right;"></div>
                <div class="col "> <img src="<?= base_url('assets/') ?>/img/logo2.png" class="card-img" alt="..." style="width: 55px; height:55px; float:left;"></div>
            </div>
            <h1 class="card-title" style="margin-top: 20px; ">Cakrawala Mengabdi</h1>
            <p>Open Recruitment Volunteer Pengabdian Masyarakat </p>
            <p>Pandeglang, Provinsi Banten, Indonesia </p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="col-md-2 col-lg-2 btn btn-warning" style=" border-radius: 10px; ">Daftar Sekarang</button>
        </div>
    </div>

    <div class="card">
        <div class="container-fluid " style="background-color: #F8F8F8; ">
            <div class="row ms-4 mt-5">
                <div class="col-sm-5 col-md-4 mt-5">
                    <div class="card mb-2 ms-4">
                        <div class="card-body" style="padding: 40px; ">
                            <div class="row">
                                <p class="card-text" style="font-size:14px; color:#012970;"><b>Tanggal Pelaksanaan</b> </p>
                                <p class="card-text mt-0" style="font-size:14px;"><i class="fa-regular fa-calendar-days" style="font-size:14px; color:#012970;"></i>&nbsp;&nbsp; 23 - 29 November 2022</p>
                            </div>
                            <div class="row mt-3">
                                <p class="card-text" style="font-size:14px; color:#012970;"><b>Lokasi</b> </p>
                                <p class="card-text mt-0" style="font-size:14px;"><i class="fa-solid fa-location-dot" style="font-size:14px; color:#012970;"></i>&nbsp;&nbsp; 23 - 29 November 2022</p>

                            </div>
                            <div class="row mt-4">
                                <p class="card-text" style="font-size:14px; color:#012970;"><b>Batas Akhir Pendaftaran</b> </p>
                                <div class="col ">
                                    <p class="card-text " style="font-size:14px;">15 November 2022</p>
                                </div>
                                <div class="col">
                                    <p class="card-text" style="font-size:14px;">23.59 WIB</p>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">

                                <div class="countdown" style="font-size:14px; color:#012970;"> <b>Berakhir Dalam </b>
                                    <span id="timer"></span>
                                    <p class="card-text mt-0 mb-4" style="font-size:14px;"> Countdown</p>
                                </div>
                                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style=" border-radius: 10px; background:#012970;">
                                    Daftar Sekarang
                                </button>


                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog-centered modal-dialog modal-xl">

                                        <div class=" modal-content ">

                                            <div class="modal-header border-0 justify-content-center mt-3 ">
                                                <h5 class="modal-title " id="exampleModalLabel"><b>Pilih Jalur Program</b> </h5>
                                            </div>

                                            <div class="modal-body ">
                                                <!-- isian -->
                                                <div class="container mb-5">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
                                                            <div class="card border-0" style="width: 18rem;">

                                                                <div class="row mt-3 ms-3 ">
                                                                    <div class="col-lg-2">
                                                                        <div class="img" style="width:52px; height:52px;"><img src="<?= base_url('assets/img/icon/100_percen.png') ?>" class="card-img-top" alt="..." /></div>
                                                                    </div>
                                                                    <div class="col-lg-10">
                                                                        <div class="ms-3 mt-3"><b>Fully Funded</b></div>
                                                                    </div>
                                                                </div>

                                                                <div class="card-body ms-3">

                                                                    <p class="card-text">Seluruh biaya selama program ini berlangsung akan ditanggung oleh DPN</p>
                                                                </div>
                                                                <div class="text-end">
                                                                    <a href="#" class="text-end text-warning">Daftar Sekarang <i class="fa-solid fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
                                                            <div class="card border-0" style="width: 18rem;">

                                                                <div class="row mt-3 ms-3">
                                                                    <div class="col-lg-2">
                                                                        <div class="img" style="width:52px; height:52px;"><img src="<?= base_url('assets/img/icon/50_percen.png') ?>" class="card-img-top" alt="..." /></div>
                                                                    </div>
                                                                    <div class="col-lg-10">
                                                                        <div class="ms-3 mt-3"><b>Partially Funded</b></div>
                                                                    </div>
                                                                </div>

                                                                <div class="card-body ms-3">

                                                                    <p class="card-text">Sebagian biaya selama program ini berlangsung akan ditanggung oleh DPN</p>
                                                                </div>
                                                                <div class="text-end">
                                                                    <a href="#" class="text-end text-warning">Daftar Sekarang <i class="fa-solid fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
                                                            <div class="card border-0" style="width: 18rem;">

                                                                <div class="row mt-3 ms-3">
                                                                    <div class="col-lg-2">
                                                                        <div class="img" style="width:52px; height:52px;"><img src="<?= base_url('assets/img/icon/0_percen.png') ?>" class="card-img-top" alt="..." /></div>
                                                                    </div>
                                                                    <div class="col-lg-10">
                                                                        <div class="ms-3 mt-3"><b>Self Funded</b></div>
                                                                    </div>
                                                                </div>

                                                                <div class="card-body ms-3">

                                                                    <p class="card-text">Seluruh biaya selama program ini berlangsung akan ditanggung oleh Volunteer</p>
                                                                </div>
                                                                <div class="text-end">
                                                                    <a href="#" class="text-end text-warning">Daftar Sekarang <i class="fa-solid fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <!-- end isian -->
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!--end modal -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5  col-md-7 mt-5 mb-5">
                    <div class="card mb-5 ms-4 ">
                        <div class="card-body" style="padding: 40px; ">
                            <img src="<?= base_url('assets/') ?>/img/logo.png" class="card-img-top mt-4" alt="..." style="height: 90px; width: 180px">
                            <div class="card-body ">
                                <p class="card-text" style="font-size: 24px;"><b>Cakrawala Mengabdi</b> </p>
                                <p class="card-text text-secondary" style="font-size: 14px; margin-top:-10px;">Pandeglang, Banten, Indonesia</p>
                            </div>
                            <div class="row ms-1">
                                <div class="col-lg-3 ">
                                    <button type="button" class="btn btn-outline-secondary mb-3" style="border-radius: 12px; font-size:12px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Fully Funded</button>
                                </div>
                                <div class="col-lg-3 ">
                                    <button type="button" class="btn btn-outline-secondary " style="border-radius: 12px; font-size:12px; " disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Online</button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <p class="card-text" style="font-size: 18px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
                                <p class="card-text" style="font-size: 14px; margin-top:-10px;text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
                                <p class="card-text" style="font-size: 14px; margin-top:-10px;text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
                            </div>

                            <hr>
                            <div class="card-body">
                                <p class="card-text" style="font-size: 18px; margin-top:-20px;"><b>Manfaat Yang Akan Kamu Dapatkan</b> </p>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="row mt-3 manfaat-teks">
                                            <div class="col-lg-1 col-md-12">
                                                <span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">1</span>

                                            </div>
                                            <div class="col-lg-10 col-md-12 ms-4">
                                                <p class="card-text" style="font-size: 14px;">
                                                    <b>Upgrade Skill</b>
                                                    <br>Meningkatkan skill kamu baik softskill maupun hardskill

                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-lg-1 col-md-12">
                                                <span class="badge text-white rounded-pill " style="background-color: #012970;">2</span>
                                            </div>

                                            <div class="col-lg-10 col-md-12 ms-4">
                                                <p class="card-text" style="font-size: 14px;">
                                                    <b>Berkesempatan Menjadi Tim Internal</b>
                                                    <br>Dapatkan kesempatan untuk menjadi tim internal DPN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="row mt-3">
                                            <div class="col-lg-1 col-md-12">
                                                <span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">3</span>
                                            </div>
                                            <div class="col-lg-10 col-md-12 ms-4">
                                                <p class="card-text" style="font-size: 14px;">
                                                    <b>Relasi</b>
                                                    <br>Bangun relasi dengan pemuda dari seluruh Indonesia
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-lg-1 col-md-12">
                                                <span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">4</span>
                                            </div>
                                            <div class="col-lg-10 col-md-12 ms-4">
                                                <p class="card-text" style="font-size: 14px;">
                                                    <b>Give Away</b>
                                                    <br>Dapatkan hadiah menarik dari program yang diikuti
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <hr>
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 18px; margin-top:-20px;"><b>Persyaratan Delegasi</b> </p>
                                    <div class="row mt-3">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">1</span></div>
                                        <div class="col-lg-11 col-md-12">Berumur 17 – 35 tahun, baik pelajar, mahasiswa ataupun umum</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">2</span></div>
                                        <div class="col-lg-11 col-md-12">Berkomitmen mengikuti kegiatan dari awal sampai akhir kegiatan, yakni 05 – 15 Januari 2023</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">3</span></div>
                                        <div class="col-lg-11 col-md-12">Memiliki minat dalam pengabdian masyarakat dan bersungguh-sungguh dalam menjalankan kegiatan</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">4</span></div>
                                        <div class="col-lg-11 col-md-12">Mampu bekerja dalam tim</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">5</span></div>
                                        <div class="col-lg-11 col-md-12">Mengikuti seluruh tata cara pendaftaran</div>
                                    </div>
                                </div>

                                <hr>
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 18px; margin-top:-20px;"><b>Program Yang Dijalankan</b> </p>
                                    <div class="row mt-3">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">1</span></div>
                                        <div class="col-lg-11 col-md-12">Inspiration Class</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">2</span></div>
                                        <div class="col-lg-11 col-md-12">Medical Check-Up</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">3</span></div>
                                        <div class="col-lg-11 col-md-12">Waste Management & Coral Reef Transplant</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">4</span></div>
                                        <div class="col-lg-11 col-md-12">Micro, Small and Medium Enterprise (MSME) Development</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;">5</span></div>
                                        <div class="col-lg-11 col-md-12">Bidang Pengembangan Sumber Daya Manusia (PSDM)</div>
                                    </div>
                                </div>

                                <hr>
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 18px; margin-top:-20px;"><b>Preview Kegiatan</b> </p>
                                    <div class="row">
                                        <div class="container text-center my-1 ratio ratio-16x9">
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/yg8116aeD7E" style=" border-radius: 10px; " allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
