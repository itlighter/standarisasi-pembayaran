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
            <li class="breadcrumb-item small mb-1" style="--bs-breadcrumb-divider: '>';"><a class="text-decoration-none" href="/dashboard/"><i class="fa-solid fa-house"></i></a></li>
            <li class="breadcrumb-item small mb-1" style="--bs-breadcrumb-divider: '>';"><a class="text-decoration-none" href="/dashboard#v-pills-petunjuk-tab">Petunjuk Pembayaran</a></li>
            <li class="breadcrumb-item active small mb-1 text-dark" aria-current="page" style="--bs-breadcrumb-divider: '>';">Identifikasi Sewa</li>
        </ol>
        </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="row g-0">
        <!-- Sidebar -->
        <div class="col-md-3 position-relative">
            <div class="nav flex-column nav-pills position-sticky top-0 p-2" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="min-height:inherit;">
                <button class="nav-link mb-1 text-start" id="v-pills-informasi-tab" onclick="window.location.href='/dashboard#v-pills-informasi-tab'"  data-bs-toggle="collapse" data-bs-target="#submenu-informasi" type="button" role="button" aria-controls="submenu-informasi" aria-expanded="false">Informasi</button>
                <div class="collapse ps-4 mt-1 mb-1" id="submenu-informasi">
                    <div class="nav flex-column">
                        <a draggable="false" href="#" class="nav-link">Submenu 1</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 2</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 3</a>
                        <a draggable="false" href="#" class="nav-link">Submenu 4</a>
                    </div>
                </div>
                <button class="nav-link active text-start" id="v-pills-petunjuk-tab" onclick="window.location.href='/dashboard#v-pills-petunjuk-tab'" data-bs-toggle="collapse" data-bs-target="#submenu-petunjuk" type="button" role="button" aria-controls="submenu-informasi" aria-expanded="false">Petunjuk Teknis</button>
                <div class="collapse show ps-4 mt-1 mb-1" id="submenu-petunjuk">
                    <div class="nav nav-pills flex-column">
                        <div class="nav-link active d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#petunjuk-submenu" type="button" role="button" aria-controls="petunjuk-submenu" aria-expanded="false">
                            <a draggable="false" class="text-decoration-none flex-grow-1 change text-white">Sewa</a>
                            <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="Sewa" data-bs-content="<strong> Sewa Tanah dan Bangunan:</strong> Sewa Gedung, Sewa Ruang untuk ATM, Sewa lahan untuk wallsign/pilonsign yang bebannya diamortisasi<br><strong> SELAIN Sewa Tanah dan bangunan:</strong> Sewa Mesin Fotocopy, Printer, Scanner, Mesin Hitung Uang, Scanner" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse show ps-4 mt-1 mb-1 panduan" id="petunjuk-submenu">
                            <div class="nav flex-column">
                                <div class="nav-link active d-flex align-items-center justify-content-between" id="panduan" data-bs-toggle="collapse" data-bs-target="" type="button" role="button" aria-controls="" aria-expanded="false">
                                    <a draggable="false" class="text-decoration-none flex-grow-1 change text-white">Dengan Bantuan</a>
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
                                                <a draggable="false" href="/dashboard/sewa?page=stb" class="nav-link url">Dokumen Syarat Pembayaran</a>
                                                <a draggable="false" href="/dashboard/sewa?page=stb&tab=penginputan" class="nav-link url">Penginputan Pembayaran</a>
                                                <a draggable="false" href="/dashboard/sewa?page=stb&tab=pajak" class="nav-link disabled">Pajak</a>
                                                <a draggable="false" href="/dashboard/sewa?page=stb&tab=form" class="nav-link disabled">Form-form</a>
                                            </div>
                                        </div>
                                        <a draggable="false" class="nav-link"  data-bs-toggle="collapse" data-bs-target="#sstb" type="button" role="button" aria-controls="sstb" aria-expanded="false">Sewa Selain Tanah dan Bangunan</a>
                                        <div class="collapse ps-4 mt-1 mb-1" id="sstb">
                                            <div class="nav flex-column">
                                                <a draggable="false" href="/dashboard/sewa?page=sstb" class="nav-link url">Dokumen Syarat Pembayaran</a>
                                                <a draggable="false" href="/dashboard/sewa?page=sstb&tab=penginputan" class="nav-link url">Penginputan Pembayaran</a>
                                                <a draggable="false" href="/dashboard/sewa?page=sstb&tab=pajak" class="nav-link disabled">Pajak</a>
                                                <a draggable="false" href="/dashboard/sewa?page=sstb&tab=form" class="nav-link disabled">Form-form</a>
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
                <button class="nav-link mb-1 text-start text-primary" id="v-pills-perpajakan-tab" onclick="window.location.href='/dashboard#v-pills-perpajakan-tab'"  data-bs-toggle="collapse" data-bs-target="#submenu-perpajakan" type="button" role="button" aria-controls="submenu-perpajakan" aria-expanded="false">Perpajakan</button>
                <div class="collapse ps-4 mt-1 mb-1" id="submenu-perpajakan">
                    <div class="nav flex-column">
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 1</a>
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 2</a>
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 3</a>
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 4</a>
                    </div>
                </div>
                <button class="nav-link mb-1 text-start text-primary" id="v-pills-opitem-tab" onclick="window.location.href='/dashboard#v-pills-open-tab'"  data-bs-toggle="collapse" data-bs-target="#submenu-opitem" type="button" role="button" aria-controls="submenu-opitem" aria-expanded="false">Open Item</button>
                <div class="collapse ps-4 mt-1 mb-1" id="submenu-opitem">
                    <div class="nav flex-column">
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 1</a>
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 2</a>
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 3</a>
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 4</a>
                    </div>
                </div>
                <button class="nav-link mb-1 text-start text-primary" id="v-pills-buktipotong-tab" onclick="window.location.href='/dashboard#v-pills-buktipotong-tab'"  data-bs-toggle="collapse" data-bs-target="#submenu-buktipotong" type="button" role="button" aria-controls="submenu-buktipotong" aria-expanded="false">Bukti Potong</button>
                <div class="collapse ps-4 mt-1 mb-1" id="submenu-buktipotong">
                    <div class="nav flex-column">
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 1</a>
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 2</a>
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 3</a>
                        <a draggable="false" href="#" class="nav-link text-primary">Submenu 4</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-1 mt-1 bg-primary rounded-3 position-sticky" id="sidebar-icon" style="top: 0; width: 15px; max-height: 100vh;"><div class="arrow left position-absolute" style="top: 50%; left: 5px;"></div></div>
        <!-- Content -->
        <div class="col-md ps-1 h-100" id="v-pills-tabContent" style="min-height: 70vh;">
            <div class="mt-1" id="sewa1">
                <div class="bg-primary w-100 p-1" style="height: 30px;"><p class="text-white collapse-fsize">Identifikasi</p></div>
                <?php if (session()->getFlashdata('errorQ')) : ?>
                    <div class="alert alert-danger mw-100 mx-2 mt-1">
                        <?php echo session()->getFlashdata('errorQ'); ?>
                    </div>
                <?php endif; ?>
                <?= validation_list_errors() ?>

                <?= form_open('dashboard/sewa'); ?>
                <p class="collapse-fsize p-custom">Apakah Transaksi ini tergolong sewa tanah dan bangunan (sewa gedung, ruang ATM, lahan u Pilonsign/Wallsign)?</p>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q1" value="1" id="q1-1">
                <label class="collapse-fsize form-check-label" for="q1-1">Ya</label><br>
                <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q1" value="2" id="q1-2">
                <label class="collapse-fsize form-check-label" for="q1-2">Tidak</label>
                <div class="collapse" id="showSewa1" style="margin-bottom: -10px;">
                    <p class="collapse-fsize p-custom">Apakah total sewa gedung yang dibayarkan < Rp.200jt?</p>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q2" value="1" id="q2-1">
                    <label class="collapse-fsize form-check-label" for="q2-1">Ya</label><br>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q2" value="2" id="q2-2">
                    <label class="collapse-fsize form-check-label" for="q2-2">Tidak</label>
                    <div class="collapse" id="show200-1" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Perjanjian sewa-menyewa dibuat harus dengan notarill</p>
                    </div>
                    <div class="collapse" id="show200-2" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Perjanjian sewa-menyewa dapat dibuat tanpa notarill</p>
                    </div>
                    <p class="collapse-fsize p-custom">Apakah Vendor merupakan Orang Pribadi?</p>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q3" value="1" id="q3-1">
                    <label class="collapse-fsize form-check-label" for="q3-1">Ya</label><br>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q3" value="2" id="q3-2">
                    <label class="collapse-fsize form-check-label" for="q3-2">Tidak</label>
                    <div class="mb-1 collapse" id="showVendor" style="margin-bottom: -10px;">
                        <p class="collapse-fsize p-custom">Apakah pemilik merupakan Pengusaha Kena Pajak (PKP)?</p>
                        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q4" value="1" id="q4-1">
                        <label class="collapse-fsize form-check-label" for="q4-1">Ya</label><br>
                        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q4" value="2" id="q4-2">
                        <label class="collapse-fsize form-check-label" for="q4-2">Tidak</label>
                        <div class="collapse" id="showPKP1" style="margin-bottom: -10px;">
                            <p class="bg-secondary collapse-fsize">Pemilik Gedung menerbitkan Faktur Pajak dan menjadi dokumen syarat pembayaran</p>
                        </div>
                        <div class="collapse" id="showPKP3" style="margin-bottom: -10px;">
                            <p class="bg-secondary collapse-fsize">Pemilik/Vendor tidak menerbitkan faktur pajak, tidak perlu melampirkan faktur</p>
                        </div>
                        <p class="collapse-fsize p-custom">Apakah total sewa gedung yang dibayarkan > Rp.10Jt??</p>
                        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q5" value="1" id="q5-1">
                        <label class="collapse-fsize form-check-label" for="q5-1">Ya</label><br>
                        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q5" value="2" id="q5-2">
                        <label class="collapse-fsize form-check-label" for="q5-2">Tidak</label>
                        <div class="collapse" id="showBumn" style="margin-bottom: -10px;">
                            <div class="collapse" id="showNominal1" style="margin-bottom: -10px;">
                                <p class="bg-secondary collapse-fsize" id="pnominal">1. PPN di pungut oleh BSI, sehingga akan mengurangi nominal yang dibayarkan ke vendor<br>2. Beban akan diamortisasi sesuai dengan jangka waktu dalam OJS, sehingga metode transaksi yang harus dipilih oleh User adalah "Amortisasi"</p>
                            </div>
                            <p class="collapse-fsize p-custom">Apakah vendor termasuk BUMN dan atau anak usaha yang masuk kedalam KMK No.240 Tahun 2022</p>
                            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q6" value="1" id="q6-1">
                            <label class="collapse-fsize form-check-label" for="q6-1">Ya</label><br>
                            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q6" value="2" id="q6-2">
                            <label class="collapse-fsize form-check-label" for="q6-2">Tidak</label>
                            <div class="collapse" id="showBumn1" style="margin-bottom: -10px;">
                                <p class="bg-secondary collapse-fsize">Faktur Pajak yang dikeluarkan oleh Vendor kode awalnya "04" atau "01"</p>
                            </div>
                            <div class="collapse" id="showBumn2" style="margin-bottom: -10px;">
                                <p class="bg-secondary collapse-fsize">Faktur pajak yang dikeluarkan oleh Vendor kode awalnya "03"</p>
                            </div>
                        </div>
                        <div class="collapse" id="showNominal2" style="margin-bottom: -10px;">
                            <p class="bg-secondary collapse-fsize" id="pnominall">1. PPN disetorkan oleh Vendor, sehingga tidak mengurangi nominal yang dibayarkan ke vendor.<br>2. Beban akan dibuku sekaligus, sehingga metode transaksi yang harus dipilih oleh User adalah "Sekaligus"</p>
                        </div>
                    </div>
                    <p class="collapse-fsize p-custom">Apakah Pajak Penghasilan atas sewa menjadi kewajiban PEMILIK dalam Perjanjian sewa?</p>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q7" value="1" id="q7-1">
                    <label class="collapse-fsize form-check-label" for="q7-1">Ya</label><br>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q7" value="2" id="q7-2">
                    <label class="collapse-fsize form-check-label" for="q7-2">Tidak</label>
                    <div class="collapse" id="showPph" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Sewa Tanah dan bangunan dikenakan PPh 4 ayat (2) sewa sebesar 10% dari nilai sewa. PPh tsb dipotong dari pembayaran sewa BSI ke vendor sehingga nominal yang diterima vendor adalah 90% dari nilai sewa</p>
                    </div>
                    <div class="collapse" id="showPph2" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Pajak Penghasilan sesuai ketentuan Perpajakan adalah kewajiban dari Pemilik dan harus dipotong dari pembayaran yang akan diterima pemilik</p>
                    </div>
                </div>
                <div class="collapse" id="showSewa2" style="margin-bottom: -10px;">
                    <p class="collapse-fsize p-custom">Apakah total sewa yang dibayarkan < Rp.200jt?</p>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q8" value="1" id="q8-1">
                    <label class="collapse-fsize form-check-label" for="q8-1">Ya</label><br>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q8" value="2" id="q8-2">
                    <label class="collapse-fsize form-check-label" for="q8-2">Tidak</label>
                    <div class="collapse" id="show2200-1" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Perjanjian sewa-menyewa dibuat harus dengan notarill</p>
                    </div>
                    <div class="collapse" id="show2200-2" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Perjanjian sewa-menyewa dapat dibuat tanpa notarill</p>
                    </div>
                    <p class="collapse-fsize p-custom">Apakah Vendor merupakan Orang Pribadi?</p>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q9" value="1" id="q9-1">
                    <label class="collapse-fsize form-check-label" for="q9-1">Ya</label><br>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q9" value="2" id="q9-2">
                    <label class="collapse-fsize form-check-label" for="q9-2">Tidak</label>
                    <div class="mb-1 collapse" id="showVendor1" style="margin-bottom: -10px;">
                        <p class="collapse-fsize p-custom">Apakah pemilik merupakan Pengusaha Kena Pajak (PKP)?</p>
                        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q10" value="1" id="q10-1">
                        <label class="collapse-fsize form-check-label" for="q10-1">Ya</label><br>
                        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q10" value="2" id="q10-2">
                        <label class="collapse-fsize form-check-label" for="q10-2">Tidak</label>
                        <div class="collapse" id="showPKP2" style="margin-bottom: -10px;">
                            <p class="bg-secondary collapse-fsize">Pemilik Gedung menerbitkan Faktur Pajak dan menjadi dokumen syarat pembayaran</p>
                        </div>
                        <div class="collapse" id="showPKP4" style="margin-bottom: -10px;">
                            <p class="bg-secondary collapse-fsize">Pemilik Gedung tidak menerbitkan Faktur Pajak, tidak perlu menerbitkan faktur</p>
                        </div>
                        <p class="collapse-fsize p-custom">Apakah total sewa yang dibayarkan > Rp.10Jt??</p>
                        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q11" value="1" id="q11-1">
                        <label class="collapse-fsize form-check-label" for="q11-1">Ya</label><br>
                        <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q11" value="2" id="q11-2">
                        <label class="collapse-fsize form-check-label" for="q11-2">Tidak</label>
                        <div class="collapse" id="showBumn3" style="margin-bottom: -10px;">
                            <div class="collapse" id="showNominal11" style="margin-bottom: -10px;">
                                <p class="bg-secondary collapse-fsize">1. PPN di pungut oleh BSI, sehingga akan mengurangi nominal yang dibayarkan ke vendor<br>2. Beban akan diamortisasi sesuai dengan jangka waktu dalam OJS, sehingga metode transaksi yang harus dipilih oleh User adalah "Amortisasi"</p>
                            </div>
                            <div class="collapse" id="showNominal12" style="margin-bottom: -10px;">
                                <p class="bg-secondary collapse-fsize">1. PPN disetorkan oleh Vendor, sehingga tidak mengurangi nominal yang dibayarkan ke vendor.<br>2. Beban akan dibuku sekaligus, sehingga metode transaksi yang harus dipilih oleh User adalah "Sekaligus"</p>
                            </div>
                            <p class="collapse-fsize p-custom">Apakah vendor termasuk BUMN dan atau anak usaha yang masuk kedalam KMK No.240 Tahun 2022</p>
                            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q12" value="1" id="q12-1">
                            <label class="collapse-fsize form-check-label" for="q12-1">Ya</label><br>
                            <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q12" value="2" id="q12-2">
                            <label class="collapse-fsize form-check-label" for="q12-2">Tidak</label>
                            <div class="collapse" id="showBumn11" style="margin-bottom: -10px;">
                                <p class="bg-secondary collapse-fsize">Termasuk perusahaan tertentu yang dimiliki secara langsung oleh BUMN (KMK No.240 Tahun 2022)</p>
                            </div>
                            <div class="collapse" id="showBumn12" style="margin-bottom: -10px;">
                                <p class="bg-secondary collapse-fsize">Bukan termasuk perusahaan tertentu yang dimiliki secara langsung oleh BUMN (KMK No.240 Tahun 2022)</p>
                            </div>
                        </div>
                    </div>
                    <p class="collapse-fsize p-custom">Apakah Pajak Penghasilan atas sewa menjadi kewajiban PEMILIK dalam Perjanjian sewa?</p>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q13" value="1" id="q13-1">
                    <label class="collapse-fsize form-check-label" for="q13-1">Ya</label><br>
                    <input class="collapse-fsize ms-1 form-check-input" type="radio" name="q13" value="2" id="q13-2">
                    <label class="collapse-fsize form-check-label" for="q13-2">Tidak</label>
                    <div class="collapse" id="showPph1" style="margin-bottom: -10px;">
                        <p class="bg-secondary collapse-fsize">Sewa Tanah dan bangunan dikenakan PPh 4 ayat (2) sewa sebesar 2% dari nilai sewa. PPh tsb dipotong dari pembayaran sewa BSI ke vendor sehingga nominal yang diterima vendor adalah 90% dari nilai sewa</p>
                    </div>
                </div>
                <div class="mt-3 collapse" id="showSewa3">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col" class="collapse-fsize">No</th>
                                <th scope="col" class="collapse-fsize">Dokumen</th>
                                <th scope="col" class="collapse-fsize">Tandatangan</th>
                                <th scope="col" class="collapse-fsize">Scan warna</th>
                                <th scope="col" class="collapse-fsize">Stempel Tanggal</th>
                                <th scope="col" class="collapse-fsize" style="background-color: #fdb345;">Perhatikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="collapse-fsize">Persetujuan Nota Analisa Sewa Properti</td>
                                <td class="collapse-fsize">RCEO & Deputy Ops</td>
                                <td class="collapse-fsize">-</td>
                                <td class="collapse-fsize">-</td>
                                <td class="collapse-fsize">pajak penghasilan ditanggung siapa</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="collapse-fsize">Perjanjian sewa bermaterai</td>
                                <td class="collapse-fsize">Kepala Unit Kerja</td>
                                <td class="collapse-fsize">Yes</td>
                                <td class="collapse-fsize">-</td>
                                <td class="collapse-fsize">pajak penghasilan ditanggung siapa</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="collapse-fsize">Kuitansi</td>
                                <td class="collapse-fsize">Pemilik Bangunan</td>
                                <td class="collapse-fsize">Yes</td>
                                <td class="collapse-fsize">Yes</td>
                                <td class="collapse-fsize">isi lengkap semua isian</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td class="collapse-fsize">Faktur Pajak</td>
                                <td class="collapse-fsize">Pemilik Bangunan</td>
                                <td class="collapse-fsize">Yes</td>
                                <td class="collapse-fsize">Yes</td>
                                <td class="collapse-fsize" id="kodefaktur">kode awal 03</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td class="collapse-fsize">Berita acara expired dokumen*</td>
                                <td class="collapse-fsize">-</td>
                                <td class="collapse-fsize">-</td>
                                <td class="collapse-fsize">-</td>
                                <td class="collapse-fsize">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <button class="border-0 text-center w-25 bg-secondary" id="footerDashboard" style="margin-top: 35px; margin-left: 35%; margin-bottom: 80px;">Selanjutnya</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<div>
    <footer class="sticky-bottom bg-primary mx-3" style="height: 30px; margin-top: 25px;"></footer>
</div>
<script src="<?= base_url('bootstrap/js/custom.js') ?>"></script>
<script src="<?= base_url('bootstrap/js/custom1.js') ?>"></script>
<?= $this->endSection() ?>