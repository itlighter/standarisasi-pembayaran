<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="mt-2 mx-3 p-3" style="height: 70px;">
    <img src="<?= base_url('image/Picture4.png') ?>" alt="gambar" id="sm-img">
</div>
<div class="mx-3 border border-top-0 border-start-0 border-end-0 border-primary position-relative">
    <div class="position-absolute top-50 start-50 translate-middle">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item small mb-1"><a class="text-decoration-none" href="../">Dashboard</a></li>
            <li class="breadcrumb-item small mb-1"><a class="text-decoration-none" href="../#v-pills-petunjuk-tab">Petunjuk Pembayaran</a></li>
            <li class="breadcrumb-item small mb-1"><a class="text-decoration-none" href="petunjuk/sewa">Identifikasi Sewa</a></li>
            <li class="breadcrumb-item active small mb-1" aria-current="page">Sewa</li>
        </ol>
        </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="row mt-2 ms-1 d-flex align-items-stretch">
        <!-- Sidebar -->
        <div class="col-md-2 bg-secondary custom-border-1 h-100 pt-5 nav flex-column nav-pills position-sticky top-0" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="min-height:inherit;">
            <button class="ms-2 nav-link text-start text-black" id="v-pills-informasi-tab" data-bs-toggle="collapse" data-bs-target="#submenu-informasi" type="button" role="button" aria-controls="submenu-informasi" aria-expanded="false">Informasi</button>
            <div class="collapse ps-4 mt-1 mb-1" id="submenu-informasi">
                <div class="nav flex-column">
                    <a href="../#v-pills-informasi-tab" class="nav-link text-black">Informasi</a>
                    <a href="#" class="nav-link text-black">Submenu 1</a>
                    <a href="#" class="nav-link text-black">Submenu 2</a>
                    <a href="#" class="nav-link text-black">Submenu 3</a>
                    <a href="#" class="nav-link text-black">Submenu 4</a>
                </div>
            </div>
            <button class="ms-2 nav-link active text-start text-black collapsed" id="v-pills-petunjuk-tab" data-bs-toggle="collapse" data-bs-target="#submenu-petunjuk" type="button" role="button" aria-controls="submenu-informasi" aria-expanded="false">Petunjuk Pembayaran</button>
            <div class="ps-4 mt-1 mb-1" id="submenu-petunjuk">
                <div class="nav nav-pills flex-column">
                    <a href="../#v-pills-petunjuk-tab" class="nav-link text-black">Petunjuk Pembayaran</a>
                    <div class="nav-link active d-flex align-items-center justify-content-between">
                        <a href="/dashboard/petunjuk/sewa" class="text-decoration-none flex-grow-1 text-black">Sewa</a>
                        <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-sanitize="false" data-bs-trigger="focus" data-bs-title="Sewa" data-bs-content="<strong> Sewa Tanah dan Bangunan:</strong> Sewa Gedung, Sewa Ruang untuk ATM, Sewa lahan untuk wallsign/pilonsign yang bebannya diamortisasi<br><strong> SELAIN Sewa Tanah dan bangunan:</strong> Sewa Mesin Fotocopy, Printer, Scanner, Mesin Hitung Uang, Scanner" class="icon-link link-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Informasi" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>
                        </a>
                    </div>
                    <div class="ps-4 mt-1 mb-1" id="petunjuk-submenu">
                        <div class="nav flex-column">
                            <a href="#" class="text-black nav-link active" id="v-pills-informasi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dokumen Syarat Pembayaran</a>
                            <a href="#" class="text-black nav-link" id="v-pills-input-tab" data-bs-toggle="pill" data-bs-target="#v-pills-input" type="button" role="tab" aria-controls="v-pills-input" aria-selected="true">Penginputan Pembayaran</a>
                            <a href="#" class="text-black nav-link" id="v-pills-informasi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pajak" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Pajak</a>
                            <a href="#" class="text-black nav-link" id="v-pills-informasi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-form" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Form-form</a>
                        </div>
                    </div>
                    <div class="nav-link d-flex align-items-center justify-content-between">
                        <a href="#" class="text-decoration-none flex-grow-1 text-black">Jasa</a>
                        <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-sanitize="false" data-bs-trigger="focus" data-bs-title="<strong>Jasa</strong>" data-bs-content="> Jasa Notaris Sewa Gedung / Lahan / Ruang ATM<br>> Beban Keamanan<br>> Pemeliharaan & Perbaikan Gedung/Rumah BSI<br>> Pemeliharaan & Perbaikan Instansi Milik BSI" class="icon-link link-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Informasi" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>
                        </a>
                    </div>
                    <a href="#" class="nav-link text-black">Listrik</a>
                    <div class="nav-link d-flex align-items-center justify-content-between">
                        <a href="#" class="text-decoration-none flex-grow-1 text-black">Vendor</a>
                        <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-sanitize="false" data-bs-trigger="focus" data-bs-title="<strong>Vendor</strong>" data-bs-content="Dokumen yang diperlukan dan petunjuk penginputan untuk mendaftarkan vendor baru, mengubah data vendor yang telah diapproved dan menambahkan rekening baru" class="icon-link link-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Informasi" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <button class="ms-2 nav-link text-start text-black" id="v-pills-perpajakan-tab" data-bs-toggle="collapse" data-bs-target="#submenu-perpajakan" type="button" role="button" aria-controls="submenu-perpajakan" aria-expanded="false">Perpajakan</button>
            <div class="collapse ps-4 mt-1 mb-1" id="submenu-perpajakan">
                <div class="nav flex-column">
                    <a href="../#v-pills-perpajakan-tab" class="nav-link text-black">Perpajakan</a>
                    <a href="#" class="nav-link text-black">Submenu 1</a>
                    <a href="#" class="nav-link text-black">Submenu 2</a>
                    <a href="#" class="nav-link text-black">Submenu 3</a>
                    <a href="#" class="nav-link text-black">Submenu 4</a>
                </div>
            </div>
            <button class="ms-2 nav-link text-start text-black" id="v-pills-opitem-tab" data-bs-toggle="collapse" data-bs-target="#submenu-opitem" type="button" role="button" aria-controls="submenu-opitem" aria-expanded="false">Open Item</button>
            <div class="collapse ps-4 mt-1 mb-1" id="submenu-opitem">
                <div class="nav flex-column">
                    <a href="../#v-pills-opitem-tab" class="nav-link text-black">Open Item</a>
                    <a href="#" class="nav-link text-black">Submenu 1</a>
                    <a href="#" class="nav-link text-black">Submenu 2</a>
                    <a href="#" class="nav-link text-black">Submenu 3</a>
                    <a href="#" class="nav-link text-black">Submenu 4</a>
                </div>
            </div>
            <button class="ms-2 nav-link text-start text-black" id="v-pills-buktipotong-tab" data-bs-toggle="collapse" data-bs-target="#submenu-buktipotong" type="button" role="button" aria-controls="submenu-buktipotong" aria-expanded="false">Bukti Potong</button>
            <div class="collapse ps-4 mt-1 mb-1" id="submenu-buktipotong">
                <div class="nav flex-column">
                    <a href="../#v-pills-buktipotong-tab" class="nav-link text-black">Bukti Potong</a>
                    <a href="#" class="nav-link text-black">Submenu 1</a>
                    <a href="#" class="nav-link text-black">Submenu 2</a>
                    <a href="#" class="nav-link text-black">Submenu 3</a>
                    <a href="#" class="nav-link text-black">Submenu 4</a>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="col-md tab-content" id="v-pills-tabContent">
            <?php if (session()->q1 == 1) : ?>
                <?= view_cell('\App\Libraries\Widget::stb', ['nominal' => session()->q2, 'nominal1' => session()->q5, 'pribadi' => session()->q3, 'pkp' => session()->q4, 'wapu' => session()->q6, 'pph' => session()->q7]) ?>
            <?php endif; ?>
            <?php if (session()->q1 == 2) : ?>
                <?= view_cell('\App\Libraries\Widget::sstb', ['nominal' => session()->q8, 'nominal1' => session()->q11, 'pribadi' => session()->q9, 'pkp' => session()->q10, 'wapu' => session()->q12, 'pph' => session()->q13]) ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div>
    <footer class="sticky-bottom bg-primary mx-3" style="height: 30px; margin-top: 25px;"></footer>
</div>
<script src="<?= base_url('bootstrap/js/imgModal.js') ?>"></script>
<script src="<?= base_url('bootstrap/js/sidebarCollapse1.js') ?>"></script>
<?= $this->endSection() ?>