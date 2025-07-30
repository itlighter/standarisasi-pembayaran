<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="mt-2 mx-3 p-3" style="height: 70px;">
    <img src="<?= base_url('image/Picture4.png') ?>" alt="gambar" id="sm-img">
</div>
<div class="mx-3 border border-top-0 border-start-0 border-end-0 border-primary position-relative">
    <div class="position-absolute top-50 start-50 translate-middle">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item small mb-1" style="--bs-breadcrumb-divider: '>';"><a class="text-decoration-none" href="/dashboard/3"><i class="fa-solid fa-house"></i></a></li>
            <li class="breadcrumb-item small mb-1" style="--bs-breadcrumb-divider: '>';"><a class="text-decoration-none" href="/dashboard/3#v-pills-petunjuk-tab">Petunjuk Pembayaran</a></li>
            <li class="breadcrumb-item small mb-1" style="--bs-breadcrumb-divider: '>';"><a class="text-decoration-none" href="/dashboard/petunjuk/sewa/3">Identifikasi Sewa</a></li>
            <li class="breadcrumb-item active small mb-1 text-black" style="--bs-breadcrumb-divider: '>';" aria-current="page">Sewa</li>
        </ol>
        </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="row g-0">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="col-md-3 position-relative">
            <div class="nav flex-column nav-pills position-sticky top-0 p-2" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="min-height:inherit;">
                <div class="text-start fw-bold d-flex align-items-center justify-content-between">
                    <span class="menu-label d-inline">Standarisasi Pembayaran</span>
                    <img id="test123" src="<?= base_url('image/caret-left.svg') ?>" data-src-left="<?= base_url('image/caret-left.svg') ?>" data-src-right="<?= base_url('image/caret-right.svg') ?>" width="25" height="25" class="ms-2" style="cursor: pointer;">
                </div>
                <hr>
                <button class="nav-link d-flex align-items-center gap-2" id="v-pills-informasi-tab" data-bs-toggle="collapse" data-bs-target="#submenu-informasi" type="button" role="button" aria-controls="submenu-informasi" aria-selected="false">
                    <img src="<?= base_url('image/info.png') ?>" width="25" height="25">
                    <span class="menu-label d-inline">Informasi</span>
                </button>
                <div class="collapse ps-4 mt-1 mb-1" id="submenu-informasi">
                    <div class="nav flex-column">
                        <a href="#" draggable="false" class="nav-link">Submenu 1</a>
                        <a href="#" draggable="false" class="nav-link">Submenu 2</a>
                        <a href="#" draggable="false" class="nav-link">Submenu 3</a>
                        <a href="#" draggable="false" class="nav-link">Submenu 4</a>
                    </div>
                </div>
                <button class="nav-link active d-flex align-items-center gap-2" id="v-pills-petunjuk-tab" data-bs-toggle="collapse" data-bs-target="#submenu-petunjuk" type="button" role="button" aria-controls="submenu-petunjuk" aria-selected="false">
                    <img src="<?= base_url('image/bill.png') ?>" width="25" height="25">
                    <span class="menu-label d-inline">Petunjuk Pembayaran</span>
                </button>
                <div class="collapse show ps-4 mt-1 mb-1" id="submenu-petunjuk">
                    <div class="nav nav-pills flex-column">
                        <div class="nav-link active d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#petunjuk-submenu" type="button" role="button" aria-controls="petunjuk-submenu" aria-expanded="false">
                            <a href="#" class="text-decoration-none flex-grow-1 change text-white">Sewa</a>
                            <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="Sewa" data-bs-content="<strong> Sewa Tanah dan Bangunan:</strong> Sewa Gedung, Sewa Ruang untuk ATM, Sewa lahan untuk wallsign/pilonsign yang bebannya diamortisasi<br><strong> SELAIN Sewa Tanah dan bangunan:</strong> Sewa Mesin Fotocopy, Printer, Scanner, Mesin Hitung Uang, Scanner" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse show ps-4 mt-1 mb-1" id="petunjuk-submenu">
                            <div class="nav flex-column">
                                <a class="nav-link" href="<?= base_url("dashboard/petunjuk/sewa/3") ?>">Proses</a>
                                <a class="nav-link <?= ($_GET['page'] == 'stb') ? 'active' : ''; ?>" data-bs-toggle="collapse" data-bs-target="#stb" type="button" role="button" aria-controls="stb" aria-expanded="false">Sewa Tanah dan Bangunan</a>
                                <div class="collapse <?= ($_GET['page'] == 'stb') ? 'show' : ''; ?> ps-4 mt-1 mb-1" id="stb">
                                    <div class="nav flex-column">
                                        <?php if ($_GET['page'] == 'stb') : ?>
                                            <a draggable="false" class="nav-link <?= !isset($_GET['tab']) || $jsonData['tab'] == 'syarat' ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-syarat" type="button" role="tab" aria-controls="v-pills-syarat" aria-selected="false">Dokumen Syarat Pembayaran</a>
                                            <a draggable="false" class="nav-link <?= isset($_GET['tab']) && $jsonData['tab'] == 'penginputan' ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-penginputan" type="button" role="tab" aria-controls="v-pills-penginputan" aria-selected="false">Penginputan Pembayaran</a>
                                            <a draggable="false" class="nav-link <?= (!isset($_SESSION['Answered']) || (isset($_SESSION['Answered']) && session()->q1 == 2)) ? 'disabled' : ''; ?> <?= isset($_GET['tab']) && isset($_SESSION['Answered']) && session()->q1 == 1 && $jsonData['tab'] == 'pajak' ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-pajak" type="button" role="tab" aria-controls="v-pills-pajak" aria-selected="false">Pajak</a>
                                            <a draggable="false" class="nav-link <?= (!isset($_SESSION['Answered']) || (isset($_SESSION['Answered']) && session()->q1 == 2)) ? 'disabled' : ''; ?> <?= isset($_GET['tab']) && isset($_SESSION['Answered']) && session()->q1 == 1 && $jsonData['tab'] == 'form' ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-form" type="button" role="tab" aria-controls="v-pills-form" aria-selected="false">Form-form</a>
                                        <?php elseif ($_GET['page'] == 'sstb') : ?>
                                            <a draggable="false" href="#" class="nav-link">Dokumen Syarat Pembayaran</a>
                                            <a draggable="false" href="#" class="nav-link">Penginputan Pembayaran</a>
                                            <a draggable="false" href="#" class="nav-link  <?= (!isset($_SESSION['Answered']) || (isset($_SESSION['Answered']) && session()->q1 == 2)) ? 'disabled' : ''; ?>">Pajak</a>
                                            <a draggable="false" href="#" class="nav-link  <?= (!isset($_SESSION['Answered']) || (isset($_SESSION['Answered']) && session()->q1 == 2)) ? 'disabled' : ''; ?>">Form-form</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <a class="nav-link <?= ($_GET['page'] == 'sstb') ? 'active' : ''; ?>"  data-bs-toggle="collapse" data-bs-target="#sstb" type="button" role="button" aria-controls="sstb" aria-expanded="false">Sewa Selain Tanah dan Bangunan</a>
                                <div class="collapse <?= ($_GET['page'] == 'sstb') ? 'show' : ''; ?> ps-4 mt-1 mb-1" id="sstb">
                                    <div class="nav flex-column">
                                        <?php if ($_GET['page'] == 'sstb') : ?>
                                            <a draggable="false" class="nav-link <?= !isset($_GET['tab']) || $jsonData['tab'] == 'syarat' ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-syarat" type="button" role="tab" aria-controls="v-pills-syarat" aria-selected="false">Dokumen Syarat Pembayaran</a>
                                            <a draggable="false" class="nav-link <?= isset($_GET['tab']) && $jsonData['tab'] == 'penginputan' ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-penginputan" type="button" role="tab" aria-controls="v-pills-penginputan" aria-selected="false">Penginputan Pembayaran</a>
                                            <a draggable="false" class="nav-link <?= (!isset($_SESSION['Answered']) || (isset($_SESSION['Answered']) && session()->q1 == 1)) ? 'disabled' : ''; ?> <?= isset($_GET['tab']) && isset($_SESSION['Answered']) && session()->q1 == 2 && $jsonData['tab'] == 'pajak' ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-pajak" type="button" role="tab" aria-controls="v-pills-pajak" aria-selected="false">Pajak</a>
                                            <a draggable="false" class="nav-link <?= (!isset($_SESSION['Answered']) || (isset($_SESSION['Answered']) && session()->q1 == 1)) ? 'disabled' : ''; ?> <?= isset($_GET['tab']) && isset($_SESSION['Answered']) && session()->q1 == 2 && $jsonData['tab'] == 'form' ? 'active' : ''; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-form" type="button" role="tab" aria-controls="v-pills-form" aria-selected="false">Form-form</a>
                                        <?php elseif ($_GET['page'] == 'stb') : ?>
                                            <a draggable="false" href="#" class="nav-link">Dokumen Syarat Pembayaran</a>
                                            <a draggable="false" href="#" class="nav-link">Penginputan Pembayaran</a>
                                            <a draggable="false" href="#" class="nav-link <?= (!isset($_SESSION['Answered']) || (isset($_SESSION['Answered']) && session()->q1 == 1)) ? 'disabled' : ''; ?>">Pajak</a>
                                            <a draggable="false" href="#" class="nav-link <?= (!isset($_SESSION['Answered']) || (isset($_SESSION['Answered']) && session()->q1 == 1)) ? 'disabled' : ''; ?>">Form-form</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#jasa-submenu" type="button" role="button" aria-controls="jasa-submenu" aria-expanded="false">
                            <a href="#" class="text-decoration-none flex-grow-1 change">Jasa</a>
                            <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="<strong>Jasa</strong>" data-bs-content="> Jasa Notaris Sewa Gedung / Lahan / Ruang ATM<br>> Beban Keamanan<br>> Pemeliharaan & Perbaikan Gedung/Rumah BSI<br>> Pemeliharaan & Perbaikan Instansi Milik BSI" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse ps-4 mt-1 mb-1" id="jasa-submenu">
                            <div class="nav flex-column">
                                <a href="#" draggable="false" class="nav-link">Submenu 1</a>
                                <a href="#" draggable="false" class="nav-link">Submenu 2</a>
                            </div>
                        </div>
                        <div class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#listrik-submenu" type="button" role="button" aria-controls="listrik-submenu" aria-expanded="false">
                            <a href="#" class="text-decoration-none flex-grow-1 change">Listrik</a>
                            <!-- <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="<strong>Jasa</strong>" data-bs-content="> Jasa Notaris Sewa Gedung / Lahan / Ruang ATM<br>> Beban Keamanan<br>> Pemeliharaan & Perbaikan Gedung/Rumah BSI<br>> Pemeliharaan & Perbaikan Instansi Milik BSI" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a> -->
                        </div>
                        <div class="collapse ps-4 mt-1 mb-1" id="listrik-submenu">
                            <div class="nav flex-column">
                                <a href="#" draggable="false" class="nav-link">Submenu 1</a>
                                <a href="#" draggable="false" class="nav-link">Submenu 2</a>
                            </div>
                        </div>
                        <div class="nav-link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#vendor-submenu" type="button" role="button" aria-controls="vendor-submenu" aria-expanded="false">
                            <a href="#" class="text-decoration-none flex-grow-1 change">Vendor</a>
                            <a data-bs-toggle="popover" role="button" data-bs-html="true" data-bs-trigger="hover" data-bs-title="<strong>Vendor</strong>" data-bs-content="Dokumen yang diperlukan dan petunjuk penginputan untuk mendaftarkan vendor baru, mengubah data vendor yang telah diapproved dan menambahkan rekening baru" class="icon-link link-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle focusCollapse" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse ps-4 mt-1 mb-1" id="vendor-submenu">
                            <div class="nav flex-column">
                                <a href="#" draggable="false" class="nav-link">Submenu 1</a>
                                <a href="#" draggable="false" class="nav-link">Submenu 1</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="nav-link d-flex align-items-center gap-2" id="v-pills-perpajakan-tab" data-bs-toggle="collapse" data-bs-target="#submenu-perpajakan" type="button" role="button" aria-controls="submenu-perpajakan" aria-selected="false">
                    <img src="<?= base_url('image/pajak.png') ?>" width="25" height="25">
                    <span class="menu-label d-inline">Open Item</span>
                </button>
                <div class="collapse ps-4 mt-1 mb-1" id="submenu-perpajakan">
                    <div class="nav flex-column">
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 1</a>
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 2</a>
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 3</a>
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 4</a>
                    </div>
                </div>
                <button class="nav-link d-flex align-items-center gap-2" id="v-pills-open-tab" data-bs-toggle="collapse" data-bs-target="#submenu-opitem" type="button" role="button" aria-controls="submenu-opitem" aria-selected="false">
                    <img src="<?= base_url('image/opitem.png') ?>" width="25" height="25">
                    <span class="menu-label d-inline">Open Item</span>
                </button>
                <div class="collapse ps-4 mt-1 mb-1" id="submenu-opitem">
                    <div class="nav flex-column">
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 1</a>
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 2</a>
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 3</a>
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 4</a>
                    </div>
                </div>
                <button class="nav-link d-flex align-items-center gap-2" id="v-pills-buktipotong-tab" data-bs-toggle="collapse" data-bs-target="#submenu-buktipotong" type="button" role="buton" aria-controls="submenu-buktipotong" aria-selected="false">
                    <img src="<?= base_url('image/buktipotong.png') ?>" width="25" height="25">
                    <span class="menu-label d-inline">Bukti Potong</span>
                </button>
                <div class="collapse ps-4 mt-1 mb-1" id="submenu-buktipotong">
                    <div class="nav flex-column">
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 1</a>
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 2</a>
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 3</a>
                        <a href="#" draggable="false" class="nav-link text-primary">Submenu 4</a>
                    </div>
                </div>
                <div class="collapse" id="iconsAssemble">
                    <ul class="list-unstyled">
                        <li class="mb-2 licon" data-link="v-pills-informasi"><img src="<?= base_url('image/info.png') ?>" width="25" height="25" data-bs-toggle="tooltip" data-bs-title="Informasi"></li>
                        <li class="mb-2 licon" data-link="v-pills-petunjuk"><img src="<?= base_url('image/bill.png') ?>" width="25" height="25" data-bs-toggle="tooltip" data-bs-title="Petunjuk Pembayaran"></li>
                        <li class="mb-2 licon" data-link="v-pills-perpajakan"><img src="<?= base_url('image/pajak.png') ?>" width="25" height="25" data-bs-toggle="tooltip" data-bs-title="Perpajakan"></li>
                        <li class="mb-2 licon" data-link="v-pills-open"><img src="<?= base_url('image/opitem.png') ?>" width="25" height="25" data-bs-toggle="tooltip" data-bs-title="Open Item"></li>
                        <li class="licon"  data-link="v-pills-buktipotong"><img src="<?= base_url('image/buktipotong.png') ?>" width="25" height="25" data-bs-toggle="tooltip" data-bs-title="Bukti Potong"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="col-md ps-1 h-100 border-start border-1 tab-content" id="v-pills-tabContent">
            <?php if (($_GET['page'] == 'stb' && !isset($_SESSION['Answered'])) || ($_GET['page'] == 'stb' && isset($_SESSION['Answered']))) : ?>
                <?= view_cell('\App\Libraries\Widget::stb', ['nominal' => session()->q2, 'nominal1' => session()->q5, 'pribadi' => session()->q3, 'pkp' => session()->q4, 'wapu' => session()->q6, 'pph' => session()->q7]) ?>
            <?php endif; ?>
            <?php if (($_GET['page'] == 'sstb' && !isset($_SESSION['Answered'])) || ($_GET['page'] == 'sstb' && isset($_SESSION['Answered']))) : ?>
                <?= view_cell('\App\Libraries\Widget::sstb', ['nominal' => session()->q8, 'nominal1' => session()->q11, 'pribadi' => session()->q9, 'pkp' => session()->q10, 'wapu' => session()->q12, 'pph' => session()->q13]) ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div>
    <footer class="sticky-bottom bg-primary mx-3" style="height: 30px; margin-top: 25px;"></footer>
</div>
<script id="server-data" type="application/json">
    <?= json_encode($jsonData); ?>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.2.0/crypto-js.min.js"></script>
<script src="<?= base_url('bootstrap/js/custom3.js') ?>"></script>
<script src="<?= base_url('bootstrap/js/imgModal.js') ?>"></script>
<?= $this->endSection() ?>