<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="mt-2 mx-3 p-3" style="height: 70px;">
    <a href="<?= base_url('dashboard') ?>">
        <img src="<?= base_url('image/Picture4.png') ?>" alt="gambar" id="sm-img">
    </a>
</div>
<div class="mx-3 border border-top-0 border-start-0 border-end-0 border-primary position-relative">
    <div class="position-absolute top-50 start-50 translate-middle">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active small mb-1" aria-current="page" style="--bs-breadcrumb-divider: '>';"><i class="fa-solid fa-house"></i></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-fluid position-relative">
    <div class="row g-0">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="nav flex-column nav-pills p-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active mb-1 text-start" id="v-pills-informasi-tab" data-element="menu">Informasi</button>
                <div class="collapse submenu1 ps-4 mt-1 mb-1" id="submenu-informasi">
                    <div class="nav flex-column">
                        <a draggable="false" href="#" class="nav-link">Submenu 1</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 2</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 3</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 4</a>
                    </div>
                </div>
                <button class="nav-link mb-1 text-start" id="v-pills-petunjuk-tab" data-element="menu">Petunjuk Teknis</button>
                <div class="collapse submenu1 ps-4 mt-1 mb-1" id="submenu-petunjuk">
                    <div class="nav nav-pills flex-column">
                        <div class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#petunjuk-submenu" type="button" role="button" aria-controls="petunjuk-submenu" aria-expanded="false">
                            <a draggable="false" class="text-decoration-none flex-grow-1 change">Sewa</a>
                            <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="Sewa" data-bs-content="<strong> Sewa Tanah dan Bangunan:</strong> Sewa Gedung, Sewa Ruang untuk ATM, Sewa lahan untuk wallsign/pilonsign yang bebannya diamortisasi<br><strong> SELAIN Sewa Tanah dan bangunan:</strong> Sewa Mesin Fotocopy, Printer, Scanner, Mesin Hitung Uang, Scanner" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse ps-4 mt-1 mb-1 panduan" id="petunjuk-submenu">
                            <div class="nav flex-column">
                                <div class="nav-link d-flex align-items-center justify-content-between" id="panduan">
                                    <a draggable="false" href="<?= base_url('dashboard/petunjuk/sewa') ?>" class="link-stretched text-decoration-none flex-grow-1 change">Dengan Bantuan</a>
                                    <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="<strong>Petunjuk Sewa Dengan Bantuan</strong>" data-bs-content="Isi" class="icon-link link-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#bantuan" type="button" role="button" aria-controls="stb" aria-expanded="false">
                                    <a draggable="false" class="text-decoration-none flex-grow-1 change">Tanpa Bantuan</a>
                                    <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="<strong>Petunjuk Sewa Tanpa Bantuan</strong>" data-bs-content="Isi" class="icon-link link-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="collapse ps-4 mt-1 mb-1" id="bantuan">
                                    <div class="nav flex-column">
                                        <a draggable="false" class="nav-link" data-bs-toggle="collapse" data-bs-target="#stb" type="button" role="button" aria-controls="stb" aria-expanded="false">Sewa Tanah dan Bangunan</a>
                                        <div class="collapse ps-4 mt-1 mb-1" id="stb">
                                            <div class="nav flex-column">
                                                <a draggable="false" class="nav-link url">Dokumen Syarat Pembayaran</a>
                                                <a draggable="false" class="nav-link disabled">Pajak</a>
                                                <a draggable="false" class="nav-link url">Form-form</a>
                                            </div>
                                        </div>
                                        <a draggable="false" class="nav-link"  data-bs-toggle="collapse" data-bs-target="#sstb" type="button" role="button" aria-controls="sstb" aria-expanded="false">Sewa Selain Tanah dan Bangunan</a>
                                        <div class="collapse ps-4 mt-1 mb-1" id="sstb">
                                            <div class="nav flex-column">
                                                <a draggable="false" class="nav-link url">Dokumen Syarat Pembayaran</a>
                                                <a draggable="false" class="nav-link disabled">Pajak</a>
                                                <a draggable="false" class="nav-link url">Form-form</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#jasa-submenu" type="button" role="button" aria-controls="jasa-submenu" aria-expanded="false">
                            <a draggable="false" class="text-decoration-none flex-grow-1 change">Jasa</a>
                            <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="<strong>Jasa</strong>" data-bs-content="> Jasa Notaris Sewa Gedung / Lahan / Ruang ATM<br>> Beban Keamanan<br>> Pemeliharaan & Perbaikan Gedung/Rumah BSI<br>> Pemeliharaan & Perbaikan Instansi Milik BSI" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse ps-4 mt-1 mb-1" id="jasa-submenu">
                            <div class="nav flex-column">
                                <a draggable="false" href="#" class="nav-link">Submenu 1</a>
                                <a draggable="false" href="#" class="nav-link">Submenu 2</a>
                            </div>
                        </div>
                        <div class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#listrik-submenu" type="button" role="button" aria-controls="listrik-submenu" aria-expanded="false">
                            <a draggable="false" class="text-decoration-none flex-grow-1 change">Listrik</a>
                            <!-- <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="<strong>Jasa</strong>" data-bs-content="> Jasa Notaris Sewa Gedung / Lahan / Ruang ATM<br>> Beban Keamanan<br>> Pemeliharaan & Perbaikan Gedung/Rumah BSI<br>> Pemeliharaan & Perbaikan Instansi Milik BSI" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a> -->
                        </div>
                        <div class="collapse ps-4 mt-1 mb-1" id="listrik-submenu">
                            <div class="nav flex-column">
                                <a draggable="false" href="#" class="nav-link">Submenu 1</a>
                                <a draggable="false" href="#" class="nav-link">Submenu 2</a>
                            </div>
                        </div>
                        <div class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#vendor-submenu" type="button" role="button" aria-controls="vendor-submenu" aria-expanded="false">
                            <a draggable="false" class="text-decoration-none flex-grow-1 change">Vendor</a>
                            <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="<strong>Vendor</strong>" data-bs-content="Dokumen yang diperlukan dan petunjuk penginputan untuk mendaftarkan vendor baru, mengubah data vendor yang telah diapproved dan menambahkan rekening baru" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse ps-4 mt-1 mb-1" id="vendor-submenu">
                            <div class="nav flex-column">
                                <a draggable="false" href="#" class="nav-link">Submenu 1</a>
                                <a draggable="false" href="#" class="nav-link">Submenu 1</a>
                            </div>
                        </div>
                        <div class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#kaskecil-submenu" type="button" role="button" aria-controls="kaskecil-submenu" aria-expanded="false">
                            <a href="#" class="text-decoration-none flex-grow-1 change">Kas Kecil</a>
                            <!-- <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="<strong>Jasa</strong>" data-bs-content="> Jasa Notaris Sewa Gedung / Lahan / Ruang ATM<br>> Beban Keamanan<br>> Pemeliharaan & Perbaikan Gedung/Rumah BSI<br>> Pemeliharaan & Perbaikan Instansi Milik BSI" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a> -->
                        </div>
                        <div class="collapse ps-4 mt-1 mb-1" id="kaskecil-submenu">
                            <div class="nav flex-column">
                                <a href="#" draggable="false" class="nav-link">Submenu 1</a>
                                <a href="#" draggable="false" class="nav-link">Submenu 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="nav-link mb-1 text-start" id="v-pills-perpajakan-tab" data-element="menu">Perpajakan</button>
                <div class="collapse submenu1 ps-4 mt-1 mb-1" id="submenu-perpajakan">
                    <div class="nav flex-column">
                        <a draggable="false" class="nav-link" data-bs-toggle="collapse" data-bs-target="#perpajakan-submenu1" type="button" role="button" aria-controls="perpajakan-submenu1" aria-expanded="false">Submenu 1</a>
                        <div class="collapse ps-4 mt-1 mb-1" id="perpajakan-submenu1">
                            <div class="nav flex-column">
                                <a draggable="false" href="#" class="nav-link">Sewa Tanah dan Bangunan</a>
                                <a draggable="false" href="#" class="nav-link">Sewa Selain Tanah dan Bangunan</a>
                            </div>
                        </div>
                        <a draggable="false" href="#" class="nav-link">Submenu 2</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 3</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 4</a>
                    </div>
                </div>
                <button class="nav-link mb-1 text-start" id="v-pills-open-tab" data-element="menu">Open Item</button>
                <div class="collapse submenu1 ps-4 mt-1 mb-1" id="submenu-open">
                    <div class="nav flex-column">
                        <a draggable="false" href="#" class="nav-link">Submenu 1</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 2</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 3</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 4</a>
                    </div>
                </div>
                <button class="nav-link mb-1 text-start" id="v-pills-buktipotong-tab" data-element="menu">Bukti Potong</button>
                <div class="collapse submenu1 ps-4 mt-1 mb-1" id="submenu-buktipotong">
                    <div class="nav flex-column">
                        <a draggable="false" href="#" class="nav-link">Submenu 1</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 2</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 3</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 4</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-1 mt-1 bg-primary rounded-3 position-relative" id="sidebar-icon" style="top: 0; width: 15px;"><div class="arrow left position-absolute" style="top: 50%; left: 5px;"></div></div>
        <!-- Content -->
        <div class="col-md tab-content ps-1 border-start border-dark-subtle" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="v-pills-informasi" role="tabpanel" aria-labelledby="v-pills-informasi-tab" tabindex="0">
                <div class="row">
                    <div class="col-md border-end border-dark-subtle" style="min-height:70vh;">
                        <span>Isi Informasi 1</span>
                    </div>
                    <div class="col-md border-start border-dark-subtle" style="min-height:70vh;">
                        <img src="" class="mb-5" alt="gambar">
                        <p class="text-primary mb-5">CFA telah melakukan penyesuaian limit penunjang kinerja, untuk melihat dan mendownload memo sosialisasi perubahan PTO Penunjang Kinerja, klik gambar di atas</p>
                        <h6 class="text-primary mb-1">NPWP BSI</h6>
                        <p style="font-size: 12px; margin-bottom: -1px;">Anda dapat mendownload NPWP BSI dengan menekan tombol di bawah</p>
                        <button type="button" class="border-0 bg-primary text-white"
                                style="--bs-btn-padding-y: .2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .75rem; width: 200px; font-size: 12px;"><strong>Download NPWP</strong></button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-petunjuk" role="tabpanel" aria-labelledby="v-pills-petunjuk-tab" tabindex="0">
                <div class="row px-3 mt-2" style="min-height: 70vh;">
                    <div class="col">
                        <div class="row">
                            <div class="col-md me-3 border border-1 ps-3 pt-3 pe-3">
                                <div class="ps-2 pt-2 border border-1 mb-2 position-relative">
                                    <h5 style="margin-bottom: 0px;">SEWA</h5>
                                    <img src="<?= base_url('image/Picture1.png') ?>" alt="gambar" class="float-end sm-img">
                                    <p style="margin-bottom: 0px; font-size: 12px;">Gedung &#8226; Ruang</p>
                                    <p style="margin-top: 0px; font-size: 12px;">ATM &#8226; Lahan Wallsign</p>
                                    <a href="/dashboard/petunjuk/sewa" class="stretched-link"></a>
                                </div>
                                <a data-bs-toggle="collapse" href="#sewaCollapse" aria-expanded="false" aria-controls="sewaCollapse" class="icon-link float-end link-warning" style="position: relative; right: -12px; bottom: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Informasi" class="bi bi-info-circle float-end focusCollapse" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-md me-3 border border-1 ps-3 pt-3 pe-3">
                                <div class="ps-2 pt-2 border border-1 mb-2 position-relative">
                                    <h5 style="margin-bottom: 0px;">Jasa</h5>
                                    <img src="<?= base_url('image/OHVA6082.PNG') ?>" alt="gambar" class="float-end sm-img">
                                    <p style="margin-bottom: 0px; font-size: 12px;">Renovasi &#8226; EO</p>
                                    <p style="margin-top: 0px; font-size: 12px;">Pemasangan &#8226; Pengiriman</p>
                                </div>
                                <a data-bs-toggle="collapse" href="#jasaCollapse" aria-expanded="false" aria-controls="jasaCollapse" class="icon-link float-end link-warning" style="position: relative; right: -12px; bottom: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Informasi" class="bi bi-info-circle float-end focusCollapse" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-md me-3 border border-1 ps-3 pt-3 pe-3">
                                <div class="ps-2 pt-2 border border-1 mb-2 position-relative" style="height: 85px;">
                                    <h5 style="margin-bottom: 0px;">Listrik</h5>
                                    <img src="<?= base_url('image/Picture2.png') ?>" alt="gambar" class="float-end sm-img">
                                    <br>
                                    <p style="margin-bottom: 0px; font-size: 12px;">Air &#8226; PBB &#8226; Reklame</p>
                                </div>
                                <a data-bs-toggle="collapse" href="" aria-expanded="false" aria-controls="" class="icon-link float-end link-warning" style="position: relative; right: -12px; bottom: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Informasi" class="bi bi-info-circle float-end focusCollapse" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-md me-2 border border-1 ps-3 pt-3 pe-3">
                                <div class="ps-2 pt-2 border border-1 mb-2 position-relative">
                                    <h5 style="margin-bottom: 0px;">Vendor</h5>
                                    <img src="<?= base_url('image/Picture3.png') ?>" alt="gambar" class="float-end sm-img">
                                    <p style="margin-bottom: 0px; font-size: 12px;">Baru &#8226; Edit</p>
                                    <p style="margin-top: 0px; font-size: 12px;">Tambah Rekening</p>
                                </div>
                                <a data-bs-toggle="collapse" href="#vendorCollapse" aria-expanded="false" aria-controls="vendorCollapse" class="icon-link float-end link-warning" style="position: relative; right: -12px; bottom: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Informasi" class="bi bi-info-circle float-end focusCollapse" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-3 mt-2 me-2 border border-1 ps-3 pt-3 pe-3">
                                <div class="ps-2 pt-2 border border-1 mb-2 position-relative">
                                    <h5 style="margin-bottom: 0px;">Kas Kecil</h5>
                                    <img src="<?= base_url('image/Picture3.png') ?>" alt="gambar" class="float-end sm-img">
                                    <p style="margin-bottom: 0px; font-size: 12px;">Baru &#8226; Edit</p>
                                    <p style="margin-top: 0px; font-size: 12px;">Tambah Rekening</p>
                                </div>
                                <a data-bs-toggle="collapse" href="#vendorCollapse" aria-expanded="false" aria-controls="vendorCollapse" class="icon-link float-end link-warning" style="position: relative; right: -12px; bottom: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Informasi" class="bi bi-info-circle float-end focusCollapse" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-group">
                            <div class="collapse position-relative justify-content-center mt-2" id="sewaCollapse" data-bs-parent="#collapse-group">
                                <div class="border border-1 border-black position-absolute start-50 translate-middle-x p-2" style="height: 200px; width: 400px;">
                                    <h3 class="text-center">SEWA</h3>
                                    <p class="collapse-fsize">><strong> Sewa Tanah dan Bangunan:</strong> Sewa Gedung, Sewa Ruang untuk ATM, Sewa lahan untuk wallsign/pilonsign yang bebannya diamortisasi</p>
                                    <p class="collapse-fsize">><strong> SELAIN Sewa Tanah dan bangunan:</strong> Sewa Mesin Fotocopy, Printer, Scanner, Mesin Hitung Uang, Scanner</p>
                                </div>
                            </div>
                            <div class="collapse position-relative justify-content-center mt-2" id="vendorCollapse" data-bs-parent="#collapse-group">
                                <div class="border border-1 border-black position-absolute start-50 translate-middle-x p-2" style="height: 200px; width: 400px;">
                                    <h3 class="text-center">Vendor</h3>
                                    <p class="collapse-fsize">Dokumen yang diperlukan dan petunjuk penginputan untuk mendaftarkan vendor baru, mengubah data vendor yang telah diapproved dan menambahkan rekening baru</p>
                                </div>
                            </div>
                            <div class="collapse position-relative justify-content-center mt-2" id="jasaCollapse" data-bs-parent="#collapse-group">
                                <div class="border border-1 border-black position-absolute start-50 translate-middle-x p-2" style="height: 200px; width: 400px;">
                                    <h3 class="text-center">JASA</h3>
                                    <p class="collapse-fsize" style="margin-bottom: -5px;">> Jasa Notaris Sewa Gedung / Lahan / Ruang ATM</p>
                                    <p class="collapse-fsize" style="margin-bottom: -5px;">> Beban Keamanan</p>
                                    <p class="collapse-fsize" style="margin-bottom: -5px;">> Pemeliharaan & Perbaikan Gedung/Rumah BSI</p>
                                    <p class="collapse-fsize" style="margin-bottom: -5px;">> Pemeliharaan & Perbaikan Instansi Milik BSI</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade ps-1" id="v-pills-perpajakan" role="tabpanel" aria-labelledby="v-pills-perpajakan-tab" tabindex="0">
                <div class="row" style="min-height: 70vh;">
                    <div class="col border border-top-0 border-bottom-0 border-start-0 border-end-1 border-dark-subtle">
                        <p>Isi Perpajakan 1</p>
                    </div>
                    <div class="col border border-top-0 border-bottom-0 border-start-1 border-end-0 border-dark-subtle">
                        <p>Isi Perpajakan 2</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade ps-1" id="v-pills-open" role="tabpanel" aria-labelledby="v-pills-open-tab" tabindex="0">
                <div class="row" style="min-height: 70vh;">
                    <div class="col border border-top-0 border-bottom-0 border-start-0 border-end-1 border-dark-subtle">
                        <p>Isi Open Item 1</p>
                    </div>
                    <div class="col border border-top-0 border-bottom-0 border-start-1 border-end-0 border-dark-subtle">
                        <p>Isi Open Item 2</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade ps-1" id="v-pills-buktipotong" role="tabpanel" aria-labelledby="v-pills-buktipotong-tab" tabindex="0">
                <div class="row" style="min-height: 70vh;">
                    <div class="col border border-top-0 border-bottom-0 border-start-0 border-end-1 border-dark-subtle">
                        <p>Isi Bukti Potong 1</p>
                    </div>
                    <div class="col border border-top-0 border-bottom-0 border-start-1 border-end-0 border-dark-subtle">
                        <p>Isi Bukti Potong 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <footer class="sticky-bottom bg-primary mx-3" style="height: 30px; margin-top: 25px;"></footer>
</div>
<script src="<?= base_url('bootstrap/js/custom1.js') ?>"></script>
<?= $this->endSection() ?>